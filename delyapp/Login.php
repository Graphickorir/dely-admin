<?php
    require 'delydbcon.php';
    
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM delyusers WHERE Username = ? AND Password = ? ");
    mysqli_stmt_bind_param($statement, "ss", $Username, $Password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $Id, $Name, $Username, $Password, $Email, $Phone, $Gender, $Company, $Security, $Secque,$Payment);

    $response = array();
    $response["messo"] = 0;
    
    while(mysqli_stmt_fetch($statement)) {
        if ($Company=="") {
            $response = array();
            $response["Id"]=$Id;
            $response["Name"]= $Name;
            $response["Username"]= $Username;
            $response["Password"]= $Password;
            $response["Email"]= $Email;
            $response["Phone"]= $Phone;
            $response["Gender"]= $Gender;
            $response["messo"] = 1;
        }
        elseif ($Security=="") {
            $response = array();
            $response["Id"]=$Id;
            $response["Name"]= $Name;
            $response["Username"]= $Username;
            $response["Password"]= $Password;
            $response["Email"]= $Email;
            $response["Phone"]= $Phone;
            $response["Gender"]= $Gender;
            $response["messo"] = 2;
        }
        elseif ($Payment=="") {
            $response = array();
            $response["Id"]=$Id;
            $response["Name"]= $Name;
            $response["Username"]= $Username;
            $response["Password"]= $Password;
            $response["Email"]= $Email;
            $response["Phone"]= $Phone;
            $response["Gender"]= $Gender;
            $response["messo"] = 3;
        }
        else{
            $response["messo"] = 4; 
            $response["Id"]=$Id;
            $response["Name"]= $Name;
            $response["Username"]= $Username;
            $response["Password"]= $Password;
            $response["Email"]= $Email;
            $response["Phone"]= $Phone;
            $response["Gender"]= $Gender;
            $response["Company"]= $Company;
            $response["Security"]= $Security;
            $response["Payment"]= $Payment;
        } 
    }
    
    echo json_encode($response);
?>