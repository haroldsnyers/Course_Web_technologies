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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="public/js/translateJS.js"></script>

</head>

<body>

    <!-- TITLE STORE -->

    <div class="jumbotron">
        <div class="container text-center">
            <h1>Application calcul de surface</h1>
            <p></p>
        </div>
    </div>

    <!-- MENU AND NAVBAR -->

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        <form class="navform navbar-form navbar-left" method="post">
                            <div class="form-group">
                                <?php 
                                if($current == 'home'){
                                    echo '<input type="submit" class="navbutton active btn"
                                      value="Start">';
                                } else{
                                    echo '<input type="submit" class="navbutton btn"
                                      value="Start">';
                                }
                                ?>
                            </div>
                        </form>
                    </li>
                    <li>
                        <form class="navform navbar-form navbar-left" method="post">
                            <div class="form-group">
                                <button type="submit" name="Cancel" value="empty" 
                        class="navbutton btn">Restart Calculation</button>
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
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
        </div>
    </nav>