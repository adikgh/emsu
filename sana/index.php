<? include '../config/core.php';


	if (isset($_GET['id']) || $_GET['id'] == '') {
		$id = $_GET['id'];
		$sql = db::query("select * from sana where id = '$id'");
		if (mysqli_num_rows($sql) != 0) $sana = mysqli_fetch_array($sql); else  header('location: /catalog/');
	} else header('location: /catalog/');


	$share_txt = 'https://emsu.kz/sana/?id='.$id;


	// 
	$data_img = db::query("select * from sana_img where sana_id = '$id' and number_id is null");

	$data_imgn = mysqli_num_rows(db::query("select * from sana_img where sana_id = '$id' and number_id is null"));
	$data_img2 = db::query("select * from sana_img where sana_id = '$id' and number_id is null limit 6");
	$data_imgnm = 0;

	// site setting
	$menu_name = 'sana';
	$site_set['swiper'] = true;
	$css = ['sana'];
	$js = ['sana'];
    $site_set['clc_ph'] = false;


	if ($url == '/sana/') $url_n = '/catalog/';
	else if ($url == '/sana/numbers.php') $url_n = '/sana/?id='.$id;
	else $url_n = '/sana/numbers.php?id='.$id;

?>
<? include '../block/header.php'; ?>

	<div class="header_sana">
		<div class="bl_c">
			<div class="header_sana_c">
				<a href="<?=$url_n?>">
					<div class="header_sana_back">
						<i class="far fa-long-arrow-left"></i>
					</div>
				</a>
				<div class="header_sana_n">
					<?=$sana['name']?>
				</div>
				<div class="header_sana_r">
					<!-- <div class="header_heart ">
						<i class="far fa-heart"></i>
					</div> -->
					<div class="header_share disb_zab5">
						<i class="far fa-share-alt"></i>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--  -->
	<div class="sana_bl">

		<div class="blc1">
			<div class="bl_c">
				<div class="head_c">
					<div class="head_star"><?=t::rank($sana['rank'])?></div>
					<h5 class="" txt_tu><?=$sana['name']?></h5>
					<div class="head_ln">
						<ul>
							<li><a href="/">Главная</a></li>
							<span><i class="fal fa-angle-right"></i></span>
							<li><a href="/catalog/">Выбор санаторий</a></li>
							<span><i class="fal fa-angle-right"></i></span>
							<li><?=$sana['name']?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="sitem_tp">
			<div class="sitem_tp_bag lazy_img" data-src="/assets/uploads/sanatorium/<?=$sana['img']?>"></div>
			<div class="bl_c sitem_tp_bg">
				<div class="sitem_tp_bag lazy_img" data-src="/assets/uploads/sanatorium/<?=$sana['img']?>"></div>
			</div>

			<div class="sitem_tp_img">
				<div class="bl_c">
					<div class="sitem_tp_imgc">
						<? while ($img = mysqli_fetch_array($data_img2)): ?>
							<? $data_imgnm++ ?>
							<? if ($data_imgnm != 6): ?> <div class="lazy_img" lazy_sana_img data-src="/assets/uploads/sanatorium/<?=$img['img']?>"></div>
							<? else: ?> <div class="lazy_img" lazy_sana_img data-src="/assets/uploads/sanatorium/<?=$img['img']?>"><p>+<?=$data_imgn-6?></p></div> <? endif ?>
						<? endwhile	?>
					</div>
				</div>
			</div>
		</div>
		
	</div>


	<div class="">
		<!-- <div class="">Оператор</div> -->
		
		<div class="">
			<div class="">
				<div class="">Динара Жақып</div>
				<div class="">Оператор</div>
			</div>
			<div class="">
				<div class=""><i class="fab fa-whatsapp"></i></div>
				<div class=""><i class="far fa-phone-alt"></i></div>
			</div>
		</div>
	</div>
	


	<!-- block 10 -->
	<? // include '../standart/bl10.php'; ?>


<? include '../block/footer.php'; ?>

<!--  -->
	<div class="pop_bl fr5">
		<div class="pop_bl_a zabr_back5"></div>
		<div class="pop_bl_c">
			<div class="pop_bl_share">
				<div class="head_c txt_c">
					<h5 class="txt_tu">поделится</h5>
				</div>
				<div class="pop_bl_share_c">
					<a target="_blank" href="https://api.whatsapp.com/send?text=<?=$share_txt?>">
						<div><i class="fab fa-whatsapp"></i></div>
						<span>Whatsapp</span>
					</a>
					<a target="_blank" href="https://t.me/share/url?url=<?=$share_txt?>">
						<div><i class="fab fa-telegram-plane"></i></div>
						<span>Telegram</span>
					</a>
					<a target="_blank" href="https://www.facebook.com/sharer.php?src=<?=$share_txt?>">
						<div><i class="fab fa-facebook-f"></i></div>
						<span>Facebook</span>
					</a>
					<a target="_blank" href="https://vk.com/share.php?url=<?=$share_txt?>">
						<div><i class="fab fa-vk"></i></div>
						<span>Vkontakte</span>
					</a>
				</div>
				<div class="pop_bl_share_b">
					<div class="btn btn_bl2 btn_copy" onclick="copytext('<?=$share_txt?>')">
						<i class="far fa-copy"></i>
						<span>копировать ссылку</span>
					</div>
				</div>
			</div>
			<div class="pop_bl_cl">
				<div class="btn btn_back zabr_back5">
					<span>Закрыть</span>
					<i class="far fa-times-circle"></i>
				</div>
			</div>
		</div>
	</div>