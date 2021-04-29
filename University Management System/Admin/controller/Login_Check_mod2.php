<?php

  session_start();
    require_once('../model/model_l.php');
    $userArr =  getAlluser();

  if(isset($_POST['submit'])){
        


    $Email = $_POST['Email'];
    $Pass= $_POST['Pass'];

    if($Email == "" || $Pass == "")
        {
      echo "null input...";
            #header('location: ../View/login.html');
    }
        else
        {


            foreach($userArr as $user)
            {
                if($user['Email'] == $Email && $user['Pass'] == $Pass ){
                    $_SESSION['flag'] = true;
                    header('location: ../view/home_mod2.php');
                    break;
                }
                else{
                    echo "<h1> Invalid email or password </h1>";
                    #break;
                }
            }

      
    }
  }


?>