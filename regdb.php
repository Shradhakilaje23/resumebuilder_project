<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
        include('con2.php');

         $UserName =  $_REQUEST['UserName'];
        $Email = $_REQUEST['Email'];
        $Password =  $_REQUEST['Password'];
       
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user_register  VALUES ('$UserName',
            '$Email','$Password')";
         
        if(mysqli_query($con, $sql)){
            echo "<h3><script>alert('registered successfully');
            window.location.href='Ulogin.php';</script></h3>";
 
            echo nl2br("\n $UserName\n $Email\n "
                . "$Password ");
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