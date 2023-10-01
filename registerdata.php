<?PHP
$server="localhost";
$user="iywftqezq4ai";
$pass="ASPIRE_aitam@1";
$db="aspire2020";
$connect=mysqli_connect($server,$user,$pass,$db);
session_start();


$eventname=$_POST['eventname'];
$collegename=$_POST['collegename'];
$referral_id=$_POST['referral_id'];
//-------------------------------------
$name1=$_POST['name1'];
$email1=$_POST['email1'];
$phonenumber1=$_POST['phonenumber1'];
$branch1=$_POST['branch1'];
if (isset($_POST['accommodation1'])){
$accommodation1=$_POST['accommodation1']; 
}
else {
	$accommodation1="NO";
}

//-------------------------------------
$name2=$_POST['name2'];
$email2=$_POST['email2'];
$phonenumber2=$_POST['phonenumber2'];
$branch2=$_POST['branch2'];
if (isset($_POST['accommodation2'])){
$accommodation2=$_POST['accommodation2'];
}
else {
	$accommodation2="NO";
}
//-------------------------------------
$name3=$_POST['name3'];
$email3=$_POST['email3'];
$phonenumber3=$_POST['phonenumber3'];
$branch3=$_POST['branch3'];
if (isset($_POST['accommodation3'])){
$accommodation3= $_POST['accommodation3'];
}
else {
	$accommodation3="NO";
}
//-------------------------------------
$name4=$_POST['name4'];
$email4=$_POST['email4'];
$phonenumber4=$_POST['phonenumber4'];
$branch4=$_POST['branch4'];
if (isset($_POST['accommodation4'])){
$accommodation4= $_POST['accommodation4'];
}
else {
	$accommodation4="NO";
}

//---------------------------------------------------- ASPIRE ID-----------------------------------------
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// Output: iNCHNGzByPjhApvn7XBD
$uid = generate_string($permitted_chars, 5);
$unique_id="AS20".$uid;



function checkuniqueid($input) {
    $server="localhost";
    $user="id11808344_scoreboard";
    $pass="suhas2018";
    $db="id11808344_scoreboard";
    $connect=mysqli_connect($server,$user,$pass,$db);
    $query2="SELECT `unique_id` FROM `register`";
    $sqlcheck=mysqli_query($connect,$query2);
    while($row1 = mysqli_fetch_array($sqlcheck)) {
        if($row1['unique_id']==$input){
            $uid = generate_string($permitted_chars, 5);
            $input="AS20".$uid;
            while($row1 = mysqli_fetch_array($sqlcheck)) {
                if($row1['unique_id']==$input){
                    $uid = generate_string($permitted_chars, 5);
                    $input="AS20".$uid;
                    while($row1 = mysqli_fetch_array($sqlcheck)) {
                       if($row1['unique_id']==$input){
                        $uid = generate_string($permitted_chars, 6);
                        $input="AS20".$uid;
                        while($row1 = mysqli_fetch_array($sqlcheck)) {
                          if($row1['unique_id']==$input){
                            $uid = generate_string($permitted_chars, 7);
                            $input="AS20".$uid;
                            while($row1 = mysqli_fetch_array($sqlcheck)) {
                              if($row1['unique_id']==$input){
                                $uid = generate_string($permitted_chars, 8);
                                $input="AS20".$uid;
                                while($row1 = mysqli_fetch_array($sqlcheck)) {
                                  if($row1['unique_id']==$input){
                                        $uid = generate_string($permitted_chars, 9);
                                        $input="AS20".$uid;
                                        while($row1 = mysqli_fetch_array($sqlcheck)) {
                                         if($row1['unique_id']==$input){
                                                $uid = generate_string($permitted_chars, 10);
                                                $input="AS20".$uid;
                                                while($row1 = mysqli_fetch_array($sqlcheck)) {
                                                      if($row1['unique_id']==$input){
                                                            $uid = generate_string($permitted_chars, 10);
                                                            $input="AS20".$uid;
                                                        }
                                                }
                                        }
                                    }
                                      
                                  }
                                }
                                  
                              }
                            }
                            
                          }
                        }
                        
                       }
                    }
                }
            }
        }
    }
    return $input;
}

$checkedid=checkuniqueid($unique_id);
//echo $checkedid;
//------------------------------------------------------------------------------------------------------------------------------------------------------------
$_SESSION['name']=$checkedid;
//-------------------------------------------------------------------------------------------------------------------------------------------------------------

if($branch1=="CSE"){
    $contact="Sarath Satyanarayana: +91 99634 48236";
}
elseif( $branch1=="ECE"){
    $contact="Varun Kumar: +91 77069 14868";
}
elseif( $branch1=="MECH"){
    $contact=" Shivam Kumar: +91 99126 21082 ";
}elseif( $branch1=="CIVIL"){
    $contact="Sai Nikhila: +91 91825 28379";
}
elseif($branch1=="EEE"){
    $contact="Pavan: +91 62817 05920 ";
}
elseif($branch1=="IT"){
    $contact="B.Maheesha: +91 99891 84030";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------------------------------------------------
function mailMsg() {
   
// ------------------------------------------- 1st--Sending email----------------------------------------------
if ($email1!="") {
$to1 = $email1;
$subject1 = 'ASPIRE 2020 REGISTRATION';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width:75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name1."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch1."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
			$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to1, $subject1, $body,$headers);
}
else/*{
    echo"ST1";
}*/
// -------------------------------------------2nd--Sending email---------------------------------------------
if ($email2!="") {
$to2 = $email2;
$subject2 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name2."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch2."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to2, $subject2,  $body,$headers);
}/*else{
    echo"ST2";
}*/
// -------------------------------------------3rd--Sending email---------------------------------------------
if ($email3 !="") {
$to3 = $email3;
$subject3 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name3."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch3."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to3, $subject3,  $body,$headers);
}/*else{
    echo"ST3";
}*/
// -------------------------------------------4th--Sending email---------------------------------------------
if ($email4 !="") {
$to4 = $email4;
$subject4 = 'REGISTRATION ASPIRE 2020 ';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name4."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch4."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
		$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to4, $subject4, $body,$headers);
}
/*else{
    echo"ST4";
}*/
}




if ($name1!="" && $eventname !="" && $collegename !="" && $email1 !="" && $phonenumber1 !="" && $branch1 !="")
{
 //-------------------------------------------------------------------------------------------------------------------------------------------------
if($referral_id != "")
 {
$query2="SELECT `unique_id` FROM `register` WHERE `eventname`='Campus Ambassador' AND `unique_id`='$referral_id'";
$sql2=mysqli_query($connect,$query2);
$row2=mysqli_fetch_array($sql2);

	if($referral_id == $row2['unique_id'])
	{
	$rid=$referral_id;
//-------------------------------------------------------------------------------------------------------------------------------------------------
$query="INSERT INTO `register`(`eventname`, `collegename`, `name1`, `name2`, `name3`, `name4`, `email1`, `email2`, `email3`, `email4`, `phonenumber1`, `phonenumber2`, `phonenumber3`, `phonenumber4`, `branch1`, `branch2`, `branch3`, `branch4`, `accommodation1`, `accommodation2`, `accommodation3`, `accommodation4`, `unique_id`,`referral_id`) VALUES ('$eventname', '$collegename', '$name1', '$name2', '$name3', '$name4', '$email1', '$email2', '$email3', '$email4', '$phonenumber1', '$phonenumber2', '$phonenumber3', '$phonenumber4', '$branch1', '$branch2', '$branch3', '$branch4', '$accommodation1', '$accommodation2', '$accommodation3', '$accommodation4', '$checkedid','$rid')";
$sql=mysqli_query($connect,$query);
if ($sql) {
//------------------------------------------------------------------------------------------------------------------------------------------------------
  
// ------------------------------------------- 1st--Sending email----------------------------------------------
if ($email1!="") {
$to1 = $email1;
$subject1 = 'ASPIRE 2020 REGISTRATION';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width:75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name1."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch1."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
			$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to1, $subject1, $body,$headers);
}
else/*{
    echo"ST1";
}*/
// -------------------------------------------2nd--Sending email---------------------------------------------
if ($email2!="") {
$to2 = $email2;
$subject2 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name2."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch2."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to2, $subject2,  $body,$headers);
}/*else{
    echo"ST2";
}*/
// -------------------------------------------3rd--Sending email---------------------------------------------
if ($email3 !="") {
$to3 = $email3;
$subject3 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name3."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch3."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to3, $subject3,  $body,$headers);
}/*else{
    echo"ST3";
}*/
// -------------------------------------------4th--Sending email---------------------------------------------
if ($email4 !="") {
$to4 = $email4;
$subject4 = 'REGISTRATION ASPIRE 2020 ';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name4."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch4."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
		$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to4, $subject4, $body,$headers);
}
/*else{
    echo"ST4";
}*/
//------------------------------------------------------------------------------------------------------------------------------------------------------
echo '<script>alert("Registration successful")</script>';
echo "<script>window.location='./registrationconformation.php';</script>";

}
else{
    echo '<script>alert("Registration was not successful try after sometime")</script>'; 
    echo "<script>window.location='./Register.html';</script>";
}
	
	}else{
		echo '<script>alert(" Enter Valid Referrel ID")</script>';
        echo "<script>window.location='./Register.html';</script>";
	}
}else{
    
//-------------------------------------------------------------------------------------------------------------------------------------------------
$query="INSERT INTO `register`(`eventname`, `collegename`, `name1`, `name2`, `name3`, `name4`, `email1`, `email2`, `email3`, `email4`, `phonenumber1`, `phonenumber2`, `phonenumber3`, `phonenumber4`, `branch1`, `branch2`, `branch3`, `branch4`, `accommodation1`, `accommodation2`, `accommodation3`, `accommodation4`, `unique_id`) VALUES ('$eventname', '$collegename', '$name1', '$name2', '$name3', '$name4', '$email1', '$email2', '$email3', '$email4', '$phonenumber1', '$phonenumber2', '$phonenumber3', '$phonenumber4', '$branch1', '$branch2', '$branch3', '$branch4', '$accommodation1', '$accommodation2', '$accommodation3', '$accommodation4', '$checkedid')";
$sql=mysqli_query($connect,$query);
if ($sql) {
//------------------------------------------------------------------------------------------------------------------------------------------------------
  
// ------------------------------------------- 1st--Sending email----------------------------------------------
if ($email1!="") {
$to1 = $email1;
$subject1 = 'ASPIRE 2020 REGISTRATION';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width:75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name1."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch1."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
			$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to1, $subject1, $body,$headers);
}
else/*{
    echo"ST1";
}*/
// -------------------------------------------2nd--Sending email---------------------------------------------
if ($email2!="") {
$to2 = $email2;
$subject2 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name2."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch2."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to2, $subject2,  $body,$headers);
}/*else{
    echo"ST2";
}*/
// -------------------------------------------3rd--Sending email---------------------------------------------
if ($email3 !="") {
$to3 = $email3;
$subject3 = 'REGISTRATION ASPIRE 2020';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name3."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch3."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
	$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to3, $subject3,  $body,$headers);
}/*else{
    echo"ST3";
}*/
// -------------------------------------------4th--Sending email---------------------------------------------
if ($email4 !="") {
$to4 = $email4;
$subject4 = 'REGISTRATION ASPIRE 2020 ';
$from ='aspire.aitam@gmail.com';
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
	 $body = '<html><body>';
$body .= "<center>";
$body .= "<div style='width:80%;background-color:#424949;color:white;'>";
$body .= "<div>";
	$body .= "<br>";
	$body .= "<h2>Your ASPIRE Id</h2>";
	$body .= "<h1 >".$checkedid."</h1>";
	$body .= "<hr style='background-color: white; width: 75%;'>";
	$body .= "<br>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>Hey, You have successfully registered for ".$eventname."</h3>";
	$body .= "<h4>Name:<b>".$name4."</b></h4>";
	$body .= "<h4>Branch:<b>".$branch4."</b></h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<h3>For more details,</h3>";
	$body .= "<div style='background-color: white; border-radius:50px; width:75%;'>";
	$body .= "	<h3 style='color:blue;'>www.aspireaitam.com</h3>";
	$body .= "</div>";
	$body .= "<h4>To Contact :</h4>";
	$body .= "<h4>Department Coordinators:</h4>";
	$body .= "<h4>".$contact."</h4>";
		$body .= "<h4>Student Conveners</h4>";
	$body .= "<h4>Spandana : +91 8106421978</h4>";
$body .= "<h4>Sai Krishna :+91 7799141366</h4>";
$body .= "</div>";
$body .= "<div>";
	$body .= "<a href='https://www.facebook.com/AITAMOfficial/?ti=as'><img src='http://aspireaitam.com/img/facebook.png' style='width:25px;'/></a>";
	$body .= "<a href='https://twitter.com/AitamOfficial?s=15 '><img src='http://aspireaitam.com/img/twitter.png' style='width:25px;'/></a>";
	$body .= "<a href='https://www.instagram.com/aitam_vasi/'><img src='http://aspireaitam.com/img/instagram.png' style='width:25px;'/></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</center>";
$body .= "</body></html>";

mail($to4, $subject4, $body,$headers);
}
/*else{
    echo"ST4";
}*/
//------------------------------------------------------------------------------------------------------------------------------------------------------

echo '<script>alert("Registration successful")</script>';
echo "<script>window.location='./registrationconformation.php';</script>";

}
else{
    echo '<script>alert("Registration was not successful try after sometime")</script>'; 
    echo "<script>window.location='./Register.html';</script>";
}
    
}


}
else 
{
echo '<script>alert(" You need to fill all columns")</script>';
echo "<script>window.location='./Register.html';</script>";
}
?>