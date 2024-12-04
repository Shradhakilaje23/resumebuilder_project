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
            text-align: center;
        }
        header nav a{
            color: white;
            margin-right: 30px;
            text-align: center;
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
        .b1{background-image: linear-gradient( 135deg, #FFB6c1 10%, #4b0082 100%);}
          .b1{
               border:none;height: 50px;width: 300px;
                transition: 0.5s;
               background-size: 200% auto;
              color: white;            
                box-shadow: 0 0 20px #eee;
               border-radius: 15px;
                 display: block;
                 }
                 
            .b1:hover {
               background-position: right center; /* change the direction of the change here */
                color: #fff;
                text-decoration: none;
                }
       
        </style>
</head>
<body>

    <header>
   <h2>
    <img  width="60"  height="70" src="images/curriculum-vitae.png" alt=""></img>RESUME BUILDER</h2><br>



<nav>


    
</nav>
<div class="sign-in-up">

    <a href="Resumebuilder.php"><button TYPE="button">LOGOUT</button></a>
   
    </div>
    
    </header>
<br>
<br>

    <div align="center" style="width: 45%;height:300px;border-radius:30px;box-shadow: 0px 0px 10px grey;float:right;margin-right : 30px;background-color:lightskyblue;"><br><br>
 <img src="images/feedback.png"  height="100px"/><br><br><br>
           <a href="view-feedback.php"><input class="b1" type="button" value="View Feedback"  /></a>
      </div>

      
      <div align="center" style="width: 45%;height:300px;border-radius:30px;box-shadow: 0px 0px 10px grey;float:left;margin-left : 30px;background-color:lightgray;"><br><br>
 <img src="images/contacts-icon_1944021.jpg"  height="100px"/><br><br><br>
           <a href="view register.php"><input class="b1" type="button" value="View Registered Details" /></a>
      </div>
   
   

</body>
</html>