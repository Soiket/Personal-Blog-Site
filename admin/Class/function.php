<?php


class blogAdmin{

    private $conn;

    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'blog';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if(!$this->conn){
            die("Database connection error");
        }
    }


      public function Admin_Login($data)
      {
          $admin_email = $data['admin_email'];
          $admin_pass  = md5($data['admin_password']);

          $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

          if(mysqli_query($this->conn, $query)){
              $admin_info = mysqli_query($this->conn, $query);

              if($admin_info){
                  header("location:dashboard.php");

                  $admin_data = mysqli_fetch_assoc($admin_info);
                  
                  session_start();

                  $_SESSION['admin_id'] = $admin_data['id'];
                  $_SESSION['admin_name'] = $admin_data['admin_name'];
              }
          }
      }


}



?>