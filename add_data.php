<?php
    include_once('resources/header.php');
    include_once('resources/connection.php');

    if (isset($_POST['submit'])) {
        $model_name = $_POST['model_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        if (empty($model_name) or empty($price) or empty($quantity)) {
            echo "Field Can't be empty!";
        }else {
            $conn->query("INSERT INTO model_info(`model_name`, `price`, `quantity`)
            VALUES('$model_name', $price, $quantity)
            ");
        }
    }
?>

<div class="container mt-5">
    <form action="" method="post" class="w-50 m-auto">
        <div class="form-group">
            <input type="text" class="form-control" name="model_name" placeholder="Enter Model Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" value="add">
        </div>
    </form>
</div>

<?php
    include_once('resources/footer.php');
?>