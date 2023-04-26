<div class="bl8">

	<div class="bl8_a lazy_bag" data-src="/assets/img/bag/b8292acafd72142128a3481ac4b0abff.jpg"></div>
	<div class="blc_t lazy_bag" data-src="/assets/img/bag/cloud_n.png"></div>
	<div class="blc_b lazy_bag" data-src="/assets/img/bag/cloud_n.png"></div>

	<div class="bl_c">
		<div class="head_c">
			<div class="head_v1">
				<div class="head_vt"><?=t::w('About us')?></div>
				<h2><?=t::w('bl8_of2')?></h2>
			</div>
		</div>
		<div class="bl8_c">
			<div class="bl8_l">
				<?=t::w('bl8_txt')?>

				<!-- Спливка жасау -->
				<div class="bl8_btn"><div class="btn"><?=t::w('Get a discount')?><div class="btn_img"><div class="lazy_bag" data-src="/assets/img/icons/bookmark_1f516.png"></div></div></div></div>		
			</div>
			<div class="bl8_r">
					<div class="bl8_rs">
					<?php
						$sql = db::query("select * from `blocks` where type = 'bl8' and lang = '$lang' ORDER BY number ASC");
				      while($ana = mysqli_fetch_array($sql)){echo '<div class="bl8_rsi"><p>'.$ana['txt1'].'</p><span>'.$ana['txt2'].'</span></div>';}
					?>
				</div>
			</div>
		</div>
	</div>

</div>