<div class="sana_bl1">
			<div class="sana_bl1t swiper-container">
				<div class="swiper-wrapper">
					<? while ($img = mysqli_fetch_array($data_img)): ?>
						<div class="swiper-slide sana_bl1ti"><div class="lazy_sana_img" data-src="/assets/uploads/sanatorium/<?=$img['img']?>"></div></div>
					<? endwhile	?>
				</div>
				<div class="swiper-pagination sana_bl1t_pag"></div>
				<div class="swiper-button-prev sana_bl1t_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
				<div class="swiper-button-next sana_bl1t_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
			</div>
		</div>