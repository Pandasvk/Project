<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>kalendar/post_delete_kalendar" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Datums:</label>
                        <?php echo $datums ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Sportovisko :</label>
                        <?php echo $Sportoviska_idSportoviska ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Pouzivatel :</label>
                        <?php echo $Pouzivatelia_idPouzivatelia ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Zaplatene :</label>
                        <?php echo $zaplatene ?>
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Delete sportovisko</button>
                </div>
            </div>
        </form>
    </div>
</div>