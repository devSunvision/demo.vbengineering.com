<?php
if(isset($_POST['submit'])) {
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
//$conn = sqlsrv_connect($serverName, $options);
//if( $conn === false ) {
//die( print_r( sqlsrv_errors(), true));
//}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone=$_POST['phone'];
$date = date('Y-m-d');
$sql = "INSERT INTO MasterTable(FirstName,Email,Mobile,Message,FormType,CreatedDate) VALUES ('" . $name. "', '" . $email. "','" . $phone. "','" . $message. "','VBEcontact','".$date."')";
//$stmt = sqlsrv_query( $conn, $sql);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: VB Engineering  <sales@vbengg.com>' . "\r\n";
$To = "maruthi@vbengg.com,srivani@vbengg.com";
$Subject = "From VBE Side Contact page";
$Msg = "Name = ".$name. "<br />email = ".$email. "<br />phone = ".$phone."<br /><br />message = ".$message."<br /><br />";
if( mail($To, $Subject, $Msg, $headers))
{
echo "<script>top.window.location = 'https://vbengg.com/thanks-for-enquiry.html'</script>";

}

}
?>
<html>
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text],input[type=email], select, textarea {
width: 90%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}
input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #45a049;
}
.container {
border-radius: 5px;
background-color: transparent;
padding: 20px;
}
</style>
</head>
<body>
<div class="container">
<form name="" method="post" action="">
<input type="text" id="fname" name="name" placeholder="Your Name" required>
<input type="text" id="lname" name="phone" placeholder="Mobile Number" required>
<input type="email" id="lname" name="email" placeholder="Email" required>
<textarea id="subject" name="message" placeholder="Write something.." required style="height:100px"></textarea>
<input type="submit" value="Submit" name="submit">
</form>
</div>
</body>
</html>
