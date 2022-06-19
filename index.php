<?php
class Movies {
    public $nome;
    public $regista;
    public $dataUscita;

    function __construct($nome,$regista){
        $this->nome = $nome;
        $this->regista = $regista;
    }

    function set_data_uscita($dataUscita){
        $this-> dataUscita = $dataUscita;
    }
}


$Movie_1 = new Movies("Kill Bill","Quentin Tarantino");
$Movie_1->set_data_uscita(2003);
$Movie_2 = new Movies("interstellar","Christopher Nolan");
$Movie_2->set_data_uscita(2014);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> Nome: <?php echo $Movie_1->nome?></h1>
        <h2> Regista: <?php echo $Movie_1->regista?></h2>
        <h3> Anno Uscita: <?php echo $Movie_1->dataUscita?></h3>
   </div>
   <div>
        <h1> Nome: <?php echo $Movie_2->nome?></h1>
        <h2> Regista: <?php echo $Movie_2->regista?></h2>
        <h3> Anno Uscita: <?php echo $Movie_2->dataUscita?></h3>
   </div>
</body>
</html>