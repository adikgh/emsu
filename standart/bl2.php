<div class="bl2">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('bl2_of1')?></div>
				<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl2_of2')?></h3>
			</div>
		</div>
		<div class="bl2_con">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl2' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '			
		      		<div class="bl2_i" data-aos="fade-up">
							<div class="bl2_img lazy_bag" data-src="/assets/img/icons/'.$ana['img'].'"></div>
							<h6 class="bl2_l">'.$ana['txt1'].'</h6>
							<div class="bl_raz">'.$ana['txt2'].'</div>
							<p class="bl2_r">'.$ana['txt3'].'</p>
						</div>
					';
		      }
			?>
		</div>
		<div class="bl2_b" data-aos="fade-up">
			<p><?=t::w('bl2_of3')?></p>
			<a href="/catalog">
				<div class="btn"><span><?=t::w('View the sanatorium')?></span><i class="far fa-long-arrow-right"></i></div>
			</a>
		</div>
	</div>
</div>