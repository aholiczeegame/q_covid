<?php session_start();?>
<?php 
 // ไม่พบผู้ใช้กระโดดกลับไปหน้า index
if (!$_SESSION["UserID"]){
    Header("Location:index.php");
}
//ให้สิทธิ์ แพทย์ แลพเวชระเบียนเข้าใช้หน้านี้
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
  //เชื่อมต่อ Query//
  require 'function.php';

  //เรียกใช้ Function//
  $Query = EditVstdate();
  $objQuery = mysqli_query($conn,$Query);
  $objResult = mysqli_fetch_array($objQuery); 
?>
  <body id="wrapall" class="bg">
	<form name="form1" method="post" action="sql_insert_vstdate.php">

    <div class="banner" id=non-printable>
<p>
<input style="width:130px;" class="button button-rounded button-flat-action" name="submit" type="submit" value="บันทึก"> 
<a style="width:130px;" class="button button-rounded button-flat-highlight" href="javascript:history.go(-1)">กลับ</a>
</p>
</div>

    <table style="margin-top:100px" bordercolor="#E8E8E8" width="95%" border="1" align="center" cellspacing="0" cellpadding="0">

          <tr class="one" valign="middle" >
          <td><div align="center">เลือกวันที่ต้องการรับ<input class="tree" id="dateInput1" type="text" name="txtvstdate" value="" autocomplete="off"> </div></td>
          </tr>
          <tr class="one" valign="middle" >
          <td><div align="center">เลือกเวลาที่ปิดรับ<select class="tree" name="txttime">
    <option value=""></option>
	  <option  value="1">9:00 - 10:00 น.</option>
    <option value="2">13:00 - 14:00 น.</option></select></div></td>
          </tr>
          <tr class="one" valign="middle" >
          <td><div align="center">สถานะ<select class="tree" name="txtstatus">
    <option value=""></option>
	  <option value="Y">เปิดรับ</option>
    <option value="N">ปิดรับ</option></select></div></td>
    </tr>

    <tr class="one" valign="middle" >
          <td><div align="center">จำนวนที่รับ<input class="tree" type="text" name="txtqnum" value="" autocomplete="off" ></div></td>
    </tr>

  </table><br><br>

</form>
<!-- valign="bottom"  valign="middle" <td align="justify"> rowspan="2" colspan="2" -->
<?php include 'footer.php'; ?>

<?php }  ?>