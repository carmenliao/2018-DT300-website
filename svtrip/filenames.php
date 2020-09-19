<?php
  $dir_name = "images-thumbs";
  $directory = @opendir($dir_name);
  while ($file=@readdir($directory)){
      if ($file == '.' || $file == '..' || $file == 'Thumbs.db' || $file == '.DS_Store') {
        continue;
        }

    $filename = str_replace('_', ' ', $file);
    $filename = ucwords($filename);
    $filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);

    echo'<a href="images-copyright/'.$file.'" target="_blank">

        <div class = "photo-arrange">
          <div class = "filenames">
            <h3 class = "filenames-title">'.$filename.'</h3>
          </div>
          <img title = "'.$filename .'" alt = "'.$filename .'" class = "object" src="'.$dir_thumbs . '/' . $file. '">
        </div>

        </a>';
  }
?>
