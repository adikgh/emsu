<div class="bl8">
	<div class="bl_c">
		<div class="head_c txt_c"><h3 data-aos="fade-up"><?=t::w('bl8_ofc')?></h3></div>
		<div class="bl8_r">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl8' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){echo '<div class="bl8_rsi" data-aos="fade-up"><h4>'.$ana['txt1'].'</h4><p>'.$ana['txt2'].'</p></div>';}
			?>
		</div>

		<div class="bl8_c" data-aos="fade-up">
			<div class="head_c txt_c"><h4><?=t::w('bl8_of2')?></h4></div>
			<p class="bl8_l"><?=t::w('bl8_txt')?></p>
		</div>

		<div class="bl8_b" data-aos="fade-up">
			<div class="bl8_bl">
				<div class="bl8_bi"><i class="fas fa-calculator"></i></div>
				<p><?=t::w('bl8_b')?></p>
			</div>
			<div class="form_c">
				<div class="form_im dsp_n"><input type="text" class="sms" value="Рассчитать"></div>
				<div class="form_im"><input type="tel" placeholder="+7 (___) ___-__-__" class="form_im_txt phone ms_phone"></div>
				<div class="form_im"><div class="btn send"><span><?=t::w('CALCULATE NOW')?></span></div></div>
			</div>
		</div>
	</div>
</div>