<style>
  *{
    background-color:pink;
  }
<body>
  {
    padding:0px;
    margin:0px;
    background-image:url(img01.gif);
  }
  tr,td{
    padding:10px;
    border:solid 1px blue;
    font-family:calibri(Body);
    color:blue;
    font-size:11pt;
    text-align:left;
    texr-transform:uppercase;
  }
  tr td a{
      text-decoration:none;
      font-family:green(Body);
      color:green;
  }
  tr td a:hover{
      text-decoration:underline;
      font-family:green(Body);
      color:green;
  }
  tr:nth-child(even){
    background-color:yellow;
  
  }
  tr:nth-child(odd){
    background-color:#F9F4D6;
  
  }
</style>



<?php
include("connection.php");
error_reporting(0);
$a="select * from student_bcab";
$t=mysqli_query($conn,$a);

$b=mysqli_num_rows($t);

echo $total;
if($b!=0)
{
?>
<center>
 <table style="border:solid 1px maroon;border-collapse:collapse;">
<tr>
  <td style="border:solid 1px blue;border-collapse:collapse;">fn</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">ln</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">fan</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">mon</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">pn</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">em</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">ui</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">pwd</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">cpwd</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">gender</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">con</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">Edit</td>
  <td style="border:solid 1px blue;border-collapse:collapse;">Delete</td>
  
</tr>
<?php
  while($c = mysqli_fetch_assoc($t))
  {
    echo "<tr>
    <td>".$c['fn']."</td>
    <td>".$c['ln']."</td>
    <td>".$c['fan']."</td>
    <td>".$c['mon']."</td>
    <td>".$c['pn']."</td>
    <td>".$c['em']."</td>
    <td>".$c['ui']."</td>
    <td>".$c['pwd']."</td>
    <td>".$c['cpwd']."</td>
    <td>".$c['gender']."</td>
    <td>".$c['con']."</td>
    <td><a href='update.php?x=$c[name]& y=$c[username]'>update</a></td>
    <td><a href='delete.php?y=$c[username]'>Delete</a></td>
    </tr>";

  }

}

else
{
    echo"table has not record";
}
?> 
</table>
</center>

