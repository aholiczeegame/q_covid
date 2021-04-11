<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- เรียกใช้ bootstrap และ jquery ในการตกแต่งโปรแกรม-->
<link rel="stylesheet" href="css/buttons.css">
<script type="text/javascript" src="js/buttons.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/custom.css"/>

<script src="js/bootstrap.min.js"></script> 


<!-- กำหนด Fonts ขอโปรแกรมแสดงเป็น Angsana New ขนาด 22px -->
<style type="text/css">
#wrapall {
	font-family: "Angsana New";
    font-size: 22px;
}
</style>

<STYLE type=text/css> 

#printable { display: block; }

@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 

.bg {
  /* The image used */
  background-image: url("images/background41.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: repeat;
  background-size: cover;
}
</STYLE> 

<!--ใช้ jquery แสดง datetimepicker -->
<link rel="stylesheet" href="js/jquery.datetimepicker.css">
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
<script src="js/jquery.datetimepicker.full.js"></script>

<script type="text/javascript">   
$(function(){
     
    $.datetimepicker.setLocale('th'); // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
     
    // กรณีใช้แบบ inline
  /*  $("#testdate4").datetimepicker({
        timepicker:false,
        format:'d-m-Y',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        inline:true  
    });    */   
     
     
    // กรณีใช้แบบ input
    $("#dateInput1,#dateInput2,#dateInput3").datetimepicker({
        timepicker:false,
        format:'Y-m-d',  // กำหนดรูปแบบวันที่ ที่ใช้ เป็น 00-00-0000            
        lang:'th',  // ต้องกำหนดเสมอถ้าใช้ภาษาไทย และ เป็นปี พ.ศ.
        /*
        onSelectDate:function(dp,$input){
            var yearT=new Date(dp).getFullYear();  
            var yearTH=yearT+543;
            var fulldate=$input.val();
            var fulldateTH=fulldate.replace(yearT,yearTH);
            $input.val(fulldateTH);
        }, */
    });       /*
    // กรณีใช้กับ input ต้องกำหนดส่วนนี้ด้วยเสมอ เพื่อปรับปีให้เป็น ค.ศ. ก่อนแสดงปฏิทิน
    $("#dateInput1,dateInput2,dateInput3").on("mouseenter mouseleave",function(e){
        var dateValue=$(this).val();
        if(dateValue!=""){
                var arr_date=dateValue.split("-"); // ถ้าใช้ตัวแบ่งรูปแบบอื่น ให้เปลี่ยนเป็นตามรูปแบบนั้น
                // ในที่นี้อยู่ในรูปแบบ 00-00-0000 เป็น d-m-Y  แบ่งด่วย - ดังนั้น ตัวแปรที่เป็นปี จะอยู่ใน array
                //  ตัวที่สอง arr_date[2] โดยเริ่มนับจาก 0 
                if(e.type=="mouseenter"){
                    var yearT=arr_date[2]-543;
                }       
                if(e.type=="mouseleave"){
                    var yearT=parseInt(arr_date[2])+543;
                }   
                dateValue=dateValue.replace(arr_date[2],yearT);
                $(this).val(dateValue);                                                 
        }       
    });
    */ 
     
});
</script>
<?php 
error_reporting(-1);
ini_set('display_errors', 'true');
?>

<!-- Script เช็ค Input -->
<script language="javascript">
function fncSubmitQQ()
{
  if(document.form1.txtpname.value == "")
	{
		alert('กรุณากรอกคำนำหน้า');
		document.form1.txtpname.focus();
		return false;
	}	

	    if(document.form1.txtfname.value == "")
	{
		alert('กรุณากรอกชื่อ');
		document.form1.txtfname.focus();
		return false;
	}	

  if(document.form1.txtlname.value == "")
	{
		alert('กรุณากรอกนามสกุล');
		document.form1.txtlname.focus();
		return false;
	}	

      if(document.form1.txtcid.value == "")
	{
		alert('กรุณากรอกเลขบัตร');
		document.form1.txtcid.focus();
		return false;
	}	

  if(document.form1.txtbdate.value == "")
	{
		alert('กรุณากรอกวันเดือนปีเกิด');
		document.form1.txtbdate.focus();
		return false;
	}	

  if(document.form1.txttel.value == "")
	{
		alert('กรุณากรอกเบอร์โทรศัพท์');
		document.form1.txttel.focus();
		return false;
	}	

  if(document.form1.txtprovince.value == "")
	{
		alert('กรุณากรอกจังหวัด');
		document.form1.txtprovince.focus();
		return false;
	}	

  if(document.form1.txtadd.value == "")
	{
		alert('กรุณากรอกที่พัก');
		document.form1.txtadd.focus();
		return false;
	}	

  if(document.form1.txtcc.value == "")
	{
		alert('กรุณากรอกอาการ');
		document.form1.txtcc.focus();
		return false;
	}	

  if(document.form1.txtvstdate.value == "")
	{
		alert('กรุณากรอกวันที่ขอตรวจ');
		document.form1.txtvstdate.focus();
		return false;
	}	

  if(document.form1.txttime.value == "")
	{
		alert('กรุณากรอกช่วงเวลา');
		document.form1.txttime.focus();
		return false;
	}	
  document.form1.submit();
}
</script>

<!-- CSS เช็ค Input -->
<style>
input[type=text] {
  width:100px; 
  text-align: center;
  border: 1px #ff0040 solid;
}
input[type=hidden] {
  width:50px; 
  text-align: center;
  border: 0;
  margin-left: 10px;
}
input[type=file] {
  width:300px; 
  text-align: center;
  border: 1px #ff0040 solid;
}
input.one1[type=text] {
  width:50px; 
  border: 0;
  text-align: center;
  margin-left: 10px;
}
input.one1[type=hidden] {
  width:50px; 
  border: 0;
  text-align: center;
  margin-left: 10px;
}
input.one[type=text] {
  width:100px; 
  text-align: center;
  border: 1px #ff0040 solid;
  margin-right: 0px;
  margin-left: 10px;
}
input.two[type=text] {
  width:200px; 
  text-align: center;
  border: 1px #ff0040 solid;
  margin-right: 30px;
  margin-left: 10px;
}
input.tree[type=text] {
  width:300px; 
  text-align: center;
  border: 1px #ff0040 solid;
  margin-left: 10px;
  margin-bottom: 10px;
}
input.tree2[type=text] {
  width:300px; 
  text-align: center;
  border: 1px #3300CC solid;
  margin-left: 0px;
}
input.two2[type=text] {
  width:200px; 
  text-align: center;
  border: 1px #e0e0dc solid;
  margin-left: 0px;
}
input.four[type=text] {
  width:400px; 
  text-align: left;
  border: 1px #ff0040 solid;
  margin-left: 10px;
}
input.five[type=text] {
  width:500px; 
  text-align: center;
  border: 1px #ff0040 solid;
  margin-left: 10px;
}
input.twono[type=text] {
  width:300px; 
  text-align: center;
  border: 1px #ff0040 solid;
  margin-right: 0px;
  margin-left: 0px;
}
textarea[type=text] {
  width:300px;
  text-align: left;
  border: 1px #ff0040 solid;
  margin-right: 0px;
  margin-left: 10px;
}
textarea.tree2[type=text] {
  width:300px;
  text-align: left;
  border: 1px #3300CC solid;
  margin-right: 0px;
  margin-left: 0px;
}
tr.one{
  height: 70px;
  background-color: #E8E8E8; 
  border: 1px #FFFFFF;
}
tr.one2{
  height: 40px;
  background-color: #c1f7f7; 
}
tr.two{
  height:70px;
  background-color: #B5B5B5; 
  border: 1px #FFFFFF;
}
tr.two2{
  height: 70px;
  background-color: #F0F8FF; 
  border: 1px #FFFFFF;
}
select{
  height: 40px;
  border: 1px #ff0040 solid;
  text-align: right;
}
select.one{
  height: 40px;
  width:  100px;
  border: 1px #ff0040 solid;
  margin-left: 10px; 
  direction: ltr;
  padding-left: 70px; 
}
select.two{
  height: 40px;
  width:  200px;
  border: 1px #ff0040 solid;
  margin-left: 0px; 
  direction: ltr;
  padding-left: 50px; 
}
select.tree{
  height: 40px;
  width:  300px;
  border: 1px #ff0040 solid;
  margin-left: 10px; 
  direction: ltr;
  text-align-last:center;
  margin-bottom: 10px;
}
select.tree2{
  height: 40px;
  width:  300px;
  border: 1px #3300CC solid;
  margin-left: 0px; 
  direction: ltr;
  text-align-last:center;
}
option { direction: ltr; }

/* direction: ltr; */

.block {
    clear: both;
    width: 100%;
}
.block > div {
    display:inline-block;
    width: 19%;
}

</style>

<!-- css banner -->
<style>
div.banner {
  margin: 0;
  font-size: 100%;
  font-weight: bold;
  line-height: 1.1;
  text-align: center;
  position: fixed;
  top: 0;
  left: auto;
  width: 100%;
  right: auto;
}
div.banner p {
  margin: 0; 
  padding: 0.3em 0.4em;
  background: #d9d9d9;
  border: thin outset #d9d9d9;
  color: #696969;
}
div.banner a {
  margin-left: 10px; 
}
</style>

<!-- css รุปภาพ -->
<style>
/*Eliminates padding, centers the thumbnail */

body, html {
padding: 0;
margin: 0;
text-align: center;
}

/* Styles the thumbnail */

a.lightbox img {
height: 150px;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
margin: 0px 0px 0px 0px;
}

/* Styles the lightbox, removes it from sight and adds the fade-in transition */

.lightbox-target {
position: fixed;
top: -100%;
width: 100%;
background: rgba(0,0,0,.7);
width: 100%;
opacity: 0;
-webkit-transition: opacity .5s ease-in-out;
-moz-transition: opacity .5s ease-in-out;
-o-transition: opacity .5s ease-in-out;
transition: opacity .5s ease-in-out;
overflow: hidden;
}

/* Styles the lightbox image, centers it vertically and horizontally, adds the zoom-in transition and makes it responsive using a combination of margin and absolute positioning */

.lightbox-target img {
margin: auto;
position: absolute;
top: 0;
left:0;
right:0;
bottom: 0;
max-height: 0%;
max-width: 0%;
border: 3px solid white;
box-shadow: 0px 0px 8px rgba(0,0,0,.3);
box-sizing: border-box;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Styles the close link, adds the slide down transition */

a.lightbox-close {
display: block;
width:50px;
height:50px;
box-sizing: border-box;
background: white;
color: black;
text-decoration: none;
position: static;
top: -80px;
right: 0;
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:before {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
transform:rotate(45deg);
}

/* Provides part of the "X" to eliminate an image from the close link */

a.lightbox-close:after {
content: "";
display: block;
height: 30px;
width: 1px;
background: black;
position: absolute;
left: 26px;
top:10px;
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
transform:rotate(-45deg);
}

/* Uses the :target pseudo-class to perform the animations upon clicking the .lightbox-target anchor */

.lightbox-target:target {
opacity: 1;
top: 0;
bottom: 0;
position: absolute;
}

.lightbox-target:target img {
max-height: 100%;
max-width: 100%;
}

.lightbox-target:target a.lightbox-close {
top: 0px;
}

</style>

<link rel="shortcut icon" href="images/icon13.png">

<title>PSWH Q Covid-19</title>