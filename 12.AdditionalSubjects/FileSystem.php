<?php 
  $file = 'test.txt';

  if(file_exists($file)){
    
    // read file
    echo readfile($file) . '<br />';

    // copy file
    copy($file, 'quotes.txt');

    // absolute path
    echo realpath($file) . '<br />  ';

    // filesize
    echo filesize($file) . '<br />';

    //rename file
    rename($file, 'test.txt');
  } else {
    echo 'file does not exist';
  }

  // making folder
  mkdir('test');
?>