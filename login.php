<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style1.css'>
    <script src='main.js'></script>
</head>
<body bgcolor="#f4511e">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>" method="post">
    <fieldset class="fild">
        <legend>Login</legend>
<!-- <label for="name" >Name:</label> -->
<input type="text" name="name1" placeholder="Enter Uesrname"><br><br>
<!-- <label for="name" ></label> -->
<input type="password" name="pass" placeholder="Enter Password"><br><br>
<input type="submit" name="sub" value="Login">
</fieldset>
    </form><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>" method="post">
    <fieldset class="fild">
        <legend>SignUp</legend>
<input type="text" name="name1" placeholder="Enter Name"><br><br>
<input type="text" name="name1" placeholder="Enter Uesrname"><br><br>
<input type="text" name="name1" placeholder="Enter Mobile Number"><br><br>
<input type="password" name="pass" placeholder="Enter Password"><br><br>
<input type="submit" name="sub" value="SignUp for free">

</fieldset>
    </form>
    <?php
    if(isset($_POST['sub']));
$Fname= $_POST['name1'];
$Lname= $_POST['pass'];
    
    echo "<b> <p>$Fname $Lname </p>  </b>";
    ?>
</body>
</h