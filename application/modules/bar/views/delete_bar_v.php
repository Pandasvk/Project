<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>bar/post_delete_bar" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Nazov :</label>
                        <?php echo $nazov ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Lokacia :</label>
                        <?php echo $lokacia ?>
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Popis :</label>
                        <?php echo $popis ?>
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Delete bar</button>
                </div>
            </div>
        </form>
    </div>
</div>