<!DOCTYPE html>
<html lang="<?=$lang?>">
<head>

	<?php include "head.php"; ?>
	
</head>
<body>

	<?php if ($site['metrika'] != null): ?><noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript><?php endif ?>
	<?php if ($site['pixel'] != null): ?><noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript><?php endif ?>

	<?php include "preloader.php"; ?>

	<?php include "menu.php"; ?>

<!-- body start-->
	<div class="body">