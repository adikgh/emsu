<!DOCTYPE html>
<html lang="<?=$lang?>" id="html">
<head>

	<? $menu = mysqli_fetch_array(db::query("select * from `site_menu` where name = '$menu_name' and type = 'admin'")); ?>
	<? include dirname(__FILE__).'/../../block/head.php'; ?>
	<? include dirname(__FILE__).'/../../block/link.php'; ?>

</head>
<body id="body" class="body">

	<? include "menu.php"; ?>