<?php 
$val = "hensudesu";
$val .= "123";
const con = "teisudesu";

$result = true;

$arr = ["zero","one","two"];


echo "変数の中身→{$val}";
echo "<br>";
echo con;
echo "<br>";
echo $result;
echo "<br>";
echo "<pre>";
echo var_dump($arr);
echo "</pre>";

foreach($arr as $i){
  echo "<pre>";
  echo $i;
  echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test-form</title>
</head>
<body>

  <h1>テストフォーム!!!!!!!!</h1>
  <p>
    練習用のテストフォーム<br>
    入力した内容を次のページに表示させます<br>
  </p>

  <p class="create-date">作成日:2024/02/21</p>

  <div class="registration-form">

  <form action="index.php" method="post">
    <!-- フォームタイトル -->
    <h2>ユーザ登録</h2>
    <div>
      <label for="user-name">ユーザー名 (必須)</label>
      <input id="user-name" type="text" name="user-name" >
    </div>
    <!-- placeholder="山田太郎" -->

    <div>
      <label for="e-mail">Eメール (必須)</label>
      <input id="e-mail" type="email" name="e-mail" >
    </div>
    <!-- placeholder="taro.yammada@google.com" -->

    <div>
      <label for="birthday">生年月日</label>
      <input id="birthday" type="date" name="birthday">
    </div>

    <!-- <div>
      <label for="note">備考</label>
      <textarea id="note" name="note" rows="6"></textarea>
    </div> -->
    
    <!-- <div>
      <label for="attachment">添付ファイル</label>
      <input id="attachment" type="file" name="attachment">
    </div> -->

    <div class="hobby-selection">
      <label>興味のある事柄</label>
        <input id="sport" type="checkbox" name="interests" value="sport">
        <label for="sport">スポーツ</label>
        <input id="reading" type="checkbox" name="interests" value="reading">
        <label for="reading">読書</label>
        <input id="gaming" type="checkbox" name="interests" value="gaming">
        <label for="gaming">ゲーム</label>
    </div>

    <div><button type="submit">登録する</button></div>

  </form>
</div>







</body>
</html>
