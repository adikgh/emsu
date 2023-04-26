<?php include '../config/core.php';

	// site setting
	$menu_name = 'about';
	$site_set = [
		'tabs' => 'true',
	];
	
?>
<?php include '../block/header.php'; ?>


<div class="blc1">
	<div class="bl_c">
		<div class="head_c txt_c">
			<h2>О нас</h2>
			<div class="head_ln">
				<ul>
					<li><a href="/">Главная</a></li>
					<span><i class="fal fa-angle-right"></i></span>
					<li>о нас</li>
				</ul>
			</div>
		</div>
	</div>
</div>


<!-- block 8 -->
<?php include '../standart/bl8.php'; ?>

<!-- block 9 -->
<?php include '../standart/bl9.php'; ?>

<!-- block 11 -  -->
<?php include '../standart/bl11.php'; ?>

<!-- block 10 -->
<?php include '../standart/bl10.php'; ?>




<?php include '../block/footer.php'; ?>