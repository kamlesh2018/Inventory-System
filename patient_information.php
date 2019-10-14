<html>
<head>
<title>Patient Informartion</title>
<style type="text/css">
footer {
    background-color:#3cb371;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
	 position:relative;
       bottom: 0px;
      width: 100%;	
	}
	header {
    background-color:#3cb371;
    color:white;
    text-align:center;
      padding:0px;	
	}
	body
{
background-color:#FFE4E1;
}
#patient {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#patient td, #patients th {
  border: 1px solid #ddd;
  padding: 8px;
}

#patient tr:nth-child(even){background-color: #f2f2f2;}

#patient tr:hover {background-color: #ddd;}

#patient th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body >
<header>
<h1>WELCOME TO HEALTH CARE HOSPITAL</h1><hr>
</header>
<hr>
<h1 align="center">Patient Information</h1>
<?php

$con=Mysqli_connect("localhost","root","","hospital_management");
echo "<hr>";
$query="Select * from patient_registration";
$select=mysqli_query($con,$query);
if (mysqli_num_rows($select) > 0)
	{
		 echo '<table align="center" id="patient" >
		 <tr>
		 <th>PID</th>
		 <th>Name</th>
		 <th>gender</th>
		 <th>Mobile No.</th>
		 </tr>';
    // output data of each row
    while($row = mysqli_fetch_assoc($select))
	{
		 echo "<tr><td>".$row["pid"]."</td><td>".$row["first_name"]." ".$row["last_name"]."</td><td>".$row["gender"]."</td><td>".$row["phno"]."</td></tr>";
    }
    echo "</table>";
    }
    else {
    echo '<h3 align="center" >No Result found</h3>';
	}
?>
<hr>
<footer>
Copyright &copy; Kamlesh Kr. Tiwari & Team &trade; SKFGI MANKUNDU - 2019
</footer>
</body>
</html>