<? include '../config/core.php';





	$sana = db::query("select * from `sana` where number is not null ORDER BY `sana`.`number` ASC"); 









	// site setting
	$menu_name = 'catalog';
	// $site_set[] = true;

	$css = ['catalog'];

?>
<? include '../block/header.php'; ?>

	<div class="blc1">
		<div class="bl_c">
			<div class="head_c">
				<h4 class="txt_tu txt_c">Выбор санаторий</h4>
				<div class="head_ln">
					<ul>
						<li><a href="/">Главная</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li>Выбор санаторий</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="blc2">
		<div class="bl_c">
			<div class="blc2_c">

				<div class="blc2_b">
					<? while ($sana_d = mysqli_fetch_array($sana)): ?>
						<a href="/sana/?id=<?=$sana_d['id']?>" class="bl5_i">
							<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/<?=$sana_d['img'].'?v='.$v?>"></div>
							<div class="bl5_ic">
								<div class="bl5_ict">
									<div class="bl5_icn"><?=$sana_d['name']?></div>
									<div class="bl5_icts"><?=@t::rank($sana_d['rank'])?></div>
								</div>
								<div class="bl5_icb">
									<div class="bl5_icp">
										<?=@t::w('from1').@t::p($sana_d['id'])?>
										<i class="far fa-tenge"></i>
										<?=@t::w('from2')?>
									</div>
									<div class="bl5_icbtn">
										<div class="btn btn_sqr">
											<i class="fal fa-long-arrow-right"></i>
										</div>
									</div>
								</div>
							</div>
						</a>
					<? endwhile ?>
				</div>

			</div>
		</div>
	</div>

	<? // include '../standart/bl10.php'; ?>

<? include '../block/footer.php'; ?>