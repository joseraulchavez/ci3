<?php





class User_model extends CI_Model
{


    public function get_users()
    {
       

        $query = $this->db->get('users');
        return $query->result();
        

    }


}













 //mannual use of the db

        // $config['hostname']= "localhost";
        // $config['username']= "root";
        // $config['password']= "";
        // $config['database']= "jose_db";

        //  $config['hostname']= "localhost";
        //  $config['username']= "root";
        //  $config['password']= "";
        //  $config['database']= "jose_db"
        //  $connection = $this->load->database($config);
?>


