<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> display details</title>
    <style>
        table
        {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
        h1{
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        td
        {
            background-color: #e4f5d4;
            border: 1px solid black;
        }
        th,
        td {
            font-weight:bold;
            border: 1px solid black;
            padding: 10px;
            text-align:center ;
        }
        td{
            font-weight: lighter; 
        }
        </style>
</head>
<body>
    <center>
   <h2 style="text-decoration:underline ;color:red;text-decoration-color:black ;"> Feedback Details view</h2>
    </center>
    <section>

        <table>

            <tr>
                <br>
                <th>Fullname</th><br>
                <th>Email Id</th>
                <th>Opinion</th>
            </tr>
            <?php
            
            require('con3.php');
            $query1=mysqli_query($con,"select *  from feed");
            while($row=mysqli_fetch_array($query1))
            {

            ?>
            <tr>
                <td><?php echo $row['fullname'];?></td><br>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['opinion'];?></td>
            </tr>
            <?php } ?>
        </table>
    </section>
</body>
</html>