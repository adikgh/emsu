<? include "../../config/core_a.php";

	// Қолданушыны тексеру
	if (!$user_id) header('location: /admin/');



	$id = $_GET['id'];
	$item_d = fun::reser($id);



	// Сайттың баптаулары
	$menu_name = 'reser';
	$css = ['admin/user', 'admin/table', 'admin/cours'];
	$js = ['admin/user'];
?>
<? include "../block/header.php"; ?>

	<div class="ucours">

		<div class="head_c">
			<h4><?=$id?> - бронды өзгерту</h4>
		</div>

		<div class="">
			
			
			<div class="form_c">
				<div class="reser_edit_ng">

					<div class="form_im">
						<div class="form_span">Қонақ (аты-жөні):</div>
						<input type="text" class="form_txt ins_reser_name" placeholder="Атауын жазыңыз" data-lenght="2" value="<?=$item_d['name']?>" />
						<i class="fal fa-text form_icon"></i>
					</div>
					
					<div class="form_im">
						<div class="form_span">Телефон:</div>
						<input type="tel" class="form_txt fr_phone ins_reser_phone" placeholder="8 (777) 777-77-77" value="<?=$item_d['phone']?>" />
						<i class="fal fa-phone-alt form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Келетін күні:</div>
						<input type="text" class="form_txt fr_date ins_reser_arrival" placeholder="01.01.2024" value="<?=date("d.m.Y", strtotime($item_d['arrival_dt']))?>" />
						<i class="fal fa-calendar-alt form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Неше күнге:</div>
						<input type="tel" class="form_txt fr_number ins_reser_many" placeholder="10" value="<?=$item_d['many_dt']?>" />
						<i class="fal fa-calendar-exclamation form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Қонақ н/c бөлме саны:</div>
						<input type="tel" class="form_txt fr_number ins_reser_of_number" placeholder="2" value="<?=$item_d['of_number']?>" />
						<i class="fal fa-users form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Балалар саны:</div>
						<input type="tel" class="form_txt fr_number ins_reser_children" placeholder="0" value="<?=$item_d['children']?>" />
						<i class="fal fa-users form_icon"></i>
					</div>

					<div class="form_im form_sel">
						<div class="form_span">Шипажай:</div>
						<? $sana_one = fun::sana($item_d['sana_id']); ?>
						<div class="form_txt sel_clc ins_reser_sana"><?=$sana_one['name']?></div>
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
						<? $room_one = fun::number_type($item_d['room_id']); ?>
						<div class="form_txt sel_clc ins_reser_room"><?=$room_one['name']?></div>
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
						<input type="tel" class="form_txt fr_price ins_reser_room_rate" placeholder="10.000 тг" value="<?=$item_d['room_rate']?>" />
						<i class="fal fa-tenge form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Алғашқы төлем:</div>
						<input type="tel" class="form_txt fr_price ins_reser_prepayment" placeholder="10.000 тг" value="<?=$item_d['prepayment']?>" />
						<i class="fal fa-tenge form_icon"></i>
					</div>

					<? if ($user['super_rights']): ?>
						<div class="form_im form_sel">
							<div class="form_span">Менеджер:</div>
							<? $manager_one = fun::user($item_d['manager_id']); ?>
							<div class="form_txt sel_clc ins_reser_manager" data-val="<?=$manager_one['id']?>"><?=$manager_one['name']?></div>
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
							<input type="tel" class="form_txt fr_number ins_reser_percent" placeholder="15" value="<?=$item_d['percent']?>" />
							<i class="fal fa-percent form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Брондалған күні:</div>
							<input type="text" class="form_txt fr_date ins_reser_dt" placeholder="01.01.2024" value="<?=date("d.m.Y", strtotime($item_d['reser_dt']))?>" />
							<i class="fal fa-calendar-alt form_icon"></i>
						</div>
					<? endif ?>

				</div>
				<div class="form_im form_im_bn">
					<div class="btn btn_reser_edit" data-id="<?=$id?>">
						<i class="far fa-check"></i>
						<span>Сақтау</span>
					</div>
				</div>
			</div>

		</div>

	</div>

<? include "../block/footer.php"; ?>