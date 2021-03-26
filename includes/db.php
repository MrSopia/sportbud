<?php
    function ConnectDB(){
        $dbHost = "ID329040_sportbud.db.webhosting.be";
        $dbUsername = "ID329040_sportbud";
        $dbPassword = "SportBudG@ng2021";
        $dbName = "ID329040_sportbud";
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($conn == false){
            die("RIP CONNECTION");
        }
        return $conn;
    }

    function getQuery($sql){
        //Make db connection
        $conn = ConnectDB();

        // fetch results
        $result = mysqli_query($conn, $sql);

        //return results in associated array
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function sendQuery($var1,$var2,$var3){
        $conn = ConnectDB();
        $sql = "INSERT INTO BlogUsers (Name, Post, Date) VALUES ('$var1','$var2','$var3')";

        if (mysqli_query($conn, $sql)) {

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

?>