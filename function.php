<?php
require 'connect.php';

//admin_view
function QueryAdmin() {
    if(isset($_POST['startdate'])){ $startdate=$_POST['startdate']; }else{ $startdate=""; }
    if(isset($_POST['enddate'])){ $enddate=$_POST['enddate']; }else{ $enddate=""; }


    //ดูข้อมูลตามวันที่
     if ($startdate!="" && $enddate!=""){
        $strSQL = "SELECT q.*,concat(q.pname,q.fname,' ',q.lname) AS 'fullname' , p.cid AS 'hosxp',TIMESTAMPDIFF(YEAR,q.bdate,curdate()) AS 'age'
        FROM q_covid q 
        LEFT OUTER JOIN hos.patient p on p.cid = q.cid 
        WHERE q.vstdate BETWEEN '".$startdate."' AND '".$enddate."' 
        AND q.q != '0'
        ORDER BY q.vstdate,q.vsttime ASC "
        or trigger_error(mysqli_error()); 
        return $strSQL;
    }
      
        else if ($startdate=="" && $enddate==""){
        $strSQL = "SELECT q.*,concat(q.pname,q.fname,' ',q.lname) AS 'fullname' , p.cid AS 'hosxp',TIMESTAMPDIFF(YEAR,q.bdate,curdate()) AS 'age'
        FROM q_covid q 
        LEFT OUTER JOIN hos.patient p on p.cid = q.cid 
        WHERE vstdate > (DATE_ADD(CURDATE(),INTERVAL - 1 DAY))
        AND q.q != '0'
        ORDER BY q.vstdate,q.vsttime ASC"
        or trigger_error(mysqli_error()); 
        return $strSQL;
    
        /* WHERE vstdate > (DATE_ADD(CURDATE(),INTERVAL - 1 MONTH))
        WHERE MONTH(regdate) = DATE_FORMAT(NOW(),'%m') 
         AND YEAR(regdate) = DATE_FORMAT(NOW(),'%Y') "; */
        }
}


function ShowQ() {
    $strSQL = "SELECT c.vstdate,c.vsttime,count(c.vstdate)-1 AS 'count',(v.q_num-count(c.vstdate))+1 AS 'sum' ,v.q_status,v.vsttime AS 'vtime' ,v.q_num
    FROM q_covid c 
    INNER JOIN q_vstdate v ON v.vstdate=c.vstdate AND v.vsttime=c.vsttime
    WHERE c.vstdate > (DATE_ADD(CURDATE(),INTERVAL - 1 MONTH))
    GROUP BY c.vstdate,c.vsttime
    ORDER BY c.vstdate ASC "
    or trigger_error(mysqli_error()); 
    return $strSQL;
}


function QueryVstdate() {
    $strSQL = "SELECT * FROM q_vstdate"
    or trigger_error(mysqli_error()); 
    return $strSQL;
}


function QueryQ() {
    $cid = $_REQUEST["cid"];
    $date = $_REQUEST["vstdate"];
    $time = $_REQUEST["vsttime"];
    $strSQL = "SELECT *,concat(pname,fname,' ',lname) AS 'fullname' 
    FROM q_covid 
    WHERE cid = '".$cid."'
    AND vstdate = '".$date."' 
    AND vsttime = '".$time."' "
    or trigger_error(mysqli_error()); 
    return $strSQL;
}

// edit_user_pass & edit_user
function EditVstdate() {
    $strSQL = "SELECT c.vstdate,c.vsttime,v.q_status,v.vsttime AS 'vtime'
    FROM q_covid c 
    LEFT OUTER JOIN q_vstdate v ON v.vstdate=c.vstdate AND v.vsttime=c.vsttime
    WHERE c.vstdate BETWEEN '".$startdate."' AND '".$enddate."'
    GROUP BY c.vstdate,c.vsttime
    ORDER BY c.vstdate ASC "
    or trigger_error(mysqli_error()); 
    return $strSQL;
}



// edit_event & admin_view & guard & show_place
function QueryPlace() {
    $strSQL = "SELECT * FROM q_province
    ORDER BY id ASC "
    or trigger_error(mysqli_error()); 
    return $strSQL;
}

//export_excel
function ExportExcel() {
    if(isset($_GET['startdate'])){ $startdate=$_GET['startdate']; }else{ $startdate=""; }
    if(isset($_GET['enddate'])){ $enddate=$_GET['enddate']; }else{ $enddate=""; }
    if(isset($_GET['txtplace'])){ $txtplace=$_GET['txtplace']; }else{ $txtplace=""; }
    if(isset($_GET['txtfname'])){ $txtfname=$_GET['txtfname']; }else{ $txtfname=""; }


    //ดูข้อมูลตามวันที่
     if ($startdate!="" && $enddate!="" && $txtplace=="" && $txtfname==""){
        $strSQL = "SELECT * FROM sr_guard
        WHERE vstdate BETWEEN '".$startdate."' AND '".$enddate."' "
        or trigger_error(mysqli_error()); 
        return $strSQL;
    }
        //ค้นหาจากชื่อ-สกุล
        else if ($txtfname!="" && $startdate=="" && $enddate=="" && $txtplace==""){
        $strSQL = "SELECT * FROM sr_guard
        WHERE fullname LIKE ('%".$txtfname."%') "
        or trigger_error(mysqli_error()); 
        return $strSQL;
    } 
        //ค้นหาข้อมูลตามสถานที่
        else if ($txtplace!="" && $startdate=="" && $enddate=="" && $txtfname==""){
        $strSQL = "SELECT * FROM sr_guard
        WHERE place = '".$txtplace."' "
        or trigger_error(mysqli_error()); 
        return $strSQL;
        }
        
        //ดูข้อมูลตามวันที่และชื่อ
        else if ($txtfname!="" && $startdate!="" && $enddate!="" && $txtplace==""){
        $strSQL = "SELECT * FROM sr_guard 
        WHERE vstdate BETWEEN '".$startdate."' AND '".$enddate."' 
        AND fullname LIKE ('%".$txtfname."%') "
        or trigger_error(mysqli_error()); 
        return $strSQL;
        }

        //ดูข้อมูลตามชื่อและสถานที่
        else if ($txtfname!="" && $txtplace!="" && $startdate=="" && $enddate=="" ){
            $strSQL = "SELECT * FROM sr_guard 
            WHERE fullname LIKE ('%".$txtfname."%')
            AND place = '".$txtplace."' "
            or trigger_error(mysqli_error()); 
            return $strSQL;
            }
        
            //ดูข้อมูลตามวันที่และสถานที่
        else if ($startdate!="" && $enddate!="" && $txtplace!="" && $txtfname==""){
            $strSQL = "SELECT * FROM sr_guard 
            WHERE vstdate BETWEEN '".$startdate."' AND '".$enddate."' 
            AND place = '".$txtplace."'  "
            or trigger_error(mysqli_error()); 
            return $strSQL;
            }

        //ดูข้อมูลตามวันที่ ชื่อ และสถานที่
        else if ($txtfname!="" && $startdate!="" && $enddate!="" && $txtplace!=""){
            $strSQL = "SELECT * FROM sr_guard 
            WHERE vstdate BETWEEN '".$startdate."' AND '".$enddate."' 
            AND fullname LIKE ('%".$txtfname."%')
            AND place = '".$txtplace."' "
            or trigger_error(mysqli_error()); 
            return $strSQL;
            }
       
        //แสดงผู้ป่วยที่รับมาในเดือนปัจจุบัน
        else if ($startdate=="" && $enddate=="" && $txtplace=="" && $txtfname==""){
        $strSQL = "SELECT * FROM sr_guard
        WHERE vstdate > (DATE_ADD(CURDATE(),INTERVAL - 1 MONTH))
        ORDER BY vstdate DESC "
        or trigger_error(mysqli_error()); 
        return $strSQL;
    
        /* WHERE MONTH(regdate) = DATE_FORMAT(NOW(),'%m') */
        /* AND YEAR(regdate) = DATE_FORMAT(NOW(),'%Y') "; */
        }
}

//footer
function QueryFooter() {
    $strSQL = "SELECT * FROM version
    WHERE id = '5' "
    or trigger_error(mysqli_error()); 
    return $strSQL;
}
    
function update($data) {
    $modifs="";
    $i=1;
    foreach($data as $key=>$val)
    {
        if($i!=1) { $modifs.=", "; }
        if(is_numeric($val)) { $modifs.=$key.'='.$val; }
        else { $modifs.=$key.' = "'.$val.'"'; }
        $i++;
    }
    $strSQL = ("UPDATE phy_stroke SET $modifs WHERE id=7");
		
		if($objQuery)
{
	//echo "Save Done"//
	echo "<script type='text/javascript'>
	window.alert('บันทึกสำเร็จ');
    window.location.href = \"card_view.php\";
	</script>";
}
else
{
	echo "Error Save [".$strSQL."]";
}				


//if(mysqli_query($conn,$sql)) { return true; }
//else { die("SQL Error: ".$sql."".mysqli_error($conn)); return false; }

       // $strSQL = ("UPDATE $mytable SET $data WHERE id=$mywhere");
       // if(mysqli_query($strSQL)) { return true; }
       // else { die("SQL Error: ".$strSQL."".mysqli_error()); return false; }
    }
?>