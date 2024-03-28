<?php
class Animal {
    public function sound() {
        echo "Animal sound\n";
    }
} 

class Cat extends Animal {
    public function sound() {
        echo "Cat sound meow meow\n";
    }
}

class Dog extends Animal {
    public function sound() {
        echo "Dog sound bark\n";
    }
}

class Elephant extends Animal {
    public function sound() {
        echo "Elephant sound Trumpets\n";
    }
}

$testCat = new Cat;
$testDog = new Dog;
$testElephant = new Elephant;
echo $testCat->sound();
echo $testDog->sound();
echo $testElephant->sound();