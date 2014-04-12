<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Add project</title>

<head>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.10.3.custom.min.css" />

<!---js validation----------->

<script type="text/javascript">
function validateForm()
{
	
var e1=document.forms["form1"]["projectname"].value;
var e3=document.forms["form1"]["startdate"].value;
var e4=document.forms["form1"]["enddate"].value;
var e5=document.forms["form1"]["location"].value;
var e6=document.forms["form1"]["numbrofpeople"].value;
var e7=document.forms["form1"]["totalbudget"].value;
if (e1=="")
  {
  alert("Please specify a project name");
  return false;
  }
else if (e3=="")
  {
  alert("Please specify a start date");
  return false;
  }

else if (e4=="")
  {
  alert("Please specify a end date");
  return false;
  }

else if (e5=="")
  {
  alert("Please specify a location");
  return false;
  }

else if (e6=="")
  {
  alert("Please specify an estimated number of people");
  return false;
  }

else if (e7=="")
  {
  alert("Please specify the total budget");
  return false;
  }
else
{
	//alert("All the fields are filled");	
}
 
}
</script>



<!------datepicker--------------->
<script>
/*$(function() {
$( "#startdate" ).datepicker();

$( "#enddate" ).datepicker();
});*/


$(document).ready(function(){
    $("#startdate").datepicker({
        minDate: 0,
        maxDate: "+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
          $("#enddate").datepicker("option","minDate", selected)
        }
    });
    $("#enddate").datepicker({ 
        minDate: 0,
        maxDate:"+60D",
        numberOfMonths: 1,
        onSelect: function(selected) {
           $("#startdate").datepicker("option","maxDate", selected)
        }
    });  
});




</script>


<meta charset="utf-8">
</head>

<style type="text/css">
body {
	height: 750px;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,1)), color-stop(100%,rgba(125,185,232,0)));
background: -moz-linear-gradient(top, rgba(30,87,153,1) 0%, rgba(125,185,232,0) 100%);
background: -o-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(30,87,153,1) 0%,rgba(125,185,232,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#007db9e8',GradientType=0 ); /* IE6-9 */
margin: 1%;
}



table {

padding:10px 200px;
background:#FFFFFF;
border-radius:20px;
box-shadow: 10px 10px 5px #1e5799;
}



</style>
<!--<script type="text/javascript">
function validateForm()
{
	
var e1=document.forms["form1"]["projectname"].value;
var e2=document.forms["form1"]["projectid"].value;
var e3=document.forms["form1"]["startdate"].value;
var e4=document.forms["form1"]["enddate"].value;
var e5=document.forms["form1"]["location"].value;
var e6=document.forms["form1"]["numbrofpeople"].value;
var e7=document.forms["form1"]["totalbudget"].value;
if (e1=="")
  {
  alert("Please specify a project name");
  return false;
  }
else if (e2=="")
  {
  alert("Please specify a project id");
  return false;
  }
else if (e3=="")
  {
  alert("Please specify a start date");
  return false;
  }

else if (e4=="")
  {
  alert("Please specify a end date");
  return false;
  }

else if (e5=="")
  {
  alert("Please specify a location");
  return false;
  }

else if (e6=="")
  {
  alert("Please specify an estimated number of people");
  return false;
  }

else if (e7=="")
  {
  alert("Please specify the total budget");
  return false;
  }
else
{
	//alert("All the fields are filled");	
}
 
}
</script>-->

</head> 
 <body>
 
 <form id="form1" name="form1" method="post" action="add_project.php" onsubmit="return validateForm()" role="form">

<h3 align="left" class="col-xs-offset-0"><strong><font  color='#FFFFFF' face="courier" size='9'>EMPLOYEE MANAGEMENT PORTAL</font></strong></h3>
<hr>



   <div align="right"><a href='login.html'><font color='#FFFFFF' face='courier' size='3'>Logout</font></a></div>






 <div align="left">
   <p><a href='home.php'><font color='#FFFFFF' face='courier' size='3'><u>Home</u></font></a>  <font color='#FFFFFF' face='courier' size='3'> | Add Project</font> </p>
 </div>
 
 <div align="center">
      <p><font color='#FFFFFF' face='courier' size='5'><strong>Add New Project </strong></font></p>
 
<!--table creation for page-->
 
<table width="434" border="0" cellpadding="0" cellspacing="25" bgcolor='#FFFFFF' class="w900"> 
<tr>

<td width="160"><label for="proj_name"><font color='#1e5799' face='courier' size='3'><strong>PROJECT NAME</strong></font></label></td>

<td width="161">
<input name="projectname" type="text" id="projectname" style="margin-left:17px" maxlength="100" class="required"/>
</td>
</tr>


<!--
<tr>
<td><label for="proj_id"><font color='#1e5799' face='courier' size='3'><strong>PROJECT ID</strong></font></label></td>
<td><input name="projectid" type="text" id="projectid" style="margin-left:17px" maxlength="70" class="required" /></td>
</tr>
-->

<tr>	
<td><label for="start_date"><font color='#1e5799' face='courier' size='3'><strong>START DATE</strong></font></label></td>
<td><input style="margin-left:17px" type="text" name="startdate" id="startdate" class="required"/></td>
</tr>



<tr>	
<td><label for="start_date"><font color='#1e5799' face='courier' size='3'>
<strong>END DATE</strong></font></label></td>
<td><input style="margin-left:17px" type="text" name="enddate" id="enddate" class="required"/></td>
</tr>




<tr>	
<td><label for="start_date"><font color='#1e5799' face='courier' size='3'>
<strong>LOCATION</strong></font></label></td>
<td>
<input type="text" name="location" id="location" style="margin-left:17px" class="required"/></td>
</tr>



<tr>	
<td><label for="start_date"><font color='#1e5799' face='courier' size='3'><strong>ESTIMATED NUMBER OF PEOPLE</strong></font></label></td>
<td><input type="text" name="numbrofpeople" id="numbrofpeople" style="margin-left:17px" class="required"/></td>
</tr>




<tr>	
<td><label for="start_date"><font color='#1e5799' face='courier' size='3'>	<strong>TOTAL BUDGET</strong></font></label></td>
<td><input type="text" name="totalbudget" id="totalbudget" style="margin-left:17px" class="required"/></td>
</tr>


</table>

<p>&nbsp;</p>
<p align="center">
  <input type="submit" name="button" id="button" value="Add"  style="height: 30px; width: 150px; color: #1e5799"/>
  <input type="reset" name="reset" id="reset" value="Reset" style="height: 30px; width: 150px; margin-left:25px; color: #1e5799" />
  </p>



</form>

<?php
session_start();
if(isset($_SESSION['logged_in']))
{
}
else
{
	header("Location: login.html");
}
?>

</body>
</html>
