<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>

	<? $menu = mysqli_fetch_array(db::query("select * from `menu` where name = '$menu_name' and lang = '$lang'")); ?>
	<? if ($menu_name == 'sana') $menu['title'] = @t::w('sana').$sana['name'].@t::w('sana1'); ?>
	<? include "head.php"; ?>
	<? include "link.php"; ?>
	
</head>
<body>

	<? // include "preloader.php"; ?>
	<? include "menu.php"; ?>

	<!-- app start-->
	<div class="app">