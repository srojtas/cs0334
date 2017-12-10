<?php
    include 'dbconn.php';
    if($_POST) {
        $queryName = "UPDATE `srojtas001_cs334lab10`.`customers` SET `userName`='" . $_POST["userName"] . "', `address`='" . $_POST["address"] . "', `city`='" . $_POST["city"] . "', `state`='" . $_POST["state"] . "', `zip`='" . $_POST["zip"] . "', `country`='" . $_POST["country"] . "', `firstName`='" . $_POST["firstName"] . "', `lastName`='" . $_POST["lastName"] . "' WHERE `customerID`='" . $_POST["customerID"] . "';";
        if ($result = mysqli_query($dbconnect, $queryName))
            header("Location: index.php");
    }
    if(isset($_GET["customerID"])) {
        $customerID = $_GET["customerID"];
        $queryName = 'SELECT * FROM srojtas001_cs334lab10.customers WHERE customerID LIKE "' . $customerID . '";';
        if ($result = mysqli_query($dbconnect, $queryName)) {
            $row = $result->fetch_row();
            $userName = $row[1];
            $address = $row[2];
            $city = $row[3];
            $state = $row[4];
            $zip = $row[5];
            $country = $row[6];
            $firstName = $row[7];
            $lastName = $row[8];
        }
    } else {
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
                    <h2>Edit Customer</h2>
                    <h3><a href="index.php">Home</a></h3>
                    <form action="edit.php" method="post">
                        <input type="hidden" name="customerID" value="<?php echo $customerID; ?>">
                        <div class="form-group">
                            <label for="userName">Username:</label>
                            <input type="text" class="form-control" id="userName" name="userName" value="<?php echo $userName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name ="firstName" value="<?php echo $firstName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="addresss" name="address" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>">
                        </div>
                        <div class="form-group">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state" name="state" value="<?php echo $state; ?>">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP:</label>
                            <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $zip; ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>