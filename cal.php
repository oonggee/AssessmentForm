<!DOCTYPE html>
<html lang="en">
<head>
   
	<title>แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19)</title>
  <link href="style.css" rel="stylesheet" type="text/css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100" style="padding-top: 20px;">
			<form class="contact100-form validate-form" action="cal.php" method="post">
			

				<span class="contact100-form-title" style="font-size: 1.3em; padding-bottom: 20px;">
				<h4>	ผลประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา<br> (COVID-19) </h4>
				</span>
<!--===============================================================================================-->
     


	<div class="wrap-input100 validate-input" data-validate = "required"><br>
    <h4 style="margin-bottom: 10px;"></h4>
    <center><?php 
    $a1 = $_POST["a1"];
    $a2 = $_POST["a2"];
    $a3 = $_POST["a3"];
    $a4 = $_POST["a4"];
    $a5 = $_POST["a5"];
    $a6 = $_POST["a6"];
    $a7 = $_POST["a7"];
    $a8 = $_POST["a8"];
    $a9 = $_POST["a9"];
    $a10 = $_POST["a10"];
    $fever;
    $sym;
    $risk;

    if ( $a4 == 1 ){
        $risk = 1 ;
    } else if ( $a5 == 1 ){
        $risk = 1 ;
    } else if ( $a6 == 1 ){
        $risk = 1 ;
    } else if ( $a7 == 1 ){
        $risk = 1 ;
    } else if ( $a8 == 1 ){
        $risk = 1 ;
    } else {
        $risk = 0;
    }

    if ( $a3 == 1 ) {
        $fever = 1;
    } else {
        $fever = 0;
    }

    if ($a1 == 1 || $a2 == 1) {
        $sym = 1;
    } else {
        $sym = 0;
    }

    if( ($fever == 1 && $sym == 1) && $risk == 1){
        echo 'ท่านมีความเสี่ยงสูง';
    } else if ($risk == 1) {
        echo ' ท่านมีความเสี่ยง';
    } elseif ($risk == 0) {
        echo ' ท่านยังไม่มีความเสี่ยง';
    } 

    ?></center><br>               
    
        <span class="focus-input100"></span>
</div>
        <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
					</div>
         <div class="row">
            <p class="cradit">OongGee © 2021 </p>
        </div>
				</div>
        </form>
        </div>
	</div>
        
</body>
</html>
