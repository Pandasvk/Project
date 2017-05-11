<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>kalendar/post_edit_kalendar" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">

                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Datums</label>
                        <input type="text" name ="datums" value="<?php echo $datums ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Sportovisko</label>
                        <input type="text" name ="Sportoviska_idSportoviska" value="<?php echo $Sportoviska_idSportoviska ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Pouzivatel</label>
                        <input type="text" name ="Pouzivatelia_idPouzivatelia" value="<?php echo $Pouzivatelia_idPouzivatelia ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Cenahod</label>
                        <input type="text" name ="cenahod" value="<?php echo $cenahod ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>hodin</label>
                        <input type="text" name ="hodin" value="<?php echo $hodin ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Zlava</label>
                        <input type="text" name ="zlava" value="<?php echo $zlava ?>" class ="form-control">
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>