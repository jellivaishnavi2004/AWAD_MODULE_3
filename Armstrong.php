<?php
$num = (int)readline();
$rep = $num;
$sum = 0;
while($num>0)
{
$rem = $num%10;
$sum = $sum+$rem*$rem*$rem;
$num = $num/10;
}
if($rep == $sum)
echo"Given integer,$rep is an Armstrong number";
else
echo"Given integer,$rep is not an Armstrong number";
?>