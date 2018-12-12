<!--HTML-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- my CSS file -->
    <link rel="stylesheet" href="public/css/style.css">

    <!--
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->

</head>

<body>

    <!-- TITLE STORE -->

    <div class="jumbotron">
        <div class="container text-center">
            <h1>Online Store</h1>
            <p>Change is the end result of all true learning.</p>
        </div>
    </div>

    <!-- MENU AND NAVBAR -->

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="dropdow" 
                data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand"></span>
            </div>
            <ul class="nav navbar-nav">
                <li>
                    <form class="navform navbar-form navbar-left" method="post">
                        <div class="form-group">
                            <?php 
                            if($current == 'home'){
                                echo '<input type="submit" class="navbutton active btn"
                                  value="Catalog">';
                            } else{
                                echo '<input type="submit" class="navbutton btn"
                                  value="Catalog">';
                            }
                            ?>
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navform navbar-form navbar-left" method="post">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php 
                            if($current == 'account'){
                                echo '<input type="submit" class="navbutton active btn"
                                    name="Pers_account" value="Personnal account">';
                            } else {
                                echo '<input type="submit" class="navbutton btn"
                                    name="Pers_account" value="Personnal account">';
                            }
                            ?>
                        </div>
                    </form>
                </li>
                <li>
                    <form class="navform navbar-form navbar-left" method="post">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <?php 
                            if($current == 'cart'){
                                echo '<input type="submit" class="navbutton active btn"
                                    name="Cart" value="Cart">';
                            } else {
                                echo '<input type="submit" class="navbutton btn"
                                    name="Cart" value="Cart">';
                            }
                            ?>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </nav>