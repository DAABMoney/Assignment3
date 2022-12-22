<?php
require_once 'db/dbconn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    
    $result = $crud->editDetails($id, $fname, $lname, $gender, $email, $address1, $address2);
    if($result){
        header("Location: viewrec.php");
    
    }else{
        echo '<h2 class="text-danger">Error updating participant information. <br/>
            Please go back and try again or contact your system administrator</h2>';
    }
}
else{

}

?>