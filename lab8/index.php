<!DOCTYPE html>
<html lang=en>
    <head>
        <title>Lab 8 - Guestbook</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h1>Guestbook</h1>
                    <p><a href="https://github.com/srojtas/cs0334/tree/master/lab8">Source Code</a></p>
                    <form action="index.php" method="post">
                        <label for="fName">First Name: </label>
                        <input type="text" name="fName">
                        <br>
                        <label for="lName">Last Name: </label>
                        <input type="text" name="lName">
                        <br>
                        <label for="address">Address: </label>
                        <input type="text" name="address">
                        <br>
                        <label for="school">School: </label>
                        <input type="text" name="school">
                        <br>
                        <label for="email">Email: </label>
                        <input type="email" name="email">
                        <br>
                        <label for="fbPg">Facebook username: </label>
                        <input type="text" name="fbPg">
                        <br>
                        <label for="phone">Phone: </label>
                        <input type="tel" name="phone">
                        <br>
                        <label for="major">Major: </label>
                        <input type="text" name="major">
                        <br>
                        <label for="gpa">GPA: </label>
                        <input type="text" name="gpa">
                        <br>
                        <label for="year">Year: </label>
                        <input type="text" name="year">
                        <br>
                        <label for="comments">Comments: </label>
                        <textarea name="comments" rows="20" cols="20"></textarea>
                        <br>
                        <button type="submit" name="submit">Submit</button>
                    </form>
        <?PHP
            if($_POST) {
                if($_POST["fName"] != null || $_POST["lName"] != null || $_POST["address"] != null || $_POST["school"] != null || $_POST["email"] != null || $_POST["fbPg"] != null || $_POST["phone"] != null || $_POST["major"] != null || $_POST["gpa"] != null || $_POST["year"] != null || $_POST["comments"] != null) {
                    $file = fopen("entries.mas", "a");
                    $toWrite = "First Name: " . $_POST["fName"] . ", Last Name: " . $_POST["lName"] . ", Address: " . $_POST["address"] . ", School: " . $_POST["school"] . ", Email: " . $_POST["email"] . ", Facebok Page: " . $_POST["fbPg"] . ", Phone Number: " . $_POST["phone"] . ", Major: " . $_POST["major"] . ", GPA: " . $_POST["gpa"] . ", Year: " . $_POST["year"] . ", Comments: " . $_POST["comments"] . "\n"; 
                    fputs($file,$toWrite);
                    echo "<p>Submitted</p>";
                    fclose($file);
                }
                else {
                    echo "<p>Please complete all entries on this page to submit to the guestbook.</p>";
                }
            }
            $readFile = fopen("entries.mas", "r");
        ?>
                                    </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Entries</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP
                       while(! feof($readFile)) {
                            echo "<tr>";
                                echo "<td>" . fgets($readFile) . "</td>";
                            echo "</tr>";
                       }
                    fclose($readFile);
                    ?>
                </tbody>
            </table>
                </div>
                <div class="col=xs-3 col-sm-3 col-md-3 col-lg-12"></div>
            </div>
        </div>
    </body>
</html>