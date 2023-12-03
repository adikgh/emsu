<!--  -->
	<div class="sana_btn">
		<div class="bl_c">
			<a href="numbers.php?id=<?=$id?>"><div class="btn"><span>Показать номера</span></div></a>
		</div>
	</div>


	<!--  -->
	<div class="sana_bl2">
		<? include 'number_sn.php'; ?>
	</div>


	<!--  -->
	<div class="sana_bl3">
		<div class="bl_c">
			<div class="head_c txt_tu"><h5>об санаторий</h5></div>
			<div class="sana_bl3_c">
				<div class="sana_bl3_ct"><p><?=t::txt($id)?></p></div>
				<div class="sana_bl3_cb">
					<i class="fas fa-angle-down"></i>
					<span class="sana_bl3_cb1">Подробнее</span>
					<span class="sana_bl3_cb2">Скрыть</span>
				</div>
			</div>
		</div>
	</div>



	<? $data_serv = db::query("select * from sana_service where sana_id = '$id'");
		if (mysqli_num_rows($data_serv) != 0): ?>

		<!--  -->
		<div class="sana_bl4">
			<div class="bl_c">
				<div class="head_c txt_tu"><h5>услуги санаторий</h5></div>
				<div class="num_bl2_c">

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'med'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-stethoscope"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Медицинские услуги</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'fiz'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-procedures"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Физиопроцедуры</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>	

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'doc'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-user-md"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Доктор</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'water'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-glass"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Вода</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'pool'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-swimmer"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Бассейн</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'bath'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-bath"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Баня - Сауна</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

					<?php $data_serv = db::query("select * from sana_service where sana_id = '$id' and type = 'add'");
						if (mysqli_num_rows($data_serv) != 0): ?>
						<div class="num_bl1_c">
							<div class="num_bl1_ci"><i class="far fa-layer-plus"></i></div>
							<div class="num_bl1_cn">
								<div class="num_bl1_cns">Дополнительный</div>
								<?php if (mysqli_num_rows($data_serv) == 1): ?>
									<?php while ($serv = mysqli_fetch_array($data_serv)) echo '<p class="num_bl1_cnl">'.t::serv($serv['service_id']).'</p>'; ?>
								<?php else: ?>
									<ul><?php while ($serv = mysqli_fetch_array($data_serv)) echo '<li class="num_bl1_cnl">'.t::serv($serv['service_id']).'</li>'; ?></ul>
								<?php endif ?>
							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
		</div>

	<? endif ?>


	<? $data_serv = db::query("select * from sana_service_pay where sana_id = '$id'");
		if (mysqli_num_rows($data_serv) != 0): ?>

		<!--  -->
		<div class="sana_bl5">
			<div class="bl_c">
				<div class="head_c txt_tu"><h5>платные услуги</h5></div>
				<div class="sana_bl5_c">
					<?php
						while ($serv = mysqli_fetch_array($data_serv)){
							echo '
								<div class="sana_bl5_i">
									<div class="sana_bl5_in">'.t::serv($serv['service_id']).'</div>
									<div class="sana_bl5_ip">'.substr_replace($serv['price'], ' ', -3, 0).' <i class="far fa-tenge"></i></div>
								</div>
							';
						}
				?>
				</div>
			</div>
		</div>

	<? endif ?>