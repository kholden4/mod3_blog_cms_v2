<?php
    ini_set('display_errors', 1); // Show errors for debugging
?>

 
<?php
// Function Example
    function getIsSettled($age, $married) {          // Function Name
        $dogYears = $age/7;                          // Arithmetic Operator
        $isAdult = $dogYears > 4;                    // Comparison operator
        $isSettled = $isAdult and $married;          // Integer type variable
        return $isSettled;                           // Return Value 
    }
    
// $isSettled = getIsSettled($age, $married);       // Using variables
// $isSettled = getIsSettled(5, $false);            // Using Values
?>  

<?php
    if ($isSettled) {                               // Conditional Statements
        echo $fullName . " is settled.";
    } else {
        echo $fullName . " is not settled.";
    }

    foreach($childrenNames as $childName) {         // Loops
        echo "<li>" . $childName . "</li>";
    }
?>