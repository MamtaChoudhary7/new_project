<?php
require('sqldbcreate.php');
$output='';
if(isset($_POST['export_excel']))
{
$sql="select *from user";
$result=$conn->query($sql);
if(mysqli_num_rows($result) > 0 )
{
$output.= '
<table class="table" bordered="1">
<tr>
<th>Roll No</th>  
<th>Name</th>
<th>year</th>
<th>Branch</th>
<th>Email ID</th>
<th>Mobile No</th>
</tr>
</thead>
<tbody>';
while($row=$result->fetch_assoc())
{
$output.='  <tr>
<td>'.$row["RollNo"].'</td> 
<td>'.$row["Name"].'</td> 
<td>'.$row["year"].'</td> 
                              <td>'.$row["Branch"].'</td>  
                              <td>'.$row["EmailId"].'</td>
                              <td>'.$row["MobNo"].'</td> 
                              ';
                            
                            }
                            $output.='</table>';
                            header("content-Type: application/xls");
                            header("content-Disposition: attachment; filename=download.xls");
                            echo $output;
    }
}
?>