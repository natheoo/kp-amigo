<?php
class HelloShell extends AppShell{
	public function main(){
		$this->out('Hello world');
	}

	public function hey_there(){
		$this->out('Hey there '.$this->args[0]);
	}

	public function testInflector(){
		$this->out(Inflector::tableize($this->args[0]));
	}
}
?>