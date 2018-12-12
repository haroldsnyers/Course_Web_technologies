<!-- CATALOG -->
<?php
$catalog = unserialize($_SESSION['Period']);
if (!empty($catalog)){
  $instances = $catalog->ListFormation;
}
// --- sets color for the column ---
for($i=0;$i < count($instances); $i++){
    $elem = $instances[$i];
    $elemArr = (array) $elem;
    if (($i%6==0)|($i==0)){
        $class = "panel panel-primary";
    } else if ($i%6==1){
        $class = "panel panel-danger";
    } else if ($i%6==2){
        $class = "panel panel-success";
    } else if ($i%6==3){
        $class = "panel panel-default";
    } else if ($i%6==4){
        $class = "panel panel-warning";
    } else if ($i%6==5){
        $class = "panel panel-info";
    }

    // --- First column of the row ---
    if (($i==0)|($i%3==0)) {
        // last product of catalog
        if ($i == count($instances) - 1){
        ?>
        <!--CATALOG FORM BEGINS HERE-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" 
                                value="<?php echo $elemArr['Id']?>">
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'"
                                class="img-responsive" style="width:100%" alt="Image">'
                                ?>
                                </button>
                            </form>
                        </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
            </div>
        </div>
        <?php   
        // not last product of catalog
        } else {
        ?>
        <!--CATALOG FORM BEGINS HERE-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" 
                                value="<?php echo $elemArr['Id']?>">
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'"
                                class="img-responsive" style="width:100%" alt="Image">'
                                ?>
                                </button>
                            </form>
                        </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
        <?php
        }
    }
    // --- Last column of the row ---
    else if ($i%3==2){
        ?>
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" 
                                value="<?php echo $elemArr['Id']?>">
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'"
                                class="img-responsive" style="width:100%" alt="Image">'
                                ?>
                                </button>
                            </form>
                        </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    // --- Middle column of the row ---
    else {
        // last product of catalog
        if ($i == count($instances) - 1){
        ?>
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" 
                                value="<?php echo $elemArr['Id']?>">
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'"
                                class="img-responsive" style="width:100%" alt="Image">'
                                ?>
                                </button>
                            </form>
                        </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // not last product of catalog
        } else {
        ?>
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" 
                                value="<?php echo $elemArr['Id']?>">
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'"
                                class="img-responsive" style="width:100%" alt="Image">'
                                ?>
                                </button>
                            </form>
                        </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
        <?php
        }
    }
}
