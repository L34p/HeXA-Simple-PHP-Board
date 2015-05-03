<?
    require_once "db_con.h";
    require_once "board_check.h";

    $name=mysql_real_escape_string($_POST["name"]);
    $subject=mysql_real_escape_string($_POST["subject"]);
    $pw=mysql_real_escape_string($_POST["pw"]);
    $content=mysql_real_escape_string($_POST["content"]);

    input_check($subject, "글 제목을 적어주세요.");
    input_check($name, "이름을 적어주세요.");
    input_check($pw, "비밀번호를 적어주세요.");
    input_check($content, "글 내용을 적어주세요.");

    $query=mysql_query( "insert into $tablename(id,name,subject,wdate,content,pw) values('','$name','$subject',now(),'$content','$pw')" );
    
    if(!$query)
        echo("<script> alert('에러가 발생하였습니다.')</script>");

    mysql_close($conn);
?>
    <meta http-equiv='refresh' content='1; url=index.php'>
