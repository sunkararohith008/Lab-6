<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COMP1006 - Lab 5 - Summer 2020 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&family=Quicksand&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <header>
      <h1> COMP1006 - Lab Five</h1>
    </header>
    <main>
      <form action="process.php" method="post">
        <label for="fname"> Your First Name  </label>
        <input type="text" name="fname" class="form-control" id="fname">
        <label for="lname"> Your Last Name  </label>
        <input type="text" name="lname" class="form-control" id="lname">
        <label for="email"> Your Email </label>
        <input type="email" name="email" class="form-control" id="email">
        <input type="submit" name="submit" value="Send & Share" class="btn">
      </form>
    </main>
    <footer>
      <p> &copy; 2020 COMP1006 - Lab Five </p>
    </footer>
   </div><!--end container-->
  </body>
</html>
