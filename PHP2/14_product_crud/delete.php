<?php
$pdo = new PDO('mysql:host=localhost;port=3307;dbname=products_crud;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;
if(!$id){
    header("Location:index.php");
}
// echo'<pre>';
// var_dump($id);
// echo'</pre>';
// exit;

$statement = $pdo->prepare('delete from products where id = :id');
$statement->bindValue(':id',$id);
$statement->execute();

header("Location:index.php");
?>