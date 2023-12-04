<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
   
  </style>
</head>
<body style="height:571px">
  
<style>

.my-button {
    background-color: #b47f2f;
}


.my-button:hover {
    background-color: #ce871b;
    
}




.div6key{
    position: relative;
    overflow: hidden;
    border-radius: 16px;
}

.div6key::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    animation: changeBackground 20s infinite; /* ajustez la durée totale en fonction de vos besoins */
    
}

@keyframes changeBackground {
    0% {
        background-image: url('./imag/med/image1.webp');
    }
    6.25% {
        background-image: url('./imag/med/image2.webp');
    }
    12.5% {
        background-image: url('./imag/med/image3.webp');
    }
    18.75% {
        background-image: url('./imag/med/image4.webp');
    }
    25% {
        background-image: url('./imag/med/image5.webp');
    }
    31.25% {
        background-image: url('./imag/med/image6.webp');
    }
    37.5% {
        background-image: url('./imag/med/image7.webp');
    }
    43.75% {
        background-image: url('./imag/med/image8.webp');
    }
    50% {
        background-image: url('./imag/med/image9.webp');
    }
    56.25% {
        background-image: url('./imag/med/image10.webp');
    }
    62.5% {
        background-image: url('./imag/med/image11.webp');
    }
    68.75% {
        background-image: url('./imag/med/image12.webp');
    }
    75% {
        background-image: url('./imag/med/image13.webp');
    }
    81.25% {
        background-image: url('./imag/med/image14.webp');
    }
    87.5% {
        background-image: url('./imag/med/image15.webp');
    }
    93.75% {
        background-image: url('./imag/med/image3.webp');
    }
    100% {
        background-image: url('./imag/med/image1.webp'); /* Revenir à la première image pour une transition fluide */
    }
}



</style>

  <section class="h-100 " style="background-image: url('./imag/pexels-photo-338504.jpeg'); background-size: cover; background-position: center;">
    <div class="container py-5">
      <div class="row" >
        <div class="col-lg-6  div6key"  >
          <h1 class="mb-4 font-weight-bold text-white" style="position:absolute;"  >YouBooking offers much more than just hotel reservations</h1>
          <a href="#" class="text-primary font-weight-bold bg-white mb-4 " style="backdrop-filter: blur(10px); padding:10px; border-radius:15px; margin-top:255px; position:absolute;">Read more about our services</a>
        </div>
        <div class="col-lg-6">
          <div class=" p-4 rounded shadow" style="backdrop-filter: blur(20px);">
            <h2 class="mb-4 font-weight-bold text-white">Sign in to Youbooking</h2>
            <form action="./testscript.php" method="POST">
              <div class="form-group">
                <label for="email">Your email</label>
                <input type="email" name="Email" id="email" class="form-control" placeholder="name@company.com" required>
              </div>
              <div class="form-group">
                <label for="password">Your password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
              </div>
              <div class="form-check">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label">Remember this device</label>
                <a href="#" class="float-right">Lost Password?</a>
              </div>
              <button name="login" type="submit" class="btn text-white btn-block mt-3 my-button" >Login to your account</button>
              <div class="mt-3">
                <p>Not registered yet? <a href="register.php" class="text-primary">Create account</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
