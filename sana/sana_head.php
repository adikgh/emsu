<div class="sana_bl">
	<div class="blc1">
		<div class="bl_c">
			<div class="head_c">
				<div class="head_nb">
					<div class="head_nbi lazy_img" data-src="/assets/sana/<?=$sana['img']?>"></div>
					<div class="head_nbc">
						<div class="head_star"><?=t::rank($sana['rank'])?></div>
						<h5 class="txt_tu"><?=$sana['name']?></h5>
					</div>
				</div>
				<div class="head_ln">
					<ul>
						<li><a href="/">Главная</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li><a href="/catalog/">Выбор санаторий</a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li><a href="/sana/?id=<?=$sana['id']?>"><?=$sana['name']?></a></li>
						<span><i class="fal fa-angle-right"></i></span>
						<li><?=t::t($price['type_id'])?></li>
					</ul>
				</div>
				<div class="head_share disb_zab5"><i class="far fa-sign-out"></i></div>
			</div>
		</div>
	</div>
</div>