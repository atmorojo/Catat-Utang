<?php
	
	require_once '../bootstrap.php';
	
	use SimpleCrud\Database;
	
	$dsn	= 'sqlite:../db.sqlite3';
	$pdo	= new PDO($dsn);
	$db		= new Database($pdo);
	
	if (($handle = fopen("supplier.csv", "r")) !== FALSE) {
		while (($datas = fgetcsv($handle, 1000, ",")) !== FALSE) {
			foreach ($datas as $data) {
				echo $data;
				echo "<br />";
				$db->supplierTable[] = [
				'nama' => $data
				];
			}
		}
	}
	
