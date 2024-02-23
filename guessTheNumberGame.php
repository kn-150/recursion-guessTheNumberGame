<?php
echo "数字当てゲームをしましょう！" . "\n";
echo "あなたから与えられた2つの数字、nからmの範囲でランダムな数字を1つ生成しますので" . "\n";
echo "それがなんの数字か当ててください" . "\n";

// １つ目のインプット
echo "まず小さい方の数字を入力します。1以上の数字で数字を決めて半角数字で入力してください" . "\n";
$firstInput = (int)trim(fgets(STDIN));

// ２つ目のインプット
echo "次に大きい方の数字を半角数字で入力してください" . "\n";
$secondInput = (int)trim(fgets(STDIN));

// 最小値が最大値以下であることを確認する
$n = 0;
$m = 0;
if ($firstInput >= $secondInput) {
  $n = $secondInput;
  $m = $firstInput;
} else {
  $n = $firstInput;
  $m = $secondInput;
}

$randomNum = rand($n, $m);
echo "指定された範囲の中で、ランダムな数字を生成しました" . "\n";
echo "それでは、推測スタート！" . "\n";

// 制限回数なし
echo "推測する数字を入力してください。" . "\n";
$guess = null;
while($guess !== $randomNum) {
  $guess = (int)trim(fgets(STDIN));
  if($guess < $randomNum) echo "ランダム生成された数字はもっと大きいよ！" . "\n";
  else if($guess > $randomNum) echo "ランダム生成された数字はもっと小さいよ！" . "\n";
  else echo "大正解！！！すごい！ランダム生成された数字は". $randomNum . "でした" . "\n";
}

echo "また遊んでね〜！" . "\n";