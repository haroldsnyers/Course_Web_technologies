<?php
    Session_start(); // On démarre la session AVANT toute chose 
    function total($liste){
        $total = 0;
        $list_price = array (
            'PHP' => 250,
            'XML' => 350,
            'JAVA' => 450,
            'C++' => 550
        );
        for ($i=0; $i < count($liste); $i++){
            $elem = $liste[$i];
            $total += $list_price[$elem];
        }
        return $total;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- my CSS file -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <div class="container">
    <!-- Content here -->
        <h3>Récapitulatif</h3>
        <p>Nom : <?php echo $_SESSION['LastName'];?></p>
        <p>Prénom : <?php echo $_SESSION['FirstName']; ?></p>
        <list>
            <p>Vous avez choisi les formations: </p>
            <lu>
                <?php
                for ($i=0; $i<count($_SESSION['checked']); $i++) {
                    echo "<li>".$_SESSION['checked'][$i]."</li>";
            }
            ?>
            </lu>
        </list>
    
        <p>Pour un total de <?php echo total($_SESSION['checked']); ?>$</p>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>