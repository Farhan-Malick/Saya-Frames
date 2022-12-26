<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
 {
	  parent::__construct();
	 if(!$this->session->userdata('logged_in')){
		redirect('AdminLogin');
	 }
	 # code...
 }
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	public function home_page()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/main_index_page');
		$this->load->view('admin/footer');
	}

	public function edit_pages()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/edit_pages');
		$this->load->view('admin/footer');
	}

	public function add_product()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_product');
		$this->load->view('admin/footer');
	}

	public function add_mat_colors()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_mat_colors');
		$this->load->view('admin/footer');
	}

	public function add_wall_colors()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_wall_colors');
		$this->load->view('admin/footer');
	}

	public function all_products()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/all_products');
		$this->load->view('admin/footer');
	}

	function loadProducts()
	{
		$page_id = $this->input->post('page_id');
		$section_id = $this->input->post('section_id');
		$this->load->model('Sitemodel');
		$products = $this->Sitemodel->getProducts($page_id, $section_id);
		$str = '';
		if ($products) {
			foreach ($products as $product) {
				$str .= '<tr>
				<td>' . $product->id . '</td>
				<td>' . $product->product_name . '</td>
				<td>' . $product->price . '</td>
				<td><img src="' . base_url($product->product_img) . '" style="width: 40%;" /></td>
				<td class="text-center">
					<div class="list-icons">
						<div class="dropdown">
							<a href="#" class="list-icons-item" data-toggle="dropdown">
								<i class="icon-menu9"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="' . base_url("admin/updateProduct/" . $product->id) . '" class="dropdown-item">Update</a>
								<a href="' . base_url("admin/deleteProduct/" . $product->id) . '" class="dropdown-item">Delete</a>
							</div>
						</div>
					</div>
				</td>
			</tr>';
			}
		}
		echo $str;
	}

	function loadPageData()
	{
		$page_id = $this->input->post('page_id');
		$section_id = $this->input->post('section_id');
		$this->load->model('Sitemodel');
		$page_data = $this->Sitemodel->loadPageData($page_id, $section_id);
		$str = '';
		if ($page_data) {
			$data = json_decode($page_data['data'], true);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			foreach ($data as $key => $val) {
				if (strpos($key, 'img') === false && strpos($key, 'image') === false && strpos($key, 'icon') === false) {
					$str .= '<div class="form-group row">
						<label class="col-lg-3 col-form-label">'.ucwords(str_replace('_', ' ', $key)).':</label>
						<div class="col-lg-9">
							<input type="text" class="form-control" value="'.$val.'" name="'.$key.'" placeholder="'.ucwords(str_replace('_', ' ', $key)).'">
						</div>
					</div>';
				}else{
					$str .= '<div class="form-group row">
						<label class="col-lg-3 col-form-label">'.ucwords(str_replace('_', ' ', $key)).':</label>
						<div class="col-lg-9">
							<input type="file" class="form-input-styled" accept="image/*" name="'.$key.'">
							<input type="hidden" class="form-control" value="'.$val.'" name="'.$key.'_hidden">
						</div>
					</div>';
				}
			}
			$str .= '<input type="hidden" class="form-control" name="section" value="'.$page_data['section_id'].'">
			<input type="hidden" class="form-control" name="page" value="'.$page_data['page_id'].'">';
		}else{
			$str = '<h4 style="text-align:center">No data found</h4>';
		}
		echo $str;
	}

	function deletePageData(){
		$page_id = $this->input->post('page_id');
		$section_id = $this->input->post('section_id');
		$this->load->model('Sitemodel');
		$page_data = $this->Sitemodel->deletePageData($page_id, $section_id);
	}

	function deleteProduct($product_id)
	{
		$this->load->model('Sitemodel');
		$deleted = $this->Sitemodel->deleteProduct($product_id);
		redirect('admin/all_products');
	}

	function updateProduct($product_id)
	{
		$this->load->model('Sitemodel');
		$data['product_details'] = $product_details = $this->Sitemodel->getProductDetail($product_id);
		$data['filters'] = $this->Sitemodel->getFilters($product_details['page_id']);
		$this->load->view('admin/header', $data);
		$this->load->view('admin/update_product_view');
		$this->load->view('admin/footer');
	}

	public function shipping_details()
	{
		$this->load->model('Sitemodel');
		$data['shipping_details'] = $this->Sitemodel->shipping_details();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/shipping_details');
		$this->load->view('admin/footer');
	}

	public function main_products_page()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/main_products_page');
		$this->load->view('admin/footer');
	}

	public function listing_urls()
	{
		$this->load->model('Sitemodel');
		$data['listing_urls'] = $this->Sitemodel->listing_urls();
		// $data['listing_urls'] = $this->Sitemodel->products_listing_urls();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/listing_urls');
		$this->load->view('admin/footer');
	}
	function addOrders()
	{
		$this->load->model('Sitemodel'); 
		$data= $this->Sitemodel->getOrders();
		 $this->load->view('admin/header', $data);
		// //$this->load->view('admin/header');
		 $this->load->view('admin/orders');
		 $this->load->view('admin/footer');
	}
     function orders()
	{
		$this->load->model('Sitemodel');
		 $data['orders'] = $this->Sitemodel->getOrders();
		$this->load->view('admin/header', $data);
		//$this->load->view('admin/header');
		$this->load->view('admin/orders');
		$this->load->view('admin/footer');
	}
	function orderItems()
	{
		$orderId = $this->input->post('orderId');
		 $this->load->model('Sitemodel');
	    $data['orderItems'] = $this->Sitemodel->getOrderItems($orderId);
		header('Content-Type: application/json');
		echo json_encode( $data['orderItems'] );
	}
	function updateOrderStatus()
	{
		$status = $this->input->post('status');
		$id = $this->input->post('id');
		$this->load->model('Sitemodel');
	    $data = $this->Sitemodel->updateOrderStatus($status,$id);
		echo json_encode($data);
	}
	function loadFilters(){
		$page_id = $this->input->post('page_id');
		$this->load->model('Sitemodel');
		$filters = $this->Sitemodel->loadFilters($page_id);
		if($filters){
			$str = "";
			foreach($filters as $filter){
				$str .= '<option value="'.$filter->filter_option.'">'.$filter->filter_option.'</option>';
			}
			echo $str;
		}else{
			echo '<option value="0" disabled>No Filters Available</option>';
		}
	}

	public function product_exclusive()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/product_exclusive');
		$this->load->view('admin/footer');
	}

	public function product_prints()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/product_prints');
		$this->load->view('admin/product_exclusive');
		$this->load->view('admin/footer');
	}

	public function product_painting()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/product_painting');
		$this->load->view('admin/footer');
	}

	public function product_wooden_art()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/product_wooden_art');
		$this->load->view('admin/product_painting');
		$this->load->view('admin/footer');
	}

	public function prints_and_posters()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/prints_and_posters');
		$this->load->view('admin/product_exclusive');
		$this->load->view('admin/footer');
	}

	public function mirrors_and_more()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/mirrors_and_more');
		$this->load->view('admin/product_painting');
		$this->load->view('admin/footer');
	}

	public function services()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/main_services_page');
		$this->load->view('admin/footer');
	}

	public function corporate_services()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/corporate_services');
		$this->load->view('admin/framming_supplies');
		$this->load->view('admin/footer');
	}

	public function framming_supplies()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/framming_supplies');
		$this->load->view('admin/footer');
	}

	public function mat_board()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/mat_board');
		$this->load->view('admin/framming_supplies');
		$this->load->view('admin/footer');
	}

	public function glazing()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/glazing');
		$this->load->view('admin/framming_supplies');
		$this->load->view('admin/footer');
	}

	public function custom_framming()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/custom_framming');
		$this->load->view('admin/footer');
	}

	public function education_and_professional()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/education_and_professional');
		$this->load->view('admin/custom_framming');
		$this->load->view('admin/footer');
	}

	public function souvenirs()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/souvenirs');
		$this->load->view('admin/custom_framming');
		$this->load->view('admin/footer');
	}

	public function moulding()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/moulding');
		$this->load->view('admin/custom_framming');
		$this->load->view('admin/footer');
	}

	public function gallery_wall_design()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/gallery_wall_design');
		$this->load->view('admin/footer');
	}

	public function printing()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/printing');
		$this->load->view('admin/gallery_wall_design');
		$this->load->view('admin/footer');
	}

	public function printing_and_canvas()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/printing_and_canvas');
		$this->load->view('admin/gallery_wall_design');
		$this->load->view('admin/footer');
	}

	public function other_supplies()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/other_supplies');
		$this->load->view('admin/gallery_wall_design');
		$this->load->view('admin/footer');
	}

	public function screen_printing()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/screen_printing');
		$this->load->view('admin/footer');
	}

	public function laser_cutting()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/laser_cutting');
		$this->load->view('admin/screen_printing');
		$this->load->view('admin/footer');
	}

	public function loose_material()
	{
		$this->load->view('admin/header');
		// $this->load->view('admin/loose_material');
		$this->load->view('admin/screen_printing');
		$this->load->view('admin/footer');
	}

	public function what_we_frame()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/what_we_frame');
		$this->load->view('admin/footer');
	}
	// Virtual Art function
		public function add_artist()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/add_artist');
		$this->load->view('admin/footer');
	}
	public function add_art_work()
	{
		$this->load->model('Sitemodel');
		$data["artists"] = $this->Sitemodel->getArtists();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/add_art_work');
		$this->load->view('admin/footer');
	}
}
