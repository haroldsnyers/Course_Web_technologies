
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
                <div class="panel-heading">
                <form class="navform navbar-form navbar-left" method="post">
                    <div class="form-group">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" onchange="request(display)">
                            <option selected>Choose Language</option>
                            <option value="en">ENGLISH</option>
                            <option value="fr">FRENCH</option>
                            <option value="sp">SPANISH</option>
                        </select>
                    </div>
                </form>
                </div>
            <div class="panel-body"></div>
                
        </div>
        <div class="col-sm-4"></div>
    </div>
    <?php
    $cart = unserialize($_SESSION['Cart']);
    if (!empty($cart)){
        $products = $cart->CartArray;
        $amount = $cart->Count;
    }
    if(empty($cart)|empty($products)){
        ?>
        <div>
            <h2>CART EMPTY</h2>
        </div>
        <?php
    }
    if (!empty($products)){
        ?>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">Surface totale : <?php echo $amount?> m^2</div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <?php
        // for each product in the cart -> add a row to the table
        for ($i=0 ; $i < count($products); $i++){
            $elem = $products[$i];
            ?>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="panel-heading" id="piece" value="<?php echo $elem['piece']?>">Pièce : <span id="pieceTrans"></span></div>
                    <div class="panel-body">
                        <table style="width:100%">
                        <tr>
                            <td>Largeur</td>
                            <td><?php echo $elem['largeur']?></td>
                            
                        </tr>
                        <tr>
                            <td>Longueur</td> 
                            <td><?php echo $elem['longueur']?></td> 
                        </tr>
                        </table>
                    </div>
                    <div class="panel-footer">surface : <?php echo $elem['largeur'] * $elem['largeur']?> m^2</div>    
                </div>
                <div class="col-sm-4"></div>
            </div>
            <?php
        }
    }
    ?>
    
</div>



                        
                    