<div class="bl11">
	<div class="bl_c">
		<div class="bl11_c">
			<div class="bl11_l">
				<div class="head_c"><h4><?=t::w('Frequently asked Questions')?></h4></div>
				<p><?=t::w('bl11_disc')?></p>
				<div class="bl11_btn"><div class="btn disb_zab"><span><?=t::w('submit your')?></span></div></div>
				<div class="bl11_a lazy_bag" data-src="/assets/img/bag/doc2.png"></div>
			</div>
			<div class="bl11_r">
				<div class='faq'>
					<?php
						$sql = db::query("select * from `blocks` where type = 'bl11' and lang = '$lang' ORDER BY number ASC");
				      while($ana = mysqli_fetch_array($sql)){
				      	echo '
								<div class="faq-a">
							  		<div class="faq-ah">
										<div class="faq-arrow"><i class="fal fa-chevron-right"></i></div>
										<h6 class="faq-heading">'.$ana['txt1'].'</h6>
							  		</div>
							      <p class="faq-text">'.$ana['txt2'].'</p>
							  	</div>
				      	';
				      }
					?>
				</div>
			</div>
		</div>
	</div>
</div>