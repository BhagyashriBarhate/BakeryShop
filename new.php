<html><head>
<title>Demo of JavaScript listbox disable or enable in a form</title>
<script type="text/javascript">
function radio_check()
{
if(document.drop_list.choice[1].checked){
document.getElementById("l1").disabled=true;
}else{
document.getElementById("l1").disabled=false;
}
}

function data_check()
{
var str=document.getElementById("l1").value;
if(str.length <=0){
alert("Please select one option ");
}else{
document.forms['drop_list'].submit();// working
}
}
</script>
</head>
<body>
<form name="drop_list" action="listbox-validation-demock.php" method="post" id='f1'>
Do you want to learn Web programming languages ? 
<!--<input type=radio name=choice value='yes' onClick="radio_check()";>Yes
<input type=radio name=choice value='no' onClick="radio_check()";>No -->
<select name="g" onclick="radio_check()">
    <option value="yes">1</option>
    <option value="no">2</option>
</select>

<select name="Category" id="l1">
<option value=''>Select One</option>
<option value="PHP">PHP</option>
<option value="ASP">ASP</option>
<option value="JavaScript">JavaScript</option>
<option value="HTML with design">HTML</option>
<option value="Perl">Perl</option><option value="MySQL">MySQL</option></select>
<input onclick="data_check()"; value="Submit Form" type="button"> 

</form>
<br><br>
</body></html>
