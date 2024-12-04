<?php
require("fpdf.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Contact=$_POST['Contact'];
$FullName=$_POST['FullName'];
$DateofBirth=$_POST['DateofBirth'];
$Gender=$_POST['Gender'];
$Hobbies=$_POST['Hobbies'];
$Address=$_POST['Address'];
$Languages=$_POST['Languages'];
$NameofCourse=$_POST['NameofCourse'];
$School=$_POST['School'];
$Board=$_POST['Board'];
$Percentage=$_POST['Percentage'];
$Certificate1=$_POST['Certificate1'];
$Certificate2=$_POST['Certificate2'];
$Experience=$_POST['Experience'];
$Language=$_POST['Language'];
$Operating=$_POST['Operating'];
$Date=$_POST['Date'];
$Place=$_POST['Place'];




$html="

<head>
<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <title>Resume </title>
    </head>
    <body>
          
                                 <h3>$Name:      </h3>
                                 <h3>$Email Id:   </h3>
                                 <h3>$Contact No:</h3>
                                 
                            <h2 >Personal Information:</h2>
          <ul>
          <li><h3>$FullName:</h3></li>
          <li><h3>$DateofBirth:</h3></li>
          <li><h3>$Gender:</h3></li>
          <li><h3>$Hobbies:</h3></li>
          <li><h3>$Address Address:</h3></li>
          <li><h3>$Languages Known:</h3></li>
          </ul>
          <h2>Academic Record:</h2>
          <table><tr > <th>$NameofCourse</th><th>$School/College</th><th>$Board/University</th> <th>$Percentage</th></tr>
          <tr><td></td><td></td><td></td><td></td></tr>
          <tr><td></td><td></td><td></td><td></td></tr>
          <tr><td></td><td></td><td></td><td></td></tr>
          <tr><td></td><td></td><td></td><td></td></tr>
          </table>
          <h2>Extra Curriculum:</h2>
          <ul>
          <li>$Certificate1</li><br>
          <li>$Certificate2:<br></li>
          </ul>
          <h2>$Experience:</h2>
          <h2>Technical Skills:</h2>
          <ul>
            <li>$Languages/Technologies: </li><br>
            <li> $Operating Systems:    </li>
          </ul>
          <br>
          <br>
          <ul>
          <li><h3>$Date: </h2></li>
          <li><h3>$Place:</h2></li>
          </ul>

        </table>
    </body>";
    
$pdf=new pdf('P','cm','A4');
$pdf->Addpage();
$pdf->SetFont("Arial",'',12);
    $pdf->WriteHTML($html);
    $file=$Name.".pdf";
    $pdf->Output($file,"D");
header("Location: resume.php");
}?>



