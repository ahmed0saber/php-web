<?php
$myfile = fopen("file.txt", "r");
$myString = fread($myfile,filesize("file.txt"));
print_r(array_count_values(str_word_count($myString, 1))['Ahmed']);
if (strpos($myString, 'Ahmed') !== false) {
    echo ' words found';
}
fclose($myfile);
?>
