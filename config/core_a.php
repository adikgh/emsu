<? 

    require 'db.php';
    require 'fun_a.php';
    require 't.php';
    // require "smsc_api.php";
    require 'var.php';

    class core {
        public static $user_ph = false;
        public static $user_pm = false;
        public static $user_data = array();

        public function __construct() {
            new db; new fun; new t;
            session_start();
            date_default_timezone_set('Asia/Almaty');
            $this->authorize();
        }

        private function authorize() {
            $user_ph = false;
            $user_pc = false;
            // $user_pm = false;

            if (isset($_COOKIE['uph']) && isset($_COOKIE['upc'])) {
                $user_ph = $_COOKIE['uph'];
                $user_pc = $_COOKIE['upc'];
            }
            if ($user_ph && $user_pc) {
                $user = db::query("SELECT * FROM user WHERE phone = '$user_ph'");
                if (mysqli_num_rows($user)) {
                    $user_data = mysqli_fetch_assoc($user);
                    if ($user_pc == $user_data['password']) {
                        self::$user_ph = $user_ph;
                        self::$user_data = $user_data;
                    } else $this->user_unset();
                } else $this->user_unset();
            }
        }
    
        public function user_unset() {
            self::$user_ph = false;
            self::$user_data = array();
            setcookie('uph', '', time(), '/');
            setcookie('upc', '', time(), '/');
        }
        
    }


    // data
    $core = new core;
    $user = core::$user_data;
    $user_id = @$user['id'];
    
    // 
    $site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));
    $lang = 'kz';
    // $site_set['bootstrap'] = true;
	$site_set['cl_wh'] = false;
    $ccss = ['admin/anim', 'admin/norm'];
    $cjs = ['admin/fun'];