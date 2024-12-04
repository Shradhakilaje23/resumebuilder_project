

<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        include('con3.php');

        $fullname =  $_REQUEST['fullname'];
        $email = $_REQUEST['email'];
        $opinion =  $_REQUEST['opinion'];
       
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO feed VALUES ('$fullname',
            '$email','$opinion')";
         
        if(mysqli_query($con, $sql)){
            echo "<h3><script>alert('Thank you for feedback');
            window.location.href='userhome.php';</script></h3>";
 
            echo nl2br("\n $fullname\n $email\n "
                . "$opinion ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($con);
        }
         
        // Close connection
        mysqli_close($con);
        ?>
    </center>
</body>
 
</html>