<?php
function html_escape($word){
  return htmlspecialchars($word, ENT_QUOTES, 'UTF-8');
}

$word = '<h1>こんにちは</h1>';
echo $word;
echo html_escape($word);
echo '<br>';


function get_sum_and_diff($int1, $int2){
  $sum = $int1 + $int2;
  $difference = $int1 - $int2;
  return array($sum, $difference);
}

$int1 = 8;
$int2 = 3;
list($sum, $difference) = get_sum_and_diff($int1, $int2);
echo $sum.'<br>';
echo $difference.'<br>';

function show_members($member1, $member2, $leader='田中'){
  echo '今回のメンバーは'.$member1.'さんと'.$member2.'さんです。<br>';
  echo $leader.'さんが現場を管理します。';
}
show_members('高橋', '小林');
?>

