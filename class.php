<?php
class Task {
    public $description;
    public $completed=false;
    public function __construct($description){
        $this->description=$description;
    }
    public function complete(){
        $this->completed=true;
    }
}

$task=new Task('Learn OOP');
$task2=new Task("Pick up groceries");
$task2->complete();
// var_dump($task2->description);

// var_dump($task2->completed);
?>

<?php
// Getters and Setters
class Person{
    private $name;
    private $age;

    public function __construct($name){
        $this->name=$name;
    }
   
   public function getAge()
   {
    return $this->age;
   }

    public function setAge($age){
        if($age<18){
            throw new Exception("Person is not old enough");
        }
        $this->age=$age;
    }
}
$ravi = new Person("Ravi Nishad");
$ravi->setAge(30);
// var_dump($ravi);
?>

<?php
//Inheritance
abstract class Shape{
     
    protected $color;
    public function __construct($color="red"){
        $this->color=$color;
    }
    public function getColor()
    {
        return $this->color;
    }
    abstract protected function getArea();
}
class Square extends Shape{
    protected $length=4;
    public function getArea()
    {
      return pow($this->length,2);
    }
}
class Triangle extends Shape{

    protected $base=4;
    protected $height=7;

    public function getArea()
    {
        return .5 * $this->base*$this->height;
    }
}

?>