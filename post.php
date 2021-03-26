<?php 
$name = $_POST[name];
$date = $_POST[date];
$post = $_POST[post];

include "./includes/db.php";
$conn = ConnectDB();
$sql = "INSERT INTO BlogUsers (Name, Post, Date) VALUES ('$name','$post','$date')";
mysqli_query($conn, $sql);

/*      Debugging error for db
if (mysqli_query($conn, $sql)) {
    echo "succes";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

header("Location: adminap.php");
?>