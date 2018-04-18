<!DOCTYPE html>
<html>
<head>
	<title>Hotels NG Intership Stage 1</title>
</head>
<body>
	<img src="hotelsng.jpg">
    <p id="Olusegun">Olusegun</p>
    <div id="Time" value= >     <?php

     date_default_timezone_set("Africa/Lagos");
     $today = date("H:i:s");
     echo "".$today;  

      // $today = strtotime('today');
      // echo {$today};
      // print_r($today);?>
      </div>

    
    <p id="freetext">Oh wait, that must be Nigerian time...</p>

</body>

<style type="text/css">
	body{
		background-image: url('bg3.jpg');
		position: absolute;
		width: 1440px;
		height: 1024px;
		border-left: 0px;
		top: 0px;

	}
	img{
		position: absolute;
		width: 276px;
		height: 269px;
		left: 582px;
		top: 58px;
		mix-blend-mode: normal;
		border: 1px solid #000000;
		border-radius: 150px;
			}
	#Olusegun{
		position: absolute;
		width: 164px;
		height: 96px;
		left: 638px;
		top: 250px;

		font-family: Remachine Script Personal Use;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 64px;

		color: #00FB6A;
		opacity: 0.5;
	}
	#Time {
		position: absolute;
		width: 800px;
		height: 250px;
		left: 257px;
		top: 350px;

		font-family: Abhaya Libre ExtraBold;
		font-style: normal;
		font-weight: 800;
		line-height: normal;
		font-size: 288px;

		color: #C64C4C;
	}
	#freetext {
		position: absolute;
		width: 590px;
		height: 65px;
		left: 425px;
		top: 857px;

		font-family: Remachine Script Personal Use;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		font-size: 64px;

		color: #FFF500;
	}
</style>
</html>