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
                        <select name ="Sportoviska_idSportoviska"  class ="form-control select2">
                            <?php echo $sportoviska ?>
                        </select>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Pouzivatel</label>
                        <select name ="Pouzivatelia_idPouzivatelia"  class ="form-control select2">
                        <?php echo $pouzivatelia ?>
                        </select>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Zaplatene</label>
                        <input type="text" name ="cenahod" value="<?php echo $zaplatene ?>" class ="form-control">
                    </div>
                </div>



                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>