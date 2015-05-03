<?

function input_check($in, $msg)
{
    if(!$in)
    {
        echo("
            <script>
                alert('$msg');
                history.go(-1);
            </script>
            ");
        exit;
    }
}

?>
