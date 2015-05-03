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
<?
                    while($res=mysql_fetch_array($query))
                    {
                        $id=htmlspecialchars($res['id'], ENT_QUOTES, 'UTF-8');
                        $name=htmlspecialchars($res['name'], ENT_QUOTES, 'UTF-8');
                        $subject=htmlspecialchars($res['subject'], ENT_QUOTES, 'UTF-8');
                        $wdate=htmlspecialchars(substr($res['wdate'],0,10), ENT_QUOTES, 'UTF-8');
                        $hit=htmlspecialchars($res['hit'], ENT_QUOTES, 'UTF-8');
                        #$id=$res['id'];
                        #$name=$res['name'];
                        #$subject=$res['subject'];
                        #$wdate=substr($res['wdate'],0,10);
                        #$hit=$res['hit'];
                        echo("
                            <tr style='text-align: center;'>
                                <td>$id</td>
                                <td style='text-align: left;'><a href='board_view.php?id=$id'>$subject</a></td>
                                <td>$name</td>
                                <td>$wdate</td>
                                <td>$hit</td>
                            </tr>
                            ");
                    }
?>
                    <tr><td></td><td></td><td></td><td></td><td></td></tr>
                </table>
                <!-- table end -->

                <h1 align="right"><a href="board_write.php" class="btn btn-default" role="button">Write</a></h1>

            </div><!-- /panel-body -->

        </div><!-- /panel -->
    </div>

