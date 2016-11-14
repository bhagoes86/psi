<div class="page-header">
    <h1>
        Skala
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <p><a class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      
        <table id="example" class="table table-striped table-bordered">
            <thead>
            <th>No.</th>
            <th>Skala</th>
            <th>Action</th>
            </thead>
            <?php
            //menampilkan data mysqli
            $no = 0;
            $qSkala = mysql_query("SELECT * FROM skala");
            while ($dataSkala = mysql_fetch_array($qSkala)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $dataSkala['nama']; ?></td>
                    <td>
                        <a href="#" class='btn btn-xs btn-info open_modal' id='<?php echo $dataSkala['id']; ?>'><i class="ace-icon fa fa-pencil bigger-120"></i></a> 
                        <a href="#" class='btn btn-xs btn-danger'onclick="confirm_modal('act/skalaDel.php?&skala_id=<?php echo $dataSkala['id']; ?>');"><i class="ace-icon fa fa-trash bigger-120"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <!-- Modal Popup untuk Add--> 
        <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Testee</h4>
                    </div>

                    <div class="modal-body">
                        <form action="act/skalaAdd.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Modal Name">Skala</label>
                                <input type="text" name="skala" class="form-control" placeholder="Skala" required/>
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
                                    url: "modSkalaEdit.php",
                                    type: "GET",
                                    data: {modal_id: m },
                                    success: function (ajaxData) {
                                        $("#ModalEdit").html(ajaxData);
                                        $("#ModalEdit").modal('show', {backdrop: 'true'});
                                    }
                                });
                            });
                        });
</script>

<!-- Javascript untuk popup modal Delete--> 
<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        $('#modal_delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>