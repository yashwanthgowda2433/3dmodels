<?php

class Main_model extends CI_Model{

	function fetch_all_models_data($limit, $start)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_all_models($limit, $start, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $where = "upload_table.Categories_id = '$cat' AND upload_table.Categories_id2 = '$cat' ";
//   $this->db->where($where);
   $this->db->where("upload_table.Categories_id", $cat);
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_all_models_intwo($limit, $start, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $where = "upload_table.Categories_id = '$cat' AND upload_table.Categories_id2 = '$cat' ";
//   $this->db->where($where);
   $this->db->where("upload_table.Categories_id2", $cat);
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  
  return $query;
 }

 function fetch_3dmodels($limit, $start, $model_id)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Model_id", $model_id);
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }


 function buy_models($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Categories_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }
 function buynew_models($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Categories_id2", $cat);
  
  $query = $this->db->get();
  return $query;
 }

 function buy_dddmodels($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Model_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }
 

 function search_buy_models()
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  //$this->db->where("upload_table.Categories_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }

 function free_models($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Categories_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }
 function freenew_models($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Categories_id2", $cat);
  
  $query = $this->db->get();
  return $query;
 }

 function free_dddmodels($cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  $this->db->where("upload_table.Model_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }
 


 function search_free_models()
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  //$this->db->where("upload_table.Categories_id", $cat);
  
  $query = $this->db->get();
  return $query;
 }

 function range_sliders($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.Sale_count = '$sale_count' AND upload_table.Categories_id = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

//  polycount
function poly_count($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.polygons = '$sale_count' AND upload_table.Categories_id = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }




 function range_slidersnew($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.Sale_count = '$sale_count' AND upload_table.Categories_id2 = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

//  polucount new
function poly_countnew($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.polygons = '$sale_count' AND upload_table.Categories_id2 = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

 function range_dddsliders($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.Sale_count = '$sale_count' AND upload_table.Model_id = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

 function range_dddpolycount($sale_count, $cat)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.polygons = '$sale_count' AND upload_table.Model_id = '$cat' ";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

 function search_range_sliders($sale_count)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.Sale_count = '$sale_count'";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }

 function search_polycount($sale_count)
 {

  $this->db->select("upload_table.* , user_module.Avatar");
  $this->db->from("upload_table");
  //$this->db->where("User_id", $User_id);
  $this->db->order_by("No_of_models", "DESC");
  $this->db->join("user_module","user_module.User_id = upload_table.User_id");
//   $this->db->where("upload_table.Sale_count", $sale_count);
//   $this->db->where("upload_table.Categories_id", $cat);
  $where = "upload_table.polygons = '$sale_count'";
  $this->db->where($where);
  
  $query = $this->db->get();
  return $query;
 }



	function fetch_data($limit, $start, $User_id)
 {

  $this->db->select("*");
  $this->db->from("upload_table");
  $this->db->where("User_id", $User_id);
  //$this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $this->db->order_by("No_of_models", "DESC");
  $query = $this->db->get();
  return $query;
 }

//  download

function download($model_id)
 {

  $this->db->select("*");
  $this->db->from("upload_table");
  $this->db->where("No_of_models", $model_id);
  
  $query = $this->db->get();
  return $query->row();
 }

 function fetch_likes($limit, $start, $User_id)
 {

	$this->db->select("upload_table.*, like_table.Model_id, like_table.User_id");
	$this->db->from("upload_table");
	$this->db->where('upload_table.User_id', $User_id);
	$this->db->join("like_table","like_table.Model_id = upload_table.No_of_models");
	$query = $this->db->get();
	return $query->result();
 }

 function fetch_comments($limit, $start, $User_id)
 {

	$this->db->select("upload_table.*, comments_table.Model_id, comments_table.User_id, comments_table.Feed_back");
	$this->db->from("upload_table");
	$this->db->where('upload_table.User_id', $User_id);
	$this->db->join("comments_table","comments_table.Model_id = upload_table.No_of_models");
	$query = $this->db->get();
	return $query->result();
 }

 function fetch_data_files($limit, $start, $User_id)
 {

  $this->db->select("*");
  $this->db->from("upload_table");
  $this->db->where("User_id", $User_id);
  //$this->db->order_by("id", "DESC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 function fetch_popup($user_model_id)
 {
	$this->db->select("upload_table.* , user_module.Avatar, user_module.User_name");
	$this->db->from("upload_table");
	$this->db->where('No_of_models', $user_model_id);
	$this->db->join("user_module","user_module.User_id = upload_table.User_id");
	$query = $this->db->get();
	return $query->row();
 }

 function fetch_user_photo($user_model_id)
 {
	 $this->db->select("*");
	 $this->db->from("user_module");
	 $this->db->where('User_id', $user_model_id);
	$query = $this->db->get();
	return $query->row();
 }


function get_all_models($all_models_id)
{
	$this->db->select("*");
	$this->db->from("upload_table");
	$this->db->where('No_of_models', $all_models_id);
	$query = $this->db->get();
	return $query->row();
}


	function insert_user_data($data)
	{
		$this->load->database('default');
		$umail = $data['User_email'];
		
		$query = $this->db->query("select *from user_module where User_email='$umail'");
		
        if($query->row())
		{
			$this->session->set_flashdata('error','Email Address already registered, Please Login');
				redirect(base_url()."welcome/index#popupsignup");
		}
		else
		{
			$this->db->insert("user_module",$data);
			
		}
		return $this->db->insert_id();
	}


	function insert_to_cart($data_array)
	{
		$this->db->insert("add_to_cart",$data_array);
		
	}
	function get_cart_item($No_of_models)
	{
		$this->db->select("*");
		$this->db->from("add_to_cart");
		$this->db->where('User_id', $this->session->userdata('User_id'));
		$query = $this->db->get();
		return $query->result();
	}
	function get_cartsitem($No_of_models, $user_id)
	{
		$this->db->select("*");
		$this->db->from("add_to_cart");
        $where = " No_of_models = '$No_of_models' AND User_id = '$user_id'";

		$this->db->where($where);
		$query = $this->db->get();
		return $query->row();
	}
	


//choosefile
	function choose_file($uploaddata)
	{
		$this->load->database('default');
		//$this->db->where('User_id', $User_id);
		//$this->db->update('upload_table');
		$this->db->insert("upload_table",$uploaddata);
		
		// $query = $this->db->get('upload_table');
		// if($query->num_rows() > 0)
		// {
		// 	return $query->row();
		// }
		// else{
		// 	return false;
		// }
		
	}

	
	//transfer

	function insert_tranfer_data($data)
	{
		$this->load->database('default');
		
		$this->db->insert("transfer_table",$data);
		$this->db->set($data);
		$this->db->where('No_of_models', $data);
		$this->db->update('upload_table');
		
	}

	//login model
	function can_login($User_email,$Password)
	{
		$this->db->where('User_email', $User_email);
		$this->db->where('Password',$Password);
		$query = $this->db->get('user_module');
		
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	// login

	// edit profile
	function editprofile_changes($User_id)
	{
		$this->db->where('User_id', $User_id);
		$query = $this->db->get('user_module');
		if($query->num_rows() > 0)
		{
		    return $query->row();
	    }
	    else
	    {
		    return false;
	    }
	}

	function verify_password($Password)
	{
		//$this->db->where('User_email', $User_email);
		$this->db->where('Password',$Password);
		$query = $this->db->get('user_module');
		
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	function update_profile_data($User_id, $profiledata)
	{
		$this->db->set($profiledata);
		$this->db->where('User_id', $User_id);
		$this->db->update('user_module');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// upload file
	function update_upload_data($upload_file, $dataarray)
	{
		$this->db->set($dataarray);
		$this->db->where('Model_path', $upload_file);
		$this->db->update('upload_table');
		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// upload

	function fetch_models()
	{
		//$this->db->order_by('model_id','ASC');
		$this->load->database('default');
		$query = $this->db->get('models');
		return $query->result();
	}

	// fetch categories
	function fetch_categories($model_id)
	{
		$this->load->database('default');
		$this->db->where('model_id', $model_id);
		$query = $this->db->get('models_categories');
		$output = '<option value="">Select models_categories</option>';
		
		foreach($query->result() as $row)
		{
			$output .= '<option value="'.$row->Categories_id.'">'.$row->Categories_name.'</option>';
			
		} 
		return $output;
	}
	function fetch_categories_new($model_id)
	{
		$this->load->database('default');
		$this->db->where('model_id', $model_id);
		$query = $this->db->get('models_categories');
		// $output = '<option value="">Select models_categories</option>';
		$output = '';
		foreach($query->result() as $row)
		{
			if($this->session->userdata('mod_cats_id') == $row->Categories_id)
			{
				$output .= '<li class="w3-bar-item">
				             <div class="li-check">
							<label class="container" id="c-dropdown__label__disabled" style="color:#333;">'.$row->Categories_name.'
								<input type="checkbox" class="model-check" id="new_disable" checked="checked" disabled="disabled" value="'.$row->Categories_id.'">
								<span class="checkmark"></span>
							</label>
							</div>
						</li>'; 
			}
			else{

			
			$output .= '<li class="w3-bar-item">
			                <div class="li-check li-mod-check">
							<label class="container" style="color:#333;">'.$row->Categories_name.'
								<input type="checkbox" class="model-check span-mod-check" id="models_categories2" value="'.$row->Categories_id.'">
								<span class="checkmark"></span>
							</label>
							</div>
						</li>'; 
			}

			
		} 
		// print_r($output);die;
		return $output;
	}

	function fetch_categories_edit($model_id, $cat_id, $cat_id2)
	{
		$this->load->database('default');
		$this->db->where('model_id', $model_id);
		$query = $this->db->get('models_categories');
		// $output = '<option value="">Select models_categories</option>';
		$output = '';
		foreach($query->result() as $row)
		{
			if($cat_id == $row->Categories_id)
			{
				$output .= '<li class="w3-bar-item ">
				            <div class="li-checks">
							<label class="container" id="c-dropdown__label__disabled">'.$row->Categories_name.'
								<input type="checkbox" id="disable" class="model-checks span-mod-checks" checked="checked" disabled="disabled" value="'.$row->Categories_id.'">
								<span class="checkmark"></span>
							</label>
							</div>
						</li>'; 
			}
			elseif($cat_id2 == $row->Categories_id){
				$output .= '<li class="w3-bar-item ">
				            <div class="li-checks">
							<label class="container" id="c-dropdown__label__disabled">'.$row->Categories_name.'
								<input type="checkbox" id="disable" checked="checked" class="model-checks span-mod-checks" disabled="disabled" value="'.$row->Categories_id.'">
								<span class="checkmark"></span>
							</label>
							</div>
						</li>'; 

			}
			else{

			
			$output .= '<li class="w3-bar-item ">
			               <div class="li-checks">
							<label class="container">'.$row->Categories_name.'
								<input type="checkbox" id="models_categories2" value="'.$row->Categories_id.'" disabled="disabled" class="model-checks span-mod-checks">
								<span class="checkmark"></span>
							</label>
							</div>
						</li>'; 
			}

			
		} 
		// print_r($output);die;
		return $output;
	}




	function delete($cart_id)
	{
		$this->db->delete("add_to_cart",array("Cart_id"=>$cart_id));
	}

	// uploads choose file
	function store_pic_data($data){
		$this->load->database('default');
		$insert_data['Model_name'] = $data['file'];

		 $query = $this->db->insert('upload_table', $insert_data);
		 }


	public function getRows($id = ''){
        $this->db->select('Model_id,Model_name,Upload_date');
        $this->db->from('upload_table');
        if($id){
            $this->db->where('Model_id',$Model_id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('Upload_date','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    
    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */
    public function insert($data = array()){
        $insert = $this->db->insert_batch('upload_table',$data);
        return $insert?true:false;
    }



	// 
	
	

	public function run_manual_query_result($query,$db="default")
	{
		$this->load->database($db);
		$query = $this->db->query($query);
		return $query->result();
	}

	public function run_manual_query_row($query,$db="default")
	{
		$this->load->database($db);
		$query = $this->db->query($query);
		return $query->row();
	}
	
	public function get_table($table,$db="default")
	{
		$this->load->database($db);
		$query = $this->db->query("select *from $table");
		return $query->result();
	}	
	
	public function insert_into($table,$in_data,$db="default")
	{
		$this->load->database($db);
		$query = $this->db->insert($table,$in_data);
		return $this->db->insert_id();
	}	
	
	function insert_billing($data)
	{
		$this->load->database('default');
		
		$this->db->insert("billing_table",$data);
		
		return $this->db->insert_id();
	}
	function get_billing_address($user_id)
	{
		$this->db->order_by("Bill_id","DESC");
		
		$query = $this->db->where('User_id', $user_id)
						  ->get('billing_table');
		
		return $query->row();
		
	}
}
