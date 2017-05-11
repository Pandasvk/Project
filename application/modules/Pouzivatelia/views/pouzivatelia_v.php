<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/pridajPouzivatela" class ="btn btn-primary pull right">Pridaj sportoviskok</a></div>
</div>
<div class="row" >
    <div class="col-md-12">
        <table class ="table table-stripped table-bordered">
            <thead>
            <th>#</th>
            <th>meno</th>
            <th>priezvisko</th>
            <th>firma</th>
            <th>adresa</th>
            <th>telefon</th>
            </thead>
            <tbody>
            <?php if($tabulka_Pouzivatelov !==""){
                echo $tabulka_Pouzivatelov;
            }else{
                ?>

                <tr>

                    <td colspan="6" style="text-align: center;">Nie su pridane pouzivatelia</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>