@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            销售管理
        </li>
        <li>
            客户跟踪
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>客户跟踪</h4>

                </div>
                <div class="box-body big form-horizontal">
                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="col-md-3 trBlue">超过15天未交易且未回访</div>
                            <div class="col-md-3 trYellow">超过30天未交易且未回访</div>
                            <div class="col-md-3 trRed">超过60天未交易且未回访</div>
                        </div>
                        <div class="col-md-12">
                            地区:
                            <select id="diqu" name="diqu" class="">
                                <option value="-1">请选择地区</option>
                            </select>

                            <select id="sheng" name="sheng" class="">
                                <option value="-1">请选择省份</option>
                            </select>

                            <select id="shi" name="shi" class="">
                                <option value="-1">请选择城市</option>
                            </select>

                            <select id="xian" name="xian" class="">
                                <option value="-1">请选择区县</option>
                            </select>

                            负责人:
                            <select id="fuzeren" name="fuzeren" class="">
                                <option value="-1">请选择负责人</option>
                            </select>


                            <input type="text" placeholder="品牌" id="pinpai" name="pinpai" class="" />

                            <input type="text" placeholder="交易起始时间" id="starttime" name="starttime" class="">
                            -
                            <input type="text" placeholder="交易结束时间" id="endtime" name="endtime" class="">

                            <input type="submit" class="btn btn-success" id="submit" value="查询" />
                        </div>

                    </div>
                    <div class="form-group" align="center">
                        <div class="box-body" id="data">
                            <table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>序号</th>
                                    <th>最后交易时间</th>
                                    <th>未交易天数</th>
                                    <th>地址</th>
                                    <th>客户</th>
                                    <th>交易额</th>
                                    <th>负责人</th>
                                    <th>最后回访时间</th>
                                    <th>未回访时间</th>
                                    <th>回访人</th>
                                </tr>
                                </thead>
                                <tbody id="followInfo">
                                <!--<tr class="trRed">
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr class="trBlue">
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr class="trYellow">
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                <tr class="">
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>Trident</td>
                                    <td>
                                        Internet
                                        Explorer
                                        4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>序号</th>
                                    <th>最后交易时间</th>
                                    <th>未交易天数</th>
                                    <th>地址</th>
                                    <th>客户</th>
                                    <th>交易额</th>
                                    <th>负责人</th>
                                    <th>最后回访时间</th>
                                    <th>未回访时间</th>
                                    <th>回访人</th>
                                </tr>-->
                                </tfoot>
                            </table>
                        </div>
                        <div class="col-md-8" id="error" style="display: none">
                            <h2>查询超时！请稍后重试！</h2>
                        </div>
                        <div class="col-md-8" id="success" style="display: none">
                            <h2>修改成功！</h2>
                        </div>
                        <div class="col-md-8" id="fail" style="display: none">
                            <h2>修改失败！请稍后重试！</h2>
                        </div>
                        <div class="col-md-8" id="loading" style="display: none">
                            <img src="{{ asset('CloudAdmin/img/loaders/12.gif') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>交流明细</h4>

                </div>
            </div>

            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>交易明细</h4>

                </div>
            </div>
        </div>
    </div>

    <style>
        .trRed
        {
            background-color: #ff9497;
        }
        .trBlue
        {
            background-color: #bccaff;
        }
        .trYellow
        {
            background-color: #ffe280;
        }
    </style>
    <script>

        $(function(){
            $("#SaleManage").addClass("active");
            $("#followUp").addClass("current");
            getArea('diqu',0);
            getFuzeren('fuzeren');
            setTimePicker('starttime');
            setTimePicker('endtime');
            iniTable();

        });

        function iniTable() {
            $('#datatable1').dataTable({
                "sPaginationType": "bs_full",
                "bPaginate":true,
                "bLengthChange":true,
                "fnDrawCallback":function(data){
                    //每一次表格绘制完成时调用
                    $('.odd').removeClass("odd");
                    $('.even').removeClass("even");
                },
                "language": {
                    "lengthMenu" : "每页显示 _MENU_记录",
                    "zeroRecords" : "没有匹配的数据",
                    "info" : "第_PAGE_页/共 _PAGES_页",
                    "infoEmpty" : "没有符合条件的记录",
                    "search" : "查找",
                    "infoFiltered" : "(从 _MAX_条记录中过滤)",
                    "paginate" : { "first" : "首页 ", "last" : "末页", "next" : "下一页", "previous" : "上一页"}
                }
            });

            $('.datatable').each(function(){
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.addClass('form-control input-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.addClass('form-control input-sm');
            });



        }

        $("#diqu").change(function(){
            $("#sheng").html('<option value="-1">请选择省份</option>');
            $("#shi").html('<option value="-1">请选择城市</option>');
            $("#xian").html('<option value="-1">请选择区县</option>');
            getArea('sheng',$("#diqu").val());
        });
        $("#sheng").change(function(){
            $("#shi").html('<option value="-1">请选择城市</option>');
            $("#xian").html('<option value="-1">请选择区县</option>');
            getArea('shi',$("#sheng").val());
        });
        $("#shi").change(function(){
            $("#xian").html('<option value="-1">请选择区县</option>');
            getArea('xian',$("#shi").val());
        });

        function getArea(element , id){
            $.ajax({
                url:'/common/Area/getLowerById',
                type:'get',
                dataType:'json',
                data:{
                    id:id
                },
                async:false,
                timeout:10000,
                success:function(jsonData){
                    if(jsonData.result){
                        if(element == 'diqu') $("#"+element).html('<option value="-1">请选择地区</option>');
                        else if(element == 'sheng') $("#"+element).html('<option value="-1">请选择省份</option>');
                        else if(element == 'shi') $("#"+element).html('<option value="-1">请选择城市</option>');
                        else $("#"+element).html('<option value="-1">请选择区县</option>');
                        var area = jsonData.area;
                        for(var i = 0; i < area.length; i++){
                            $("#"+element).append('<option value="'+area[i].ID+'">'+area[i].sheng+'</option>');
                        }
                    }
                }
            })
        }

        function getFuzeren(element){
            $.ajax({
                url:'/common/User/getFuzeren',
                type:'get',
                dataType:'json',
                data:{
                    classType:10
                },
                async:false,
                timeout:10000,
                success:function(jsonData){
                    var user = jsonData.user;
                    for(var i = 0; i < user.length; i++){
                        $("#"+element).append('<option value="'+user[i].UserName+'">'+user[i].UserName+'</option>');
                    }
                }
            })
        }

        function setTimePicker(id){
            $('#'+id).datetimepicker({
                format:'yyyy-mm-dd',
                language:  'zh-CN',
                weekStart: 1,
                todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0,
                defaultDate: '-1 M'
            });
        }

        $("#submit").click(function () {
            $.ajax({
                url:'/common/Kehu/getFollowInfo',
                type:'get',
                dataType:'json',
                data:{
                    diqu:$("#diqu").val(),
                    sheng:$("#sheng").val(),
                    city:$("#shi").val(),
                    xian:$("#xian").val(),
                    fuzeren:$("#fuzeren").val(),
                    pinpai:$("#pinpai").val(),
                    starttime:$("#starttime").val(),
                    endtime:$("#endtime").val()
                },
                async:false,
                timeout:10000,
                success:function(jsonData){
                    if(jsonData.result){
                        $("#data").html('<table id="datatable1" cellpadding="0" cellspacing="0" border="0" class="datatable table table-bordered table-hover">'+
                                '<thead>'+
                                '<tr>'+
                                '<th>序号</th>'+
                                '<th>最后交易时间</th>'+
                                '<th>未交易天数</th>'+
                                '<th>地址</th>'+
                                '<th>客户</th>'+
                                '<th>交易额</th>'+
                                '<th>负责人</th>'+
                                '<th>最后回访时间</th>'+
                                '<th>未回访时间</th>'+
                                '<th>回访人</th>'+
                                '</tr>'+
                                '</thead>'+
                                '<tbody id="followInfo">'+
                                '</tbody>'+
                                '<tfoot>'+
                                '<tr>'+
                                '<th>序号</th>'+
                                '<th>最后交易时间</th>'+
                                '<th>未交易天数</th>'+
                                '<th>地址</th>'+
                                '<th>客户</th>'+
                                '<th>交易额</th>'+
                                '<th>负责人</th>'+
                                '<th>最后回访时间</th>'+
                                '<th>未回访时间</th>'+
                                '<th>回访人</th>'+
                                '</tr>'+
                                '</tfoot>'+
                                '</table>'
                        );
                        var followInfo = jsonData.followInfo;
                        for(var i = 0; i < followInfo.length; i++){
                            if(followInfo[i].dayOfjy > 60 && followInfo[i].dayOfhf > 60){
                                $("#followInfo").append('<tr class="trRed" id="' + followInfo[i].kehuid + '"></tr>');
                            }else if(followInfo[i].dayOfjy > 30 && followInfo[i].dayOfhf > 30){
                                $("#followInfo").append('<tr class="trYellow" id="' + followInfo[i].kehuid + '"></tr>');
                            }else if(followInfo[i].dayOfjy > 15 && followInfo[i].dayOfhf > 15){
                                $("#followInfo").append('<tr class="trBlue" id="' + followInfo[i].kehuid + '"></tr>');
                            }else{
                                $("#followInfo").append('<tr class="" id="' + followInfo[i].kehuid + '"></tr>');
                            }
                            $("#"+followInfo[i].kehuid).append(
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+followInfo[i].lastjytime+'</td>'+
                                    '<td>'+followInfo[i].dayOfjy+'</td>'+
                                    '<td>'+followInfo[i].address+'</td>'+
                                    '<td>'+followInfo[i].khname+'</td>'+
                                    '<td>'+followInfo[i].jysum+'</td>'+
                                    '<td>'+followInfo[i].fuzeren+'</td>'+
                                    '<td>'+followInfo[i].lasthftime+'</td>'+
                                    '<td>'+followInfo[i].dayOfhf+'</td>'+
                                    '<td>'+followInfo[i].hfren+'</td>');
                        }
                        iniTable();
                    }
                }
            })
        })
    </script>
@endsection

