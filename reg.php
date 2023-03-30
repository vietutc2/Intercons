<?php

require 'db/connect.php';
if(isset($_POST['submit'])){
     
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    //PHP MASTER
    if(!empty($fullname) && !empty($email) && !empty($phonenumber) && !empty($subject)){
        //insert data
        // echo "<pre>";
        // print_r($_POST);
        $sql = "INSERT INTO `tbl_users`(`fullname`, `email`, `phonenumber`, `subject`) VALUES('$fullname', '$email', '$phonenumber','$subject' )";

       if($conn->query($sql)===TRUE){
        echo"Lưu dữ liệu thành công";
       }else{
        echo "Lỗi  {$sql}".$conn->error;
       }


    }else{
        echo"Bạn cần nhập đầy đủ thông tin trước khi gửi";

}
}

?>
<a href="lienhe.php"> Quay lại trang đặt lịch</a>
