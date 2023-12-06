<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  
</head>
<body style="height: 100vh;">

  <section class="h-90 d-flex justify-content-center align-items-center"style="background-image: url('./imag/pexels-photo-338504.jpeg'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row h-50">
        <div class="col-lg-6 mx-auto  p-4 rounded shadow" style="backdrop-filter: blur(19px); border-radius:16px">
          <h2 class="mb-4 mt-4 text-center font-weight-bold text-white bg-primary" style="border-radius:16px">Create an account</h2>
          <form action="./testscript.php" enctype="multipart/form-data" method="post">
            <div class="form-group font-weight-bold text-balck ">
              <label for="Firstname">First Name</label>
              <input type="text" name="Prenom" id="Firstname" class="form-control" placeholder="Mohamed" required >
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="Lastname">Last Name</label>
              <input type="text" name="Nom" id="Lastname" class="form-control" placeholder="HAKI" required>
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="email">Email</label>
              <input type="email" name="Email" id="email" class="form-control" placeholder="name@company.com" required>
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="phone">Phone</label>
              <input type="text" name="Phone" id="phone" class="form-control" placeholder="Phone number" required>
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="password">Password</label>
              <input type="password" name="Mot_de_passe" id="password" class="form-control" placeholder="••••••••" required>
            <div class="form-group font-weight-bold text-balck">
              <label for="image">Profile Picture</label>
              <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="account_type">Account Type</label>
              <select name="typeUser_id" id="account_type" class="form-control">
                <option value="2">Client</option>
                <option value="4">Hotel Owner</option>
              </select>
            </div>
            <div class="form-group font-weight-bold text-balck">
              <label for="infos">more infos</label>
              <input type="text" name="Autres_informations" id="infos" class="form-control" placeholder="more infos suplementaire..">
            </div>
            <button name="register" type="submit" class="btn btn-primary btn-block">Create Account</button>
            <div class="mt-3 text-center">
              <p>Already have an account? <a href="login.php" class="text-primary">Sign In</a></p>
              <p>Go to Home <a href="index.php" class="text-primary">Home</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
