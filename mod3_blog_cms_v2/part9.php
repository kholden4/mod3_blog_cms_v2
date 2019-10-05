<?php
    ini_set('display_errors', 1); // Show errors for debugging
?>

// Part 9.1 Variables
<?php
    $firstName = "Jane";                     // String type (text characters)
    $lastName = "Doe";                       // String type (text characters)
    $age = 35;                               // Integer type (whole numbers)
    $married = true;                         // Boolean type (True/False)
    $childrenNames = array("Alice", "Bob");  // Array type (use of values)
?>


 // Functions 
 <?php
    function getFullName($firstName, $lastName) {     // Function name
        return  $firstName . " " . $lastName;         // Concatenation Operator & Returned value
    }

    // To call or use the above function
    $fullName = getFullName($firstName, $lastName);   // Using Variables
    $fullName = getFullName("Alice", "Doe");          // Using Values
?>
 
<?php
// New Function Example
    function getIsSettled($age, $married) {          // Function Name
        $dogYears = $age/7;                          // Arithmetic Operator
        $isAdult = $dogYears > 4;                    // Comparison operator
        $isSettled = $isAdult and $married;          // Integer type variable
        return $isSettled;                           // Return Value 
    }
    
    $isSettled = getIsSettled($age, $married);       // Using variables
    $isSettled = getIsSettled(5, $false);            // Using Values
?>

// Echo 

// echo $fullName
// echo "<h1>Hello World!</h1>"                        // String example

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