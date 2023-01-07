<?php
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userMail'];
    $context = $_POST['userContext'];

    include "../common/db_connect.php";
    $sql = "insert into test(name,phone,email,context) values('$name','$phone','$email','$context')";
    mysqli_query($conn,$sql);

    echo "<script>
            alert('등록이 완료되었습니다.');
            location.href = 'contact.php';
        </script>";
?>