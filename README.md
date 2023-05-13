# english-voca-quiz

### 내용
영어 단어장을 보여주고 영어 단어 퀴즈를 생성한 다음 점수를 채점하고 결과를 알려주는 웹페이지를 작성했습니다. <br>
*css는 적용하지 않았습니다.

작성한 PHP 파일은 다음과 같습니다.

- vaca.php : 영어 단어들을 연관배열로 정의하는 파일 <br>
  (다음 영어 사전 https://wordbook.daum.net/open/wordbook.do?id=17 <br> 웹페이지에서 20개의 단어를 선택하고 아래와 같이 배열을 작성)
- vocalist.php : voca.php 파일에 기술한 $voca배열을 읽고 아래 형식으로 출력하는 파일
- quiz.php : $voca 배열에서 랜덤하게 5개의 단어들을 추출하여 퀴즈로 출제하는 파일 <br>
  (아래와 같은 형식으로 출력했습니다.) <br>
  ![스크린샷 2023-05-13 143649](https://github.com/realchainjul/english-voca-quiz/assets/132828704/d8f564d4-db00-4eed-97b5-a3639176701c)
- quizscore.php : quiz.php에서 입력한 값들을 읽고 채점한 다음 결과를 출력<br>
  (아래와 같은 형식으로 출력했습니다. <br>
  ![스크린샷 2023-05-13 143802](https://github.com/realchainjul/english-voca-quiz/assets/132828704/77f8f56d-a510-4066-b3d1-98e0866f8714)
  
