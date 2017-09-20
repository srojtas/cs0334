<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>Tip of the Day</title>
</head>
<body>
    <h1>Tip of the day</h1>
    <?php print "<h3>Here's your tip:</h3>";?>
    <div class="tipArea">
        <?php readfile("tips.txt");?>
    </div>
    <p><a href="https://github.com/srojtas/cs0334/tree/master/lab3">Source Code</a></p>
</body>
</html>