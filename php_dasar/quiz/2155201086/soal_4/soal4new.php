<?php 
session_start();

if(isset($SESSION['STATUS']))

{
    echo $SESSION['STATUS'];
}


