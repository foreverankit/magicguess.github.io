<!Doctype html>
<html>
<head>
<title>Php magic guessing game</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
div {
  background-color: white;
  width: 350px;
  border: 15px solid black;
  padding: 5px;
  margin: 20px;
  position: absolute;
  bottom: 120px;
  right: 450px;
}

body{
	background-image: url("thumb-1920-60578.jpg");
}

/*input[type=number] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}*/
label {
    width:220px;
    clear:left;
    text-align:center;
    padding-right:20px;
}

.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


</style>
</head>
<body>
<h1 align="left" style="font-size:5vw;" colo><strong>Magic Guessing Game </strong></h1>
<h2 align="left"><strong>READY FOR THE GUESS?</strong></strong></h2>
<h1 align="center" style="color:#4CAF50;"><strong>Lets see whats written in your fate!</strong></strong></h1>
<div>
<h2 align="center"><strong> Guess the number between 1-10 </strong></strong></h2><br>
<form action="gen.php" method="POST">
<!--strong>Number  </strong><input type="number" name="number" value="number"><br-->
<label for="number"><strong>Number:</strong></strong></label>
<input id="number" name="number" value="">
<button class="button"  name="Guess" style="margin-left: 70%">Guess</button>
</form>
</div>
</body>
</html>