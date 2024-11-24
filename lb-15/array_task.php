<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Working with Array</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-4">
    <div class="card shadow-lg p-4">
      <h2 class="text-center mb-4">Array Calculations and Results</h2>
      
      <?php
        $B = [5, 4, 7, 6, -3, -2, -5, 0, 9, -5];

        // Step 1: Calculate the sum of squares of positive elements in array B
        $sumOfSquares = 0;
        $positiveCount = 0;
        $negativeCount = 0;
        foreach ($B as $element) {
          if ($element > 0) {
            $sumOfSquares += $element * $element;
            $positiveCount++;
          } elseif ($element < 0) {
            $negativeCount++;
          }
        }

        // Step 2: Output the count of positive and negative elements
        echo "<div class='alert alert-info'>";
        echo "<strong>Number of positive elements:</strong> $positiveCount<br>";
        echo "<strong>Number of negative elements:</strong> $negativeCount";
        echo "</div>";

        // Step 3: Condition for division
        if ($sumOfSquares > 20 && $sumOfSquares < 40) {
          // If sum of squares is between 20 and 40, divide elements by the number of negative elements
          foreach ($B as &$element) {
            if ($negativeCount > 0) {
              $element /= $negativeCount;
            }
          }
        } else {
          // Otherwise, divide elements by the number of positive elements
          foreach ($B as &$element) {
            if ($positiveCount > 0) {
              $element /= $positiveCount;
            }
          }
        }

        // Step 4: Calculate the product of the first 6 elements
        $productOfFirstSix = 1;
        for ($i = 0; $i < 6; $i++) {
          $productOfFirstSix *= $B[$i];
        }

        // Step 5: Count the number of elements greater than 10 and less than 25
        $countInRange = 0;
        foreach ($B as $element) {
          if ($element > 10 && $element < 25) {
            $countInRange++;
          }
        }

        // Output the results
        echo "<div class='alert alert-success'>";
        echo "<strong>Sum of squares of positive elements:</strong> $sumOfSquares<br>";
        echo "<strong>Product of the first 6 elements:</strong> $productOfFirstSix<br>";
        echo "<strong>Number of elements greater than 10 and less than 25:</strong> $countInRange";
        echo "</div>";
        // Output the modified array B
        echo "<div class='alert alert-warning'>";
        echo "<strong>Modified array B:</strong><br>";
        echo "<pre>";
        print_r($B);
        echo "</pre>";
        echo "</div>";
      ?>

    </div>
  </div>

</body>
</html>
