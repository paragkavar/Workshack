
<?php
$x=$_POST["dob"];
list($date,$month,$year)=explode('-',$x);
if(checkdate($month,$date,$year)==true)
echo "valid date";
else 
echo"invalid date";
?>