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
            background-color:#1E90FE;
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
            margin-left: 890px;
        }
        header div.sign-in-up button:last-child{
            background-color:yellow;
        
        }
        .container {
  position:center;
  width: 1520px;
   max-width: 400px;
}

.container img {
  width: 1520px;
  height: auto;
}

.container .btn {
  position:absolute ;
  top: 50%;
  left: 50%;

  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: palegoldenrod;
  color: white;
  font-size: 22px;
  padding: 18px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align:center;
  
  float:center;
}

.container .btn:hover {
  background-color: black;
}


        </style>
</head>
<body>

    <header>
   
<h2>
<center>
<img  width="50"  height="50" src="images\resume (1).png" alt=""></img>RESUME BUILDER</h2>
</center>

<nav> 

  
</nav>
<div class="sign-in-up">

 
<a href="feedback.php" ><button type="button">FEEDBACK FORM</button></a><br/>
</br>
 <a href="Resumebuilder.php"><button TYPE="button">LOGOUT</button></a>
 </div>
   

    
    </header>

    <div class="container">
 
    <a href="Resumeform.php"><button class="btn">CreateResume</a></button>
    
    
   

  
    <img  width="1520"  height="900" src="images\img1.jpg" alt=""></img>
  
</div>
    
   
</body>
</html>