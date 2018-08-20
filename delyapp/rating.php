<?php
    require 'delydbcon.php';

    $rating = '3.5';
    $part = '2';
    $id = '7';

    $stmt = ("INSERT INTO partrating (Partner_id, User_id, Rating) VALUES ('$part','$id','$rating')");
    $sql=mysqli_query($con, "SELECT * FROM partrating WHERE Partner_id='$part' AND User_id='$id'");

    if(mysqli_num_rows($sql)>=1){
        $response = array();
        $response['messo'] = 3;
    }
    else{
        if (mysqli_query($con, $stmt)) {
            $response = array();
            $response["messo"] = 1;
        } else {
            $response = array();
            $response["messo"] = 2;
        }
    }

    echo json_encode($response);
?>