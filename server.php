<?php
$sid=$_POST["stuid"];
$fn=$_POST["fnam"];
$ln=$_POST["lnam"];
$dep=$_POST["dep"];
$dat=$_POST["dat"];
$conn=new mysqli("localhost","root","","LeaveSystem");
if($conn->connect_error){
    echo "Error in connection";
}
$stmt=$conn->prepare("insert into leavemanagementsystem(stuid,fname,lname,dep,dat)values(?,?,?,?,?)");
$stmt->bind_param("issss",$sid,$fn,$ln,$dep,$dat);
$stmt->execute();
$stmt->close();
$conn->close();
echo "Successfully Inserted data .....Thank You!!!!!";
?>