<!--
Author : Aguzrybudy
Created : Selasa, 19-April-2016
Title : Crud Menggunakan Modal Bootsrap
-->
<?php
include "./config.php";
$modal_id = $_GET['modal_id'];
$modal = mysql_query("SELECT * FROM user WHERE id='$modal_id'");
while ($r = mysql_fetch_array($modal)) {
    ?>

    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Menggunakan Modal Boostrap (popup)</h4>
            </div>

            <div class="modal-body">
                <form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Modal Name</label>
                        <input type="hidden" name="modal_id"  class="form-control" value="<?php echo $r['id']; ?>" />
                        <input type="text" name="modal_name"  class="form-control" value="<?php echo $r['username']; ?>"/>
                    </div>


                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Date">Date</label>       
                        <input type="text" name="date"  class="form-control" value="<?php echo $r['date']; ?>" disabled/>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">
                            Confirm
                        </button>

                        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                            Cancel
                        </button>
                    </div>

                </form>

            <?php } ?>

        </div>
    </div>
</div>