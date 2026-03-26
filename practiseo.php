<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Person {
    public $name = "Ali";
    private $age = 25;
    protected $salary = 50000;

    public function showData() {
        echo $this->name . "<br>";
        echo $this->age . "<br>";     // Allowed (inside class)
        echo $this->salary . "<br>";  // Allowed (inside class)
    }
}

$obj = new Person();
echo $obj->name; // Allowed

// echo $obj->age;    ❌ Error (private)
// echo $obj->salary; ❌ Error (protected)


//If we want to Other private and protected we will call them through Obj->function //name
$obj->showData(); // ✅ function call (access all)






// // Parent Class
// class Animal {
//     public function sound() {
//         echo "Animal makes sound";
//     }
// }

// // Child Class
// class Dog extends Animal {
//     public function bark() {
//         echo "Dog barks";
//     }
// }

// // Object
// $dog = new Dog();

// $dog->sound(); // Parent method
// echo "<br>";
// $dog->bark();  // Child method





// class Student {
//     public $name;
//     public $age;

//     public function study() {
//         echo "Student is studying";
//     }
// }
// $std1 = new Student();

// $std1->name = "Ali";
// $std1->age = 20;

// echo $std1->name;
// $std1->study();

?>

</body>
</html>