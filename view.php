
<?php require_once('auth.php'); ?>
<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
      <h1>Lab 6</h1>
      <h2> COMP1006_SUMMER2020 </h2>
    <main>
    <?php
    try {
    //connect to our db
    require_once('connect.php');

    //set up SQL statement
    $sql = "SELECT * FROM persons;";

    //prepare the query
    $statement = $db->prepare($sql);

    //execute
    $statement->execute();

    //use fetchAll to store the results
    $records = $statement->fetchAll();

    // echo out the top of the table

    echo "<table class='table'><thead class='thead-dark'><th>First Name</th><th>Last Name</th><th>Email</th><th> Delete</th><th> Edit </th></thead><tbody>";

    foreach ($records as $record) {
        echo "<tr><td>" . $record['first_name'] . "</td><td>" . $record['last_name'] . "</td><td>" . $record['email'] . "<td><a href='delete.php?id=" . $record['user_id'] . "'> Delete </a></td><td><a href='index.php?id=" . $record['user_id'] . "'>Edit </a></td></tr>";
        }
     echo "</tbody></table>";

     $statement->closeCursor();
    }
    catch(PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p> $error message </p>";
    }
    ?>
    </main>
    <?php require_once('footer.php'); ?>
