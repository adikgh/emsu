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

	$share_txt = 'https://emsu-saryagash.kz/sana/?id='.$id;

?>
<?php include '../block/header.php'; ?>


<!--  -->
<?php include 'sana_header.php'; ?>


<!--  -->
<div class="sana_bl">
	<div class="blc1">
		<div class="bl_c">
			<div class="head_c">
				<div class="head_star"><?=t::rank($sana['rank'])?></div>
				<h3 class="txt_tu"><?=$sana['name']?></h3>
				<div class="head_ln">
					<ul>
						<li><a href="/">Главная</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li><a href="/catalog/">Выбор санаторий</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li><?=$sana['name']?></li>
					</ul>
				</div>
				<div class="head_share disb_zab5"><i class="far fa-sign-out"></i></div>
			</div>
		</div>
	</div>

	<div class="sana_bl1">
	  	<div class="sana_bl1t swiper-container">
			<div class="swiper-wrapper">
				<?php
		    		$data_img = db::query("select * from sana_img where sana_id = '$id' and number_id is null");
					while ($img = mysqli_fetch_array($data_img)){echo '<div class="swiper-slide sana_bl1ti"><div class="lazy_sana_img" data-src="/assets/uploads/sanatorium/'.$img['img'].'"></div></div>';}
		    	?>
			</div>
			<div class="swiper-pagination sana_bl1t_pag"></div>
			<div class="swiper-button-prev sana_bl1t_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
			<div class="swiper-button-next sana_bl1t_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
		</div>
	</div>
</div>

<!--  -->
<div class="sana_btn">
	<div class="bl_c">
		<a href="numbers.php?id=<?=$id?>"><div class="btn"><span>Показать номера</span></div></a>
	</div>
</div>


<!--  -->
<div class="sana_bl2">
	<?php include 'number_sn.php'; ?>
</div>


<!--  -->
<div class="sana_bl3">
	<div class="bl_c">
		<div class="head_c txt_tu"><h5>об санаторий</h5></div>
		<div class="sana_bl3_c">
			<div class="sana_bl3_ct"><p><?=t::txt($id)?></p></div>
			<div class="sana_bl3_cb">
				<i class="fas fa-angle-down"></i>
				<span class="sana_bl3_cb1">Подробнее</span>
				<span class="sana_bl3_cb2">Скрыть</span>
			</div>
		</div>
	</div>
</div>



<?php $data_serv = db::query("select * from sana_service where sana_id = '$id'");
	if (mysqli_num_rows($data_serv) != 0): ?>

	<!--  -->
	<div class="sana_bl4">
		<div class="bl_c">
			<div class="head_c txt_tu"><h5>услуги санаторий</h5></div>
			<div class="num_bl2_c">

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'med'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-stethoscope"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Медицинские услуги</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'fiz'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-procedures"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Физиопроцедуры</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>	

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'doc'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-user-md"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Доктор</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'water'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-glass"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Вода</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'pool'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-swimmer"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Бассейн</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'bath'");
					if (mysqli_num_rows($data_serv) != 0): ?>
					<div class="num_bl1_c">
						<div class="num_bl1_ci"><i class="far fa-bath"></i></div>
						<div class="num_bl1_cn">
							<div class="num_bl1_cns">Баня - Сауна</div>
							<?php if (mysqli_num_rows($data_serv) == 1): ?>
								<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
							<?php else: ?>
								<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
							<?php endif ?>
						</div>
					</div>
				<?php endif ?>

				<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'add'");
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


<?php $data_serv = db::query("select * from sana_service_pay where sana_id = '$id'");
	if (mysqli_num_rows($data_serv) != 0): ?>

	<!--  -->
	<div class="sana_bl5">
		<div class="bl_c">
			<div class="head_c txt_tu"><h5>платные услуги</h5></div>
			<div class="sana_bl5_c">
				<?php
					while ($serv = mysqli_fetch_array($data_serv)){
						echo '
							<div class="sana_bl5_i">
								<div class="sana_bl5_in">'.t::serv($serv['service_id']).'</div>
								<div class="sana_bl5_ip">'.substr_replace($serv['price'], ' ', -3, 0).' <i class="far fa-tenge"></i></div>
							</div>
						';
					}
			   ?>
			</div>
		</div>
	</div>

<?php endif ?>


<!-- block 10 -->
<?php include '../standart/bl10.php'; ?>


<?php include '../block/footer.php'; ?>