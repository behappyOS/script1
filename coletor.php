<?php


$mysqli = new mysqli("url", "user", "pass", "database");
mysqli_set_charset($mysqli, 'utf8');
set_time_limit(0);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//$le = 'coletor.csv';

$meuArray = Array();
$file = fopen('coletor.csv', 'r');
while (($line = fgetcsv($file)) !== false)
{
  $meuArray[] = $line;
}

    while ($meuArray++) {
        echo 'LOJA: ' . $meuArray['0']['0'] . '<br>';
        echo 'NOME: ' . $meuArray['0']['1'] . '<br>';
        echo 'CPF: ' . $meuArray['0']['2'] . '<br>';
        echo 'EMAIL: ' . $meuArray['0']['3'] . '<br>';
    }


//echo "<pre>";
//var_dump($meuArray);

die();

//$handle = fopen( $le, 'r' );

$ler = fread( $handle, filesize($le) );

$cnpj= explode(',', $ler );

    foreach ($cnpj as $value) {       

            $query = "INSERT INTO pescontatolab
            (`PesPesLabAuto`, `PesContatoLabStatus`, `PesContatoLabRef`, `PesContatoLabNome`, 
                `PesContatoLabCPF`, `PesContatoLabPost`, `PesContatoLabCol`, `PesContatoLabColLib`, `PesContatoLabUsr`, `PesContatoLabAdm`, 
                `PesContatoLabEmail`, `PesContatoLabSenha`, `PesContatoAutoColLib`, `PesContatoLabColLibDtHr`)
                VALUES('3208', 'A', 'F', 'Mariana Rezende', 'Mariana Rezende', '02487216158', 'N', 'S', 'S', 'S', 'N', 
                        'marianarezendeadv@hotmail.com', '3a23f02ef04f856a4ae402406c4e2834', '173', '2020-03-20 09:08:31')";

            $mysqli->query($query);

            echo "Data Imported Sucessfully from JSON!";

            die();
    }

fclose($handle);

?>
