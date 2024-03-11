<?php 
// $val = "hensudesu";
// $val .= "123";
// const con = "teisudesu";

// $result = true;

// $arr = ["zero","one","two"];


// echo "変数の中身→{$val}";
// echo "<br>";
// echo con;
// echo "<br>";
// echo $result;
// echo "<br>";
// echo "<pre>";
// echo var_dump($arr);
// echo "</pre>";

// foreach($arr as $i){
//   echo "<pre>";
//   echo $i;
//   echo "</pre>";
// }

$arr = array(
  "item1"=>"one",
  "item2"=>"two"
);

$arr["item3"]="three";

var_dump($arr);

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

  <div class="registration-form">

  <form action="index.php" method="post">
    <div>
      <label for="user-name">ユーザー名 (必須)</label>
      <input id="user-name" type="text" name="user-name">
    </div>

    <div>
      <label for="e-mail">Eメール (必須)</label>
      <input id="e-mail" type="email" name="e-mail" >
    </div>

    <div>
      <label for="birthday">生年月日</label>
      <input id="birthday" type="date" name="birthday">
    </div>

    <div>
      <label for="note">備考</label>
      <textarea id="note" name="note" rows="6"></textarea>
    </div>
    
    
    <div class="hobby-selection">
      <label>興味のある事柄</label>
      <input type="hidden" name="interests" value="0">
      <input type="checkbox" id="sport" name="interests" value="sport">
      <label for="sport">スポーツ</label>
      <input type="checkbox" id="reading" name="interests" value="reading">
      <label for="reading">読書</label>
    </div>
    
    <!-- <div>
      <label for="attachment">添付ファイル</label>
      <input id="attachment" type="file" name="attachment">
    </div> -->

    <div><button type="submit">登録する</button></div>

  </form>
</div>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

  var_dump($_POST);

  foreach($_POST as $key => $value){

    if($value){
      echo "<pre>";
      echo htmlspecialchars($value,ENT_QUOTES,"UTF-8");
      echo "</pre>";
    }else{
      echo "<pre>";
      echo $key;
      echo "</pre>";
    }

  }

}


?>





</body>
</html>
