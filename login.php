<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Optionally, you can include your own CSS -->
  <style>
    /* Your custom CSS here */
  </style>
</head>
<body style="height:571px">
  

  <section class="h-100" style="background-image: url('./imag/pexels-photo-338504.jpeg'); background-size: cover; background-position: center;">
    <div class="container py-5">
      <div class="row" >
        <div class="col-lg-6"  >
          <h1 class="mb-4 font-weight-bold text-white" style="backdrop-filter: blur(10px); padding:10px; border-radius:15px" >We invest in the world’s potential</h1>
          <p class="mb-4 font-weight-bold text-white" style="backdrop-filter: blur(10px); padding:10px; border-radius:15px">Here at YOUBOOKING we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
          <a href="#" class="text-primary font-weight-bold bg-white" style="backdrop-filter: blur(10px); padding:10px; border-radius:15px">Read more about our services</a>
        </div>
        <div class="col-lg-6">
          <div class="bg-white p-4 rounded shadow">
            <h2 class="mb-4">Sign in to Youbooking</h2>
            <form action="script.php" method="post">
              <div class="form-group">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required>
              </div>
              <div class="form-group">
                <label for="password">Your password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
              </div>
              <div class="form-check">
                <input type="checkbox" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember this device</label>
                <a href="#" class="float-right">Lost Password?</a>
              </div>
              <button name="login" type="submit" class="btn btn-primary btn-block mt-3">Login to your account</button>
              <div class="mt-3">
                <p>Not registered yet? <a href="register.php" class="text-primary">Create account</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Bootstrap JS and jQuery (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
