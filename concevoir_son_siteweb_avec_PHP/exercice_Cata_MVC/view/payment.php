<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <div class="row display-tr">
                        <h3 class="panel-title display-td">Payment Details</h3>
                        <div class="display-td">
                            <img class="img-responsive pull-right" 
                            src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" 
                    action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" 
                                        name="cardNumber" placeholder="Valid Card Number" 
                                        autocomplete="cc-number" required autofocus />
                                        <span class="input-group-addon">
                                            <i class="fa fa-credit-card"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry">
                                        <span class="hidden-xs">EXPIRATION</span>
                                        <span class="visible-xs-inline">EXP</span>DATE
                                    </label>
                                    <input type="tel" class="form-control" 
                                    name="cardExpiry" placeholder="MM / YY" 
                                    autocomplete="cc-exp" required />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input type="tel" class="form-control" name="cardCVC" 
                                    placeholder="CVC" autocomplete="cc-csc" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" 
                                    name="couponCode" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" 
                                type="button">Pay</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->
        </div>
        <div class="col-sm-4">
            <?php
            $cart = unserialize($_SESSION['Cart']);
            if (!empty($cart)){
                $amount = $cart->Count;
            }
            ?>
            <div>
                <h3>Total :<?php echo ($amount) ?> €</h3>
            </div>
        </div>
    </div>
</div>
