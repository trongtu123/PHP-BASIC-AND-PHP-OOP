<?php
class ExerciseString
{
    public $Check1;
    public $Check2;

    public function __construct($charBook, $charRestaurant)
    {
        $this->charBook = $charBook;
        $this->charRestaurant = $charRestaurant;
    }

    public function readFile($file)
    {
        $readFile = fopen($file, 'r');
        $str = fread($readFile, filesize($file));
        fclose($readFile);

        return $str;
    }

    public function checkValidString($str)
    {
        $checkCharBook = strpos($str, $this->charBook);
        $checkCharRestaurant = strpos($str, $this->charRestaurant);
        if (($checkCharBook === false && $checkCharRestaurant === false) || ($checkCharBook !== false && $checkCharRestaurant !== false)) {
            return false;
        } else {
            return true;
        }
    }

    public function writeFile()
    {
        $newFile = fopen('result_file.txt', 'w') or die("Unable to open file!");
        if ($this->check1 === true) {
            fwrite($newFile, 'Hợp lệ.');
        } else {
            fwrite($newFile, 'Không hợp lệ.');
        }

        if ($this->check2 === true) {
            fwrite($newFile, 'Hợp lệ.');
        } else {
            fwrite($newFile, 'Không hợp lệ. Chuỗi có ' . $this->countStr2 . ' câu.');
        }

        fclose($newFile);
    }
}

$object1 = new ExerciseString('book', 'restaurant');

$str1 = $object1->readFile('file1.txt');
$str2 = $object1->readFile('file2.txt');

$object1->check1 = $check1 = $object1->checkValidString($str1);
$object1->check2 = $check2 = $object1->checkValidString($str2);

$object1->countStr2 = $countStr2 = substr_count($str2, '.');
$object1->writeFile();
