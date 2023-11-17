<? include "../../config/core_a.php";

	// Қолданушыны тексеру
	if (!$user_id) header('location: /admin/');

	// cours 
	$reser = db::query("select * from reser ORDER BY id asc");

	// Сайттың баптаулары
	$menu_name = 'reser';
	$css = ['admin/user', 'admin/table', 'admin/cours'];
	$js = ['admin/user'];
?>
<? include "../block/header.php"; ?>

	<div class="ucours">

		<div class="head_c">
			<h4>Брондар</h4>
		</div>

		<div class="">
			<div class="qpanel">
				<div class="">
					<div class="btn reser_add_pop">
						<i class="fal fa-plus"></i>
						<span>Қосу</span>
					</div>
				</div>
				<div class="">
					<div class=""></div>
					<div class="ucours_tr">
						<div class="ucours_trn">Страница: 1/2</div>
						<div class="ucours_trnc">
							<a class="ucours_trnci ucours_trnci_ds" href="?&page=0"><i class="fal fa-angle-left"></i></a>
							<a class="ucours_trnci " href="?&page=2"><i class="fal fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="qtable">
				
				<table>
	
					<thead>
						<tr>
							<th class="txt_c qtable_n">#</th>
							<!-- <th class="">Дәрежесі</th> -->
							<th class="qtable_id">Брон нөмері</th>	
							<th class="">Қонақ (аты-жөні)</th>
							<th class="txt_c qtable_ph">Телефон</th>
							<th class="qtable_mn140 txt_c">Келетін күні</th>
							<th class="qtable_mn140 txt_c qtable_2dt">Неше күнге</th>
							<th class="qtable_mn140 txt_c qtable_sn">Адам н/c <br> бөлме саны</th>
							<th class="txt_c">Шипажай</th>
							<th class="qtable_mn140 txt_c">Бөлме түрі</th>
							<th class="qtable_mn140 txt_c">Бөлме құны</th>
							<th class="qtable_mn140 txt_c">Алғашқы төлем</th>
							<th class="qtable_mn140 txt_c">Жалпы төлем</th>
							<? if ($user['super_rights']): ?> 
								<th class="qtable_mn140 txt_c">Төлеу қажет</th>
								<th class="qtable_mn140 txt_c">Берілетін пайыз</th>
								<th class="qtable_mn140 txt_c">Қалғаны</th>
								<th class="qtable_mn140 txt_c">Менеджер</th>
							<? else: ?>
								<th class="qtable_mn140 txt_c">Компанияға <br> қалатыны</th>
								<th class="qtable_mn140 txt_c">Бонус (10%)</th>
							<? endif ?>
							<th class="qtable_mn140 txt_c">Брон жасалған күні</th>
							<!-- <th></th> -->
							<!-- <th></th> -->
						</tr>
					</thead>
	
					<tbody>
						<? $n = 0; ?>
						<? while($reser_d = mysqli_fetch_assoc($reser)): ?>
							<? $reser_id = $reser_d['id']; $n++; ?>
							
							<tr>
								<td class="txt_c qtable_n"><?=$n?></td>
								<!-- <td class=""><?=$reser_d['status_id']?></td> -->
								<td class="qtable_id"><?=$reser_d['id']?></td>
								<td class=""><?=$reser_d['name']?></td>
								<td class="txt_c qtable_ph">
									<a class="fr_phone" href="tel:<?=$reser_d['phone']?>"><?=$reser_d['phone']?></a>
								</td>
								<td class="txt_c"><?=($reser_d['arrival_dt']?date("d.m.Y", strtotime($reser_d['arrival_dt'])):'')?></td>
								<td class="txt_c qtable_2dt"><?=$reser_d['many_dt']?></td>
								<td class="txt_c qtable_sn"><?=$reser_d['of_number']?></td>
								<td class=""><?=fun::sana($reser_d['sana_id'])['name']?></td>
								<td class="txt_r"><?=fun::number_type($reser_d['room_id'])['name']?></td>
								<td class="txt_r">
									<div class="fr_price"><?=$reser_d['room_rate']?></div>
								</td>
								<td class="txt_r">
									<div class="fr_price"><?=$reser_d['prepayment']?></div>
								</td>
								<td class="txt_r">
									<div class="fr_price"><?=($reser_d['many_dt'] * $reser_d['of_number'] * $reser_d['room_rate'])?></div>
								</td>
								<? if ($user['super_rights']): ?>
									<td class="txt_r">
										<div class="fr_price"><?=(($reser_d['many_dt'] * $reser_d['of_number'] * $reser_d['room_rate']) - $reser_d['prepayment'])?></div>
									</td>
									<td class="txt_c"><?=$reser_d['percent']?>%</td>
									<td class="txt_r">
										<div class="fr_price"><?=(($reser_d['many_dt'] * $reser_d['of_number'] * $reser_d['room_rate']) * ($reser_d['percent'] / 100))?></div>
									</td>
									<td class="txt_r"><?=fun::user($reser_d['manager_id'])['name']?></td>
								<? else: ?>
									<td class="txt_r">
										<div class="fr_price"><?=(($reser_d['many_dt'] * $reser_d['of_number'] * $reser_d['room_rate']) * ($reser_d['percent'] / 100))?></div>
									</td>
									<td class="txt_r">
										<div class="fr_price"><?=(($reser_d['many_dt'] * $reser_d['of_number'] * $reser_d['room_rate']) * ($reser_d['percent'] / 100) * 0.1)?></div>
									</td>
								<? endif ?>
								<td class="txt_c"><?=date("d.m.Y", strtotime($reser_d['reser_dt']))?></td>
								<!-- <td><?//=?></td> -->
								<!-- <td><?//=?></td> -->
							</tr>
		
						<? endwhile ?>
					</tbody>
				</table>

			</div>

		</div>

	</div>

<? include "../block/footer.php"; ?>

	<!-- reser add -->
	<div class="pop_bl pop_bl2 reser_add_block">
		<div class="pop_bl_a reser_add_back"></div>
		<div class="pop_bl_c">
			<div class="head_c">
				<h5>Брон қосу</h5>
				<div class="btn btn_dd2 reser_add_back"><i class="fal fa-times"></i></div>
			</div>
			<div class="pop_bl_cl">
				<div class="form_c">
					
					<div class="form_im">
						<div class="form_span">Қонақ (аты-жөні):</div>
						<input type="text" class="form_txt _name ins_reser_name" placeholder="Атауын жазыңыз" data-lenght="2" />
						<i class="fal fa-text form_icon"></i>
					</div>
					
					<div class="form_im">
						<div class="form_span">Телефон:</div>
						<input type="tel" class="form_txt fr_phone ins_reser_phone" placeholder="8 (777) 777-77-77" data-lenght="2" />
						<i class="fal fa-phone-alt form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Келетін күні:</div>
						<input type="text" class="form_txt fr_date ins_reser_arrival" placeholder="01.01.2024" data-lenght="2" />
						<!-- <input type="date" name="" id=""> -->
						<i class="fal fa-calendar-alt form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Неше күнге:</div>
						<input type="tel" class="form_txt fr_number ins_reser_many" placeholder="10" data-lenght="2" data-val="10" />
						<i class="fal fa-calendar-exclamation form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Адам н/c бөлме саны:</div>
						<input type="tel" class="form_txt fr_number ins_reser_of_number" placeholder="2" data-lenght="2" data-val="2" />
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
						<input type="tel" class="form_txt fr_price ins_reser_room_rate" placeholder="10.000 тг" data-lenght="2" />
						<i class="fal fa-tenge form_icon"></i>
					</div>
					<div class="form_im">
						<div class="form_span">Алғашқы төлем:</div>
						<input type="tel" class="form_txt fr_price ins_reser_prepayment" placeholder="10.000 тг" data-lenght="2" />
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
							<input type="tel" class="form_txt fr_number ins_reser_percent" placeholder="15" data-lenght="2" data-val="15" />
							<i class="fal fa-percent form_icon"></i>
						</div>
						<div class="form_im">
							<div class="form_span">Брондалған күні:</div>
							<input type="text" class="form_txt fr_date ins_reser_dt" placeholder="01.01.2024" data-lenght="2" />
							<i class="fal fa-calendar-alt form_icon"></i>
						</div>
					<? endif ?>

					<div class="form_im form_im_bn">
						<div class="btn btn_reser_add"><i class="far fa-check"></i><span>Сақтау</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>