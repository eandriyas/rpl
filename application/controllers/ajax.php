<?php

class ajax extends CI_Controller {



  public function username_taken()
  {
    //$this->load->model('Login');
    $username = trim($_POST['username']);
    echo "gak";
 //    if ($this->Login->login_check($username)) 
 //      echo "exists";
 //   else
 // echo "not exists";
  }

}

/* End of file ajax.php */
/* Location: ./system/application/controllers/ajax.php */
?> 