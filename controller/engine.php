<?php
if(isset($_GET['p']))
{
    $key=$_GET['p'].".php";
    $page= scandir('view');
    if(in_array($key,$page))
    {
        include_once "view/$key";
        
    }
    else
    {
        include_once "view/HIT_DOT.php";
    }
}
else
{
    include_once "view/HIT_DOT.php";
}
