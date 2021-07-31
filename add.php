<?php 
include 'connect.php';
include 'phpqrcode/qrlib.php';
?>


<?php
session_start();
// $_SESSION["first_name"] = $_POST['fname'];
// $_SESSION["last_name"] = $_POST['lname'];
// $_SESSION["email"] = $_POST['email'];
// $_SESSION["tel"] = $_POST['pno'];
// $_SESSION["id_card"] = $_POST['idcard'];
// $_SESSION["b_date"] = $_POST['bdate'];
// $_SESSION["v_date"] = $_POST['vdate'];

// echo $_SESSION["first_name"];
mysqli_query($connect, "INSERT INTO member (first_name, last_name, email, tel, idcard, bdate, vdate) 
                        VALUES ('{$_SESSION["first_name"]}','{$_SESSION["last_name"]}','{$_SESSION["email"]}','{$_SESSION["tel"]}','{$_SESSION["id_card"]}','{$_SESSION["b_date"]}','{$_SESSION["v_date"]}')");
$_SESSION["queue"] = $_SESSION["countforvdate"]+1;

if (mysqli_affected_rows($connect) > 0) {
    echo '<center><p>ลงทะเบียนเรียบร้อยแล้ว<br /></p></center>';
    echo '<center><p>รหัสยืนยันการจองของคุณคือ '.$_SESSION["queue"].'<br /></p></center>';
    echo '<center><p>หมายนัดการฉีดวัคซีนคือวันที่ '.$_SESSION["v_date"].'<br /></p></center>';
    echo '<center><a href="qrcode.php">กดเพื่อรับ QRcode<br /><br /></a></center>';
    echo '<center><a href="index.html">กลับสู่หน้าหลัก<br /></a></center>';
} else {
    echo '<center>ไม่สามารถลงทะเบียนได้</center><br />';
    echo '<center><a href="index.html">กลับสู่หน้าหลัก<br /></a></center>';
    echo mysqli_error($connect);
}
?>