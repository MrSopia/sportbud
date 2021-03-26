<?php
    include './includes/db.php';
    $conn = ConnectDB();
    session_start();
    

    $query = "SELECT Token FROM Tokens WHERE IdToken = 1";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $field => $value) {
            $var2 = $value;
        }
    }

    $var1 = $_POST[token];
    
    if($var1 == $var2){
        $_SESSION['session'] = 1;
        header("Location: adminap.php");
        
    }
    else{
        $_SESSION['session'] = 0;
        header("Location: login.php");
        
    }
?>