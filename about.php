<html>
<head>
<title>HOMEPAGE</title>
<style type="text/css">
footer {
    background-color:#3cb371;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
     position:relative;
    bottom:0px;
    width:100%;		
	}
	header {
    background-color:#3cb371;
    color:white;
    text-align:center;
      padding:0px;	
	}
.ds
 {
 color:#046A76;
 text-decoration:underline;
 }
 body
{
background-color:#FFE4E1;
}
.flip-card {
  background-color: transparent;
  width: 150px;
  height: 150px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
  z-index: 2;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
  z-index: 1;
}
</style>
</head>
<body >
<header>
<h1>WELCOME TO HEALTH CARE HOSPITAL</h1><hr>
</header>
<h1 align="center" class="ds">DEVELOPERS<hr></h1>
<table align="center" border="5px">
<tr>
<td>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="sourav.jpg" alt="Avatar" style="width:150px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h1>Kamlesh Kumar Tiwari</h1> 
      <p>Computer Science Engineer</p> 
      <p>SKFGI MANKUNDU</p>
    </div>
  </div>
</div></td>
<td>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="chandan.jpg" alt="Avatar" style="width:150px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h1>Chandan Singh</h1> 
      <p>Computer Science Engineer</p> 
      <p>SKFGI MANKUNDU</p>
    </div>
  </div>
</div>
</td></tr>
<tr>
<td><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="sabarni.jpg" alt="Avatar" style="width:150px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h1>Sabarni</h1> 
      <p>Computer Science Engineer</p> 
      <p>SKFGI MANKUNDU</p>
    </div>
  </div>
</div></td>
<td><div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="13.jpeg" alt="Avatar" style="width:150px;height:150px;">
    </div>
    <div class="flip-card-back">
      <h1>Sunanda</h1> 
      <p>Computer Science Engineer</p> 
      <p>SKFGI MANKUNDU</p>
    </div>
  </div>
</div>
</td></tr>
</table>
<hr>
<footer>
Copyright &copy; Kamlesh Kr. Tiwari & Team &trade; SKFGI MANKUNDU - 2019
</footer>
</body>
</html>
