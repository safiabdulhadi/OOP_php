<?php
// class Student{
//     public $id = "CS-90";
//     public $name = "Ahmad";
//     public $age = 28;
// }

// $st1 = new Student();
// echo $st1->name;
// echo "<br>";
// echo $st1->id;
// echo "<br>";
// echo $st1->age;

// echo "<br>-------------------------------- <br>";

// $st2 = new Student();
// echo $st2->name . "<br>";
// echo $st2->age . "<br>";
// echo $st2->id . "<br>";





class Student{

    public $id;
    public $name;
    public $age;

    public function speak(){
        echo $this->name . " "  . "Speak English ................";

    }
}

$stu2 = new Student();
echo "Name:" . $stu2->name = "Ahmad khan" . "<br>";
echo "Age:" . $stu2->age = 28 . "<br>";
echo "ID:" . $stu2->id = 24858345854 . "<br>";
echo "<br>";
echo $stu2->speak();
echo "<br>";
var_dump($stu2);

echo "<br>-------------------------------- <br>";
echo "<br>";

$student3 = new Student();
echo $student3->name = "Javad";
echo "<br>";
$student3->speak();





?>