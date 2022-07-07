<?php
 function displayMessage()
 {
	 echo "<script>alert('This will be called second because this is post controller Called immediately after your controller is instantiated, but prior to any method calls happening.');</script>";
 }
 function displayPreMessage(){
	 echo "<script>alert('This will be called first because this is pre controller which will get Called immediately prior to any of your controllers being called. All base classes, routing, and security checks have been done');</script>";
 }
function changeBodyColor(){
	 echo "
	 <style>
	 body{
		 background-color: rgba(217,46,46,0.44);
		 box-shadow: 0 0 10px rgb(207,208,34);
	 }
	 </style>
	 	<h1
	 	 style='font-size: 20px;'
	 	>The background colour is being changed by post System Hook which will get called after html page is sent to browser</h1>
	 ";
 }

?>
