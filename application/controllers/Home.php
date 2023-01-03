<?php
date_default_timezone_set('UTC');
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// public function InvoicePdf()
	// {
	// 	$this->load->library('pdf');
	// 	$html = "Demo pdf download";
	// 	$dompdf = new PDF();
	// 	$dompdf->load_html($html);
	// 	$dompdf->render();
	// 	$output = $dompdf->output();
	// 	file_put_contents('helloPDF.pdf', $output);
	// }
	public function phpinfo()
	{
		$this->load->view('exe');
	}
	public function index()
	{
		// $this->load->library('session');
		$this->load->library('cart');
		unset($_SESSION['slider_session']);
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(25);
		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	 public function listing($page_id, $section_id = '0', $filter = '', $price = false)
	//public function listing()
	{
		$data['filters']="";
		$prices = false;
		if($price != false){
			$prices = explode("-", $price);
		}
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		if($filter == ''){
			$data['isFilter'] =false;
		}
		else{
			$data['isFilter'] =true;
		}
	    $data['products'] = $this->Sitemodel->getProducts($page_id, $section_id, $filter,$prices);
		//$data['products'] = $this->Sitemodel->getProducts();
		$data['filters'] = $this->Sitemodel->getFilters();		
		if($price == false){
			$this->load->view('header', $data);
			$this->load->view('listing');
			$this->load->view('footer');
		}else{
			echo json_encode($data);
		}
	}

	public function detail($product_id)
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['product'] = $this->Sitemodel->getProductDetail($product_id);
		$this->load->view('header', $data);
		$this->load->view('detail');
		$this->load->view('footer');
	}

	public function customerDetail()
	{
		if(!$this->session->userdata('customer_logged_in')){
		
			echo json_encode(0);
			return;
		}
		$customer = $this->session->userdata('customer_logged_in');
		echo json_encode($customer);
		// $this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['product'] = $this->Sitemodel->getProductDetail($product_id);
		// $this->load->view('header', $data);
		// $this->load->view('detail');
		// $this->load->view('footer');
	}

/***************Cart******************/

	public function cart()
	{
		$this->load->library('cart');
		if($this->session->userdata('customer_logged_in')){
			$data['customer'] = $this->session->userdata('customer_logged_in');
		    $this->load->view('header',$data);
		}
		else{
			$this->load->view('header');
		}
		$this->load->view('cart');
		$this->load->view('footer');
	}
	public function addToCart()
	{	
		$this->load->library('cart');
			$user_id = $this->session->userdata('customer_logged_in');
			$product_id = $this->input->post('id');
			$name = $this->input->post('name');
			$price = $this->input->post('price');
		    $image = $this->input->post('image');
			$quantity = $this->input->post('quantity');
			// 'discount'    => $this->input->post('discount');
			// 'orderId' =>0;
			$cartProduct = $this->db->select('*')
			->from('cart')
			->where(['user_id'=> $user_id, 'id',$product_id])
			->get();
			if($cartProduct == '')
			{
				echo 'insert';
			}else{
				echo 'update';
			}
			// echo $this->cart->insert($data);
		//  echo $this->input->post('qty');
	}
	// Cart functionality is done by now now just have to integrate 
	public function removeFromCart()
	{
		$rowid = $this->input->get('rowid');
		$this->load->library('cart');
		$data['isRemove'] =$this->cart->remove($rowid);
		$data['totalPrice'] =$this->cart->total();
		echo json_encode($data);
	}
	public function updateCart()
	{
		$rowid = $this->input->get('rowid');
		$qty = $this->input->get('qty');
		$this->load->library('cart');
		$data = array(
			'rowid' => $rowid,
			'qty'   => $qty
	    );
		echo $this->cart->update($data);
	} 

/***************CartEnd******************/

/***************Orders******************/

public function addOrders()
{
	$customerId = $this->input->post('customerId');
	$shippingAddress = $this->input->post('shippingAddress');
	$this->load->model('Sitemodel');
	$this->load->library('cart');
	
	$order = array(
		'customerId' => $customerId,
		'shippingAddress' => $shippingAddress,
		'date'   => date("Y-m-d"),
		'totalAmount' => $this->cart->total(),
		'status'   => "Pending"
	);
	$orderId=$this->Sitemodel->addOrder($order);
	foreach ($this->cart->contents() as $value) {
		$data =	array(
			'orderId'   => $orderId,
			'productId' => $value['id'],
			'qty'=>$value['qty'],
			'price'=>$value['price'],
			'discount'=>$value['discount']
		 );
		 $this->Sitemodel->addOrderItems($data);
	}
	echo json_encode($this->cart->destroy());

	//print_r($this->Sitemodel->addOrder($order));
}
	/***************OrdersEnd******************/
	public function product_categories()
	{
		$this->load->library('cart');
		$this->load->view('header');
		$this->load->view('product_categories');
		$this->load->view('footer');
	}
	// New Pages
	public function about()
	{
		$this->load->library('cart');
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
	}
	public function aboutus()
	{
		$this->load->library('cart');
		$this->load->view('header');
		$this->load->view('about_us-bk');
		$this->load->view('footer');
	}
	public function contact()
	{
		if ($this->input->post('name')===null) {	
			$this->load->library('cart');
			$this->load->view('header');
			$this->load->view('contact_us');
			$this->load->view('footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			$emailBody = '<b>Name:</b> '.$name;
			$emailBody = $emailBody.'<br><b>Email:</b> '.$email.'';
			$emailBody = $emailBody.'<br><b>Message:</b> '.$message;
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				// 'smtp_port' => 465,
				'smtp_port' => 587,
				'smtp_user' => 'faizanmalik135',
				'_smtp_auth' => TRUE,
				'smtp_pass' => 'faizan@111',
				'smtp_crypto' => 'tls',
				'mailtype' => 'html', // or html
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE,
			);
			
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			// $this->email->initialize($config);
			$this->email->from('faizanmalik135@gmail.com', 'Faizan');
			$this->email->to('faizanmalik135@gmail.com');
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');

			$this->email->subject('Message Send From Website');
			$this->email->message($emailBody);
			// echo $this->email->send();
			if($this->email->send()){
				echo "Your Message has been sent successfully";
			}else{
				//show_error($this->email->print_debugger());
				echo "Message Sending Failed! Please Try Again After Some Time";
			}						
		}			
	}

	/*********PRODUCTS*********/
	public function products()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['products'] = $this->Sitemodel->getNewProducts(1);
		$this->load->view('header', $data);
		$this->load->view('products/newProducts',$data);
		$this->load->view('footer');
	}
	public function product($id)
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(1);
		// $data['products'] = $this->Sitemodel->getAllProducts();
		$product_list = $this->Sitemodel->getProductDetail($id);
		$this->load->view('header', $data);
		$this->load->view('products/product',['product'=>$product_list]);
		$this->load->view('footer');	
	}
	public function product_painting()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(3);
		$this->load->view('header', $data);
		$this->load->view('products/product_painting');
		$this->load->view('footer');
	}
	public function product_wooden_art()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(4);
		$this->load->view('header', $data);
		$this->load->view('products/product_wooden_art');
		$this->load->view('footer');
	}
	public function product_prints()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(5);
		$this->load->view('header', $data);
		$this->load->view('products/product_prints');
		$this->load->view('footer');
	}
	public function product_exclusive()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(2);
		$data['products'] = "";//$this->Sitemodel->getProducts();
		$this->load->view('header', $data);
		$this->load->view('products/product_exclusive');
		$this->load->view('footer');
	}
	/*********PRODUCTS*********/
	

	/*********PRODUCTS*********/

	/*********SERVICES*********/
	public function services()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header', $data);
		$this->load->view('services/services');
		$this->load->view('footer');
	}
	public function artists()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/artists');
		$this->load->view('footer');
	}
	public function corporate()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/corporate');
		$this->load->view('footer');
	}
	public function retail()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/retail');
		$this->load->view('footer');
	}
	public function photographers()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/photographers');
		$this->load->view('footer');
	}
	public function education()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/education');
		$this->load->view('footer');
	}
	public function professionals()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/professionals');
		$this->load->view('footer');
	}
	public function interior()
	{
		$this->load->library('cart');
		// $this->load->model('Sitemodel');
		// $data['page_data'] = $this->Sitemodel->getPageData(6);
		$this->load->view('header');
		$this->load->view('services/interior');
		$this->load->view('footer');
	}
	public function custom_framming()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(7);
		$this->load->view('header', $data);
		$this->load->view('services/custom_framming');
		$this->load->view('footer');
	}
	public function corporate_services()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(8);
		$this->load->view('header', $data);
		$this->load->view('services/corporate_services');
		$this->load->view('footer');
	}
	public function gallery_wall_design()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(9);
		$this->load->view('header', $data);
		$this->load->view('services/gallery_wall_design');
		$this->load->view('footer');
	}
	public function printing()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(10);
		$this->load->view('header', $data);
		$this->load->view('services/printing');
		$this->load->view('footer');
	}
	public function screen_printing()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(11);
		$this->load->view('header', $data);
		$this->load->view('services/screen_printing');
		$this->load->view('footer');
	}
	public function laser_cutting()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(12);
		$this->load->view('header', $data);
		$this->load->view('services/laser_cutting');
		$this->load->view('footer');
	}
	/*********SERVICES*********/

	

	/*********WHAT WE FRAME*********/
	public function what_we_frame()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(13);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/what_we_frame');
		$this->load->view('footer');
	}
	public function printing_and_canvas()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(14);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/printing_and_canvas');
		$this->load->view('footer');
	}
	public function prints_and_posters()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(15);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/prints_and_posters');
		$this->load->view('footer');
	}
	public function educational_and_professional()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(16);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/educational_and_professional');
		$this->load->view('footer');
	}
	public function souvenirs()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(17);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/souvenirs');
		$this->load->view('footer');
	}
	public function mirrors_and_more()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['page_data'] = $this->Sitemodel->getPageData(18);
		$this->load->view('header', $data);
		$this->load->view('what_we_frame/mirrors_and_more');
		$this->load->view('footer');
	}
	/*********WHAT WE FRAME*********/



/*********framming supplies*********/
public function framming_supplies()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(19);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/framming_supplies');
	$this->load->view('footer');
}
public function moulding()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(20);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/moulding');
	$this->load->view('footer');
}
public function mat_board()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(21);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/mat_board');
	$this->load->view('footer');
}
public function glazing()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(22);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/glazing');
	$this->load->view('footer');
}
public function loose_material()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(23);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/loose_material');
	$this->load->view('footer');
}
public function other_supplies()
{
	$this->load->library('cart');
	$this->load->model('Sitemodel');
	$data['page_data'] = $this->Sitemodel->getPageData(24);
	$this->load->view('header', $data);
	$this->load->view('framming_supplies/other_supplies');
	$this->load->view('footer');
}

/*********framming supplies*********/

/********* virtual_art_gallery *********/
	public function virtual_art_gallery()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data["artists"] = $this->Sitemodel->getArtists();
		$data["artworks"] = $this->Sitemodel->getArtworks();
		$this->load->view('header', $data);
		$this->load->view('virtual_art_gallery');
		$this->load->view('footer');
	}
	public function get_artwork_by_artist()
	{
		$this->load->model('Sitemodel');
		$data["artworks"] = $this->Sitemodel->getArtworksByArtist($_GET['artistId']);
		echo json_encode($data);
	}
	public function get_artwork_by_category()
	{
		$this->load->model('Sitemodel');
		$data["artworks"] = $this->Sitemodel->getArtworksByCategory($_GET['category']);
		echo json_encode($data);
	}
	public function get_artwork_by_id()
	{
		$this->load->model('Sitemodel');
		$data["artworks"] = $this->Sitemodel->getArtworksById($_GET['artworkId']);
		echo json_encode($data);
	}

	public function slider()
	{
		$this->load->library('cart');
		$html = '';
		if (isset($_SESSION['slider_session']) && $_SESSION['slider_session']['addSlide'] == 'yes') {
			$this->load->model('Sitemodel');
			$slider_data = $this->Sitemodel->getProductDetail($_SESSION['slider_session']['product_id']);
			$url = base_url() . 'home/detail/' . $_SESSION['slider_session']['product_id'];
			$html = '<div class="da-slide" style="background-image: url(\'' . base_url((isset($slider_data['bg_img']) ? $slider_data['bg_img'] : 'assets/images/08-abc-colors-psychology-home-gray-walls.jpg')) . '\')">
				<h2>' . $slider_data['product_name'] . '</h2>
				<p>' . $slider_data['description'] . '</p>
				<a href="' . $url . '" target="_blank" class="da-link">Buy Now</a>
				<div class="da-img">
					<img src="' . base_url($slider_data['product_img']) . '" alt="image01" style="width: 75%" />
				</div>
			</div>';
		}
		$data['html'] = $html;
		$this->load->view('virtual_art_gallery_1', $data);
	}

	function sliderAjax()
	{
		$this->load->library('cart');
		$action = $this->input->post('action');
		$product_id = $this->input->post('product_id');
		if ($action == 'load') {
			$_SESSION['slider_session'] = array('addSlide' => 'yes', 'product_id' => $product_id);
		}
	}

	function load_search_data()
	{
		$this->load->library('cart');
		$search = $_POST["query"];
		$this->load->model('Sitemodel');
		$results = $this->Sitemodel->load_search_data($search);
		if (count($results['pages']) > 0) {
			$str = '<p style="margin-bottom:0.7rem">QUICK LINKS</p><ul class="searchBoxUL" id="quicklinks" style="margin: 0;">';
			foreach ($results['pages'] as $page) {
				$function = $this->getPagefunction($page['id']);
				$str .= '<li><a href="' . base_url() . 'home/' . $function . '">' . $page['name'] . '</a></li>';
			}
			$str .= '</ul>';
		}
		if (count($results['products']) > 0) {
			$str .= '<hr style="margin: 18px 0 23px 0;"><p style="margin-bottom:0.7rem">SUGGESTED SEARCHES</p><ul class="searchBoxUL" id="suggestedseraches" style="margin: 0;">';
			foreach ($results['products'] as $product) {
				$str .= '<li><a href="' . base_url() . 'home/detail/' . $product['id'] . '">' . $product['name'] . '</a></li>';
			}
			$str .= '</ul>';
		}
		echo $str;
	}

	function getPagefunction($page_id)
	{
		$array = array(
			'1' => 'products',
			'2' => 'product_exclusive',
			'3' => 'product_painting',
			'4' => 'product_wooden_art',
			'5' => 'product_prints',
			'6' => 'services',
			'7' => 'custom_framming',
			'8' => 'corporate_services',
			'9' => 'gallery_wall_design',
			'10' => 'printing',
			'11' => 'screen_printing',
			'12' => 'laser_cutting',
			'13' => 'what_we_frame',
			'14' => 'printing_and_canvas',
			'15' => 'prints_and_posters',
			'16' => 'educational_and_professional',
			'17' => 'souvenirs',
			'18' => 'mirrors_and_more',
			'19' => 'framming_supplies',
			'20' => 'moulding',
			'21' => 'mat_board',
			'22' => 'glazing',
			'23' => 'loose_material',
			'24' => 'other_supplies',
			'25' => 'index'
		);
		return $array[$page_id];
	}

	public function studio_1()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['products'] = $this->Sitemodel->getAllProducts();
		$this->load->view('admin/header', $data);
		$this->load->view('studio_1');
		$this->load->view('admin/footer');
	}

	public function studio()
	{
		$this->load->library('cart');
		$this->load->model('Sitemodel');
		$data['products'] = $this->Sitemodel->getAllProducts();
		$data['mat_colors'] = $this->Sitemodel->getMatColors();
		$data['wall_colors'] = $this->Sitemodel->getWallColors();
		$data['studio'] = true;
		// echo "<pre>";
		// print_r($data['wall_colors']['vibrant']);exit;
		$this->load->view('admin/header', $data);
		$this->load->view('studio',$data);
		$this->load->view('footer');		
	}
	function uploadStudioBgImg()
	{
		$this->load->library('cart');		
		$allowedExts = array("jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);

		if ((($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))
			&& ($_FILES["file"]["size"] < 3000000)
			&& in_array($extension, $allowedExts)
		) {
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			} else {
				$filename = $_FILES["file"]["name"];
				// echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				// echo "Type: " . $_FILES["file"]["type"] . "<br>";
				// echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

				move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $filename);
				//echo "Stored in: " . "uploads/" . $filename;
				echo json_encode(array(
					'error' => false,
					'path' => base_url("uploads/" . $filename)
				));
			}
		} else {
			echo "Invalid file";
		}
	}
	public function uploadStudioImgMultiple()
	{
		$this->load->library('cart');
		$total = count($_FILES['fileToUpload']['name']);

		// Loop through each file
		for ($i = 0; $i < $total; $i++) {

			//Get the temp file path
			$tmpFilePath = $_FILES['fileToUpload']['tmp_name'][$i];

			//Make sure we have a file path
			if ($tmpFilePath != "") {
				//Setup our new file path
				$newFilePath = "uploads/" . $_FILES['fileToUpload']['name'][$i];

				//Upload the file into the temp dir
				if (move_uploaded_file($tmpFilePath, $newFilePath)) {
					echo base_url($newFilePath);
				}
			}
		}
	}
	public function uploadStudioImg()
	{
		$this->load->library('cart');
		$target_dir = "uploads/";
		$temp = explode(".", $_FILES["fileToUpload"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);

		$target_file = $target_dir . basename($newfilename);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if ($check !== false) {
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			$uploadOk = 0;
		}

		// Allow certain file formats
		if (
			$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif"
		) {
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//echo "Sorry, your file was not uploaded.";
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo base_url($target_file);
			} else {
				echo false;
			}
		}
	}
	function uploadStudioImgNew()
	{
		$this->load->library('cart');
		// if ($_POST["label"]) {
		// 	$label = $_POST["label"];
		// }
		$new_width = $_POST["width"];
		$pixelPerInch = $_POST["pixelPerInch"];
		$allowedExts = array("jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);

		if ((($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))
			/*&& ($_FILES["file"]["size"] < 3000000)*/
			&& in_array($extension, $allowedExts)
		) {
			if ($_FILES["file"]["error"] > 0) {
				echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
			} else {
				$filename = $_FILES["file"]["name"];

				//$filename = time().'.'.$extension;
				$filename = str_replace(array(' ','!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]"), "_", $filename);
				// echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				// echo "Type: " . $_FILES["file"]["type"] . "<br>";
				// echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				// echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

				move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/image_" . $filename);

				// $imgInfo = getimagesize("uploads/image_" . $filename);
				$width = 500;
				$height = 500;
				$img_info = getimagesize("uploads/image_" . $filename);

				$ratio_orig = $img_info[0]/$img_info[1];

				if ($width/$height > $ratio_orig) {
				$height = $width/$ratio_orig;;
				} else {
				$height = $width/$ratio_orig;
				}
				
				//for adding white border
				// $image_p = imagecreatetruecolor($width+26, $height+26);				
				$image_p = imagecreatetruecolor($width, $height);				
				if($_FILES["file"]["type"] == "image/png"){
					$image = imagecreatefrompng("uploads/image_" . $filename);	
				}
				if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg"){
					$image = imagecreatefromjpeg("uploads/image_" . $filename);	
				}	
				
				//for adding white border
				// $border_color = imagecolorallocate($image_p, 255, 255, 255);
				// imagefilledrectangle($image_p,0,0,$width + 26,$height + 26,$border_color);
				// imagecopyresampled($image_p, $image, 13, 13, 0, 0, $width, $height, $img_info[0], $img_info[1]);						
				
				imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $img_info[0], $img_info[1]);						
				imagejpeg($image_p, "uploads/image_" . $filename, 100);				
				imagedestroy($image);
				imagedestroy($image_p);
				echo json_encode(array(
					'width' => $width,
					'height' => $height,
					'path' => base_url("uploads/image_" . $filename)
				));
			}
		} else {
			echo "Invalid file";
		}
	}
	function resizeImage($src, $dst, $width, $height, $crop = 0){

		if (!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";

		$type = strtolower(substr(strrchr($src, "."), 1));
		if ($type == 'jpeg') $type = 'jpg';
		switch ($type) {
			case 'bmp':
				$img = imagecreatefromwbmp($src);
				break;
			case 'gif':
				$img = imagecreatefromgif($src);
				break;
			case 'jpg':
				$img = imagecreatefromjpeg($src);
				break;
			case 'png':
				$img = imagecreatefrompng($src);
				break;
			default:
				return "Unsupported picture type!";
		}

		// resize
		if ($crop) {
			if ($w < $width or $h < $height) return "Picture is too small!";
			$ratio = max($width / $w, $height / $h);
			$h = $height / $ratio;
			$x = ($w - $width / $ratio) / 2;
			$w = $width / $ratio;
		} else {
			//if ($w < $width and $h < $height) return "Picture is too small!";
			$ratio = min($width / $w, $height / $h);
			$width = $w * $ratio;
			$height = $h * $ratio;
			$x = 0;
		}

		$new = imagecreatetruecolor($width, $height);

		// preserve transparency
		if ($type == "gif" or $type == "png") {
			imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
			imagealphablending($new, false);
			imagesavealpha($new, true);
		}

		imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

		switch ($type) {
			case 'bmp':
				imagewbmp($new, $dst);
				break;
			case 'gif':
				imagegif($new, $dst);
				break;
			case 'jpg':
				imagejpeg($new, $dst);
				break;
			case 'png':
				imagepng($new, $dst);
				break;
		}
		return true;
	}
	function resizeImage111($sourceImage, $targetImage, $maxWidth, $maxHeight, $quality = 100)
	{
		$isValid = @getimagesize($sourceImage);

		if (!$isValid) {
			return false;
		}

		// Get dimensions and type of source image.
		list($origWidth, $origHeight, $type) = getimagesize($sourceImage);

		if ($maxWidth == 0) {
			$maxWidth  = $origWidth;
		}

		if ($maxHeight == 0) {
			$maxHeight = $origHeight;
		}

		// Calculate ratio of desired maximum sizes and original sizes.
		$widthRatio = $maxWidth / $origWidth;
		$heightRatio = $maxHeight / $origHeight;

		// Ratio used for calculating new image dimensions.
		$ratio = min($widthRatio, $heightRatio);

		// Calculate new image dimensions.
		$newWidth  = (int)$origWidth  * $ratio;
		$newHeight = (int)$origHeight * $ratio;

		// Create final image with new dimensions.
		$newImage = imagecreatetruecolor($newWidth, $newHeight);

		// Obtain image from given source file.
		switch (strtolower(image_type_to_mime_type($type))) {
			case 'image/jpeg':
				$image = @imagecreatefromjpeg($sourceImage);
				if (!$image) {
					return false;
				}

				imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

				if (imagejpeg($newImage, $targetImage, $quality)) {
					// Free up the memory.
					imagedestroy($image);
					imagedestroy($newImage);
					return true;
				}
				break;

			case 'image/png':
				$image = @imagecreatefrompng($sourceImage);

				if (!$image) {
					return false;
				}

				imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

				if (imagepng($newImage, $targetImage, floor($quality / 10))) {
					// Free up the memory.
					imagedestroy($image);
					imagedestroy($newImage);
					return true;
				}
				break;

			default:
				return false;
		}
	}
}
