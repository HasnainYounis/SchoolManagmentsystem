<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }
}

$apple = new Fruit('Apple', 'Red');
$banana = new Fruit('Banana', 'Yellow');


// interface Animal {
//   public function fromFamily();
//   public function makeSound();
// }

// class Cat implements Animal {
//   public function fromFamily() {
//     echo "From family: Felidae (Relatives: lions, tigers, jaguars, lynx, cougars, and cheetahs).<br>";
//   }
//   public function makeSound() {
//     echo "Sound: Meow.";
//   }
// }

// class Dog implements Animal {
//   public function fromFamily() {
//     echo "From family: Canidae (Relatives: wolves, foxes, coyotes, jackals, and domestic dogs).<br>";
//   }
//   public function makeSound() {
//     echo "Sound: Woff.";
//   }
// }

// echo "<h3>Cats</h3>";
// $cat = new Cat();
// $cat->fromFamily();
// $cat->makeSound();

// echo "<h3>Dogs</h3>";
// $dog = new Dog();
// $dog->fromFamily();
// $dog->makeSound();






// interface Animal {
//   public function makeSound();
// }

// class Cat implements Animal {
//   public function makeSound() {
//     echo "Meow";
//   }
// }

// class Dog implements Animal {
//   public function makeSound() {
//     echo "Woff";
//   }
// }

// $cat = new Cat();
// $cat->makeSound();

// $dog = new Dog();
// $dog->makeSound();




// abstract class ParentClass {
//   // Abstract method with one argument
//   abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//   // The child class may define optional arguments that is not in the parent's abstract method
//   public function prefixName($name, $separator = ".", $greet = "Dear") {
//     if ($name == "John Doe") {
//       $prefix = "Mr";
//     } elseif ($name == "Jane Doe") {
//       $prefix = "Mrs";
//     } else {
//       $prefix = "";
//     }
//     return "$greet $prefix$separator $name";
//   }
// }

// $obj = new ChildClass;
// echo $obj->prefixName("John Doe");
// echo "<br>";  
// echo $obj->prefixName("Jane Doe");






// abstract class Animal {
//     abstract public function sound(); // no body
// }

// class Dog extends Animal {
//     public function sound() {
//         echo "Dog barks";
//     }
// }

// $obj = new Dog();
// $obj->sound();





// class Test {
//     public function __call($name, $arguments) {
//         if ($name == "add") {
//             if (count($arguments) == 2) {
//                 echo $arguments[0] + $arguments[1];
//             }
//             elseif (count($arguments) == 3) {
//                 echo $arguments[0] + $arguments[1] + $arguments[2];
//             }
//         }
//     }
// }

// $obj = new Test();
// $obj->add(2,3);     // 5
// echo "<br>";
// $obj->add(2,3,4);   // 9





// class Animal {
//     public function sound() {
//         echo "Animal sound<br>";
//     }
// }

// class Dog extends Animal {
//     public function sound() {
//             parent::sound(); // ✅ parent method call
//         echo "Dog barks<br>";
//     }
// }

// class Cat extends Animal {
//     public function sound() {
//            parent::sound(); // ✅ parent method call
//         echo "Cat meows<br>";
//     }
// }

// $dog = new Dog();
// $cat = new Cat();

// $dog->sound(); // Dog barks
// $cat->sound(); // Cat meows


// class BankAccount {
//     private $balance;

//     public function setBalance($amount) {
//         $this->balance = $amount;
//     }

//     public function getBalance() {
//         return $this->balance;
//     }
// }

// $account = new BankAccount();

// $account->setBalance(5000);
// echo $account->getBalance();






// class Person {
//     public $name = "Ali";
//     private $age = 25;
//     protected $salary = 50000;

//     // Getter for private variable
//     public function getAge() {
//         return $this->age;
//     }

//     // Getter for protected variable
//     public function getSalary() {
//         return $this->salary;
//     }
// }

// $obj = new Person();

// echo $obj->name . "<br>";     // ✅ public direct
// echo $obj->getAge() . "<br>"; // ✅ private via function
// echo $obj->getSalary();       // ✅ protected via function






// class Person {
//     public $name = "Ali";
//     private $age = 25;
//     protected $salary = 50000;

//     public function showData() {
//         echo $this->name . "<br>";
//         echo $this->age . "<br>";     // Allowed (inside class)
//         echo $this->salary . "<br>";  // Allowed (inside class)
//     }
// }

// $obj = new Person();
// echo $obj->name; // Allowed

// // echo $obj->age;   // ❌ Error (private)
// // echo $obj->salary; //❌ Error (protected)


// //If we want to Other private and protected we will call them through Obj->function //name
// $obj->showData(); // ✅ function call (access all)







// class Test {
//     public function __construct() {
//         echo "Object Created<br>";
//     }

//     public function __destruct() {
//         echo "Object Destroyed";
//     }
// }

// $obj = new Test();







// class Student {
//     public $name;

//     // Constructor
//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function showName() {
//         echo "Name: " . $this->name;
//     }
// }

// // Object creation
// $std1 = new Student("Ali");
// $std1->showName();





//     trait A {
//     public function msg1() {
//         echo "Hello ";
//     }
// }

// trait B {
//     public function msg2() {
//         echo "World";
//     }
// }

// class C {
//     use A, B;
// }

// $obj = new C();
// $obj->msg1();
// $obj->msg2();


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