<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    E-mail: <input type="text" name="email">
    <input type = "submit">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")   {
        $name = $_REQUEST['fname'];
        if (empty($name))   {
            echo "<a href= \"maxresdefault.jpg\"</a>";
        }
        else    {
            //echo "<p style=\"font-size:500px; text-align: center\">$name</p>" ;
            echo $name;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")   {
        $email = $_REQUEST['fname'];
        if (empty($email))   {
            echo "<a href= maxresdefault.jpg</a>";
        }
        else    {
            echo $email ;
        }
    }
?>
</body>
</html>