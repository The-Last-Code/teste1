<?php
include '../Models/Pub.php';


        if (isset($_POST['tit_projeto'])){
          $tit_projeto = $_POST["tit_projeto"]; 
          $res_projeto = $_POST["res_projeto"];
          $dti_projeto = $_POST["dti_projeto"];
          $dtt_projeto = $_POST["dtt_projeto"];
         
          
      
           $user = new Pub($tit_projeto,$res_projeto, $dti_projeto, $dtt_projeto,);
      
           $user->CadastroPub();
          
          
          header('Location: ../View/Home.php');
      
        }


?>