<?php
interface Animal{
    public function communicate();
}
class Dog implements Animal{
    //this class dog implements animal so it is neccessary to have all function from animal
    public function communicate()
    {
        return "bark";
    }
}
class Cat implements Animal{
    //this class dog implements animal so it is neccessary to have all function from animal
    public function communicate()
    {
        return "meow";
    }
}
?>
