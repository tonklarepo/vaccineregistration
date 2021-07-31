<?php include 'connect.php'; ?>
<?php

$genz = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$randomotp = substr(str_shuffle($genz),0,6);
echo '<script type="text/javascript">';
echo ' alert("'.$randomotp.'")';
echo '</script>';

?>


<input type="text" class="form-control" placeholder="กรุณาใส่ OTP" id="inputotp" required>
<input type="text" value="<?php echo $randomotp ;?>"/>
<button onclick="myFunction()">Click me</button>
<input type="text" id="result"/>
<p id="demo"></p>
<script>
function myFunction() {

  var a = document.getElementById("inputotp").value;
  var spge = '<?php echo $randomotp ;?>';
  let resultz = a.localeCompare(spge);
  var z = document.getElementById("result").value = resultz;

  if(resultz == 0){
    document.getElementById("demo").innerHTML = "ได้แล้ว";
    
  } else {
    document.getElementById("demo").innerHTML = "ไม่ได้แล้ว นายมั่ว";
  }
}
</script>

<p id="demo"></p>