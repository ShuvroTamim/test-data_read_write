<?php
    include_once('resources/header.php');
    include_once('resources/connection.php');

    //Connection Check
    // if ($conn->connect_error) {
    //     die("Connection Failed: " . $conn->connect_error);
    // }else {
    //         echo "Connected Successfully.";
    // }

    //Data read from the database to show in the table
    $data = $conn->query("SELECT* FROM model_info");  
    // data er majhe DB er shobgula data store kora hoice
    // while($dt = $data->fetch_assoc()){  --onkgula data theke ekti ekti kore data fetch kora holo
    //     echo $dt['model_name']; --evabe show kora hocce.
    //     echo $dt['price'];
    //     echo $dt['quamtity'];
    // }
?>

<div class="container">
        <h3 class="text-center mt-3 text-info">Smart Phone Information</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Model Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($dt = $data->fetch_assoc()) {?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $dt['model_name'] ?></td>
                        <td><?php echo $dt['price'] ?></td>
                        <td><?php echo $dt['quantity'] ?></td>
                    </tr>
                <?php }?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Iphone</td>
                        <td>$900</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Iphone</td>
                        <td>$900</td>
                        <td>100</td>
                    </tr> -->
            </tbody>
        </table>
</div>

<?php
    include_once('resources/footer.php');
?>