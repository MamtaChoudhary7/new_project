<?php
require('sqldbcreate.php');
$output='';
if(isset($_POST['export_excel']))
{
$sql="select * from book";
$result=$conn->query($sql);
if(mysqli_num_rows($result) > 0)
{
$output.= '
<table class="table" bordered="1">
<tr> 
<th>Book id</th>
<th>Book name</th>
<th>Publisher</th>
<th>totalbooks</th>
<th>Availability</th>
<th>books with student</th>
</tr>
</thead>
<tbody>';
while($row=$result->fetch_assoc())
{
$value=$row["totalbooks"]-$row["Availability"];
$output.='  <tr>
<td>'.$row["BookId"].'</td> 
<td>'.$row["Title"].'</td> 
<td>'.$row["Publisher"].'</td> 
                            <td>'.$row["totalbooks"].'</td> 
                              <td>'.$row["Availability"].'</td>
                              <td>'.$value.'</td> 
                              ';
                            
                            }
                            $output.='</table>';
                            header("content-Type: application/xls");
                            header("content-Disposition: attachment; filename=download.xls");
                            echo $output;
    }
}
?>