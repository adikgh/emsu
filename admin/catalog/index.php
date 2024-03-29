<? include "../../config/core_a.php";

	// cours 
	$cours = db::query("select * from sana where number is not null ORDER BY number asc");

	// Сайттың баптаулары
	$menu_name = 'cours';
	$css = ['admin/user', 'admin/cours'];
	$js = ['admin/user'];
?>
<? include "../block/header.php"; ?>

	<div class="ucours">

		<div class="head_c">
			<h4>Шипажайлар</h4>
		</div>

		<div class="uc_d">
			<div class="uc_di bq3_ci_rg cours_add_pop">
				<i class="fal fa-plus"></i>
				<span>Қосу</span>
			</div>

			<? while($cours_d = mysqli_fetch_assoc($cours)): ?>
				<? $cours_id = $cours_d['id']; ?>
				<? if (@$cours_d['info']) $cours_d = array_merge($cours_d, fun::cours_info($cours_d['id'])); ?>
					<a class="uc_di" href="/admin/item/?id=<?=$cours_id?>">
						<div class="uc_dit">
							<div class="bq_ci_info"><div class="bq_cih"><?=$cours_d['name']?></div></div>
							<div class="bq_ci_img"><div class="lazy_img" data-src="/assets/uploads/sanatorium/<?=$cours_d['img']?>"></div></div>
						</div>
						<div class="uc_dib">
							<div class="uc_dib_ckb"></div>
							<div class="bq_ci_btn"><div class="btn btn_gr btn_dd"><i class="fal fa-long-arrow-right"></i></div></div>
						</div>
					</a>
			<? endwhile ?>
		</div>

	</div>

<? include "../block/footer.php"; ?>

	<!-- cours add -->
	<div class="pop_bl pop_bl2 cours_add_block">
		<div class="pop_bl_a cours_add_back"></div>
		<div class="pop_bl_c">
			<div class="head_c">
				<h5>Cабақты қосу</h5>
				<div class="btn btn_dd2 cours_add_back"><i class="fal fa-times"></i></div>
			</div>
			<div class="pop_bl_cl">
				<div class="form_c">
					
					<div class="form_im">
						<div class="form_span">Шипажайтың атауы:</div>
						<i class="fal fa-text form_icon"></i>
                  <input type="text" class="form_txt cours_name" placeholder="Атауын жазыңыз" data-lenght="2" />
               </div>
					
					<div class="form_im">
						<div class="form_span">Адрес:</div>
						<!-- <i class="fal fa-user-graduate form_icon"></i> -->
						<input type="text" class="form_txt cours_autor" placeholder="Адрес жазыңыз" data-lenght="2" />
					</div>

					<div class="form_im">
						<div class="form_span">Шипажай фотосы:</div>
						<input type="file" class="cours_img sh_img file dsp_n" accept=".png, .jpeg, .jpg">
						<div class="form_im_img lazy_img cours_img_add" data-txt="Фотоны жаңарту">Құрылғыдан таңдау</div>
					</div>

					<div class="form_im form_im_bn">
						<div class="btn btn_item_add"><i class="far fa-check"></i><span>Сақтау</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>