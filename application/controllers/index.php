<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    public $data;

    public function __construct() {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->helper('date');
    }

    function load_view() {
        $this->load->view("inc/new", $this->data);
    }

    public function index() {
        date_default_timezone_set('Africa/Nairobi');
        $results = $this->data_model->fetch_upcoming_events();
        // var_dump($results);
        
        $this->data ['main'] = "new";
        $this->data['events'] = $results;
        $this->data['leaders']=$this->data_model->leaders();
        $this->data['articles']=$this->data_model->articles();
        $this->load_view();
    }

    public function gallery() {
//        $this->data ['main'] = "gallery";
//        $this->load_view();
        $this->load->view("gallery");
    }

    public function message() {
        $this->load->helper('email');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        // echo "Details ".$name." ".$email." ".$subject." ".$message;
        if ($name && $email && $subject && $message ) {
            if (valid_email($email)) {
                $this->send_email($name . ' says ' . $subject, $message, $email, 'Comment on website');
                echo ' Thanks a lot ' . $name . '. We will get back to you soon.';
            } else {
                echo 'Please fill a valid email';
            }
        } else {
            echo 'Please fill out all the fields';
        }
    }

    public function register(){
        $this->load->helper('email');
        $first_name = $this->input->get('firstname');
        $last_name = $this->input->get('middlename');
        $phone_no = $this->input->get('phone');
        $email = $this->input->get('email');
        //$course = $this->input->post('course');
        $reg_no = $this->input->get('reg');
        //$gender = $this->input->post('gender');
        $hall = $this->input->get('hall');
        //echo "Details ".$first_name." ".$last_name." ".$phone_no." ".$email." ".$reg_no." ".$hall;

        if ($first_name && $last_name && $phone_no && $email &&$reg_no && $hall) {
            if (valid_email($email)) {
                $details = array(
                    'first_name' =>$first_name ,
                     'last_name' =>$last_name ,
                      'phone_no' =>$phone_no ,
                       'email' =>$email ,
                         'reg_no' =>$reg_no ,
                           'hall' =>$hall ,
                );
                $result=$this->data_model->enter_data($details, 'users');
                if($result){
                    $data['mess']= ' Thanks a lot ' . $first_name.' '.$last_name . ' for registering.You are now a member.';
                }else{
                      $data['mess']= ' An error occurred when saving your details.Please try again.';
                }
            } else {
                $data['mess']= 'Please fill a valid email';
            }
        } else {
            $data['mess']= 'Please fill out all the fields';
        }
        $this->index();
    }

    public function send_email($subject, $message, $email,$info) {
        $this->load->library('email');
        $this->email->from($email);
        $this->email->to('chiromocu@gmail.com',$info);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }
    function verify(){
        $first=$this->input->post('userName"');
        echo $first;
    }
    function allarticle(){
        $id=$this->input->post('id');
        $data['ids']=$this->data_model->articles();
        $data['article']=$this->data_model->article($id);
        $this->load->view('inc/article',$data);


    }
    function getarticle(){
        $code=$this->input->post('code');
        $data['ids']=$this->data_model->articles();
        $data['article']=$this->data_model->article($code);
        $this->load->view('inc/article',$data);

    }

}
