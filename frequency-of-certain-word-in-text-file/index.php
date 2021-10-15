<?php
$myfile = fopen("file.txt", "r");
$myString = fread($myfile,filesize("file.txt"));
if (strpos($myString, 'Ahmed') !== false) {
    print_r(array_count_values(str_word_count($myString, 1))['Ahmed']);
    echo ' words found';
}
fclose($myfile);
?>
