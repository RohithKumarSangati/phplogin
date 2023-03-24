<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header">
            Signup Form
          </div>
          <div class="card-body">
            <form action='register.php' method='post'>
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name='name' placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" name='email' aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control"  name='password' placeholder="Password">
              </div>
              <div class="form-group">
                <label for="inputPassword">Age</label>
                <input type="number" class="form-control"  name='age' placeholder="Password">
              </div>
              <div class="form-group">
                <label for="inputPassword">Mobile</label>
                <input type="tel" class="form-control"  name='mobile' placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Signup</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
          <span class="d-block">Already have an account?</span>
          <a href="form.php" class="text-primary">Login</a>
        </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>



