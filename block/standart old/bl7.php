<div class="bl7">
	<div class="bl_c">
		<div class="head_c">
			<div class="head_v1 txt_c">
				<div class="head_vt head_vtn"><?=t::w('Our advantages')?></div>
				<h2><?=t::w('bl7_of2')?></h2>
			</div>
		</div>
		<div class="bl7_c">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '
						<div class="bl7_i">
							<div class="bl7_img lazy_bag" data-src="/assets/img/icons/'.$ana['img'].'"></div>
							<div class="bl7_in">'.$ana['txt1'].'</div>
							<div class="bl7_it">'.$ana['txt2'].'</div>
						</div>
					';
		      }
			?>
		</div>
		<div class="bl7_b">
			<p><?=t::w('bl7_of3')?></p>
			<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></div></a>
		</div>
	</div>
</div>