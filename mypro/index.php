<?php 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGUKT E-Mart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>


    body{
      color:#f0f9ff;
      background-color:#282d32;
    }
   
   
    
    

    .item.text {
   
    margin-top: 10%;
    float: left;
}

h2{
  font-size: 80px;
  margin-left: 200px;
}

h6{
  margin-left: 260px;  
}

.tex{
  float: right;
}

.btn-sm{
  margin-left: 500px;
  padding-left: 50px;
  padding-right: 50px;
}
img{
  width: 500px;
  margin-right: 85px;
}

.xp{
      
      font-size: 25px;
      color: #34d8eb;
      
      
  }
  p{
  font-size: 15px;
  margin-left: 260px;
}

  .item.text p {
  opacity:0.6;
  
}

a {
  color:inherit;
  text-decoration:none;
  
}
a:hover {
  color:inherit;
  text-decoration:none;
  
}


a:hover {
  opacity:0.8;
}


@media (max-width:767px) {

  .item.text {
    float: left;
  }

  .tex{
    float: right;
  }
  h2{
    font-size: 30px;
     margin-left: 150px;
  }
  {
    font-size: 15px;
  }

  img{
     width: 300px;
     
  }
  .xp{
    font-size: 12px;
    margin-left: 170px;
  }
  p{
    font-size: 12px;
    margin-left: 140px;
  }
  .btn-sm{
    margin-left: 160px;
    margin-right: -20px;
  }
  

}
  </style>
</head>

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
        <a  class="nav-link" href="shopit.php">Shopping</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Add Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display.php">View Product</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" id="clickWord" href="admin.php">Admin</a>
      </li>    
    </ul>
  </div>  
</nav>
 
    </div>
    <div class="mn">
    <div class="col-md-6 item text">
                        <h2><i class="fa fa-university" aria-hidden="true"></i> RGUKT </br>E-Mart <i class="fa fa-shopping-cart" aria-hidden="true"></i>   </h2>
                        <h6 class="xp">All at one place</h6>
</br>
                        <p>Designed by : <a href="https://shyamsportfolio.netlify.app/">Shyam Pujam</a></p>
                        
                        
                    </div>
                    <div class="tex">
                    <img src="cartt.png">
</div>

</div>
<div class="clearfix"></div>
<button type="button" class="btn btn-primary btn-sm"><a href="shopit.php">SHOP NOW</a></button>
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
                <script>
document.getElementById("clickWord").addEventListener("click", function() {
    var enteredPassword = prompt("Only for Admins, Enter password:");
    
    if (enteredPassword !== null) {
      
        window.location.href = "pwd.php?password=" + encodeURIComponent(enteredPassword);
    }
});
</script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>