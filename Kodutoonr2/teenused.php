<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kodutöö nr2</title>
</head>
<body>
    <!-- Navi -->
    <style>
      .navbar {
          padding-top: 10px; /* Adjust the top padding */
          padding-bottom: 10px; /* Adjust the bottom padding */
      }
  </style>
  
    <nav class="navbar navbar-expand-lg bg-body-light">
        <div class="container-fluid">
            <img src="ikoon.png" width="40" height="40" alt="">
            <a class="nav-link fs-6 color: text-body-secondary" href="bootstrap.html">Avaleht</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-6 color: text-body-secondary" aria-current="page" href="#">Tooted</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="#">Teenused</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-6 color: text-body-secondary" href="#">Kontakt</a>
              </li>
    
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Otsi" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Otsi</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container mt-5">
        <br>
        <h2 class="mb-4">Täidame sinu peolaua!</h2>
 <?php
        // Kalkulaatori loogika
        $error_message = '';
        $result = '';

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Kogu sisestatud andmed
            $input_value1 = $_GET['input_value1'];
            $select_option = $_GET['select_option'];

            // Piirangud negatiivse väärtuse jaoks
          
            $input_value1 = max(0, $input_value1);

            // Kontroll, kas väljad on täidetud
            if ($input_value1 !== '') {
                // Kui on valitud "Vali siit", annab veateate
                if ($select_option === 'Vali siit') {
                    $error_message = 'Palun vali pakett!';
                } else {
                  
                    // Kui on valitud pakett
                    if ($select_option == 'Söök') {
                        $result = 12.5 * $input_value1 ;
                    } elseif ($select_option == 'Söök ja jook') {
                      $result = 15 * $input_value1 ;
                    } elseif ($select_option == 'Erimenüü') {
                      $result = 20 * $input_value1 ;
                    } elseif ($select_option == 'Erimenüü ja jook') {
                      $result = 22.5 * $input_value1 ;
                    }
                }
            } 
          }
?>


</body>
</html>