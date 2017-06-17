<form action='' method=POST>
<select name=list>
	<option value="1"></option>
	<option value="2"></option>
	<option value="3"></option>
	<option value="4"></option>
	<option value="5"></option>
	<option value="6"></option>
	<option value="7"></option>
	<option value="8"></option>
	<option value="9"></option>
	<option value="10"></option>
</select>
<input type=submit value=submit>
</form>
<?php
if(isset($_POST["list"])){
(int)$filenum=$_POST["list"];
echo "<form action='' method=POST enctype=multipart/form-data>";
for(i=1;i<=$filenum;i++){
	echo "<input type=file name=upload>";
	}
}
