<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/pridajPozicane" class ="btn btn-primary pull right">Pridaj sportoviskok</a></div>
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
            <?php if($tabulka_Pozicanych !==""){
                echo $tabulka_Pozicanych;
            }else{
                ?>

                <tr>

                    <td colspan="6" style="text-align: center;">Nie su pridane pozicane</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>