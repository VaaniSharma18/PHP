<?php
//2 ways to make con to database
//1. mysqli and pdo 
$pdo = new PDO('mysql:host=localhost;port=3307;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$search = $_GET['search'] ?? "";
if($search){
    $statement = $pdo->prepare("select * from products where title like :title order by create_date desc");
    $statement->bindValue(":title","%$search%");
   
}else{
  $statement = $pdo->prepare('select * from products order by create_date desc');

}

$statement->execute();

$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo'<pre>';
// var_dump($products);
// echo'</pre>';
// exit;
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
  <h1>Products CRUD</h1>
  <p>
  <a href="create.php" class="btn btn-success">CREATE PRODUCT</a>
  </p>


  <form action="">
    
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search for products" name="search" value="<?php echo $search;  ?>">
      <button class="btn btn-outline-secondary" type="submit">Search</button>
    </div>
  </form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) { ?>
        <tr>
          <th scope="row"><?php echo $i + 1  ?></th>
          <td><img src="<?php echo $product['image']; ?>" class="image"></td>
          <td><?php echo $product['title'] ?></td>
          <td>
            <pre><?php echo $product['description'] ?></pre>
          </td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>
            <form action="delete.php" method="post" style="display: inline-block;">
              <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>

        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>