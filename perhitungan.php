<div class="page-header">
    <h1>
        Perhitungan
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            overview &amp; stats
        </small>
    </h1>
</div><!-- /.page-header -->
<style>
.modal-body {
    max-height: calc(110vh - 210px);
    overflow: auto;
}
</style>
<div class="row">
    <div class="col-xs-12">
        <p><a class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      
        <table id="example" class="table table-striped table-bordered">
            <thead>
            <th>No.</th>
            <th>Skala</th>
            <th>Skala</th>
            <th>Action</th>
            </thead>
            <?php
            //menampilkan data mysqli
            $no = 0;
            $qSubtest = mysql_query("SELECT su.id, su.nama subname, sk.nama skama FROM subtest su inner join skala sk on su.id_skala = sk.id");
            while ($dataSkala = mysql_fetch_array($qSubtest)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $dataSkala['subname']; ?></td>
                    <td><?php echo $dataSkala['skama']; ?></td>
                    <td>
                        <a href="#" class='btn btn-xs btn-info open_modal' id='<?php echo $dataSkala['id']; ?>'><i class="ace-icon fa fa-pencil bigger-120"></i></a> 
                        <a href="#" class='btn btn-xs btn-danger'onclick="confirm_modal('skalaDel.php?&skala_id=<?php echo $dataSkala['id']; ?>');"><i class="ace-icon fa fa-trash bigger-120"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <!-- Modal Popup untuk Add--> 
        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Subteste</h4>
                    </div>

                    <div class="modal-body">
                        <form action="act/perhitunganAdd.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                            <div class="form-group" style="padding-bottom: 25px;">
                                <label class="col-sm-2 control-label">Nama:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="nama_testee" id="testee">
                                        <option value="pilih">Pilih</option>
                                        <?php
                                        $qSkala = mysql_query("SELECT * FROM testee");
                                        while ($dSkla = mysql_fetch_array($qSkala)) {
                                            ?>
                                            <option value="<?php echo $dSkla['id'] ?>"><?php echo $dSkla['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" style="padding-bottom: 20px;" id="hitung">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <th></th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                    <th>D</th>
                                    <th>E</th>
                                    <th>F</th>
                                    <th>G</th>
                                    <th>Jumlah</th>
                                    <th>Rata-Rata</th>
                                    </thead>
                                    <?php
                                    $qaspek = mysql_query("select * from aspek");
                                    while ($daspek = mysql_fetch_array($qaspek)) {
                                        ?>
                                        <tr>
                                            <td style="width: 10px;"><?php echo $daspek['nama_aspek'] ?></td>                                            
                                            <td style="width: 50px;"><select class="col-sm-10" name="nama_testee" id="testee">
                                                    <?php
                                                    $qSubTestee = mysql_query("SELECT * FROM subtestee_testee");
                                                    while ($dSubTestee = mysql_fetch_array($qSubTestee)) {
                                                        ?>
                                                        <option value="<?php echo $dSubTestee['id'] ?>"><?php echo $dSubTestee['nama'] ?></option>
                                                    <?php } ?></select></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                            <td><input type="text" class="col-sm-10"></td>
                                        </tr>

                                    <?php } ?>
                                </table>
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
        </div>

        <!-- Modal Popup untuk Edit--> 
        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        </div>

        <!-- Modal Popup untuk delete--> 
        <div class="modal fade" id="modal_delete">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                    </div>

                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>


            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->

    <script src="assets/js/jquery.1.11.1.min.js"></script>
    <!-- Javascript untuk popup modal Edit--> 
                        <script type="text/javascript">
                        $(document).ready(function () {
                        $(".open_modal").click(function (e) {
                                var m = $(this).attr("id");
                                $.ajax({
                                        url: "modSubtestEdit.php",
                                        type: "GET",
                                        data: {modal_id: m},
                                        success: function (ajaxData) {
                                                $("#ModalEdit").html(ajaxData);
                                        $("#ModalEdit").modal('show', {backdrop: 'true'});
                                        }
                                });
                        });
//                            $('#testee').on('change', function () {
//                                var val = $(this).val();
//                                $.ajax({
//                                    url: "helper.php",
//                                    data: "getValStd=" + val,
//                                    dataType: 'json',
//                                    cache: false,
//                                    type: 'GET',
//                                    success: function (data) {
//                                        $("#kondisi").val(data.kondisi);
//                                        $("#sat").val(data.satuan);
//                                        $("#jml").val(data.jumlah);
//                                        $("#keterangan").val(data.keterangan);
//                                        $('#asal_proyek').val(data.asal_proyek);
//                                        $("#lokasi_simpan").val(data.lokasi_simpan);
//                                    }
//                                });
//                            });
                        });

//    <!-- Javascript untuk popup modal Delete--> 
                        function confirm_modal(delete_url)
                        {
                            $('#modal_delete').modal('show', {backdrop: 'static'});
                            document.getElementById('delete_link').setAttribute('href', delete_url);
                        }

                        $(function () {
                            $('#hitung').hide();
                            $('#testee').change(function () {
                                $('#hitung').hide();
//                                                    $('#hitung')[ ($("option[value='pilih']").is(":checked")) ? "show" : "hide" ]();
                                if (this.options[this.selectedIndex].value !== 'pilih') {
                                    $('#hitung').show();
                                }
                            });
                        });


    </script>