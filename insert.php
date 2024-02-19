<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "hostel";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    $sql = "INSERT INTO `tblstudents` (`student_name`, `admno`, `yob`, `class`, `height`, `guardian_name`, `location`, `gender`, `hostel_name`) VALUES ('KARANJA STEVE', 'CCH100/500/2024', '2013-07-01', CHAR('F2'), '', 'GKIBUKO', 'MASABA', CHAR('MALE'), 'KIFARU')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "data inserted successfull! enter next student";
    }
    else{
        echo "data not inserted successfull! try again" . mysqli_error($conn);

    
    }

}
else{
    echo "You are not connected successfully". mysqli_connect_error($conn);
}?>