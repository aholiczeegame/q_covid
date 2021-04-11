
<!-- กำหนดค่าต่างๆของโปรแกรม อ้างอิงจากไฟล์ header.php -->
<?php include 'header.php' ;?>

</head>

<?php 
    ini_set('date.timezone', 'Asia/Bangkok');
?>

<?php 
require 'function.php';
include 'funcDateThai.php';

$Query2 = QueryPlace();
$objQuery2 = mysqli_query($conn,$Query2);


?>

<!-- รวมแถว ตาราง
<th rowspan="2"><div align="center">คอลลัม</div></th>
<th colspan="5"><div align="center">ฟิว</div></th>
-->

<body id="wrapall" class="bg">
<form name="form1" method="post" action="sql_insert_q.php" enctype="multipart/form-data" onSubmit="JavaScript:return fncSubmitQQ();">
<div class="banner" id=non-printable>
<p>
<!--<a style="width:130px;" class="button button-rounded button-flat-primary" href="user_view.php?fullname=<?php echo $fullname;?>">ดูข้อมูล</a> 
<a style="width:130px;" class="button button-rounded button-flat-caution" href="index.php">หน้าแรก</a> -->
<input style="width:130px; margin-left: 10px;" class="button button-rounded button-flat-action" name="submit" type="submit" value="บันทึก"> 
</p>
</div>

<table style="margin-top:100px" bordercolor="#E8E8E8" width="auto" border="1" align="center" cellspacing="0" cellpadding="0">

<tr class="two" valign="middle"><th><div align="center">ข้อมูลส่วนตัว</div></th></tr>    

          <tr class="one" valign="middle">
          <td>
          <div align="center">คำนำหน้า<input class="one" type="text" name="txtpname" value="" autocomplete="off"> </div>
          </td>
          </tr>

          <tr class="two2" valign="middle">
          <td><div align="center">ชื่อ<input class="tree" type="text" name="txtfname" value="" autocomplete="off"> </div></td>
          </tr>

          <tr class="one" valign="middle">
          <td><div align="center">สกุล<input class="tree" type="text" name="txtlname" value="" autocomplete="off"></div></td>
          </tr>

          <tr class="two2" valign="middle">
          <td><div align="center">เลขบัตรประจำตัวประชาขน<input class="tree" type="text" name="txtcid" value="" autocomplete="off" ></div></td>
          </tr>

          <tr class="one" valign="middle" >
          <td><div align="center">วันเดือนปีเกิด<input class="tree" id="dateInput2" type="text" name="txtbdate" value="" autocomplete="off"> </div></td>
          </tr>
     
          <tr class="two2" valign="middle">
          <td><div align="center">เบอร์โทรศัพท์<input class="tree" type="text" name="txttel" value="" autocomplete="off" ></div></td>
          </tr>

            <tr><td>&nbsp;</td></tr>
          <tr class="two" valign="middle"><th><div align="center">ข้อมูลการเดินทาง</div></th></tr>  

          <tr class="one" valign="middle">
          <td><div align="center">เดินทางมาจาก<select class="tree" name="txtprovince">
          <?php
          do {  
          ?>
          <option value="<?php echo $objResult2['cname']?>"><?php echo $objResult2['cname']?></option>
          <?php
              } 
          while ($objResult2 = mysqli_fetch_assoc($objQuery2));
            $rows=mysqli_num_rows($objQuery2);
            if($rows > 0) {
            mysqli_data_seek($objQuery2, 0);
            $objResult2 = mysqli_fetch_assoc($objQuery2);
                          }
          ?> 
            </select>
            </div></td>
          </tr>

          <tr class="two2" valign="middle">
          <td><div align="center">ข้อมูลที่พักอาศัย<input class="tree" type="text" name="txtadd" value="" autocomplete="off" ></div></td>
          </tr>

            <tr><td>&nbsp;</td></tr>
          <tr class="two" valign="middle"><th><div align="center">อาการที่พบ</div></th></tr>  

          <tr class="one" valign="middle">
          <td><div align="center">ท่านมีอาการเหล่านี้หรือไม่ <select class="tree" name="txtcc">
    <option value=""></option>
	  <option  value="มีไข้">มีไข้</option>
    <option value="ไอแห้ง">ไอแห้ง</option>
    <option value="เจ็บคอ">เจ็บคอ</option>
    <option  value="อ่อนเพลีย/ปวดเมื่อยเนื้อตัว">อ่อนเพลีย/ปวดเมื่อยเนื้อตัว</option>
    <option  value="ท้องเสีย">ท้องเสีย</option>
    <option  value="จมูกไม่ได้กลิ่น">จมูกไม่ได้กลิ่น</option>
    <option  value="ไม่พบอาการใดๆ">ไม่พบอาการใดๆ</option></select></div></td>
          </tr>

          <tr class="two2" valign="middle">
          <td><div align="center">อาการอื่นๆ ระบุ<input class="tree" type="text" name="txtnote" value="" autocomplete="off" ></div></td>
          </tr>

          <tr><td>&nbsp;</td></tr>
          <tr class="two" valign="middle"><th><div align="center">วันที่ขอตรวจ</div></th></tr>  

          <tr class="one" valign="middle">
          <td><div align="center">ระบุวันที่ขอตรวจ<input class="tree" id="dateInput3" type="text" name="txtvstdate" value="" autocomplete="off"> </div></td>
          </tr>

          <tr class="two2" valign="middle">
          <td><div align="center">ระบุช่วงเวลา <select class="tree" name="txttime">
    <option value=""></option>
	  <option  value="1">9:00 - 10:00 น.</option>
    <option value="2">13:00 - 14:00 น.</option></select>
    </div></td>
          </tr>


</table>  
</form> 
<br><br>

<!-- accept="image/*;capture=camera" -->
<!-- ส่วนล่างขอโปรแกรม -->
<?php include 'footer.php'; ?>

