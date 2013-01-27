<!DOCTYPE html>

<html>

<head>

<style type="text/css"> 

html {
background-image:url('{{ URL::to_asset('img/background.jpg') }}');
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

#wrapper{
	width:960px;
	margin:0 auto;
	position:relative;
	text-align: center;
}	

.header-text {
font-family: 'Lato', sans-serif;
font-size: 60px;
color: #fff;
font-weight: 100;
}

.text {
font-family: 'Lato', sans-serif;
font-size: 18px;
color: #fff;
font-weight: 300;
margin: 10px;
padding: 10px;
}

input[type="text"] {
font-family: 'Lato', sans-serif;
font-size: 16px;
color: #000;
font-weight: 300;
margin: 10px;
}

#submit {
font-family: 'Lato', sans-serif;
font-size: 36px;
color: #fff;
font-weight: 100;
background-color: rgba(94,167,79,0.4);
width: 135px;
 height: 60px;
 border: none;
 margin: 0;
 padding: 0;
 border-radius: 15px;
}

#submit:hover{
background-color: rgba(56,128,42,0.4);

}

</style>

</head>

<body>
<div id="wrapper">
<span class="header-text">Mission Monkey Input</span>

<br><br>
<span class="text">

<form action="{{ URL::to('home/index') }}" method="POST">
MailChimp API Key: <input type="text" name="mc_key" id="mc_key">
<br><br>
Missionhub API Key: <input type="text" name="mh_key" id="mh_key">
<br><br>
<input type="submit" value="Submit" id="submit">
</form>

</span>

</div>

</body>