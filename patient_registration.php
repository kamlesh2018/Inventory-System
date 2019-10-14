<html>
<style >
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
footer {
    background-color:#3cb371;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 
	}
	header {
    background-color:#3cb371;
    color:white;
    text-align:center;
      padding:0px;	
	}
</style>
<body>
<header>
<h1>WELCOME TO HEALTH CARE HOSPITAL</h1><hr>
</header>
<div>
  <form action="registration.php" method="POST">
  
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." maxlength="10">
	
    <label for="gender">Gender</label>
    <select id="gender" name="gender"> 
	
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
	
	<label for="pid">Patient ID</label></br></br>
    <input type="number" id="pid" name="pid" placeholder="Patient ID"></br></br>
  
  <label for="Phno.">Phone Number</label></br></br>
    <input type="number" id="Phno." name="phone" placeholder="Mobile Phone Number" maxlength="10"></br></br>
	
    <input type="submit" value="Submit">
  </form>
</div>
<footer>
Copyright &copy; Kamlesh Kr. Tiwari & Team &trade; SKFGI MANKUNDU - 2019
</footer>

</body>
</html>
