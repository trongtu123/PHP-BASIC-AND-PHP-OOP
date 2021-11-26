<?php
// Bài 1:
$charBook = 'book';
$charRestaurant = 'restaurant';
function checkValidString($str)
{
    global $charBook;
    global $charRestaurant;
    $checkCharBook = strpos($str, $charBook);
    $checkCharRestaurant = strpos($str, $charRestaurant);
    if (($checkCharBook === false && $checkCharRestaurant === false) || ($checkCharBook !== false && $checkCharRestaurant !== false)) {
        return false;
    } else {
        return true;
    }
}
// Bài 2:
// readFile file1.txt
$readFile1 = fopen('file1.txt', 'r');
$str1 = fread($readFile1, filesize('file1.txt'));
fclose($readFile1);
// readFile file2.txt
$readFile2 = fopen('file2.txt', 'r');
$str2 = fread($readFile2, filesize('file2.txt'));
fclose($readFile2);
// Check file1.txt
if (!checkValidString($str1)) {
    echo ' Chuỗi không lệ'.'<br/>';
} else {
    echo ' Chuỗi hợp lệ. Chuỗi bao gồm ' . substr_count($str1, '.') . ' câu.'.'<br/>';
}
// Check file2.txt
if (!checkValidString($str2)) {
    echo ' Chuỗi không lệ'.'<br/>';
} else {
    echo ' Chuỗi hợp lệ. Chuỗi bao gồm ' . substr_count($str2, '.') . ' câu.'.'<br/>';
}
