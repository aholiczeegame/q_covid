<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include 'connect.php';
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM hos.opduser Where loginname='".$Username."' and passweb='".$Password."' ";

                  $query = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($query);

                  if(mysqli_num_rows($query)){
                  
                   // if(mysqli_num_rows($result)==1){
                   // $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"] = $row["loginname"];
                      $_SESSION["UserFullname"] = $row["name"];
                      $_SESSION["UserPosition"] = $row["entryposition"];
                      $_SESSION["UserCode"] = $row["doctorcode"];
                      $_SESSION["Userlevel"] = $row["groupname"];
                      $_SESSION["UserDisable"] = $row["account_disable"];


                      if($_SESSION["UserDisable"]=="Y"){ // เช็ค User ที่ปิดใช้งาน
                        echo "<script>";
                        echo "alert(\" คุณไม่ได้รับสิทธิ์ในโปรแกรมนี้ \");"; 
                        echo "window.history.back()";
                        echo "</script>";
                            }

                      // else if($_SESSION["UserCode"]=="58" or $_SESSION["UserCode"]=="214" or
                       //  $_SESSION["UserCode"]=="215" or $_SESSION["UserCode"]=="107"){ //ให้สิทธิ์รายบุคคลเข้าใช้งานหน้า Card view
                        //Header("Location: card_view.php");
                         // }

                      else if($_SESSION["Userlevel"]!=""){ 
                        Header("Location: admin_view.php");
                            }

                      /*
                      
                      else if($_SESSION["Userlevel"]!="เวชระเบียน" or $_SESSION["Userlevel"]!="แพทย์" or $_SESSION["Userlevel"]!="ผู้ดูแลระบบ"){
                        echo "<script>";
                        echo "alert(\" คุณไม่ได้รับสิทธิ์ในโปรแกรมนี้ \");"; 
                        echo "window.history.back()";
                        echo "</script>";
                            } */

                      }else{
                        echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                        echo "</script>";
                            }

          }else{

            echo "<script type='text/javascript'>window.location.href = \"index.php\";</script>";
             //Header("Location: from_login.php"); //user & password incorrect back to login again

        }
?>