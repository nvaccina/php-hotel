<?php
/*
Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile. (push )
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella. (altro push)
Bonus:
Aggiungere un form ad inizio pagina che tramite una richiesta POST permetta di filtrare gli hotel che hanno un parcheggio.
*/
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    foreach ($hotels as $hotel) {
      
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <title>PHP HOTELS</title>
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center mb-5">HOTELS</h1>
    <table class="table">
      <thead>
        <tr>
          <?php foreach($hotel as $chiave => $valore){ ?>
            <th class="fs-5" scope="col"><?php echo ucwords($chiave) ?></th>
          <?php } ?>
        </tr>
      </thead>
      <tbody>

          <?php foreach($hotels as $hotel) {?>
            <tr>
              <?php foreach($hotel as $chiave => $valore){ ?>
                <td><?php echo $valore ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      </tbody>
    </table>

  </div>
  
</body>
</html>