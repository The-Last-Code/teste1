<?php
      include '../Models/Login.php';

      
      if (isset($_POST['cpf_cientista'])){
       $nom_cientista = $_POST["cpf_cientista"];
       $snh_cientista = $_POST["snh_cientista"];

       $log=new Login();

       $o=$log->Login($nom_cientista,$snh_cientista);
          if($o==true){
            header('Location: ../View/Home.php');
          }
          else{
            echo "<SCRIPT> //not showing me this
            alert('Senha ou CPF incorreto')
            window.location.replace('../../app/View/LoginCadastro.php');
        </SCRIPT>";
          }
      }
?>