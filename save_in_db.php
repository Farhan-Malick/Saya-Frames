<?php
require_once("classes/dbase.php");
$obj = new Dbase();

function makeJson($array)
{
	if (!empty($array)) {
		$new_array = array();
		$excluded = array('section', 'page');
		foreach ($array as $k => $v) {
			if (!in_array($k, $excluded) && strpos($k, 'submit_btn_') === false) {
				// $new_array[$k] = $v;

				//uncomment above line and comment below line. below is added to handle the quotes in string
				$new_array[$k] = htmlspecialchars($v, ENT_QUOTES);
			}
		}
		return $new_array;
	}
}

function checkPage($page)
{
	global $obj;
	$check = $obj->selectSRow(array('id'), "tbl_pages", "page_name = '$page'");
	if ($check['id'] != '') {
		return $check['id'];
	} else {
		$inserted = $obj->insert(array('page_name' => "$page"), "tbl_pages");
		if ($inserted) {
			return $inserted;
		}
	}
	return false;
}

function uploadImg($files, $form_field)
{
	echo $form_field;
	$target_dir = "uploads/";
	$files[$form_field]["name"] = str_replace(' ', '_', $files[$form_field]["name"]);
	$target_file = $target_dir . basename($files[$form_field]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$check = getimagesize($files[$form_field]["tmp_name"]);
	if ($check !== false) {
		//echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}

	// Check file size
	// if ($files[$form_field]["size"] > 1000000) {
	// 	echo "Sorry, your file is too large.";
	// 	$uploadOk = 0;
	// }

	// Allow certain file formats
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($files[$form_field]["tmp_name"], $target_file)) {
			//echo "The file " . basename($files[$form_field]["name"]) . " has been uploaded.";
			return $target_file;
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	return false;
}

// Product Main Page
if (isset($_POST['submit_btn_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	// $uploaded_img1 = uploadImg($_FILES, 'icon1');
	// $uploaded_img2 = uploadImg($_FILES, 'icon2');
	// $uploaded_img3 = uploadImg($_FILES, 'icon3');
	// $uploaded_img4 = uploadImg($_FILES, 'icon4');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_12'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Product Exclusive
if (isset($_POST['submit_btn_ex_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'img1');
	$uploaded_img2 = uploadImg($_FILES, 'img2');
	$uploaded_img3 = uploadImg($_FILES, 'img3');
	$uploaded_img4 = uploadImg($_FILES, 'img4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_6'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ex_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ex_8'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ex_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ex_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_18'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ex_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ex_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Product Prints
if (isset($_POST['submit_btn_ppp_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'img1');
	$uploaded_img2 = uploadImg($_FILES, 'img2');
	$uploaded_img3 = uploadImg($_FILES, 'img3');
	$uploaded_img4 = uploadImg($_FILES, 'img4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_6'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ppp_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ppp_8'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ppp_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$json_array['bg_img_m'] = $uploaded_img_m;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ppp_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_18'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_ppp_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_ppp_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Prints And Posters
if (isset($_POST['submit_btn_p&p_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'img1');
	$uploaded_img2 = uploadImg($_FILES, 'img2');
	$uploaded_img3 = uploadImg($_FILES, 'img3');
	$uploaded_img4 = uploadImg($_FILES, 'img4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_6'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&p_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&p_8'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&p_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&p_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_18'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&p_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&p_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Product Painting
if (isset($_POST['submit_btn_pt_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_2'])) {
	// $uploaded_img = uploadImg($_FILES, 'icon');
	// if ($uploaded_img != false) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		// $json_array['icon'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
	// }
}
if (isset($_POST['submit_btn_pt_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_4'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pt_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_9'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pt_10'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_12'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	$uploaded_img6 = uploadImg($_FILES, 'background_img6');
	$uploaded_img7 = uploadImg($_FILES, 'background_img7');
	$uploaded_img8 = uploadImg($_FILES, 'background_img8');
	$uploaded_img9 = uploadImg($_FILES, 'background_img9');
	$uploaded_img10 = uploadImg($_FILES, 'background_img10');
	$uploaded_img11 = uploadImg($_FILES, 'background_img11');
	$uploaded_img12 = uploadImg($_FILES, 'background_img12');
	$uploaded_img13 = uploadImg($_FILES, 'background_img13');
	$uploaded_img14 = uploadImg($_FILES, 'background_img14');
	$uploaded_img15 = uploadImg($_FILES, 'background_img15');
	$uploaded_img16 = uploadImg($_FILES, 'background_img16');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$json_array['bg_img6'] = $uploaded_img6;
			$json_array['bg_img7'] = $uploaded_img7;
			$json_array['bg_img8'] = $uploaded_img8;
			$json_array['bg_img9'] = $uploaded_img9;
			$json_array['bg_img10'] = $uploaded_img10;
			$json_array['bg_img11'] = $uploaded_img11;
			$json_array['bg_img12'] = $uploaded_img12;
			$json_array['bg_img13'] = $uploaded_img13;
			$json_array['bg_img14'] = $uploaded_img14;
			$json_array['bg_img15'] = $uploaded_img15;
			$json_array['bg_img16'] = $uploaded_img16;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_15'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pt_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pt_18'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$json_array['icon2'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pt_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Product Wooden Art
if (isset($_POST['submit_btn_pwa_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_2'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_4'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pwa_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_9'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pwa_10'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_12'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	$uploaded_img6 = uploadImg($_FILES, 'background_img6');
	$uploaded_img7 = uploadImg($_FILES, 'background_img7');
	$uploaded_img8 = uploadImg($_FILES, 'background_img8');
	$uploaded_img9 = uploadImg($_FILES, 'background_img9');
	$uploaded_img10 = uploadImg($_FILES, 'background_img10');
	$uploaded_img11 = uploadImg($_FILES, 'background_img11');
	$uploaded_img12 = uploadImg($_FILES, 'background_img12');
	$uploaded_img13 = uploadImg($_FILES, 'background_img13');
	$uploaded_img14 = uploadImg($_FILES, 'background_img14');
	$uploaded_img15 = uploadImg($_FILES, 'background_img15');
	$uploaded_img16 = uploadImg($_FILES, 'background_img16');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$json_array['bg_img6'] = $uploaded_img6;
			$json_array['bg_img7'] = $uploaded_img7;
			$json_array['bg_img8'] = $uploaded_img8;
			$json_array['bg_img9'] = $uploaded_img9;
			$json_array['bg_img10'] = $uploaded_img10;
			$json_array['bg_img11'] = $uploaded_img11;
			$json_array['bg_img12'] = $uploaded_img12;
			$json_array['bg_img13'] = $uploaded_img13;
			$json_array['bg_img14'] = $uploaded_img14;
			$json_array['bg_img15'] = $uploaded_img15;
			$json_array['bg_img16'] = $uploaded_img16;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_15'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pwa_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_pwa_18'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$json_array['icon2'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_pwa_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Mirrors And More
if (isset($_POST['submit_btn_m&m_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_2'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_4'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_m&m_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_9'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_m&m_10'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_12'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	$uploaded_img4 = uploadImg($_FILES, 'background_img4');
	$uploaded_img5 = uploadImg($_FILES, 'background_img5');
	$uploaded_img6 = uploadImg($_FILES, 'background_img6');
	$uploaded_img7 = uploadImg($_FILES, 'background_img7');
	$uploaded_img8 = uploadImg($_FILES, 'background_img8');
	$uploaded_img9 = uploadImg($_FILES, 'background_img9');
	$uploaded_img10 = uploadImg($_FILES, 'background_img10');
	$uploaded_img11 = uploadImg($_FILES, 'background_img11');
	$uploaded_img12 = uploadImg($_FILES, 'background_img12');
	$uploaded_img13 = uploadImg($_FILES, 'background_img13');
	$uploaded_img14 = uploadImg($_FILES, 'background_img14');
	$uploaded_img15 = uploadImg($_FILES, 'background_img15');
	$uploaded_img16 = uploadImg($_FILES, 'background_img16');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$json_array['bg_img4'] = $uploaded_img4;
			$json_array['bg_img5'] = $uploaded_img5;
			$json_array['bg_img6'] = $uploaded_img6;
			$json_array['bg_img7'] = $uploaded_img7;
			$json_array['bg_img8'] = $uploaded_img8;
			$json_array['bg_img9'] = $uploaded_img9;
			$json_array['bg_img10'] = $uploaded_img10;
			$json_array['bg_img11'] = $uploaded_img11;
			$json_array['bg_img12'] = $uploaded_img12;
			$json_array['bg_img13'] = $uploaded_img13;
			$json_array['bg_img14'] = $uploaded_img14;
			$json_array['bg_img15'] = $uploaded_img15;
			$json_array['bg_img16'] = $uploaded_img16;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_15'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_m&m_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_m&m_18'])) {
	$uploaded_img = uploadImg($_FILES, 'icon');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon'] = $uploaded_img;
			$json_array['icon2'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_m&m_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Custom Framing
if (isset($_POST['submit_btn_cf_1'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_3'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_11'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_22'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_26'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_27'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_28'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_29'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_30'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_31'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_32'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_33'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_34'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_35'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_36'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_37'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_38'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_39'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_40'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_41'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_42'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_43'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_44'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_45'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_46'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_47'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_48'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_49'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cf_50'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_51'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_52'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_53'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_54'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_55'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cf_56'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}

// Education and Professional
if (isset($_POST['submit_btn_e&p_56'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_1'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_3'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_11'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_22'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_26'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_27'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_28'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_29'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_30'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_31'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_32'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_33'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_34'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_35'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_36'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_37'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_38'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_39'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_40'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_41'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_42'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_43'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_44'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_45'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_46'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_47'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_48'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_49'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_e&p_50'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_51'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_52'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_53'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_54'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_e&p_55'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Souvenirs
if (isset($_POST['submit_btn_sov_56'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_1'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_3'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_11'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_22'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_26'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_27'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_28'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_29'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_30'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_31'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_32'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_33'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_34'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_35'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_36'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_37'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_38'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_39'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_40'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_41'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_42'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_43'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_44'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_45'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_46'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_47'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_48'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_49'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sov_50'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_51'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_52'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_53'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_54'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sov_55'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Moulding
if (isset($_POST['submit_btn_mou_56'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_1'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_3'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_7'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_11'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_13'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_22'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_23'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_24'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_25'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_26'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_27'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_28'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_29'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_30'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_31'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_32'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_33'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_34'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_35'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_36'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_37'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_38'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_39'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_40'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_41'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_42'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_43'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_44'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_45'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_46'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_47'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_48'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_49'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mou_50'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_51'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_52'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_53'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_54'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$icon = uploadImg($_FILES, 'icon');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['icon'] = $icon;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mou_55'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Gallery Wall Design
if (isset($_POST['submit_btn_gwd_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_gwd_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_gwd_16'])) {
	$uploaded_img1 = uploadImg($_FILES, 'image1');
	$uploaded_img2 = uploadImg($_FILES, 'image2');
	$uploaded_img3 = uploadImg($_FILES, 'image3');
	$uploaded_img4 = uploadImg($_FILES, 'image4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Printing
if (isset($_POST['submit_btn_wwfp_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_wwfp_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwfp_16'])) {
	$uploaded_img1 = uploadImg($_FILES, 'image1');
	$uploaded_img2 = uploadImg($_FILES, 'image2');
	$uploaded_img3 = uploadImg($_FILES, 'image3');
	$uploaded_img4 = uploadImg($_FILES, 'image4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Printing and canvas
if (isset($_POST['submit_btn_p&c_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_p&c_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_p&c_16'])) {
	$uploaded_img1 = uploadImg($_FILES, 'image1');
	$uploaded_img2 = uploadImg($_FILES, 'image2');
	$uploaded_img3 = uploadImg($_FILES, 'image3');
	$uploaded_img4 = uploadImg($_FILES, 'image4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Other supplies
if (isset($_POST['submit_btn_os_17'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_os_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_os_16'])) {
	$uploaded_img1 = uploadImg($_FILES, 'image1');
	$uploaded_img2 = uploadImg($_FILES, 'image2');
	$uploaded_img3 = uploadImg($_FILES, 'image3');
	$uploaded_img4 = uploadImg($_FILES, 'image4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Screen Printing
if (isset($_POST['submit_btn_sp_25'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_sp_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_23'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_sp_24'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon1'] = $uploaded_img1;
			$json_array['icon2'] = $uploaded_img2;
			$json_array['icon3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Laser Cutting
if (isset($_POST['submit_btn_lc_25'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_lc_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_23'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lc_24'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon1'] = $uploaded_img1;
			$json_array['icon2'] = $uploaded_img2;
			$json_array['icon3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Loose Material
if (isset($_POST['submit_btn_lm_25'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_lm_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_14'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_18'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_19'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_20'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_21'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_22'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_23'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_lm_24'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['icon1'] = $uploaded_img1;
			$json_array['icon2'] = $uploaded_img2;
			$json_array['icon3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}


// what_we_fram
if (isset($_POST['submit_btn_wwf_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

if (isset($_POST['submit_btn_wwf_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_wwf_3'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

if (isset($_POST['submit_btn_wwf_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

if (isset($_POST['submit_btn_wwf_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_8'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_wwf_9'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}if (isset($_POST['submit_btn_wwf_10'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_11'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_12'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_wwf_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_14'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_wwf_16'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	$uploaded_img8 = uploadImg($_FILES, 'icon8');
	$uploaded_img9 = uploadImg($_FILES, 'icon9');
	$uploaded_img10 = uploadImg($_FILES, 'icon10');
	$uploaded_img11 = uploadImg($_FILES, 'icon11');
	$uploaded_img12 = uploadImg($_FILES, 'icon12');
	$uploaded_img13 = uploadImg($_FILES, 'icon13');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$json_array['image8'] = $uploaded_img8;
			$json_array['image9'] = $uploaded_img9;
			$json_array['image10'] = $uploaded_img10;
			$json_array['image11'] = $uploaded_img11;
			$json_array['image12'] = $uploaded_img12;
			$json_array['image13'] = $uploaded_img13;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
// Framming Supplies
if (isset($_POST['submit_btn_fs_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fs_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_7'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_10'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fs_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_14'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fs_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fs_18'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	$uploaded_img8 = uploadImg($_FILES, 'icon8');
	$uploaded_img9 = uploadImg($_FILES, 'icon9');
	$uploaded_img10 = uploadImg($_FILES, 'icon10');
	$uploaded_img11 = uploadImg($_FILES, 'icon11');
	$uploaded_img12 = uploadImg($_FILES, 'icon12');
	$uploaded_img13 = uploadImg($_FILES, 'icon13');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$json_array['image8'] = $uploaded_img8;
			$json_array['image9'] = $uploaded_img9;
			$json_array['image10'] = $uploaded_img10;
			$json_array['image11'] = $uploaded_img11;
			$json_array['image12'] = $uploaded_img12;
			$json_array['image13'] = $uploaded_img13;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Corporate Services
if (isset($_POST['submit_btn_cs_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cs_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_7'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_10'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cs_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_14'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_cs_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_cs_18'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	$uploaded_img8 = uploadImg($_FILES, 'icon8');
	$uploaded_img9 = uploadImg($_FILES, 'icon9');
	$uploaded_img10 = uploadImg($_FILES, 'icon10');
	$uploaded_img11 = uploadImg($_FILES, 'icon11');
	$uploaded_img12 = uploadImg($_FILES, 'icon12');
	$uploaded_img13 = uploadImg($_FILES, 'icon13');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$json_array['image8'] = $uploaded_img8;
			$json_array['image9'] = $uploaded_img9;
			$json_array['image10'] = $uploaded_img10;
			$json_array['image11'] = $uploaded_img11;
			$json_array['image12'] = $uploaded_img12;
			$json_array['image13'] = $uploaded_img13;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Mat board
if (isset($_POST['submit_btn_mb_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mb_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_7'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_10'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mb_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_14'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_mb_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_mb_18'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	$uploaded_img8 = uploadImg($_FILES, 'icon8');
	$uploaded_img9 = uploadImg($_FILES, 'icon9');
	$uploaded_img10 = uploadImg($_FILES, 'icon10');
	$uploaded_img11 = uploadImg($_FILES, 'icon11');
	$uploaded_img12 = uploadImg($_FILES, 'icon12');
	$uploaded_img13 = uploadImg($_FILES, 'icon13');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$json_array['image8'] = $uploaded_img8;
			$json_array['image9'] = $uploaded_img9;
			$json_array['image10'] = $uploaded_img10;
			$json_array['image11'] = $uploaded_img11;
			$json_array['image12'] = $uploaded_img12;
			$json_array['image13'] = $uploaded_img13;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Glazing
if (isset($_POST['submit_btn_fsg_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_2'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fsg_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_5'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_7'])) {
	$uploaded_img1 = uploadImg($_FILES, 'background_img1');
	$uploaded_img2 = uploadImg($_FILES, 'background_img2');
	$uploaded_img3 = uploadImg($_FILES, 'background_img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img1'] = $uploaded_img1;
			$json_array['bg_img2'] = $uploaded_img2;
			$json_array['bg_img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_10'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fsg_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_12'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_14'])) {
	$section = $_POST['section'];
	$page = $_POST['page'];
	$checkPage = checkPage($page);
	if ($checkPage !== false) {
		$json_array = makeJson($_POST);
		$json_array['bg_img'] = $uploaded_img;
		$data = array(
			'page_id' => $checkPage,
			'section_id' => $section,
			'data' => json_encode($json_array),
		);
		$inserted = $obj->insert($data, "tbl_page_data");

		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_fsg_15'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_16'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_17'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_fsg_18'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	$uploaded_img8 = uploadImg($_FILES, 'icon8');
	$uploaded_img9 = uploadImg($_FILES, 'icon9');
	$uploaded_img10 = uploadImg($_FILES, 'icon10');
	$uploaded_img11 = uploadImg($_FILES, 'icon11');
	$uploaded_img12 = uploadImg($_FILES, 'icon12');
	$uploaded_img13 = uploadImg($_FILES, 'icon13');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$json_array['image8'] = $uploaded_img8;
			$json_array['image9'] = $uploaded_img9;
			$json_array['image10'] = $uploaded_img10;
			$json_array['image11'] = $uploaded_img11;
			$json_array['image12'] = $uploaded_img12;
			$json_array['image13'] = $uploaded_img13;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}

// Main Home Page
if (isset($_POST['submit_btn_hp_slider'])) {
	$uploaded_img1 = uploadImg($_FILES, 'image1');
	$uploaded_img2 = uploadImg($_FILES, 'image2');
	$uploaded_img3 = uploadImg($_FILES, 'image3');
	$uploaded_img4 = uploadImg($_FILES, 'image4');
	$uploaded_img5 = uploadImg($_FILES, 'image5');
	
	$uploaded_img_m1 = uploadImg($_FILES, 'image_m1');
	$uploaded_img_m2 = uploadImg($_FILES, 'image_m2');
	$uploaded_img_m3 = uploadImg($_FILES, 'image_m3');
	$uploaded_img_m4 = uploadImg($_FILES, 'image_m4');
	$uploaded_img_m5 = uploadImg($_FILES, 'image_m5');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			
			$json_array['image1_m'] = $uploaded_img_m1;
			$json_array['image2_m'] = $uploaded_img_m2;
			$json_array['image3_m'] = $uploaded_img_m3;
			$json_array['image4_m'] = $uploaded_img_m4;
			$json_array['image5_m'] = $uploaded_img_m5;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_2'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}	
		
	}
}
if (isset($_POST['submit_btn_hp_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_6'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_10'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_11'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_12'])) {
	$uploaded_img1 = uploadImg($_FILES, 'img1');
	$uploaded_img2 = uploadImg($_FILES, 'img2');
	$uploaded_img3 = uploadImg($_FILES, 'img3');
	$uploaded_img4 = uploadImg($_FILES, 'img4');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['img1'] = $uploaded_img1;
			$json_array['img2'] = $uploaded_img2;
			$json_array['img3'] = $uploaded_img3;
			$json_array['img4'] = $uploaded_img4;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_hp_13'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	$uploaded_img_m = uploadImg($_FILES, 'background_img_m');
	if($uploaded_img_m == false){
		return;
	}
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$json_array['bg_img_m'] = $uploaded_img_m;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_add_product'])) {
	$uploaded_img1 = uploadImg($_FILES, 'product_img');
	$uploaded_img2 = uploadImg($_FILES, 'bg_img');
	$uploaded_img3 = uploadImg($_FILES, 'small_img');
	$product_name = $_POST['product_name'];
	$frame_type = $_POST['frame_type'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	$features = $_POST['features'];
	$colors = $_POST['colors'];
	$page_id = $_POST['page_id'];
	$section_id = $_POST['section_id'];
	$filter_options = "";
	if (isset($_POST['filter_options']) && !empty($_POST['filter_options'])) {
		$filter_options = implode(',', $_POST['filter_options']);
	}
	if ($uploaded_img1 != false && $uploaded_img2 != false) {
		$data = array(
			'product_img' => $uploaded_img1,
			'bg_img' => $uploaded_img2,
			'small_img' => $uploaded_img3,
			'product_name' => $product_name,
			'type' => $frame_type,
			'price' => $price,
			'discount' => $discount,
			'description' => $description,
			'features' => $features,
			'colors' => $colors,
			'filter_options' => $filter_options,
			'page_id' => $page_id,
			'section_id' => $section_id
		);
		$inserted = $obj->insert($data, "tbl_products");
		if ($inserted) {
			//return true
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}
if (isset($_POST['submit_btn_add_mat_color'])) {
	$mat_type = $_POST['mat_type'];
	$color = $_POST['color'];
	$name = $_POST['cname'];
	$data = array(
		'mat_type' => $mat_type,
		'color' => $color,
		'name' => $name
	);
	$inserted = $obj->insert($data, "tbl_mat_colors");
	if ($inserted) {
		//return true
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}
if (isset($_POST['submit_btn_add_wall_color'])) {
	$color = $_POST['color'];
	$name = $_POST['cname'];
	$color_type = $_POST['color_type'];
	$data = array(
		'color' => $color,
		'type' => $color_type,
		'name' => $name
	);
	$inserted = $obj->insert($data, "tbl_wall_colors");
	if ($inserted) {
		//return true
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}
if (isset($_POST['submit_btn_udpate_product'])) {
	$product_name = $_POST['product_name'];
	$id = $_POST['id'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$description = $_POST['description'];
	$features = $_POST['features'];
	$colors = $_POST['colors'];
	$page_id = $_POST['page_id'];
	$section_id = $_POST['section_id'];
	$filter_options = "";
	if (isset($_POST['filter_options']) && !empty($_POST['filter_options'])) {
		$filter_options = implode(',', $_POST['filter_options']);
	}
	if ($_FILES["product_img"]["size"] > 0 || $_FILES["bg_img"]["size"] > 0) {
		if ($_FILES["product_img"]["size"] > 0 && $_FILES["bg_img"]["size"] <= 0) {
			$uploaded_img1 = uploadImg($_FILES, 'product_img');
			$data = array(
				'product_img' => $uploaded_img1,
				'product_name' => $product_name,
				'price' => $price,
				'discount' => $discount,
				'description' => $description,
				'features' => $features,
				'colors' => $colors,
				'filter_options' => $filter_options,
				'page_id' => $page_id,
				'section_id' => $section_id
			);
		} else if ($_FILES["bg_img"]["size"] > 0 && $_FILES["product_img"]["size"] <= 0) {
			$uploaded_img2 = uploadImg($_FILES, 'bg_img');
			$data = array(
				'bg_img' => $uploaded_img2,
				'product_name' => $product_name,
				'price' => $price,
				'discount' => $discount,
				'description' => $description,
				'features' => $features,
				'colors' => $colors,
				'filter_options' => $filter_options,
				'page_id' => $page_id,
				'section_id' => $section_id
			);
		} else if ($_FILES["bg_img"]["size"] > 0 && $_FILES["product_img"]["size"] > 0) {
			$uploaded_img1 = uploadImg($_FILES, 'product_img');
			$uploaded_img2 = uploadImg($_FILES, 'bg_img');
			$data = array(
				'product_img' => $uploaded_img1,
				'bg_img' => $uploaded_img2,
				'product_name' => $product_name,
				'price' => $price,
				'discount' => $discount,
				'description' => $description,
				'features' => $features,
				'colors' => $colors,
				'filter_options' => $filter_options,
				'page_id' => $page_id,
				'section_id' => $section_id
			);
		}
	} else {
		$data = array(
			'product_name' => $product_name,
			'price' => $price,
			'discount' => $discount,
			'description' => $description,
			'features' => $features,
			'colors' => $colors,
			'filter_options' => $filter_options,
			'page_id' => $page_id,
			'section_id' => $section_id
		);
	}
	$obj->updateCondition("tbl_products", "id=$id", $data);
	$url = $_SERVER['HTTP_REFERER'];
	$url = parse_url($url);
	header("Location:" . $url['scheme'] . "://" . $url['host'] . "/admin/all_products");
}
if (isset($_POST['submit_btn_add_courier'])) {
	$courier = $_POST['courier'];
	$weight = $_POST['weight'];
	$charges = $_POST['charges'];
	$data = array(
		'weight' => $weight,
		'charges' => $charges
	);
	$inserted = $obj->updateCondition('tbl_courier_services', "id=$courier", $data);
	if ($inserted) {
		//return true
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}

// Main Services Page
if (isset($_POST['submit_btn_smp_1'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_2'])) {
	$uploaded_img1 = uploadImg($_FILES, 'icon1');
	$uploaded_img2 = uploadImg($_FILES, 'icon2');
	$uploaded_img3 = uploadImg($_FILES, 'icon3');
	$uploaded_img4 = uploadImg($_FILES, 'icon4');
	$uploaded_img5 = uploadImg($_FILES, 'icon5');
	$uploaded_img6 = uploadImg($_FILES, 'icon6');
	$uploaded_img7 = uploadImg($_FILES, 'icon7');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['image1'] = $uploaded_img1;
			$json_array['image2'] = $uploaded_img2;
			$json_array['image3'] = $uploaded_img3;
			$json_array['image4'] = $uploaded_img4;
			$json_array['image5'] = $uploaded_img5;
			$json_array['image6'] = $uploaded_img6;
			$json_array['image7'] = $uploaded_img7;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_3'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_4'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_5'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_6'])) {
	$uploaded_img1 = uploadImg($_FILES, 'img1');
	$uploaded_img2 = uploadImg($_FILES, 'img2');
	$uploaded_img3 = uploadImg($_FILES, 'img3');
	if ($uploaded_img1 != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['img1'] = $uploaded_img1;
			$json_array['img2'] = $uploaded_img2;
			$json_array['img3'] = $uploaded_img3;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_7'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_8'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_smp_9'])) {
	$uploaded_img = uploadImg($_FILES, 'background_img');
	if ($uploaded_img != false) {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$checkPage = checkPage($page);
		if ($checkPage !== false) {
			$json_array = makeJson($_POST);
			$json_array['bg_img'] = $uploaded_img;
			$data = array(
				'page_id' => $checkPage,
				'section_id' => $section,
				'data' => json_encode($json_array),
			);
			$inserted = $obj->insert($data, "tbl_page_data");

			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	}
}
if (isset($_POST['submit_btn_edit_page_data_bk'])) {
	reset($_FILES);
	$img_key = key($_FILES);
	if ($_FILES[$img_key]['name'] != "") {
		$uploaded_img = uploadImg($_FILES, $img_key);
		if ($uploaded_img != false) {
			$section = $_POST['section'];
			$page = $_POST['page'];
			$json_array = makeJson($_POST);
			$json_array[$img_key] = $uploaded_img;
			$data = array(
				'data' => json_encode($json_array),
			);
			if ($section != "") {
				$where = " and section_id=$section";
			}
			$inserted = $obj->updateCondition("tbl_page_data", "page_id=$page $where", $data);
			if ($inserted) {
				header("Location:" . $_SERVER['HTTP_REFERER']);
			}
		}
	} else {
		$section = $_POST['section'];
		$page = $_POST['page'];
		$json_array = makeJson($_POST);
		foreach ($_POST as $postKey => $postVal) {
			if (strpos($postKey, '_hidden') !== false) {
				$k = explode('_hidden', $postKey)[0];
				$json_array[$k] = $postVal;
				unset($json_array[$postKey]);
			}
		}
		$data = array(
			'data' => json_encode($json_array),
		);
		$inserted = $obj->updateCondition("tbl_page_data", "page_id=$page and section_id=$section", $data);
		if ($inserted) {
			header("Location:" . $_SERVER['HTTP_REFERER']);
		}
	}
}

if (isset($_POST['submit_btn_edit_page_data'])) {
	$json_array = makeJson($_POST);
	$uniquekeys = array();
	if (!empty($_FILES)) {
		foreach ($_FILES as $key => $file) {
			if ($file['name'] != "") {
				$uploaded_img = uploadImg($_FILES, $key);
				if ($uploaded_img != false) {
					$section = $_POST['section'];
					$page = $_POST['page'];
					$json_array[$key] = $uploaded_img;
					$uniquekeys[] = $key;
				}
			}
		}
	}

	$section = $_POST['section'];
	$page = $_POST['page'];
	foreach ($_POST as $postKey => $postVal) {
		if (strpos($postKey, '_hidden') !== false) {
			$k = explode('_hidden', $postKey)[0];
			if (!in_array($k, $uniquekeys)) {
				$json_array[$k] = $postVal;
			}
			unset($json_array[$postKey]);
		}
	}
	$data = array(
		'data' => json_encode($json_array),
	);
	$inserted = $obj->updateCondition("tbl_page_data", "page_id=$page and section_id=$section", $data);
	if ($inserted) {
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}

if (isset($_POST['submit_btn_add_filter'])) {
	$filter_page = $_POST['filter_page'];
	$filter_heading = $_POST['filter_heading'];
	$filter_option = $_POST['filter_option'];
	$json_array = makeJson($_POST);
	$data = array(
		'page_id' => $filter_page,
		'filter_heading' => $filter_heading,
		'filter_option' => $filter_option
	);
	$inserted = $obj->insert($data, "filters");

	if ($inserted) {
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}


//  ************* virtual Art ************ // 

if (isset($_POST['submit_btn_add_artist'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$data = array(
		'fname' => $fname,
		'lname' => $lname,
		'email' => $email
	);
	$inserted = $obj->insert($data, "artist");
	if ($inserted) {
		//return true
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}
if (isset($_POST['submit_btn_add_artwork'])) {
	$uploaded_img = uploadImg($_FILES, 'image');
	$heading = $_POST['heading'];
	$description = $_POST['description'];
	$artistId = $_POST['artistId'];
	$category = $_POST['category'];
	$data = array(
		'heading' => $heading,
		'description' => $description,
		'artistId' => $artistId === '0' ? NULL : $artistId  ,
		'category' => $category,
		'image' => $uploaded_img
	);
	$inserted = $obj->insert($data, "artwork");
	if ($inserted) {
		//return true
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}
}
