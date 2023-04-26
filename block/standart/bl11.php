<div class="bl11">
	<div class="bl_c">
		<div class="bl11_c">
			<div class="bl11_l">
				<div class="head_c"><h2><?=t::w('Frequently asked Questions')?></h2></div>
				<p><?=t::w('bl11_disc')?></p>

				<!-- Спливка жасау -->

				<div class="bl11_btn"><div class="btn"><?=t::w('submit your')?><div class="btn_img"><div class="lazy_bag" data-src="/assets/img/icons/fountain-pen_1f58b-fe0f.png"></div></div></div></div>

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
										<p class="faq-heading">'.$ana['txt1'].'</p>
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