<?
    require_once "base.html";
?>

<?
    require_once "db_con.h";

    $id=mysql_real_escape_string($_GET['id']);
    $query=mysql_query("select * from $tablename where id='$id'");
    $res=mysql_fetch_array($query);

    #$name=$res['name'];
    #$subject=$res['subject'];
    #$content=$res['content'];
    #$wdate=$res['wdate'];
    #$hit=$res['hit'];
    
    $name=htmlspecialchars($res['name'], ENT_QUOTES, 'UTF-8');
    $subject=htmlspecialchars($res['subject'], ENT_QUOTES, 'UTF-8');
    $content=htmlspecialchars($res['content'], ENT_QUOTES, 'UTF-8');
    $wdate=htmlspecialchars($res['wdate'], ENT_QUOTES, 'UTF-8');
    $hit=htmlspecialchars($res['hit'], ENT_QUOTES, 'UTF-8');


    $content=ereg_replace("\n","<br>",$content);

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
    $hit=$hit+1;
    mysql_query("update $tablename set hit=$hit where id='$id'");
    mysql_close($conn);
?>
