<?php include 'connect.php'; ?>

<?php
session_start();
    
    $_SESSION["first_name"] = $_POST['fname'];
    $_SESSION["last_name"] = $_POST['lname'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["tel"] = $_POST['pno'];
    $_SESSION["id_card"] = $_POST['idcard'];
    $_SESSION["b_date"] = $_POST['bdate'];
    $_SESSION["v_date"] = $_POST['vdate'];

    $genz = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $randomotp = substr(str_shuffle($genz),0,6);
    
    

    $resultfortel = mysqli_query($connect, "SELECT tel FROM member WHERE tel='{$_SESSION['tel']}'");
    $resultforid = mysqli_query($connect, "SELECT idcard FROM member WHERE idcard='{$_SESSION['id_card']}'");
    $resultforvdate = mysqli_query($connect, "SELECT vdate FROM member WHERE vdate='{$_SESSION["v_date"]}'");

    $countforid = mysqli_num_rows($resultforid);
    $countfortel = mysqli_num_rows($resultfortel);
    $_SESSION["countforvdate"] = mysqli_num_rows($resultforvdate);

    // echo $_SESSION["countforvdate"];
    // $addmembertosql = mysqli_query($connect, "INSERT INTO member (first_name, last_name, email, tel, idcard, bdate, vdate)
    //                                             VALUES ('$first_name','$last_name','$email','$tel','$id_card','$b_date','$v_date')");
    if($countfortel > 0) {
        echo '<script type="text/javascript">';
        echo ' alert("เบอร์นี้ได้ลงทะเบียนไปแล้ว กรุณาใช้เบอร์อื่น")';
        echo '</script>';
        echo '<a href="index.html">กลับสู่หน้าหลัก</a>';
        return false;
    } else if($countforid > 0) {
        echo '<script type="text/javascript">';
        echo ' alert("บัตรประชาชนนี้ได้ลงทะเบียนไปแล้ว")';
        echo '</script>';
        echo '<a href="index.html">กลับสู่หน้าหลัก</a>';
        return false;
    } else if($_SESSION["countforvdate"] >= 3000) {
        echo '<script type="text/javascript">';
        echo ' alert("วันนี้คนลงทะเบียนครบแล้ว")';
        echo '</script>';
        echo '<a href="index.html">กลับสู่หน้าหลัก</a>';
        return false;
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("OTPของคุณคือ '.$randomotp.'")';
        echo '</script>';

        echo '<input type="text" class="form-control" placeholder="กรุณาใส่ OTP" id="inputotp" required>';
        echo '<input type="text" value="OTPของคุณคือ ' . $randomotp . '" readonly/>';
        echo '<button onclick="myFunction()">ยืนยัน</button>';
        // echo '<input type="text" id="result"/>';
        echo '<p id="demo"></p>';
        echo '<script type="text/javascript">';
        echo 'function myFunction() {

            var a = document.getElementById("inputotp").value;
            var spge = "' . $randomotp . '";
            let resultz = a.localeCompare(spge);
            // var z = document.getElementById("result").value = resultz;

            if(resultz == 0){
                window.location = "add.php?";
                // document.getElementById("demo").innerHTML = "ได้แล้ว";
                
            } else {
                document.getElementById("demo").innerHTML = "คุณกรอก OTP ไม่ถูกต้อง";
            }
        }';
        echo '</script>';    
    }


    
    
?>
