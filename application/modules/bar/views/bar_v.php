<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/pridajBar" class ="btn btn-primary pull right">Pridaj Bar</a></div>
</div>
<div class="row" >
    <div class="col-md-12">
        <table class ="table table-stripped table-bordered">
            <thead>
            <th>#</th>
            <th>Nazov Barov</th>
            <th>Lokacia</th>
            <th>Popis</th>
            </thead>
            <tbody>
            <?php if($tabulka_barov !==""){
                echo $tabulka_barov;
            }else{
                ?>

                <tr>

                    <td colspan="6" style="text-align: center;">Nie su pridane bari</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>