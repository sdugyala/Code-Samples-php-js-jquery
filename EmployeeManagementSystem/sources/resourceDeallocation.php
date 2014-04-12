<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<style type="text/css">
body {
	height: 778px;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,0)));
background: -moz-linear-gradient(top, rgba(30,87,153,1) 0%, rgba(125,185,232,0) 100%);
background: -o-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */
}



table {
padding:10px 200px;
background:#FFFFFF;
border-radius:20px;
box-shadow: 10px 10px 5px #1e5799;
}



</style>

<script>
function validateForm()
{
var e0=document.forms["form1"]["proj_name"].value;
var e1=document.forms["form1"]["emp_name"].value;
var e2=document.forms["form1"]["emp_id"].value;
var e3=document.forms["form1"]["designation"].value;
var e4=document.forms["form1"]["email_id"].value;
var e5=document.forms["form1"]["location"].value;


if (e0=="" && e1=="" && e2=="" && e3=="" && e4=="" && e5=="")
  {
  alert("Please specify at least one search criteria");
  return false;
  }
 
}
</script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resource Deallocation</title>
</head>

<body>



<form id="form1" name="form1" onsubmit="return validateForm()" method="post" action="deAll.php">

<h3 align="left" class="col-xs-offset-0"><strong><font  color='#FFFFFF' face="courier" size='9'>EMPLOYEE MANAGEMENT PORTAL</font></strong></h3>
<hr>

<div align="right"><a href='login.html'><font color='#FFFFFF' face='courier' size='3'>Logout</font></a></div>

<div align="left">
   <p><a href='home.php'><font color='#FFFFFF' face='courier' size='3'><u>Home</u></font></a>  <font color='#FFFFFF' face='courier' size='3'> | Resource Deallocation</font> </p>
 </div>
 
 <div align="center">
      <p><font color='#FFFFFF' face='courier' size='5'><strong>Resource Deallocation </strong></font></p>

<p><font color='#FFFFFF' face='courier' size='3'>Enter any number of search parameters below. You may choose to fill any number of search parameters with a minimum of one.</font></p>

<!--table creation for fields-->
<table width="500" border="0" cellpadding="20" cellspacing="30" bgcolor='#FFFFFF' class="w900"> 

<tr>
<td width="160">
<label><font color='#1e5799' face='courier' size='3'><strong>Project Name</strong></font></label></td>
<td width="161">  <input type="text" name="proj_name" id="proj_name" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>


<tr>
<td width="160">
<label><font color='#1e5799' face='courier' size='3'><strong>Employee Name</strong></font></label></td>
<td width="161">  <input type="text" name="emp_name" id="emp_name" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>

  
  <tr>
  <td width="160">
<label><font color='#1e5799' face='courier' size='3'><strong>
  Employee ID</strong></font></label></td>
<td width="161"><input type="text" name="emp_id" id="emp_id" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>
  
  <tr>
 <td width="160"> 
  <label><font color='#1e5799' face='courier' size='3'><strong>
  Designation</strong></font></label></td>
<td width="161"><input type="text" name="designation" id="designation" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>

  <tr>
 <td width="160"> 
  <label><font color='#1e5799' face='courier' size='3'><strong>
Email ID</strong></font></label></td>
<td width="161"><input type="text" name="email_id" id="email_id" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>

<tr>
 <td width="160"> 
  <label><font color='#1e5799' face='courier' size='3'><strong>Location</strong></font></label></td>
<td width="161"><input type="text" name="location" id="location" style="margin-left:17px" maxlength="100" class="required"/></td>
</tr>


</table>
<br/>
<p>
  <input name="search" type="submit" value="search" style="height: 30px; width: 150px; color: #1e5799"/>
  </p>

</form>

<p>&nbsp;</p>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['logged_in']))
{
	
	if($_SESSION['logged_in'])
	{
		//echo "logged in";
		//header("Location: login.html");
		if($_SESSION['usr_role']==4||$_SESSION['usr_role']==2)
		{
			header("Location: login.html");
		}
	}
}
else
{
	header("Location: login.html");
}
?>
