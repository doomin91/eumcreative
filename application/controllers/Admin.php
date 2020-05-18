<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');

        $this->load->library('session');
        $this->load->library('pagination');
        // $this->load->library('CustomClass');
        //$this->load->library('encrypt');
		$this->load->helper('download');

		$this->load->model('ClientModel');
		// if ($this->session->userdata("user_id") == ""){
		//     echo "<script type=\"text/javascript\">
		// 	<!--
		// 		document.location.href=\"/admin/login\";
		// 	//-->
		// 	</script>";
		//     exit;
		// }

		ini_set("display_errors", "on");
		@ini_set("allow_url_fopen", "1");
    }

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
	public function index()
	{
		$this->load->view('./admin/login');
	}

	public function client()
	{
		$this->load->view('./admin/header');
		$this->load->view('./admin/ClientManagement');
	}

	public function youtube()
	{

		$data["LIST"] = $this->ClientModel->GetContentsList();
		$this->load->view('./admin/header');
		$this->load->view('./admin/ContentsManagement', $data);

	}

	public function getUrlParameter($url, $sch_tag) {
		$parts = parse_url($url);
		if(isset($parts['host'])){
			if($parts['host'] == "www.youtube.com"){
				if(isset($parts['query'])){
					parse_str($parts['query'], $query);
					return $query[$sch_tag];
				}
			}
		}

		return false;;

	}
	
	public function DeleteContent(){
		$YoutubeSeq = $this->input->post('seq');
		$return = $this->ClientModel->DeleteContents($YoutubeSeq);

		if($return){
	        $return_arr = array(
	            "code" => 200,
	            "msg" => "등록완료"
	        );

	    }else{
	        $return_arr = array(
	            "code" => 201,
	            "msg" => "등록실패"
	        );
	    }

	    echo json_encode($return_arr);


	}

	public function UploadContent(){
		$YoutubeTitle = $this->input->post('y_title');
		$YoutubeUrl = $this->input->post('yurl');
		
	    $data = array(
			"title" => $YoutubeTitle,
			"url" => $YoutubeUrl,
	    );
	    $return = $this->ClientModel->UploadContents($data);

		if($return){
	        $return_arr = array(
	            "code" => 200,
	            "msg" => "등록완료"
	        );

	    }else{
	        $return_arr = array(
	            "code" => 201,
	            "msg" => "등록실패"
	        );
	    }

	    echo json_encode($return_arr);


	}

	public function CheckUrl(){
		$yurl = $this->input->post("yurl");
		$url_parameter = $this->getUrlParameter($yurl, 'v');
		$content = file_get_contents("http://youtube.com/get_video_info?video_id=".$url_parameter);

		parse_str($content, $data);
		if(isset($data["player_response"])) {
			$pData = json_decode($data["player_response"]);
			$videoDetails = $pData->videoDetails;
			$microformat = $pData->microformat;
			$return_arr = array(
			"title" => $videoDetails->title,
			"author" => $videoDetails->author,
			"upload" => $microformat->playerMicroformatRenderer->publishDate,
			"viewcount" => $videoDetails->viewCount,
			);
			echo json_encode($return_arr);
		} else {
			$return_arr = array(
				"title" => '',
				"author" => '',
				"upload" => '',
				"viewcount" => '',
				);
			echo json_encode($return_arr);
		}

		
		
		
	}
	


}
