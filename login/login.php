<!DOCTYPE html>
<html lang="en">
<head>
  <title>COVID</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../plugin/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../plugin/Javascript/jquery.min.js"></script>
  <script type="text/javascript" src="../plugin/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <center><h1>Log In</h1></center>
      </div>  
      <div class="modal-body">
        <form action="proses-login.php" method="post" role="form">
          <div class="form-group">
            <label for="text">Username</label>
            <input type="text" name="username" id="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>  
          
        </form>
      </div>
    </div>
  </div>


</body>
</html>