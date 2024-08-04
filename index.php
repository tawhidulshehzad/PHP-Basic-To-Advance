<!DOCTYPE html>
<html lang="en">

<head>

  <title>first</title>
  <style>
    body {

      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
      background-color: black;
    }

    h1 {

      color: white;
    }
  </style>
</head>

<body>
  <?php
$name = "Dark Matter";
$isRead = false;
if ( $isRead ) {
    $message = "You have read {$name}";
} else {
    $message = "You have not read {$name}";
}
?>
  <h1>
    <!-- <?php echo $message; ?> -->
    <?=$message?>
  </h1>
</body>

</html>