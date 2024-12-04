<?php
require('con3.php');
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Contact us Form | CodingNepal</title>
      <link rel="stylesheet" href="style1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
   <form action="feeddb.php" method="post" >
    <div class="container">
        <div class="text">Give your Feedback</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                
                 <input type="text" name="fullname" required>
                </br>
                 <div class=""></div>
                 <label for="">FullName</label>
               </br>
              </div>
              <div class="input-data">
                 <input type="text"  name="email"required>
                 <br/>
                 <br>
                 <div class="underline"></div>
                 <label for="">Email Address</label>
                 <br/>
              </div>
           </div>
          
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" name="opinion" required></textarea>
                 <br />
                 <div class="underline"><br></div>
                 <label for="">Enter Your Opinions Here</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>