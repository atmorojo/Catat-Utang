<?php
	
	require_once __DIR__.'/bootstrap.php';
	
	use SimpleCrud\Database;
	
	$dsn	= 'sqlite:db.sqlite3';
	$pdo	= new PDO($dsn);
	$db		= new Database($pdo);
	
	date_default_timezone_set('Asia/Jakarta');
		
	$supplier_list = $db->supplierTable
	->select()
	->where('active = ', 1)
	->get();
	
	$total_hutang = $db->transaksiTable
	->selectAggregate('SUM', 'totalBelanja')
	->where('status = ', 1)
	->get();
	
	$total_jatuh_tempo = $db->transaksiTable
	->selectAggregate('SUM', 'totalBelanja')
	->where('status = ', 1)
	->where('tempoTanggal <= ', date('Y-m-d'))
	->get();
	
	$trans_jatuh_tempo = $db->transaksiTable
	->select()
	->where('status = ', 1)
	->where('tempoTanggal <= ', date('Y-m-d'))
	->get();
	
	$trans_all = $db->transaksiTable
	->select()
	->where('status != ', 0)
	->get();
	
	// Render our view
	echo $twig->render('index.html.twig', [
		'suppliers' => $supplier_list,
		'total_hutang' => $total_hutang,
		'total_jatuh_tempo' => $total_jatuh_tempo,
		'trans_jatuh_tempo' => $trans_jatuh_tempo,
		'trans_all' => $trans_all
	]);