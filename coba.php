<?php include './php/DataTables.php'; ?>
<link href="assets/css/jquery.dataTables.min.css"/>
<link href="assets/css/buttons.dataTablees.min.css"/>
<link href="assets/css/select.dataTables.min.css"/>
<link href="assets/css/editor.dataTables.min.css"/>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th></th>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th width="18%">Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
</table>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/jquery-1.12.3.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/dataTables.editor.min.js"></script>
<script src="assets/js/dataTables.select.min.js"></script>
<script type="text/javascript">
    var editor; // use a global for the submit and return data rendering in the examples

    $(document).ready(function () {
        editor = new $.fn.dataTable.Editor({
            ajax: "tes.php",
            table: "#example",
            fields: [{
                    label: "First name:",
                    name: "first_name"
                }, {
                    label: "Last name:",
                    name: "last_name"
                }, {
                    label: "Position:",
                    name: "position"
                }, {
                    label: "Office:",
                    name: "office"
                }, {
                    label: "Extension:",
                    name: "extn"
                }, {
                    label: "Start date:",
                    name: "start_date",
                    type: "datetime"
                }, {
                    label: "Salary:",
                    name: "salary"
                }
            ]
        });

        // Activate an inline edit on click of a table cell
        $('#example').on('click', 'tbody td:not(:first-child)', function (e) {
            editor.inline(this);
        });

        $('#example').DataTable({
            dom: "Bfrtip",
            ajax: "test.php",
            columns: [
                {
                    data: null,
                    defaultContent: '',
                    className: 'select-checkbox',
                    orderable: false
                },
                {data: "first_name"},
                {data: "last_name"},
                {data: "position"},
                {data: "office"},
                {data: "start_date"},
                {data: "salary", render: $.fn.dataTable.render.number(',', '.', 0, '$')}
            ],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            buttons: [
                {extend: "create", editor: editor},
                {extend: "edit", editor: editor},
                {extend: "remove", editor: editor}
            ]
        });
    });
</script>