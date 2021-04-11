
<?php
        ini_set('date.timezone', 'Asia/Bangkok');

		require 'connect.php';
		require_once 'funcDateThai.php';
		
		$pname = $_POST["txtpname"];
		$fname = $_POST["txtfname"];
		$lname = $_POST["txtlname"];
		$cid = $_POST["txtcid"];
		$bdate = $_POST["txtbdate"];
		$tel = $_POST["txttel"];
		$province = $_POST["txtprovince"];
		$address = $_POST["txtadd"];
		$cc = $_POST["txtcc"];
		$note = $_POST["txtnote"];
		$date = $_POST["txtvstdate"];
		$time = $_POST["txttime"];
		$datethai = DateThai2($date);


		$check = "SELECT * FROM q_covid WHERE vstdate = '".$date."' AND vsttime = '".$time."' ";
    	$result1 = mysqli_query($conn,$check);
    	$num=mysqli_num_rows($result1);

		$one=1;
		$num1 = $num+$one ;

		$check2 = "SELECT q_status FROM q_vstdate WHERE vstdate = '".$date."' AND vsttime = '".$time."' ";
		$result2 = mysqli_query($conn,$check2);
		$datecheck = mysqli_fetch_array($result2); 

		$check3 = "SELECT * FROM q_covid WHERE vstdate = '".$date."' AND cid = '".$cid."' ";
    	$result3 = mysqli_query($conn,$check3);
    	$num3=mysqli_num_rows($result3);

		$check4 = "SELECT q_num FROM q_vstdate WHERE vstdate = '".$date."' AND vsttime = '".$time."' ";
		$result4 = mysqli_query($conn,$check4);
		$qcheck4 = mysqli_fetch_array($result4); 
		

    	if($num > $qcheck4["q_num"] OR $datecheck["q_status"] == "N" OR $num3 > 0 OR $datecheck["q_status"] == "")
    	{
    	echo "<script>";
		echo "alert('วันที่ หรือ เวลาที่ระบุ คิวตรวจเต็มแล้ว หรือยังไม่เปิดให้จอง');";
		echo "window.history.back();";
		echo "</script>";
    	}
		else
		{

		$strSQL = "INSERT INTO q_covid ";
		$strSQL .="(pname,fname,lname,cid,bdate,tel,province,q_address,cc,note,q,vstdate,vsttime) ";
		$strSQL .="VALUES ";
		$strSQL .="('".$pname."','".$fname."' ";
		$strSQL .=",'".$lname."','".$cid."' ";
		$strSQL .=",'".$bdate."','".$tel."'  ";
		$strSQL .=",'".$province."','".$address."' ";
		$strSQL .=",'".$cc."','".$note."' ";
		$strSQL .=",'".$num1."' ";
		$strSQL .=",'".$date."','".$time."') ";
		$objQuery = mysqli_query($conn,$strSQL);

		}
		
	
		if($objQuery)
{
		//echo "Save Done"//
		echo "<script type='text/javascript'>
	window.alert('บันทึกสำเร็จ');
    window.location.replace('q_view.php?cid=".$cid."&vstdate=".$date."&vsttime=".$time." ');
	</script>";
}
		else
{
	echo "Error Save [".$strSQL."]";
	
}	

?>