<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>pouzivatelia/post_pouzivatela" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Meno</label>
                        <input type="text" name ="meno" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>priezvisko</label>
                        <input type="text" name ="priezvisko" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>firma</label>
                        <input type="text" name ="firma" class ="form-control">
                    </div>
                </div><div class ="col-md-12">
                    <div class ="form-group">
                        <label>adresa</label>
                        <input type="text" name ="adresa" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Telefon</label>
                        <input type="text" name ="telefon" class ="form-control">
                    </div>
                </div>



                <div class ="col-md-12">
                    <button class="btn btn-primary btn-large">Save Details</button>
                </div>
            </div>
        </form>
    </div>
</div>