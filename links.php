<?php
include_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NIAZI MEDICAL AND DENTAL COLLEGE</title>
    <meta name="description" content="NIAZI MEDICAL AND DENTAL COLLEGE">
    <meta name="keywords" content="NIAZI MEDICAL AND DENTAL COLLEGE">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
<style>
.sms-button-home.side {
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	transform: rotate(-270deg);
	top: 26%;
	margin-right: -56px;
	height: 40px;
}

.sms-button-homeb.sideb {
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	transform: rotate(-270deg);
	top: 26%;
	margin-right: -56px;
	height: 40px;
}
.sms-button-homec.sidec {
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	transform: rotate(-270deg);
	top: 48%;
	margin-right: -56px;
	height: 40px;
}

.sms-button-homed.sided {
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	transform: rotate(-270deg);
	top: 48%;
	margin-right: -56px;
	height: 40px;
}
.sms-button-home {
	width: 150px;
	height: 39px;
	margin: 0 15px 0 0;
	bottom: 0;
	right: 0;
	display: block;
	position: fixed;
	z-index: 9000;
}
.sms-button-home.side a {
	-webkit-border-radius: 0px 0px 5px 5px;
	-moz-border-radius: 0px 0px 5px 5px;
	border-radius: 0px 0px 5px 5px;
	border:2px solid #fff;
}
.sms-button-home a {
	width: 150px;
	height: 39px;
	box-sizing: border-box;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	line-height: 39px;
	margin: 0;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	background-color: #000;
	color: #FFF;
	font-weight: 700;
	text-shadow: none;
	-webkit-transition: background-color .3s ease-out;
	-moz-transition: background-color .3s ease-out;
	transition: background-color .3s ease-out;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
	padding: 0;
}
.sms-button-homeb {
	width: 150px;
	height: 39px;
	margin: 0 15px 0 0;
	bottom: 0;
	right: 0;
	display: block;
	position: fixed;
	z-index: 9000;
}
.sms-button-homeb a {
	width: 150px;
	height: 39px;
	box-sizing: border-box;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	line-height: 39px;
	margin: 0;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	background-color: #000;
	color: #FFF;
	font-weight: 700;
	text-shadow: none;
	-webkit-transition: background-color .3s ease-out;
	-moz-transition: background-color .3s ease-out;
	transition: background-color .3s ease-out;
	-webkit-border-radius: 0px 0px 5px 5px;
	-moz-border-radius: 0px 0px 5px 5px;
	border-radius: 0px 0px 5px 5px;
	padding: 0;
	border:2px solid #fff;
}
.sms-button-homec {
	width: 150px;
	height: 39px;
	margin: 0 15px 0 0;
	bottom: 0;
	right: 0;
	display: block;
	position: fixed;
	z-index: 9000;
}
.sms-button-homec.sidec a {
	-webkit-border-radius: 0px 0px 5px 5px;
	-moz-border-radius: 0px 0px 5px 5px;
	border-radius: 0px 0px 5px 5px;
	border:2px solid #fff;
}
.sms-button-homec a {
	width: 150px;
	height: 39px;
	box-sizing: border-box;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	line-height: 39px;
	margin: 0;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	background-color: #000;
	color: #FFF;
	font-weight: 700;
	text-shadow: none;
	-webkit-transition: background-color .3s ease-out;
	-moz-transition: background-color .3s ease-out;
	transition: background-color .3s ease-out;
	-webkit-border-radius: 5px 5px 0 0;
	-moz-border-radius: 5px 5px 0 0;
	border-radius: 5px 5px 0 0;
	padding: 0;
}
.sms-button-homed {
	width: 150px;
	height: 39px;
	margin: 0 15px 0 0;
	bottom: 0;
	right: 0;
	display: block;
	position: fixed;
	z-index: 9000;
}
.sms-button-homed a {
	width: 150px;
	height: 39px;
	box-sizing: border-box;
	border-style: solid;
	border-width: 0;
	cursor: pointer;
	line-height: 39px;
	margin: 0;
	position: relative;
	text-decoration: none;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	background-color: #000;
	color: #FFF;
	font-weight: 700;
	text-shadow: none;
	-webkit-transition: background-color .3s ease-out;
	-moz-transition: background-color .3s ease-out;
	transition: background-color .3s ease-out;
	-webkit-border-radius: 0px 0px 5px 5px;
	-moz-border-radius: 0px 0px 5px 5px;
	border-radius: 0px 0px 5px 5px;
	padding: 0;
	border:2px solid #fff;
}

@media only screen and (max-width: 1024px) {
.sms-button-homeb.sideb {
	top: 40%;
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
	display:none;
}
}
@media only screen and (max-width: 640px) {
.sms-button-home.side {
	display:none;
}
.sms-button-homeb.sideb {
	top: 40%;
}
.sms-button-homec.sidec {
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
.sms-button-homeb.sideb {
	top: 40%;
}
.sms-button-home.side {
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
}
.sms-button-homec.sidec {
	display:none;
}
}
@media only screen and (max-width: 640px) and (min-width: 480px) {
.sms-button-homeb.sideb {
	top: 40%;
}
.sms-button-home.side {
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
}
.sms-button-homec.sidec {
	display:none;
}
}
@media (max-width:384px){
.sms-button-homeb.sideb {
	top: 40%;
}
.sms-button-home.side {
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
}
.sms-button-homec.sidec {
	display:none;
}
}
@media (max-width:320px){
.sms-button-homeb.sideb {
	top: 40%;
}
.sms-button-home.side {
	display:none;
}
.sms-button-homed.sided {
	top: 67%;
}
.sms-button-homec.sidec {
	display:none;
}
}
</style> 
</head>
<body>