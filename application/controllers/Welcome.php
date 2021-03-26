<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function fetching_all_models()
	{
	 $output = '';
	 $output2 = '';
	 $data = $this->main_model->fetch_all_models_data($this->input->post('limit'), $this->input->post('start'));
	
	//  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:0; padding:80px;border-radius:4px 4px 0px 0px;background:url('.base_url($row->Model_path).');background-position:center center; background-size:cover; background-repeat:no-repeat;">
	//  </a>
// 	<model-viewer class="button" style="width:100%;margin:0; padding:1px;border-radius:4px 4px 0px 0px;" src='.base_url($row->Model_path).'
// 	ar
// 	camera-orbit="-20deg 75deg 2m"
// 	auto-rotate camera-controls
// 	shadow-intensity="1"
// 	alt="A 3D model of an buster_drone">
// 	<a href="'.base_url($row->Model_path).'" download> <i class="fas fa-download" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
	
// </model-viewer>
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  if($row->Sale_count == 0 )
		  {
			  if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
			$output .= '
			<div class="post_data box" style="margin:0;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			
			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  </div>
			</div>
            </div>
			 
			';
			  }
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  </div>
			</div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}
// 	<model-viewer class="button" style="width:100%;margin:0; padding:1px;border-radius:4px 4px 0px 0px;" src='.base_url($row->Model_path).'
// 	ar
// 	camera-orbit="-20deg 75deg 2m"
// 	auto-rotate camera-controls
// 	shadow-intensity="1"
// 	alt="A 3D model of an buster_drone">
	
// </model-viewer>


public function count_download()
	{
		$this->load->helper('date');
		 $c_date = date("Y-m-d H:i:s");
		$data = array(
			
			'Model_id' => $this->input->post('No_of_models'),
			
		);
		$this->db->insert('downloads',$data);
	}

function ajax()
{
	$user_model_id = $this->input->post('model_id');
		$row = $this->main_model->fetch_popup($user_model_id);
		// print_r($row);die;
		if($row)
		{
			$filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}

			$p_files = preg_grep('~\.(zip)$~', scandir($dir));
			
			if($p_files)
			{
				// print_r('download');
				$file_url = $dir.'file.zip';
				$filenme = 'file.zip';
				header('Content-Type: application/zip');
                header("Content-Transfer-Encoding: Binary"); 
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
				header("Content-disposition: attachment; filename=\"".basename($filenme)."\""); 
				readfile($file_url);


			}else{
				$path=realpath($dir);

                $zip = new \ZipArchive();
                $path= str_replace('/','/', $path );
				$nameFile = $dir.'file.zip';
				if ($zip->open($nameFile,\ZipArchive::CREATE)===TRUE){      


					if (is_dir($path))
					{
						$pathSource= $path. '/';
					$directory = new \RecursiveDirectoryIterator($path);
					$files = new \RecursiveIteratorIterator($directory,  \RecursiveIteratorIterator::SELF_FIRST );
					}
			
			
			
			
					foreach ($files as $name=>$file)
					{
			
			
						if (in_array(substr($name, strrpos($name,'/')+1), array('.','..')))
						{
							continue;
						}
			
					 if     (is_file($name)===TRUE) {
			
						$zip->addFile($name, str_replace($pathSource, "", $name));
						 }
			
					}
			
			
					$zip->close();
					header('Content-Type: application/zip');
				    header('Content-Disposition: attachment; filename="'.basename($name).'"');
				    header('Content-Length: ' . filesize($name));
		         
				    flush();
				    readfile($name);
			
			
				}


			/*$new_glob = glob($dir);
			
  
			 
			 $zipname = $dir.'file.zip';
			 $zip = new ZipArchive();
$zip->open($zipname, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($dir),
    RecursiveIteratorIterator::LEAVES_ONLY
);
// print_r($files);die;

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
		$filePath = $file->getRealPath();
		// print_r($filePath);die;
		$relativePath = substr($filePath, strlen($dir)+29);
		// print_r($relativePath);die;

		// $relativePath = substr($filePath, strlen($dir)+29);
		// print_r($relativePath);die;

        // Add current file to archive
		$zip->addFile($filePath, $relativePath);
		// print_r($relativePath);
    }
}

			 $zip->close();
			//  echo '<a href='.$zipname.' download>'.$zipname.'</a>';
			 if (file_exists($zipname)) {
				//  print_r($zipname);die;
				header('Content-Type: application/zip');
				header('Content-Disposition: attachment; filename="'.basename($zipname).'"');
				header('Content-Length: ' . filesize($zipname));
		         
				flush();
				readfile($zipname);
				// delete file
				echo '<a href='.$zipname.' target="_new">Download File</a>';

			    }
*/
			}
		}
  }

function fetch_3dmodels()
	{
	 $output = '';
	 $output2 = '';
	 $data = $this->main_model->fetch_3dmodels($this->input->post('limit'), $this->input->post('start'),$this->input->post('mod'));
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);
		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			  
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			
		  
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			  </div>
			</div>
            </div>
			 
			';
			}
		   
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			  </div>
			</div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	function fetch_3dmodels_home()
	{
	 $output = '';
	 $output2 = '';
	 $data = $this->main_model->fetch_3dmodels($this->input->post('limit'), $this->input->post('start'),$this->input->post('mod'));
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);
		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			  
			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'</span></a>
			  
			  </div>
			</div>
            </div>
			 
			';
			}
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Thumbnail).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			<div class="column" style="width:10%">
			<img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			</div>
			<div class="column" style="width:40%">
			  <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			  </div>
			  <div class="column" style="width:50%;margin-top:7px;">
			  <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			  <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			  <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			  </div>
			</div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}





	function fetch_animal()
	{
	 $output = '';
	 $output1 = '';
	 $output3 = '';
	 $data = $this->main_model->fetch_all_models($this->input->post('limit'), $this->input->post('start'), $this->input->post('cat'));
	 $data1 = $this->main_model->fetch_all_models_intwo($this->input->post('limit'), $this->input->post('start'), $this->input->post('cat'));
	// print_r($data1);die;
	 $output2='';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
<div class="post_data box" style="margin:0px;padding:0;">
  <div class="row" style="margin-top:60px;margin-bottom:0px;">
     <a style="color:#444;font-size:16px;">Could not find what you are</a> 
  </div> 
  <div class="row" style="margin-top:10px;margin-bottom:0px;">
     <a style="color:#444;font-size:16px;">Looking for?</a> 
  </div>
  <div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
     <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
  </div>     
</div>
';
	 
	
	 
	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }


	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>


			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }

	}
	if($data1->num_rows() > 0)
	 {
	  foreach($data1->result() as $row)
	  {
		  //print_r($row);die;
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>


			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }





	  
	 }
	 if($data->num_rows() > 0 || $data1->num_rows() > 0)
	 {
	 
	 echo $output.''.$output3.''.$output2;
	// echo $data;
	 }
	}


	function fetch_suggests_free()
	{

		$data = $this->cart->get_models_suggests($this->input->post('limit'), $this->input->post('start'));
		foreach($data as $row)
                  {
                    $likes = $this->cart->get_likes($row->No_of_models);
                    $comments = $this->cart->count_comments($row->No_of_models);
                    $views = $this->cart->count_views($row->No_of_models);
                    if($row->Sale_count == 0 )
		                 {
                  echo '<div class="features-list-free-download" onclick="show_models_popup('.$row->No_of_models.')">';
                   echo '<div class="row" style="display:flex;width:100%;margin-left: 0px;margin-bottom: 0px;">';
                    echo '<div class="column" style="width:45%;margin-left: 0px;margin-bottom: 0px;padding:0px">';
                       echo '<div class="box suggested-model">';
                          echo '<a class="button model-img" onclick="show_models_popup('.$row->No_of_models.')" style="background:url('.base_url($row->Thumbnail).');background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';
                        echo '</div>';
                      echo '</div>';
                      echo '<div class="column" style="width:45%;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">';
                        echo '<a class="suggested-model-name"><span>'.$row->Model_name.'</span></a>';
                        echo '<div class="row" style="display:flex;width:100%;margin-top:50px;margin-left: 0px;margin-bottom: 0px;">';
                          echo '<a class="far fa-comment" style="color: #999;"><span style="padding: 5px;">'.$comments.'</span></a>';
                          echo '<a href="#" class="far fa-eye" style="color: #999;"><span style="padding: 5px;">'.$views.'</span></a>';
                          echo '<a class="far fa-thumbs-up " style="color: #999;" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>';
                      echo '</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';
                     }
                     else{
                      echo '<div class="features-list-free-download" onclick="show_model_popup('.$row->No_of_models.')">';
                      echo '<div class="row" style="display:flex;width:100%;margin-left: 0px;margin-bottom: 0px;">';
                    echo '<div class="column" style="width:45%;margin-left: 0px;margin-bottom: 0px;padding:0px">';
                       echo '<div class="box suggested-model">';
                          echo '<a class="button model-img" onclick="show_model_popup('.$row->No_of_models.')" style="background:url('.base_url($row->Thumbnail).');background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';
                        echo '</div>';
                      echo '</div>';
                      echo '<div class="column" style="width:45%;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">';
                        echo '<a class="suggested-model-name"><span>'.$row->Model_name.'</span></a>';
                        echo '<div class="row" style="display:flex;width:100%;margin-top:50px;margin-left: 0px;margin-bottom: 0px;">';
                          echo '<a class="far fa-comment" style="color: #999;"><span style="padding: 5px;">'.$comments.'</span></a>';
                          echo '<a href="#" class="far fa-eye" style="color: #999;"><span style="padding: 5px;">'.$views.'</span></a>';
                          echo '<a class="far fa-thumbs-up " style="color: #999;" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>';
                      echo '</div>';
                      echo '</div>';
                    echo '</div>';
                  echo '</div>';
                     }
                  }
	}


	


	function search_animal()
	{
	 $output = '';
	 $output3 = '';
	 $data = $this->main_model->fetch_all_models($this->input->post('limit'), $this->input->post('start'), $this->input->post('cat'));

	
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);


		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }

	 

	 
	 echo $output;
	// echo $data;
	}

	function buy_models()
	{
	 $output = '';
	 $output1 = '';
	 $output2='';
	 $output3 = '';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';

	 $data = $this->main_model->buy_models($this->input->post('cat'));

	 if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
		
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 $data1 = $this->main_model->buynew_models($this->input->post('cat'));
	 if($data1->num_rows() > 0)
	 {
	  foreach($data1->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output3.''.$output2;
	// echo $data;
	}

	function buy_dddmodels()
	{
	 $output = '';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		
	 $data = $this->main_model->buy_dddmodels($this->input->post('cat'));
	 
	 
		
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}

	function search_buy_models()
	{
	 $output = '';
	
	 $model_id = $this->input->post('cat');
		
	 $data = $this->main_model->search_buy_models();
	 
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>


			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}

	function free_models()
	{
	 $output = '';
	 $output1='';
	 $output2='';
	 $output3 = '';

	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
	 $data = $this->main_model->free_models($this->input->post('cat'));
	 $data1 = $this->main_model->freenew_models($this->input->post('cat'));

	 if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
		
	 
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			
		  }
	   
	  }
	  
	 }

	 if($data1->num_rows() > 0)
	 {
	  foreach($data1->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			
		  }
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output3.''.$output2;
	// echo $data;
	}


	function free_dddmodels()
	{
	 $output = '';
	 $output3 = '';

	 
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		
	 $data = $this->main_model->free_dddmodels($this->input->post('cat'));

	 
	 
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	function search_free_models()
	{
	 $output = '';
	 $data = $this->main_model->search_free_models();
	
	 
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	function others_tag()
	{
	 $output = '';
	 $output1='';
	 $output2='';
	 $output3='';

	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
	 $data = $this->cart->tag($this->input->post('cat'), $this->input->post('tag'));
	 $data1 = $this->cart->tagnew($this->input->post('cat'), $this->input->post('tag'));

	 if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">

			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 if($data1->num_rows() > 0)
		{
		 foreach($data1->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output3 .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output3 .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output3.''.$output2;
	// echo $data;
	}

	function others_dddtag()
	{
	 $output = '';
	
	 $model_id = $this->input->post('cat');
		
	 $data = $this->cart->dddtag($this->input->post('cat'), $this->input->post('tag'));
	 
	 
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			    <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	function search_others_tag()
	{
	 $output = '';
	 $output1='';
	 $data = $this->cart->search_tag($this->input->post('tag'));
	
		
	 
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			    <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	
	function extensions()
	{
	 $output = '';
	 $output1='';
	 $output2='';
	 $output3 = '';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
	 $data = $this->cart->extensions($this->input->post('cat'), $this->input->post('ext'));
	 $data1 = $this->cart->extensionsnew($this->input->post('cat'), $this->input->post('ext'));

	 if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 
	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			    <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }

	 if($data1->num_rows() > 0)
		{
		 foreach($data1->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output3 .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output3 .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			    <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output3.''.$output2;
	// echo $data;
	}

	function dddextensions()
	{
	 $output = '';
	 $output1='';
	 $output2='';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelscategories($model_id);
		
		$ext = $this->input->post('ext');
	 $data = $this->cart->dddextensions($this->input->post('cat'), $this->input->post('ext'));
	 if($this->input->post('cat') == '5' && $this->input->post('ext') == 'png')
	 {
		 $output1 .= '
		 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.png (raster-graphics file format) 360° Assets</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >
	   360° Assets available for download that include the native raster-graphics file format .png file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
		 ';
	 }

	 else if($this->input->post('cat') == '5' && $this->input->post('ext') == 'jpg')
	 {
		 $output1 .= '
		 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.jpg (compressed image format) 360° Assets</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >
	   360° Assets available for download that include the native compressed image format .jpg file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
		 ';
	 }
	 else if($this->input->post('cat') == '5' && $this->input->post('ext') == 'hdr')
	 {
		 $output1 .= '
		 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.hdr 360° Assets</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >
	   360° Assets available for download that include the native compressed image format .hdr file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
		 ';
	 }
	 else if($this->input->post('cat') == '5' && $this->input->post('ext') == 'mp4')
	 {
		 $output1 .= '
		 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.mp4 (MPEG-4 video file format) 360° Assets</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >
	   360° Assets available for download that include the native compressed image format .mp4 file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
		 ';
	 }else{



	 
	 if($ext == 'fbx' || $ext == 'FBX')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Autodesk FBX) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models that include the Autodesk FBX format. 
	   Can be imported into almost any 3D application including Maya, 3ds Max, Cinema 4D, MODO, and Blender.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == '3ds' || $ext == '3DS')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (3ds Max) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available for download
	    that include the native Autodesk 3ds Max .max file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'max' || $ext == 'MAX')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (3ds Max) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available for download 
	   that include the native Autodesk 3ds Max .max file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'blend' || $ext == 'BLEND')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Blender) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available for download 
	   that include the native Blender .blend file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'obj' || $ext == 'OBJ')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (OBJ wavefront) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available for 
	   download that include the flexible Wavefront OBj (.obj) file format. Can be imported into almost any 3D application including Maya, 3ds Max,
	    Cinema 4D, MODO, ZBrush, and Blender.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'c4d' || $ext == 'C4D')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Cinema 4D) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available for
	    download that include the native Cinema 4d .c4d file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'mb' || $ext == 'MB' || $ext == 'ma')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Maya) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models you can download 
	   that include an Autodesk Maya .ma or .mb file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($ext == 'dae' || $ext == 'DAE')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Collada) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models available with the
	    Collada DAE .dae file format. Can be imported and used in a wide variety of 3D software packages.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'stl' || $ext == 'STL')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Stereolithography) 3D Models</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >3D models you can 
	   download that include the Stereolithography .stl file format. Often used for 3D printing.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'psd' || $ext == 'PSD')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Adobe Photoshop) Vectors</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Vectors available for 
	   download that include the native Adobe Photoshop .psd file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'ai' || $ext == 'AI')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Adobe Illustrator) Vectors</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Vectors available for 
	   download that include the native Adobe Illustrator .ai file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'eps' || $ext == 'EPS')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Adobe Illustrator) Vectors</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Vectors available for 
	   download that include the native Adobe Illustrator .eps file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'svg' || $ext == 'SVG')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Scalable Vector Graphics) Vectors</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Vectors you
	    can download that include the Scalable Vector Graphics .svg file format. Often used to define vector-based graphics for the Web.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'raw' || $ext == 'RAW')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Raw image format) Photos</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Photos available for
	    download that include the native Raw image format .raw file format</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'jpg' || $ext == 'JPG')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Compressed image format) Photos</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Photos available for 
	   download that include the native compressed image format .jpg file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'png' || $ext == 'PNG')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Raster-graphics file format) Photos</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Photos available for
	    download that include the native raster-graphics file format .png file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'aep' || $ext == 'AEP')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Adobe After Effects) Video Templates</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Video Templates available 
	   for download that include the native Adobe After Effects .aep file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'prproj' || $ext == 'PRPROJ')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (Adobe Premiere Pro) Video Templates</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Video Templates available for
	    download that include the native Adobe Premiere Pro .prproj file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'drp' || $ext == 'DRP')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (DaVinci Resolve) Video Templates</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Video Templates available for download
	    that include the native DaVinci Resolve .drp file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($ext == 'mp4' || $ext == 'MP4')
	 {
	 $output1 .= '
	 <section class="boxe">
	 <div class="square box" style="display: inline;border:none;border-radius:6px">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">.'.$ext.' (MPEG-4 video file format) Video Templates</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >Video Templates available for download 
	   that include the native MPEG-4 video file format .mp4 file format.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	}
	 
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {

				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			    <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output2;
	// echo $data;
	}



	function search_extensions()
	{
	 $output = '';

	 $data = $this->cart->search_extensions($this->input->post('ext'));
	 
		
	 
		if($data->num_rows() > 0)
		{
		 foreach($data->result() as $row)
		 {
			 $likes = $this->cart->get_likes($row->No_of_models);
			 $comments = $this->cart->count_comments($row->No_of_models);
			 $views = $this->cart->count_views($row->No_of_models);
			 $downloads = $this->cart->count_downlds($row->No_of_models);

			 $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			 if($row->Sale_count == 0 )
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			 
				  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
				  <div class="column" style="width:10%">
				  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
				  </div>
				  <div class="column" style="width:40%">
					<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
					</div>
					<div class="column" style="width:50%;margin-top:7px;">
					<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
					<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
					<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
					<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

					</div>
				  </div>
			   </div>
				
			   ';
				}
			   
			 }
			 else
			 {
				if($row->Model_type == 'Private' || $row->check == 'off')
				{
  
				}else{
			   $output .= '
			   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			   border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			   background-size:contain; background-repeat:no-repeat;">
			   </a>
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			 <div class="column" style="width:10%">
			 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			 </div>
			 <div class="column" style="width:40%">
			   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			   </div>
			   <div class="column" style="width:50%;margin-top:7px;">
			   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
			   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			   </div>
			 </div>
			 
		   </div>
			   
			   ';
				}
			 }   
	   
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}



	// search

	function input_search()
	{
		$output = '';
		$output1 = '';
		$output2='';
		$output3='';

	    $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
		$cat = $this->input->post('cat');
		$Model_name = $this->input->post('search');
		//print_r($Model_name);die;
		$data = $this->cart->search($cat,$Model_name);
		$data1 = $this->cart->searchnew($cat,$Model_name);


		if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>,<span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span>
	  and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }



		if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 if($data1->num_rows() > 0)
	 {
	  foreach($data1->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output3 .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 
	 echo ''.$output1.''.$output.''.$output3.''.$output2;

	}


	function input_dddsearch()
	{
		$output = '';
		
	    $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		
		$cat = $this->input->post('cat');
		$Model_name = $this->input->post('search');
		//print_r($Model_name);die;
		$data = $this->cart->dddsearch($cat,$Model_name);

		
		if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;

	}


	function search_input_search()
	{
		$output = '';
		
		
		$Model_name = $this->input->post('search');
		//print_r($Model_name);die;
		$data = $this->cart->header_search($Model_name);

		
		if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;

	}


	function search_share_input_search()
	{
		$output = '';
		
		
		$Model_name = $this->input->post('search');
		//print_r($Model_name);die;
		$data = $this->cart->header_sharesearch($Model_name);

		
		if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" id="click_box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" id="click_box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>

			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;

	}



	function input_header_search()
	{
		$output = '';
		
		
		$Model_name = $this->input->post('search');
		//print_r($Model_name);die;
		$data = $this->cart->header_search($Model_name);

		if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {
		  $likes = $this->cart->get_likes($row->No_of_models);
		  $comments = $this->cart->count_comments($row->No_of_models);
		  $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

		  $filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" onclick="show_models_popup('.$row->No_of_models.')">
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" onclick="maDownloads('.$row->No_of_models.')" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-34px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
		  
			   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
			   <div class="column" style="width:10%">
			   <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
			   </div>
			   <div class="column" style="width:40%">
				 <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
				 </div>
				 <div class="column" style="width:50%;margin-top:7px;">
				 <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
				 <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
				 <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
				 <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

				 </div>
			   </div>
            </div>
			 
			';
			}
			
		  }
		  else
		  {
			if($row->Model_type == 'Private' || $row->check == 'off')
			{

			}else{
			$output .= '
			<div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
			<a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="download_ing-model"> <i style="margin-top:165px;padding:5px;float:right;margin-right:-28px;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>

			<a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>

			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
		  <div class="column" style="width:10%">
		  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
		  </div>
		  <div class="column" style="width:40%">
			<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
			</div>
			<div class="column" style="width:50%;margin-top:7px;">
			<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
            <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
			<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			<a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

			</div>
		  </div>
		  
        </div>
			
			';
			}
			
		  }
	   
	  }
	  
	 }
	 
	 echo $output;

	}


	// search

	

	function range_sliders()
	{
		$output = '';
		$output1 = '';
		$output2='';
		$output3 = '';

	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
		$cat_id = $this->input->post('cat');
		$min_range = $this->input->post('fromval');
		$max_range = $this->input->post('toval');
		$val= '';
		if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }


	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
		
		for($i=$min_range;$i<=$max_range;$i++)
		{
			$val .= $i==$min_range ? $i : ' '.$i;
				
		}
		$array = explode(" ", $val);
		foreach($array as $value)
		{
		$data = $this->main_model->range_sliders($value, $cat_id);
		$data1 = $this->main_model->range_slidersnew($value, $cat_id);

		if($data->num_rows() > 0)
		   {
			  foreach($data->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
							  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
			if($data1->num_rows() > 0)
		   {
			  foreach($data1->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output3 .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
							  border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
							  background-size:contain; background-repeat:no-repeat;">
							  </a>

							  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
		}
	    
		echo ''.$output1.''.$output.''.$output3.''.$output2;
	 }


	 function polycount()
	{
		$output = '';
		$output1 = '';
		$output2='';
		$output3 = '';

	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		$output2 .= '
	 <div class="post_data box" style="margin:0px;padding:0;">
			<div class="row" style="margin-top:60px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Could not find what you are</a> 
			</div> 
			<div class="row" style="margin-top:10px;margin-bottom:0px;">
			   <a style="color:#444;font-size:16px;">Looking for?</a> 
			</div>
			<div style="margin-top:10px;align:center;width:80%;margin-left:auto;margin-right:auto;">
			   <a href="#popuprequestform" class="button1 btn-primary btn-large" style="color:#fff;font-size:15px;font-weight:500;">Request a custom '.$query->model_name.'</a> 
			</div>     
    </div>
	 ';
		$cat_id = $this->input->post('cat');
		$min_range = $this->input->post('fromval');
		$max_range = $this->input->post('toval');
		$val= '';
		if($query->model_id == 1)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
	   Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
	   Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
	   <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
	 <br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, <span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span> and GLTF.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 2)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for scalable format. <br>File formats include
<span style="color:rgb(105, 195, 224);">PSD</span>, <span style="color:rgb(105, 195, 224);">AI</span>, 
<span style="color:rgb(105, 195, 224);">EPS</span> and <span style="color:rgb(105, 195, 224);">SVG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }

	 if($query->model_id == 3)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">RAW</span>, <span style="color:rgb(105, 195, 224);">PNG</span>
	    and <span style="color:rgb(105, 195, 224);">JPG</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($query->model_id == 4)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' 
	   ready to download and Suitable for Backgrounds, Visual Effects(VFX), motion graphics, and Red Giant.
       <br>File formats include <span style="color:rgb(105, 195, 224);">AEP</span>, <span style="color:rgb(105, 195, 224);">PRPROJ</span>,
	   <span style="color:rgb(105, 195, 224);">DRP</span>, and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }


	 if($this->input->post('cat') == 108)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of 360° Photos 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
	 if($this->input->post('cat') == 120)
	 {

	 $output1 .= '
	 <section class="boxe" style="height:240px;">
	 <div class="square box" style="display: inline;border:none;border-radius:6px;">
	   <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.'</h2>
	   <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
	   <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >360° ASSETS of '.$query->Categories_name.' 
	   Ready to download and Suitable for VR media for education, publishing, advertising, film, and mobile apps & games.
       <br>File formats include <span style="color:rgb(105, 195, 224);">PNG</span>, <span style="color:rgb(105, 195, 224);">JPG</span>,
       <span style="color:rgb(105, 195, 224);">HDR</span>
	    and <span style="color:rgb(105, 195, 224);">MP4</span>.</p>
	 </div>
   </div>
	   
	 </section>
	 <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
	   
		   
	 </div>
	 ';
	 }
		
		for($i=$min_range;$i<=$max_range;$i++)
		{
			$val .= $i==$min_range ? $i : ' '.$i;
				
		}
		$array = explode(" ", $val);
		foreach($array as $value)
		{
		$data = $this->main_model->poly_count($value, $cat_id);
		$data1 = $this->main_model->poly_countnew($value, $cat_id);

		if($data->num_rows() > 0)
		   {
			  foreach($data->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
							  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
			if($data1->num_rows() > 0)
		   {
			  foreach($data1->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output3 .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
							  border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
							  background-size:contain; background-repeat:no-repeat;">
							  </a>

							  <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
		}
	    
		echo ''.$output1.''.$output.''.$output3.''.$output2;
	 }


	 function range_dddsliders()
	{
		$output = '';
		$output1 = '';
		$output2='';
	 $model_id = $this->input->post('cat');
		$query = $this->cart->modelsandcategories($model_id);
		
		
		$cat_id = $this->input->post('cat');
		$min_range = $this->input->post('fromval');
		$max_range = $this->input->post('toval');
		$val= '';
		
		
		for($i=$min_range;$i<=$max_range;$i++)
		{
			$val .= $i==$min_range ? $i : ' '.$i;
				
		}
		$array = explode(" ", $val);
		foreach($array as $value)
		{
		$data = $this->main_model->range_dddsliders($value, $cat_id);
		
		if($data->num_rows() > 0)
		   {
			  foreach($data->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			
			<div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
		}
	    
		echo $output;
	 }

	 function range_dddpolycount()
	 {
		 $output = '';
		 $output1 = '';
		 $output2='';
	  $model_id = $this->input->post('cat');
		 $query = $this->cart->modelsandcategories($model_id);
		 
		 
		 $cat_id = $this->input->post('cat');
		 $min_range = $this->input->post('fromval');
		 $max_range = $this->input->post('toval');
		 $val= '';
		 
		 
		 for($i=$min_range;$i<=$max_range;$i++)
		 {
			 $val .= $i==$min_range ? $i : ' '.$i;
				 
		 }
		 $array = explode(" ", $val);
		 foreach($array as $value)
		 {
		 $data = $this->main_model->range_dddpolycount($value, $cat_id);
		 
		 if($data->num_rows() > 0)
			{
			   foreach($data->result() as $row)
				 {
					$likes = $this->cart->get_likes($row->No_of_models);
					$comments = $this->cart->count_comments($row->No_of_models);
					$views = $this->cart->count_views($row->No_of_models);
		   $downloads = $this->cart->count_downlds($row->No_of_models);
 
					if($row->Model_type == 'Private' || $row->check == 'off')
			   {
 
			   }else{
					$output .= '
					
							   <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							   <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							   <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							   
							   <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
			 border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			 background-size:contain; background-repeat:no-repeat;">
			 </a>
			 
			 <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								  <div class="column" style="width:10%">
								  <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								  </div>
								  <div class="column" style="width:40%">
									<a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
									</div>
									<div class="column" style="width:50%;margin-top:7px;">
									<a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
									<a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
									<a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			   <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>
 
									</div>
								  </div>
	  
								</div>
		
								';
			   }
								
				   }
			 }
		 }
		 
		 echo $output;
	  }


	 
	 function search_range_sliders()
	{
		$output = '';
		$output1 = '';
		
		$min_range = $this->input->post('fromval');
		$max_range = $this->input->post('toval');
		$val= '';
		
		
		for($i=$min_range;$i<=$max_range;$i++)
		{
			$val .= $i==$min_range ? $i : ' '.$i;
				
		}
		$array = explode(" ", $val);
		foreach($array as $value)
		{
		$data = $this->main_model->search_range_sliders($value);
		
		if($data->num_rows() > 0)
		   {
			  foreach($data->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
							  border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
							  background-size:contain; background-repeat:no-repeat;">
							  </a>

							   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
		}
	    
		echo $output;
	 }
	 
	 function search_polycount()
	{
		$output = '';
		$output1 = '';
		
		$min_range = $this->input->post('fromval');
		$max_range = $this->input->post('toval');
		$val= '';
		
		
		for($i=$min_range;$i<=$max_range;$i++)
		{
			$val .= $i==$min_range ? $i : ' '.$i;
				
		}
		$array = explode(" ", $val);
		foreach($array as $value)
		{
		$data = $this->main_model->search_polycount($value);
		
		if($data->num_rows() > 0)
		   {
			  foreach($data->result() as $row)
				{
				   $likes = $this->cart->get_likes($row->No_of_models);
				   $comments = $this->cart->count_comments($row->No_of_models);
				   $views = $this->cart->count_views($row->No_of_models);
		  $downloads = $this->cart->count_downlds($row->No_of_models);

				   if($row->Model_type == 'Private' || $row->check == 'off')
			  {

			  }else{
				   $output .= '
				   
							  <div class="post_data box" style="margin:0px;padding:0;" img_url='.base_url($row->Model_path).' onclick="show_model_popup('.$row->No_of_models.')">
							  <a> <i class="fas fa-dollar-sign" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>
							  <a class="download_ing-model"> <i style="margin-top:140px;padding:5px;float:right;width:100%;background-color:#000000de;text-transform: lowercase;font-style: normal;color:#ccc;text-align:left;">'.$row->File_ext.'</i></a>
							  
							  <a class="button" onclick="myPhoto('.$row->User_id.')" style="margin:auto;height:192px;padding: 80px;
							  border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
							  background-size:contain; background-repeat:no-repeat;">
							  </a>

							   <div class="row" style="margin:0px;padding:6px;width:100%;height:40px;bottom:0px;background-color: #fff;" onclick="myPhoto('.$row->User_id.')">
								 <div class="column" style="width:10%">
								 <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url($row->Avatar).'>
								 </div>
								 <div class="column" style="width:40%">
								   <a href="#" class="user-name-home"><span>'.$row->Model_name.'</span></a>
								   </div>
								   <div class="column" style="width:50%;margin-top:7px;">
								   <a href="#" class="far fa-thumbs-up likes-home-free" id="likes_count" data='.$row->No_of_models.'><span id="'.$row->No_of_models.'" style="padding: 5px;">'.$likes.'</span></a>
								   <a href="#" class="far fa-comment comment-home-free"><span style="padding: 5px;">'.$comments.'</span></a>
								   <a href="#" class="far fa-eye views-home-free"><span style="padding: 5px;">'.$views.'</span></a>
			  <a href="#" class="far fas fa-download views-home-free" style="font-size:13px;"><span style="padding: 5px;font-size:15px;font-weight:400;">'.$downloads.'&nbsp;</span></a>

								   </div>
								 </div>
	 
							   </div>
	   
							   ';
			  }
							   
				  }
			}
		}
	    
		echo $output;
     }





	function get_user_photo()
	{
		$output = '';
		$user_model_id = $this->input->post('User_id');
		
		$res = $this->main_model->fetch_user_photo($user_model_id);
		
		if($res->Avatar == '')
		{
			$output .='
		     <img class="profile-icon-home" style="padding:0px;height:25px;width:25px;" src='.base_url('resources/icons/user.png').'>
			';
		}
		else{
			$output .='
			<img style="padding:0px;height:25px;width:25px;" class="profile-icon-home" src='.base_url($res->Avatar).'>    
            ';
		}
		echo $output;
		

	}
	

	function user_model_name()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		$res = $this->main_model->fetch_popup($user_model_id);
		
		if($res)
		{
		$query = $this->cart->modelsandcategories($res->Categories_id);
		$query2 = $this->cart->modelsandcategories($res->Categories_id2);

		  $likes = $this->cart->get_likes($res->No_of_models);
		  $views = $this->cart->count_views($res->No_of_models);
		  $downloads = $this->cart->count_downlds($res->No_of_models);

          $this->load->helper('date');
		 $c_date = date("Y-m-d H:i:s");
		  $date1 = $res->Time;
		  $date2 = $c_date;
		  $timestamp1 = strtotime($date1);
		  $timestamp2 = strtotime($date2);
		  $datediff = $timestamp2 - $timestamp1;
		  $string = $res->Tag_name;
		  $str_arr = explode (",", $string);
		  $em = '';
				foreach($str_arr as $arr)
				{
					$em .= '<a style="color:#aaa;border:1px solid #aaa;padding:3px;border-radius:4px;font-size:12px;margin-left:5px;margin-top:5px;height: 23px;line-height: 1em;">'.$arr.'</a>';
				}
				if($res->Model_id > 1)
				{



		if($res->Sale_count == 0)
		  {

			  if($res->Categories_id2 == '')
			  {
				$output .='
				<a href="#" class="username" style="margin-top:10px;margin-bottom:25px;overflow:hidden;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
				
				<a href="#"class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
				<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
				<a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
				<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
					  <div class="columns model-features-column" style="margin-left: 10px;">
						<a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>
					  </div>
					  <div class="columns model-features-column1">
						<a id="popupdownloading" onclick="downFunction()" data='.$res->No_of_models.' class="download-feature" style="font-size: 14px;"><i class="fas fa-download"></i>&nbsp;Download&nbsp;Models</a>
					  </div>
					  <div class="columns model-features-column">
					  <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
					  </div>
					  <div class="columns model-features-column" style="flex:1;">
					  <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>
					  	
					  </div>
					 
					  <div class="columns model-features-column reporting">
						
						<a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
					  </div>
				</div>
				<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
					<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

					<p style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;font-size:13px;"><i class="far fa-clock"></i></a>
					<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:13px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
					</p>

					 <p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;"><i class="fas fa-briefcase"></i></a>
					<a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
					</p>

					<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                    </p>
				</div>
				';

			  }else{
				
				  
			$output .='
			<a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
			
			<a href="#"class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
			<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
			<a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
			<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
                  <div class="columns model-features-column" style="margin-left: 10px;">
                    <a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>
                  </div>
                  <div class="columns model-features-column1">
                    <a id="popupdownloading" onclick="downFunction()" data='.$res->No_of_models.' class="download-feature" style="font-size: 14px;"><i class="fas fa-download"></i>&nbsp;Download&nbsp;Models</a>
                  </div>
                  <div class="columns model-features-column">
                    <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
                  </div>
                  <div class="columns model-features-column" style="flex:1;">
                    <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>
                  </div>
                  
                  <div class="columns model-features-column reporting">
                    
                    <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
                  </div>
            </div>
			<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
				<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

                <p style="margin:0px;padding-bottom:10px;">
				<a style="color:#aaa;margin-bottom:30px;font-size:14px;"><i class="far fa-clock"></i></a>
				<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:14px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
				</p>
				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">
				       <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-briefcase"></i></a>
				       <span style="display:block;margin-left: 5px;">
				            <a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
				            <a class="cat_disp_two" style="margin-left: 5px;color:#aaa;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;">'.$query2->Categories_name.' '.$query2->model_name.'</a>
				       </span>
				</p>

				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                </p>
			</div>
			';
			  }
		  }
		  else{
			if($res->Categories_id2 == '')
			{
			  $output .='
			  <a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
			
			  <a class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
			<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
		  <a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
			  <div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
                  <div class="columns model-features-column" style="margin-left: 10px;">
				  <a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>

                  </div>
                 
                  <div class="columns model-features-column">
				  <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
				  </div>
                  <div class="columns model-features-column" style="flex:1;">
				  <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>

                  </div>
                  
                  <div class="columns model-features-column reporting">
                    
                    <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
                  </div>
				</div>
				<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
					<p style="color:#aaa;padding-bottom:20px;margin:0px">'.$res->Model_Description.'</p>

					<p style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;font-size:13px;"><i class="far fa-clock"></i></a>
					<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:13px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
					</p>

					 <p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;"><i class="fas fa-briefcase"></i></a>
					<a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
					</p>

					<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                    </p>
				</div>
			  
			  ';
			
		  }
		else{
			$output .='
			<a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
		  
			<a class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
		  <a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
		  <a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		 
			<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
				<div class="columns model-features-column" style="margin-left: 10px;">
				<a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>

				</div>
			   
				<div class="columns model-features-column">
				<a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
				</div>
				<div class="columns model-features-column" style="flex:1;">
				<a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>

				</div>
				
				<div class="columns model-features-column reporting">
				  
				  <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
				</div>
			  </div>
			  <div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
				<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

                <p style="margin:0px;padding-bottom:10px;">
				        <a style="color:#aaa;margin-bottom:30px;font-size:14px;"><i class="far fa-clock"></i></a>
				        <a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:14px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
				</p>
				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">
				       <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-briefcase"></i></a>
				       <span style="display:block;margin-left: 5px;">
				            <a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
				            <a class="cat_disp_two" style="margin-left: 5px;color:#aaa;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;">'.$query2->Categories_name.' '.$query2->model_name.'</a>
				       </span>
				</p>

				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                </p>
			</div>
			
			';

		}
		   
		}



				}else{
		 
		  if($res->Sale_count == 0)
		  {

			  if($res->Categories_id2 == '')
			  {
				$output .='
				<a href="#" class="username" style="margin-top:10px;margin-bottom:25px;overflow:hidden;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
				
				<a href="#"class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
				<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
				<a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
				<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
					  <div class="columns model-features-column" style="margin-left: 10px;">
						<a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>
					  </div>
					  <div class="columns model-features-column1">
						<a id="popupdownloading" onclick="downFunction()" data='.$res->No_of_models.' class="download-feature" style="font-size: 14px;"><i class="fas fa-download"></i>&nbsp;Download&nbsp;Models</a>
					  </div>
					  <div class="columns model-features-column">
					  <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
					  </div>
					  <div class="columns model-features-column" >
					  <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>
					  	
					  </div>
					  <div class="columns model-features-column1" style="flex:1;">
						
						<a id="popupmoreinformation" onclick="moreFunction()" data='.$res->No_of_models.' class="more-info-feature" style="font-size: 15px;"><i class="fas fa-plus"></i>&nbsp;More&nbsp;information</a>
					  </div>
					  <div class="columns model-features-column reporting">
						
						<a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
					  </div>
				</div>
				<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
					<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

					<p style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;font-size:13px;"><i class="far fa-clock"></i></a>
					<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:13px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
					</p>

					 <p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;"><i class="fas fa-briefcase"></i></a>
					<a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
					</p>

					<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                    </p>
				</div>
				';

			  }else{
				
				  
			$output .='
			<a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
			
			<a href="#"class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
			<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
			<a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
			<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
                  <div class="columns model-features-column" style="margin-left: 10px;">
                    <a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>
                  </div>
                  <div class="columns model-features-column1">
                    <a id="popupdownloading" onclick="downFunction()" data='.$res->No_of_models.' class="download-feature" style="font-size: 14px;"><i class="fas fa-download"></i>&nbsp;Download&nbsp;Models</a>
                  </div>
                  <div class="columns model-features-column">
                    <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
                  </div>
                  <div class="columns model-features-column" >
                    <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>
                  </div>
                  <div class="columns model-features-column1" style="flex:1;">
                    
                    <a id="popupmoreinformation" onclick="moreFunction()" data='.$res->No_of_models.' class="more-info-feature" style="font-size: 15px;"><i class="fas fa-plus"></i>&nbsp;More&nbsp;information</a>
                  </div>
                  <div class="columns model-features-column reporting">
                    
                    <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
                  </div>
            </div>
			<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
				<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

                <p style="margin:0px;padding-bottom:10px;">
				<a style="color:#aaa;margin-bottom:30px;font-size:14px;"><i class="far fa-clock"></i></a>
				<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:14px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
				</p>
				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">
				       <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-briefcase"></i></a>
				       <span style="display:block;margin-left: 5px;">
				            <a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
				            <a class="cat_disp_two" style="margin-left: 5px;color:#aaa;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;">'.$query2->Categories_name.' '.$query2->model_name.'</a>
				       </span>
				</p>

				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                </p>
			</div>
			';
			  }
		  }
		  else{
			if($res->Categories_id2 == '')
			{
			  $output .='
			  <a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
			
			  <a class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
			<a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
		  <a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		   
			  <div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
                  <div class="columns model-features-column" style="margin-left: 10px;">
				  <a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>

                  </div>
                 
                  <div class="columns model-features-column">
				  <a id="popembeding" onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
				  </div>
                  <div class="columns model-features-column" >
				  <a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>

                  </div>
                  <div class="columns model-features-column1" style="flex:1;">
                    
                    <a id="popupmoreinformation" onclick="moreFunction()" data='.$res->No_of_models.' class="more-info-feature" style="font-size: 15px;"><i class="fas fa-plus"></i>&nbsp;More information</a>
                  </div>
                  <div class="columns model-features-column reporting">
                    
                    <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
                  </div>
				</div>
				<div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
					<p style="color:#aaa;padding-bottom:20px;margin:0px">'.$res->Model_Description.'</p>

					<p style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;font-size:13px;"><i class="far fa-clock"></i></a>
					<a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:13px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
					</p>

					 <p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;">
					<a style="color:#aaa;margin-bottom:30px;"><i class="fas fa-briefcase"></i></a>
					<a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
					</p>

					<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                    </p>
				</div>
			  
			  ';
			
		  }
		else{
			$output .='
			<a href="#" class="username" style="margin-top:10px;overflow:hidden;margin-bottom:25px;float:left;width:25%;display:flex;margin-left:15px;font-size: 14px;color: #000;font-weight: 600;">'.$res->User_name.'</a>
		  
			<a class="username far fa-eye" style="float:right;font-size: 14px;padding: 10px;color:#999;">&nbsp;<span class="count">'.$views.'</span></a>
		  <a class="username far fa-thumbs-up" id="likes_counts" data='.$res->No_of_models.' style="float:right;font-size: 14px;padding: 10px;color:#999 ">&nbsp;<span class='.$res->No_of_models.'>'.$likes.'</span></a>
		  <a class="username" style="float:right;font-size: 14px;padding: 10px;color:#999;font-weight:400;">&nbsp;<span class="count"><i class="fas fa-download" style="font-size: 14px;"></i>&nbsp;'.$downloads.'</span></a>
		 
			<div class="row model-features" style="width:102%;margin-left: -30px;margin-top: 20px;">
				<div class="columns model-features-column" style="margin-left: 10px;">
				<a id="addtoc" data-model_id='.$res->No_of_models.' data-model_path='.$res->Thumbnail.' class="addto-feature" style="font-size: 17px;"><i class="fas fa-plus"></i>&nbsp;Add&nbsp;to</a>

				</div>
			   
				<div class="columns model-features-column">
				<a id="popembeding"  onclick="embedFunction()" data='.base_url($res->Thumbnail).' data-path='.base_url($res->Model_path).' data-ext='.$res->File_ext.' class="embed-feature" style="font-size: 15px;"><i class="fas fa-code"></i>&nbsp;Embed</a>
				</div>
				<div class="columns model-features-column" >
				<a id="popemb_share_link" onclick="sharelinkFunction()" data-path="http://3dcopilot.com/welcome/sharelink?search='.$res->Thumbnail.'" data-name='.$res->Model_name.' data-link="http://3dcopilot.com/'.$res->Thumbnail.'" class="share-feature" style="font-size: 15px;"><i class="fas fa-share"></i>&nbsp;Share</a>

				</div>
				<div class="columns model-features-column1" style="flex:1;">
				  
				  <a id="popupmoreinformation" onclick="moreFunction()" data='.$res->No_of_models.' class="more-info-feature" style="font-size: 15px;"><i class="fas fa-plus"></i>&nbsp;More information</a>
				</div>
				<div class="columns model-features-column reporting">
				  
				  <a href='.site_url('welcome/report_model').' target="_blank" class="report-feature reporting"><i class="fas fa-flag"></i>&nbsp;Report</a>
				</div>
			  </div>
			  <div class="row model-features_s" style="width:102%;margin-left: -30px;margin-top: 0px;padding:5px;">
				<p style="color:#aaa;padding-bottom:20px;margin:0px;">'.$res->Model_Description.'</p>

                <p style="margin:0px;padding-bottom:10px;">
				        <a style="color:#aaa;margin-bottom:30px;font-size:14px;"><i class="far fa-clock"></i></a>
				        <a style="color:#aaa;margin-bottom:30px;padding:6px;font-size:14px;">Published '.round($datediff / (60 * 60 * 24)).'days ago</a>
				</p>
				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">
				       <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-briefcase"></i></a>
				       <span style="display:block;margin-left: 5px;">
				            <a style="color:#aaa;margin-bottom:30px;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;margin-left:5px;">'.$query->Categories_name.' '.$query->model_name.'</a>
				            <a class="cat_disp_two" style="margin-left: 5px;color:#aaa;border:1px solid #aaa;padding:6px;border-radius:4px;font-size:13px;">'.$query2->Categories_name.' '.$query2->model_name.'</a>
				       </span>
				</p>

				<p class="new_cat_of_disp" style="margin:0px;padding-bottom:10px;display:flex;">

				        <a style="color:#aaa;height: max-content;margin-bottom: auto;margin-top: auto;font-size:14px;"><i class="fas fa-tag"></i></a>
				        <span style="display:flex;margin-left: 5px;flex-wrap: wrap;">'.$em.'</span>
                </p>
			</div>
			
			';

		}
		   
		}
	 }
    }
		echo $output;
		

	}

	function popup_moreinfo()
	{
		$output = '';
		$model_id = $this->input->get('model_id');
		$res = $this->cart->popupdownloads($model_id);
		if($res)
		{
			$time = $res->Time;
			$newtime = explode(' ',$time);
		    $new = $newtime[0];
			  
			// files for model id
			$filess = glob($res->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = '#'.$path[1];
			}

			// dirctory

			// technical
			$tech = $res->technical;
			$newtech = explode(',',$tech);
			$technical_a = '';
			$technical_t = '';
			$technical_m = '';
			$technical_r = '';
			$technical_l = '';
			$technical_p = '';
			$technical_u = '';
			$technical_pu = '';

			foreach($newtech as $row)
			{
				if($row == 'animated')
				{
		$technical_a = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'textures')
				{
		$technical_t = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'materials')
				{
		$technical_m = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'rigged')
				{
		$technical_r = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'lowpoly')
				{
		$technical_l = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'pbr')
				{
		$technical_p = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'uvw')
				{
		$technical_u = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
				else if($row == 'plugins')
				{
		$technical_pu = '<i class="far fa-check-circle" style="color:#1ac95d;font-size:17px;"></i>';
				}
		// 		else{
		// $technical_pu = '<i style="border:2px solid #f1882ef2;color:#f1882ef2;border-radius:30px;font-size:10px;padding:1px;padding-top:2px;">✖</i>';

		// 		}

			}
			if($technical_a == '')
			{
	$technical_a = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			 if($technical_t == '')
			{
	$technical_t = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			 if($technical_m == '')
			{
	$technical_m = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			if($technical_r == '')
			{
	$technical_r = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			 if($technical_l == '')
			{
	$technical_l = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			 if($technical_p == '')
			{
	$technical_p = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			if($technical_u == '')
			{
	$technical_u = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
			 } 
			if($technical_pu == '')
			{
	$technical_pu = '<i class="material-icons" style="border:2px solid #f1882ef2;color:#f1882ef2;font-size: 13px;border-radius: 100%;">close</i>';
     		} 
			 
		 if($res->geometry == '')
		 {
			 $geo = '-';
		 }else{
			 $geo = $res->geometry;
		 }
		 if($res->polygons == '')
		 {
			 $poly = '-';
		 }else{
			 $poly = $res->polygons;
		 }
		 if($res->vertices == '')
		 {
			 $ver = '-';
		 }else{
			 $ver = $res->vertices;
		 }

			$output .='
					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Publish date</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$new.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Model ID</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$dir.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Animated</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_a.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Rigged</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_r.'</div>
						   </div>
					   </div>
					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">VR / AR / Lowpoly </div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_l.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">PBR</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_p.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Geometry</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$geo.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Polygons</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$poly.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Vertices</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$ver.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Textures</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_t.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Materials</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_m.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">UV Mapping</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_u.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Plugins Used</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$technical_pu.'</div>
						   </div>
					   </div>
			
					';
		}
		echo $output;
	}

	function popup_downloads()
	{
		$output = '';
		$output1 = '';
		$output2 = '';

		$model_id = $this->input->get('model_id');
		$res = $this->cart->popupdownloads($model_id);
		if($res)
		{
			$filess = glob($res->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			  $newdie = '#'.$path[1];
			}
			$time = $res->Time;
			$newtime = explode(' ',$time);
			$new_ttime = $newtime[0];
			

			$output2 .='
					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Publish date</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$new_ttime.'</div>
						   </div>
					   </div>

					   <div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
						   <div class="columns_more" style="flex:1;">
						   <div class="head_name">Model ID</div>
						   </div>
						   <div class="columns_more">
						       <div class="ans_name">'.$newdie.'</div>
						   </div>
					   </div>
					   ';

			$tech = $res->files_extension;
			$newtech = explode(',',$tech);
			$counttech = count($newtech);
			for( $i=0 ; $i<$counttech ; $i++)
			{
			$coma[$i] = $newtech[$i];
			}
			if($counttech == 1)
			{
				$newcomma = explode('=', $newtech[0]);
				if(isset($newcomma[1]))
				{
					$extract = number_format($newcomma[1] / 1048576, 2);
				$output1 .='
			<div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
			    <div class="columns_more" style="flex:1;">
					<div class="head_name">'.$newcomma[0].'</div>
			    </div>
			    <div class="columns_more">
					<div class="ans_name">'.$extract.' MB</div>
			    </div>
			</div>
				
			';
				}
			}else{
		for( $i=0 ; $i<$counttech ; $i++)
		{
			$newcomma = explode('=', $coma[$i]);
			$extract = number_format($newcomma[1] / 1048576, 2);
			$output1 .='
			<div class="row" style="display:flex;margin-right: 10px;margin-left:10px;margin-bottom:0px;border-bottom: 1px solid #ccc;">
			    <div class="columns_more" style="flex:1;">
					<div class="head_name">'.$newcomma[0].'</div>
			    </div>
			    <div class="columns_more">
					<div class="ans_name">'.$extract.' MB</div>
			    </div>
		    </div>
		    ';
		}
	}
		    
			$output .='
			    <a href="'.base_url($res->File_type).'" download style="color:#fff;"><button class="button1 btn-primary btn-large download_ing-model_pop" data-url='.$res->No_of_models.' onclick="maDownloads('.$res->No_of_models.')"
				 style="margin-top:30px;float:right;color:#fff">
				<i class="fas fa-download" 
				style="color:#fff;"></i>&nbsp;&nbsp;Download</button></a>
			';
		
		if($res->Model_id == '1')
		{
		echo $output1.''.$output;

		}else{
			echo $output2.''.$output1.''.$output;

		}
	  }
	}
	function addto()
	{
		$model_id = $this->input->post('model_id');
		$model_path = $this->input->post('model_path');
		$collection_name = $this->input->post('collection_name');
		$collection_id = $this->input->post('collection_id');
 		$data = array(
			 'Collection_id' => $collection_id,
			'User_id' => $this->session->userdata('User_id'),
			'Model_id' => $model_id,
			'Model_path' => $model_path,
			'Collection_name' => $collection_name
		);
	   $this->cart->addto($data);
		
	   redirect(base_url(). 'welcome/index');
		
		
	}

	function addtocollect()
	{
		$model_id = $this->input->post('model_id');
		$model_path = $this->input->post('model_path');
		$collection_name = $this->input->post('collection_name');
 		$data = array(
			'User_id' => $this->session->userdata('User_id'),
			'Model_id' => $model_id,
			'Model_path' => $model_path,
			'Collection_name' => $collection_name
		);
	   $this->cart->addtocollect($data);
		
	   redirect(base_url(). 'welcome/index');
		
		
	}

	function comments()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);

		if($res)
		{ 
			if($this->session->userdata('User_id'))
			{
			$output .='
			<div id="form">
			<textarea type="text" class="c-comment-editor__editor edited empty" id="myComment" name="comment" placeholder="Leave a comment, share your feedback. Don t be shy ;)" required style="height: 54px;margin-bottom:0px;"></textarea>
             
			<button class="button1 btn-primary btn-large" type="submit" id="comment" data ='.$res->No_of_models.'>send</button>
			</div>
			';
		    }
		      else{
				$output .='
				<div class="row" style="width:100%;margin-left: 0px;">
              <div class="features-list-free-download comment-box-section" style="width:100%;">
                <div class="c-comment-form__title">You must log in to comment.</div>
              <a class="button1 btn-primary btn-large" href="#popuplogin" style="margin-left: auto;margin-right: auto;">Login to comment</a>
            </div>
            </div>
				';
		   }
		}
		echo $output;
	}


	function send_comments()
	{
		$output = '';
		$this->load->helper('date');
		$c_date = date("Y-m-d H:i:s");
		$model_id = $this->input->post('model_id');
		$comment_text = $this->input->post('comment_text');
		$data = array(
			'User_id' => $this->session->userdata('User_id'),
			'Model_id' => $model_id,
			'Feed_back' => $comment_text,
			'Time' => $c_date
		
		);
		$comments = $this->cart->send_comments($data);
		if($comments)
		{
		foreach($comments as $row)
		{
			if($row->Avatar == '')
			{
			
			$output .='
			<div class="row" style="display:flex;margin-left: 0px;margin-bottom: 40px;width:100%;border-bottom: 1px solid #ddd;padding-top: 20px;">
			<div class="column" style="width:30px;margin-left: 0px;margin-bottom: 0px;">
			<div class="container" style="width:40px; ">
			  <img class="image-container__image" src='.base_url('resources/icons/user.png').' style="padding: 0px;width:25px;height:25px;border-radius: 4px;">
			  </div>
		  </div>
		  <div class="column" style="margin-left: 10px;width:100%;">
		  <article class="comment-item__body">
			<div class="comment-item__author-name">
			  <div class="user-name">
				<a class="user-name__link" href="#">
				  <div class="text">
					
					<span data-selenium="username" class="username-wrapper" itemprop="name" title='.$row->User_name.'>'.$row->User_name.'</span>
				  </div>
				</a>
				<span class="user-name__tag"> </span>
			  </div>
			</div>
			<div class="comment-item__meta">
			  
			  <time class="date datefuzz" itemprop="datecreated" datetime='.$row->Time.' title='.$row->Time.' style="font-size:12px;">'.$row->Time.'</time>
			</div>
			<div class="comment-item__text" itemprop="text">
			  <p>
				<p style="color:#555;margin-left: 10px;padding:15px;">
				<a href="#" rel="noopener noreferrer nofollow">'.$row->Feed_back.'</a> 
				   
				</p>
			  </p>
			</div>
			<div>
			  
			</div><div class="comment-item__options" style="padding:10px">
			  
			</div>
		  </article>
		</div>
		</div>
			 

			';
			// <a href="" class="comment-item__reply btn-textified" style="color:#555;margin-bottom: 20px;">Reply</a><span class="author">Model author</span><img class="emoji" draggable="false" alt="😁" src="">
			}
			else{
				$output .='
			<div class="row" style="display:flex;margin-left: 0px;margin-bottom: 40px;width:100%;border-bottom: 1px solid #ddd;padding-top: 20px;">
			<div class="column" style="width:30px;margin-left: 0px;margin-bottom: 0px;">
			<div class="container" style="width:40px; ">
			  <img class="image-container__image" src='.base_url($row->Avatar).' style="padding: 0px;width:25px;height:25px;border-radius: 4px;">
		 
			  </div>
		  </div>
		  <div class="column" style="margin-left: 10px;width:100%;">
		  <article class="comment-item__body">
			<div class="comment-item__author-name">
			  <div class="user-name">
				<a class="user-name__link" href="#">
				  <div class="text">
					
					<span data-selenium="username" class="username-wrapper" itemprop="name" title='.$row->User_name.'>'.$row->User_name.'</span>
				  </div>
				</a>
				<span class="user-name__tag"> </span>
			  </div>
			</div>
			<div class="comment-item__meta">
			  
			  <time class="date datefuzz" itemprop="datecreated" datetime='.$row->Time.' title='.$row->Time.' style="font-size:12px;">'.$row->Time.'</time>
			</div>
			<div class="comment-item__text" itemprop="text">
			  <p>
				<p style="color:#555;margin-left: 10px;padding:15px;">
				<a href="#" rel="noopener noreferrer nofollow">'.$row->Feed_back.'</a> 
				  
				</p>
			  </p>
			</div>
			<div>
			  
			</div><div class="comment-item__options" style="padding:10px">
			  
			</div>
		  </article>
		</div>
		</div>
			 

			';
			}
		}
		
		
	  }
		echo $output;
	}

	


	public function likes()
	{
		$data = array(
			'User_id' => $this->session->userdata('User_id'),
			'Model_id' => $this->input->post('model_id')
		);
		$total_likes = $this->cart->likes($data);
		echo $total_likes;
		
	}

	function get_comments()
	{
		$output = '';
		$model_id = $this->input->post('user_model_id');
		$comments = $this->cart->get_comments($model_id);
	
		if($comments)
		{
		foreach($comments as $row){
		if($row->Avatar=='')
		{
			$output .='
			<div class="row" style="display:flex;margin-left: 0px;margin-bottom: 40px;width:100%;border-bottom: 1px solid #ddd;padding-top: 20px;">
			<div class="column" style="width:30px;margin-left: 0px;margin-bottom: 0px;">
			<div class="container" style="width:40px; ">
			  <img class="image-container__image" src='.base_url('resources/icons/user.png').' style="padding: 0px;width:25px;height:25px;border-radius: 4px;">
		  </div>
		  </div>
		  <div class="column" style="margin-left: 10px;width:100%;">
		  <article class="comment-item__body">
			<div class="comment-item__author-name">
			  <div class="user-name">
				<a class="user-name__link" href="#">
				  <div class="text">
					
					<span data-selenium="username" class="username-wrapper" itemprop="name" title='.$row->User_name.'>'.$row->User_name.'</span>
				  </div>
				</a>
				<span class="user-name__tag"> </span>
			  </div>
			</div>
			<div class="comment-item__meta">
			 
			  <time class="date datefuzz" itemprop="datecreated" datetime='.$row->Time.' title='.$row->Time.' style="font-size:12px;">'.$row->Time.'</time>
			</div>
			<div class="comment-item__text" itemprop="text">
			  <p>
				<p style="color:#555;margin-left: 10px;padding:15px;">
				<a href="#" rel="noopener noreferrer nofollow">'.$row->Feed_back.'</a> 
				   
				</p>
			  </p>
			</div>
			<div>
			  </div>
			  <div class="comment-item__options" style="padding:10px">
			  
			</div>
		  </article>
		</div>
		</div>
			 

			';
		}
		else{
			$output .='
			<div class="row" style="display:flex;margin-left: 0px;margin-bottom: 40px;width:100%;border-bottom: 1px solid #ddd;padding-top: 20px;">
			<div class="column" style="width:30px;margin-left: 0px;margin-bottom: 0px;">
			<div class="container" style="width:40px; ">
			  <img class="image-container__image" src='.base_url($row->Avatar).' style="padding: 0px;width:25px;height:25px;border-radius: 4px;">
		  </div>
		  </div>
		  <div class="column" style="margin-left: 10px;width:100%;">
		  <article class="comment-item__body">
			<div class="comment-item__author-name">
			  <div class="user-name">
				<a class="user-name__link" href="#">
				  <div class="text">
					
					<span data-selenium="username" class="username-wrapper" itemprop="name" title='.$row->User_name.'>'.$row->User_name.'</span>
				  </div>
				</a>
				<span class="user-name__tag"> </span>
			  </div>
			</div>
			<div class="comment-item__meta">
			 
			  <time class="date datefuzz" itemprop="datecreated" datetime='.$row->Time.' title='.$row->Time.' style="font-size:12px;">'.$row->Time.'</time>
			</div>
			<div class="comment-item__text" itemprop="text">
			  <p>
				<p style="color:#555;margin-left: 10px;padding:15px;">
				<a href="#" rel="noopener noreferrer nofollow">'.$row->Feed_back.'</a> 
				   
				</p>
			  </p>
			</div>
			<div>
			  
			</div><div class="comment-item__options" style="padding:10px">
			  
			</div>
		  </article>
		</div>
		</div>
			 

			';
		}
		}
	  }
		echo $output;
	}


	function fetch()
	{
	 $output = '';
	 
	 $data = $this->main_model->fetch_data($this->input->post('limit'), $this->input->post('start'), $this->session->userdata('User_id'));
	 
	 if($data->num_rows() > 0)
	 {
	  foreach($data->result() as $row)
	  {

		$filess = glob($row->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
		  if($row->Sale_count == 0 )
		  {
			
			$output .= '
			<div class="post_data box" style="padding:0px;" >
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="button" onclick="show_models_popup('.$row->No_of_models.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			
			<div class="w3-dropdown-hover w3-hide-small model-settings_round" style="right: 15px;margin-top:-30px;float:right;display: flex;width: 35px;height: 35px;background-color: #1caad9;border-radius: 100%;">
			<i class="material-icons" style="color:#fff;font-size:20px;margin:7.5px;cursor:pointer;">settings</i>
			  <div class="w3-dropdown-content w3-bar-block" style="background:#eee;min-width:100px;margin-left:-100px;border-radius:5px;margin-top:-50px;">
				 <div onclick="show_edit_models_popup('.$row->No_of_models.')" class="w3-bar-item w3-button dropnew">Properties</div>
				 <div onclick="show_delete_models_popup('.$row->No_of_models.')" class="w3-bar-item w3-button dropnew" style="margin-bottom:10px;">Delete</div>
			
			  </div>
			</div>
			<div class="our-models">
			
			<a class="model_name" style="color:#555; float:left;">'.$row->Model_name.'</a>
			<a class="model_price" style="float:right;color:#555;"><span style="color: rgb(241, 57, 88);">free</span></a>
		  </div>
			</div>
			 
			';
		  }
		  else
		  {
			$output .= '
			<div class="post_data box" style="padding:0px;" img_url='.base_url($row->Model_path).' >
			<a href="'.base_url($row->File_type).'" download class="download_ing-model" data-url='.$row->No_of_models.'> <i class="fas fa-download" style="margin-top:10px;float:right;margin-right:20px;color:#aaa;"></i></a>

			<a class="button" onclick="show_model_popup('.$row->No_of_models.')" style="margin:auto;height:192px;padding: 80px;
			border-radius:4px 4px 0px 0px;background:url('.base_url($row->Thumbnail).');background-position:center center; 
			background-size:contain; background-repeat:no-repeat;">
			</a>
			<div class="w3-dropdown-hover w3-hide-small model-settings_round" style="right: 15px;margin-top:-30px;float:right;display: flex;width: 35px;height: 35px;background-color: #1caad9;border-radius: 100%;">
			<i class="material-icons" style="color:#fff;font-size:20px;margin:7.5px;cursor:pointer;">settings</i>
			  <div class="w3-dropdown-content w3-bar-block" style="background:#eee;min-width:100px;margin-left:-100px;border-radius:5px;margin-top:-50px;">
				 <div onclick="show_edit_models_popup('.$row->No_of_models.')" class="w3-bar-item w3-button dropnew">Properties</div>
				 <div onclick="show_delete_models_popup('.$row->No_of_models.')" class="w3-bar-item w3-button dropnew" style="margin-bottom:10px;">Delete</div>
			
			  </div>
			</div>
			<div class="our-models">
			<a class="model_name" style="color:#555; float:left;">'.$row->Model_name.'</a>
			<a class="model_price" style="float:right;color:#555;"><span style="color: rgb(241, 57, 88);">'.$row->Sale_count.'</span></a>
		  </div>
			</div>
			
			';
		  }
	  }
	  
	 }
	 
	 echo $output;
	// echo $data;
	}


	function popupdeletemodfetch()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		
		if($res)
		{
			echo '<div class="popup-content">
			<p style="margin:0px;"><b>'.$res->Model_name.'</b> will be deleted. <b>This cannot be undone.</b></p>
			<p style="margin:0px;">Delete this model permanently ?</p>
			</div>
                   <footer class="popup-footer">
                
                      <div class="actions">
                         <button onclick="goBack()" class="button1 btn-medium btn-tertiary cancel" type="reset">Cancel</button>
        
                          <button onclick="mod_del_fun('.$res->No_of_models.')" class="button1 btn-medium btn-danger submit" id="delete_this_model" type="submit">DELETE THIS MODEL</button>
                       </div>

                    </footer>';
		}
	}

	function popup_deleteinput_editmodels()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		
		if($res)
		{
                     
			echo '<a onclick="mod_del_fun('.$res->No_of_models.')" class="c-model-properties__delete cell">Delete this model</a>';
		}
	}

	function delete_model_fetch()
	{
		$model_id = $this->input->post('model_id');
		$res = $this->main_model->fetch_popup($model_id);
		$filess = glob($res->Model_path); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			// $dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it,
                     RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()){
                     rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
		   if(rmdir($dir))
		   {
			echo 'success';
		  }
		$this->db->delete("upload_table",array("No_of_models"=>$model_id));
	}

	function popupeditmodelfetch()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		// $this->session->set_userdata('edit_model_s', $user_model_id);
		$res = $this->main_model->fetch_popup($user_model_id);
		$basename = pathinfo($res->Model_path, PATHINFO_EXTENSION);
		
		if($res)
		{
			if($basename == 'png' || $basename == 'jpg' || $basename == 'jpeg' || $basename == 'raw' || $basename == 'eps' || $basename == 'svg' || $basename == 'psd' || $basename == 'ai' || $basename == 'PNG' || $basename == 'JPG' || $basename == 'JPEG' || $basename == 'RAW' || $basename == 'EPS' || $basename == 'SVG' || $basename == 'PSD' || $basename == 'AI')
			{
				if($basename == 'raw' || $basename == 'eps' || $basename == 'psd' || $basename == 'ai' || $basename == 'RAW' || $basename == 'EPS' || $basename == 'PSD' || $basename == 'AI')
				{
					$output .='
				<img class="model-player" src='.base_url($res->Thumbnail_og).' style="width:100%;height:auto;background: #ccc;">
				';
				
				}else{
					if($res->Categories_id == '108')
					{
						$output .='
						<iframe class="model-player" allowfullscreen style="border-style:none;width:100%;height:200px;" src='.base_url('src/standalone/pannellum.htm?panorama='.base_url($res->Model_path).'&amp;preview='.base_url($res->Model_path).'').'></iframe>
						';
					}
					else{
				$output .='
				
					     <img class="model-player" src='.base_url($res->Model_path).' style="width:100%;height:auto;">
					  
				';
					}
				}
			}
			elseif($basename == 'aep' || $basename == 'prproj' || $basename == 'drp' || $basename == 'mp4' || $basename == 'AEP' || $basename == 'PRPROJ' || $basename == 'DRP' || $basename == 'MP4'){
				if($basename == 'aep' || $basename == 'prproj' || $basename == 'drp' || $basename == 'AEP' || $basename == 'PRPROJ' || $basename == 'DRP')
				{
					$output .='
					<img class="model-player" src='.base_url($res->Thumbnail_og).' style="width:100%;height:auto;background: #ccc;">
				   ';
				}
				else{
				$output .='
				<video class="model-player" controls style="width:100%;height:auto;background: #ccc;">
                    <source src='.base_url($res->Model_path).' type="video/mp4">
  
                         Your browser does not support HTML video.
                    </video>
				';
				}
			}
			elseif($basename == 'fbx' || $basename == '3ds' || $basename == 'max' || $basename == 'blend' || $basename == 'obj' || $basename == 'c4d' || $basename == 'mb' || $basename == 'ma' || $basename == 'dae' || $basename == 'stl' || $basename == 'FBX' || $basename == '3DS' || $basename == 'MAX' || $basename == 'BLEND' || $basename == 'OBJ' || $basename == 'C4D' || $basename == 'MB' || $basename == 'MA' || $basename == 'DAE' || $basename == 'STL')
			              {
							$output .='
							<img class="model-player" src='.base_url($res->Thumbnail_og).' style="width:100%;height:auto;background: #ccc;">
							';
			 }
			else{


			$output .='
			<model-viewer class="model-player" src='.base_url($res->Model_path).' style="width:100%;height:250px;background: #ccc;"
              ar
              auto-rotate camera-controls
			  camera-orbit="-20deg 75deg 2m"
			  
              shadow-intensity="1"
              alt="A 3D model of an buster_drone">
          </model-viewer>
			
			';
		     

			}
		}
		echo $output;
	}

	function load_likes()
	{
		$output = '';
		$data = $this->main_model->fetch_likes($this->input->post('limit'), $this->input->post('start'), $this->session->userdata('User_id'));
		
			foreach($data as $row)
			{
				
				$user_detail = $this->cart->user_details($row->User_id);
				
					//print_r($user_detail);die;
				
				
				$output .= '

				<div class="row mod_rows">
				    <div class="column" style="width:15%;">
						<img style="width:40px;height:40px" src='.base_url($user_detail->Avatar).'>
				
					</div>
					<div class="column" style="width:30%;">
						<a style="color:#000">'.$user_detail->User_name.'</a>
				
				    </div>
				    <div class="column" style="width:15%;">
						<a style="color:#000">Liked</a>
				
					</div>
					<div class="column" style="width:15%;">
						<img style="width:40px;height:40px" src='.base_url($row->Thumbnail).'>
				
					</div>
					<div class="column" style="width:25%;">
						<a style="color:#000">'.$row->Model_name.'</a>
				
				    </div>
				</div>
				';
			}
		
		echo $output;
	}


	function load_comments()
	{
		$output = '';
		$data = $this->main_model->fetch_comments($this->input->post('limit'), $this->input->post('start'), $this->session->userdata('User_id'));
		
			foreach($data as $row)
			{
				
				$user_detail = $this->cart->user_details($row->User_id);
				
					//print_r($user_detail);die;
				
				
				$output .= '

				<div class="row mod_rows">
				    <div class="column" style="width:12%;">
						<img style="width:30px;height:30px" src='.base_url($user_detail->Avatar).'>
				
					</div>
					<div class="column" style="width:23%;">
						<a style="color:#000;display:flex;width:80%;overflow:hidden;">'.$user_detail->User_name.'</a>
				
				    </div>
				    <div class="column" style="width:25%;display:flex;overflow-x:scroll;">
						<a style="color:#000;">'.$row->Feed_back.'</a>
				
					</div>
					<div class="column" style="width:15%;">
						<img style="width:40px;height:40px" src='.base_url($row->Thumbnail).'>
				
					</div>
					<div class="column" style="width:25%;">
						<a style="color:#000">'.$row->Model_name.'</a>
				
				    </div>
				</div>
				';
			}
		
		echo $output;
	}



	function user_model_image()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		
		if($res)
		{
			$output .='
			<img class="image-container__image " style="height:38px;width:35px;border-radius: 4px;" src='.base_url($res->Avatar).'>
			';
		}
		echo $output;
		

	}

	function popupfetch()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		//	<img class="model-width" style="width:900px;" src='.base_url($res->Model_path).'>
		$basename = pathinfo($res->Model_path, PATHINFO_EXTENSION);

		
		if($res)
		{
			if($basename == 'png' || $basename == 'jpg' || $basename == 'jpeg' || $basename == 'raw' || $basename == 'eps' || $basename == 'svg' || $basename == 'psd' || $basename == 'ai' || $basename == 'PNG' || $basename == 'JPG' || $basename == 'JPEG' || $basename == 'RAW' || $basename == 'EPS' || $basename == 'SVG' || $basename == 'PSD' || $basename == 'AI')
			{
				if($basename == 'raw' || $basename == 'eps' || $basename == 'psd' || $basename == 'ai' || $basename == 'RAW' || $basename == 'EPS' || $basename == 'PSD' || $basename == 'AI')
				{
					$output .='
				   <img class="model-player" src='.base_url($res->Thumbnail_og).' style="height:auto;">
				   ';
				}else{
					if($res->Categories_id == '108')
					{
						$output .='
						<iframe class="model-player" allowfullscreen style="border-style:none;" src='.base_url('src/standalone/pannellum.htm?panorama='.base_url($res->Model_path).'&amp;preview='.base_url($res->Model_path).'').'></iframe>
						';
					}
					else{
				$output .='
				
					     <img class="model-player" src='.base_url($res->Model_path).' style="height:auto;">
					  
				';
					}
				}
			}
			elseif($basename == 'aep' || $basename == 'prproj' || $basename == 'drp' || $basename == 'mp4' || $basename == 'AEP' || $basename == 'PRPROJ' || $basename == 'DRP' || $basename == 'MP4'){
				if($basename == 'aep' || $basename == 'prproj' || $basename == 'drp' || $basename == 'AEP' || $basename == 'PRPROJ' || $basename == 'DRP')
				{
					$output .='
				   <img class="model-player" src='.base_url($res->Thumbnail_og).' style="height:auto;">
				   ';
				}
				else{
					if($res->Categories_id == '120'){
						$output .='
						<div class="model-player">
						<p><link href='.base_url('resources/video/video-js.css').' rel="stylesheet" type="text/css" property="stylesheet">
               <script src='.base_url('resources/video/video.js').'></script>
			   <script src='.base_url('resources/video/videojs-pannellum-plugin.js').'></script></p>
			   
 <video id="panorama" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" style="width:100%;height:100%;margin-top: -15px;" crossorigin="anonymous">
<source src='.base_url($res->Model_path).' type="video/mp4" />
<p class="vjs-no-js">
To view this video please enable JavaScript, and consider upgrading to
a web browser that <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
</p>
</video>

 <script>
videojs("panorama", {
    plugins: {
        pannellum: {}
    }
});
</script>
</div>
						';

					}else{
				$output .='
				<video class="model-player" controls  style="height:auto;">
                    <source src='.base_url($res->Model_path).' type="video/mp4">
  
                         Your browser does not support HTML video.
                    </video>
				';
					}
				}
			}
			elseif($basename == 'fbx' || $basename == '3ds' || $basename == 'max' || $basename == 'blend' || $basename == 'obj' || $basename == 'c4d' || $basename == 'mb' || $basename == 'ma' || $basename == 'dae' || $basename == 'stl' || $basename == 'FBX' || $basename == '3DS' || $basename == 'MAX' || $basename == 'BLEND' || $basename == 'OBJ' || $basename == 'C4D' || $basename == 'MB' || $basename == 'MA' || $basename == 'DAE' || $basename == 'STL')
			              {
							$output .='
							<img class="model-player" src='.base_url($res->Thumbnail_og).' style="height:auto;">
							';
			 }
			else{
			$output .='
			<model-viewer class="model-player" src='.base_url($res->Model_path).'
              ar
              auto-rotate camera-controls
			  camera-orbit="-20deg 75deg 2m"
			  
              shadow-intensity="1"
              alt="A 3D model of an buster_drone">
          </model-viewer>
			
			';
			}
		}
		echo $output;
		

	}

	function popupinput_edit_models()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		// <input type="text" name="title_model" id="title_model" value='.$res->Model_name.'>
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			$output .='<div class="model_form-field">
			<label class="form-label forms__label">Title</label>
			
			<textarea id="title_model" class="form-input --border" name="title_model" rows="1" cols="86" 
			style="word-spacing: unset;letter-spacing: unset;resize: none;background-color: rgb(231, 231, 231);font-size: 16px;width:100%;" 
			required="">'.$res->Model_name.'</textarea>

	 </div>
   
		 <div class="model_form-field" style="margin-top:50px;">
			   <label class="form-label forms__label">Description</label>
			   <textarea id="modsdescriptionss" class="form-input --border" name="model_description" rows="4" cols="86" style="word-spacing: unset;letter-spacing: unset;resize: none;background-color: rgb(231, 231, 231);font-size: 16px;width:100%;" required="">'.$res->Model_Description.'</textarea>
	 </div>';
		}
		echo $output;
	}


	function popup_rightview_editmodels(){
		$output = '';
		$user_model_id = $this->input->post('model_id');
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			if($res->Sale_count == 0)
			{
				$output .='<div class="right-settings__status">Status: <strong>Published </strong></div>
                <button class="button1 btn-primary" onclick="show_models_popup('.$res->No_of_models.')" style="font-size:10px;padding:5px;">
                  view my model
                </button>';
			}else{
				$output .='<div class="right-settings__status">Status: <strong>Published </strong></div>
                <button class="button1 btn-primary" onclick="show_model_popup('.$res->No_of_models.')" style="font-size:10px;padding:5px;">
                  view my model
                </button>';

			}
		}
		echo $output;

	}

	function popupuploadthumb_edit_models(){
		$output = '';
		$user_model_id = $this->input->post('model_id');
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			$files = glob($res->Thumbnail); // get all file names
			
			  foreach($files as $file){ // iterate files
				$path = explode('/',$file);
				$f_path = $path[0].'/'.$path[1].'/'.$path[2].'/'.$path[3];
			  //print_r($f_path);die;
			if($res->Thumbnail == $f_path)
			{
			$output .='<input type="hidden" name="model_thumnail" id="model_thumnail" value='.$res->Thumbnail.'>
			<input type="hidden" name="model_thumnail" id="model_thumnail_og" value='.$res->Thumbnail_og.'>

			<div class="main_thumb_nail"><button class="remove-default-style style-scope thumbnails-compact-editor-uploader"><img src='.base_url($res->Thumbnail).' style="width:200px;"></button>
				<div onclick="delete_editThumb('.$res->No_of_models.')" data-selenium='.$res->Thumbnail.' style="color:red;margin-top:10px;cursor:pointer;">Delete</div></div>';
			}
			else{
				$output .='<button class="remove-default-style style-scope thumbnails-compact-editor-uploader" onclick="thumbfunction('.$res->No_of_models.')" id="click_thumbnail_edit_add">
				<a>
			<iron-icon id="add-photo-icon" class="remove-defaults style-scope ytcp-thumbnails-compact-editor-uploader" icon="yt-icons:add_photo_alternate"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g viewBox="0 0 24 24" class="style-scope iron-icon">
			<path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z" class="style-scope iron-icon"></path>
			<path d="M0 0h24v24H0z" fill="none" class="style-scope iron-icon"></path>
			</g></svg>

			</iron-icon>
			<span class="style-scope thumbnails-compact-editor-uploader" style="padding:10px;">
			 Upload thumbnail .jpg, .png, .jpeg
			</span>
				</a>
		</button>';
			}
		}
		}
		echo $output;
	}


	function delete__Thumb()
	{
		$output = '';
		$user_model_id = $this->input->post('thumbnail');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			$files = glob($res->Thumbnail_og); // get all file names
			
			  foreach($files as $file){ // iterate files
				$path = explode('/',$file);
				$f_path = $path[0].'/'.$path[1].'/'.$path[2];
				unlink($file);
			  }
			$files = glob($res->Thumbnail); // get all file names
			
			  foreach($files as $file){ // iterate files
				$path = explode('/',$file);
				$f_path = $path[0].'/'.$path[1].'/'.$path[2];
				unlink($file);
				if(rmdir($f_path)){
					echo '<button class="remove-default-style style-scope thumbnails-compact-editor-uploader" onclick="thumbnlfunction('.$res->No_of_models.')" id="click_thumbnail_edit_add">
					<a>
				<iron-icon id="add-photo-icon" class="remove-defaults style-scope ytcp-thumbnails-compact-editor-uploader" icon="yt-icons:add_photo_alternate"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g viewBox="0 0 24 24" class="style-scope iron-icon">
				<path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z" class="style-scope iron-icon"></path>
				<path d="M0 0h24v24H0z" fill="none" class="style-scope iron-icon"></path>
				</g></svg>
	
				</iron-icon>
				<span class="style-scope thumbnails-compact-editor-uploader" style="padding:10px;">
				 Upload thumbnail .jpg, .png, .jpeg
				</span>
					</a>
			</button>';
				
				}
				else{
					echo 'failure';
				}
	         // if(is_file($file))
		     //  unlink($file); // delete file 9538611927
			  }
	        }
		
	}


	function thumbnail_add_buttons()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		//print_r($user_model_id);die;
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			$file_name = $_FILES['file']['name'];
			if($_FILES['file']['name'] != '')
			{
			$files = glob($res->Model_path); // get all file names
			
			  foreach($files as $file){ // iterate files
				$path = explode('/',$file);
				$f_path = $path[0].'/'.$path[1].'/';
				$folder = 'thumbnails';
				if(is_dir($f_path.''.$folder))
				{
					$location = $f_path.''.$folder.'/'.$file_name;
				//print_r($f_path);die;
				if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		          {
			        
					
					echo '<input type="hidden" name="model_thumnail" id="model_thumnail_update" value='.$location.'>
					<div class="input_delte_edit"><button class="remove-default-style style-scope thumbnails-compact-editor-uploader">
		 	          <img src='.base_url($location).' style="width:200px;">
		 	          </button>
			           <div onclick="deletenl_editThumb('.$res->No_of_models.')" id="delete_thumbs" data-selenium='.$this->session->userdata('ex_paths').' style="color:red;margin-top:10px;cursor:pointer;">Delete</div></div>';
			
				  }

				}else{
	             mkdir($f_path."/".$folder);
	             $ex_path = $f_path;
	             $location = $f_path.''.$folder.'/'.$file_name;
				//print_r($f_path);die;
				if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		          {
			        
					
					echo '<input type="hidden" name="model_thumnail" id="model_thumnail_update" value='.$location.'>
					<div class="input_delte_edit"><button class="remove-default-style style-scope thumbnails-compact-editor-uploader">
		 	          <img src='.base_url($location).' style="width:200px;">
		 	          </button>
			           <div onclick="deletenl_editThumb('.$res->No_of_models.')" id="delete_thumbs" data-selenium='.$this->session->userdata('ex_paths').' style="color:red;margin-top:10px;cursor:pointer;">Delete</div></div>';
			
				  }
				}
			  }
			}
		}

	}

	// <label class="form-label forms__label">Tags</label>
	// <link rel="stylesheet" href="'.base_url("resources/tag/tags.css").'">
	// <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
				
	// 			<script type="text/javascript" src='.base_url("resources/tag/tags.js").'></script>
	// 		<script>
	// 			$(function() {
	// 				$("#title_model_of_text").tags({
	// 					unique: true,
	// 					maxTags: 10
	// 				});
	// 			});
	// 		</script>
	// 			<input type="text" name="title_model_of_text" id="title_model_of_text" value='.$tag.'>

	function popup_tags_editmodels(){
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		
		if($res)
		{
			
			$tag = $res->Tag_name;
			
		
			echo $tag;
			
		}
	}


	function popup_selectpublic_editmodels()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		//print_r($res->Model_type);die;
		if($res->Model_type == 'Public')
		{
			echo '<label class="form-label c-model-properties__label">Who can see?</label>
			<select name="mod_public" id="mod_public">
			
			 <option value="Public">Public</option>
			 <option value="Private">Private</option>
		 </select>';
		}
		else{
			echo '<label class="form-label c-model-properties__label">Who can see?</label>
			<select name="mod_public" id="mod_public">
			<option value="Private">Private</option>
			 <option value="Public">Public</option>
		 </select>';
		}
	}


	function popup_rightinput_editmodels()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		//print_r($res->Model_type);die;
		if($res->Sale_count == 0)
		{
			echo '
   
            <input type="hidden" name="No_of_models" id="No_of_models" value='.$user_model_id.'>
	   
			<input type="number" id="price_num" name="price_num" value='.$res->Sale_count.'>
		 ';
		}
		else{
			echo '
   
			<input type="hidden" name="No_of_models" id="No_of_models" value='.$user_model_id.'>
	   
			<input type="number" id="price_num" name="price_num" value='.$res->Sale_count.'>
		 ';
		}
	
	
	}


	function popup_selectcat_editmodels()
	{
		$output = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			echo $this->main_model->fetch_categories_edit($res->Model_id, $res->Categories_id, $res->Categories_id2);
		}
	}


	function popup_technical_editmodels()
	{
		$output = '';
		$output1 = '';
		$user_model_id = $this->input->post('model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		if($res)
		{
			$output .='
			<label class="form-label forms__label">Technical Details</label>
      <div class="rowss" style="display:flex;flex-wrap: wrap;">
			';

			$output1 .='
			</div>
			';

			$tech = $res->technical;
			$newtech = explode(',',$tech);
			$technical_a = '';
			$technical_t = '';
			$technical_m = '';
			$technical_r = '';
			$technical_l = '';
			$technical_p = '';
			$technical_u = '';
			$technical_pu = '';

			foreach($newtech as $row)
			{
				
				if($row == 'textures')
				{
		$technical_t = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="textures" checked="checked" style="display:none;"><span style="margin:0px;">Textures</span>
             </label>
		 </div>
		';
				}
				else if($row == 'materials')
				{
		$technical_m = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="materials" checked="checked" style="display:none;"><span style="margin:0px;">Materials</span>
             </label>
		 </div>
		 
		 <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				else if($row == 'animated')
				{
		$technical_a ='
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="animated" checked="checked" style="display:none;"><span style="margin:0px;">Animated</span>
             </label>
         </div>
		
		 ';
				}
				else if($row == 'rigged')
				{
		$technical_r = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="riggid" checked="checked" style="display:none;"><span style="margin:0px;">Riggid</span>
             </label>
		 </div>
		 
		 <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				else if($row == 'lowpoly')
				{
		$technical_l = '

		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="lowpoly" checked="checked" style="display:none;"><span style="margin:0px;">Low-poly (game-ready)</span>
             </label>
         </div>
		';
				}
				else if($row == 'pbr')
				{
		$technical_p = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="pbr" checked="checked" style="display:none;"><span style="margin:0px;">Pbr</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				else if($row == 'uvw')
				{
		$technical_u = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="uvw" checked="checked" style="display:none;"><span style="margin:0px;">UVW&nbsp;mapping</span>
             </label>
         </div>
		';
				}
				else if($row == 'plugins')
				{
		$technical_pu = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="plugins" checked="checked" style="display:none;"><span style="margin:0px;">Plugins&nbsp;used</span>
             </label>
         </div>
		';
				}

			}
			if($technical_t == '')
				{
		$technical_t = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="textures" style="display:none;"><span style="margin:0px;">Textures</span>
             </label>
		 </div>
		';
				}
				if($technical_m == '')
				{
		$technical_m = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="materials" style="display:none;"><span style="margin:0px;">Materials</span>
             </label>
		 </div>
		 
		 <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				if($technical_a == '')
				{
		$technical_a ='
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="animated" style="display:none;"><span style="margin:0px;">Animated</span>
             </label>
         </div>
		
		 ';
				}
				if($technical_r == '')
				{
		$technical_r = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="riggid" style="display:none;"><span style="margin:0px;">Riggid</span>
             </label>
		 </div>
		 
		 <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				if($technical_l == '')
				{
		$technical_l = '

		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="lowpoly" style="display:none;"><span style="margin:0px;">Low-poly (game-ready)</span>
             </label>
         </div>
		';
				}
				if($technical_p == '')
				{
		$technical_p = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="pbr" style="display:none;"><span style="margin:0px;">Pbr</span>
             </label>
         </div>
         <div class="ck-button" style="margin-top: 3px;"><span class="separator"></span></div>
		';
				}
				if($technical_u == '')
				{
		$technical_u = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="uvw" style="display:none;"><span style="margin:0px;">UVW&nbsp;mapping</span>
             </label>
         </div>
		';
				}
				if($technical_pu == '')
				{
		$technical_pu = '
		<div id="ck-button">
            <label>
                <input type="checkbox" class="technical" value="plugins" style="display:none;"><span style="margin:0px;">Plugins&nbsp;used</span>
             </label>
         </div>
		';
				}

		 $select_row = ' <div class="next-row" style="display:flex;margin-top:20px;">
                     <div class="column-colls">
						 <label class="form-label forms__label">Geometry</label>';
		$select = '';
		if($res->geometry == 'polygon mesh')
		{
			$select .= '
			<select name="mod_public" id="geo">
			                <option value="polygon mesh">Polygon Mesh</option>
                              <option value="">Choose Geometry</option>
                              <option value="subdivision">Subdivision-ready</option>
                              <option value="nurbs">Nurbs</option>
                              <option value="other">other</option>
                          </select>
               </div>
			'; 
		}
		else if($res->geometry == 'subdivision')
		{
			$select .= '
			<select name="mod_public" id="geo">
			             <option value="subdivision">Subdivision-ready</option>
						 <option value="">Choose Geometry</option>
 
			                <option value="polygon mesh">Polygon Mesh</option>
                              <option value="nurbs">Nurbs</option>
                              <option value="other">other</option>
                          </select>
               </div>
			'; 

		}else if($res->geometry == 'nurbs')
		{
			$select .= ' 
			<select name="mod_public" id="geo">
			                 <option value="nurbs">Nurbs</option>

                              <option value="">Choose Geometry</option>
                              <option value="polygon mesh">Polygon Mesh</option>
                              <option value="subdivision">Subdivision-ready</option>
                              <option value="other">other</option>
                          </select>
			   </div>
			   ';

		}else if($res->geometry == 'other')
		{
			$select .= '
			<select name="mod_public" id="geo">
			               <option value="other">other</option>

                              <option value="">Choose Geometry</option>
                              <option value="polygon mesh">Polygon Mesh</option>
                              <option value="subdivision">Subdivision-ready</option>
                              <option value="nurbs">Nurbs</option>
                          </select>
			   </div>';

		}else if($res->geometry == '')
		{
			$select .= '
			<select name="mod_public" id="geo">

                              <option value="">Choose Geometry</option>
                              <option value="polygon mesh">Polygon Mesh</option>
                              <option value="subdivision">Subdivision-ready</option>
							  <option value="nurbs">Nurbs</option>
							  <option value="other">other</option>
							  
                          </select>
			   </div>';

		}

		$polygons ='<div class="column-colls" style="margin-left:15px;">
		<label class="form-label forms__label">Polygons</label>
		<input type="number" class="form-input --border" id="polycount" value='.$res->polygons.' placeholder="0" name="price_num" style="margin: 0px;">
   </div>';
		  
	   $vertices ='
	   <div class="column-colls" style="margin-left:15px;">
                    <label class="form-label forms__label">Vertices</label>
                    <input type="number" class="form-input --border" id="verticescount" value='.$res->vertices.' placeholder="0" name="price_num" style="margin: 0px;">
               </div>
	   ';
		 

		}
		if($res->Model_id == 1)
		{
		echo $output.''.$technical_t.''.$technical_m.''.$technical_a.''.$technical_r.''.$technical_l.''.$technical_p.''.$technical_u.''.$technical_pu.''.$output1
		.''.$select_row.''.$select.''.$polygons.''.$vertices;
		}else{
			echo '<a></a>';
		}
	}

	function form_save_model()
	{

		$no_of_models = $this->input->post('No_of_models');
		// print_r($no_of_models);die;
	}

  




	function get_price()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		// $get_result = $this->main_model->get_cart_item($res->No_of_models);
		$cart = $this->main_model->get_cartsitem($res->No_of_models, $this->session->userdata('User_id'));
		// print_r($cart);die;
		
		if($res)
		{
			if($this->session->userdata('User_id'))
			{
				if($cart)
				{

				
				if($res->No_of_models == $cart->No_of_models && $res->User_id == $this->session->userdata('User_id'))
				{
					$output .='
			
					<h3 class="payment-cart-h3" style="padding:0px;color:#1caad9;padding-top:20px;">$'.$res->Sale_count.'</h3>
					<ul class="store-informations__header__list" style="padding:0px;">
						  <li><i class="fas fa-lock fa-fw"></i>Secure payment</li>
						  <li><i class="fas fa-envelope fa-fw"></i>Support from sellers</li>
						  <li><i class="fas fa-stopwatch fa-fw"></i>Access to future versions</li>
					  </ul>
						<div class="addto-cart-button">
						<button class="button1 btn-primary btn-large" style="text-align: center;font-size:16px;width:270px;padding: 20px 0px;">Added to your cart</button>
					  </div>
					';
				}
				else{

					$output .='
			
					<h3 class="payment-cart-h3" style="padding:0px;color:#1caad9;padding-top:20px;">$'.$res->Sale_count.'</h3>
					<ul class="store-informations__header__list" style="padding:0px;">
						  <li><i class="fas fa-lock fa-fw"></i>Secure payment</li>
						  <li><i class="fas fa-envelope fa-fw"></i>Support from sellers</li>
						  <li><i class="fas fa-stopwatch fa-fw"></i>Access to future versions</li>
					  </ul>
						<div class="addto-cart-button">
						<button class="button1 btn-primary btn-large" style="text-align: center;font-size:16px;width:270px;padding: 20px 0px;">Added to your cart</button>
					  </div>
					';

				}

				}else{

				
				
				$output .='
			
			<h3 class="payment-cart-h3" style="padding:0px;color:#1caad9;padding-top:20px;">$'.$res->Sale_count.'</h3>
			<ul class="store-informations__header__list" style="padding:0px;">
                  <li><i class="fas fa-lock fa-fw"></i>Secure payment</li>
                  <li><i class="fas fa-envelope fa-fw"></i>Support from sellers</li>
                  <li><i class="fas fa-stopwatch fa-fw"></i>Access to future versions</li>
              </ul>
                <div class="addto-cart-button">
                <button class="button1 btn-primary btn-large" id="addto_cart" onclick="add_to_cart('.$res->No_of_models.')" style="text-align: center;font-size:16px;width:270px;padding: 20px 0px;">Add to cart</button>
              </div>
			';
				}
			
			}
			else
			{
				$output .='
				<h3 class="payment-cart-h3" style="padding:0px;color:#1caad9;padding-top:20px;">$'.$res->Sale_count.'</h3>
			<ul class="store-informations__header__list" style="padding:0px;">
                  <li><i class="fas fa-lock fa-fw"></i>Secure payment</li>
                  <li><i class="fas fa-envelope fa-fw"></i>Support from sellers</li>
				  <li><i class="fas fa-stopwatch fa-fw"></i>Access to future versions</li>
              </ul>
                <div class="addto-cart-button">
                <button class="button1 btn-primary btn-large" onclick="popuplogin()" style="text-align: center;width:270px;font-size:16px;padding: 20px 0px;">Add to cart</button>
              </div>
			';
			}
		}
		echo $output;
	}
	
	function get_name()
	{
		$output = '';
		$user_model_id = $this->input->post('user_model_id');
		
		$res = $this->main_model->fetch_popup($user_model_id);
		$model_id = $res->Model_id;
		if($res)
		{
			$query = $this->db->query("select * from models where model_id='".$model_id."'")->row();
			$output .='
			
			<span class="model-name__label" id="display_name">'.$res->Model_name.'</span>
			<span class="model-page-main__3d-model">'.$query->model_name.'</span>
			';
		}
		echo $output;
		

	}

	

	function send_to_cart()
	{
		$output = '';
		$output1 = '';
		$all_models_id = $this->input->post('all_models_id');
		$res = $this->main_model->get_all_models($all_models_id);
		//print_r($res);die();
		if($res)
		{
			
			$data_array = array(
				'No_of_models' => $res->No_of_models,
				'User_id' => $this->session->userdata('User_id'),
				'Model_name' => $res->Model_name,
				'Model_path' => $res->Thumbnail,
				'Sale_count' => $res->Sale_count
			);
			//print_r($data_array);die;
			$outputh = '';
			$this->main_model->insert_to_cart($data_array);
			$get_result = $this->main_model->get_cart_item($res->No_of_models);
			$total=0;
			$count = $this->cart->get_cart_count($this->session->userdata('User_id'));
			if($count)
			{
				$outputh .='
				<span class="icon-circled icon-32" style="background-color: rgb(243, 67, 67);color:rgb(255, 249, 249);float:right">'.$count.'</span>
				<div class="popupc" style="padding-right: 0px;">   
				<h4 class="shop-cart" style="border:none;margin-bottom:10px;">Shopping Cart</h4>
				<a style="color: #666;">You have <span style="color: #41a48f;">'.$count.'</span> items in your shopping cart</a>
				<div class="row checkout" id="addtocart" style="padding-right: 20px;margin:0px;margin-top:10px;margin-left:0px;max-height:300px;overflow-y:scroll">

				';
			}
			if($get_result)
			{
				
				foreach($get_result as $row)
				{
					$total += $row->Sale_count;

				$output .= '
				<div class="row" style="width:100%;padding-top:15px;padding-bottom:15px;margin:0px;margin-bottom:0px;display:flex;float:left;border-bottom:2px solid #ddd;">
				    <div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="width:20%;">
				       <img style="width:100%;" src='.base_url($row->Model_path).'>
				    </div>
				    <div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="margin-left:15px;font-size: 14px;font-weight: 600;height: max-content;margin-top: auto;margin-bottom: auto;flex:1;">
				        <a style="color:#666;">'.$row->Model_name.'</a>
				    </div>
				    <div class="column" style="width:max-content;height: max-content;margin-top: auto;font-size: 14px;font-weight: 600;margin-bottom: auto;">
				       <a style="color: #41a48f;">$'.$row->Sale_count.'</a>
				    </div>
				    <div class="column" onclick="delete_cart('.$row->Cart_id.')" style="width:max-content;margin-left:10px;height: max-content;margin-top: auto;margin-bottom: auto;">
                       <img src='.base_url('resources/close.png').' style="width:14px;margin-top:2px;">
				    </div>
				</div>
				
				';
				}
				$output1 .='
				</div>
				<div class="row" style="padding-right: 40px;display:flex;width:100%;margin-left:0px;margin-bottom:10px;margin-top:15px;float:left;">
				    <div class="column" style="flex:1;color:#444;font-size:20px;"><p style="color:transparent;margin:0px;">Total</p>
				             
				    </div>
				    <div class="column" style="width:max-content;">
					    <a style="color:#888;font-size:16px;font-weight:600;">Total</a>
                    </div>
                    <div class="column" style="width:max-content;margin-left:10px;">
					    <a style="color:#888;font-size:16px;font-weight:600;">:</a>
				    </div>
					<div class="column" style="width:max-content;margin-left:10px;margin-right:10px;">
					   <a style="color:#e54040;font-size:16px;font-weight:600;">$'.$total.'</a>
				    </div>
				         
				</div>
				

				<div class="row" style="margin-left:0px;padding-right: 20px;">
				<span>
				    <a class="button1 btn-primary btn-large" style="width:100%;" href='.site_url('welcome/billing').'>Proceed to CheckOut</a>
				</span>
				</div>
				';
			}
			
		}
		echo $outputh.''.$output.''.$output1;
	}


	public function delete()
    {
	   $cart_id = $this->input->post('cart_id');
	   $this->main_model->delete($this->input->post('cart_id'));
	   $output = '';
	   $outputh = '';
	   $output1 = '';
		$count = $this->cart->get_cart_count($this->session->userdata('User_id'));


	   $get_result = $this->main_model->get_cart_item($cart_id);
			$total=0;
			if($count == 0)
			{
				$outputh .='
				<div class="popupc">   
				<h4 class="shop-cart" style="border:none;">Shopping Cart</h4>
				<div class="row checkout" id="addtocart" style="margin:0px;margin-top:10px;margin-left:0px;max-height:400px;">
				<a style="color: #666;">You have <span style="color: #41a48f;">'.$count.'</span> items in your shopping cart</a>
				<p class="u-text-center" style="margin: 90px 0;text-align: center !important;opacity: 0.49;"><i class="fas fa-shopping-cart" style="display: block;
				margin: 0 auto 30px auto;color: #d5d5d5;font-size:50px;"></i>Your shopping cart is empty.</p>
				';

			}
			else{
				$outputh .='
				<span class="icon-circled icon-32" style="background-color: rgb(243, 67, 67);color:rgb(255, 249, 249);float:right">'.$count.'</span>
				<div class="popupc" style="padding-right: 0px;">   
				<h4 class="shop-cart" style="border:none;margin-bottom:10px;">Shopping Cart</h4>
				<a style="color: #666;">You have <span style="color: #41a48f;">'.$count.'</span> items in your shopping cart</a>

				<div class="row checkout" id="addtocart" style="padding-right: 20px;margin:0px;margin-top:10px;margin-left:0px;max-height:300px;overflow-y:scroll;">

				';
			}
			if($get_result)
			{
				
				foreach($get_result as $row)
				{
					$total += $row->Sale_count;

				$output .= '
				<div class="row" style="width:100%;padding-top:15px;padding-bottom:15px;margin:0px;margin-bottom:0px;display:flex;float:left;border-bottom:2px solid #ddd;">
				    <div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="width:20%;">
				       <img style="width:100%;" src='.base_url($row->Model_path).'>
				    </div>
				    <div class="column" onclick="show_model_popup('.$row->No_of_models.')" style="margin-left:15px;font-size: 14px;font-weight: 600;height: max-content;margin-top: auto;margin-bottom: auto;flex:1;">
				        <a style="color:#666;">'.$row->Model_name.'</a>
				    </div>
				    <div class="column" style="width:max-content;height: max-content;margin-top: auto;font-size: 14px;font-weight: 600;margin-bottom: auto;">
				       <a style="color: #41a48f;">$'.$row->Sale_count.'</a>
				    </div>
				    <div class="column" onclick="delete_cart('.$row->Cart_id.')" style="width:max-content;margin-left:10px;height: max-content;margin-top: auto;margin-bottom: auto;">
                       <img src='.base_url('resources/close.png').' style="width:14px;margin-top:2px;">
				    </div>
				</div>
				
				';
				}
				$output1 .='
				</div>
				<div class="row" style="padding-right: 40px;display:flex;width:100%;margin-left:0px;margin-bottom:10px;margin-top:15px;float:left;">
				    <div class="column" style="flex:1;color:#444;font-size:20px;"><p style="color:transparent;margin:0px;">Total</p>
				             
				    </div>
				    <div class="column" style="width:max-content;">
					    <a style="color:#888;font-size:16px;font-weight:600;">Total</a>
                    </div>
                    <div class="column" style="width:max-content;margin-left:10px;">
					    <a style="color:#888;font-size:16px;font-weight:600;">:</a>
				    </div>
					<div class="column" style="width:max-content;margin-left:10px;margin-right:10px;">
					   <a style="color:#e54040;font-size:16px;font-weight:600;">$'.$total.'</a>
				    </div>
				         
				</div>
				

				<div class="row" style="margin-left:0px;padding-right: 20px;">
				<span>
				    <a class="button1 btn-primary btn-large" style="width:100%;" href='.site_url('welcome/billing').'>Proceed to CheckOut</a>
				</span>
				</div>
				';
			}
			
		
		echo $outputh.''.$output.''.$output1;
	}

	// function fetch_images_file()
	// {
	//  $output1 = '';
	 
	//  $data = $this->main_model->fetch_data_files($this->input->post('limit'), $this->input->post('start'), $this->session->userdata('User_id'));
	 
	//  if($data->num_rows() > 0)
	//  {
	//   foreach($data->result() as $row)
	//   {
	// 	  if($row->Sale_count == 0 )
	// 	  {
	// 		$output1 .= '
	// 		<div class="post_data">
	// 		<img class="model-width" src="'.base_url($row->Model_path).'">
	// 		</div> 
	// 		';
	// 	  }
	// 	  else
	// 	  {
	// 		  $output1 .= '
	// 		  <div class="post_data">
	// 		  <div class="popup">
            
	// 		  <a class="close" href="#">&times;</a>
	// 		  <div class="content" style="width:100%;height: auto;">
	// 		  <img class="model-width" src="'.base_url($row->Model_path).'">
	// 		  </div>
	// 		  </div>
	// 		  </div>
	// 		  ';
	// 	  }
	   
	//   }
	  
	//  }
	//  echo $output1;
	// }
	
	 public function form_validation(){
		 $this->load->library('form_validation');
		 $avatar = 'profile/image_2020_09_15T05_44_26_466Z.png';
		 $email = strtolower($this->input->post("email"));
		 $name = $this->input->post("user_name");
		 if(1)
		 {
			 
			//$this->load->models("Main_model");
			 $data=array(
				 "User_id" =>$this->input->post("user_name"),
				 "User_name" =>$this->input->post("user_name"),
				 "User_email" =>strtolower($this->input->post("email")),
				 "Password" =>$this->input->post("password"),
				 "Your_location" => $this->input->post("loc"),
				 "Avatar" => $avatar
			 );
			 $this->main_model->insert_user_data($data);

			 $message = 'Hi '.$name.',

			 <h5 style="margin-top:15px;font-size:15px;">Welcome to 3Dcopilot!</h5>
			 <p style="margin-top:10px;font-size:14px;">Your new account comes with access to download and upload the 3D models, 
			 Vectors, Photos, Video templates and 360 degree Assets.<p>
			 <p style="font-size:14px;">Most of the Assets are <span style="font-weight: 600;">FREE for Personal and Commercial Use</span>.</p>
			 <p style="font-size:14px;">Get inspired. Showcase your skills. Learn more from community members.
			 </p>

			 <p style="margin-top:20px;"><a href='.base_url('welcome/index').'>'.base_url('welcome/index').'</a></p>




			<h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
			<div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
			


			$config=array(
				'charset'=>'utf-8',
				'wordwrap'=> TRUE,
				'mailtype' => 'html'
				);

			//Load email library 
			$this->load->library('email'); 

			$this->email->initialize($config);
			$this->email->from('support@3dcopilot.com', '3Dcopilot'); 
            $this->email->to($email);
			 $this->email->subject('Welcome to 3Dcopilot!'); 
			
			 $this->email->message($message); 
			//  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
			 //send mail
			 if($this->email->send()){



			 redirect(base_url()."welcome/index#popuplogin");
			 }
//echo "<pre>"; print_r($_POST);die;
		 }
		 else
		 {
			 $this->index();
		 }
	 }
	//  signup

	// public function choose_file_form(){
	// 	$this->load->library('form_validation');
	// 	if(1)
	// 	{
	// 		$data=array(
	// 			"Model_name" =>$this->input->post(""),
	// 		);
	// 	}
	// }

	public function forgotpassword()
	{
		$email = $this->input->post('email');
		$result = $this->db->query("select * from user_module where User_email='".$email."'")->row();
		//print_r($result);die;
		if($result)
		{
			$email_config = Array(
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => '465',
				'smtp_user' => 'yashwanthgowda2433@gmail.com',
				'smtp_pass' => 'yash8550',
				'mailtype'  => 'html',
				'starttls'  => true,
				'newline'   => "\r\n"
			);
            //$_SESSION['token'] = $data[$result->User_id];
			$token = rand(1000,9999);
			// $message = '<a>Please click on Password Reset Link <a href='.base_url('welcome/reset?token=').$result->User_id.'>
			// '.base_url('welcome/reset?token=').$result->User_id.'</a></a>
			// <img src='.base_url('resources/icons/tabicon.jpg').' style="width:50px;">';
			$message = 'Please click on Password Reset Link <a href='.base_url('welcome/reset?token=').$result->User_id.'>'.base_url('welcome/reset?token=').$result->User_id.'></a>
			




			<h1 style="color:red;font-size:20px;margin-top:100px;">THANKS & REGARDS</h1>
			<div style="display:flex;border:1px solid #000;width:max-content;margin-left:25px;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:40px;"><a style="margin-top:auto;margin-bottom:auto;margin-right:10px;color:#000;">&nbsp;3Dcopilot</a></div>';
			


			$config=array(
				'charset'=>'utf-8',
				'wordwrap'=> TRUE,
				'mailtype' => 'html'
				);

			//Load email library 
			$this->load->library('email'); 

			$this->email->initialize($config);
			$this->email->from('support@3dcopilot.com', '3Dcopilot'); 
            $this->email->to($email);
			 $this->email->subject('Forgot Password'); 
			
			 $this->email->message($message); 
			//  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
			 //send mail
			 if($this->email->send()) 
			 {
		        $this->session->set_flashdata("email_sent","Email sent successfully."); 
		        redirect(base_url('welcome/index#popupforgotpassword'));
			 }
             else {
		        $this->session->set_flashdata("email_sent","Error in sending Email."); 
				redirect(base_url('welcome/index#popupforgotpassword'));
			 }
			
         //$this->load->view('email_form'); 
   
			// $token = rand(1000,9999);
			// $this->email($email,'3DCopilot Reset Password Link',$message);
		}
		else
		{
			$this->session->set_flashdata('error_message',"Email Address not Registered");
			redirect(base_url('welcome/index/#popupforgotpassword'));
		}
	}

	public function sell_your_content()
	{
		$token = $this->input->get('token');
		//print_r($token);die;
		$_SESSION['token'] = $token;

		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home',$data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('sell_your_content');
		$this->load->view('includes/home_footer');
	}

	public function reset()
	{
		$token = $this->input->get('token');
		//print_r($token);die;
		$_SESSION['token'] = $token;
		$this->load->view('includes/resetpass');
	}

	public function resetpassword()
	{
		$_SESSION['token'];
		$data = $this->input->post();
		if($data['password']==$data['cpassword'])
		{
			if($this->db->query("update user_module set Password='".$data['password']."' where User_id='".$_SESSION['token']."'"))
			{
			$this->session->set_flashdata("reseterror","password changes please login."); 
			redirect(base_url('welcome/reset'));
			}
		}
		else
		{
			$this->session->set_flashdata("reseterror","password unmatched."); 
			redirect(base_url('welcome/reset'));
		}

	}



	// login

	public function login_validation()
	{
		$this->load->library('form_validation');
		if(1){
			$User_email = $this->input->post("email");
			$Password = $this->input->post("password");

			$result=$this->main_model->can_login($User_email,$Password);
			//print_r($result);exit();
			//$this->load->model('main_model');
			if($result>0)
			{
				$session_data = array(
					'User_email' => $result->User_name,
					'User_id' => $result->User_id,
					'profile_pic'=>$result->Avatar,
				);
				$this->session->set_userdata($session_data);
				redirect(base_url(). 'welcome/index');
				
			
			}
			else
			{
				$this->session->set_flashdata('error','Invalid username and password');
				redirect(base_url()."welcome/index#popuplogin");
			}
		}
		else
		{


		}

	}

	

	function logout()
	{

		$this->session->unset_userdata('User_id');
		$this->session->unset_userdata($session_data);
		session_destroy();
		redirect(base_url().'welcome/index'); 
	}

	function upload()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		$this->load->view('includes/header', $data);
		
	}
	
// upload

//fetch models categories

	function fetch_models_categories()
	{
		$model_id = $this->input->post('model_id');
		if($model_id>0)	
		{
			echo $this->main_model->fetch_categories($model_id);
			$this->session->set_userdata('Model_id', $model_id);
		}
		
	}


	function fetchnew_modelsnew_categoriesnew()
	{
		$model_id = $this->input->post('model_id');
		if($model_id>0)	
		{
			echo $this->main_model->fetch_categories_new($model_id);
			// $this->session->set_userdata('Model_id', $model_id);
		}
		
	}



	function fetch_categories_id()
	{
		$Categories_id = $this->input->post('Categories_id');
		if($Categories_id>0)
		{
			$this->session->set_userdata('Categories_id', $Categories_id);
		}
	}

// choose file

public function fileUpload(){

	$ds = DIRECTORY_SEPARATOR;
    $storeFolder = 'uploads/';
     
    if (!empty($_FILES)) {
         
        $tempFile = $_FILES['file']['tmp_name'];
          
        $targetPath = dirname( __FILE__ ) . $ds . $storeFolder . $ds;
        
        $fullPath = $storeFolder.rtrim($_POST['path'], "/.");
		$folder = substr($fullPath, 0, strrpos($fullPath, "/"));
		//print_r($folder);die;
		
	    $file_size = $_FILES['file']['size'];
	    $file_type = $_FILES['file']['size'];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
	$this->session->set_userdata('Model_path', $fullPath);
	$this->session->set_userdata('file_size',$file_size);
	 $this->session->set_userdata('file_type',$file_type);
	 $this->session->set_userdata('file_ext',$file_ext);
        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }    
        
        if (move_uploaded_file($tempFile, $fullPath)) {
            die($fullPath);
        } else {
            die('e');
		}
		
	   	// $this->session->set_userdata('file_size',$file_size);
	 	// $this->session->set_userdata('file_type',$file_type);
	 	// $this->session->set_userdata('file_ext',$file_ext);
    }

	// if(!empty($_FILES['file']['name'])){

	//   $ImageName = $_FILES['file']['name'];
	//   $fileElementName = 'file';
	//   $random_digit=rand(0000,9999);
    //   $new_file_name=$random_digit;
    //   mkdir($random_digit, 0777, true);
	//   $path = 'uploads/'.$random_digit; 
	//   print_r($path);die;
	//   $location = $path . $_FILES['file']['name']; 
	//   $file_size = $_FILES['file']['size'];
	//   $file_type = $_FILES['file']['type'];
	//   $file_ext=strtolower(end(explode('.', $_FILES['file']['name'])));

	//   if(copy($_FILES['file']['tmp_name'], $location))
	//   {
	// 	  $pic = array("upload_file"=>$location);
	// 	  $this->session->set_userdata($pic);
	// 	  $uploaddata = array(
	// 		//'Model_path' => $this->input->post['file_name'],
	// 		'Model_path' =>$location,
	// 		'User_id' => $this->session->userdata('User_id'),
	// 		'Model_id' => $this->session->userdata('Model_id'),
	// 		'Categories_id' => $this->session->userdata('Categories_id'),
			
	// 		);
	// 		//var_dump($uploaddata);
	// 	$this->session->set_userdata('Model_path',$location);
	// 	$this->session->set_userdata('file_size',$file_size);
	// 	$this->session->set_userdata('file_type',$file_type);
	// 	$this->session->set_userdata('file_ext',$file_ext);
	
	// 	//$this->main_model->choose_file($uploaddata);

	// 	// if($res>0)
	// 	// {
	// 	// 	$rowdata = array(
	// 	// 		'No_of_models' => $res->No_of_models
	// 	// 	);
	// 	// 	$this->session->set_userdata($rowdata);
	// 	// }
	// 	$this->session->set_flashdata('filename',$_FILES['file']['name']);
	
	//   }	  

	// }
	
  }

  // upload user photo
function upload_photo()
{
	if(!empty($_FILES["image_file"]["name"]))
	{
		// $config['upload_path'] = 'profile/';
		// $config['allowed_types'] = 'jpg|jpeg|png|gif';
		// $this->load->library('upload', $config);
		$file_name = $_FILES['image_file']['name'];



		$uploadedFile = $_FILES['image_file']['tmp_name']; 
    $sourceProperties = getimagesize($uploadedFile);
    // $newFileName = time();
    // $dirPath = "uploads/";
    $ext = pathinfo($_FILES['image_file']['name'], PATHINFO_EXTENSION);
    $imageType = $sourceProperties[2];

	$newImageWidth = $sourceProperties[0]/1;
	$newImageHeight = $sourceProperties[1]/1;
	if($newImageWidth >= 512 || $newImageHeight >= 512)
	{
		echo '<a style="color:red;">Your Image size is '.$newImageWidth.'x'.$newImageHeight.'. Resize it to 512x512</a>';

	}else{


	$path = 'profile/';
	$folder = time();
	mkdir($path."/".$folder);
	$ex_path = $path;
	$location = $path.''.$folder.'/'.$file_name;
	$dir_path = $path.''.$folder.'/';


	$imageWidth = $sourceProperties[0];
	$imageHeight = $sourceProperties[1];
	switch ($imageType) {


		case IMAGETYPE_PNG:
			$imageSrc = imagecreatefrompng($uploadedFile); 
			$newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
            imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);
			imagepng($newImageLayer,$dir_path. $file_name);
			break;           

		case IMAGETYPE_JPEG:
			$imageSrc = imagecreatefromjpeg($uploadedFile); 
			$newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
            imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);
			imagejpeg($newImageLayer,$dir_path. $file_name);
			break;
		
		

		default:
			echo "Invalid Image type.";
			exit;
			break;
	}
// message
$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
$message = 'Hi '.$userdata->User_name.',


<p style="margin-top:10px;font-size:14px;">You have successfully changed your 3Dcopilot Avatar.
</p>

<h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
<div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';



$config=array(
   'charset'=>'utf-8',
   'wordwrap'=> TRUE,
   'mailtype' => 'html'
   );

//Load email library 
$this->load->library('email'); 

$this->email->initialize($config);
$this->email->from('support@3dcopilot.com', '3Dcopilot'); 
$this->email->to($userdata->User_email);
$this->email->subject('Avatar Successfully Changed'); 

$this->email->message($message); 
//  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
//send mail
$this->email->send();

// message


	$tmp = array("profile_pic" => $location);
		  $this->session->set_userdata($tmp);
			echo '<img src="'.base_url($location).'" style="width:140px;height:140px;">';
		   $profiledata = array(
			// 'Model_path' => $this->input->post['file_name'],
			'Avatar' => $location
			);
			$res1 = $this->main_model->update_profile_data($this->session->userdata('User_id'),$profiledata);
			// if($res1){
			// 	redirect(base_url().'welcome/avatar_profile');
			// }

			}

	
	}
}

function new_uploading()
{
	$file_name = $_FILES['file']['name'];
	
	$this->session->unset_userdata('model_u_path2');
	$this->session->unset_userdata('model_u_path1');
	$this->session->unset_userdata('model_u_path');


if($_FILES['file']['name'] != '')
{
	$array = explode(".", $file_name);
	$name = $array[0];
	$ext = $array[1];

	if($ext == 'zip' || $ext == 'rar')
	{
		// echo '<a style="color:transparent;">sucess</a>';
		$path = 'temp/';
	
	$new_name = "";
	$location = $path.$file_name;

		if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		{ 
			if($ext == 'zip')
			{
			$za = new ZipArchive; 

          $za->open($location); 

         for( $i = 0; $i < $za->numFiles; $i++ ){ 
            $stat = $za->statIndex( $i ); 
            echo '<a style="font-size:17px;font-weight:600;border: 1px solid #1caad9;min-height: 45px;
			overflow: auto;line-height: 45px;background: #e8f7fb;padding:10px;">'.($stat['name'] ) . PHP_EOL.'</a>'; 
			}
		  }
		  if($ext == 'rar')
		  {
			$ra = RarArchive::open($location);
			for( $i = 0; $i < $ra->numFiles; $i++ ){ 
				$stat = $ra->statIndex( $i ); 
				echo '<a style="font-size:17px;font-weight:600;border: 1px solid #1caad9;min-height: 45px;
				overflow: auto;line-height: 45px;background: #e8f7fb;padding:10px;">'.($stat['name'] ) . PHP_EOL.'</a>'; 
				}
		  }
		}
		
	}
	else{
		$path = 'temp/';
		
	
	$new_name = "";
    
	$location = $path.$file_name;

		if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		{
			
            echo '<a style="font-size:17px;font-weight:600;border: 1px solid #1caad9;min-height: 45px;
			overflow: auto;line-height: 45px;background: #e8f7fb;padding:10px;">'.$_FILES['file']['name'].'</a>'; 
          //}
		}
	}
}
}

// request form
function upload_user_mod()
{
	$model_id = $this->input->post('models_modid');
	$cat_id = $this->input->post('models_categoryid');
	$this->session->set_userdata('mod_els_id', $model_id);
	$this->session->set_userdata('mod_cats_id', $cat_id);
	$file_name = $_FILES['file']['name'];
	// print_r($file_name);die;
	$temp_name  = $_FILES['file']['tmp_name'];
	$files = glob('temp/*'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file))
		unlink($file); // delete file 9538611927
	
	}
	if($this->session->userdata('thumbnail')){
		$this->session->unset_userdata('thumbnail');
	}
$output = '';
if($_FILES['file']['name'] != '')
{
	$array = explode(".", $file_name);
	$name = $array[0];
	$ext = $array[1];
    
	if($ext == 'zip' || $ext == 'rar')
	{
		  $path = 'uploads/';
		  $time_stamp = time();
		  mkdir($path."/".$time_stamp);
	      $location = $path.$time_stamp."/".$file_name;
		  $ex_path = 'uploads/'.$time_stamp.'/';
		  $this->session->set_userdata('expaths',$ex_path);
          //print_r($location);die;
		if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		{
		  if($ext == 'zip')
		  {
			$zip = new ZipArchive;
			if($zip->open($location))
			{

				if($name == '')
				{
				$zip->extractTo($ex_path.'/');

				}
				else{
				$zip->extractTo($ex_path.'/'.$name.'/');
				}
				//{
				$zip->close();
				unlink($location);
				//}
				// else{
				// 	$zip->extractTo($ex_path);
				// 	$zip->close();
				//     unlink($location);
				// }
			}
		   }
		   if($ext == 'rar')
		   {
			$rar_file = rar_open($location) or die("Can't open Rar archive");
			$entries = rar_list($rar_file);
			if ($entries) {
					foreach ($entries as $entry) {
					// echo 'Filename: ' . $entry->getName() . "\n";
					$entry->extract($ex_path.'/'.$name.'/');
				}
				rar_close($rar_file);
				unlink($location);
			}
		   }

			//$files = scandir($path.$name);
			if($model_id == 1)
			{
			$files = preg_grep('~\.(glb|gltf|fbx|3ds|max|blend|obj|c4d|mb|ma|dae|stl)$~', scandir($ex_path.$name));
			}else if($model_id == 2)
			{
			$files = preg_grep('~\.(ai|eps|psd|svg)$~', scandir($ex_path.$name));
             
			}else if($model_id == 3)
			{
			$files = preg_grep('~\.(jpeg|jpg|png|raw)$~', scandir($ex_path.$name));

			}else if($model_id == 4)
			{
			$files = preg_grep('~\.(mp4|aep|prproj|drp)$~', scandir($ex_path.$name));

			}else if($model_id == 5)
			{
			$files = preg_grep('~\.(jpeg|jpg|png|mp4|hdr)$~', scandir($ex_path.$name));

			}

				
				
				// print_r($files);die;
            
			if(count($files) == 0)
			{
				print_r("success");
			if($model_id == 1)
			{
				
			$files_new = preg_grep('~\.(glb|gltf|fbx|3ds|max|blend|obj|c4d|mb|ma|dae|stl)$~', scandir($ex_path.$name.'/'.$name));
			// print_r($files_new);
			}else if($model_id == 2)
			{
			$files_new = preg_grep('~\.(ai|eps|psd|svg)$~', scandir($ex_path.$name.'/'.$name));
             
			}else if($model_id == 3)
			{
			$files_new = preg_grep('~\.(jpeg|jpg|png|raw)$~', scandir($ex_path.$name.'/'.$name));

			}else if($model_id == 4)
			{
			$files_new = preg_grep('~\.(mp4|aep|prproj|drp)$~', scandir($ex_path.$name.'/'.$name));

			}else if($model_id == 5)
			{
			$files_new = preg_grep('~\.(jpeg|jpg|png|mp4|hdr)$~', scandir($ex_path.$name.'/'.$name));

			}
			// $files_new = preg_grep('~\.(glb|gltf|fbx|3ds|max|blend|obj|c4d|mb|ma|dae|stl|jpeg|jpg|png|raw|ai|eps|psd|svg|mp4|aep|prproj|drp)$~', scandir($ex_path.$name.'/'.$name));
			$filename_ext = '';
			$file_exts = "";
			$num_of_items = count($files_new);
			$num_count = 0;
			if($num_of_items > 1)
			{
			  foreach($files_new as $fileext)  
			  {
				  
				$tmp_ext = explode(".", $fileext);
				$num_count = $num_count + 1;
				$file_extension = '.'.end($tmp_ext);
				if ($num_count < $num_of_items) {
					$file_exts .= $file_extension.' | ';
				    $filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$name.'/'.$fileext).',';

				  }else{
					$file_exts .= $file_extension;
				    $filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$name.'/'.$fileext);

				  }
			  }
			  print_r($filename_ext);

		    }else{
				foreach($files_new as $fileext)  
			  {
				
				$tmp_ext = explode(".", $fileext);
				
				$file_extension = '.'.end($tmp_ext);
				$file_exts .= $file_extension;
				$filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$name.'/'.$fileext);

			  }
				
			  print_r($filename_ext);


			}
            print_r($file_exts);
			
			foreach($files_new as $key => $file)  
			{  
				
			   $file_size = $_FILES['file']['size'];
			   $file_type = $_FILES['file']['size'];
				 $tmp_ext = explode(".", $file);
				 $file_ext = end($tmp_ext);		
				//  print_r($file_ext);				  
				 $allowed_ext = array('glb', 'gltf', 'fbx', '3ds', 'max', 'blend', 'obj', 'c4d', 'mb', 'ma', 'dae' ,'stl');  
				 if(in_array($file_ext, $allowed_ext))  
				 {  
				   
				   
			   $this->session->set_userdata('file_size',$file_size);
				$this->session->set_userdata('file_type',$file_type);
				$this->session->set_userdata('file_ext',$file_exts);
				$this->session->set_userdata('filename_ext',$filename_ext);
					$model_u_path = $ex_path.''.$name.'/'.$name.'/'.$file; 
					
				   $this->session->set_userdata('model_u_path', $model_u_path);
				   $this->session->unset_userdata('model_u_path1');
				   $this->session->unset_userdata('model_u_path2');
						   
								  echo base_url('welcome/user_models');				   
				 }
				 $allowed_ext1 = array('ai', 'eps', 'svg', 'psd', 'raw', 'jpg', 'png','jpeg');  
				 if(in_array($file_ext, $allowed_ext1))  
				 {  
				   $this->session->set_userdata('file_size',$file_size);
				   $this->session->set_userdata('file_type',$file_type);
				   $this->session->set_userdata('file_ext',$file_exts);
				   $this->session->set_userdata('filename_ext',$filename_ext);
				   $model_u_path = $ex_path.''.$name.'/'.$name.'/'.$file; 
				   $this->session->set_userdata('model_u_path1', $model_u_path);
				   $this->session->unset_userdata('model_u_path');
				   $this->session->unset_userdata('model_u_path2');
					
				   echo base_url('welcome/user_models');				   
				  
				 }
				 $allowed_ext2 = array('mp4', 'aep', 'prproj', 'drp'); 
				 if(in_array($file_ext, $allowed_ext2))  
				 {  
				   $this->session->set_userdata('file_size',$file_size);
				   $this->session->set_userdata('file_type',$file_type);
				   $this->session->set_userdata('file_ext',$file_exts);
				   $this->session->set_userdata('filename_ext',$filename_ext);
				   $model_u_path = $ex_path.''.$name.'/'.$name.'/'.$file; 
				   $this->session->set_userdata('model_u_path2', $model_u_path);
				   $this->session->unset_userdata('model_u_path1');
				   $this->session->unset_userdata('model_u_path');
					
				   echo base_url('welcome/user_models');				   
				  
				 }
			}

			}else{
				// print_r($files);die;
				$filename_ext = '';
				$file_exts = "";
			$num_of_items = count($files);
			$num_count = 0;
			if($num_of_items > 1)
			{
			  foreach($files as $fileext)  
			  {
				$tmp_ext = explode(".", $fileext);
				$num_count = $num_count + 1;
				$file_extension = '.'.end($tmp_ext);
				if ($num_count < $num_of_items) {
					$file_exts .= $file_extension.' | ';
					$filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$fileext).',';
				  }else{
					$file_exts .= $file_extension;
					$filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$fileext);
				  }
			  }
			  print_r($filename_ext);
		    }else{
				foreach($files as $fileext)  
			  {
				$tmp_ext = explode(".", $fileext);
				
				$file_extension = '.'.end($tmp_ext);
				$file_exts .= $file_extension;
				$filename_ext .= $file_extension.'='.filesize($ex_path.$name.'/'.$fileext);

			  }
			  print_r($filename_ext);


			}
            print_r($file_exts);
			foreach($files as $key => $file)  
                     {  
						 
						$file_size = $_FILES['file']['size'];
						$file_type = $_FILES['file']['size'];
                          $tmp_ext = explode(".", $file);
                          $file_ext = end($tmp_ext);						  
                          $allowed_ext = array('glb', 'gltf', 'fbx', '3ds', 'max', 'blend', 'obj', 'c4d', 'mb', 'ma', 'dae' ,'stl');  
                          if(in_array($file_ext, $allowed_ext))  
                          {  
							
							
						$this->session->set_userdata('file_size',$file_size);
						 $this->session->set_userdata('file_type',$file_type);
						 $this->session->set_userdata('file_ext',$file_exts);
						 $this->session->set_userdata('filename_ext',$filename_ext);
							 $model_u_path = $ex_path.''.$name.'/'.$file; 
							 
							$this->session->set_userdata('model_u_path', $model_u_path);
							$this->session->unset_userdata('model_u_path1');
							$this->session->unset_userdata('model_u_path2');
									
										   echo base_url('welcome/user_models');				   
						  }
						  $allowed_ext1 = array('jpg', 'png','jpeg', 'ai', 'eps', 'svg', 'psd', 'raw');  
                          if(in_array($file_ext, $allowed_ext1))  
                          {  
							$this->session->set_userdata('file_size',$file_size);
							$this->session->set_userdata('file_type',$file_type);
							$this->session->set_userdata('file_ext',$file_exts);
							$this->session->set_userdata('filename_ext',$filename_ext);
							$model_u_path = $ex_path.''.$name.'/'.$file; 
							$this->session->set_userdata('model_u_path1', $model_u_path);
							$this->session->unset_userdata('model_u_path');
							$this->session->unset_userdata('model_u_path2');
                             
							echo base_url('welcome/user_models');				   
						   
						  }
						  $allowed_ext2 = array('mp4', 'aep', 'prproj', 'drp'); 
						  if(in_array($file_ext, $allowed_ext2))  
                          {  
							$this->session->set_userdata('file_size',$file_size);
							$this->session->set_userdata('file_type',$file_type);
							$this->session->set_userdata('file_ext',$file_exts);
							$this->session->set_userdata('filename_ext',$filename_ext);
							$model_u_path = $ex_path.''.$name.'/'.$file; 
							$this->session->set_userdata('model_u_path2', $model_u_path);
							$this->session->unset_userdata('model_u_path1');
							$this->session->unset_userdata('model_u_path');
                             
							echo base_url('welcome/user_models');				   
						   
						  }
					 }

			}
					
		}
		
	}
	else{
		$path = 'uploads/';
		  $time_stamp = time();
		  mkdir($path."/".$time_stamp);
	      $location = $path.$time_stamp."/".$file_name;
		  $ex_path = 'uploads/'.$time_stamp.'/';
          //print_r($location);die;
		  $this->session->set_userdata('expaths',$ex_path);
		 
		if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
		{
			
				//unlink($location);
			
			//$files = scandir($path.$name);
			$files = preg_grep('~\.(glb|gltf|fbx|3ds|max|blend|obj|c4d|mb|ma|dae|stl|jpeg|jpg|png|raw|ai|eps|psd|svg|mp4|aep|prproj|drp|JPG)$~', scandir($ex_path));
			
			
			foreach($files as $file)  
                     {  
					 //print_r($file);die;
					 
					 $file_size = $_FILES['file']['size'];
						$file_type = $_FILES['file']['size'];
                          $temp_ext = explode(".", $file); 
						  $file_ext = '.'.end($temp_ext);	
						  $fileexten = end($temp_ext);
						  $filename_ext = $file_ext.'='.filesize($ex_path.''.$file);
			            //   print_r($filename_ext);
						  					  
						  $allowed_ext = array('glb', 'gltf', 'fbx', '3ds', 'max', 'blend', 'obj', 'c4d', 'mb', 'ma', 'dae' ,'stl');  
						  
                          if(in_array($fileexten, $allowed_ext))  
                          {  
						  print_r($filename_ext); 

							$this->session->set_userdata('file_size',$file_size);
							$this->session->set_userdata('file_type',$file_type);
							$this->session->set_userdata('file_ext',$file_ext);
							$this->session->set_userdata('filename_ext',$filename_ext);
							$model_u_path = $ex_path.''.$file;
							$this->session->set_userdata('model_u_path', $model_u_path);
							$this->session->unset_userdata('model_u_path1');
							$this->session->unset_userdata('model_u_path2');
                              // $new_name = md5(rand()).'.' . $file_ext; 
                               //$output .= '<model-viewer src="'.$ex_path.''.$file.'" style="width:100%;height:250px;background: #ccc;" alt="A 3D model of an astronaut" auto-rotate camera-controls></model-viewer>
										 //  ';	
										 echo base_url('welcome/user_models');				   
							   
										 						   
						  }
						  $allowed_ext1 = array('jpg', 'png','jpeg', 'ai', 'eps', 'svg', 'psd', 'raw','JPG');  
                          if(in_array($fileexten, $allowed_ext1))  
                          {  
							print_r($filename_ext); 
							$this->session->set_userdata('file_size',$file_size);
							$this->session->set_userdata('file_type',$file_type);
							$this->session->set_userdata('file_ext',$file_ext);
							$this->session->set_userdata('filename_ext',$filename_ext);
							$model_u_path = $ex_path.''.$file; 
							$this->session->set_userdata('model_u_path1', $model_u_path);
							$this->session->unset_userdata('model_u_path');
							$this->session->unset_userdata('model_u_path2');
                            //    $new_name = md5(rand()).'.' . $file_ext; 
                            //    $output .= '<img src="'.$ex_path.''.$file.'" style="width:100%;height:250px;">
							//                ';							   
							echo base_url('welcome/user_models');				   
					   
							
						  }
						  $allowed_ext2 = array('mp4', 'aep', 'prproj', 'drp');  
                          if(in_array($fileexten, $allowed_ext2))  
                          {  
							print_r($filename_ext); 
							$this->session->set_userdata('file_size',$file_size);
							$this->session->set_userdata('file_type',$file_type);
							$this->session->set_userdata('file_ext',$file_ext);
							$this->session->set_userdata('filename_ext',$filename_ext);
							$model_u_path = $ex_path.''.$file; 
							$this->session->set_userdata('model_u_path2', $model_u_path);
							$this->session->unset_userdata('model_u_path1');
							$this->session->unset_userdata('model_u_path');
                            //    $new_name = md5(rand()).'.' . $file_ext; 
                            //    $output .= '<img src="'.$ex_path.''.$file.'" style="width:100%;height:250px;">
							//                ';						
							echo base_url('welcome/user_models');				   
						   
								   
						  }
					 }
		}
		
	}
}
else{
	echo 'incorrect file';
}

}

function thumbnail()
{
	$file_name = $_FILES['file']['name'];
	$newexplode = explode('.',$file_name);
	$name = $newexplode[0];
$output='';
if($_FILES['file']['name'] != '')
{
	if($this->session->userdata('thumbnail')){
		$this->session->unset_userdata('thumbnail');
	}



	$uploadedFile = $_FILES['file']['tmp_name']; 
    $sourceProperties = getimagesize($uploadedFile);
    // $newFileName = time();
    // $dirPath = "uploads/";
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $imageType = $sourceProperties[2];

	$newImageWidth = $sourceProperties[0]/4;
    $newImageHeight = $sourceProperties[1]/4;


	$path = $this->session->userdata('expaths');
	$folder = 'thumbnails';
	mkdir($path."/".$folder);
	
	$ex_path = $path;
	$location = $path.''.$folder.'/'.$file_name;
	$dir_path = $path.''.$folder.'/';

	$imageWidth = $sourceProperties[0];
	$imageHeight = $sourceProperties[1];
	switch ($imageType) {


		case IMAGETYPE_PNG:
			$imageSrc = imagecreatefrompng($uploadedFile); 
			$newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
            imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);
			imagepng($newImageLayer,$dir_path. $file_name);
			break;           

		case IMAGETYPE_JPEG:
			$imageSrc = imagecreatefromjpeg($uploadedFile); 
			$newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
            imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);
			imagejpeg($newImageLayer,$dir_path. $file_name);
			break;
		
		

		default:
			echo "Invalid Image type.";
			exit;
			break;
	}

	if(move_uploaded_file($uploadedFile, $dir_path.$name.'1.jpg'))
	{
			$this->session->set_userdata('ex_paths',$ex_path);
			$this->session->set_userdata('thumbnail',$location);
			$this->session->set_userdata('thumbnailo',$dir_path.$name.'1.jpg');

			echo '<button class="remove-default-style style-scope thumbnails-compact-editor-uploader">
		 	<img src='.base_url($location).' style="width:200px;">
		 	</button>
			 <div id="delete_thumbs" data-selenium='.$this->session->userdata('ex_paths').' style="color:red;margin-top:10px;cursor:pointer;">Delete</div>';
	}
		
}
}


function imageResize($imageSrc,$imageWidth,$imageHeight) {

    $newImageWidth =200;
    $newImageHeight =200;

    $newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
    imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);

    return $newImageLayer;
}

function delete_thumb_nail()
{
	$path = $this->input->post('path');
	$files = glob($path.'thumbnails/*'); // get all file names
	foreach($files as $file){ // iterate files
	  if(is_file($file))
		unlink($file); // delete file 9538611927
	
	}
	//unlink($path.'thumbnails/*');
	rmdir($path.'thumbnails');
	echo '<button class="remove-default-style style-scope thumbnails-compact-editor-uploader" id="click_thumbnail">
	<a>
	 <iron-icon id="add-photo-icon" class="remove-defaults style-scope ytcp-thumbnails-compact-editor-uploader" icon="yt-icons:add_photo_alternate"><svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope iron-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g viewBox="0 0 24 24" class="style-scope iron-icon">
	 <path d="M19 7v2.99s-1.99.01-2 0V7h-3s.01-1.99 0-2h3V2h2v3h3v2h-3zm-3 4V8h-3V5H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8h-3zM5 19l3-4 2 3 3-4 4 5H5z" class="style-scope iron-icon"></path>
	 <path d="M0 0h24v24H0z" fill="none" class="style-scope iron-icon"></path>
	  </g></svg>

	  </iron-icon>
	  <span class="style-scope thumbnails-compact-editor-uploader" style="padding:10px;">
		 Upload thumbnail .jpg, .png, .jpeg
	  </span>
	   </a>
 </button>';
	$this->session->unset_userdata('ex_paths');
	$this->session->unset_userdata('thumbnail');
	$this->session->unset_userdata('thumbnailo');

	

}
function delete_mod_paths()
{
	$path = $this->input->post('path');
	
	$files = glob($path.'*'); // get all file names
	//print_r($files);die;
	foreach($files as $file){ // iterate files
	  if(is_file($file))
		unlink($file); // delete file 9538611927
	
	}
	//unlink($path.'thumbnails/*');
	rmdir($path);
}

function delete_thumb()
{
	$folder = $this->input->post('ex_path');
	//print_r($folder);die;
	rmdir($folder.'thumnails');
}

public function requestform()
{
	$data=array(
		'User_name' => $this->input->post('user_name'),
		'Email_id' => $this->input->post('user_email'),
		'Phone_number' => $this->input->post('user_number'),
		'Category' => $this->input->post('select_cat'),
		'Description' => $this->input->post('model_description')
	);

	
		// message
		$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
		$message = 'Dear '.$this->input->post('user_name').',
	
		
		<p style="margin-top:10px;font-size:14px;">We have noted your requirement, we will get back to you as soon as possible.
		</p>
	
	   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
	   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
	   
	
	
	   $config=array(
		   'charset'=>'utf-8',
		   'wordwrap'=> TRUE,
		   'mailtype' => 'html'
		   );
	
	   //Load email library 
	   $this->load->library('email'); 
	
	   $this->email->initialize($config);
	   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
	   $this->email->to($this->input->post('user_email'));
		$this->email->subject('Request a custom assets'); 
	   
		$this->email->message($message); 
	   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
		//send mail
		$this->email->send();
	
		// message
	
	
	if($this->db->insert('request_form', $data))
	{
		$message1 = 'Hi Team,
	
		<h5 style="margin-top:15px;font-size:15px;">Request a custom assets</h5>
		<p style="margin-top:10px;font-size:14px;"><a><span style="font-weight:600;">User Name</span>  =>  '.$this->input->post('user_name').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Email-id</span>  =>  '.$this->input->post('user_email').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Phone Number</span>  =>  '.$this->input->post('user_number').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Category</span>  =>  '.$this->input->post('select_cat').'</a></p>
		<p style="font-size:14px;font-weight:600;">Description</p> <p style="font-size:14px;">'.$this->input->post('model_description').'</p>
		</p>
	
	   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
	   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
	   
	
	
	   $config1=array(
		   'charset'=>'utf-8',
		   'wordwrap'=> TRUE,
		   'mailtype' => 'html'
		   );
	
	   //Load email library 
	   $this->load->library('email'); 
	
	   $this->email->initialize($config1);
	   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
	   $this->email->to('support@3dcopilot.com');
		$this->email->subject('Request a custom assets'); 
	   
		$this->email->message($message1); 
	   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
		//send mail
		$this->email->send();
	
		// message
		$this->session->set_flashdata('requesterror',"Request has been submitted we'll get back to you");
		redirect(base_url()."welcome/browse#popuprequestform");
	}
	else{
		redirect(base_url()."welcome/browse#popuprequestform"); 
		$this->session->set_flashdata('requesterror',"Please Fill Correctly");

	}
}

public function contact_form()
{
	$data = array(
		'fname' => $this->input->post('first_name'),
		'lname' => $this->input->post('last_name'),
		'category' => $this->input->post('select'),
		'email' => $this->input->post('email'),
		'phone_no' => $this->input->post('phno'),
		'company' => $this->input->post('company'),
		'message' => $this->input->post('message')
	);

	// message
	$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
	$message = 'Dear Customer,

	
	<p style="margin-top:10px;font-size:14px;">Your request will be in process, we will get back to you as soon as possible.
	</p>

   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
   


   $config=array(
	   'charset'=>'utf-8',
	   'wordwrap'=> TRUE,
	   'mailtype' => 'html'
	   );

   //Load email library 
   $this->load->library('email'); 

   $this->email->initialize($config);
   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
   $this->email->to($this->input->post('email'));
	$this->email->subject('Contact 3Dcopilot'); 
   
	$this->email->message($message); 
   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
	//send mail
	$this->email->send();

	// message


	if($this->db->insert('contact_form', $data))
	{
		$message1 = 'Hi Team,
	
		<h5 style="margin-top:15px;font-size:15px;">Contact Us</h5>
		<p style="margin-top:10px;font-size:14px;"><a><span style="font-weight:600;">User Name</span>  =>  '.$this->input->post('first_name').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Category</span>  =>  '.$this->input->post('select').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Email-id</span>  =>  '.$this->input->post('email').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Phone Number</span>  =>  '.$this->input->post('phno').'</a></p>
		<p style="font-size:14px;"><a><span style="font-weight:600;">Company</span>  =>  '.$this->input->post('company').'</a></p>
		<p style="font-size:14px;font-weight:600;">Message</p> <p style="font-size:14px;">'.$this->input->post('message').'</p>
		</p>
	
	   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
	   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
	   
	
	
	   $config1=array(
		   'charset'=>'utf-8',
		   'wordwrap'=> TRUE,
		   'mailtype' => 'html'
		   );
	
	   //Load email library 
	   $this->load->library('email'); 
	
	   $this->email->initialize($config1);
	   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
	   $this->email->to('support@3dcopilot.com');
		$this->email->subject('Contact Us'); 
	   
		$this->email->message($message1); 
	   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
		//send mail
		$this->email->send();
	
		// message


		$this->session->set_flashdata('contacterror',"contact has been submitted we'll get back to you");
		redirect(base_url()."welcome/forbusiness#contact-form");
	}
	else{
		redirect(base_url()."welcome/forbusiness#contact-form"); 
		$this->session->set_flashdata('contacterror',"Please Fill Correctly");

	}
}

//   transfer
public function transfer_validation(){

	$this->load->helper('date');
		$c_date = date("Y-m-d H:i:s");
		

			$price = $this->input->post('price');
			if($price == '')
			{
				$content = "You must attribute the image to its author:

				In order to use a vector or a part of it, you must attribute it to 3Dcopilot,
				so we will be able to continue creating new graphic resources every day.
				
				
				How to attribute it?
				
				For websites:
				
				Please, copy this code on your website to accredit the author:
				<a href='http://3dcopilot.com/'>Designed by 3Dcopilot</a>
				
				For printing:
				
				Paste this text on the final work so the authorship is known.
				- For example, in the acknowledgements chapter of a book:
				'Designed by 3Dcopilot'
				
				
				You are free to use this image:
				
				- For both personal and commercial projects and to modify it.
				- In a website or presentation template or application or as part of your design.
				
				You are not allowed to:
				
				- Sub-license, resell or rent it.
				- Include it in any online or offline archive or database.
				
				The full terms of the license are described in section 7 of the 3Dcopilot
				terms of use, available online in the following link:
				
				  http://3dcopilot.com/welcome/termsandconditions
				
				The terms described in the above link have precedence over the terms described
				in the present document. In case of disagreement, the 3Dcopilot Terms of Use
				will prevail.
				";
                $fp = fopen($dir . "License.txt","wb");
                fwrite($fp,$content);
                fclose($fp);

			}else{
				$content = "You can download from your profile in Freepik a personalized license stating
				your right to use this vector as a 'paid' user:
				
				  http://3dcopilot.com/welcome/user_profile?tab=Purchases
				
				You are free to use this image:
				
				- For both personal and commercial projects and to modify it.
				- In a website or presentation template or application or as part of your design.
				
				You are not allowed to:
				
				- Sub-license, resell or rent it.
				- Include it in any online or offline archive or database.
				
				The full terms of the license are described in sections 7 of the 3Dcopilot
				terms of use, available online in the following link:
				
				  http://3dcopilot.com/welcome/termsandconditions
				
				The terms described in the above link have precedence over the terms described
				in the present document. In case of disagreement, the 3Dcopilot Terms of Use
				will prevail.
				";
                $fp = fopen($dir . "License.txt","wb");
                fwrite($fp,$content);
                fclose($fp);

			}


			$model_name = $this->input->post('title');
		$filess = glob($this->input->post('mod_path')); // get all file names



		// message
		$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();

		$message = 'Hi '.$userdata->User_name.',

		<h5 style="margin-top:15px;font-size:15px;">Thanks for Uploading!</h5>
		<p style="margin-top:10px;font-size:14px;">Your asset is in review process by 3Dcopilot, within 2 working days your content will be published.
		</p>

		<p style="margin-top:20px;"><a href='.base_url('welcome/user_profile').'><img src='.base_url($this->input->post('thumbnailo')).' style="width:200px;"></a></p>
		<p style="margin-top:20px;"><a href='.base_url('welcome/user_profile').'>'.$model_name.'</a></p>





	   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
	   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
	   


	   $config=array(
		   'charset'=>'utf-8',
		   'wordwrap'=> TRUE,
		   'mailtype' => 'html'
		   );

	   //Load email library 
	   $this->load->library('email'); 

	   $this->email->initialize($config);
	   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
	   $this->email->to($userdata->User_email);
		$this->email->subject('Thanks for Uploading!!'); 
	   
		$this->email->message($message); 
	   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
		//send mail
		$this->email->send();

		// message







			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}

			$thumbnail = $this->input->post('thumbnail');
			$filethumbnail = explode('/', $thumbnail);
			$file_t = $filethumbnail[3];
			$thumbnail_og = $this->input->post('thumbnailo');
			$filethumbnail_og = explode('/', $thumbnail_og);
			$file_tog = $filethumbnail_og[3];
			// print_r($file_tog);
			// print_r($file_t);die;


// zipping to download
$path=realpath($dir);
$zip = new \ZipArchive();
                $path= str_replace('/','/', $path );
				$nameFile = $dir.$model_name.'.zip';
				if ($zip->open($nameFile,\ZipArchive::CREATE)===TRUE){      


					if (is_dir($path))
					{
						$pathSource= $path. '/';
					$directory = new \RecursiveDirectoryIterator($path);
					$files = new \RecursiveIteratorIterator($directory,  \RecursiveIteratorIterator::SELF_FIRST );
					}
			
			
			
					foreach ($files as $name=>$file)
					{
			
						if (in_array(substr($name, strrpos($name,'/')+1), array('.','..')))
						{
							continue;
						}
			        // if($file->isDir() != 'thumbnails'){
// print_r(substr($name, strrpos($name,'/')+1));
// if(!in_array($name, array($file_t, $file_tog)))
// {
					 if(is_file($name)===TRUE) {
			
						$zip->addFile($name, str_replace($pathSource, "", $name));
						 }
					//    }
					}
					
			// print_r($path);die;
			
					$zip->close();
				}

// zipping to download


if($this->input->post('price') > 0){
	// message
	
	$message = 'Hi '.$userdata->User_name.',

	<h5 style="margin-top:15px;font-size:15px;">Congratulations!</h5>
	<p style="margin-top:10px;font-size:14px;">You’re now in 3Dcopilot review process, once approved you can start selling and earn.
	</p>

	<p style="margin-top:20px;"><a href='.base_url('welcome/user_profile').'><img src='.base_url($this->input->post('thumbnailo')).' style="width:200px;"></a></p>
	<p style="margin-top:20px;"><a href='.base_url('welcome/user_profile').'>'.$model_name.'</a></p>





   <h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
   


   $config=array(
	   'charset'=>'utf-8',
	   'wordwrap'=> TRUE,
	   'mailtype' => 'html'
	   );

   //Load email library 
   $this->load->library('email'); 

   $this->email->initialize($config);
   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
   $this->email->to($userdata->User_email);
   $this->email->cc('support@3dcopilot.com');
	$this->email->subject('Congratulations! Become Seller'); 
   
	$this->email->message($message); 
   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
	//send mail
	$this->email->send();

	// message

}

		
		
	   //$this->load->models("Main_model");
		$uploaddata=array(
			'Model_path' => $this->input->post('mod_path'),
			'User_id' => $this->session->userdata('User_id'),
			'Model_id' => $this->input->post('models'),
			'Categories_id' => $this->input->post('cat1'),
			'Categories_id2' => $this->input->post('cat2'),
			'Model_name' => $this->input->post('title'),
			'Thumbnail' => $this->input->post('thumbnail'),
			'Thumbnail_og' => $this->input->post('thumbnailo'),
			'Model_Description' => $this->input->post('description'),
			
			'Tag_name' => $this->input->post('tags'),
			'Model_type' => $this->input->post('public'),
			'Sale_count' => $this->input->post('price'),
			'File_size' => $this->session->userdata('file_size'),
			'File_type' => $nameFile,
			'File_ext' => $this->session->userdata('file_ext'),
			'Time' => $c_date,
			'technical' => $this->input->post('technical'),
			'geometry' => $this->input->post('geometry'),
			'polygons' => $this->input->post('polygons'),
			'vertices' => $this->input->post('vertices'),
			'files_extension' => $this->session->userdata('filename_ext')

		);
		
		$this->main_model->choose_file($uploaddata);
		$this->session->unset_userdata('thumbnail');
		$this->session->unset_userdata('thumbnailo');
		$this->session->unset_userdata('expaths');
		$this->session->unset_userdata('file_size');
		$this->session->unset_userdata('file_type');
		$this->session->unset_userdata('file_ext');
		$this->session->unset_userdata('model_u_path2');
		$this->session->unset_userdata('model_u_path1');
		$this->session->unset_userdata('model_u_path');
		// $this->main_model->insert_tranfer_data($data);
		redirect(base_url()."welcome/user_profile");

//echo "<pre>"; print_r($_POST);die;	
	
}


function edit_modelsave_validation()
{
	$model_id = $this->input->get('row_id');
	//print_r($model_id);die;
	$data = array(
		'Model_name' => $this->input->get('title'),
		'Thumbnail' => $this->input->get('thumbnail'),
		'Thumbnail_og' => $this->input->get('thumbnail_og'),
		'Model_Description' => $this->input->get('description'),
		'Tag_name' => $this->input->get('tags'),
		'Model_type' => $this->input->get('public'),
		'Sale_count' => $this->input->get('price'),
		'technical' => $this->input->get('technical'),
			'geometry' => $this->input->get('geometry'),
			'polygons' => $this->input->get('polygons'),
			'vertices' => $this->input->get('vertices'),
			
	);
	print_r($data);
	if($this->cart->update_Edit_model($data, $model_id))
	{
		echo 'success';
	}
	
}
  

function moddelete()
{
	// $this->session->unset_userdata('model_u_path2');
	// 	$this->session->unset_userdata('model_u_path1');
	// 	$this->session->unset_userdata('model_u_path');
		if($this->session->userdata('model_u_path2'))
		
		{
			$filess = glob($this->session->userdata('model_u_path2')); // get all file names
			
			foreach($filess as $file){ // iterate files
			  $path = explode('/',$file);
			  $dir = $path[0].'/'.$path[1].'/';
			}
			// $dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
            $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
            $files = new RecursiveIteratorIterator($it,
                     RecursiveIteratorIterator::CHILD_FIRST);
            foreach($files as $file) {
                if ($file->isDir()){
                     rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }
		   if(rmdir($dir))
		   {
			if($this->session->unset_userdata('model_u_path2')){
				redirect(base_url()."welcome/index");
			}
		  }
		}

		if($this->session->userdata('model_u_path1'))
		{
			$filess = glob($this->session->userdata('model_u_path1')); // get all file names
			foreach($filess as $file){ // iterate files
				$path = explode('/',$file);
				$dir = $path[0].'/'.$path[1].'/';
			  }
			//   $dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
			  $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
			  $files = new RecursiveIteratorIterator($it,
					   RecursiveIteratorIterator::CHILD_FIRST);
			  foreach($files as $file) {
				  if ($file->isDir()){
					   rmdir($file->getRealPath());
				  } else {
					  unlink($file->getRealPath());
				  }
			  }
			 if(rmdir($dir))
			 {
			  if($this->session->unset_userdata('model_u_path1')){
				  redirect(base_url()."welcome/index");
			  }
			}
		}

		if($this->session->userdata('model_u_path'))
		{
			$filess = glob($this->session->userdata('model_u_path')); // get all file names
			foreach($filess as $file){ // iterate files
				$path = explode('/',$file);
				$dir = $path[0].'/'.$path[1].'/';
			  }
			//   $dir = 'samples' . DIRECTORY_SEPARATOR . 'sampledirtree';
			  $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
			  $files = new RecursiveIteratorIterator($it,
					   RecursiveIteratorIterator::CHILD_FIRST);
			  foreach($files as $file) {
				  if ($file->isDir()){
					   rmdir($file->getRealPath());
				  } else {
					  unlink($file->getRealPath());
				  }
			  }
			 if(rmdir($dir))
			 {
			  if($this->session->unset_userdata('model_u_path')){
				  redirect(base_url()."welcome/index");
			  }
			}
		}
		// $this->main_model->insert_tranfer_data($data);
}
//   edit profile form
public function edit_profile_form()
{
	$profiledata = array(
		'User_name' => $this->input->post('user_name'),
		'First_name' => $this->input->post('first_name'),
		'Last_name' => $this->input->post('last_name'),
		'Your_tag_line' => $this->input->post('tagline'),
		'Account_type' => $this->input->post('account_type'),
		'Your_biography' => $this->input->post('biography'),
		'Your_location' => $this->input->post('location')
	);


	// message
	$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
	$message = 'Hi '.$this->input->post('user_name').',

	
	<p style="margin-top:10px;font-size:14px;">You have successfully changed your 3Dcopilot profile.
	</p>

	<h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
   


   $config=array(
	   'charset'=>'utf-8',
	   'wordwrap'=> TRUE,
	   'mailtype' => 'html'
	   );

   //Load email library 
   $this->load->library('email'); 

   $this->email->initialize($config);
   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
   $this->email->to($userdata->User_email);
	$this->email->subject('Profile has been Updated'); 
   
	$this->email->message($message); 
   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
	//send mail
	$this->email->send();

	// message




	$res = $this->main_model->update_profile_data($this->session->userdata('User_id'),$profiledata);
	if($res > 0)
	{
		redirect(base_url()."welcome/edit_profile");
	}
}


public function edit_email_form()
{
	$this->load->library('form_validation');
		
			$User_email = $this->input->post("email");
			$Password = $this->input->post("password");

			$result=$this->main_model->verify_password($Password);	
			if($result > 0)
			{
				$profiledata = array(
					'User_email' => $User_email
				);

				
	// message
	$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
	$message = 'Hi '.$userdata->User_name.',

	
	<p style="margin-top:10px;font-size:14px;">You have successfully changed your 3Dcopilot Email.
	</p>

	<h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
   


   $config=array(
	   'charset'=>'utf-8',
	   'wordwrap'=> TRUE,
	   'mailtype' => 'html'
	   );

   //Load email library 
   $this->load->library('email'); 

   $this->email->initialize($config);
   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
   $this->email->to($userdata->User_email);
   $this->email->cc($User_email);
	$this->email->subject('Email Changed'); 
   
	$this->email->message($message); 
   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
	//send mail
	$this->email->send();

	// message


				$this->session->set_userdata('User_email', $User_email);
				$res = $this->main_model->update_profile_data($this->session->userdata('User_id'),$profiledata);
	            if($res > 0)
	            {
		            redirect(base_url()."welcome/email_change");
	            }
			}
			else
			{
				$this->session->set_flashdata('errorpassword','Invalid password');
				redirect(base_url()."welcome/email_change");
			}
}

// change password

public function change_password_form()
{
	$this->load->library('form_validation');
		
			$newpassword = $this->input->post("newpassword");
			$cPassword = $this->input->post("cpassword");
			if($newpassword == $cPassword)
			{
				$profiledata = array(
					'Password' => $newpassword
				);
				
				
	// message
	$userdata = $this->db->query("select * from user_module where User_id='".$this->session->userdata('User_id')."'")->row();
		
	$message = 'Hi '.$userdata->User_name.',

	
	<p style="margin-top:10px;font-size:14px;">You have successfully changed your 3Dcopilot Password.
	</p>

	<h1 style="color:#666;font-size:17px;margin-top:50px;">Thanks for using 3Dcopilot!</h1>
   <div style="display:flex;border:1px solid transparent;width:max-content;"><img src='.base_url('resources/icons/tabicon.jpg').' style="width:100px;"></div>';
   


   $config=array(
	   'charset'=>'utf-8',
	   'wordwrap'=> TRUE,
	   'mailtype' => 'html'
	   );

   //Load email library 
   $this->load->library('email'); 

   $this->email->initialize($config);
   $this->email->from('support@3dcopilot.com', '3Dcopilot'); 
   $this->email->to($userdata->User_email);
	$this->email->subject('Password Changed'); 
   
	$this->email->message($message); 
   //  $this->email->attach(base_url('resources/icons/tabicon.jpg'), 'inline');
	//send mail
	$this->email->send();

	// message


				$this->session->set_userdata('Password', $newpassword);
				$res = $this->main_model->update_profile_data($this->session->userdata('User_id'),$profiledata);
	            if($res > 0)
	            {
					redirect(base_url()."welcome/password_change");
					$this->session->set_flashdata('errorpass','Password updated successfully');
	            }
			}
			else
			{
				$this->session->set_flashdata('errorpass','Password is not matching');
				redirect(base_url()."welcome/password_change");
			}
			

}

// uploaded model
public function publish_model()
{
	$check = $this->input->post("check");
	$price = $this->input->post("price");
	if(1)
	{
		$this->session->set_userdata('checked',$check);
		$this->session->set_userdata('prices',$price);
		$dataarray = array(
			'check' => $check,
			'Sale_count' => $price
		); 
		
		$this->main_model->update_upload_data($this->session->userdata('Model_path'),$dataarray);
		
			redirect(base_url()."welcome/user_models");
		
	}

}

    

	public function index()
	{
		
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home',$data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('home',$data);
		$this->load->view('includes/home_footer');
	}

	
	public function forbusiness()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('for_business',$data);
		$this->load->view('includes/home_footer');
	}

	public function ddd_services()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('3D_products_elearning',$data);
		$this->load->view('includes/home_footer');
	}

	public function graphic_design_services()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('vectors',$data);
		$this->load->view('includes/home_footer');
	}

	public function video_services()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('video_templates',$data);
		$this->load->view('includes/home_footer');
	}

	public function vfx()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('vr_classroom',$data);
		$this->load->view('includes/home_footer');
	}

	public function web_gl()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('web_gl',$data);
		$this->load->view('includes/home_footer');
	}

	public function search_page()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('search_page',$data);
		
		
	}

	public function sharelink()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('sharelink',$data);
		
		
	}



	function login_animals()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		$this->load->view('includes/login-header', $data);
		// $data['details'] = $this->cart->get_details();
		$this->load->view('login_animals_and_pets', $data);
		$this->load->view('includes/footer');
	}
	function user_profile()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
	
		// $user_edit_model = $this->session->userdata('edit_model_s');
		// $data['edit_model_data'] = $this->cart->editmodels_data($user_edit_model);

		// edit models
		$data['get_models'] = $this->cart->get_models();
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));
		$data['addtocollections'] = $this->cart->getaddtocollections($this->session->userdata('User_id'));
		//$datafetch['upload_table'] = $res = $this->main_model->fetch_data($this->input->post('limit'), $this->input->post('start'), $this->session->userdata('User_id'));
		$this->load->view('includes/uploads_header', $data);
		$this->load->view('user_profile', $data);
		$this->load->view('includes/userprofile_footer');
	}
	function edit_profile()
	{
		//$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		$data['models'] =  $r = $this->main_model->fetch_models();

		$User_id= $this->session->userdata('User_id');
		$user_data['user_module']=$this->main_model->editprofile_changes($User_id);
		//print_r($User_email);die;
		
		$this->load->view('includes/edit_profile_header',$data);
		
		$this->load->view('edit_profile-body',$user_data, $data);
		$this->load->view('includes/footer');
	}
	function avatar_profile()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();

		$this->load->view('includes/edit_profile_header', $data);
		$this->load->view('avatar_profile',$data);
		$this->load->view('includes/footer');
	}
	function email_change()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		$User_id= $this->session->userdata('User_id');
		$user_data['user_module']=$this->main_model->editprofile_changes($User_id);
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		$this->load->view('includes/edit_profile_header', $data);
		$this->load->view('email-change', $user_data);
		$this->load->view('includes/footer');
	}
	function password_change()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		$User_id= $this->session->userdata('User_id');
		$user_data['user_module']=$this->main_model->editprofile_changes($User_id);
		$this->load->view('includes/edit_profile_header', $data);
		$this->load->view('password-change', $user_data);
		$this->load->view('includes/footer');
	}
	function aboutus()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
		$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('aboutus');
		$this->load->view('includes/footer');
	}
	function termsandconditions()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('terms_and_conditions');
		$this->load->view('includes/footer');
	}
	function privacypolicy()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('privacy_policies');
		$this->load->view('includes/footer');
	}
	function disclaimer()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));

		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login_home', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		$this->load->view('disclaimer');
		$this->load->view('includes/footer');
	}
	function contactus()
	{
		$this->load->view('contactus');
	}
	function report()
	{
		$this->load->view('report');
	}
	function billing()
	{
		

		$this->load->view('billing');
		$this->load->view('includes/footer');
	}
	function payment()
	{
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		$data['billing_address'] = $res = $this->main_model->get_billing_address($this->session->userdata('User_id'));

		$this->load->view('payment', $data);
		$this->load->view('includes/footer');
	}
	function validation()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		$this->load->view('validation',$data);
		$this->load->view('includes/footer');
	}
	function user_models()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		$data['models'] =  $r = $this->main_model->fetch_models();
		$this->load->view('includes/uploads_header', $data);
		$this->load->view('user_models');
		$this->load->view('includes/footer');
	}

	// report
	public function report_model()
	{
		$this->load->view('report');
	}
	public function reporting_model()
	{
		$data= array(
			
			'User_email' => $this->input->post('emailaddress'),
			'Request_type' => $this->input->post('request_type'),
			'Subject' => $this->input->post('subject'),
			'Text' => $this->input->post('description'),
			'file' => $this->input->post('file')
		);
		if($this->db->insert('report_table',$data))
		{
			$this->session->set_flashdata('reportsuccess',"Report has been Submitted");
			redirect(base_url()."welcome/report_model");
		}
		else
		{
			$this->session->set_flashdata('reportsuccess',"please go back and login to report");
			redirect(base_url()."welcome/report_model");
		}
	}

	public function contact_admin()
	{
		$data= array(
			'User_id' => $this->session->userdata('User_id'),
			'Email' => $this->input->post('emailaddress'),
			'Mobile_number' => $this->input->post('request_type'),
			
			'Text' => $this->input->post('description')
			
		);
		if($this->session->userdata('User_id'))
		{
		if($this->db->insert('contactus_table',$data))
		{
			$this->session->set_flashdata('contacterror',"Report has been Submitted");
			redirect(base_url()."welcome/contactus");
		}
		else
		{
			$this->session->set_flashdata('contacterror',"please go back and login to contactus");
			redirect(base_url()."welcome/contactus");
		}
	  }
	  else{
		$this->session->set_flashdata('contacterror',"please go back and login to contactus");
		redirect(base_url()."welcome/contactus");
	  }
	}

	public function billing_form()
	{
		$billing_data = array(
			'User_id' => $this->session->userdata('User_id'),
			'First_name' => $this->input->post('fname'),
			'Last_name' => $this->input->post('lname'),
			'Address_one' => $this->input->post('add1'),
			'Address_two' => $this->input->post('add2'),
			'Country' => $this->input->post('country'),
			'State' => $this->input->post('state'),
			'City' => $this->input->post('city'),
			'Zip_code' => $this->input->post('zip')
		);
		$this->main_model->insert_billing($billing_data);
		if(1)
		{
			redirect(base_url()."welcome/payment");
		}
	}

	public function views()
	{
		$data = array(
			
			'Model_id' => $this->input->post('user_model_id')
		);
		$this->db->insert('views',$data);
	}

	









	

	public function assets_models()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('360_assets',$data);
		$this->load->view('includes/home_footer');
	}

	function assets_models_home()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('360_assets_home',$data);
		$this->load->view('includes/models_footer');
	}


	public function ddd_models()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('3d_models',$data);
		$this->load->view('includes/home_footer');
	}


    function ddd_models_home()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('3dmodels_home',$data);
		$this->load->view('includes/models_footer');
	}


	public function vector_models()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('vector_models',$data);
		$this->load->view('includes/home_footer');
	}


	function vector_home()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vector_home',$data);
		$this->load->view('includes/models_footer');
	}

	public function photo_models()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('photo_models',$data);
		$this->load->view('includes/home_footer');
	}


	function photo_home()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('photo_home',$data);
		$this->load->view('includes/models_footer');
	}

	public function videotemplates_models()
	{
		//$res = $this->main_model->run_manual_query_result("select *from user_module");
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header',$data);
		}
		
		$this->load->view('videotemplates_models',$data);
		$this->load->view('includes/home_footer');
	}


	function videotemplates_home()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('videotemplates_home',$data);
		$this->load->view('includes/models_footer');
	}








	
	function animalsandpets()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('animals_and_pets_browse_screen',$data);
		$this->load->view('includes/footer');
	}

	function architecture()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('architecture',$data);
		$this->load->view('includes/footer');
	}

	function artandabstract()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('art_and_abstract',$data);
		$this->load->view('includes/footer');
	}

	function carsandvehicles()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('cars_and_vehicles',$data);
		$this->load->view('includes/footer');
	}

	function charactersandcreatures()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('characters_and_creatures',$data);
		$this->load->view('includes/footer');
	}

	function culturalheritage()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('cultural_heritage',$data);
		$this->load->view('includes/footer');
	}

	function electronicsandgadgets()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('electronics_gadgets',$data);
		$this->load->view('includes/footer');
	}

	function fashionandstyle()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('fashion_style',$data);
		$this->load->view('includes/footer');
	}

	function foodanddrink()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('food_and_drink',$data);
		$this->load->view('includes/footer');
	}

	function furnitureandhome()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('furniture_and_home',$data);
		$this->load->view('includes/footer');
	}

	function music()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('music',$data);
		$this->load->view('includes/footer');
	}

	function natureandplants()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('nature_and_plants',$data);
		$this->load->view('includes/footer');
	}

	function newsandpolitics()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('news_and_politics',$data);
		$this->load->view('includes/footer');
	}

	function people()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('people',$data);
		$this->load->view('includes/footer');
	}

	function placesandtravel()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('places_and_travel',$data);
		$this->load->view('includes/footer');
	}

	function scienceandtechnology()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('science_and_technology',$data);
		$this->load->view('includes/footer');
	}

	function sportsandfitness()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('sports_and_fitness',$data);
		$this->load->view('includes/footer');
	}

	function weaponsandmilitary()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('weapons_and_military',$data);
		$this->load->view('includes/footer');
	}

	function v_animals()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_animals',$data);
		$this->load->view('includes/footer');
	}

	function v_background()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_background',$data);
		$this->load->view('includes/footer');
	}

	function v_banners()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_banners',$data);
		$this->load->view('includes/footer');
	}

	function v_birthday()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_birthday',$data);
		$this->load->view('includes/footer');
	}

	function v_business()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_business',$data);
		$this->load->view('includes/footer');
	}

	function v_buttons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_buttons',$data);
		$this->load->view('includes/footer');
	}

	function v_cartoons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_cartoons',$data);
		$this->load->view('includes/footer');
	}

	function v_christmas()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_christmas',$data);
		$this->load->view('includes/footer');
	}

	function v_design_elements()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_design_elements',$data);
		$this->load->view('includes/footer');
	}

	function v_easter()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_easter',$data);
		$this->load->view('includes/footer');
	}

	function v_graphics()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_graphics',$data);
		$this->load->view('includes/footer');
	}

	function v_hallowen()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_hallowen',$data);
		$this->load->view('includes/footer');
	}

	function v_human()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_human',$data);
		$this->load->view('includes/footer');
	}

	function v_icons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_icons',$data);
		$this->load->view('includes/footer');
	}

	function v_illustrations()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_illustrations',$data);
		$this->load->view('includes/footer');
	}

	function v_logo_templates()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_logo_templates',$data);
		$this->load->view('includes/footer');
	}

	function v_map()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_map',$data);
		$this->load->view('includes/footer');
	}

	function v_music()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_music',$data);
		$this->load->view('includes/footer');
	}

	function v_nature()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_nature',$data);
		$this->load->view('includes/footer');
	}

	function v_objects()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_objects',$data);
		$this->load->view('includes/footer');
	}

	function v_ornaments()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_ornaments',$data);
		$this->load->view('includes/footer');
	}

	function v_ribbons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_ribbons',$data);
		$this->load->view('includes/footer');
	}

	function v_silhousettes()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_silhousettes',$data);
		$this->load->view('includes/footer');
	}

	function v_sports()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_sports',$data);
		$this->load->view('includes/footer');
	}

	function v_summer()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_summer',$data);
		$this->load->view('includes/footer');
	}

	function v_templates()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_templates',$data);
		$this->load->view('includes/footer');
	}

	function v_textures()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_textures',$data);
		$this->load->view('includes/footer');
	}

	function v_transport()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_transport',$data);
		$this->load->view('includes/footer');
	}

	function v_valentine()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_valentine',$data);
		$this->load->view('includes/footer');
	}

	function v_water()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_water',$data);
		$this->load->view('includes/footer');
	}

	function v_web_elements()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_web_elements',$data);
		$this->load->view('includes/footer');
	}

	function v_web_templates()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_web_templates',$data);
		$this->load->view('includes/footer');
	}

	function v_wedding()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_wedding',$data);
		$this->load->view('includes/footer');
	}

	function v_signs_symbols()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_signs_symbols',$data);
		$this->load->view('includes/footer');
	}

	function v_travel()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_travel',$data);
		$this->load->view('includes/footer');
	}

	function v_food()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_food',$data);
		$this->load->view('includes/footer');
	}

	function v_country()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_country',$data);
		$this->load->view('includes/footer');
	}

	function v_event()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_event',$data);
		$this->load->view('includes/footer');
	}

	function v_technology()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_technology',$data);
		$this->load->view('includes/footer');
	}

	function v_education()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_education',$data);
		$this->load->view('includes/footer');
	}

	function v_health()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_health',$data);
		$this->load->view('includes/footer');
	}

	function v_calender()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_calender',$data);
		$this->load->view('includes/footer');
	}

	function p_abstract()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_abstract',$data);
		$this->load->view('includes/footer');
	}

	function p_animals()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_animals',$data);
		$this->load->view('includes/footer');
	}

	function p_architecture()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_architecture',$data);
		$this->load->view('includes/footer');
	}

	function p_baby()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_baby',$data);
		$this->load->view('includes/footer');
	}

	function p_birthday()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_birthday',$data);
		$this->load->view('includes/footer');
	}

	function p_book()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_book',$data);
		$this->load->view('includes/footer');
	}

	function p_business()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_business',$data);
		$this->load->view('includes/footer');
	}

	function p_coffee()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_coffee',$data);
		$this->load->view('includes/footer');
	}

	function p_communication()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_communication',$data);
		$this->load->view('includes/footer');
	}

	function p_community()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_community',$data);
		$this->load->view('includes/footer');
	}

	function p_couple()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_couple',$data);
		$this->load->view('includes/footer');
	}

	function p_dance()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_dance',$data);
		$this->load->view('includes/footer');
	}

	function p_education()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_education',$data);
		$this->load->view('includes/footer');
	}

	function p_family()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_family',$data);
		$this->load->view('includes/footer');
	}

	function p_fashion()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_fashion',$data);
		$this->load->view('includes/footer');
	}

	function p_fitness()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_fitness');
		$this->load->view('includes/footer');
	}

	function p_flower()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_flower',$data);
		$this->load->view('includes/footer');
	}

	function p_food()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_food',$data);
		$this->load->view('includes/footer');
	}

	function p_frame()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_frame',$data);
		$this->load->view('includes/footer');
	}

	function p_friends()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_friends',$data);
		$this->load->view('includes/footer');
	}

	function p_gifts()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_gifts',$data);
		$this->load->view('includes/footer');
	}

	function p_hand()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_hand',$data);
		$this->load->view('includes/footer');
	}

	function p_health()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_health',$data);
		$this->load->view('includes/footer');
	}

	function p_laptop()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_laptop',$data);
		$this->load->view('includes/footer');
	}

	function p_lifestyle()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_lifestyle',$data);
		$this->load->view('includes/footer');
	}

	function p_liquid()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_liquid',$data);
		$this->load->view('includes/footer');
	}
	function p_love()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_love',$data);
		$this->load->view('includes/footer');
	}

	function p_music()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_music',$data);
		$this->load->view('includes/footer');
	}

	function p_nature()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_nature',$data);
		$this->load->view('includes/footer');
	}

	function p_party()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_party',$data);
		$this->load->view('includes/footer');
	}

	function p_pet()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_pet',$data);
		$this->load->view('includes/footer');
	}

	function p_phone()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_phone',$data);
		$this->load->view('includes/footer');
	}

	function p_portrait()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_portrait',$data);
		$this->load->view('includes/footer');
	}

	function p_realestate()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_realestate',$data);
		$this->load->view('includes/footer');
	}

	function p_sales()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_sales',$data);
		$this->load->view('includes/footer');
	}

	function p_seasons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_seasons',$data);
		$this->load->view('includes/footer');
	}

	function p_shopping()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_shopping',$data);
		$this->load->view('includes/footer');
	}

	function p_sky()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_sky',$data);
		$this->load->view('includes/footer');
	}

	function p_spa()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_spa',$data);
		$this->load->view('includes/footer');
	}
	function p_sports()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_sports',$data);
		$this->load->view('includes/footer');
	}

	function p_table()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_table',$data);
		$this->load->view('includes/footer');
	}

	function p_technology()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_technology',$data);
		$this->load->view('includes/footer');
	}

	function p_textures()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_textures',$data);
		$this->load->view('includes/footer');
	}

	function p_travel()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_travel',$data);
		$this->load->view('includes/footer');
	}

	function p_water()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_water',$data);
		$this->load->view('includes/footer');
	}

	function p_wedding()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_wedding',$data);
		$this->load->view('includes/footer');
	}

	function p_wood()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_wood',$data);
		$this->load->view('includes/footer');
	}

	function assets_photos()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('p_yoga',$data);
		$this->load->view('includes/footer');
	}

	function vt_openers()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_openers',$data);
		$this->load->view('includes/footer');
	}

	function vt_video_displays()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_video_displays',$data);
		$this->load->view('includes/footer');
	}

	function vt_logo_strings()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_logo_strings',$data);
		$this->load->view('includes/footer');
	}

	function vt_titles()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_titles',$data);
		$this->load->view('includes/footer');
	}

	function vt_elements()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_elements',$data);
		$this->load->view('includes/footer');
	}

	function vt_infographics()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_infographics',$data);
		$this->load->view('includes/footer');
	}

	function vt_productpromo()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_productpromo',$data);
		$this->load->view('includes/footer');
	}

	function vt_broadcast()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_broadcast',$data);
		$this->load->view('includes/footer');
	}

	function vt_element3d()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('vt_element3d',$data);
		$this->load->view('includes/footer');
	}

	function w_animals()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_animals',$data);
		$this->load->view('includes/footer');
	}

	function assets_videos()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_architecture',$data);
		$this->load->view('includes/footer');
	}

	function w_artandabstract()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_artandabstract',$data);
		$this->load->view('includes/footer');
	}

	function w_carsandvehicles()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_carsandvehicles',$data);
		$this->load->view('includes/footer');
	}

	function w_characters()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_characters',$data);
		$this->load->view('includes/footer');
	}

	function w_cultural_heritage()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_cultural_heritage',$data);
		$this->load->view('includes/footer');
	}

	function w_electronics()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_electronics',$data);
		$this->load->view('includes/footer');
	}

	function w_fashion()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_fashion',$data);
		$this->load->view('includes/footer');
	}

	function w_food()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_food',$data);
		$this->load->view('includes/footer');
	}

	function w_furniture()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_furniture',$data);
		$this->load->view('includes/footer');
	}

	function w_music()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_music',$data);
		$this->load->view('includes/footer');
	}

	function w_nature()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_nature',$data);
		$this->load->view('includes/footer');
	}

	function w_news_politics()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_news_politics',$data);
		$this->load->view('includes/footer');
	}

	function w_people()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_people',$data);
		$this->load->view('includes/footer');
	}

	function w_places()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_places',$data);
		$this->load->view('includes/footer');
	}

	function w_science()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_science',$data);
		$this->load->view('includes/footer');
	}

	function w_sports()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_sports',$data);
		$this->load->view('includes/footer');
	}

	function w_weapons()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('w_weapons',$data);
		$this->load->view('includes/footer');
	}


	function v_advertisement()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_advertisement',$data);
		$this->load->view('includes/footer');
	}
	function v_brouchers()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_brouchers',$data);
		$this->load->view('includes/footer');
	}
	function v_business_cards()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_business_cards',$data);
		$this->load->view('includes/footer');
	}

	
	function v_character_design()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_character_design',$data);
		$this->load->view('includes/footer');
	}
	function v_concept_art()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_concept_art',$data);
		$this->load->view('includes/footer');
	}

	function v_flyers()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_flyers',$data);
		$this->load->view('includes/footer');
	}
	function v_gif()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_gif',$data);
		$this->load->view('includes/footer');
	}

	
	function v_letterheads()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_letterheads',$data);
		$this->load->view('includes/footer');
	}
	
	function v_menu_designs()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_menu_designs',$data);
		$this->load->view('includes/footer');
	}
	function v_name()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_name',$data);
		$this->load->view('includes/footer');
	}
	function v_packaging()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_packaging',$data);
		$this->load->view('includes/footer');
	}
	function v_posters()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_posters',$data);
		$this->load->view('includes/footer');
	}
	function v_social()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_social',$data);
		$this->load->view('includes/footer');
	}
	function v_stickers()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_stickers',$data);
		$this->load->view('includes/footer');
	}
	function v_yard()
	{
		$data['models'] =  $r = $this->main_model->fetch_models();
		//$cart = $this->load->module('cart');
		$data['cart_items'] = $res = $this->cart->get_cart_items($this->session->userdata('User_id'));
		//print_r($data['cart_items']);die;
		$data['cart_details'] = $this->cart->get_cart_count($this->session->userdata('User_id'));
		// add to collection;
		$data['addtocollect'] = $this->cart->get_add_to_collection($this->session->userdata('User_id'));

		$data['get_models'] = $this->cart->get_models();
		if($this->session->userdata('User_id'))
		{
			$this->load->view('includes/login-header', $data);
		
		}
		else
		{
			$this->load->view('includes/header', $data);
		}
		
		$this->load->view('v_yard',$data);
		$this->load->view('includes/footer');
	}

	




	
	
}
