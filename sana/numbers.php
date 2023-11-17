<?php include '../config/core.php';

	// site setting
	$menu_name = 'sana';
	$site_set = [
		'tabs' => 'true',
		'css' => 'true',
		'js' => 'true'
	];


	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sana where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $sana = mysqli_fetch_array($sql); else  header('location: /catalog/');
	} else {
		header('location: /catalog/');
	}

?>
<?php include '../block/header.php'; ?>

<!-- block header -->
<?php include 'sana_header.php'; ?>

<!-- block head sana -->
<?php include 'sana_head.php'; ?>

<!-- block numbers -->
<div class="sana_bl2 sana_bl2n">
	<?php include 'number_sn.php'; ?>
</div>

<!-- block 10 -->
<?php include '../standart/bl10.php'; ?>

<?php include '../block/footer.php'; ?>