		<!-- <div class="sana_bl1b swiper-container">
			<div class="swiper-wrapper">
				<?php
		   //  		$data_img = db::query("select * from sana_img where sana_id = '$id' and number_id is null");
					// while ($img = mysqli_fetch_array($data_img)){echo '<div class="swiper-slide sana_bl1bi"><div class="lazy_sana_img" data-src="/assets/sana/'.$sana['nm'].'/'.$img['img'].'"></div></div>';}
		    	?>
			</div>
		</div> -->

				<div class="sana_bl1b swiper-container">
			<div class="swiper-wrapper">
				<?php
		    		$data_img = db::query("select * from sana_img where number_id = '$price_id'");
					while ($img = mysqli_fetch_array($data_img)){echo '<div class="swiper-slide sana_bl1bi"><div class="lazy_sana_img" data-src="/assets/sana/'.$sana['nm'].'/'.$img['img'].'"></div></div>';}
		    	?>
			</div>
		</div>