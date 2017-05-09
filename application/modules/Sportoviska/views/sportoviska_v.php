<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/addBook" class ="btn btn-primary pull right">Add Book</a></div>
</div>
<div class="row" >
    <div class="col-md-12">
        <table class ="table table-stripped table-bordered">
            <thead>
            <th>#</th>
            <th>Book Name</th>
            <th>ISBN Number</th>
            <th>Year of Publication</th>
            <th>Status</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php if($sportoviska_table !==""){
                echo $sportoviska_table;
            }else{
                ?>

                <tr>

                    <td colspan="6" style="text-align: center;">Nie su pridane sportoviska</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>