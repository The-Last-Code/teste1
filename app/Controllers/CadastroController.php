<?php
include '../Models/User.php';


if (isset($_POST["nom_cientista"])){

  $nom_cientista = $_POST["nom_cientista"];
  $cpf_cientista = $_POST["cpf_cientista"];
  $dtn_cientista = $_POST["dtn_cientista"];
  $email_cientista = $_POST["email_cientista"];
  $email_alternativo_cientista = $_POST["email_alternativo_cientista"];
  $lattes_cientista = $_POST["lattes_cientista"];
  $snh_cientista = $_POST["snh_cientista"];

  $user = new User($nom_cientista, $cpf_cientista, $dtn_cientista
  ,$email_cientista, $email_alternativo_cientista, $lattes_cientista, $snh_cientista  );

  $user->CadastroBanco();
  
    header('Location: ../View/Home.php');

}
    

      


  
  
  //   $acao = $_POST['pub'];

  // if ($acao == 'Criar publicação'){
  //   $product = new CadastroCientista;
  //   $product->CadastroPub();
  // }

  // if ($acao == 'Crie sua Conta'){
  //   $product = new CadastroCientista;
  //   $product->CadastroCientista();
  // }


  


?>