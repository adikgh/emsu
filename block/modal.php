<!--  -->
	<? if ($site_set['clc_ph']): ?>
		<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>?text=Я%20заинтересован%20по%20поводу%20санаторий%20...">
			<div type="button" class="callback-btw">
			<i class="fab fa-whatsapp"></i>
			</div>
		</a>
		<a target="_blank" href="tel:<?=$site['phone']?>">
			<div type="button" class="callback-bt">
			<i class="far fa-phone"></i>
			</div>
		</a>
	<? endif ?>



<!-- block form -->
	<div class="pop_bl fr">
		<div class="pop_bl_a zabr_back"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c"><h4>Бесплатная консультация и бронирование</h4></div>
			<div class="form_c">
				<div class="form_im dsp_n">
					<input type="text" class="sms" value="Консультация 1" />
				</div>
				<div class="form_im">
					<input type="text" data-lenght="2" placeholder="Введите имя .." class="form_im_txt name" />
				</div>
				<div class="form_im">
					<input type="tel" class="form_im_txt phone fr_phone" data-lenght="11"  placeholder="+7 (___) ___-__-__" />
				</div>
				<div class="form_im">
					<div class="btn orderSend">
						<span>Оставить заявку</span>
					</div>
				</div>
			</div>
			<div class="pop_bl_cl">
				<div class="btn btn_back zabr_back">
					<span>Закрыть</span>
					<i class="far fa-times-circle"></i>
				</div>
			</div>
		</div>
	</div>


<!-- block form -->
	<div class="pop_bl fr2">
		<div class="pop_bl_a zabr_back2"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c"><h4>Хочу дарить «ПОДАРОЧНЫЙ СЕРТИФИКАТ»</h4></div>
			<div class="form_c">
				<div class="form_im dsp_n">
					<input type="text" class="sms" value="ПОДАРОЧНЫЙ СЕРТИФИКАТ">
				</div>
				<div class="form_im">
					<input type="text" data-lenght="2" placeholder="Введите имя .." class="form_im_txt name">
				</div>
				<div class="form_im">
					<input type="tel" class="form_im_txt phone fr_phone" data-lenght="11" placeholder="+7 (___) ___-__-__" >
				</div>
				<div class="form_im">
					<div class="btn orderSend"><span>Оставить заявку</span></div>
				</div>
			</div>
			<div class="pop_bl_cl">
				<div class="btn btn_back zabr_back2"><span>Закрыть</span><i class="far fa-times-circle"></i></div>
			</div>
		</div>
	</div>


<!-- block form -->
	<div class="pop_bl fr3">
		<div class="pop_bl_a zabr_back3"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c"><h4>Хочу получит скидку</h4></div>
			<div class="form_c">
				<div class="form_im dsp_n"><input type="text" class="sms" value="Получит скидку"></div>
				<div class="form_im"><input type="text" data-lenght="2" placeholder="Введите имя .." class="form_im_txt name"></div>
				<div class="form_im"><input type="tel" data-lenght="11" placeholder="+7 (___) ___-__-__" class="form_im_txt phone fr_phone"></div>
				<div class="form_im"><div class="btn orderSend"><span>Оставить заявку</span></div></div>
			</div>
			<div class="pop_bl_cl"><div class="btn btn_back zabr_back3"><span>Закрыть</span><i class="far fa-times-circle"></i></div></div>
		</div>
	</div>


<!-- block form -->
	<div class="pop_bl fr4">
		<div class="pop_bl_a zabr_back4"></div>
		<div class="pop_bl_c">
			<div class="head_c txt_c"><h5><?=t::w('bl8_b')?></h5></div>
			<div class="form_c">
				<div class="form_im dsp_n"><input type="text" class="sms1"></div>
				<div class="form_im dsp_n"><input type="text" class="sms2"></div>
				<div class="form_im">
					<p>Когда хотите приехать:</p>
					<input type="date" min="2021-03-20" value="2021-03-20" class="form_date date">
				</div>
				<div class="form_im">
					<p><?=t::w('tv2')?></p>
					<div class="form_kl">
						<div class="form_kln">5</div>
						<div class="form_klb form_klb_min"><div class="btn btn_sqr"><i class="fal fa-minus"></i></div></div>
						<div class="form_klb form_klb2"><div class="btn btn_sqr"><i class="fal fa-plus"></i></div></div>
					</div>
				</div>
				<div class="form_im"><input type="text" data-lenght="2" placeholder="Введите имя .." class="form_im_txt name"></div>
				<div class="form_im"><input type="tel" data-lenght="11" placeholder="+7 (___) ___-__-__" class="form_im_txt phone fr_phone"></div>
				<div class="form_im"><div class="btn book"><span>забронировать</span></div></div>
			</div>
			<div class="pop_bl_cl"><div class="btn btn_back zabr_back4"><span>Закрыть</span><i class="far fa-times-circle"></i></div></div>
		</div>
	</div>


<!-- block message -->
	<div class="bl_mess"><div class="bl_mess_sam"></div></div>