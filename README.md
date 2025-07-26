# OOP Concept Advance

This project demonstrates advanced Object-Oriented Programming (OOP) concepts in PHP.

## 📘 Concepts Covered

### 🔹 Class

A **class** is a blueprint or template for creating objects. It defines properties and methods that its objects will have.

### 🔹 Object

An **object** is an instance of a class. It represents a real-world entity that has state and behavior defined by the class.

---

## 🛠️ Example

```php
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
echo $myCar->message();

### 🔹 Access Modifiers

Access modifiers define the visibility of class properties and methods:

- **`public`**
  - Accessible from **anywhere**: within the class, by subclasses, and from outside the class.
  - _This is the default access level._

- **`protected`**
  - Accessible **within the class** and by **subclasses** (derived classes).
  - Not accessible from outside the class hierarchy.

- **`private`**
  - Accessible **only within the class** it is defined in.
  - Not accessible from outside or from subclasses.

```

# OOP Concept Advance

This project demonstrates advanced Object-Oriented Programming (OOP) concepts in PHP.

## 📘 Concepts Covered

🧬 Inheritance
Inheritance allows a class to use properties and methods of another class. PHP supports single inheritance only.

A class derived from another class is called inheritence

```php
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "The fruit is {$this->name} and its color is {$this->color}.";
  }
}

class Apple extends Fruit {
  public function message() {
    echo "I am an apple. ";
  }
}

$apple = new Apple("Apple", "Red");
$apple->message();
$apple->intro();
?>
```

🔧 Traits – Multiple Behavior Sharing
PHP supports only single inheritance, so to reuse methods across multiple classes, PHP provides traits.

Traits are used to declare methods that can be used in multiple classes, with any access modifier.

```php
trait Logger {
  public function log($msg) {
    echo "Log message: $msg";
  }
}

class User {
  use Logger;
}

class Admin {
  use Logger;
}

$user = new User();
$user->log("User logged in");

$admin = new Admin();
$admin->log("Admin logged in");
?>
```

### 🔹 Abstract Class and method

### 🔹 Object

An **abstract** class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
An abstract class or method is defined with the abstract keyword

**Explanations**
-The method in the child must have the same name as in the abstract class.

-The method must use the same or a less restricted access modifier (e.g., protected can become protected or public, but not private).

-The number and type of required arguments must match the abstract method.

-The child method can include additional optional arguments.

**Example**

```php
   abstract class Car{
     public $name;
     public function __construct($name)
     {
        $this->name=$name;
     }
     abstract public function intro();
   }

   class Toyota extends Car{
     public function intro()
     {
        echo "The car name is $this->name";
     }
   }
   class Marchedes extends Car{
     public function intro()
     {
        echo "The car name is $this->name";
     }
   }

   $toyota = new Toyota("Toyota");
   $toyota->intro();
   echo "<br/>";
   $marchedes = new Marchedes("Marchedes");
   $marchedes->intro();
```

**Interface**
An interface is like a blueprint that tells a class what methods it must have — but it doesn't say how to do them.

**Explanations**
Imagine you’re making a remote control interface. You say:
"Every remote must have a turnOn() and turnOff() button."
You don’t care how the remote turns things on or off — just that it has those buttons.

**Example**

```php
  interface Remote{
     public function turnOn($name);
     public function turnOff($name);
  }

  class TvRemote implements Remote{
    public function turnOn($name)
    {
        echo "{$name} Turned on";
    }
    public function turnOff($name)
    {
        echo "{$name} Turned Off";
    }
  }
  $remote = new TvRemote();
  $remote->turnOff("Sony");
  echo "<br>";
  $remote->turnOn("LG");
```

Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time

### 🔹 Static Methods and Properties

Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword:

```php
class Gog
{
    public static function deshi()
    {
        echo "ssds";
    }
}
Gog::deshi();
```

**Explanations**
A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

```php
class Dog
{
    public static function color()
    {
        echo "The Dog color is Red";
    }
    public function __construct()
    {
        self::color();
    }
}

new Dog();
```

**Static Properties**
Static properties can be called directly - without creating an instance of a class.
Static properties are declared with the static keyword:

```php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
```

A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::)

```php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();
```

**Method Overloading**
Method overloading is a concept that allows you to have a method that can perform differently based on its number of parameters. It allows you have multiple definitions for a same method in the same class.
PHP supports method overloading using a magic keyword, **\_\_call**.

```php
class SampleClass{
    function __call($name, $arguments)
    {
        $count=count($arguments);
        if($name=='add'){
            if ($count == 2) {
                return array_sum($arguments);
            } else if ($count == 3) {
                return array_sum($arguments) > 10 ? 10 : array_sum($arguments);
            }
        }
    }
}
$sampleObject = new SampleClass;
echo $sampleObject->add(12, 12) . PHP_EOL; // Outputs 24
echo $sampleObject->add(12, 2, 6) . PHP_EOL; // Outputs 10

```

**Method Overriding**
Method overriding occurs when a child class provides a specific implementation of a method that is already defined in its parent class.

```php
class ParentClass {
    public function greet() {
        echo "Hello from Parent Class";
    }
}

class ChildClass extends ParentClass {
    // This overrides the greet() method from the ParentClass
    public function greet() {
        echo "Hello from Child Class";
    }
}

$obj = new ChildClass();
$obj->greet(); // Output: Hello from Child Class


```

**Namespace**

When we want to call multiple class with same in a single file it causes error . Using namespace we can solve that.

1.They allow for better organization by grouping classes that work together to perform a task
2They allow the same name to be used for more than one class

```php
require 'bkashPayment.php';
require 'nogodPayment.php';
$obj= new bkash\Payment();
```

### 🔹 include,require,include_once,require_once

--include:Includes and evaluates the specified file .If the file is not found, it emits a warning (E_WARNING) and the script continues to execute.

--require: Same as include, but used for essential files. If the file is not found, it emits a fatal error (E_COMPILE_ERROR) and the script stops execution.

--include_once: Same as include, but ensures the file is included only once, even if called multiple times.Emits a warning if the file is not found, script continues.
--require_once:Same as require, but ensures the file is included only once. Emits a fatal error if the file is not found, script stops.

### 🔹 Session

      Session are used to Store data on the server side . Use to track user state

### 🔹 Cookies

       Cookies are used  to store data on client side . exmp:remember login info

**Encapsulation**
Encapsulation হলো OOP-এর একটি principle যেখানে data (properties) এবং সেই data-র সাথে কাজ করার method (function) গুলোকে একসাথে একটি class-এর ভিতরে বন্ধ করে রাখা হয় এবং বাইরের কেউ চাইলেও সরাসরি সেই data-তে access করতে না পারে।

```
class BankAccount {
    private $balance = 0; // balance লুকানো হলো

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(1000);
echo $account->getBalance(); // Output: 1000

// $account->balance = 100000; ❌ এটা করা যাবে না, কারণ private

```
