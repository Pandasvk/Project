<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>pozicane/post_delete_pozicane" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Pouzivatelia_idPouzivatelia :</label>
                        <?php echo $Pouzivatelia_idPouzivatelia ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Nazov :</label>
                        <?php echo $Nazov ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Zaplatene :</label>
                        <?php echo $zaplatene ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>kspozic :</label>
                        <?php echo $kspozic ?>
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Delete sportovisko</button>
                </div>
            </div>
        </form>
    </div>
</div>