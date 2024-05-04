<?php 
include 'connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<style>

    .frm{
        width: 400px;
        height: 600px;
        background-color: #353836;
        margin-top: 40px;
        padding: 40px;
        border-radius: 20px;
        margin-left: 35%;
        color: #fff;
        
    }
    .popup {
      display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
          width: 400px;
          height: 500px;
            padding: 20px;
          
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
           
        }
        .background-overlay {
          display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9998;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .blurred {
            filter: blur(8px); 
        }

        
        .pimg{
          width: 250px;
          height: 300px;
        }
    #rst{
        background-color: red;
    }

    img{
        width:100px;
        margin-left: 35%;
    }
    .fnl{
        margin-top: 30px;
        margin-left: 20%;
        padding-bottom: 20px;
    }

    .redo{
      margin-right: 10%;
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

.footer-dark a:hover {
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

#showCustomAlertButton, #showPopupButton{
  height:25px;
  font-size: 12px;
   width: 60px;
  border-radius: 5px;
  margin-bottom: 5px;
}

#showPopupButton{
  width: 100px;
}

.par{
  color: black;
}
h5{
  color: black;
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
        <a class="nav-link" id="clickWord">Customers</a>
      </li>    
    </ul>
  </div>  
</nav>
 
    </div>


     
    <div>
    <?php
   if(isset($_GET['edit'])){
    $edit_id = $_GET['edit'];
    $edit_query = mysqli_query($con, "Select * from `productdata` where id=$edit_id");
    if(mysqli_num_rows($edit_query)> 0){
      
    $fetch_data=mysqli_fetch_assoc($edit_query);
    $image=$fetch_data['image'];
     
    
        ?>


<div class="frm" id="fom">
    <form  method="post" enctype="multipart/form-data" action="tq.php">
    <div class="redo">
    <?php echo '
    <td><img src='.$image.' /></td>'
 
     ?>
    

    <div class="fnl">
      
  <label>Product Name :&nbsp; <?php echo $fetch_data['productname']?></label></br>
  <label>Product Cost :&nbsp; <?php echo $fetch_data['productprice']?>.₨</label></br>
  
  <button id="showCustomAlertButton" >Pay</button>

  <div class="modal fade" id="customAlertModal" tabindex="-1" role="dialog" aria-labelledby="customAlertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customAlertModalLabel" class="pr">Payment Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <p class="par"> Pay the Amount to : 7680876827 PhonePay, GooglePay, Paytm are Accepted !</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


  <div class="modal fade" id="mal" tabindex="-1" role="dialog" aria-labelledby="customAlertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customAlertModalLabel" class="pr">Thankyou!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <p class="par"> If the provided Transaction Id is correct you will get the product(you will recive call from our team) with in 2 working days. If you are facing any problem contact us, the amount is fully refunded !</p>
                </div>
                <div class="modal-footer">
                    <button  type="button" class="btn btn-secondary" data-dismiss="modal" href="shopit.php">Done</button>
                </div>
            </div>
        </div>
    </div>




  <button id="showPopupButton">Show QR Code</button>
  
    <div class="background-overlay" id="backgroundOverlay"></div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4"  name="uname" class="form-control" placeholder="Enter your Name" required />
   
  </div>

  <div class="form-outline mb-4">
    <input type="number" id="form6Example6"  name="phone" class="form-control" placeholder="Enter Mobile Number" required/>
    
  </div>

  <div class="form-outline mb-4">
    <input type="char" id="form6Example6"  name="ti" class="form-control" placeholder="Enter Transaction ID"/>
    
  </div>
    </div>
    </div>
 

  
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit" id="shw"> Purchase</button>
  
</form>
</div>


    <?php
    }

}

    ?>








    <div id="imagePopup" class="popup">
    <div class="cpop">
  <button id="closePopupButton">X</button>
        <img src="./images/payimg.jpeg" alt="Popup Image" class="pimg">
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
      
        const cdv = document.querySelector(".frm");
        const backgroundOverlay = document.getElementById("backgroundOverlay");
        document.getElementById("showPopupButton").addEventListener("click", function() {
            document.getElementById("imagePopup").style.display = "block";
            backgroundOverlay.style.display = "block";
            cdv.classList.add("blurred");
            backgroundOverlay.style.opacity = 1;
        });

        document.getElementById("closePopupButton").addEventListener("click", function() {
            document.getElementById("imagePopup").style.display = "none";
            backgroundOverlay.style.display = "none";
            cdv.classList.remove("blurred");
            backgroundOverlay.style.opacity = 0;

        });

         document.getElementById("showCustomAlertButton").addEventListener("click", function() {
            $('#customAlertModal').modal('show');
        });

         document.getElementById("shw").addEventListener("click", function() {
            $('#mal').modal('show');
        });

        
    </script>
    <script>
document.getElementById("clickWord").addEventListener("click", function() {
    var enteredPassword = prompt("Only for Admins, Enter password:");
    
    if (enteredPassword !== null) {
      
        window.location.href = "pwd.php?password=" + encodeURIComponent(enteredPassword);
    }
});
</script>
</body> 
</html>