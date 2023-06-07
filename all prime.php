<table width="50" border="1">
  <tr>
    <td>Enter prime </td>
    <td><form name="form1" method="post" action="">
      <label for="textfield"></label>
      <input type="text" name="textfield" id="textfield">
    </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form name="form2" method="post" action="">
      <label for="Submit"></label>
      <input type="submit" name="check" value="check" id="Submit">
    </form>
    </td>
  </tr>
</table>
<?php  
$count = 0;  
$num = 2;  
while ($count < 15 )  
{  
$div_count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$div_count++;  
}  
}  
if ($div_count<1)  
{  
echo $num." , ";  
$count=$count+1;  
}  
$num=$num+1;  
}  
?>  