<?php
    require 'delydbcon.php';
    
    $Name = $_POST["Name"];
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    $Gender = $_POST["Gender"];

    $sql=mysqli_query($con, "SELECT * FROM delyusers WHERE Email='$Email' or Phone='$Phone'");
    $user=mysqli_query($con, "SELECT * FROM delyusers WHERE Username='$Username'");
    
    if(mysqli_num_rows($sql)>=1){

        $response = array();
        $response['messo'] = 2;
    }
    elseif (mysqli_num_rows($user)>=1) {
        $response = array();
        $response['messo'] = 3;
    }
    else{

    $statement = mysqli_prepare($con, "INSERT INTO delyusers (Name, Username, Password, Email, Phone, Gender) VALUES (?, ?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssssis", $Name, $Username, $Password, $Email, $Phone, $Gender);
    mysqli_stmt_execute($statement);

    $response = array();
    $response['messo'] = 1;  
}
echo json_encode($response);

?>