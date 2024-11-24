<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php include '../includes/navigation-bar.php'; ?>
  <?php include '../includes/developer-info.php'; ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm">
        <h2>Task:</h2>
      </div>
      <div class="col-sm">
        <div class="d-flex align-items-center">
          <img src="../static/images/task-lb-17.png" alt="tasks for the laboratory work to do 17">
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <h1 class="mb-4">Check GUID string</h1>
    <form action="" method="post" class="mb-4">
      <div class="mb-3">
        <label for="string" class="form-label">Enter a string:</label>
        <input 
          type="text" 
          class="form-control" 
          id="string" 
          name="string" 
          placeholder="Type your string here" 
          required
        >
      </div>
      <div class="d-flex justify-content-end">
        <input type="reset" class="btn btn-secondary btn-lb me-3" value="Reset">
        <input type="submit" class="btn btn-primary btn-lg" value="Check">
      </div>
    </form>
  </div>
  <div class="container mt-5">
    <h1 class="mb-4">Result:</h1>
    <p class="mb-4">
      <?php
        function isValidGUID($string) {
          return preg_match(
            "/^\{?[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}\}?$/",
             $string
            );
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $guid_string = htmlspecialchars(trim($_POST["string"]));
          
          if (isValidGUID($guid_string)) {
              echo "<div class='alert alert-success'>STRING: $guid_string is a valid GUID</div>";
          } else {
              echo "<div class='alert alert-danger'>STRING: <strong>$guid_string</strong> is not a valid GUID</div>";
          }
      }
      ?>
    </p>
  </div>
</body>
</html>