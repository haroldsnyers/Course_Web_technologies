<?php 
session_start(); // On démarre la session AVANT toute chose 
if(isset($_POST['page_suivante'])){
    if(isset($_POST['Name'])){
        $_SESSION['LastName'] = $_POST['Name'];
    }
    if(isset($_POST['Prenom'])) {
        $_SESSION['FirstName'] = $_POST['Prenom'];
    }
    header('Location: formation.php');
}
if(isset($_POST['Cancel'])){
    header('Location: index.php');
    session_destroy();
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donnée personnel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- my CSS file -->
    <link rel="stylesheet" href="../css/style.css" /> 
</head>
<body>
    <div class="container">
        <h2>Données Personnelles</h2>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Nom:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Name" placeholder="Enter Lastname" name="Name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Prenom:</label>
                <div class="col-sm-10">          
                    <input type="text" class="form-control" id="Prenom" placeholder="Enter Firstname" name="Prenom" required>
                </div>
            </div>

            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="page_suivante">Page suivante</button>
                    <button type="submit" class="PP1 btn btn-default" name="Cancel">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>