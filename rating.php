<?php
	require_once('config.php');

	if (!isset($_POST['id']))
		die;

	if (!isset($_POST['type']))
		die;

	$id   = intval($_POST['id']);
	$type = intval($_POST['type']);
	$ip   = $_SERVER['REMOTE_ADDR'];

	if ($type < 0 || $type > 1)
		die;

	$req = $mysql->prepare('SELECT id FROM user_rating WHERE data_id = ? AND user_ip = MD5(?)');
	$req->execute(array($id, $ip));

	if ($req->rowCount() > 0)
		die('ae');

	if ($type == 0) {
		$req = $mysql->prepare('UPDATE datas SET down = down + 1 WHERE id = ?');
		$req->execute(array($id));
	}
	else if ($type == 1) {
		$req = $mysql->prepare('UPDATE datas SET up = up + 1 WHERE id = ?');
		$req->execute(array($id));
	}

	$req = $mysql->prepare('INSERT INTO user_rating (data_id, user_ip, created) VALUES (?, MD5(?), NOW())');
	$req->execute(array($id, $ip));

	$req = $mysql->prepare('SELECT ROUND((up-down) / (up+down) * 100) as total_percent FROM datas WHERE id = ?');
	$req->execute(array($id));

	if (!$req->rowCount())
		die(0);

	$row = $req->fetch(PDO::FETCH_LAZY);

	die($row->total_percent);
