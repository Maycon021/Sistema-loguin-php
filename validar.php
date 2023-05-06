<?php 

require("conexao.php");
   
 session_start();


    if(isset($_POST['usuario']) && isset($_POST['senha']))
    {


$nome = $_POST['usuario'];
$senha = $_POST['senha'];


$query = new PDO("mysql:host=localhost;dbname=loguin", "root", "");

$consulta = $query->prepare("SELECT * FROM loguin WHERE usuario =:usuario AND senha= :senha");
$consulta->bindValue(':usuario', $nome);
$consulta->bindValue(':senha', $senha);
 $consulta->execute();

 $result = $consulta->fetchAll(PDO::FETCH_ASSOC);


 if($consulta->rowCount() > 0){


     
$_SESSION['nivel'] = $result['0']['nivel'];

 if($_SESSION['nivel'] == "Administrador"){

   header("Location:pagina.php");
 }


  else if($_SESSION['nivel'] == "Auxiliar"){

   header("Location:auxiliar.php");
 }

 
 }

 else{
   echo '<script> alert("Usuario ou senha incorretos"); 
      location.href="index.php"

   </script>



   ';

 }

   


}

