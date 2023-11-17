<? if (@$site_set['header']): ?>
	<div class="header <?=(@$site_set['header_wh']?'header_wh':'')?> <?=(@$site_set['header2']?'header2':'')?>">
		<div class="bl_c">
			<div class="header_c">
				<div class="header_l">
					<div class="logo">
						<a href="/">
							<div class="logo_i lazy_logo" data-src="/assets/img/logo/<?=(@$site_set['header_logo']=='cl'?'logo.png':'logo_b.png')?>"></div>
						</a>
					</div>
					<div class="menu">
						<?php
							$sql = db::query("select * from `menu` where number is not null and lang = '$lang' ORDER BY number ASC");
					      while($ana = mysqli_fetch_array($sql)){echo '<a href="'.$ana['href'].'"><div class="menu_i">'.$ana['nm'].'</div></a>';}
						?>
					</div>
				</div>
				<div class="header_r">
					<div class="lang">
						<?=($lang=='kz'?'<div class="lang_i"><span>Қазақша</span><span>ҚАЗ</span></div>':'<a href="'.$url.'?lang=kz" class="lang_ia"><span>Қазақша</span><span>ҚАЗ</span></a>')?>
						<?=($lang=='ru'?'<div class="lang_i"><span>Русский</span><span>РУС</span></div>':'<a href="'.$url.'?lang=ru" class="lang_ia"><span>Русский</span><span>РУС</span></a>')?>
					</div>
					<div class="phone_nm">
						<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<? endif ?>



<!-- tabs -->
<!-- <div class="tabs_f <?=($site_set['tabs']=='true'?'tabs_acts':'')?>">
	<div class="tabs">
		<a href="/" class="tabs_i <?=($menu_name=='home'?'tabs_iact':'')?>"><div class="tabs_img"></div></a>
		<a href="/catalog" class="tabs_i <?=($menu_name=='catalog'?'tabs_iact':'')?>"><i class="far fa-hotel"></i></a>
		<a href="/about" class="tabs_i <?=($menu_name=='about'?'tabs_iact':'')?>"><i class="far fa-users"></i></a>
		<a href="tel:<?=$site['phone']?>" class="tabs_i"><i class="far fa-phone-alt"></i></a>
	</div>
</div> -->