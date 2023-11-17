<? include "../config/core.php";

	// site setting
	$menu_name = 'acc';
	$site_set = [
		'header' => 'user',
		'footer' => 'false',
      'ublock' => 'true',
		'utop_nm' => 'Жеке деректер',
		'utop_bk' => ' ',
	];
	$css = ['admin/user', 'admin/uacc'];
	$js = ['admin/user'];
	
?>
<? include "../block/header.php"; ?>

	<? include "all/acc_d.php"; ?>

<? include "../block/footer.php"; ?>