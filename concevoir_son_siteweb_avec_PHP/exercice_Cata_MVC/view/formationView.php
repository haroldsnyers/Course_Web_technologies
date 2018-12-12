<?php
if(!empty($formArr)){
    $Course = $formArr;
}
?>

<!-- FORMATION FORM BEGINS HERE -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <?php
                $filepath= $Course['Image'];
                echo '<img src="'.$filepath.'" class="imageView">'
                ?>
                <div class="caption">
                    <blockquote>
                        <p><?php echo $Course['Caption']?></p>
                        <footer class="blockquote-footer">
                            <?php echo $Course['Writer']?>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <div>
                    <h1><?php echo ($Course['Title'])?></h1>
                    <div class="formationDisplay">
                        <h2>Goal:</h2><?php echo ($Course['Obj'])?>
                    </div>
                    <div class="formationDisplay">
                        <h2>Cost:</h2><?php echo($Course['Price'])?> €
                    </div>
                    <div class="formationDisplay">
                        <h2>Date:</h2><?php echo ($Course['Time'])?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <form method="post" class="buybutton">
                <input type="submit" class="btn btn-primary btn-block" value="Buy" 
                name="add">
            </form>
        </div>
    </div>
</div>