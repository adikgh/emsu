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


	if (isset($_GET['price_id']) || $_GET['price_id'] == '') {
		$number_id = $_GET['price_id'];
		$sql = db::query("select * from number where id = '$number_id'");
		if (mysqli_num_rows($sql) != 0) $price = mysqli_fetch_array($sql); else header('location: /catalog/');
	} else {
		header('location: /catalog/');
	}

?>
<?php include '../block/header.php'; ?>


<!--  -->
<?php include 'sana_header.php'; ?>


<!--  -->
<div class="sana_bl">
	<div class="sana_bl_c">
		<?php include 'sana_head.php'; ?>

		<!--  -->
		<div class="num_bl1">
			<div class="bl_c">
				<div class="num_bl1_c">
					<div class="num_bl1_ci"><i class="far fa-bed"></i></div>
					<div class="num_bl1_cn">
						<div class="num_bl1_cns">Номер на <?=$price['door_id']?> человека</div>
						<h5 class="num_bl1_cnl"><?=t::t($price['type_id'])?></h5>
					</div>
				</div>

				<div class="num_bl1_c2">
					<div class="num_bl1_c2i">
						<div class="num_bl1_ci"><i class="far fa-user"></i></div>
						<div class="num_bl1_cn">

							<div class="num_bl1_cni">
								<div class="num_bl1_cns">Цена на 1 взрослых за ночь</div>
								<h5 class="num_bl1_cnl"><?=substr_replace($price['price'],' ',-3,0)?> <i class="fas fa-tenge"></i></h5>
							</div>

							<?php if ($price['door_id'] > 1): ?>
								<div class="num_bl1_cni">
									<div class="num_bl1_cns">Цена на <?=t::dn($price['door_id'])?> взрослых за ночь</div>
									<h5 class="num_bl1_cnl"><?=substr_replace($price['price'] * t::dn($price['door_id']),' ',-3,0)?> <i class="fas fa-tenge"></i></h5>
								</div>
							<?php endif ?>

						</div>
					</div>
					<div class="num_bl1_c2n"><div class="btn disb_zab4" data-name="<?=$sana['name']?>" data-number="<?=t::t($price['type_id'])?>"><span>забронировать</span></div></div>
				</div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="sana_bl1">
	  	<div class="sana_bl1t swiper-container">
			<div class="swiper-wrapper">
				<?php
		    		$data_img = db::query("select * from sana_img where number_id = '$number_id'");
					while ($img = mysqli_fetch_array($data_img)){echo '<div class="swiper-slide sana_bl1ti"><div class="lazy_sana_img" data-src="/assets/uploads/sanatorium/'.$img['img'].'"></div></div>';}
		    	?>
			</div>
			<div class="swiper-pagination sana_bl1t_pag"></div>
			<div class="swiper-button-prev sana_bl1t_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
			<div class="swiper-button-next sana_bl1t_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
		</div>
	</div>
</div>



<?php $data_serv = db::query("select * from number_service where number_id = '$number_id'");
	if (mysqli_num_rows($data_serv) != 0): ?>

	<!--  -->
	<div class="num_bl2">
		<div class="bl_c">
			<div class="head_c"><h6 class="txt_tu">В стоимость номера входят</h6></div>
			<div class="num_bl2_c">

				<?php $data_serv = db::query("select * from number_service where number_id = '$number_id' and type = 'food'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-utensils"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Питание</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from number_service where number_id = '$number_id' and type = 'tech'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-plug"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Техника</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from number_service where number_id = '$number_id' and type = 'int'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-wifi"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Интернет</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from number_service where number_id = '$number_id' and type = 'show'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-shower"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Омывание</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from number_service where number_id = '$number_id' and type = 'add'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-layer-plus"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Дополнительный</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>

<?php endif ?>



<!-- block 12 -->
<?php include '../standart/bl12.php'; ?>

<!-- block 11 -  -->
<?php include '../standart/bl11.php'; ?>

<!-- block 10 -->
<?php include '../standart/bl10.php'; ?>


<?php include '../block/footer.php'; ?>