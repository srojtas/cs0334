<?php
    include 'dbconn.php';
    if($_POST) {
        $queryName = "INSERT INTO `srojtas001_cs334lab10`.`customers` (`userName`, `address`, `city`, `state`, `zip`, `country`, `firstName`, `lastName`) VALUES ('" . $_POST["userName"] . "', '" . $_POST["address"] . "', '" . $_POST["city"] . "', '" . $_POST["state"] . "', '" . $_POST["zip"] . "', '" . $_POST["country"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "');";
        
        if ($result = mysqli_query($dbconnect, $queryName))
            header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 10</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col xs-12">
                    <h1>Lab 10</h1>
                    <h2>Add Customer</h2>
                    <h3><a href="index.php">Home</a></h3>
                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label for="userName">Username:</label>
                            <input type="text" class="form-control" id="userName" name="userName">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name ="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="addresss" name="address">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP:</label>
                            <input type="text" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>