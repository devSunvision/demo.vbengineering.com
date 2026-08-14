<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<style type="text/css">
.wrapper{
margin: 0 auto;
}
.page-header h2{
margin-top: 0;
}
table tr td:last-child a{
margin-right: 15px;
}
#catsize{
width: 100px;
}
body
{
counter-reset: Serial;           /* Set the Serial counter to 0 */
}
table
{
border-collapse: separate;
}
tr td:first-child:before
{
counter-increment: Serial;      /* Increment the Serial counter */
content: counter(Serial); /* Display the counter */
}
.dontshow {
display:none;
}
.actsize{
width: 80px;
}
.catsize{
width: 300px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Leads:</h2>
<form action=""  method="post">
<select   class="btn btn-success " name="formtype">
  
  <option value="VBEcontact">VBE CONTACT FORM</option>
  <option value="VBEEnqForm">VBE ENQUIRY FORM</option>
  <option value="SolidWorksEnq">SOLID WORKS FORM</option>

</select>
<select  class="btn btn-success " name="month">
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
   <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
   <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="">Nvm</option>
  <option value="">Dec</option>
</select>

<input style="margin-right:10px" class="btn btn-info pull-right" type="submit" name="submit" value="Get Selected Values" />
</form>
</div>

<?php session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location:leadslogin.php");
	exit;
}

if(isset($_POST['submit'])){
$selected_val = $_POST['month'];  // Storing Selected Value In Variable
$selected_form = $_POST['formtype'];
echo "You have selected :" .$selected_val."<br/>";
echo "You have selected :" .$selected_form;   // Displaying Selected Value
}

if($selected_form=="VBEcontact")
{
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
$conn = sqlsrv_connect($serverName, $options);
if( $conn == false)  
{  
echo "Could not connect.\n";  
  
}
$stmt = sqlsrv_query( $conn, "select * from mastertable where  FormType ='$selected_form' and CreatedDate like '$selected_val%2018%' "); 
if( $stmt )  
{
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>SNO</th>";
echo "<th>EMAIL</th>";
echo "<th>NAME</th>";
echo "<th class='catsize'>MOBILE</th>";
echo "<th>MESSAGE</th>";
echo "<th class='actsize'>DATE</th>";
echo "<th class='actsize'>FORM TYPE</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
echo "<tr>";
echo "<td></td>";
echo "<td class='dontshow'>" . $row['Sno'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['Mobile']. "</td>";
echo "<td>" . $row['Message'] . "</td>";
echo "<td>" . $row['CreatedDate']. "</td>";
echo "<td>" . $row['FormType'] . "</td>";
echo "</tr>";
}
echo "</tbody>";                            
echo "</table>";

} else{
echo "<p class='lead'><em>No records were found.</em></p>";
}
}




if($selected_form=="VBEEnqForm")
{
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
$conn = sqlsrv_connect($serverName, $options);
if( $conn == false)  
{  
echo "Could not connect.\n";  
  
}
$stmt = sqlsrv_query( $conn, "select * from mastertable where  FormType ='$selected_form' and CreatedDate like '$selected_val%2018%' "); 
if( $stmt )  
{
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>SNO</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th class='catsize'>MOBILE</th>";
echo "<th>EMAIL</th>";
echo "<th class='actsize'>COUNTRY</th>";
echo "<th class='actsize'>Clnt Comp Name</th>";
echo "<th class='actsize'>Message</th>";
echo "<th class='actsize'>LOOKING FOR</th>";
echo "<th class='actsize'>CreatedDate</th>";
echo "<th class='actsize'>Form Type</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
echo "<tr>";
echo "<td></td>";
echo "<td class='dontshow'>" . $row['Slno'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['LastName'] . "</td>";
echo "<td>" . $row['Mobile']. "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Country']. "</td>";
echo "<td>" . $row['ClntCompName'] . "</td>";
echo "<td>" . $row['Message'] . "</td>";
echo "<td>" . $row['LookingFor']. "</td>";
echo "<td>" . $row['CreatedDate'] . "</td>";
echo "<td>" . $row['FormType'] . "</td>";
echo "</tr>";
}
echo "</tbody>";                            
echo "</table>";

} else{
echo "<p class='lead'><em>No records were found.</em></p>";
}
}
 
 
 
 
 if($selected_form=="SolidWorksEnq")
{
$serverName = "184.168.47.21";
$options = array(  "UID" => "VBACADEMY",  "PWD" => "#Vbengg123",  "Database" => "VBACADEMY");
$conn = sqlsrv_connect($serverName, $options);
if( $conn == false)  
{  
echo "Could not connect.\n";  
  
}
$stmt = sqlsrv_query( $conn, "select * from mastertable where  FormType ='$selected_form' and CreatedDate like '$selected_val%2018%' "); 
if( $stmt )  
{
echo "<table class='table table-bordered table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>SNO</th>";
echo "<th>Name</th>";
echo "<th>Mobile</th>";
echo "<th class='catsize'>Email</th>";
echo "<th>City</th>";
echo "<th class='actsize'>State</th>";
echo "<th class='actsize'>CourseInterested</th>";
echo "<th class='actsize'>Looking For</th>";
echo "<th class='actsize'>Training For</th>";
echo "<th class='actsize'>TrainingType</th>";
echo "<th class='actsize'>Message</th>";
echo "<th class='actsize'>CreatedDate</th>";
echo "<th class='actsize'>Form Type</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
echo "<tr>";
echo "<td></td>";
echo "<td class='dontshow'>" . $row['Slno'] . "</td>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['Mobile'] . "</td>";
echo "<td>" . $row['Email']. "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['State']. "</td>";
echo "<td>" . $row['CourseInterested'] . "</td>";
echo "<td>" . $row['LookingFor'] . "</td>";
echo "<td>" . $row['TrainingFor']. "</td>";
echo "<td>" . $row['TrainingType'] . "</td>";
echo "<td>" . $row['Message']. "</td>";
echo "<td>" . $row['CreatedDate'] . "</td>";
echo "<td>" . $row['FormType'] . "</td>";

echo "</tr>";
}
echo "</tbody>";                            
echo "</table>";

} else{
echo "<p class='lead'><em>No records were found.</em></p>";
}
}

?>

</div>
</div>        
</div>
</div>
</body>
</html>