<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modify Sentence</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php include '../includes/navigation-bar.php'; ?>
  <?php include '../includes/developer-info.php'; ?>
  <div class="container my-5">
    <h1 class="mb-4">Modify Sentence</h1>
    <form action="" method="post" class="mb-4">
      <div class="mb-3">
        <label for="sentence" class="form-label">Enter a sentence:</label>
        <input 
          type="text" 
          class="form-control" 
          id="sentence" 
          name="sentence" 
          placeholder="Type your sentence here" required
        >
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    <p>
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $sentence = $_POST['sentence'];
          $length = strlen($sentence);

          for ($i = 0; $i < $length; $i++) {
            switch ($sentence[$i]) {
              case "A":
              case "B":
              case "C":
              case "D":
              case "E":
              case "F":
                $sentence[$i] = strtolower($sentence[$i]);
                break;
            }
          }
          echo "Modified sentence: <strong>'$sentence'</strong>";
        }
      ?>
    </p>
  </div>
</body>
</html>
