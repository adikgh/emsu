<div class="bl12">
	<div class="bl_c">
		<div class="head_c txt_c" data-aos="fade-up"><h3><?=t::w('bl12_off')?></h3></div>
		<div class="bl12_r2c">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl12' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '
						<div class="bl12_r2ci" data-aos="fade-up">
							<div class="bl12_r2cimg">'.$ana['img'].'</div>
							<h6 class="bl12_r2cic">'.$ana['txt1'].'</h6>
						</div>
		      	';
		      }
			?>
		</div>
		<div class="bl12_b" data-aos="fade-up">
			<p><?=t::w('bl12_b')?></p>
			<div class="btn disb_zab3"><span><?=t::w('Get a discount')?></span></div>
		</div>
	</div>
</div>