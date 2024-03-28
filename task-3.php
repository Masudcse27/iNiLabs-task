<?php

class Employe {
    private $name;
    private int $salary;

    public function __construct($name , int $salary){
        $this->name =  $name;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
    public function setSalary(int $salary) {
        if($salary > 0) {
            $this->salary = $salary;
        }
        else {
            echo "Invalid salary.";
        }
    }
}

$test_employe = new Employe("Masud" , 20000);

echo $test_employe->getSalary();
echo "\n";
$test_employe->setSalary(-30000);
echo "\n";
$test_employe->setSalary(30000);
echo $test_employe->getSalary();
