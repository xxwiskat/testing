<!-- LATIHAN PHP -->

<?php 
    $title_page= "Latihan Script PHP";
    $konten= "<h3>Latihan Script PHP</h3>";
    $konten .= "<p>Dasar Penulisan PHP:</p>
    <ul>
        <li>penulisan script php bersifat case sensitive</li>
        <li>setiap akhir baris ditandai dengan titk koma</li>
    </ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_page; ?></title>
</head>
<body>
    
    <?=
        $konten;
    ?>
    

</body>
</html>