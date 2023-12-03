<? include "../../config/core_a.php"; ?>


   <!--  -->
   <? if (isset($_GET['view'])): ?>
		<? $id = strip_tags($_POST['id']); ?>
		<? $item_d = fun::reser($id); ?>

			<div class="form_im">
				<div class="form_span">Қонақ (аты-жөні):</div>
				<input type="text" class="form_txt ins_reser_name" placeholder="Атауын жазыңыз" data-lenght="2" value="<?=$item_d['name']?>" />
				<i class="fal fa-text form_icon"></i>
			</div>
			
			<div class="form_im">
				<div class="form_span">Телефон:</div>
				<input type="tel" class="form_txt fr_phone ins_reser_phone" placeholder="8 (777) 777-77-77" data-lenght="2" value="<?=$item_d['phone']?>" />
				<i class="fal fa-phone-alt form_icon"></i>
			</div>
			<div class="form_im">
				<div class="form_span">Келетін күні:</div>
				<input type="text" class="form_txt fr_date ins_reser_arrival" placeholder="01.01.2024" data-lenght="2" value="<?=$item_d['arrival_dt']?>" />
				<i class="fal fa-calendar-alt form_icon"></i>
			</div>
			<div class="form_im">
				<div class="form_span">Неше күнге:</div>
				<input type="tel" class="form_txt fr_number ins_reser_many" placeholder="10" data-lenght="2" data-val="10" value="<?=$item_d['many_dt']?>" />
				<i class="fal fa-calendar-exclamation form_icon"></i>
			</div>
			<div class="form_im">
				<div class="form_span">Адам н/c бөлме саны:</div>
				<input type="tel" class="form_txt fr_number ins_reser_of_number" placeholder="2" data-lenght="2" data-val="2" value="<?=$item_d['of_number']?>" />
				<i class="fal fa-users form_icon"></i>
			</div>

			<div class="form_im form_sel">
				<div class="form_span">Шипажай:</div>
				<? $sana_one = mysqli_fetch_assoc(db::query("select * from sana where number is not null order by number asc limit 1")); ?>
				<div class="form_txt sel_clc ins_reser_sana" data-val="<?=$sana_one['id']?>">Таңдау: <?=$sana_one['name']?></div>
				<i class="fal fa-hotel form_icon"></i>
				<i class="fal fa-caret-down form_icon_sel"></i>
				<div class="form_im_sel sel_clc_i">
					<? $sana = db::query("select * from sana where number is not null order by number asc"); ?>
					<? while ($sana_d = mysqli_fetch_assoc($sana)): ?>
						<div class="form_im_seli" data-val="<?=$sana_d['id']?>"><?=$sana_d['name']?></div>
					<? endwhile ?>
				</div>
			</div>
			
			<div class="form_im form_sel">
				<div class="form_span">Бөлме түрі:</div>
				<? $room_one = mysqli_fetch_assoc(db::query("select * from number_type limit 1")); ?>
				<div class="form_txt sel_clc ins_reser_room" data-val="<?=$room_one['id']?>">Таңдау: <?=$room_one['name']?></div>
				<i class="fal fa-bed form_icon"></i>
				<i class="fal fa-caret-down form_icon_sel"></i>
				<div class="form_im_sel sel_clc_i">
					<? $room = db::query("select * from number_type"); ?>
					<? while ($room_d = mysqli_fetch_assoc($room)): ?>
						<div class="form_im_seli" data-val="<?=$room_d['id']?>"><?=$room_d['name']?></div>
					<? endwhile ?>
				</div>
			</div>
			
			<div class="form_im">
				<div class="form_span">Бөлме құны:</div>
				<input type="tel" class="form_txt fr_price ins_reser_room_rate" placeholder="10.000 тг" data-lenght="2" value="<?=$item_d['room_rate']?>" />
				<i class="fal fa-tenge form_icon"></i>
			</div>
			<div class="form_im">
				<div class="form_span">Алғашқы төлем:</div>
				<input type="tel" class="form_txt fr_price ins_reser_prepayment" placeholder="10.000 тг" data-lenght="2" value="<?=$item_d['prepayment']?>" />
				<i class="fal fa-tenge form_icon"></i>
			</div>

			<? if ($user['super_rights']): ?>
				<div class="form_im form_sel">
					<div class="form_span">Маман:</div>
					<? $manager_one = mysqli_fetch_assoc(db::query("select * from user where manager = 1 limit 1")); ?>
					<div class="form_txt sel_clc ins_reser_manager" data-val="<?=$manager_one['id']?>">Таңдау: <?=$manager_one['name']?></div>
					<i class="fal fa-bed form_icon"></i>
					<i class="fal fa-caret-down form_icon_sel"></i>
					<div class="form_im_sel sel_clc_i">
						<? $manager = db::query("select * from user where manager = 1"); ?>
						<? while ($manager_d = mysqli_fetch_assoc($manager)): ?>
							<div class="form_im_seli" data-val="<?=$manager_d['id']?>"><?=$manager_d['name']?></div>
						<? endwhile ?>
					</div>
				</div>
				<div class="form_im">
					<div class="form_span">Шиапжай беретін %:</div>
					<input type="tel" class="form_txt fr_number ins_reser_percent" placeholder="15" data-lenght="2" data-val="15" value="<?=$item_d['percent']?>" />
					<i class="fal fa-percent form_icon"></i>
				</div>
				<div class="form_im">
					<div class="form_span">Брондалған күні:</div>
					<input type="text" class="form_txt fr_date ins_reser_dt" placeholder="01.01.2024" data-lenght="2" value="<?=$item_d['reser_dt']?>" />
					<i class="fal fa-calendar-alt form_icon"></i>
				</div>
			<? endif ?>


		<? exit(); ?>
	<? endif ?>