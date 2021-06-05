<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
  <div class="container">
    <form action="./get_post.php" method="POST">
      <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" name="fname" class="form-control" placeholder="Enter name" id="name">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</body>

</html>