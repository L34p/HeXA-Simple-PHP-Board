<?
    require_once "base.html";
    require_once "db_con.h";

    // GET 또는 POST 방식으로 어떤 게시글을 불러올지 값을 받아와야함
    // sql 쿼리문을 보내서 게시글을 가져와야함

    #$name=$res['name'];
    #$subject=$res['subject'];
    #$content=$res['content'];
    #$wdate=$res['wdate'];
    #$hit=$res['hit'];

?>
    <!-- Board View form start -->
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Guest Board</h3>
            </div>
            <div class="panel-body">
                <div class="page-header">
                    <h3 style="font-weight: bold;font-size: 2.6em;"><? echo"$subject"; ?></h3></br>
                    <font style="1.0em;">
                           작성자: <? echo"$name"; ?> <br>
                           작성일: <? echo"$wdate"; ?>
                           &nbsp;&nbsp;/&nbsp;&nbsp;
                           조회수: <? echo"$hit"; ?>
                    </font>
                </div>
                </br>
                <div style="font-size: 1.2em;">
                    <? echo"$content"; ?>
                </div>
        
                </br></br>

            </div><!-- panel-body -->
        </div>
    </div>
    <!-- Board View form end -->
<?
    // 조회수 업데이트 해야함.
    mysql_close($conn);
?>
