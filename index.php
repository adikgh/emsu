<?php include 'config/core.php';

	// site setting
	$menu_name = 'home';
	$site_set = [
		'visible' => 'after',
		'header_wh' => true,
		'header_logo' => 'cl',
		'preload' => true
	];

?>
<?php include 'block/header.php'; ?>


<!-- block 1 - offer -->
<?php include 'standart/bl1.php'; ?>

<!-- block 7 -  -->
<?php include 'standart/bl7.php'; ?>

<!-- block 2 -  -->
<?php include 'standart/bl2.php'; ?>

<!-- block 8 -->
<?php include 'standart/bl8.php'; ?>

<!-- block 13 -->
<?php include 'standart/bl13.php'; ?>

<!-- block 4 -->
<?php include 'standart/bl4.php'; ?>

<!-- block 5 -->
<?php include 'standart/bl5.php'; ?>

<!-- block 12 -->
<?php include 'standart/bl12.php'; ?>

<!-- block 3 -->
<?php include 'standart/bl3.php'; ?>

<!-- block 9 -->
<?php include 'standart/bl9.php'; ?>

<!-- block 11 -  -->
<?php include 'standart/bl11.php'; ?>

<!-- block 10 -->
<?php include 'standart/bl10.php'; ?>


<?php include 'block/footer.php'; ?>