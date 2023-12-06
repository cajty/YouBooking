



<style>

.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: -106px;
    margin-top: var(--bs-dropdown-spacer);
   
}



.navbar>.container, .navbar>.container-fluid, .navbar>.container-lg, .navbar>.container-md, .navbar>.container-sm, .navbar>.container-xl, .navbar>.container-xxl {
    display: flex;
    flex-wrap: inherit;
    align-items: center;
    justify-content: space-between;
    height: 60px;
    z-index: 999;
    
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
    background-color: #23242b;
    width: 100%;
    padding: 0 10px 0 10px;
}
img {
    border-radius: 6px;
    /* width: 100%; */
    /* height: 100%; */
}


.profile-pic img {
    border-radius: 6px;
    
    width: 30px;
    height: 30px;
}




</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="./imag/med/logo.png" style="width:70px; height: 40px;" > </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php   if(isset($_SESSION["typeUser_id"])){
         $sess=$_SESSION['ID'];
         $requete="SELECT * FROM utilisateurs WHERE id = $sess";
         $query = mysqli_query($con, $requete);
         $rows = mysqli_fetch_assoc($query);
         $fullname = $rows["Prenom"];
         $image = $rows["image"];   
         
        
                    echo"
                    <li class='nav-item'style='font-size:16px; color:white; font-weight:900;  '>Welcome Back $fullname</li>
                    <li class='nav-item'>
          <a style='background-color:#ca8300; border-radius:10px; margin-left:10px; '; class='nav-link active' aria-current='page' href='./logout.php'>Logout</a>
          
        </li>
         ";
                  
               
                }else{
                    echo "
                    <li style='font-size:16px; color:white; font-weight:900; background-color:#ca8300; border-radius:10px; margin-right:10px; margin-top:10px;'> <a href='./register.php'> register</a> </li>
                ";
                echo "
                <li style='font-size:16px; color:white; font-weight:900; background-color:#0f599d; border-radius:10px; margin-right:10px; margin-top:10px;'> <a href='./login.php'> Login</a> </li>
            ";
                }
                ?>

        
        
        
      </ul>
      
      <?php  
      if(isset($image)){
      
      }else{
        $image='no-profile-pic-icon-27.jpg ';
      }
        echo "
      <ul class='navbar-nav ms-auto mb-2 mb-lg-0 profile-menu'> 
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
            <div class='profile-pic'>
            
                <img  src='./images/users/$image ';  class='rounded-circle me-2'>
             </div>
         
          </a>
          <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <li><a class='dropdown-item' href='../profile.php'><i class='fas fa-sliders-h fa-fw'></i> Account</a></li>
            <li><a class='dropdown-item' href='#'><i class='fas fa-cog fa-fw'></i> Settings</a></li>
            <li><hr class='dropdown-divider'></li>
            <li><a class='dropdown-item' href='logout.php'><i class='fas fa-sign-out-alt fa-fw'></i> Log Out</a></li>
          </ul>
        </li>
     </ul>
     ";
     ?>
    </div>
  </div>
</nav>








