<div class="page-header">
    <h1>
        Testee
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <p><a class="btn btn-success" data-target="#ModalAdd" data-toggle="modal">Add Data</a></p>      
        <table id="mytable" class="table table-bordered">
            <thead>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
            </thead>
            <?php
            //menampilkan data mysqli
            $no = 0;
            $modal = mysql_query("SELECT * FROM user");
            while ($r = mysql_fetch_array($modal)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['username']; ?></td>
                    <td><?php echo $r['id']; ?></td>
                    <td>
                        <a href="#" class='open_modal' id='<?php echo $r['id']; ?>'>Edit</a>
                        <a href="#" onclick="confirm_modal('proses_delete.php?&modal_id=<?php echo $r['id']; ?>');">Delete</a>
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
                        <h4 class="modal-title" id="myModalLabel">Add Data Using Modal Boostrap (popup)</h4>
                    </div>

                    <div class="modal-body">
                        <form action="proses_save.php" name="modal_popup" enctype="multipart/form-data" method="POST">

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Modal Name">Modal Name</label>
                                <input type="text" name="modal_name"  class="form-control" placeholder="Modal Name" required/>
                            </div>

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Description">Description</label>
                                <textarea name="description"  class="form-control" placeholder="Description" required/></textarea>
                            </div>

                            <div class="form-group" style="padding-bottom: 20px;">
                                <label for="Date">Date</label>
                                <input type="text" name="date"  class="form-control" plcaceholder="Timestamp" disabled value="Timestamp" required/>
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

<script src="assets/js/jquery.min.js"></script>
<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
                            $(document).ready(function () {
                                $(".open_modal").click(function (e) {
                                    var m = $(this).attr("id");
                                    $.ajax({
                                        url: "modal_edit.php",
                                        type: "GET",
                                        data: {modal_id: m, },
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