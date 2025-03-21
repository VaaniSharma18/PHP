<?php
//2 ways to make con to database
//1. mysqli and pdo 
$pdo = new PDO('mysql:host=localhost;port=3307;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// echo'<pre>';
// var_dump($_SERVER);
// echo'</pre>';
// exit;

// echo'<pre>';
// var_dump($_FILES);
// echo'</pre>';
// exit;
$errors = []; 
$title='';
$description='';
$price='';
$image = '';


if($_SERVER['REQUEST_METHOD']==='POST'){
$title = $_POST['title'];
$description = $_POST['description'];
// $image = $_POST['image'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');

if(!$title){
    $errors[] = "Please enter title";
}
if(!$price){
    $errors[] = "Please enter price";
}
if(!is_dir("images")){
    mkdir('images');
}
function randomString($n){
    $characters = '1234567890qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ';
    $str='';
    for($i = 0; $i < $n; $i++ ){
        $index = rand(0,strlen($characters)-1);
        $str .= $characters[$index];
    }
    return $str;
}

if(empty($errors)){
$image = $_FILES['image'] ?? null;
$imagePath = '';
if($image && $image['tmp_name']){
    $imagePath = 'images/'. randomString(8). '/' .$image['name'];
    mkdir(dirname($imagePath));
    move_uploaded_file($image['tmp_name'],$imagePath);
}

$statement=$pdo->prepare("insert into products(title,image,description,price,create_date) values(:title,:image,:description,:price,:date)");
$statement->bindValue(':title',$title);
$statement->bindValue(':image',$imagePath);
$statement->bindValue(':description',$description);
$statement->bindValue(':price',$price);
$statement->bindValue(':date',$date);
$statement->execute();
header('Location: index.php');
}

//mera apna func
/* function randomName(){
    $n = 10;
    $str = "1234567890qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ";
    $name="";
    for($i=0;$i<$n;$i++){
        $ch = rand(0,strlen($str)-1);
        $name .= $str[$ch];
    }
    return $name;
} */

}
// echo'<pre>';
// var_dump($products);
// echo'</pre>';

// echo'<pre>';
// var_dump($_POST);
// echo'</pre>';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <h1>Create New Product</h1>
   
             <?php if(!empty($errors)){?>
            <div class="alert alert-danger">
            <?php foreach($errors as $error){ ?>
                <div><?php echo $error ?></div>
            <?php } ?>
            </div>
        
            <?php }?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Image</label>
            <br>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $title ?>">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description"><?php echo $description ?></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" step=".01" class="form-control" name="price" value="<?php echo $price?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>