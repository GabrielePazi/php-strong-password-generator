<?php

$passwordLength = $_GET['passwordLength'] ?? '';

include "./functions.php"

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
        <h1>Password Generator</h1>

        <form action="index.php" method="get">
          <div class="form-floating mb-3 w-25">
            <input class="form-control" id="floatingInput" placeholder="Es. 10" name="passwordLength">
            <label for="floatingInput">Lunghezza Password</label>
          </div>

          <button class="btn btn-primary" type="submit">Generate</button>
        </form>

        <div class="my-3">La tua Password è: <span class="fw-bold"><?php echo generatePassword($passwordLength); ?></span></div>
      </div>
    </div>
  </div>

</body>

</html>