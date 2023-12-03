	<div class="bl4">
		<div class="bl_c">
			<form id="test1">
				<div class="bl4_con">

					<div class="head_c txt_c">
						<h4><?=t::w('bl4_of')?></h4>
						<p><?=t::w('bl4_p')?></p>
					</div>

					<div class="bl4_cls swiper-container">
						<div class="gallery-pagination bl4_pag"></div>
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<h5 class="bl4_v"><?=t::w('tv1')?></h5>
								<div class="form_im form_imr">
									<div class="form_imri">
										<label class="radio" for="tv11">
											<input type="radio" name="tv1" value="1" id="tv11" checked>
											<span>1 <?=t::w('person')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv12">
											<input type="radio" name="tv1" value="2" id="tv12">
											<span>2 <?=t::w('person')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv13">
											<input type="radio" name="tv1" value="3-4" id="tv13">
											<span>3-4 <?=t::w('person')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv14">
											<input type="radio" name="tv1" value="<?=t::w('more')?>" id="tv14">
											<span><?=t::w('more')?></span>
										</label>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<h5 class="bl4_v"><?=t::w('tv2')?></h5>
								<div class="form_im form_imr">
									<div class="form_imri">
										<label class="radio" for="tv21">
											<input type="radio" name="tv2" value="5" id="tv21" checked>
											<span>5 <?=t::w('days')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv22">
											<input type="radio" name="tv2" value="7" id="tv22">
											<span>7 <?=t::w('days')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv23">
											<input type="radio" name="tv2" value="10" id="tv23">
											<span>10 <?=t::w('days')?></span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv24">
											<input type="radio" name="tv2" value="<?=t::w('more2')?>" id="tv24">
											<span><?=t::w('more2')?></span>
										</label>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<h5 class="bl4_v"><?=t::w('tv3')?></h5>
								<div class="form_im form_imr">
									<div class="form_imri">
										<label class="radio" for="tv31">
											<input type="radio" name="tv3" value="эконом" id="tv31" checked>
											<span>Эконом</span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv32">
											<input type="radio" name="tv3" value="Стандарт" id="tv32">
											<span>Стандарт</span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv33">
											<input type="radio" name="tv3" value="Комфорт" id="tv33">
											<span>Комфорт</span>
										</label>
									</div>
									<div class="form_imri">
										<label class="radio" for="tv34">
											<input type="radio" name="tv3" value="Люкс" id="tv34">
											<span>Люкс</span>
										</label>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<h5 class="bl4_v"><?=t::w('tv4')?></h5>
								<div class="form_im"><input type="text" class="form_im_txt name" name="name" data-lenght="2" placeholder="<?=t::w('enter your name')?>" /></div>
								<div class="form_im"><input type="tel" class="form_im_txt phone phone2 fr_phone" name="phone" data-lenght="11" placeholder="<?=t::w('enter the number')?>" /></div>
							</div>
						</div>
						<div class="bl4_clb">
							<div class="gallery-prev"><div class="btn btn_back"><i class="far fa-angle-left"></i><span><?=t::w('back')?></span></div></div>
							<div class="gallery-next"><div class="btn btn_back"><span><?=t::w('farther')?></span><i class="far fa-angle-right"></i></div></div>
							<div class="gallery-send"><div class="btn btn_back test1"><span><?=t::w('pick up')?></span><i class="far fa-angle-right"></i></div></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>