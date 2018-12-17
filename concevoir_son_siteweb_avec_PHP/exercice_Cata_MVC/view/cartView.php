<!-- CART FORM BEGINS HERE -->
<div class="container">
    <h2>Shopping Cart</h2>
    <div class="col-md-8">
        <div class="tableCart  table-responsive">
            <?php
            $cart = unserialize($_SESSION['Cart']);
            if (!empty($cart)){
                $products = $cart->CartArray;
                $quantity = $cart->QuantityArray;
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>COURSE</th>
                            <th></th>
                            <th>DATE</th>
                            <th></th>
                            <th>QUANTITY</th>
                            <th>PRICE</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="tbody-cart">

                <?php
                // for each product in the cart -> add a row to the table
                for ($i=0 ; $i < count($products); $i++){
                    $elem = $products[$i];
                    $nbr = $i+1;
                    echo '<tr>';
                    echo '<td>'.$nbr.'</td>';
                    echo '<td>'.($elem['Title']).'<td>';
                    echo '<td>'.($elem['Time']).'<td>';
                    ?>
                    <td>
                        <form method='post' class="formslt">
                            <input type='hidden' name='Selected' 
                            value="<?php echo $elem['Id']?>">
                            <input type="number" class="selectpicker form-control form-control-sm" 
                            list="qty" onchange="this.form.submit()" name="qty" 
                            placeholder="<?php echo $quantity[$elem['Id']]?>">
                            <datalist id='qty'>
                                <option value='1'>
                                <option value='2'>
                                <option value='3'>
                                <option value='4'>
                                <option value='5'>
                                <option value='6'>
                                <option value='7'>
                                <option value='8'>
                                <option value='9'>
                                <option value='10'>
                            </datalist>
                        </form><br>
                        <div><b>SUB-TOTAL</b></div>
                    </td>
                    <?php
                    echo '<td>'.($elem['Price']).' € <br><br><div class="subtotal">'
                    .$elem['Price'] * $quantity[$elem['Id']]. '€</div><td>';
                    echo '</td>';
                    ?>
                    <td>
                        <form class="" method="post">
                            <button type="submit" class="close" aria-label="Close" 
                            name="del" value="<?php echo $elem['Id']?>">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </form>
                    </td>
                    <?php
                }
            }
            ?>
                    </tbody>
                </table>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <h3>Total :<?php echo ($amount) ?> €</h3>
        </div>
        <div>
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="PP1 btn btn-default" name="Cancel" 
                        value="empty">Empty Cart</button>
                        <button type="submit" class="btn btn-primary" 
                        name="page_suivante">Confirm Cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>