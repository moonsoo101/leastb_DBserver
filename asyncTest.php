<?php
$con = mysqli_connect("localhost", "root", "leastb", "fcm");
mysqli_set_charset($con,"utf8");
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = "select imgname from image where watchdayID = (select watchdayID from image where imgname ='leastb201768-1496850948516');";
$res = mysqli_query($con,$query);
$result = array();
while($row = mysqli_fetch_array($res))
{
array_push($result, array('imgName'=>$row[0]));
}
$gifIndex;
for($i=0;$i<count($result);$i++)
{
if($result[$i]['imgName']=='leastb201768-1496850948516')
{
$gifIndex = $i;
break;
}
}
$startIndex=0;
$endIndex=count($result)-1;
if($gifIndex-5>=0)
$startIndex = $gifIndex-5;
if($gifIndex+5<count($result))
$endIndex = $gifIndex+5;
echo "gifIndex:".$gifIndex." start :".$startIndex." end :".$endIndex."<br>";
mysqli_close($con);
$gifs="";
for($i=$startIndex;$i<=$endIndex;$i++)
$gifs.= $result[$i]['imgName'].".jpg ";
shell_exec("convert -delay 1000 -loop 0 ".$gifs."test.gif");
echo "complete";
// shell_exec("convert -delay 100 -loop 0 ".$gifs."test.gif" . " > /dev/null 2>/dev/null &")

 ?>
