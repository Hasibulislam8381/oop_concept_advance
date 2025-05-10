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
