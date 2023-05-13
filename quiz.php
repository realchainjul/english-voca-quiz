<!DOCTYPE html>
<html>
    <head>
        <title>영어 단어 퀴즈</title>
            <meta charset="utf-8">
    </head>
    <body>
        <h1>영어 단어 퀴즈</h1>
        <p>아래 영어 단어의 한글 뜻을 적어 제출하시오.</p>
        <form action="quizscore.php" method="post">
            <table>
                <?php 
                    //단어장 부름
                    include_once 'voca.php'; 
                    //단어장에서 5개 단어 랜덤으로 부름
                    $keys = array_rand($voca, 5);
                    //5개 랜덤 단어 출력, 정답칸 생성
                    foreach($keys as $key) {
                        echo "<tr><td>$key</td><td><input type='text' name='$key'></td></tr>";
                    }
                ?>
            </table>
            <input type="submit" value="제출">
        </form>
    </body>
</html>


