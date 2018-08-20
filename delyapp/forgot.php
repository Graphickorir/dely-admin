<?php
    require 'delydbcon.php';

    $email = $_POST["Email"];

    $stmt = $con->prepare("SELECT delyusers.Secans,delysecque.Question FROM delyusers  LEFT JOIN delysecque ON delyusers.Secque = delysecque.Id_sec WHERE Email= '$email'");
    $stmt->execute();
    $stmt->bind_result($ans,$que);
    
    while($stmt->fetch()){
        if($que == ''){
            $response = array();
            $response["messo"] = 2;
        }else{
            $response = array();
            $response["messo"] = 1;
            $response["Question"] = $que;
            $response["Answer"] = $ans;
        }
    }
    echo json_encode($response);
?>