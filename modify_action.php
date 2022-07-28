<?php
    $connect = mysqli_connect("localhost", "usersamadal", "1", "dbsamadal") or die ("connect fail");
    $number = $_POST['numner'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', data='$date' where numner=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./view?numner=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
