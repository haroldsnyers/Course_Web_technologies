<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h2>Encoder les données de la pièce</h2>
            <form method="post">
                    <div class="form-group">
                        <label>Pièce : </label>
                        <input type="text" class="form-control-plaintext" name="piece" 
                        placeholder="ex. Chambre" required>
                    </div>
                    <div class="form-group">
                        <label>Largeur : </label>
                        <input type="number" class="selectpicker form-control form-control-sm" 
                        name="SelectedLa" placeholder="0" required min=1>
                    </div>
                    <div class="form-group">
                        <label>Longueur : </label>
                        <input type="number" class="selectpicker form-control form-control-sm" 
                        name="SelectedLo" placeholder="0" required min=1>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="add" value="add" 
                        class="btn btn-primary mb 2">Enregister</button>
                    </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
