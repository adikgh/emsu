		<? if ($site_set['footer']): ?>
			<footer class="footer">
				<div class="bl_c">
					<div class="foot_c">
						<div class="foot_i">
							<div class="foot_logo">
								<a href="/">
									<div class="logo_con lazy_bag" data-src="/assets/img/logo/logo_b.png"></div>
									<div class="logo_txt"><?=t::w('Center booking sanatorium Saryagash')?></div>
								</a>
							</div>
						</div>
						<div class="foot_i">
							<div class="bl1_sos">
								<a target="_blank" href="https://instagram.com/<?=$site['instagram']?>"><div class="bl1_si"><i class="fab fa-instagram"></i></div></a>
								<!-- <a target="_blank" href="https://facebook.com/<?=$site['facebook']?>"><div class="bl1_si"><i class="fab fa-facebook"></i></div></a> -->
								<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="bl1_si"><i class="fab fa-whatsapp"></i></div></a>
							</div>
						</div>
						<div class="foot_i">
							<div class="foot_n">
								<a href="tel:<?=$site['phone']?>"><?=$site['phone_view']?></a>
								<span><?=t::w('calc_al')?></span>
							</div>
						</div>
					</div>

					<div class="footer_b">
						<div class="footer_bl">© 2023 EMSU. <?=t::w('All rights reserved')?></div>
						<div class="footer_br">
							<a href="https://gprog.kz" target="_blank" class="gprog_bl">
								<span>#gprog-та</span>
								<div class="gprog_heart"><i class="fas fa-heart"></i></div>
								<span>жасалған</span>
								<div class="gprog_ab">
									<div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo.png"></div></div>
									<div class="gprog_h">G prog</div>
									<div class="gprog_p">Шипажайға арнап сайт жасатыңыз</div>
								</div>
							</a>
						</div>
					</div>
					

				</div>
			</footer>
		<? endif ?>

	</div>

	<!-- main js -->
	<script src="/assets/js/norm.js?v=<?=$v?>"></script>
	<script src="/assets/js/main.js?v=<?=$v?>"></script>
	<? foreach ($js as $i): ?> <script src="/assets/js/<?=$i?>.js?v=<?=$v?>"></script> <? endforeach ?>

	<!--  -->
	<? if ($site['metrika'] != null): ?><noscript><div><img src='https://mc.yandex.ru/watch/<?=$site['metrika']?>' style='position:absolute; left:-9999px;'/></div></noscript><?php endif ?>
	<? if ($site['pixel'] != null): ?><noscript><img height='1' width='1' style='display:none' src='https://www.facebook.com/tr?id=<?=$site['pixel']?>&ev=PageView&noscript=1'/></noscript><?php endif ?>

</body>
</html>

	<? include 'modal.php'; ?>