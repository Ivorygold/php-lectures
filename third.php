<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre";
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>POST</title>
  </head>
  <body >

  
  <form action="<?php  ?>" novalidate method="POST">
    
  <div class="row m-auto">
  <div class=" row "> 
  <div class="col-2">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01"  required>
  </div>
  
  <div class="col-2 mb-2">
    <label for="validationCustomUsername" class="form-label">Email</label>
    <div class="input-group has-validation">
      <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  </div>

<div class=" row">
<div class="col-2 mb-3">
   <label for="floatingPassword">Password</label>
  <input type="password" class="form-control" id="floatingPassword" >
  
</div>

<div class="col-2 mb-3">
   <label for="floatingPassword">Confirm Password</label>
  <input type="password" class="form-control" id="floatingPassword" >
  
</div>
</div>

  <div class=" col-2 mb-3">
  <label class="text" for="inputGroupFile01">Upload cv</label>
  <input type="file" class="form-control" id="inputGroupFile01">
</div>
 
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
  </div>
</form>

  
  </body>
</html>
