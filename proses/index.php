<?php
	
	require_once '../bootstrap.php';
	
	use SimpleCrud\Database;
	
	$dsn	= 'sqlite:../db.sqlite3';
	$pdo	= new PDO($dsn);
	$db		= new Database($pdo);
			
	if (key($_GET) == 'bayar'){
		$db->transaksiTable[$_GET['bayar']] = [
			'status' => 2
		];
	} elseif (key($_GET) == 'hapus') {
		$db->transaksiTable[$_GET['hapus']] = [
			'status' => 0
		];
	}
		
	/* Keterangan status:
	 * status 0: transaksi dihapus
	 * status 1: transaksi belum dibayar
	 * status 2" transaksi sudah dibayar
	 */
	 

	header('Location: /');
