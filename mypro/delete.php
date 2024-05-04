

<?php

include 'connect.php';

$response = array();

if (isset($_GET['id'])) {
   
    $userInput = $_GET['id'];
    $sanitizedInput = mysqli_real_escape_string($con, $userInput);

   
    $query = "DELETE FROM productdata WHERE id = '$sanitizedInput'";

    
    $result = mysqli_query($con, $query);

    if (mysqli_affected_rows($con) > 0) {

        $response['status'] = true;
        $response['message'] = "Product Deleted successfully !";
        
       
    } else {
        
        $response['status'] = false;
        $response['message'] = "Incorrect Productkey !";
        
       

    }
    echo json_encode($response);
}

?>


























