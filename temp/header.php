<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of shahidul
 *
 * @author shahidul
 */
?>
<html>
    <head>
        <title>Khaled Group Of Companies</title>
		<link rel="shortcut icon" href="images/khaled.ico">
        <link rel="stylesheet" href="css/header.css" type="text/css" />

		<link rel="stylesheet" type="text/css" href="css/slidingdoors.css" />
		
        <script type="text/javascript" src="js/dropdowntabs.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
<script>
function loadXMLDocContact(){  
$(document).ready(function(){
    $("#contant").load("pages/contact.php");
});
}
function loadXMLDocCareer(){ 
$(document).ready(function(){
    $("#contant").load("pages/career.php");
});
}
function loadXMLDocCompanies(){  
$(document).ready(function(){
    $("#contant").load("pages/companies.php");
});
}
function loadXMLDocCorevalues(){ 
$(document).ready(function(){
    $("#contant").load("pages/corevalues.php");
});
}
function loadXMLDocAboutus(){  
$(document).ready(function(){
    $("#contant").load("pages/aboutus.php");
});
}
function loadXMLDocHome(){ 
$(document).ready(function(){
    $("#contant").load("pages/home.php");
});
}
</script>
    </head>
    <body>
        <div id="wrapper">
        <div id="head">

            <div id="hMenu">
                    
            </div>
            <div id="hMenu">
                    
            </div>
            <div id="hMenu">
                    
            </div>
            <div id="hMenu">
               
    <div id="slidemenu" class="slidetabsmenu">
        <ul>
            <li><a href="#" onmouseover="loadXMLDocContact()"><span>Contact</span></a></li>
            <li><a href="#" onmouseover="loadXMLDocCareer()"><span>Career</span></a></li>
            <li><a href="#" onmouseover="loadXMLDocCompanies()"><span>Companies</span></a></li>
            <li><a href="#" onmouseover="loadXMLDocCorevalues()"><span>Core Values</span></a></li>
            <li><a href="#" onmouseover="loadXMLDocAboutus()"><span>About us</span></a></li>
            <li><a href="#" onmouseover="loadXMLDocHome()"><span>Home</span></a></li>
        </ul>
    </div>   
            </div>
        </div>
<div id="contant">        
        
