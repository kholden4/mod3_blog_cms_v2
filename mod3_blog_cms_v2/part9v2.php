<?php
    include "header.php";
?><!--PHP content always loads before the rest of web content--> 

<?php
    ini_set('display_errors', 1); // Show errors for debugging
?>

<?php
    $firstName = "Jane";                     // String type variable
    $lastName = "Doe";                       // String type variable
    $age = 35;                               // Integer type variable
    $married = true;                         // Boolean type variable
    $childrenNames = array("Alice", "Bob");
    $fullName = $firstName . " " . $lastName;
    $dogYears = $age/20;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
?>

<?php
    function getFullName($firstName, $lastName) {     //Function name
        return  $firstName . " " . $lastName;         // Concatenation Operator & Returned value
    }

    $fullName = getFullName($firstName, $lastName);   // Using variables
    $fullName = getFullName("Alice", "Doe");
        echo $fullName . " (Function #1). ";
 ?>   

<?php 
    function getIsSettled($age, $married) {
        return $isSettled;
    }

    $isSettled = getIsSettled($age, $married);
    $isSettled = getIsSettled(5, false);
        if ($isSettled) {                               // Conditional Statements
         echo $fullName . " is settled.";
        } else {
         echo $fullName . " is not settled.";
        }
        foreach($childrenNames as $childName) {         // Loops
            echo "<li>" . $childName . "</li>";
        }
?>