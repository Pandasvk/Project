<div class="row">
    <div class ="col-md-12">
        <form method ="Post" action = "<?php echo base_url(); ?>Sportoviska/post_sportovisko" enctype="multipart/form-data">
            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Názov sportoviska</label>
                        <input type="text" name ="nazov" class ="form-control">
                    </div>
                </div>
                <div class ="col-md-12">
                    <div class ="form-group">
                        <label>Popis sportoviska</label>
                        <input type="text" name ="Popis" class ="form-control">
                    </div>
                </div>


            <div class ="col-md-12">
                <button class="btn btn-primary btn-large">Save Details</button>
            </div>
         </div>
        </form>
    </div>
</div>