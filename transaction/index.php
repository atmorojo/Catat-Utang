<?php
	
	require_once '../bootstrap.php';
	
	use SimpleCrud\Database;
	
	$dsn	= 'sqlite:../db.sqlite3';
	$pdo	= new PDO($dsn);
	$db		= new Database($pdo);
			
	$sup_id		= $_POST['id_supplier'];
	$sup_nama	= $_POST['nama_supplier'];
	$tgl_blj	= $_POST['tgl_belanja'];
	$tgl_tmp	= $_POST['tgl_tempo'];
	$nominal	= preg_replace('~\D~', '', $_POST['nominal']);
	
	date_default_timezone_set('Asia/Jakarta');
	
	$db->transaksiTable[] = [
		'supplier_id' => $sup_id,
		'belanjaTanggal' => $tgl_blj,
		'tempoTanggal' => $tgl_tmp,
		'totalBelanja' => $nominal,
		'status' => (strtotime($tgl_blj) < strtotime($tgl_tmp)) ? "1" : "2",
		'timestamp' => date('d-m-Y H:i:s'),
		'edited' =>  date('d-m-Y H:i:s')
		];
	
	header('Location: /');