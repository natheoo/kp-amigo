<?php
class SyncController extends AppController{

	public function index(){}

	public function sync_dump(){
		if (!empty($this->request->data['submit'])) {
			$this->loadModel('Mddb');
			$this->loadModel('Waktusyncakhir');

			$this->Mddb->setDatabase('mddb');
			
			/* 1. get last synchronization time from mddb.waktusyncakhir */
			$last_sync = $this->Waktusyncakhir->find('first');

			/* 2. get list of operations happened after last synchronization from mddb.mddb */
			$changes = array();
			if (!empty($last_sync)) {
				$last_sync = $last_sync['Waktusyncakhir']['timestamp_sync'];
				$query_changes = "SELECT Mddb.jenis_op, Mddb.nama_tabel, Mddb.prim_key FROM mddb Mddb LEFT JOIN mddb m ";
				$query_changes .= "ON Mddb.nama_tabel = m.nama_tabel AND Mddb.prim_key = m.prim_key AND Mddb.mddb_id < m.mddb_id ";
				$query_changes .= "WHERE m.mddb_id IS NULL AND Mddb.timestamp_op > '$last_sync'";
				$changes = $this->Mddb->query($query_changes);
			}else{
				$query_changes = "SELECT Mddb.jenis_op, Mddb.nama_tabel, Mddb.prim_key FROM mddb Mddb LEFT JOIN mddb m ";
				$query_changes .= "ON Mddb.nama_tabel = m.nama_tabel AND Mddb.prim_key = m.prim_key AND Mddb.mddb_id < m.mddb_id ";
				$query_changes .= "WHERE m.mddb_id IS NULL";
				$changes = $this->Mddb->query($query_changes);
			}
			if (empty($changes)) {
				$this->set('info',"Belum ada perubahan data sejak sinkronisasi terakhir.");
				return;
			}

			/* get db and load all models */
			require_once('models.php');

			/* 3. get records as listed in the list obtained in step 2 */
			$sql = "USE $dbName;".PHP_EOL;
			for ($i=0; $i < sizeof($changes); $i++) { 
				$op = $changes[$i]['Mddb']['jenis_op']; /* get operation */
				$table_name = $changes[$i]['Mddb']['nama_tabel']; /* get table name */
				$pk = $changes[$i]['Mddb']['prim_key']; /* get primary key */
				
				/* get model name based on table name and set the database */
				$camel = Inflector::camelize($table_name);
				$ctrl = Inflector::singularize($camel);
				$this->$ctrl->setDatabase($dbName,'store');
				$this->$ctrl->useDbConfig = 'store';

				/* get name of primary key column */
				$pk_name_arr = $this->$ctrl->query("SHOW KEYS FROM $table_name WHERE Key_name = 'PRIMARY'");
				$pk_name = $pk_name_arr[0]['STATISTICS']['Column_name'];
				
				$record = $this->$ctrl->find('first',array('conditions' => array($pk_name => $pk)));

				$str_pk = $pk;
				if ($op != "delete") {
					$str_fields = "";
					$str_values = "";
					$str_set = "";
					$idx = 0;
					foreach ($record[$ctrl] as $field => $value) {
						$col_type = $this->$ctrl->query("SHOW FIELDS FROM $table_name WHERE Field = '$field'");
						
						if (strpos($col_type[0]['COLUMNS']['Type'], "int") !== FALSE) {
							$str_value = $value;
						}else{
							$str_value = "'$value'";
							if ($field == $pk_name) {
								$str_pk = "'$pk'";
							}
						}

						if ($op == "insert" || $op == "update") {
							$str_fields .= $field;
							$str_values .= $str_value;
							$str_set .= "$field = $str_value";
						}
						if ($idx < sizeof($record[$ctrl]) - 1) {
							$str_fields .= ", ";
							$str_values .= ", ";
							$str_set .= ", ";
						}
						$idx++;
					}
				}else{
					$col_type = $this->$ctrl->query("SHOW FIELDS FROM $table_name WHERE Field = '$pk_name'");
							
					if (strpos($col_type[0]['COLUMNS']['Type'], "int") === FALSE) {
						$str_pk = "'$pk'";
					}
				}
				
				if ($op == "insert" || $op == "update") {
					$sql .= "INSERT INTO $table_name($str_fields) VALUES ($str_values) ";
					$sql .= "ON DUPLICATE KEY UPDATE $str_set;".PHP_EOL;
				} elseif ($op == "delete") {
					$sql .= "DELETE FROM $table_name WHERE $pk_name = $str_pk;".PHP_EOL;
				}
			}

			/* write dump query to .sql file */
			date_default_timezone_set('Asia/Jakarta');
			$dumpDate = date("d-m-Y_H.i.s");
			$file_name = "D:\\".$dbName."_".$dumpDate.".sql";
			if (file_put_contents($file_name,$sql)) {
				/* update last synchronization time */
				$this->Waktusyncakhir->setDatabase('mddb');
				$last_sync = date("Y-m-d H:i:s");
				$this->Waktusyncakhir->query("TRUNCATE waktusyncakhir");
				$this->Waktusyncakhir->query("INSERT INTO waktusyncakhir(timestamp_sync) VALUES('".$last_sync."')");
				$this->set('success',"Database berhasil disinkronisasi.");
			}
		}
	}
}
?>