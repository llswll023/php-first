<?php
/*
$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

$post = {'First Post'};

if(!empty($posts)) {
    echo $posts[0];
} else{
    echo 'No Posts';
}

echo !empty($posts) ? $posts[0] : null;//effective
$firstPost = !empty($posts) ? $posts[0] : 'No Posts';
//$firstPost = $posts[0] ?? 'No Posts';
echo $firstPost;
*/
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
?>