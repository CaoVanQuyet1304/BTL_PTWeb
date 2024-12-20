<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header("location : login.php?error=Username is required");
        exit();
    }elseif(empty($password)){
        header("location : login.php?error=Password is required");
        exit();
    }else{
        echo "slo";
    }
}else{
    header("location : login.php");
}

?>