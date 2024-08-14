<!DOCTYPE html>
<html lang="en">

<head>

  <title>Array</title>
  <style>
    body {

      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
      background-color: black;
    }

    h1,
    ul {
      color: white;
    }
  </style>
</head>

<body>
  <h1>Recommended books</h1>

  <?php
  $books = [
    "ami",
    "tumi",
    "Ke tumi"
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) {
      echo "<li> {$book}™</li>";
    } ?>
    <!-- <?php foreach ($books as $book): ?>
      <li><?= $book ?></li>
    <?php endforeach; ?> -->
  </ul>
</body>

</html>