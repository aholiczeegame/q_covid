<?php header('Cache-Control: no cache');
session_cache_limiter('private_no_expire'); 
session_start();?>
<?php 
 // ไม่พบผู้ใช้กระโดดกลับไปหน้า index
if (!$_SESSION["UserID"]){
    Header("Location:index.php");
}
//ให้สิทธิ์ admin เข้าใช้หน้านี้
else if ($_SESSION["Userlevel"]==""){  //check session
    echo "<script>";
        echo "alert(\" คุณไม่ได้รับสิทธิ์ในหน้านี้ \");"; 
        echo "window.history.back()";
        echo "</script>";  
}else{ ?>

<!-- กำหนดค่าต่างๆของโปรแกรม อ้างอิงจากไฟล์ header.php -->
<?php include 'header.php'; ?> 

</head>

<?php
 
  require 'function.php';
  require_once 'funcDateThai.php';
 
  //เรียกใช้ Function//
  $Query = QueryAdmin();
  $objQuery = mysqli_query($conn,$Query);


?>

</head>
  <body id="wrapall" class="bg">
	<form name="form1" method="post" action="admin_view.php">
 
<div class="banner" id=non-printable>
<p>
  <font>สวัสดี คุณ&nbsp;<?php echo $_SESSION["UserFullname"];?><font>
  <a style="width:130px;" class="button button-rounded button-flat-highlight" href="edit_vstdate.php">เพิ่มวันเปิดรับ</a>
  <!--<a style="width:150px;" class="button button-rounded button-flat-royal" href="show_place.php">เพิ่มคิว</a> -->
  <a style="width:130px;" class="button button-rounded button-flat-primary" href="" onClick="admin_view.php">Refresh</a>
  <a style="width:130px;" class="button button-rounded button-flat-caution" href="logout.php">Log Out</a>
 <!-- <a style="width:130px;" class="button button-rounded button-flat-caution" href="check_folder.php">check folder</a> -->
  <!--<a style="width:130px;" class="button button-rounded button-flat-action" href="export_excel.php?excel=1&startdate=<?php echo $_POST['startdate'];?>&enddate=<?php echo $_POST['enddate'];?>&txtplace=<?php echo $_POST['txtplace'];?>&txtfname=<?php echo $_POST['txtfname'];?>">ส่งออก Excel</a> -->
</p>
</div>

<table align="center" style="margin-top:55px;" bordercolor="">
<tr height="60px" bgcolor="#dedede">
<th>&nbsp; ดูข้อมูลตามวันที่ &nbsp;</th>
<th><input class="two" id="dateInput2" type="text" name="startdate" value="<?php echo $_POST['startdate'];?>" autocomplete="off"> </th>
<th>&nbsp;&nbsp;</th>
<th>&nbsp; ถึงวันที่ &nbsp;</th>
<th><input class="two" id="dateInput3" type="text" name="enddate" value="<?php echo $_POST['enddate'];?>" autocomplete="off"> </th>
<th><div style="margin-left:20px;" id=non-printable><button style="width:130px;" class="button button-rounded button-flat-primary" name="btnSeacrch" type="submit"  id="btnSeacrch">ค้นหา</button></div></th>
</tr>
</table>

<table align="center" style="margin-top:10px" border="1" cellspacing="0" bordercolor="#c2c2c2" width="98%" cellpadding="0">
<tr height="35" valign="middle" bgcolor="#b5b5b5">
<th width="40px"> <div align="center">ลำดับ </div></th>
<th width="auto"> <div align="center">cid</div></th>
<th width="auto"> <div align="center">ชื่อ-สกุล</div></th>
<th width="auto"> <div align="center">วันที่จอง</div></th>
<th width="auto"> <div align="center">เวลาที่จอง</div></th>
<th width="auto"> <div align="center">มาจาก</div></th>
<th width="auto"> <div align="center">ที่พัก</div></th>
<th width="auto"> <div align="center">อาการ</div></th>
<th width="auto"> <div align="center">อาการอื่นๆ</div></th>
<th width="auto"> <div align="center">อายุ</div></th>
<th width="auto"> <div align="center">เบอร์โทร์</div></th>
<th width="auto"> <div align="center">HosXP</div></th>
<!--<th width="110px"> <div align="center">แก้ไขข้อมูล</div></th>
<th width="130px"> <div align="center">ลบข้อมูล</div></th> -->
</tr>
<?php
    $i = 1;
    if ($objQuery){
	while($objResult = mysqli_fetch_array($objQuery))
	{
?>
<tr valign="middle" bgcolor="#F4F4F4">
<td><div align="center"><?php echo $i;?></div></td>
<td><div align="center"><?php echo $objResult["cid"];?></div></td>
<td><div align="center"><?php echo $objResult["fullname"];?></div></td>
<td><div align="center"><?php echo DateThai2($objResult["vstdate"]);?></div></td>
<td><div align="center"><?php if ($objResult["vsttime"] == "1" ) {echo '9:00 - 10:00 น.';}  else if ($objResult["vsttime"] == "2" ){echo '13:00 - 14:00 น.';} ?></div></td>
<td><div align="center"><?php echo $objResult["province"];?></div></td>
<td><div align="center"><?php echo $objResult["q_address"];?></div></td>
<td><div align="center"><?php echo $objResult["cc"];?></div></td>
<td><div align="center"><?php echo $objResult["note"];?></div></td>
<td><div align="center"><?php echo $objResult["age"];?></div></td>
<td><div align="center"><?php echo $objResult["tel"];?></div></td>
<td><div align="center"><?php if ($objResult["hosxp"] == "" ) {echo 'ไม่พบ';}  else {echo 'พบข้อมูล';} ?></div></td>
<!--
<td><div align="center"><a class="button button-rounded button-flat-highlight" 
href="edit_event.php?id=<?php echo $objResult["id"];?>">แก้ไข</a></div></td>
<td><div align="center"><a  class="button button-rounded button-flat-caution" 
href="sql_delete_event.php?id=<?php echo $objResult["id"];?>&pic=<?php echo $objResult["pic"];?>">ลบข้อมูล</a></div></td> -->
</tr>
<?php
		$i++; } }
?>
</table>

</form>
  <?php include 'footer.php'; ?>
  <?php } ?>