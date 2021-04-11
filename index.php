
<!-- กำหนดค่าต่างๆของโปรแกรม อ้างอิงจากไฟล์ header.php -->
<?php include 'header.php' ;?>

</head>

<?php 
    ini_set('date.timezone', 'Asia/Bangkok');
?>

<?php 
require 'function.php';
include 'funcDateThai.php';

$Query = ShowQ();
$objQuery = mysqli_query($conn,$Query);




?>

<!-- รวมแถว ตาราง
<th rowspan="2"><div align="center">คอลลัม</div></th>
<th colspan="5"><div align="center">ฟิว</div></th>
-->

<body id="wrapall" class="bg">
<form name="form1" method="post" action="" enctype="multipart/form-data">

<div class="banner" id=non-printable>
<p>
<!--<input style="width:130px;" class="button button-rounded button-flat-action" name="submit" type="submit" value="บันทึก"> -->
<a style="width:130px;" class="button button-rounded button-flat-highlight" href="q.php">จองคิวตรวจ</a>
<a style="width:130px;" class="button button-rounded button-flat-action" href="login.php">Login</a>
</p>
</div>

<table style="margin-top:100px" bordercolor="#E8E8E8" width="95%" border="1" align="center" cellspacing="0" cellpadding="0">
<tr class="two" valign="middle"><th><div align="center"><h2>ข้อมูลการจองคิว<h2></div></th></tr>  
<?php
    $i = 1;
    if ($objQuery){
	while($objResult = mysqli_fetch_array($objQuery))
	{
?>

          <tr style="border: 1px #FFFFFF;" valign="middle" bgcolor="#d7f7f7">
          <td>
          <div align="center"> <font> <?php echo DateThai2($objResult["vstdate"]);?></font>
          <font style="margin-left: 20px;">
          <?php if ($objResult["vsttime"] == "1" ) {echo '9:00 - 10:00 น.';}  else if ($objResult["vsttime"] == "2" ){echo '13:00 - 14:00 น.';} ?>
          </font>
          <font color="red" style="margin-left: 20px;"><?php if ($objResult["count"]  >= $objResult["q_num"] OR $objResult["q_status"]  == "N") {echo 'คิวเต็ม';}  
          else if ($objResult["count"] < $objResult["q_num"] ){echo 'คิวว่าง';} ?></font>
          <font color="green" style="margin-left: 10px;"> <?php if ($objResult["q_status"]  == "N") {echo '';}  else if ($objResult["count"] < $objResult["q_num"] ){echo $objResult["sum"];} ?></font>
         
          </div></td>
          </tr>

<?php
	$i++; } }
?>
          
</table>          
</form> 
<br><br>

<!-- ส่วนล่างขอโปรแกรม -->
<?php include 'footer.php'; ?>
