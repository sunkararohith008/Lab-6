<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
      <h1>Lab 6</h1>
    <main>
        <?php

//create variables to store form data
$first_name = filter_input(INPUT_POST, 'fname');
$last_name = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

      $id = null;
$id = filter_input(INPUT_POST, 'user_id');
//set up a flag variable

$ok = true;


//validate
// first name and last name not empty

if (empty($first_name) || empty($last_name)) {
    echo "<p class='error'>Please provide both first and last name! </p>";
    $ok = false;
}

//email not empty and proper format
if (empty($email) || $email === false) {
    echo "<p class='error'>Please include your email in the proper format!</p>";
    $ok = false;
}


//if form validates, try to connect to database and add info

if ($ok === true) {
    try {

        //Connecting to our Database named COMP1006_SUMMER2020 .
        require_once('connect.php');

        //setting up the sql command to insert data into table persons.
        $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:firstname, :lastname, :email);"; // what is missing here?

        //calling the prepare method of the PDO object to prepare the query and return PDO statement object
        $statement = $db->prepare($sql);        // fill in the correct method

        // Using the bindparam() function which binds the name placeholder with actual variable.
        $statement->bindParam(':firstname', $first_name);
        $statement->bindParam(':lastname', $last_name);
        $statement->bindParam(':email', $email);

          //if we are updating, bind :user_id
        if(!empty($id)) {
            $statement->bindParam(':user_id', $id);
        }

        // executing the query
        $statement->execute();              // fill in the correct method

        // show message
        echo "<p> Thanks for sharing! </p>";

        // Closing the Database connection
       $statement ->closeCursor();          // fill in the correct method


    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        //show error message to user
        echo "<p> Sorry! We weren't able to process your submission at this time. We've alerted our admins and will let you know when things are fixed! </p> ";
        echo $error_message;
        //email app admin with error
        mail('sunkararohith008@gmail.com', 'Error-Lab6 ', 'Error :'. $error_message);
    }
}
?>
    <a href="index.php" class="error-btn"> Back to Form </a>
    </main>
    <?php require_once('footer.php'); ?>
