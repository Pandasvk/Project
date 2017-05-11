<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>pouzivatelia/post_edit_pouzivatela" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">

                        <input type="hidden"  name ="ID" value="<?php echo $id ?>"class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Meno</label>
                        <input type="text" name ="meno" value="<?php echo $meno ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>priezvisko</label>
                        <input type="text" name ="priezvisko" value="<?php echo $priezvisko ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>firma</label>
                        <input type="text" name ="firma" value="<?php echo $firma ?>" class ="form-control">
                    </div>
                </div><div class ="col-md-12">
                    <div class ="form-group">
                        <label>adresa</label>
                        <input type="text" name ="adresa" value="<?php echo $adresa ?>" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Telefon</label>
                        <input type="text" name ="telefon" value="<?php echo $telefon ?>" class ="form-control">
                    </div>
                </div>



                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>