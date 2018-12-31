<?php
// Create a randon number which will be used as the dir name.
$random = rand(0, 100000000000);
$dst    = substr(md5($random), 0, 1000000000);

// Create a folder using random number generated above and then copy all files to that folder.
// Once copied; navigate browsed to that folder.

function recurse_copy($src, $dst)
{
    $dir = opendir($src);
    @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    recurse_copy($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }   
            }
        }
    closedir($dir);
}

$src = "page";
recurse_copy($src, $dst);

header("location:" . $dst . "");
?>