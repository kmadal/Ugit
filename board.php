<!DOCTYPE>

<html>
<head>
        <meta charset = 'utf-8'>
</head>
<style>
        table{
                border-top: 1px solid #444444;
                border-collapse: collapse;
        }
        tr{
                border-bottom: 1px solid #444444;
                padding: 10px;
        }
        td{
                border-bottom: 1px solid #efefef;
                padding: 10px;
        }
        table .even{
                background: #efefef;
        }
        .text{
                text-align:center;
                padding-top:20px;
                color:#000000
        }
        .text:hover{
                text-decoration: underline;
        }
        a:link {color : #57A0EE; text-decoration:none;}
        a:hover { text-decoration : underline;}
</style>
<body>
<?php
            $connect = mysqli_connect('localhost', 'usersamadal', '1', 'dbsamadal') or die ("connect fail");
            $query ="select * from board order by numner desc";
            $result = $connect->query($query);
            $total = mysqli_num_rows($result);

        ?>
        <h2 text-align =center>게시판</h2>
        <table text-align = center>
        <thead text-align = "center">
        <tr>
        <td width = "50" text-align="center">번호</td>
        <td width = "500" text-align = "center">제목</td>
        <td width = "100" text-align = "center">작성자</td>
        <td width = "200" text-align = "center">날짜</td>
        <td width = "50" text-align = "center">조회수</td>
        </tr>
        </thead>
        
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)                        
                    if($total%2==0){
        ?>              <tr class = "even">
                    <?php   }
                    else{
        ?>                  <tr>
                    <?php } ?>
                <td width = "50" text-align = "center"><?php echo $total?></td>
                <td width = "500" text-align = "center">
                <a href = "view.php?numner=<?php echo $rows['numner']?>">
                <?php echo $rows['title']?></td>
                 <td width = "100" text-align = "center"><?php echo $rows['id']?></td>
                <td width = "200" text-align = "center"><?php echo $rows['data']?></td>
                <td width = "50" text-align = "center"><?php echo $rows['hit']?></td>
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
            
        <div class = text>
        <font-family style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font-family>
        </div>

</body>
</html>
