<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>bar/post_edit_bar" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">

                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Názov sportoviska</label>
                        <input type="text" name ="Nazov" value="<?php echo $nazov ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Lokacia baru</label>
                        <select name ="Lokacia"  class ="form-control select2">
                            <?php echo $sportoviska ?>
                        </select>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Popis sportoviska</label>
                        <input type="text" name ="Popis" value="<?php echo $popis ?>" class ="form-control">
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>