<?php 
include 'connect.php'; 

if(isset($_POST['submit'])){
  $naa = $_POST['me'];
  $mll = $_POST['ail'];
  $mgg = $_POST['message'];

      $sql="insert into `messagedata` (name,email,msg) values 
      ('$naa','$mll','$mgg')";
      
      $result=mysqli_query($con,$sql);

     

      if($result){
        
          $unique_id = $con->insert_id;
          
      }
      else{
        die(mysqli_error($con));
      }
      
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
         .frm{
        width: 350px;
        height: 520px;
        background-color: #353836;
        margin-top: 40px;
        margin-left: 35%;
       
        padding: 40px;
        border-radius: 20px;
        
        color: #fff;

    }
      
      .pp{
        margin-top: 20px;
      }
    @media(max-width: 768px){
        .frm{
            margin-left: 10%;
        }
        
    }

    .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
  margin-top: 20px;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark a {
  color:inherit;
  text-decoration:none;
  
}

.footer-dark ul a:hover {
  opacity:0.8;
}

.footer-dark a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:center;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}
.xp{
      
      font-size: 14px;
      color: #34d8eb;
      margin-left: 3%;
      
  }
.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}



.ite.socia > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.5;
}

.ite.socia > a:hover {
  opacity:1;
}

.sp{
        font-size: 12px;
        color: #0d80d9;
        padding-bottom: 20px;
      }


</style>
<body>

<div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div>
  <a class="navbar-brand" href="index.php">RGUKT <i class="fa fa-shopping-cart" aria-hidden="true"> E-Mart </i></a>
  
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="shopit.php">Shopping</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">View Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="clickWord">Admin</a>
      </li>     
    </ul>
  </div>  
</nav>
 
    </div>
<div class="frm">
    <h3>Contact us</h3>
    <div class="pp">

    <form  method="post" enctype="multipart/form-data" id="myForm">
  
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" id="name" class="form-control" placeholder="Name" name="me" />
    
  </div>


  <div class="form-outline mb-4">
    <input type="email" id="form4Example2" id="email" class="form-control" placeholder="Email" name="ail" />
   
  </div>


  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"  id="mesg" type="text" placeholder="Message" name="message"></textarea>
    
  </div>

 

  <button type="submit" class="btn btn-primary btn-block mb-4" value="Send" name="submit">Send</button>
</form>

</div>
<label class="sp" >Feel free to message us in any platform</label>
<div class="col ite socia">
                      <a href="https://www.linkedin.com/in/shyam-pujam-568abb1bb"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                      <a href="https://www.facebook.com/shyam.micky.9?mibextid=ZbWKwL"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                      <a href="https://instagram.com/iamshyam___?igshid=MzNlNGNkZWQ4Mg=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href="https://twitter.com/PujamShyam?t=tbymNRgppuvEAjlNYtl_CQ&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                </div>
</div>

<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="addproduct.php">You can Sell anything</a></li>
                            <li><a href="shopit.php">You can Buy anything</a></li>
                            <li><a href="display.php">You can delete your Product based on product key</a></li>
                            <li><a href="addproduct.php">You can directly contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        
                        
                             <a href="about.php"><h3>About</h3></a>
                            <a href="contact.php"><h3>Contact</h3></a>
                        
                    </div>
                    <div class="col-md-6 item text">
                        <h2><i class="fa fa-university" aria-hidden="true"></i>  RGUKT </br>E-Mart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </h2>
                        <h6 class="xp">All at one place</h6>
</br>
                        <p>Designed by : <a href="https://shyamsportfolio.netlify.app/">Shyam Pujam</a></p>
                    </div>
                    <div class="col item social">
                      <a href="https://github.com/pujamshyam"><i class="fa fa-github" aria-hidden="true"></i></i></a>
                      <a href="https://www.linkedin.com/in/shyam-pujam-568abb1bb"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                      <a href="https://www.facebook.com/shyam.micky.9?mibextid=ZbWKwL"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                      <a href="https://instagram.com/iamshyam___?igshid=MzNlNGNkZWQ4Mg=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                      <a href="https://twitter.com/PujamShyam?t=tbymNRgppuvEAjlNYtl_CQ&s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                </div>
                <p class="copyright">RGUKT E-Mart Shyampujam © 2023</p>
            </div>
        </footer>
    </div>
    <script>
      
      const form = document.getElementById("myForm");

    form.addEventListener("submit", function(event) {
        const nameInput = document.getElementById("name");
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("mesg");

        // Check if the name is not empty
        if (nameInput.value.trim() === "") {
            alert("Please enter your name.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Check if the email is valid
        if (!isValidEmail(emailInput.value)) {
            alert("Please enter a valid email address.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Check if the password meets your criteria
        if (passwordInput.value.length < 6) {
            alert("Password must be at least 6 characters long.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Form is valid, allow submission
        alert("Form submitted successfully!");
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
      
        
        
       
        
      
document.getElementById("clickWord").addEventListener("click", function() {
    var enteredPassword = prompt("Only for Admins, Enter password:");
    
    if (enteredPassword !== null) {
      
        window.location.href = "pwd.php?password=" + encodeURIComponent(enteredPassword);
    }
});
</script>

</body>
</html>