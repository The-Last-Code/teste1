<?php

require_once '../Conection/Conn.php';
    class CadastraPub{

        public function setCadastroPub($tit_projeto, $dti_projeto, $dtt_projeto,$res_projeto)
        {
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);

                $sql = $pdo->prepare("INSERT INTO projeto (tit_projeto, res_projeto, dti_projeto, dtt_projeto) 
                VALUES (:a, :b, :c, :d)");

                $sql->bindValue(":a", $tit_projeto);
                $sql->bindValue(":c", $dti_projeto);
                $sql->bindValue(":d", $dtt_projeto);
                $sql->bindValue(":b", $res_projeto);
                $sql->execute();
                
                return true;
                 
            }
}
    
?>