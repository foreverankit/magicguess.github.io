<?php

$rand = rand(1,10);

$guess = $_POST['number'];
$submit = $_POST['Guess'];

if(isset($submit)){

	if($guess<1 || $guess>10){
		echo "Your guess must be a number between 1 and 10!";
	}
	else{
		if($guess!=$rand){
			echo "Incorrect, the correct answer is ".$rand;
		}
		else{
			echo "Damm you are correct!";
		}

	}

}
else{
	header("Location: index.php");
	exit();
}

?>