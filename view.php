<?php
                $connect = mysqli_connect('localhost', 'usersamadal', '1', 'dbsamadal');
                $number = $_POST['numner'];
                session_start();
                $query = "select title, content, data, hit, id from board where numner =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table class="view_table" text-align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
 
                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">로그아웃</button>
        </div>