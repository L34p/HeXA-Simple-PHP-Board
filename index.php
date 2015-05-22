<?
    require_once "base.html";
    require_once "db_con.h";
    
    $query=mysql_query("select * from $tablename order by id desc");
?>

    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Guest Board</h3>
            </div>
            <div class="panel-body">

                <!-- table start -->
                <table class="table">
                    <th style="width: 8%;text-align: center;">번호</th>
                    <th style="width: 58%;text-align: center;">제목</th>
                    <th style="width: 12%;text-align: center;">글쓴이</th>
                    <th style="width: 14%;text-align: center;">작성일</th>
                    <th style="width: 8%;text-align: center;">Hit</th>

<!-- Example -->
                   <tr style='text-align: center;'>
                        <td>1</td>
                        <td style='text-align: left;'><a href='board_view.php?id=1'>글 제목입니당</a></td>
                        <td>여기는 글쓴이 이름</td>
                        <td>2015-05-21</td> <!-- 글 쓴 날짜 -->
                        <td>31337</td> <!-- 조회수 -->
                    </tr>
                    
<!-- Example end... you can delete above example -->                    
<?
 
 /*
  * Write youre code here.
  */
  
?>
                    <tr><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
                <!-- table end -->

                <h1 align="right"><a href="board_write.php" class="btn btn-default" role="button">Write</a></h1>

            </div><!-- /panel-body -->

        </div><!-- /panel -->
    </div>

