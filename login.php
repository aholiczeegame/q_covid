<?php session_start();?>
<?php include 'header.php'; ?> 
</head>
<body id="wrapall" class="bg">
<form name="frmlogin"  method="post" action="check_login.php">
  <table align="center" style="margin-top:100px;" bordercolor="">
    <tr align="center"><td>
            <h2>กรุณาเข้าสู่ระบบ</h2>
         <!-- <font color="red">*** ใช้ Username และ Password เช่นเดียวกับ โปรแกรม HosXP ***</font> -->
    </td></tr>
    <tr align="center"><td>
            <h3>ชื่อผู้ใช้</h3> 
        </td>
    </tr>
    <tr>
        <td>
          <input style="text-align: left; width:250px; padding-left:0px; border: 1px #ff0040 solid;" type="text"   id="Username" required name="Username" placeholder="Username" autofocus>
          </td>
    </tr>
    <tr align="center">
          <td>
          <h3>รหัสผ่าน</h3> 
        </td>
    </tr>
    <tr>
        <td>
          <input style="width:250px; padding-left:0px; border: 1px #ff0040 solid;" type="password"   id="Password" required name="Password" placeholder="Password">
      
        </td>
    </tr>
    <tr>
        <td>
        &nbsp;
        </td>
    </tr>
    <tr align="center"><td>
          <button style="width:120px;" class="button button-pill button-flat-action" type="submit">Login</button>
          &nbsp;&nbsp;
          <button style="width:120px;" class="button button-pill button-flat-highlight" type="reset">Reset</button>
    </td></tr>
  </table>   
</form>
<?php include 'function.php'; ?>
<?php include 'footer.php'; ?>
</body>
</html>