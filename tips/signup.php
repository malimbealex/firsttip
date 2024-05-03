<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a74017347a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <title>signup</title>
</head>
<body>
    <div class="container-fluid">
    <?php include 'includes/header.php'?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
  <form action="">
    <label for="name">User Name</label>
    <input type="text" id="user_name" name="user_name" placeholder="Your user_name..">
    <label for="telephone">Your telephone</label>
    <input type="telephone" id="telephone" name="telephone" placeholder="Your telephone number..">

    <label for="email">Your Email </label>
    <input type="email" id="email" name="email" placeholder="Your email..">

    <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
    
  <button type="button" class="btn btn-primary">submit</button>
  </form>
</div>

        
        <div class="col-sm-4"></div>
    

    
    







<?php include 'includes/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
 <script src="bootstrap/jquery.min.js"></script>
  
  <script src="script.js"></script>
  </div>
</body>
</html>