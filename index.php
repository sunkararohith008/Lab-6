<?php require_once('header.php'); ?>
<?php require_once('navigation.php'); ?>
    <h1>Lab 6</h1>
    <h2> COMP1006_SUMMER2020 </h2>
    <?php
    //initialize variables
    $id = null;
    $firstname = null;
    $lastname = null;
    $email = null;

    if(!empty($_GET['id']) && (is_numeric($_GET['id']))) {
      //grab the id from url
      $id = filter_input(INPUT_GET, 'id');
      //connect to the database
      require_once('connect.php');
      //set up our query
      $sql = "SELECT * FROM persons WHERE user_id = :user_id;";
      //prepare our statement
      $statement = $db->prepare($sql);
      //bind
      $statement->bindParam(':user_id', $id);
      //execute
      $statement->execute();
      //use fetchAll to store
      $records = $statement->fetchAll();
      //to loop through, use a foreach loop
      foreach($records as $record) :
      $firstname = $record['first_name'];
      $lastname = $record['last_name'];
      $email = $record['email'];
      endforeach;
      //close the db connection
      $statement->closeCursor();
    }
    ?>
    <main>
      <form action="process.php" method="post">
        <!-- add hidden input with user id if editing -->
        <input type="hidden" name="user_id" value="<?php echo $id;?>">
        <label for="fname"> Your First Name  </label>
        <input type="text" name="fname" class="form-control" id="fname"<?php echo $firstname; ?>">
        <label for="lname"> Your Last Name  </label>
        <input type="text" name="lname" class="form-control" id="lname"<?php echo $lastname; ?>">
        <label for="email"> Your Email </label>
        <input type="email" name="email" class="form-control" id="email"<?php echo $email; ?>">
        <input type="submit" name="submit" value="Send & Share" class="btn">
      </form>
    </main>
   <?php require_once('footer.php'); ?>
