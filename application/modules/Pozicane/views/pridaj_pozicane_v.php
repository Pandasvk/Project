<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>pozicane/post_pozicane" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Pouzivatelia</label>
                        <input type="text" name ="Pouzivatelia_idPouzivatelia" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Nazov</label>
                        <input type="text" name ="Nazov" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>cenahod</label>
                        <input type="text" name ="cenahod" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>kspozic</label>
                        <input type="text" name ="kspozic" class ="form-control">
                    </div>
                </div>


                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>