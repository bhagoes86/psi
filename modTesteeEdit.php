<?php
include "./config.php";
$modal_id = $_GET['modal_id'];
$modal = mysql_query("SELECT * FROM testee WHERE id='$modal_id'");
while ($r = mysql_fetch_array($modal)) {
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Testee</h4>
            </div>

            <div class="modal-body">
                <form action="act/testeeEdit.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Nama</label>
                        <input type="hidden" name="modal_id"  class="form-control" value="<?php echo $r['id']; ?>" />
                        <input type="text" name="nama"  class="form-control" placeholder="Nama" value="<?php echo $r['nama']; ?>"  required/>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"  class="form-control" placeholder="Tanggal Lahir" value="<?php echo $r['tanggal_lahir']; ?>"  required/>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Pendidikan</label>
                        <input type="text" name="pendidikan"  class="form-control" placeholder="Pendidikan" value="<?php echo $r['pendidikan']; ?>"  required/>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Pekerjaan</label>
                        <input type="text" name="pekerjaan"  class="form-control" placeholder="Pekerjaan" value="<?php echo $r['pekerjaan']; ?>"  required/>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Modal Name">Telp.</label>
                        <input type="text" name="telp"  class="form-control" placeholder="Telepon" value="<?php echo $r['telp']; ?>"  required/>
                    </div>

                    <div class="form-group" style="padding-bottom: 20px;">
                        <label for="Description">Alamat</label>
                        <textarea name="alamat" class="form-control" required=""><?php echo $r['alamat']; ?></textarea>
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