<?php

class Users extends CI_Controller{

public function show()
{
    //$this->load->model('user_model');

    $results = $this->user_model->get_users();


    $tes['welcome'] = "welcome, hello <br>";
    $tes['results'] = $results;

    $this->load->view('users_view',$tes);




    
    
    
    
    // foreach ($results as  $result) 
    // {
    //     echo $result->id."<br>";
    //     echo $result->username."<br>";
    //     echo $result->password."<br>";

    //     # code...
    // }
    
}







}