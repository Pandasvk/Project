<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>pouzivatelia/post_delete_Pouzivatela" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>meno :</label>
                        <?php echo $meno ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>priezvisko :</label>
                        <?php echo $priezvisko ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Firma :</label>
                        <?php echo $firma ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Adresa :</label>
                        <?php echo $adresa ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Tel :</label>
                        <?php echo $telefon ?>
                    </div>
                </div>

                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Delete pouzivatela</button>
                </div>
            </div>
        </form>
    </div>
</div>