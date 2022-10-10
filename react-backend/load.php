<?
$username=$_POST['name'];
$rollno=$_POST['rollno'];
$Department=$_POST['Department'];
$email=$_POST['email'];
print($username);

if (true) {
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="skct_Sql";

    $mysqli = new mysqli($servername, $username, $password, $dbname);
print("test case passed");
    
    if(true) {
        $sql = "INSERT INTO `skct_sql` (`name`)
        VALUES ('$username')";
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
}
else{
    echo "connection not established";
    die();
}

?>