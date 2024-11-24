<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Working with Matrix</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h1 class="text-center mb-4">Matrix Operations</h1>

    <?php
      // Matrix C
      $C = [
        [11.3, -7.2, 4.1],
        [-8.4, -3.2, 1.7],
        [8.3, 18.4, 13.7]
      ];

      // Step 1: Find the maximum positive element and its coordinates
      $maxElement = null;
      $maxCoords = [];

      foreach ($C as $i => $row) {
        foreach ($row as $j => $element) {
          if ($element > 0 && ($maxElement === null || $element > $maxElement)) {
            $maxElement = $element;
            $maxCoords = [$i, $j];
          }
        }
      }

      echo "<div class='alert alert-info'>Maximum positive element: <strong>$maxElement</strong> at coordinates: (" . implode(", ", $maxCoords) . ")</div>";

      // Step 2: Calculate the new matrix with deviations
      $newMatrix = [];
      foreach ($C as $i => $row) {
        foreach ($row as $j => $element) {
          $newMatrix[$i][$j] = $element - $maxElement;
        }
      }

      // Step 3: Count negative elements, find their coordinates and product
      $negativeCount = 0;
      $negativeCoords = [];
      $productOfNegatives = 1;
      foreach ($newMatrix as $i => $row) {
        foreach ($row as $j => $element) {
          if ($element < 0) {
            $negativeCount++;
            $negativeCoords[] = [$i, $j];
            $productOfNegatives *= $element;
          }
        }
      }

      echo "<div class='alert alert-warning'>Number of negative elements in the new matrix: <strong>$negativeCount</strong></div>";
      echo "<div class='alert alert-warning'>Coordinates of negative elements: </div>";
      echo "<ul>";
      foreach ($negativeCoords as $coords) {
        echo "<li>(" . implode(", ", $coords) . ")</li>";
      }
      echo "</ul>";
      echo "<div class='alert alert-danger'>Product of negative elements: <strong>$productOfNegatives</strong></div>";

      // Step 4: Calculate the sum of positive elements and square root of that sum
      $positiveSum = 0;
      foreach ($newMatrix as $i => $row) {
        foreach ($row as $j => $element) {
          if ($element > 0) {
            $positiveSum += $element;
          }
        }
      }

      $squareRoot = sqrt($positiveSum);
      echo "<div class='alert alert-success'>Sum of positive elements in the new matrix: <strong>$positiveSum</strong></div>";
      echo "<div class='alert alert-success'>Square root of this sum: <strong>$squareRoot</strong></div>";
    ?>
  </div>
</body>
</html>
