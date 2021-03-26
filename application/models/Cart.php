<?php

    class Cart extends CI_Model{

        function get_cart_count($user_id)
        {

           $query = $this->db->where('User_id', $user_id)
                     ->count_all_results('add_to_cart');
            // $this->db->from("add_to_cart");
            // $this->db->where('User_id', $user_id);
            // $query = $this->db->get();
            return $query;
        }
        function get_cart_items($user_id)
        {
            
            $query = $this->db->where('User_id', $user_id)
                              ->get('add_to_cart');
            return $query->result();
        }

        function likes($data)
        {
            $user_id = $data['User_id'];
            $model_id = $data['Model_id'];
            $query = $this->db->query("select *from like_table where User_id='$user_id' and Model_id='$model_id'");
            
            if($query->row())
            {
                $this->db->delete("like_table", array("User_id"=>$user_id,
                                                      "Model_id"=>$model_id));
            }
            else
            {
            $this->db->insert("like_table",$data);

            }

            $total_likes = $this->db->query("select * from like_table where Model_id='$model_id'");
            return $total_likes->num_rows();
        }

        function send_comments($data)
        {
            $user_id = $data['User_id'];
            $model_id = $data['Model_id'];
            $feedback = $data['Feed_back'];

            $this->db->insert("comments_table", $data);

            $this->db->select("comments_table.*, user_module.Avatar, user_module.User_name");
            $this->db->from("comments_table");
            $this->db->where('Model_id', $model_id);
            $this->db->order_by("Comment_id","DESC");
            $this->db->join("user_module","user_module.User_id = comments_table.User_id");
	        $query = $this->db->get();
            return $query->result();
        }

        function get_likes($model_id)
        {
            $query = $this->db->where('Model_id', $model_id)
                     ->count_all_results('like_table');
                     if($query >= 1000)
                     {
                        $number = $query/ 1000;
                        return round($number).'k';
                     }
                     else if($query >= 1000000){
                         $number = $query/ 1000000;
                        return round($number).'m';
         
                     }
                     else if($query >= 1000000000){
                         $number = $query/ 1000000000;
                        return round($number).'b';
         
                     }
                     else{
                         return $query;
         
                     }
        }
        function count_views($model_id)
        {
            $query = $this->db->where('Model_id', $model_id)
                     ->count_all_results('views');
            if($query >= 1000)
            {
               $number = $query/ 1000;
               return round($number).'k';
            }
            else if($query >= 1000000){
                $number = $query/ 1000000;
               return round($number).'m';

            }
            else if($query >= 1000000000){
                $number = $query/ 1000000000;
               return round($number).'b';

            }
            else{
                return $query;

            }

            
        }

        function count_downlds($model_id)
        {
            $query = $this->db->where('Model_id', $model_id)
                     ->count_all_results('downloads');
            
                     if($query >= 1000)
                     {
                        $number = $query/ 1000;
                        return round($number).'k';
                     }
                     else if($query >= 1000000){
                         $number = $query/ 1000000;
                        return round($number).'m';
         
                     }
                     else if($query >= 1000000000){
                         $number = $query/ 1000000000;
                        return round($number).'b';
         
                     }
                     else{
                         return $query;
         
                     }
        }

        function get_details()
        {
            $this->db->select("*");
            $this->db->from("upload_table");
            $this->db->order_by("No_of_models","DESC");
            $query = $this->db->get();
            return $query;
        }
        

        function get_comments($model_id)
        {
            $this->db->select("comments_table.*, user_module.Avatar, user_module.User_name");
            $this->db->from("comments_table");
            $this->db->where('Model_id', $model_id);
            $this->db->order_by("Comment_id","DESC");
            $this->db->join("user_module","user_module.User_id = comments_table.User_id");
	        $query = $this->db->get();
            return $query->result();
        }

        function count_comments($model_id)
        {
            $query = $this->db->where('Model_id', $model_id)
                     ->count_all_results('comments_table');
            
                     if($query >= 1000)
                     {
                        $number = $query/ 1000;
                        return round($number).'k';
                     }
                     else if($query >= 1000000){
                         $number = $query/ 1000000;
                        return round($number).'m';
         
                     }
                     else if($query >= 1000000000){
                         $number = $query/ 1000000000;
                        return round($number).'b';
         
                     }
                     else{
                         return $query;
         
                     }
        }

        function user_details($User_id)
        {
            
            $query = $this->db->where('User_id', $User_id)
                              ->get('user_module');
            return $query->row();
        }

        function get_models()
        {

            $this->db->select("upload_table.* , user_module.Avatar");
            $this->db->from("upload_table");
            //$this->db->where("User_id", $User_id);
            $this->db->order_by("No_of_models", "DESC");
            
            $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  
            //$this->db->limit($limit, $start);
            $query = $this->db->get();
            return $query->result();
       }
       function get_models_suggests($limit, $start)
        {

            $this->db->select("upload_table.* , user_module.Avatar");
            $this->db->from("upload_table");
            //$this->db->where("User_id", $User_id);
            $this->db->order_by("No_of_models", "DESC");
            $this->db->limit($limit, $start);
            $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  
            //$this->db->limit($limit, $start);
            $query = $this->db->get();
            return $query->result();
       }
       function addtocollection($data)
       {
           $user_id = $data['User_id'];
           $this->db->insert("collection_table",$data);

           $query = $this->db->query("select * from collection_table where User_id='$user_id'");
            return $query->result();
       }

       function get_add_to_collection($user_id)
       {
        $query = $this->db->where('User_id', $user_id)
                ->get('collection_table');
         return $query->result();
       }
       function getaddtocollections($user_id)
       {
        $query = $this->db->where('User_id', $user_id)
                ->get('addto_collections');
         return $query->result();
       }
       function addto($data)
       {
           
           $this->db->insert("addto_collections",$data);
       }
       function addtocollect($data)
       {
           $this->db->insert("collection_table",$data);
       // $this->db->insert("addto_collections",$data);

       }

       function popupdownloads($model_id)
       {
        $query = $this->db->where('No_of_models', $model_id)
                   ->get('upload_table');
         return $query->row();
       }

    //    search
    function search($cat,$Model_name)
    {
        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
        //$this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
       //$where = " upload_table.Categories_id = '$cat' AND upload_table.Model_name = '$Model_name'";
       $this->db->where("upload_table.Categories_id = '$cat'");
       $this->db->like("Model_name",$Model_name);
       
       $query = $this->db->get();
       return $query;
    }
    function searchnew($cat,$Model_name)
    {
        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
        //$this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
       //$where = " upload_table.Categories_id = '$cat' AND upload_table.Model_name = '$Model_name'";
       $this->db->where("upload_table.Categories_id2 = '$cat'");
       $this->db->like("Model_name",$Model_name);
       
       $query = $this->db->get();
       return $query;
    }

    function dddsearch($cat,$Model_name)
    {
        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
        //$this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
       //$where = " upload_table.Categories_id = '$cat' AND upload_table.Model_name = '$Model_name'";
       $this->db->where("upload_table.Model_id = '$cat'");
       $this->db->like("Model_name",$Model_name);
       
       $query = $this->db->get();
       return $query;
    }

    function header_search($Model_name)
    {
        if($Model_name == 'popular_models')
        {
         
            $this->db->select("views.*, count(views.view_id) as count, u.*, user_module.Avatar");
        $this->db->from("upload_table u");
        //$this->db->where("User_id", $User_id);
        // $this->db->order_by("No_of_models", "DESC");
        $this->db->join("views", "views.Model_id = u.No_of_models");
        $this->db->join("user_module", "user_module.User_id = u.User_id");

        $this->db->group_by("views.Model_id");
        $this->db->order_by("count(*)", "desc");
        // $this->db->where("'views' in", "(select Model_id, count(view_id) as count) from views group by model_id ORDER BY COUNT(*) DESC");
    
       $query = $this->db->get();
    //    print_r($query->result());die;
       return $query;

        }else{

        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
        $this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        $this->db->like("Model_name",$Model_name);
    
       $query = $this->db->get();
       return $query;

        }
     }
     function header_sharesearch($Model_name)
    {
        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
        //$this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        $this->db->like("Thumbnail",$Model_name);
    
       $query = $this->db->get();
       return $query;
     }


       function extensions($cat, $ext)
       {

        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
       //$this->db->where("User_id", $User_id);
        $this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
       //   $this->db->where("upload_table.Sale_count", $sale_count);
        //   $this->db->where("upload_table.Categories_id", $cat);
        $this->db->where("upload_table.Categories_id = '$cat'");
        $this->db->like("File_ext",$ext);
        $query = $this->db->get();
        return $query;
        }

        function extensionsnew($cat, $ext)
       {

        $this->db->select("upload_table.* , user_module.Avatar");
        $this->db->from("upload_table");
       //$this->db->where("User_id", $User_id);
        $this->db->order_by("No_of_models", "DESC");
        $this->db->join("user_module","user_module.User_id = upload_table.User_id");
       //   $this->db->where("upload_table.Sale_count", $sale_count);
        //   $this->db->where("upload_table.Categories_id", $cat);
        $this->db->where("upload_table.Categories_id2 = '$cat'");
        $this->db->like("File_ext",$ext);
        $query = $this->db->get();
        return $query;
        }

        function dddextensions($cat, $ext)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
         $this->db->where("upload_table.Model_id = '$cat'");
         $this->db->like("File_ext",$ext);
         $query = $this->db->get();
         return $query;
         }

        function search_extensions($ext)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
        //  $this->db->where("upload_table.Categories_id = '$cat'");
         $this->db->like("File_ext",$ext);
         $query = $this->db->get();
         return $query;
         }

        function tag($cat, $tag)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
         $this->db->where("upload_table.Categories_id = '$cat'");
         $this->db->like("technical",$tag);
         $query = $this->db->get();
         return $query;
         }
         function tagnew($cat, $tag)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
         $this->db->where("upload_table.Categories_id2 = '$cat'");
         $this->db->like("technical",$tag);
         $query = $this->db->get();
         return $query;
         }

         function dddtag($cat, $tag)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
         $this->db->where("upload_table.Model_id = '$cat'");
         $this->db->like("Technical",$tag);
         $query = $this->db->get();
         return $query;
         }

         function search_tag($tag)
        {
 
         $this->db->select("upload_table.* , user_module.Avatar");
         $this->db->from("upload_table");
        //$this->db->where("User_id", $User_id);
         $this->db->order_by("No_of_models", "DESC");
         $this->db->join("user_module","user_module.User_id = upload_table.User_id");
        //   $this->db->where("upload_table.Sale_count", $sale_count);
         //   $this->db->where("upload_table.Categories_id", $cat);
        //  $this->db->where("upload_table.Categories_id = '$cat'");
         $this->db->like("Technical",$tag);
         $query = $this->db->get();
         return $query;
         }
         function modelsandcategories($cat)
         {
            $this->db->select("models_categories.*, models.model_name");
            $this->db->from("models_categories");
           //$this->db->where("User_id", $User_id);
            // $this->db->order_by("No_of_models", "DESC");
            $this->db->join( "models", "models.model_id = models_categories.model_id ");
           //   $this->db->where("upload_table.Sale_count", $sale_count);
            //   $this->db->where("upload_table.Categories_id", $cat);
           //  $this->db->where("upload_table.Categories_id = '$cat'");
            $this->db->where("Categories_id",$cat);
            $query = $this->db->get();
            return $query->row();
         }

         function modelscategories($cat)
         {
            $this->db->select("*");
            $this->db->from("models");
           //$this->db->where("User_id", $User_id);
            // $this->db->order_by("No_of_models", "DESC");
            // $this->db->join( "models", "models.model_id = models_categories.model_id ");
           //   $this->db->where("upload_table.Sale_count", $sale_count);
            //   $this->db->where("upload_table.Categories_id", $cat);
           //  $this->db->where("upload_table.Categories_id = '$cat'");
            $this->db->where("model_id",$cat);
            $query = $this->db->get();
            return $query->row();
         }

         function isRegister($User_id)
         {
            //  $this->db->where('Social_id',$User_id);
             $query = $this->db->query("select * from user_module where Social_id='$User_id'");
             if($query->row())
             {
                 return true;
             }
             else
             {
                 return false;
             }
         }
         function update_isRegister($user_data, $User_id)
         {
             $this->db->where('Social_id', $User_id);
             $this->db->update('user_module', $user_data);
         }
         function insert_isRegister($user_data)
         {
            $this->db->insert('user_module', $user_data);  
         }
         function can_login($data)
         {
            $this->db->where('Social_id', $data);
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




         function editmodels_data($user_edit_model)
        {

            $this->db->select("*");
            $this->db->from("upload_table");
            $this->db->where('No_of_models', $user_edit_model);
            //$this->db->where("User_id", $User_id);
            // $this->db->order_by("No_of_models", "DESC");
            // $this->db->join("user_module","user_module.User_id = upload_table.User_id");
  
            //$this->db->limit($limit, $start);
            $query = $this->db->get();
            return $query->result();
       }

       function update_Edit_model($data, $modelid)
        {
   
		   $this->db->set($data);
		   $this->db->where('No_of_models', $modelid);
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
    }
?>
