<?php
$conn=new mysqli("localhost","root","","LeaveSystem");
$del=$conn->query("Truncate table leavemanagementsystem");
$conn->close();
echo "The table is empty now"
?>