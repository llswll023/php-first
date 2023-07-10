<?php

$posts = ['First Post', 'Second Post', 'Third Post'];

for($x=0; $x<count($posts);$x++) {
    echo $posts[$x] . '<br>';
}

foreach($posts as $post){
    echo $post;
}

// Use the indexes within the loop
foreach($posts as $index => $post){
    echo $index . '-' . $post . '<br>';
}

// Use the keys within the loop for an associative array

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];
  
  // Get Keys
  foreach ($person as $key => $value) {
    echo "${key} - ${value} <br>";
  }