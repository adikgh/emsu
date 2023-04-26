<div class="bl7" id="bl2">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('Our advantages')?></div>
				<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl7_of2')?></h3>
			</div>
		</div>
		<div class="bl7_c">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '
						<div class="bl7_i" data-aos="fade-up">
							<div class="bl7_img lazy_bag" data-src="/assets/img/bag/'.$ana['img'].'"></div>
							<h6 class="bl7_in">'.$ana['txt1'].'</h6>
							<p class="bl7_it">'.$ana['txt2'].'</p>
						</div>
					';
		      }
			?>
		</div>
		<div class="bl7_b" data-aos="fade-up">
			<p><?=t::w('bl7_of3')?></p>
			<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
				<div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></div>
			</a>
		</div>
	</div>
</div>