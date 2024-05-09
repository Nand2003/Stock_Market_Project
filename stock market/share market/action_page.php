<?php
    $url="https://results.eci.gov.in/ResultAcGenMar2022/statewiseS051.htm?";
if(isset($_POST['state']) && $_POST['page'])
{
    echo$_POST['state'];
    echo$_POST['page'];
    $url =$url.$_POST['state'].$_POST['page'].".htm";
    header("location:".$url);
}
?>