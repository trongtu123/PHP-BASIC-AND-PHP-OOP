<?php
trait Active
{
    public function showClass()
    {
        return get_class($this);
    }
}

abstract class Country
{
    protected $slogan;

    abstract protected function sayHello();
}

interface Boss
{
    public function checkValidSlogan();
}

class EnglandCountry extends Country
{
    use Active;

    public function sayHello()
    {
        echo 'Hello';
    }

    public function setSlogan($string)
    {
        $this->slogan = $string;
    }
    public function checkValidSlogan()
    {
        $slogan = $this->slogan;
        if (strpos($slogan, 'England') !== false || strpos($slogan, 'english') !== false) {
            return true;
        }
        return false;
    }

    public function defindYourSelf()
    {
        return $this->showClass();
    }
}

class VietnamCountry extends Country
{
    use Active;

    public function sayHello()
    {
        echo 'Xin chao';
    }

    public function setSlogan($string)
    {
        $this->slogan = $string;
    }

    public function checkValidSlogan()
    {
        $slogan = $this->slogan;
        if (strpos($slogan, 'vietnam') !== false && strpos($slogan, 'hust') !== false) {
            return true;
        }
        return false;
    }

    public function defindYourSelf()
    {
        return $this->showClass();
    }
}

$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

$englandCountry->sayHello(); // Hello
echo "<br>";
$vietnamCountry->sayHello(); // Xin chao

echo "<br>";

var_dump($englandCountry->checkValidSlogan()); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan()); // false

echo "<br>";

echo 'I am ' . $englandCountry->defindYourSelf();
echo "<br>";
echo 'I am ' . $vietnamCountry->defindYourSelf();
