<!DOCTYPE html>
<html>

<head>
<img src="images.png" width="70" >
<title>Signup Page</title>

<style>

Body {

	background-color: #F8F8FF;

}

form {

	width: 100%;
}
fieldset {

	background-color: rgb(224,238,238);
	border: 1px solid rgba(0,104,139);
	float:left;
	margin: 10px 0px 10px 2.5%;
	width: 65%;
	padding-left: 0px;
}


legend {
	background-color: rgb(65,86,197);
	color: rgba(255,255,255, 0.7);
	padding: 10px 12px 0px 0px;
	width: 100%;
	height: 100%;
	text-align: top;
	font-size: 20px;
	font-weight: normal;
	font-kerning: 0.7em;

}

label {

	clear: left;
	display: block;
	float: left;
	font-size: 0.9em;
	margin: 7px 4% 7px 5px;
	width: 20%;
}
input {

	display: block;
	float: left;
	font-size: 0.9em;
	margin: 7px 0px;
	width: 50%;


}
#sign {

	float: right;

}

</style>

</head>
<body>

<form name="signup" action="http://www.njit.edu/uws/process.php" method="post">
<fieldset id="info">
<legend>Sign up</legend>

<label for="fname">First Name : </label>
<input type="text" name="fname" id="fname" />

<label for="lname">Last Name : </label>
<input type="text" name="lname" id="lname"  />

<label for="email">E-mail address : </label>
<input type="email" name="email" id="email" />

<label for="phone">Phone Number : </label>
<input type="tel" name="phone" id="phone"  placeholder="(nnn)nnn-nnnn"  />

<label for="birthday">Birth Date : </label>
<input type="date" name="birth" id="birth"  placeholder="nn-nn-nnnn" />


<label>Gender : </label>

 <label for="male">Male</label>
 <input type="radio" name="gender" id = "m" value="male"> 
 <label for="female">Female</label>
 <input type="radio" name="gender" id = "f" value="female">

<button type="button" id="sign">Sign in </button>



</fieldset>



</form>

</body>
</html>