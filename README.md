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

🔹 Access Modifiers
Access modifiers define the visibility of class properties and methods:

public
Accessible from anywhere – inside the class, by subclasses, and from outside the class.
Default access level.

protected
Accessible within the class and its subclasses. Not accessible from outside.

private
Accessible only within the class where it is defined. Not accessible from outside or subclasses.

```

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
