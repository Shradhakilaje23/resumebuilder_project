<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home </title>
    <style>
        
        body
        {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
        }
        *{
            margin: 0;
         
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: poppins;
        }
         header
        {
           display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            background-color:palevioletred;
            color:white;
            padding: 20px 0;
        }
        header nav a{
            color: white;
            margin-right: 30px;
            
            font-weight: 700;
            
        }
        header div.sign-in-up button{
            background-color:white;
            font-size: 16px;
            font-weight: 550;
            padding: 4px 12px;
            border: 2px solid black;
            border-radius: 5px;
            outline: none;
            margin-left: 20px;
        }
        header div.sign-in-up button:last-child{
            background-color:yellow;
        
        }
       
        </style>
</head>
<body>

    <header>
   
<h2>

<img  width="60"  height="70" src="images\Resume.png" alt=""></img>RESUME BUILDER</h2>
 
<nav>

    <a href="#">HOME</a>
    <a href="Registration.php">SIGN-UP</a>
    <a href="Ulogin.php">LOGIN</a>
  
</nav>
<div class="sign-in-up">

   <a href="Adminlogin.php" ><button type="button">ADMINLOGIN</button></a>
    <button TYPE="button">LOGOUT</button>
   
    </div>
    
    </header>
   
<img  width="1520"  height="900" src="images\photo2.jpg" alt=""></img>
  
   
</body>
</html>