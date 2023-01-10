<?php
class Movie {
    public $titolo;
    public $durata;
    public $rating;
    function __construct($titolo, $durata) {
    $this->titolo = $titolo; 
    $this->durata = $durata; 
  }
  function get_titolo() {
    return $this->titolo;
  }
  function get_durata() {
    return $this->durata;
  }

    
}
$avatar = new Movie("Avatar","118");
$avatar->rating = "7";

$elCamino = new Movie("El Camino", "89");
$elCamino->rating = "6";

$rumoreBianco = new Movie("Rumore Bianco", "99");
$rumoreBianco->rating = "4";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <p><?php echo $avatar; ?></p>
    
</body>
</html>