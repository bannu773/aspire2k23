<?PHP
$server="localhost";
$user="iywftqezq4ai";
$pass="ASPIRE_aitam@1";
$db="aspire2020";
$connect=mysqli_connect($server,$user,$pass,$db);
session_start();
if(!isset($_SESSION['name'])){
      echo '<script>alert("Invalid Access")</script>'; 
    echo "<script>window.location='./Register.html';</script>";
}

$i=$_SESSION['name'];

                $query = "SELECT * FROM `register` WHERE  `unique_id` = '$i'";
                $sql = mysqli_query($connect,$query);
                $row= mysqli_fetch_array($sql);
   
   
                
 if($row['branch1']=="CSE"){
    $contact="Sarath Satyanarayana: +91 99634 48236";
}
elseif($row['branch1']=="ECE"){
    $contact="Varun Kumar: +91 77069 14868";
}
elseif($row['branch1']=="MECH"){
    $contact=" Shivam Kumar: +91 99126 21082 ";
}
elseif( $row['branch1']=="CIVIL"){
    $contact="Sai Nikhila: +91 91825 28379";
}
elseif($row['branch1']=="EEE"){
    $contact="Pavan: +91 62817 05920 ";
}
elseif($row['branch1']=="IT"){
    $contact="B.Maheesha: +91 99891 84030";
}           
                
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Confirmation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>

</head>
<!-------------=------------------------------------------------------------------->
<style type="text/css">
body{
	background-color: #424949;
}
.cardcolor{
	background-color: #616A6B ;
	color: white;
}
</style>

<!-------------=------------------------------------------------------------------->
<script type="text/javascript">
$(function () {

    var specialElementHandlers = {
        '#editor': function (element,renderer) {
            return true;
        }
    };
 $('#cmd').click(function () {
        var doc = new jsPDF();
        doc.fromHTML($('#target').html(), 15, 15, {
            'width': 170,'elementHandlers': specialElementHandlers
        });
        doc.save('Registration_Confirmation.pdf');
    });  
});
</script>
<!-------------=------------------------------------------------------------------->
<body   id="target">
<br><br><br>
<div id="content">

	<div class="container cardcolor">
  <div class="row">
    <div class="col">
    	<br>
    	<center>
<!--	<img src="img/favicon-96x96.png" style="width: 114px; height: 118px;" class="rounded mx-auto d-block" alt="...">--->
    	<h3>ASPIRE 2020</h3>
    	<br>
    	<h4>Hey, You have successfully registered for <?php  echo $row['eventname']; ?></h4>
    	<br>
    	<h4>Your ASPIRE ID:<span><b style="color: blue;"><?php  echo $row['unique_id']; ?></b></span></h4>
    	<br>
    	<h4>Team Members</h4>
    	<br>
    	<?PHP
    	if($row['name1']!="" ){
    	     echo"Name :"; echo $row['name1'];
    	     if($row['accommodation1']=="YES"){
    	         echo "(With Accommodation)";
    	     }
    	     
    	  }
    	  ?>
    	  <br>
    	  <?PHP
    	  if($row['name2']!="")
    	  {
    	     echo"Name :"; echo $row['name2'];
    	      if($row['accommodation2']=="YES"){
    	         echo "(With Accommodation)";
    	     }
    	    }	?>
    	  <br>
    	  	<?PHP
    	  if($row['name3']!="")
    	  {
    	     echo"Name :"; echo $row['name3'];
    	      if($row['accommodation3']=="YES"){
    	         echo "(With Accommodation)";
    	     }
    	     
    	  }	?>
    	  <br>
    	  <?PHP
    	  if($row['name4']!=""){
    	     echo"Name :"; echo $row['name4'];
    	      if($row['accommodation4']=="YES"){
    	         echo "(With Accommodation)";
    	     }
    	  }
    	?>

    	

    	<br>
    	<h6>To Contact :</h6>
		<h6>Department Coordinators:</h6>
		<h6><?php  echo $contact; ?></h6>
		<h6>Student Conveners:</h6>
		<h6>Spandana : +91 8106421978</h6>
		<h6>Sai Krishna :+91 7799141366</h6>
		<br>
		<p> Registration confirmation  details  sent to your Mail(check your spam)<br>Thank You..</p>
		<br>
		</center>
    </div>
  </div>
</div>
</div>
<center><button id="cmd"class="btn btn-light">Download</button></center>
<br>
</body>
</html>