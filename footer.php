<!-- กำหนดส่วนล่างของโปรแกรม-->
<br>
<div>
<?php
$GtrQuery = QueryFooter();
$GQuery = mysqli_query($conn,$GtrQuery);
$GResult = mysqli_fetch_assoc($GQuery);
?>
<table width="100%"  border="0">
 <tr>
<td><div align="center"><strong><?php echo $GResult["program"];?>&nbsp;&nbsp;<?php echo $GResult["version"];?></strong></div></td>
</tr>
  <tr>
    <td><div align="center"><strong><?php echo $GResult["by"];?></strong></div></td>
  </tr>
</table>
</div>

</body>
</html>