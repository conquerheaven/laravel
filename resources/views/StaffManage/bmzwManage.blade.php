@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            人事管理管理
        </li>
        <li>
            部门职位管理
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- COLOR PICKER -->
            <div class="box border inverse">
                <div class="box-title">
                    <h4><i class="fa fa-flask"></i>添加部门</h4>
                </div>
                <div class="box-body" id="color-pickers">
                    <form class="form-horizontal " id="addBM">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                部门名称:
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="regular" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                               部门代号:
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="regular" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <input type="submit" class="btn btn-success" id="submit" value="添加部门" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box border inverse">
                <div class="box-title">
                    <h4><i class="fa fa-flask"></i>部门列表</h4>
                </div>
                <div class="box-body" id="color-pickers">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>部门名称</th>
                            <th>部门代号</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody id="BmTable">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- COLOR PICKER -->
            <div class="box border inverse">
                <div class="box-title">
                    <h4><i class="fa fa-flask"></i>添加职位</h4>
                </div>
                <div class="box-body" id="color-pickers">
                    <form class="form-horizontal" id="addZW">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                所属部门:
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="BmSelector_add">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                职位名称:
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="regular" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                职位代号:
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="regular" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <input type="submit" class="btn btn-success" id="submit" value="添加职位" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="box border inverse">
                <div class="box-title">
                    <h4><i class="fa fa-flask"></i>职位列表</h4>
                </div>
                <div class="box-body" id="color-pickers">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                所属部门:
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="BmSelector_show">
                                </select>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>所属部门</th>
                                <th>部门代号</th>
                                <th>职位名称</th>
                                <th>职位代号</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody id="ZwTable">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(function() {
            $("#StaffManage").addClass("active");
            $("#bmzwManage").addClass("current");
            getAllBm();
            getZwByBm("");
            $("#BmSelector_show").change(function(){
                var bm = $("#BmSelector_show").val();
                getZwByBm(bm);
            });
        });

        function getAllBm(){
            $.ajax({
                url:'/common/Bm/getAll',
                type:'get',
                dataType:'json',
                success:function(jsonData){
                    var bm = jsonData.bm;
                    $("#BmSelector_show").html('<option value="">请选择部门</option>');
                    $("#BmSelector_add").html('<option value="">请选择部门</option>');
                    $("#BmTable").html('');
                    for(var i = 0; i < bm.length; i++){
                        $("#BmSelector_show").append('<option value="'+bm[i].bm_id+'">'+bm[i].bm_name+'</option>');
                        $("#BmSelector_add").append('<option value="'+bm[i].bm_id+'">'+bm[i].bm_name+'</option>');
                        $("#BmTable").append('<tr><td>'+(i+1)+'</td><td>'+bm[i].bm_name+'</td><td>'+bm[i].bm_id+'</td><td><a href="javascript::" onclick="deleteBm(\''+bm[i].bm_id+'\')">删除</a></td></tr>');
                    }
                }
            });
        }

        function getZwByBm(bm){
            $.ajax({
                url:'/common/Zw/getZwByBm',
                type:'get',
                dataType:'json',
                data:{
                    bm:bm
                },
                success:function(jsonData) {
                    if (jsonData.result) {
                        $("#ZwTable").html('');
                        var zw = jsonData.zw;
                        for (var i = 0; i < zw.length; i++) {
                            $("#ZwTable").append('<tr><td>'+(i+1)+'</td><td>'+zw[i].bm_name+'</td><td>'+zw[i].bm_id+'</td><td>'+zw[i].gz_name+'</td><td>'+zw[i].gz_id+'</td><td><a href="javascript::" onclick="deleteBm(\''+zw[i].zw_id+'\')">删除</a></td></tr>');
                        }
                    }
                }
            });
        }
    </script>
@endsection