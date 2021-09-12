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
    $sum = $_POST["a1"] + $_POST["a2"] + $_POST["a3"] + $_POST["a4"] + $_POST["a5"] + $_POST["a6"] + $_POST["a7"] + $_POST["a8"] + $_POST["a9"] + $_POST["a10"];
    if($sum <= 5){
        echo "ผลการประเมิน : มีความเสี่ยงต่ำ" ; 
    } elseif ($sum > 5 && $sum <= 10){
        echo "ผลการประเมิน : มีความเสี่ยง";
    }else{
        echo "ผลการประเมิน : มีความเสี่ยงสูง";
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
