<div class = "row">
    <div class ="col-md-12"><a href="<?php echo base_url(); ?>Admin/pridajKalendar" class ="btn btn-primary pull right">Pridaj Kalendar</a></div>
</div>
<div class="row" >
    <div class="col-md-12">
        <table class ="table table-stripped table-bordered">
            <thead>
            <th>#</th>
            <th>Dattum</th>
            <th>Sportovisko</th>
            <th>pouzivatel</th>
            <th>zaplatene</th>
            </thead>
            <tbody>
            <?php if($tabulka_Kalendarov !==""){
                echo $tabulka_Kalendarov;
            }else{
                ?>

                <tr>

                    <td colspan="6" style="text-align: center;">Nie su pridane Kalendare</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>

