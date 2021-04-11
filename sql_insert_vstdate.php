<?php session_start();?>
<?php
        ini_set('date.timezone', 'Asia/Bangkok');

		//เชื่อมต่อฐานข้อมูล อ้างอิงจากไฟล์ connect.php//
		require 'connect.php';
		require_once 'funcDateThai.php';
		

		$date = $_POST["txtvstdate"];
		$time = $_POST["txttime"];
		$status = $_POST["txtstatus"];
		$qnum = $_POST["txtqnum"];

		$check = "SELECT * FROM q_vstdate WHERE vstdate = '".$date."' AND vsttime = '".$time."' ";
    	$result1 = mysqli_query($conn,$check);
    	$num=mysqli_num_rows($result1);
 
    	if($num > 0)
    	{
			$strSQL = "UPDATE q_vstdate";
			$strSQL .=" SET q_status = '".$status."' ";
			$strSQL .=", q_num = '".$qnum."' ";
			$strSQL .="WHERE vstdate = '".$date."' ";
			$strSQL .="AND vsttime = '".$time."' ";
			$objQuery = mysqli_query($conn,$strSQL);
			
			if($objQuery)
			{
		//echo "Save Done"//
		echo "<script type='text/javascript'>
		window.alert('บันทึกสำเร็จ');
		window.location.href = 'javascript:history.go(-1)';
		</script>";
			}
			else
			{
		echo "Error Save [".$strSQL."]";
			}				
    	}
		else
		{
		$strSQL = "INSERT INTO q_vstdate ";
		$strSQL .="(vstdate,vsttime,q_status,q_num) ";
		$strSQL .="VALUES ";
		$strSQL .="('".$date."','".$time."','".$status."','".$qnum."') ";
		$objQuery = mysqli_query($conn,$strSQL);
		
		}

		if($objQuery)
{
		//echo "Save Done"//
	echo "<script type='text/javascript'>
	window.alert('บันทึกสำเร็จ');
    window.location.href = 'javascript:history.go(-1)';
	</script>";
}
		else
{
	echo "Error Save [".$strSQL."]";
	
}	

?>