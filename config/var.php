<?

	// lang
	$lang = 'ru';
	if (isset($_GET['lang'])) if ($_GET['lang'] == 'kz' || $_GET['lang'] == 'ru') $_SESSION['lang'] = $_GET['lang'];
	if (isset($_SESSION['lang'])) $lang = $_SESSION['lang'];

	// 
	$ver = 10.332;

    // 
	$url = $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$url = $url[0];

    // 
    $site_set = [
        'header' => true,
		'preload' => true,
        'menu'   => true,
        'footer' => true,
        'utopu' => true,
    ];
    $ccss = [];
    $css = [];
    $cjs = [];
    $js = [];
    $code = rand(1000, 9999);
    
    // date - time
    $date = date("Y-m-d", time());
    $time = date("H:m:s", time());
    $datetime = date('Y-m-d H:i:s', time());



    // bot
	// https://api.telegram.org/bot1082028620:AAGRXcmhEtOlK3Z29Fa7Vq6JfIK1Uwdw-P4/getUpdates
	$chat_id = "-1001992272015";
	$token = "1082028620:AAGRXcmhEtOlK3Z29Fa7Vq6JfIK1Uwdw-P4";