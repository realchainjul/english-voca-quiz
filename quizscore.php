<?php
    // 영어 단어장 부름
    include "voca.php";
    // 사용자가 입력한 값을 읽음
    $userAnswers = $_POST; 
    // 맞힌 단어와 틀린 단어를 저장할 배열을 초기화
    $correctWords = array();
    $wrongWords = array();
    // 입력된 값들을 순회하며 채점
    foreach($userAnswers as $key => $value) {
        // 정답을 부름
        $correctAnswer1 = $voca[$key][0];
        $correctAnswer2 = $voca[$key][1];
        // 사용자가 입력한 값과 정답을 비교하여 맞힌 단어와 틀린 단어를 분류
        if($value == $correctAnswer1 || $value == $correctAnswer2) {
            $correctWords[$key] = $value;
         } else {
            $wrongWords[$key] = array($value, $correctAnswer1, $correctAnswer2);
        }
    }  
    // 맞힌 단어 출력
    if (!empty($correctWords)) {
        echo "<h2>맞힌 단어</h2>";
        echo "<table>";
        foreach ($correctWords as $key => $value) {
            echo "<tr><td>" . $key . " : " . $voca[$key][0] . ", " . $voca[$key][1] . "</td></tr>";
        }
        echo "</table>";
    }
    // 틀린 단어 출력
    if(!empty($wrongWords)) {
        echo "<h2>틀린 단어</h2>";
        echo "<table>";
        foreach($wrongWords as $key => $value) {
            echo "<tr><td>" . $key . " : " . "</td></tr>";
        }
            
        echo "</table>";
    }
           
?>
