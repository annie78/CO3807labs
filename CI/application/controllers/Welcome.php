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
	public function index()
	{
		$this->load->view('welcome_message');
	}
    
    public function mypage()
    {
        $student = [
            "name"=>"John Everyman",
            "email"=>"Jon@email.com",
            "course"=>"Computing"
            ];
        $this->load->view('mypage', $student);
    }
public function displayrows()
	{
		$this->load->model('mymodel');
		$data['records'] = $this->mymodel->getData();
		$this->load->view('display',$data);
	}
function newuser(){
       $this->load->view('newuser');

}
function insertrow(){ 
$this->load->model('mymodel');    
    	$data = [
        "Name" => $this->input->post('name'),
        "Age" => $this->input->post('age')
    	];
	$this->mymodel->insert($data);
	echo "<p>Row inserted</p><a href=\"/ci\"> Back</a>"; 
}

}

