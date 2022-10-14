<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];

    $sql="select * from registration where name='$name' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            //echo "login successfull";
            header('location:display.php');

        }else{
            echo "invalid information";
        }
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login page</title>
  </head>
  <body>
     <div class="container my-5">
      <form method="post">
       <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
      </div>
      <div class="form-group">
       <label>password</label>
       <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
      </div>
    <button class="btn btn-primary" type="submit" name="submit">login</button>
    </form>
     </div>
  </body>
</html>