<?php
//단어장 부름
include_once('voca.php');
//단어장 출력
foreach($voca as $word => $means) {
    echo $word . "<br>";
    foreach($means as $mean) {
        echo $mean . "<br>";
    }
}
?>