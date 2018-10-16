<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Join Us</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

  <div class = "container">
    <div class = "row">
      <div class = "col-2"></div>
      <div class = "col-6">
        <form action="Includes/signup_dbUpdate.php" method="post">
          <h1>Sign up</h1>
          <div class = "form-row">
            <div class = "form-group col-md-6">
              <input name = "first_name" type = "text" class="form-control" id="first_name" placeholder="First Name">
            </div>
            <div class = "form-group col-md-6">
              <input name = "last_name" type = "text" class="form-control" id="last_name" placeholder="Last Name">
            </div>
          </div>
          <div class = "form-row">
            <div class = "form-group col-md-6">
              <input name = "age" type = "text" class="form-control" id="age" placeholder="Age">
            </div>
            <div class = "form-group col-md-6">
              <input name = "gender" type = "text" class="form-control" id="gender" placeholder="Gender">
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <input name="country" type="text" class="form-control" id="country" placeholder="Country">
          </div>
          <div class="form-group">
            <input name="username" type="text" class="form-control" id="username" placeholder="Username">
          </div>
          <h4>Select Intrests </h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="Politics" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Politics</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="History" id="gridCheck">
                <label class="form-check-label" for="gridCheck">History</label>
              </div>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="Countries" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Countries</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="Inventions" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Inventions</label>
              </div>
            </div>

          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="Monarchs" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Monarchs</label>
              </div>
            </div>
            <div class="form-group col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="intrest_list[]" value="Animals" id="gridCheck">
                <label class="form-check-label" for="gridCheck">Animals</label>
              </div>
            </div>

          </div>
          <input type="submit" class="btn btn-primary" value="Submit" name="submit">
        </form>
      </div>
    </div>
  </div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
