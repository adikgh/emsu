<? 
	if ($url == '/sana/') $url_n = '/catalog/';
	else if ($url == '/sana/numbers.php') $url_n = '/sana/?id='.$id;
	else $url_n = '/sana/numbers.php?id='.$id;
?>

<div class="header_sana">
	<div class="header_sana_c">
		<a href="<?=$url_n?>"><div class="header_sana_back"><i class="fas fa-chevron-left"></i></div></a>
		<div class="header_sana_n"><?=$sana['name']?></div>
		<div class="header_share disb_zab5"><i class="far fa-sign-out"></i></div>
	</div>
</div>