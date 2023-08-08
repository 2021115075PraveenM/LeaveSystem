<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataFetch</title>
</head>
<body>
<table>
<tr>
<td>StudentId</td>
<td>FirstName</td>
<td>LastName</td>
<td>Department</td>
<td>Date</td>
</tr>
<?php
$conn=new mysqli("localhost","root","","LeaveSystem");
$sel=$conn->query("select * from leavemanagementsystem");

if($sel->num_rows>0){
 while($row=$sel->fetch_assoc()){
    echo "<tr><td>".$row["stuid"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]. "</td><td>".$row["dep"]."</td><td>".$row["dat"]."</td></tr>";
 }  } 
 
 else{
    echo "No Results found.";
 }
$conn->close();
?>
</table>

</body>
</html>
