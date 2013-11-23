USE bimbo;
INSERT INTO bayar_bon(id, no_bon, jumlah_bon, bayar_bon, tgl_byr, kd_plg, kd_kasir) VALUES (48387, '1', 3, 1, '2013-11-19', '5', '1') ON DUPLICATE KEY UPDATE id = 48387, no_bon = '1', jumlah_bon = 3, bayar_bon = 1, tgl_byr = '2013-11-19', kd_plg = '5', kd_kasir = '1';
