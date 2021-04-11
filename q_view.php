
<!-- กำหนดค่าต่างๆของโปรแกรม อ้างอิงจากไฟล์ header.php -->
<?php include 'header.php' ;?>

</head>

<?php 
    ini_set('date.timezone', 'Asia/Bangkok');
?>

<?php 
require 'function.php';
include 'funcDateThai.php';

$Query = QueryQ();
$objQuery = mysqli_query($conn,$Query);
$objResult = mysqli_fetch_array($objQuery);

?>

<!-- รวมแถว ตาราง
<th rowspan="2"><div align="center">คอลลัม</div></th>
<th colspan="5"><div align="center">ฟิว</div></th>
-->


<body id="wrapall" class="bg">
<form name="form1" method="post" action="sql_insert_q.php" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmit();">

<div class="banner" id=non-printable>
<p>
<!--<a style="width:130px;" class="button button-rounded button-flat-primary" href="user_view.php?fullname=<?php echo $fullname;?>">ดูข้อมูล</a> -->
<a style="width:130px;" class="button button-rounded button-flat-caution" href="index.php">หน้าแรก</a>
</p>
</div>

<table style="margin-top:100px" bordercolor="#E8E8E8" width="auto" border="1" align="center" cellspacing="0" cellpadding="0">

<tr class="two" valign="middle"><th><div align="center">ข้อมูลการจองคิวตรวจ</div></th></tr>    

            <tr class="one" valign="middle">
          <td>
          <div align="center">วันที่จอง<font color="red" style="margin-left: 20px;"><?php echo DateThai2($objResult["vstdate"]);?></font></div>
          </td>
          </tr>

          <tr class="one" valign="middle">
          <td>
          <div align="center">ช่วงเวลา<font color="red" style="margin-left: 20px;"><?php if ($objResult["vsttime"] == "1" ) {echo '9:00 - 10:00 น.';}  else if ($objResult["vsttime"] == "2" ){echo '13:00 - 14:00 น.';} ?></font></div>
          </td>
          </tr>

          <tr class="one" valign="middle">
          <td>
          <div align="center">ชื่อ - สกุล <font style="margin-left: 20px;"><?php echo $objResult["fullname"];?> </font></div>
          </td>
          </tr>

          <tr class="one" valign="middle">
          <td><div align="center">เลขบัตรประจำตัวประชาขน<font style="margin-left: 20px;"><?php echo $objResult["cid"];?> </font></div></td>
          </tr>

          <tr class="one" valign="middle">
          <td><div align="center">เดินทางมาจาก<font style="margin-left: 20px;"><?php echo $objResult["province"];?> </font></div></td>
          </tr>

          <tr class="one" valign="middle" >
          <td><div align="center">อาการที่พบ<font style="margin-left: 20px;"><?php echo $objResult["cc"];?> </font></div></td>
          </tr>

          <tr class="one" valign="middle" >
          <td><div align="center"><font color="red" style="font-size: 15px;">*โปรดมาก่อนเวลาที่จอง 15 นาทีเพื่อความรวดเร็ว</font></div>
          <div align="center"><font color="red" style="font-size: 15px;">*โปรดเตรียมบัตรประชาชนมาด้วยในวันตรวจ</font></div>
          <div align="center"><font color="red" style="font-size: 15px;">*โปรดสวมหน้ากากอนามัย และวัดอุณภมิูร่างกายก่อนเข้าตรวจ</font></div></td>
          </tr>

</table>  
</form> 
<br><br>

<!-- accept="image/*;capture=camera" -->
<!-- ส่วนล่างขอโปรแกรม -->
<?php include 'footer.php'; ?>

