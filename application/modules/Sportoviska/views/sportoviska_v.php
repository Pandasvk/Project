<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/pridajSportovisko" class ="btn btn-primary pull right">Pridaj sportoviskok</a></div>
</div>
<div class="row" >
    <div class="col-md-12">
        <table class ="table table-stripped table-bordered">
            <thead>
            <th>#</th>
            <th>Nazov sportoviska</th>
            <th>Popis</th>
            </thead>
            <tbody>
            <?php if($tabulka_sportovisk !==""){
                echo $tabulka_sportovisk;
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