<?php
require_once("classes/dbase.php");

class Sitemodel extends CI_Model
{
    function getNewProducts($page_id)
    {
        return $products = $this->db->get('tbl_products')->result_array();
    }
    function getPageData($page_id)
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'tbl_page_data', "page_id=$page_id");
        if(isset($data))
        {
            if (count($data) > 0) {
                $data_array = array();
                foreach ($data as $d) {
                    $data_array[$d->section_id] = json_decode($d->data);
                }
                // echo "<pre>";
                // print_r($data_array);
                // echo "</pre>";exit;
                return $data_array;
            } else {
                return false;
            }
        }
    } 

    function listing_urls()
    {
        $obj = new Dbase();		
        $data = $obj->select(array('a.id,a.page_id,a.section_id, b.page_name,a.product_name'), 'tbl_products as a left join tbl_pages as b on a.page_id=b.id', "", "page_id,section_id");
        //if (isset($data)) {
            return $data;
        // } else {
        //     return false;
        // }
    }
	function products_listing_urls()
    {
        $obj = new Dbase();
		$data = $obj->select(array('*'), 'tbl_products');
       // if (isset($data) > 0) {
            return $data;
        // } else {
        //     return false;
        // }
    }
    function shipping_details()
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'tbl_courier_services');
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function deleteProduct($product_id)
    {
        $obj = new Dbase();
        $deleted = $obj->delete("tbl_products", "id=$product_id");
        if ($deleted) {
            return true;
        } else {
            return false;
        }
    }

    function deletePageData($page_id, $section_id)
    {
        $obj = new Dbase();
        $deleted = $obj->delete("tbl_page_data", "page_id=$page_id AND section_id = $section_id");
        if ($deleted) {
            return true;
        } else {
            return false;
        }
    }

     function getProducts($page_id, $section_id, $filter = "",$price = false)
   // function getProducts()
    {
        try {
             $filter_where ='';
			 $section_where ='';
             $obj = new Dbase();
			 if($price != false){
				if ($filter != "" && $filter != "0") {
					$filter_where = " AND FIND_IN_SET('$filter',filter_options) AND price Between $price[0] and $price[1]";
				}else{
					$filter_where = "AND price Between $price[0] and $price[1]";
				}
				if ($section_id != "0") {
					$query = "page_id=$page_id and section_id=$section_id $filter_where";
					
				}
				else{
					$query = "page_id=$page_id $filter_where";
				}
			}else{
				if ($filter != "") {
					$filter_where = " AND FIND_IN_SET('$filter',filter_options)";
				}
				if ($section_id != "0") {
					$query = "page_id=$page_id and section_id=$section_id $filter_where";
					
				}
				else{
					$query = "page_id=$page_id $filter_where";
				}
			}
			
            $data = $obj->select(array('*'), 'tbl_products', $query);
            // $data = $obj->select(array('*'), 'tbl_products');
            if (isset($data) > 0) {
                return $data;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    function getAllProducts()
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'tbl_products', "", "", "", "");
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function getMatColors()
    {
        $obj = new Dbase();
        $colors = $obj->select(array('*'), 'tbl_mat_colors');
        if (isset($data['mat_colors']) ? count($mat_colors['top']) : 0) {
            $array = array();$i=0;
            foreach($colors as $color){
                $array[$color->mat_type][$i]['color'] = $color->color;
                $array[$color->mat_type][$i]['name'] = $color->name;
                $i++;
            }
            return $array;
        } else {
            return false;
        }
    }

    function getWallColors()
    {
        $obj = new Dbase();
        $colors = $obj->select(array('*'), 'tbl_wall_colors');
        // var_dump($colors);
        // exit;
        if (isset($data['mat_colors']) ? count($colors['top']) : 0)   
        // if (count($colors) > 0) 
        {
            $array = array();$i=0;
            foreach($colors as $color){
                $array[$color->type][$i]['color'] = $color->color;
                $array[$color->type][$i]['name'] = $color->name;
                $i++;
            }
            return $array;
        } else {
            return false;
        }
		return false;
    }

    function getFilters()
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'filters');
        if (count($data) > 0) {
            $filters = array();
            foreach ($data as $filter) {
                $filters[$filter->filter_heading][] = $filter->filter_option;
            }
            return $filters;
        } else {
            return false;
        }
    }

    function loadFilters($page_id)
    {
        $obj = new Dbase();
        $data = $obj->select(array('id,filter_option'), 'filters', "page_id=$page_id");
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function loadPageData($page_id, $section_id)
    {
        $obj = new Dbase();
        $data = $obj->selectSRow(array('*'), 'tbl_page_data', "page_id=$page_id and section_id=$section_id");
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function getProductDetail($product_id)
    {
        $obj = new Dbase();
        $data = $obj->selectSRow(array('*'), 'tbl_products', "id=$product_id");
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function adminVerifyLogin($email, $password)
    {
        $obj = new Dbase();
        $data = $obj->selectSRow(array('*'), 'users', "email='" . $email . "' AND password='" . $password . "'");
        if ($data['id'] != "") {
            return $data;
        } else {
            return false;
        }
    }
    function verifyLogin($email, $password)
    {
        $obj = new Dbase();
        $data = $obj->selectSRow(array('*'), 'customers', "email='" . $email . "' AND password='" . $password . "'");
        if ($data['customerId'] != "") {
            return $data;
        } else {
            return false;
        }
    }
	function getCustomerByEmail($email)
    {
        $obj = new Dbase();
        $data = $obj->selectSRow(array('*'), 'customers', "email='" . $email . "'");
        if ($data['customerId'] != "") {
            return $data;
        } else {
            return false;
        }
    }
    function adminRegister($email, $password, $name)
    {
        $obj = new Dbase();
        $inserted = $obj->insert(array('email' => "$email", 'password' => "$password", 'name' => "$name", 'date_added' => date('Y-m-d H:i:s')), "users");
        if ($inserted) {
            return true;
        } else {
            return false;
        }
    }
    function register($data)
    {
        $obj = new Dbase();
        $inserted = $obj->insert($data, "customers");
        if ($inserted) {
            return true;
        } else {
            return false;
        }
    }
    function updateCustomer($data,$email)
    {
        $obj = new Dbase();
        //$inserted = $obj->insert($data, "customers");
    	$this->db->where('email', $email);
       $updated = $this->db->update('customers', $data);
        if ($updated) {
            return true;
        } else {
            return false;
        }
    }
    function load_search_data($search)
    {
        $obj = new Dbase();
        $data = array();
        $search = $obj->escape($search);
        $pages = $obj->select(array('id, page_name'), 'tbl_pages', "page_name like '%" . $search . "%'");
        if (count($pages) > 0) {
            foreach ($pages as $page) {
                $data['pages'][] = array('name' => $page->page_name, 'id' => $page->id);
            }
        }
        $products = $obj->select(array('id, product_name'), 'tbl_products', "product_name like '%" . $search . "%'");
        if (count($products) > 0) {
            foreach ($products as $product) {
                $data['products'][] = array('name' => $product->product_name, 'id' => $product->id);
            }
        }
        return $data;
    }

    function getOrders()
    {

        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('customers', 'customers.customerId = orders.customerId');
        $query = $this->db->get();
        return $query->result();
    }
    function getOrderItems($id)
    {
        $this->db->select('*');
        $this->db->from('orderitems');
        $this->db->join('tbl_products', 'orderitems.productId = tbl_products.id');
        $this->db->where('orderitems.orderId',$id);
        $query = $this->db->get();
      // $query = $obj->select(array('*'), 'orderitems',"orderId='".$id."'");
        return $query->result();
    }
    function addOrder($data)
    {
         $obj = new Dbase();
         $inserted = $obj->insert($data, "orders");
         return $inserted;
    }
    function addOrderItems($data)
    {
         $obj = new Dbase();
         $inserted = $obj->insert($data, "orderitems");
         return $inserted;
    }
    function getItemQty($id)
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'products',"id='".$id."'");
        if (count($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }
    function updateOrderStatus($status,$id)
    {
        $this->db->set('status', $status);
        $this->db->where('orderId', $id);
        return $this->db->update('orders');
    }
	function getArtists()
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'artist');
        return $data;
    }
	function getArtworks()
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'artwork');
        return $data;
    }
	function getArtworksByArtist($artistId)
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'artwork',"artistId='".$artistId."'");
        return $data;
    }
	function getArtworksByCategory($category)
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'artwork',"category='".$category."'");
        return $data;
    }
	function getArtworksById($artworkId)
    {
        $obj = new Dbase();
        $data = $obj->select(array('*'), 'artwork',"artworkId='".$artworkId."'");
        return $data;
    }
}
