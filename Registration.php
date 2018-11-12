<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>


        <link rel="stylesheet", type ="text/css", media = "all",  href = "Style.css">


</head>
<body>


    <form action="Registration.php", method="post">

        <input type="text", name ="user_name" placeholder="enter user name">
    <br>
        <input type="password", name = "password" placeholder="create your password">
    <br>
        <input type="submit", placeholder="submit", name="submit">

    </form>
    <?php

    if(isset($_POST['submit'])){

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
         echo "<h1 class = key> submitted </h1>";
        $json_string = json_encode($_POST);
        echo $json_string;
    }

?>




</body>
</html>
