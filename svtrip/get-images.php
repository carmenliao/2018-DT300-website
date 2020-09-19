<?php
$dir_name = "images-thumbs";
$dir_thumbs ="images-thumbs";

$inum = 0;

$directory = @opendir($dir_name);
if (!$directory) {
  echo "There is a problem with the website. ";
  die ("I suggest you try later.");
  }

while ($file=@readdir($directory)){
  if ($file == '.' || $file == '..' || $file== 'Thumbs.db' || $file== '.DS_Store') {
    continue;
    }
}

?>
