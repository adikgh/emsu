<? include "../../config/core_a.php";




	
	// 
	if(isset($_GET['reser_add'])) {
		$id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `reser`")))['max(id)'] + 1;
		$status_id = "Жатқызылды";
		$name = @strip_tags($_POST['name']);
		$phone = @strip_tags($_POST['phone']); $phone_alt = @strip_tags($_POST['phone_alt']);
		$manager_id = @strip_tags($_POST['manager_id']); $manager_name = @strip_tags($_POST['manager_name']);
		if (!$manager_id) {
			$manager_id = $user_id;
			$manager_name = $user['name'];
		}
		$reser_dt = $date;

		$arrival_dt_alt = @strip_tags($_POST['arrival_dt']); $arrival_dt = date("Y-m-d", strtotime($arrival_dt_alt));
		$many_dt = @strip_tags($_POST['many_dt']);
		$of_number = @strip_tags($_POST['of_number']);
		$children = @strip_tags($_POST['children']);
		$sana_id = @strip_tags($_POST['sana_id']); $sana_name = @strip_tags($_POST['sana_name']); 
		$room_id = @strip_tags($_POST['room_id']); $room_name = @strip_tags($_POST['room_name']); 
		$room_rate = @strip_tags($_POST['room_rate']); $room_rate_alt = @strip_tags($_POST['room_rate_alt']);
		$prepayment = @strip_tags($_POST['prepayment']); $prepayment_alt = @strip_tags($_POST['prepayment_alt']);
		$percent = @strip_tags($_POST['percent']);
		$reser_dt = date("Y-m-d", strtotime(@strip_tags($_POST['reser_dt'])));
		

		$ins = db::query("INSERT INTO `reser`(`id`, `status_id`, `name`, `phone`, `manager_id`, `reser_dt`) VALUES ('$id', '$status_id', '$name', '$phone', '$manager_id', '$reser_dt')");
		if ($ins) {
			if ($arrival_dt) $upd = db::query("UPDATE `reser` SET `arrival_dt`='$arrival_dt' WHERE `id`='$id'");
			if ($many_dt) $upd = db::query("UPDATE `reser` SET `many_dt`='$many_dt' WHERE `id`='$id'");
			if ($of_number) $upd = db::query("UPDATE `reser` SET `of_number`='$of_number' WHERE `id`='$id'");
			if ($children) $upd = db::query("UPDATE `reser` SET `children`='$children' WHERE `id`='$id'");
			if ($sana_id) $upd = db::query("UPDATE `reser` SET `sana_id`='$sana_id' WHERE `id`='$id'");
			if ($room_id) $upd = db::query("UPDATE `reser` SET `room_id`='$room_id' WHERE `id`='$id'");
			if ($room_rate) $upd = db::query("UPDATE `reser` SET `room_rate`='$room_rate' WHERE `id`='$id'");
			if ($prepayment) $upd = db::query("UPDATE `reser` SET `prepayment`='$prepayment' WHERE `id`='$id'");
			if ($percent) $upd = db::query("UPDATE `reser` SET `percent`='$percent' WHERE `id`='$id'");
			if ($reser_dt) $upd = db::query("UPDATE `reser` SET `reser_dt`='$reser_dt' WHERE `id`='$id'");


			$txt = '';
			$arr = [
				'Жаңа брон: '				=> $id,
				'Қонақ (аты-жөні): '		=> $name,
				'Телефон: ' 				=> $phone_alt,
				'Келетін күні: ' 			=> $arrival_dt_alt,
				'Неше күнге: ' 				=> $many_dt,
				'Қонақ н/c бөлме саны: ' 	=> $of_number,
				'Балалар саны: '			=> $children,
				'Шипажай: ' 				=> $sana_name,
				'Бөлме түрі: '				=> $room_name,
				'Бөлме құны: '				=> $room_rate_alt,
				'Алғашқы төлем: ' 			=> $prepayment_alt,
				'Менеджер: ' 				=> $manager_name,
			];
			foreach($arr as $key => $value) {
				if ($value) $txt .= "<b>".$key."</b> ".$value."%0A";
			}
			$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
			if ($sendToTelegram) echo 'plus'; else echo "error";
		} else echo 'none';
		
		exit();
	}


	// 
	if(isset($_GET['reser_edit'])) {
		$id = @strip_tags($_POST['id']);
		$name = @strip_tags($_POST['name']);
		$phone = @strip_tags($_POST['phone']); if ($phone) $phone_alt = @strip_tags($_POST['phone_alt']);
		$manager_id = @strip_tags($_POST['manager_id']); if ($manager_id) $manager_name = @strip_tags($_POST['manager_name']);

		$arrival_dt_alt = @strip_tags($_POST['arrival_dt']); if ($arrival_dt_alt) $arrival_dt = date("Y-m-d", strtotime($arrival_dt_alt));
		$many_dt = @strip_tags($_POST['many_dt']);
		$of_number = @strip_tags($_POST['of_number']);
		$children = @strip_tags($_POST['children']);
		$sana_id = @strip_tags($_POST['sana_id']); if ($sana_id) $sana_name = @strip_tags($_POST['sana_name']); 
		$room_id = @strip_tags($_POST['room_id']); if ($room_id) $room_name = @strip_tags($_POST['room_name']); 
		$room_rate = @strip_tags($_POST['room_rate']); if ($room_rate) $room_rate_alt = @strip_tags($_POST['room_rate_alt']);
		$prepayment = @strip_tags($_POST['prepayment']); if ($prepayment) $prepayment_alt = @strip_tags($_POST['prepayment_alt']);
		$percent = @strip_tags($_POST['percent']);
		$reser_dt = date("Y-m-d", strtotime(@strip_tags($_POST['reser_dt'])));
		
		
		if ($id) {
			if ($name) $upd = db::query("UPDATE `reser` SET `name`='$name' WHERE `id`='$id'");
			if ($phone) $upd = db::query("UPDATE `reser` SET `phone`='$phone' WHERE `id`='$id'");
			if ($manager_id) $upd = db::query("UPDATE `reser` SET `manager_id`='$manager_id' WHERE `id`='$id'");

			if (@$arrival_dt) $upd = db::query("UPDATE `reser` SET `arrival_dt`='$arrival_dt' WHERE `id`='$id'");
			if ($many_dt) $upd = db::query("UPDATE `reser` SET `many_dt`='$many_dt' WHERE `id`='$id'");
			if ($of_number) $upd = db::query("UPDATE `reser` SET `of_number`='$of_number' WHERE `id`='$id'");
			if ($children) $upd = db::query("UPDATE `reser` SET `children`='$children' WHERE `id`='$id'");
			if ($sana_id) $upd = db::query("UPDATE `reser` SET `sana_id`='$sana_id' WHERE `id`='$id'");
			if ($room_id) $upd = db::query("UPDATE `reser` SET `room_id`='$room_id' WHERE `id`='$id'");
			if ($room_rate) $upd = db::query("UPDATE `reser` SET `room_rate`='$room_rate' WHERE `id`='$id'");
			if ($prepayment) $upd = db::query("UPDATE `reser` SET `prepayment`='$prepayment' WHERE `id`='$id'");
			if ($percent) $upd = db::query("UPDATE `reser` SET `percent`='$percent' WHERE `id`='$id'");
			if ($reser_dt) $upd = db::query("UPDATE `reser` SET `reser_dt`='$reser_dt' WHERE `id`='$id'");


			$txt = '';
			$arr = [
				'Брондағы өзгеріс: '		=> $id,
				'Қонақ (аты-жөні): '		=> $name,
				'Телефон: ' 				=> @$phone_alt,
				'Келетін күні: ' 			=> $arrival_dt_alt,
				'Неше күнге: ' 				=> $many_dt,
				'Қонақ н/c бөлме саны: ' 	=> $of_number,
				'Балалар саны: '			=> $children,
				'Шипажай: ' 				=> $sana_name,
				'Бөлме түрі: '				=> $room_name,
				'Бөлме құны: '				=> @$room_rate_alt,
				'Алғашқы төлем: ' 			=> @$prepayment_alt,
				'Менеджер: ' 				=> $manager_name,
			];
			foreach($arr as $key => $value) {
				if ($value) $txt .= "<b>".$key."</b> ".$value."%0A";
			}
			$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
			if ($sendToTelegram) echo 'plus'; else echo "error";
		}

		
		exit();
	}







	// 
	if(isset($_GET['reser_del'])) {
		$id = strip_tags($_POST['id']);
		$del = db::query("DELETE FROM `reser` WHERE `id` = '$id'");
		if ($del) echo 'yes';
		exit();
	}















	// 
	if(isset($_GET['item_edit'])) {
		$id = strip_tags($_POST['id']);
		$name = strip_tags($_POST['name']);
		$adres = strip_tags($_POST['adres']);
		$sh_adres = strip_tags($_POST['sh_adres']);
		$img = strip_tags($_POST['img']);

		if ($name) $upd = db::query("UPDATE `sana` SET `name`='$name' WHERE `id`='$id'");
		if ($adres) $upd = db::query("UPDATE `sana` SET `address`='$adres' WHERE `id`='$id'");
		if ($img) $upd = db::query("UPDATE `sana` SET `img`='$img' WHERE `id`='$id'");

		echo 'plus';
		exit();
	}

	// 
	if(isset($_GET['cours_arh'])) {
		$id = strip_tags($_POST['id']);
		$cours = fun::sanatorium($id);

		if ($cours['arh'] == 0) $upd = db::query("UPDATE `sana` SET `arh` = 1 WHERE `id` = '$id'");
		else $upd = db::query("UPDATE `sana` SET `arh` = 0 WHERE `id` = '$id'");

		if ($upd) echo 'yes';
		exit();
	}










	// 
	if(isset($_GET['lesson_add'])) {
		$sanatorium_id = strip_tags($_POST['cours_id']);
		$wb_type = strip_tags($_POST['wb_type']);
		$wb_number = strip_tags($_POST['wb_number']);
		$wb_price = strip_tags($_POST['wb_price']);
		$img = strip_tags($_POST['img']);
		
		// $cours = fun::cours($cours_id);
		
		$id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `number`")))['max(id)'] + 1;
		// $number = fun::lesson_next_number($block_id);
		$ins = db::query("INSERT INTO `number`(`sana_id`, `type_id`, `door_id`) VALUES ('$sanatorium_id', '$wb_type', '$wb_number')");

		if ($wb_price) $ubd_li = db::query("UPDATE `number` SET `price` = '$wb_price' WHERE id = '$id'");
		if ($img) $ubd_li = db::query("UPDATE `number` SET `img` = '$img' WHERE id = '$id'");
		
		if ($ins) echo 'yes';
		exit();
	}

	// 
	if(isset($_GET['lesson_edit'])) {
		$id = strip_tags($_POST['id']);
		$wb_type = strip_tags($_POST['wb_type']);
		$wb_number = strip_tags($_POST['wb_number']);
		$wb_price = strip_tags($_POST['wb_price']);
		$img = strip_tags($_POST['img']);

		if ($wb_type) $ins_li = db::query("UPDATE `number` SET `type_id` = '$wb_type' WHERE id = '$id'");
		if ($wb_number) $ins_li = db::query("UPDATE `number` SET `door_id` = '$wb_number' WHERE id = '$id'");
		if ($wb_price) $ins_li = db::query("UPDATE `number` SET `price` = '$wb_price' WHERE id = '$id'");
		if ($img) $ins_li = db::query("UPDATE `number` SET `img` = '$img' WHERE id = '$id'");

		echo 'yes';
		exit();
	}

	// 
	if(isset($_GET['lesson_del'])) {
		$id = strip_tags($_POST['id']);
		$del = db::query("DELETE FROM `number_id` WHERE `id` = '$id'");
		if ($del) echo 'yes';
		exit();
	}

































	// 
	if(isset($_GET['add_item_photo2'])) {
		$id = $_SESSION['project_id'];
		$input_name = 'file';
		$path = '../../assets/uploads/sanatorium/';
		$allow = array();
		$deny = array(
			'phtml', 'php', 'php3', 'php4', 'php5', 'php6', 'php7', 'phps', 'cgi', 'pl', 'asp', 
			'aspx', 'shtml', 'shtm', 'htaccess', 'htpasswd', 'ini', 'log', 'sh', 'js', 'html', 
			'htm', 'css', 'sql', 'spl', 'scgi', 'fcgi', 'exe'
		);
		$data = array();
		$datetime = date('Y-m-d-H-i-s', time());
		$filem = array();

		if (!isset($_FILES[$input_name])) { $error = 'Файлы не загружены.'; }
		else {
			$files = array();
			$diff = count($_FILES[$input_name]) - count($_FILES[$input_name], COUNT_RECURSIVE);
			if ($diff == 0) $files = array($_FILES[$input_name]);
			else {
				foreach($_FILES[$input_name] as $k => $l) {
					foreach($l as $i => $v) {
						$files[$i][$k] = $v;
					}
				}
			}

			foreach ($files as $key=>$file) {
				$error = $success = '';
				if (!empty($file['error']) || empty($file['tmp_name'])) {
					$error = 'Не удалось загрузить файл.';
				} elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
					$error = 'Не удалось загрузить файл.';
				} else {
					$pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
					$name = mb_eregi_replace($pattern, '-', $file['name']);
					$name = mb_ereg_replace('[-]+', '-', $name);
					$parts = pathinfo($name);
					$name = $datetime.'-'.$name;
					array_push($filem, $name);
					
					if (empty($name) || empty($parts['extension'])) {
						$error = 'Недопустимый тип файла';
					} elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) {
						$error = 'Недопустимый тип файла';
					} elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) {
						$error = 'Недопустимый тип файла';
					} else {
						if (move_uploaded_file($file['tmp_name'], $path . $name)) {
							// $sql = db::query("INSERT INTO `sanatorium_img`(`sanatorium_id`, `number`, `name`, `ins_dt`) VALUES ('$id', '$key', '$name', '$datetime')");
							$sql = db::query("INSERT INTO `sana_img`(`sana_id`, `img`) VALUES ('$id', '$name')");
							$success = 'Файл «' . $name . '» успешно загружен.';
						} else $error = 'Не удалось загрузить файл.';
					}
				}
			}

			if (!empty($success)) $data[] = '<p style="color: green">' . $success . '</p>';  
			if (!empty($error)) $data[] = '<p style="color: red">' . $error . '</p>';  
		}
				
		$data = array(
			'error'   => $error,
			'success' => $success,
			'file' => $filem,
		);
		
		header('Content-Type: application/json');
		echo json_encode($data, JSON_UNESCAPED_UNICODE);

		exit();				
	}
	
	// 
	if(isset($_GET['sn_img_del'])) {
		$id = strip_tags($_POST['id']);
		$del = db::query("DELETE FROM `sana_img` WHERE `id` = '$id'");
		if ($del) echo 'yes';
		exit();
	}





























	

	
	// 
	if(isset($_GET['cours_copy'])) {
		$course_id = strip_tags($_POST['id']);
		$course_d = fun::cours($course_id);

		// 
		$new_course_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `cours`")))['max(id)'] + 1;
		$ncourse_number = (mysqli_fetch_assoc(db::query("SELECT max(number) FROM `cours`")))['max(number)'] + 1;
		$ncourse_name = $course_d['name_kz'].' - көшірме';
		$ncourse_access = $course_d['access'];
		$ncourse_price = $course_d['price'];
		$ncourse_price_sole = $course_d['price_sole'];
		$ncourse_img = $course_d['img'];
		// $ncourse_info = $course_d['info'];
		
		$ins_item = db::query("INSERT INTO `cours`(`id`, `number`, `name_kz`, `access`) VALUES ('$new_course_id', '$ncourse_number', '$ncourse_name', '$ncourse_access')");
		if ($ncourse_price) $upd_item = db::query("UPDATE `cours` SET `price` = '$ncourse_price' WHERE id = '$new_block_id'");
		if ($ncourse_price_sole) $upd_item = db::query("UPDATE `cours` SET `price_sole` = '$ncourse_price_sole' WHERE id = '$new_course_id'");
		if ($ncourse_img) $upd_item = db::query("UPDATE `cours` SET `img` = '$ncourse_img' WHERE id = '$new_course_id'");
		// if ($ncourse_info) $upd_item = db::query("UPDATE `cours` SET `info` = '$ncourse_info' WHERE id = '$new_course_id'");

		// if ($course_d['info']) $course_info = fun::course_info($course_d['id']);

		$block = db::query("select * from c_block where cours_id = '$course_id' order by number asc");
		if (mysqli_num_rows($block)) {
			while ($block_d = mysqli_fetch_assoc($block)) {
				$block_id = $block_d['id'];

				$new_block_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `c_block`")))['max(id)'] + 1;
				$nblock_number = $block_d['number'];
				$nblock_name = $block_d['name_kz'];
				$nblock_item = $block_d['item'];
				// $nblock_question = $block_d['question'];

				$ins_item = db::query("INSERT INTO `c_block`(`id`, `cours_id`, `number`, `name_kz`) VALUES ('$new_block_id', '$new_course_id', '$nblock_number', '$nblock_name')");
				if ($nblock_item) $upd_item = db::query("UPDATE `c_block` SET `item` = '$nblock_item' WHERE id = '$new_block_id'");
				// if ($nblock_question) $upd_item = db::query("UPDATE `c_block` SET `question` = '$nblock_question' WHERE id = '$new_block_id'");

				$lesson = db::query("select * from c_lesson where block_id = '$block_id' order by number asc");
				if (mysqli_num_rows($lesson)) {
					while ($lesson_d = mysqli_fetch_assoc($lesson)) {
						$lesson_id = $lesson_d['id'];

						$new_lesson_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `c_lesson`")))['max(id)'] + 1;
						$nlesson_number = $lesson_d['number'];
						$nlesson_name = $lesson_d['name_kz'];
						$nlesson_open = $lesson_d['open'];
						$nlesson_arh = $lesson_d['arh'];

						$ins_item = db::query("INSERT INTO `c_lesson`(`id`, `cours_id`, `block_id`, `number`, `name_kz`) VALUES ('$new_lesson_id', '$new_course_id', '$new_block_id', '$nlesson_number', '$nlesson_name')");
						if ($nlesson_open) $upd_item = db::query("UPDATE `c_lesson` SET `open` = '$nlesson_open' WHERE id = '$new_lesson_id'");
						if ($nlesson_arh) $upd_item = db::query("UPDATE `c_lesson` SET `arh` = '$nlesson_arh' WHERE id = '$new_lesson_id'");

						$item = db::query("select * from c_lesson_item where lesson_id = '$lesson_id' order by number asc");
						if (mysqli_num_rows($item)) {
							while ($item_d = mysqli_fetch_assoc($item)) {

								$new_item_id = (mysqli_fetch_assoc(db::query("SELECT max(id) FROM `c_lesson_item`")))['max(id)'] + 1;
								$nitem_number = $item_d['number'];
								$nitem_type = $item_d['type'];
								$nitem_type_name = $item_d['type_name'];
								$nitem_type_video = $item_d['type_video'];
								$nitem_txt = $item_d['txt'];

								$ins_item = db::query("INSERT INTO `c_lesson_item`(`id`, `lesson_id`, `number`, `type`) VALUES ('$new_item_id', '$new_lesson_id', '$nitem_number', '$nitem_type')");
								if ($nitem_type_name) $upd_item = db::query("UPDATE `c_lesson_item` SET `type_name` = '$nitem_type_name' WHERE id = '$new_item_id'");
								if ($nitem_type_video) $upd_item = db::query("UPDATE `c_lesson_item` SET `type_video` = '$nitem_type_video' WHERE id = '$new_item_id'");
								if ($nitem_txt) $upd_item = db::query("UPDATE `c_lesson_item` SET `txt` = '$nitem_txt' WHERE id = '$new_item_id'");

							}
						}

					}
				}

			}
		}


		if ($upd) echo 'yes';
		exit();
	}
	