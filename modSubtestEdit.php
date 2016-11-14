<?php
include "./config.php";
$modal_id = $_GET['modal_id'];
$modal = mysql_query("SELECT * FROM subtest WHERE id='$modal_id'");
while ($r = mysql_fetch_array($modal)) {
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Testee</h4>
            </div>

            <div class="modal-body">
                <form action="act/subtestEdit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Skala</label>
                        <?php $qSkala = mysql_query("SELECT * FROM skala"); ?>
                        <select class="form-control" name="skala" id="form-field-select-1">
                            <?php while ($dSkla = mysql_fetch_array($qSkala)) { ?>
                                <option value="<?php echo $dSkla['id'] ?>"><?php echo $dSkla['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Nama</label>
                        <input type="hidden" name="modal_id"  class="form-control" value="<?php echo $r['id']; ?>" />
                        <input type="text" name="nama" class="form-control" placeholder="Kategori" value="<?php echo $r['nama']; ?>"  required/>
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
            </div>
        </div>
    </div>
<?php
} 