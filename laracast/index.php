<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>
<body>
  <h1> Recommended Books </h1>

  <?php
    $books = [
      'The Pragmatic Programmer',
      'Clean Code',
      'Design Patterns: Elements of Reusable Object-Oriented Software',
      'Refactoring: Improving the Design of Existing Code',
      'Code Complete'
    ];
  ?>
  
  <ul>
    <?php foreach ($books as $book) :?>
      <li> <?= $book?> </li>
    <?php endforeach?>
  </ul>
</body>
</html>