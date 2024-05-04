
<?php
require_once('./connect.php');


if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $phn = $_POST['phone'];
    $pname = $_POST['prdctname'];
    $image = $_FILES['file'];
    $price = $_POST['prdctprice'];

    
    $imagefilename=$image['name'];
    $imagefiletemp=$image['tmp_name'];

    $filename_separate=explode('.',$imagefilename);

    $file_extension=strtolower(end($filename_separate));

    $extension=array('jpeg','jpg','png');
    if(in_array($file_extension,$extension)){
        $upload_image='images/'.$imagefilename; 
        move_uploaded_file($imagefiletemp,$upload_image);

        $sql="insert into `productdata` (username,mobile,productname,image,productprice) values 
        ('$user','$phn','$pname','$upload_image','$price')";
        
        $result=mysqli_query($con,$sql);

       

        if($result){
          $unique_id = $con->insert_id;
        

          
          echo "<script>alert('Congratulations🎉 your Product is Added, Your Productkey is : " .$unique_id." ');</script>";
            
        }
        else{
          die(mysqli_error($con));
        }
        
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      img{
        width: 200px;
      }
      .table-bordered{
        width: 60;
      }
      .fa-trash{
        color: red;
        margin-top: 50%;
        margin-left: 40%;
        
      }

      .fa-trash:active{
        transform: translateY(2px);
        
      }
      @media(max-width: 768px){
        img{
          width: 120px;
        }
        h1{
        font-size: 30px;}
       
        .table-bordered{
         
          width: 200px;
        }

        .th,tr{
          font-size: 13px;
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
    
    <h1 class="text-center my-4">Products</h1>
    <div class="container mt-5 d-flex justify-content-center ">
    
    <?php

     $sql="Select * from `productdata`";
     $result=mysqli_query($con,$sql);
    
     $nm = 1;
     if(mysqli_num_rows($result) > 0){

      echo '
      
      <table class="table table-bordered" >
  <thead class="table-dark">
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Prouduct Image</th>
      <th scope="col">Prouduct Price</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
      
      ';
     while($row=mysqli_fetch_assoc($result)){
        $nbr=$row['id'];
        $pname=$row['productname'];
        $image=$row['image'];
        $prc = $row['productprice'];
        
        echo '
        <tr>
        <td>'.$nm.'</td>
        <td>'.$pname.'</td>
        <td><img src='.$image.' /></td>
        <td>'.$prc.'.₨</td>
        <td>
        <a onclick="deleteUser()"><i class="fa fa-trash"></i></a>
        
        
      
        
    
      </tr>';
     
      $nm++;
     }
    }
    else{
      echo "<div class='nprct'>No products are Added !</div>";
    }
    
     

    ?>
    
    
    
  </tbody>
</table>

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
function deleteUser() {

  var userInput = prompt("Enter the Productkey :");

  
  if (userInput !== null && userInput.trim() !== "") {
   
    var confirmDelete = window.confirm("Are you sure you want to delete this product ?");

    if(confirmDelete){
    fetch("delete.php?id=" + encodeURIComponent(userInput))
    .then(response => response.json())
    .then(data => {
      if(data.status){
        alert(data.message);
        window.location.href="display.php";
        
      }
      else{
        alert(data.message);
      }
     
    })
    .catch(error =>{
      alert("An error occurred");
    });
  }
}
 
}
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