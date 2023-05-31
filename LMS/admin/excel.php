<?php
require('sqldbcreate.php');
$output='';
if(isset($_POST['export_excel']))
{
$sql="select record.BookId,RollNo,`book`.`Title`,Due_Date,Date_of_Issue,datediff(curdate(),Due_Date) as x from record,book where Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";
$result=$conn->query($sql);
if(mysqli_num_rows($result) > 0)
{
$output.= '
<table class="table" bordered="1">
<tr>
<th>Roll No</th>  
<th>Book id</th>
<th>Book name</th>
<th>Issue Date</th>
<th>Due date</th>
<th>Dues</th>
</tr>
</thead>
<tbody>';
while($row=$result->fetch_assoc())
{
if($row["x"] < 0)
$row["x"]=0;
else
$row["x"]=1;
$output.='  <tr>
<td>'.$row["RollNo"].'</td> 
<td>'.$row["BookId"].'</td> 
<td>'.$row["Title"].'</td> 
                              <td>'.$row["Date_of_Issue"].'</td>  
                              <td>'.$row["Due_Date"].'</td>
                              <td>'.$row["x"].'</td> 
                              ';
                            
                            }
                            $output.='</table>';
                            header("content-Type: application/xls");
                            header("content-Disposition: attachment; filename=download.xls");
                            echo $output;
    }
}
?>