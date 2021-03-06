<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->
<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
<link rel="stylesheet" href="assets/css/datepicker.min.css" />
<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

<!-- text fonts -->
<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
<!-- ace settings handler -->
<script src="assets/js/ace-extra.min.js"></script>

<div class="page-header">
    <h1>
        Testee
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <table id="grid-table"></table>

        <div id="grid-pager"></div>

        <script type="text/javascript">
            var $path_base = "."; //in Ace demo this will be used for editurl parameter
        </script>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script src="assets/js/jquery.2.1.1.min.js"></script>
<!--[if !IE]> -->
<script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery.min.js'>" + "<" + "/script>");</script>
<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement)
            document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.jqGrid.min.js"></script>
<script src="assets/js/grid.locale-en.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
<?php
$sql = "select * from testee";
$result = mysql_query($sql);

//create an array
$emparray = array();
while ($row = mysql_fetch_assoc($result)) {
    $emparray[] = $row;
}
?>
    var grid_data = <?php echo json_encode($emparray); ?>;
//var subgrid_data =
//    [
//        {id: "1", name: "sub grid item 1", qty: 11},
//        {id: "2", name: "sub grid item 2", qty: 3},
//        {id: "3", name: "sub grid item 3", qty: 12},
//        {id: "4", name: "sub grid item 4", qty: 5},
//        {id: "5", name: "sub grid item 5", qty: 2},
//        {id: "6", name: "sub grid item 6", qty: 9},
//        {id: "7", name: "sub grid item 7", qty: 3},
//        {id: "8", name: "sub grid item 8", qty: 8}
//    ];

    jQuery(function ($) {
    var grid_selector = "#grid-table";
    var pager_selector = "#grid-pager";
//resize to fit page size
    $(window).on('resize.jqGrid', function () {
    $(grid_selector).jqGrid('setGridWidth', $(".page-content").width());
    });
//resize on sidebar collapse/expand
    var parent_column = $(grid_selector).closest('[class*="col-"]');
    $(document).on('settings.ace.jqGrid', function (ev, event_name, collapsed) {
    if (event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed') {
    //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
    setTimeout(function () {
    $(grid_selector).jqGrid('setGridWidth', parent_column.width());
    }, 0);
    }
    });
//if your grid is inside another element, for example a tab pane, you should use its parent's width:
    /**
     $(window).on('resize.jqGrid', function () {
     var parent_width = $(grid_selector).closest('.tab-pane').width();
     $(grid_selector).jqGrid( 'setGridWidth', parent_width );
     })
     //and also set width when tab pane becomes visible
     $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
     if($(e.target).attr('href') == '#mygrid') {
     var parent_width = $(grid_selector).closest('.tab-pane').width();
     $(grid_selector).jqGrid( 'setGridWidth', parent_width );
     }
     })
     */

    jQuery(grid_selector).jqGrid({
    //direction: "rtl",

    //subgrid options
    subGrid: false,
            //subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
            //datatype: "xml",
            subGridOptions: {
            plusicon: "ace-icon fa fa-plus center bigger-110 blue",
                    minusicon: "ace-icon fa fa-minus center bigger-110 blue",
                    openicon: "ace-icon fa fa-chevron-right center orange"
            },
            //for this example we are using local data
            subGridRowExpanded: function (subgridDivId, rowId) {
            var subgridTableId = subgridDivId + "_t";
            $("#" + subgridDivId).html("<table id='" + subgridTableId + "'></table>");
//            $("#" + subgridTableId).jqGrid({
//            datatype: 'local',
//                    data: subgrid_data,
//                    colNames: ['No', 'Item Name', 'Qty'],
//                    colModel: [
//                    {name: 'id', width: 50},
//                    {name: 'name', width: 150},
//                    {name: 'qty', width: 50}
//                    ]
//            });
            },
            data: grid_data,
            datatype: "local",
            height: 250,
            colNames: [' ', 'Nama', 'Tanggal Lahir', 'Alamat', 'Pendidikan', 'Pekerjaan', 'Telepon'],
            colModel: [
            {name: 'myac', index: '', width: 80, fixed: true, sortable: false, resize: false,
                    formatter: 'actions',
                    formatoptions: {
                    keys: true,
                            //delbutton: false,//disable delete button

                            delOptions: {recreateForm: true, beforeShowForm: beforeDeleteCallback}
                    //editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
                    }
            },
            {name: 'nama', index: 'nama', width: 90, editable: true},
            {name: 'tanggal_lahir', index: 'tanggal', width: 150, editable: true, unformat: pickDate},
            {name: 'alamat', index: 'alamat', width: 70, editable: true, edittype: "textarea", editoptions: {rows: "2", cols: "10"}},
            {name: 'pendidikan', index: 'pendidikan', width: 90, editable: true, edittype: "select", editoptions: {value: "SMA/SMK:SMA/SMK;Diplima:Diploma;Sarjana:Sarjana;Magister:Magister"}},
            {name: 'pekerjaan', index: 'pekerjaan', width: 150, sortable: false, editable: true, edittype: "textarea", editoptions: {rows: "2", cols: "10"}},
            {name: 'telepon', index: 'telepon', width: 150, sortable: false, editable: true}
            ],
            viewrecords: true,
            rowNum: 10,
            rowList: [10, 20, 30],
            pager: pager_selector,
            altRows: true,
            //toppager: true,

            multiselect: true,
            //multikey: "ctrlKey",
            multiboxonly: true,
            loadComplete: function () {
            var table = this;
            setTimeout(function () {
            styleCheckbox(table);
            updateActionIcons(table);
            updatePagerIcons(table);
            enableTooltips(table);
            }, 0);
            },
            editurl: "/dummy.html", //nothing is saved
            caption: "Data Testee"

            //,autowidth: true,


            /**
             ,
             grouping:true, 
             groupingView : { 
             groupField : ['name'],
             groupDataSorted : true,
             plusicon : 'fa fa-chevron-down bigger-110',
             minusicon : 'fa fa-chevron-up bigger-110'
             },
             caption: "Grouping"
             */

            });
    $(window).triggerHandler('resize.jqGrid'); //trigger window resize to make the grid get the correct size

//enable search/filter toolbar
//jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
//jQuery(grid_selector).filterToolbar({});

//switch element when editing inline
    function aceSwitch(cellvalue, options, cell) {
    setTimeout(function () {
    $(cell).find('input[type=checkbox]')
            .addClass('ace ace-switch ace-switch-5')
            .after('<span class="lbl"></span>');
    }, 0);
    }
//enable datepicker
    function pickDate(cellvalue, options, cell) {
    setTimeout(function () {
    $(cell).find('input[type=text]')
            .datepicker({format: 'yyyy-mm-dd', autoclose: true});
    }, 0);
    }

//navButtons
    jQuery(grid_selector).jqGrid('navGrid', pager_selector,
    {//navbar options
    edit: true,
            editicon: 'ace-icon fa fa-pencil blue',
            add: true,
            addicon: 'ace-icon fa fa-plus-circle purple',
            del: true,
            delicon: 'ace-icon fa fa-trash-o red',
            search: true,
            searchicon: 'ace-icon fa fa-search orange',
            refresh: true,
            refreshicon: 'ace-icon fa fa-refresh green',
            view: true,
            viewicon: 'ace-icon fa fa-search-plus grey'
    },
    {
    //edit record form
    //closeAfterEdit: true,
    //width: 700,
    recreateForm: true,
            beforeShowForm: function (e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />');
            style_edit_form(form);
            }
    },
    {
    //new record form
    //width: 700,
    closeAfterAdd: true,
            recreateForm: true,
            viewPagerButtons: false,
            beforeShowForm: function (e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
                    .wrapInner('<div class="widget-header" />');
            style_edit_form(form);
            }
    },
    {
    //delete record form
    recreateForm: true,
            beforeShowForm: function (e) {
            var form = $(e[0]);
            if (form.data('styled'))
                    return false;
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />');
            style_delete_form(form);
            form.data('styled', true);
            },
            onClick: function (e) {
            //alert(1);
            }
    },
    {
    //search form
    recreateForm: true,
            afterShowSearch: function (e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />');
            style_search_form(form);
            },
            afterRedraw: function () {
            style_search_filters($(this));
            }
    ,
            multipleSearch: true
            /**
             multipleGroup:true,
             showQuery: true
             */
    },
    {
    //view record form
    recreateForm: true,
            beforeShowForm: function (e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />');
            }
    }
    );
    function style_edit_form(form) {
    //enable datepicker on "sdate" field and switches for "stock" field
    form.find('input[name=sdate]').datepicker({format: 'yyyy-mm-dd', autoclose: true});
    form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
    //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
    //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


    //update buttons classes
    var buttons = form.next().find('.EditButton .fm-button');
    buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide(); //ui-icon, s-icon
    buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
    buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>');
    buttons = form.next().find('.navButton a');
    buttons.find('.ui-icon').hide();
    buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
    buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
    }

    function style_delete_form(form) {
    var buttons = form.next().find('.EditButton .fm-button');
    buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide(); //ui-icon, s-icon
    buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
    buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>');
    }

    function style_search_filters(form) {
    form.find('.delete-rule').val('X');
    form.find('.add-rule').addClass('btn btn-xs btn-primary');
    form.find('.add-group').addClass('btn btn-xs btn-success');
    form.find('.delete-group').addClass('btn btn-xs btn-danger');
    }
    function style_search_form(form) {
    var dialog = form.closest('.ui-jqdialog');
    var buttons = dialog.find('.EditTable');
    buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
    buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
    buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
    }

    function beforeDeleteCallback(e) {
    var form = $(e[0]);
    if (form.data('styled'))
            return false;
    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />');
    style_delete_form(form);
    form.data('styled', true);
    }

    function beforeEditCallback(e) {
    var form = $(e[0]);
    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />');
    style_edit_form(form);
    }

//it causes some flicker when reloading or navigating grid
//it may be possible to have some custom formatter to do this as the grid is being created to prevent this
//or go back to default browser checkbox styles for the grid
    function styleCheckbox(table) {
    /**
     $(table).find('input:checkbox').addClass('ace')
     .wrap('<label />')
     .after('<span class="lbl align-top" />')
     
     
     $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
     .find('input.cbox[type=checkbox]').addClass('ace')
     .wrap('<label />').after('<span class="lbl align-top" />');
     */
    }


//unlike navButtons icons, action icons in rows seem to be hard-coded
//you can change them like this in here if you want
    function updateActionIcons(table) {
    /**
     var replacement = 
     {
     'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
     'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
     'ui-icon-disk' : 'ace-icon fa fa-check green',
     'ui-icon-cancel' : 'ace-icon fa fa-times red'
     };
     $(table).find('.ui-pg-div span.ui-icon').each(function(){
     var icon = $(this);
     var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
     if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
     })
     */
    }

//replace icons with FontAwesome icons like above
    function updatePagerIcons(table) {
    var replacement =
    {
    'ui-icon-seek-first': 'ace-icon fa fa-angle-double-left bigger-140',
            'ui-icon-seek-prev': 'ace-icon fa fa-angle-left bigger-140',
            'ui-icon-seek-next': 'ace-icon fa fa-angle-right bigger-140',
            'ui-icon-seek-end': 'ace-icon fa fa-angle-double-right bigger-140'
    };
    $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function () {
    var icon = $(this);
    var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
    if ($class in replacement)
            icon.attr('class', 'ui-icon ' + replacement[$class]);
    })
            }

    function enableTooltips(table) {
    $('.navtable .ui-pg-button').tooltip({container: 'body'});
    $(table).find('.ui-pg-div').tooltip({container: 'body'});
    }

//var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

    $(document).one('ajaxloadstart.page', function (e) {
    $(grid_selector).jqGrid('GridUnload');
    $('.ui-jqdialog').remove();
    });
    });
</script>