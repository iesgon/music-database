<?php 
#arrays for creaing the shirts
$bands = array('Green Day', 'Sufjan Stevens', 'Nirvana', 'My Chemical Romance', 'Kendrick Lamar', "Guns N' Roses", 'Led Zepplin', 'Panic! At the Disco', 'Beastie Boys', 'Radwimps');
$shirtcolor = array('Black', 'White', 'Pink', 'Teal', 'Periwinkle');
$shirtStyle = array('hoodie', 'short sleeve', 'long sleeve', 'tank top', 'crop top');
$stateAb = array('AL', 'AK', 'AZ', 'AZ', 'CA', 'CO', 'CT', 'DE', 'DC', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD', 'MA', 'MI', 'MN', 'MO', 'MT', 'NE', 'NV', ' NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', ' PA', 'RI', 'SC', 'SD', 'TN', 'UT', 'VT', 'WA', 'WV', 'WI', 'WY');
//$bn = $sS = $sC ="";
$displayPageContent="";
$bn = $sS = $sC =$fn= $ln = $str = $ci = $st = $zi = $em = $ph = "";
$nameErr = $lnameErr = $emailErr = $streetErr = $cityErr = $stateErr = $zipErr = $phoneErr = $bandErr = $colorErr = $styleErr = "";
	//empty field trapping
	if ($_SERVER["REQUEST_METHOD"] == "POST")
		{if (empty($_POST['firstName'])) {$nameErr= "Name is Required";}
		else{$fn=$_POST['firstName'];}
		if (empty($_POST['lastName'])) {$lnameErr= "Name is Required";}
		else{$ln=$_POST['lastName'];}
		if (empty($_POST['email'])) {$emailErr= "Email is Required";}
		else{$em=$_POST['email'];}
		if (empty($_POST['street'])) {$streetErr= "Street is Required";}
		else{$str=$_POST['street'];}
		if (empty($_POST['city'])) {$cityErr= "City is Required";}
		else{$ci=$_POST['city'];}
		if (empty($_POST['state'])) {$stateErr= "State is Required";}
		else{$st=$_POST['state'];}
		if (empty($_POST['zip'])) {$zipErr= "Zip is Required";}
		else{$zi=$_POST['zip'];}
		if (empty($_POST['phone'])) {$phoneErr= "Phone is Required";}
		else{$ph=$_POST['phone'];}
		if (empty($_POST['bandName'])) {$bandErr= "Band selection is Required";}
		else{$bn=$_POST['bandName'];}
		if (empty($_POST['shirtColor'])) {$colorErr= "Color is Required";}
		else{$sC=$_POST['shirtColor'];}
		if (empty($_POST['styShirt'])) {$styleErr= "Style is Required";}
		else{$sS=$_POST['styShirt'];}}
if(!empty($_POST['bandName']) && !empty($_POST['styShirt']) && !empty($_POST['shirtColor']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['street']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['email']) && !empty($_POST['phone']))
{
	$displayPageContent = '<h1>YAY!</h1><h3>'.$_POST['firstName'].' '.$_POST['lastName'].'</h3><h3>'.$_POST['street'].'</h3><h3>'.$_POST['city'].', '.$_POST['state'].' '.$_POST['zip'].'</h3><h3>'.$_POST['email'].'</h3><h3><h3>'.$_POST['phone'].'</h3>
							<h3>You ordered one '.$_POST['shirtColor'].' '.$_POST['styShirt'].' '.$_POST['bandName'].' shirt</h3>';
//header('location: products.php?bn='.$_POST['bandName'].'&sS='.$_POST['shirtColor'].'&sC='.$_POST['styShirt']);	
}//This code displays the t-shirt form
else{
$displayPageContent .= '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">';
$displayPageContent .= '<div class="form-row">';
$displayPageContent .= '<div class="form-group col-sm-2">';
$displayPageContent .= shirts($bands, $shirtcolor, $shirtStyle).'<br></div></div>';
$displayPageContent .= '<div class="form-row"><div class="col"><input class="form-control" type="text" name="firstName" placeholder="First Name" value="'.$fn.'"><span class="error">'.$nameErr.'</span></div>';
$displayPageContent .= '<div class="col"><input class="form-control" type="text" name="lastName" placeholder="Last Name" value="'.$ln.'"><span class="error">'.$lnameErr.'</span></div></div><br>';
$displayPageContent .= '<input class="form-control" type="text" name="street" placeholder="Street Address" value="'.$str.'"><span class="error">'.$streetErr.'</span><br>';
$displayPageContent .= '<div class="form-row"><div class="form-group col-md-6"><input class="form-control" type="text" name="city" placeholder="City" value="'.$ci.'"><span class="error">'.$cityErr.'</span></div>';
$displayPageContent .= sAb($stateAb);
$displayPageContent .= '<div class="form-group col-md-2"><input class="form-control" type="text" name="zip" placeholder="Zip" value="'.$zi.'"><span class="error">'.$zipErr.'</span></div></div><br>';
$displayPageContent .= '<div class="form-row"><div class="form-group col-md-6"><input class="form-control" type="email" name="email" placeholder="Email" value="'.$em.'"><span class="error">'.$emailErr.'</span></div>';
$displayPageContent .= '<div class="form-group col-md-6"><input class="form-control" type="text" name="phone" placeholder="Phone" value="'.$ph.'"><span class="error">'.$phoneErr.'</span></div><br>';
$displayPageContent .= '<input type="submit" name="" class="btn btn-primary" id="yourButton"></input>';
$displayPageContent .= '<input type="reset" name="" class="btn btn-primary" id="mybutton"></input></form>';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6A728A;">
        
        <a class="navbar-brand" href="#">Iesus' Portfolio</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse justify-content-end" id="navCollapse">
      <ul class="navbar-nav">
               <li class="nav-item"><a class="nav-link" href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
               <li class="nav-item"><a class="nav-link" href="../happy-birthday"><span class="glyphicon glyphicon-gift"> Happy Birthday!</span></a></li>
               <li class="nav-item active"><a class="nav-link" href="../music-database"><span class="glyphicon glyphicon-cd"> Music Database</span></a></li>
               <li class="nav-item"><a class="nav-link" href="../validation"> Validation</a></li>
      </ul>
  	  </div>
      </nav>
      <ul class="nav nav-pills nav-justified">
  <li class="nav-item"><a class="nav-link giddy" href="index.php">Home</a></li>
  <li class="nav-item"><a class="nav-link giddy" href="music.php">The Music</a></li>
  <li class="nav-item"><a class="nav-link giddy active" href="products.php">Products</a></li>
</ul>	
	<?php
	echo $displayPageContent;
	?>
</body>
</html>
<?php
//this function is for creating the shirt options
function shirts($band, $colour, $styles)
{
	global $bn, $sS,$sC, $bandErr, $colorErr, $styleErr;
	$return = "";
	$return .= "<select class='form-control' name='bandName' value='".$bn."'>";
	$return .= '<option value="" disabled selected hidden>Which band?</option>';
	foreach ($band as $bandname){
		$return .= "<option value='".$bandname."' >".$bandname."</option>";
	}
	$return .= "</select><span class='error'>".$bandErr."</span></div>";
	$return .= "<div class='form-group col-sm-2'><select class='form-control' name='shirtColor' value='".$sC."'>";
	$return .= '<option value="" disabled selected hidden>What color?</option>';
	foreach ($colour as $shade){
		$return .= "<option value='".$shade."' >".$shade."</option>";
	}
	$return .= "</select><span class='error'>".$colorErr."</span></div>";
	$return .= "<div class='form-group col-sm-2'><select class='form-control' name='styShirt' value='".$sS."'>";
	$return .= '<option value="" disabled selected hidden>What style?</option>';
	foreach ($styles as $input){
				$return .= "<option value='".$input."'>".$input."</option>";
	}
	$return .= '</select><span class="error">'.$styleErr.'</span>';
	return $return;
}
//this function is for creating the state option
function sAb($state)
{
	global $st, $stateErr;
	$return = "";
	$return .= "<div class='form-group col-sm-4'><select class='form-control' name='state' value='".$st."'>";
	$return .= '<option value="'.$st.'" disabled selected hidden>State</option>';
	foreach ($state as $input){
				$return .= "<option value='".$input."'>".$input."</option>";
	}
	$return .= '</select><span class="error">'.$stateErr.'</span></div>';
	return $return;
}
?>
