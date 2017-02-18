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
                                <input type="text" id="bm_name" name="bm_name" class="form-control">
                            </div>
                            <label class="col-md-3 control-label" style="color:red"></label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                               部门代号:
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="bm_id" name="bm_id" class="form-control">
                            </div>
                            <label class="col-md-3 control-label" style="color:red"></label>
                        </div>
                        <div class="form-group" id="Bm_error" style="color:red;display: none" align="center">
                        </div>
                        <div class="form-group" id="Bm_success" style="color:green;display: none" align="center">
                            添加部门成功！
                        </div>
                        <div class="form-group" id="Bm_loading" style="display: none" align="center">
                            <img src="{{ asset('CloudAdmin/img/loaders/12.gif') }}" />
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
                                <select class="form-control" id="BmSelector_add" name="BmSelector_add">
                                </select>
                            </div>
                            <label class="col-md-3 control-label" style="color:red"></label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                职位名称:
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="gz_name" name="gz_name" class="form-control">
                            </div>
                            <label class="col-md-3 control-label" style="color:red"></label>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                职位代号:
                            </label>
                            <div class="col-md-6">
                                <input type="text" id="gz_id" name="gz_id" class="form-control">
                            </div>
                            <label class="col-md-3 control-label" style="color:red"></label>
                        </div>
                        <div class="form-group" id="Zw_error" style="color:red;display: none" align="center">
                        </div>
                        <div class="form-group" id="Zw_success" style="color:green;display: none" align="center">
                            添加职位成功！
                        </div>
                        <div class="form-group" id="Zw_loading" style="display: none" align="center">
                            <img src="{{ asset('CloudAdmin/img/loaders/12.gif') }}" />
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
                                <select class="form-control" id="BmSelector_show" name="BmSelector_show">
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
        $("#addBM").validate({
            //debug:true,
            rules:{
                bm_name:{
                    required:true,
                    remote:{
                     type:'get',
                     url:'/StaffManage/Bm_nameValidate',
                     data:{
                     bm_name:function(){ return $("#bm_name").val();}
                     }
                     }
                },
                bm_id:{
                    required:true,
                    remote:{
                        type:'get',
                        url:'/StaffManage/Bm_idValidate',
                        data:{
                            bm_id:function(){ return $("#bm_id").val();}
                        }
                    }
                }

            },
            messages:{
                bm_name:{
                    required:'部门名称不能为空',
                    remote:'该部门名称已存在'
                },
                bm_id:{
                    required:'部门代码不能为空',
                    remote:'该部门代码已存在'
                }
            },
            errorPlacement : function(error, element) {
                error.appendTo(element.parent().next());
            },
            submitHandler:function(form){
                addBm();
            }
        });

        $("#addZW").validate({
            debug:true,
            rules:{
                BmSelector_add:{
                    required:true
                },
                gz_name:{
                    required:true,
                    remote:{
                        type:'get',
                        url:'/StaffManage/Gz_nameValidate',
                        data:{
                            gz_name:function(){ return $("#gz_name").val();}
                        }
                    }
                },
                gz_id:{
                    required:true,
                    remote:{
                        type:'get',
                        url:'/StaffManage/Gz_idValidate',
                        data:{
                            gz_id:function(){ return $("#gz_id").val();}
                        }
                    }
                }

            },
            messages:{
                BmSelector_add:{
                    required:'请选择所属部门'
                },
                gz_name:{
                    required:'职位名称不能为空',
                    remote:'该职位名称已存在'
                },
                gz_id:{
                    required:'职位代码不能为空',
                    remote:'该职位代码已存在'
                }
            },
            errorPlacement : function(error, element) {
                error.appendTo(element.parent().next());
            },
            submitHandler:function(form){
                addZw();
            }
        });

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
                        $("#BmSelector_add").append('<option value="'+bm[i].bm_id+'-'+bm[i].bm_name+'">'+bm[i].bm_name+'</option>');
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
                            $("#ZwTable").append('<tr><td>'+(i+1)+'</td><td>'+zw[i].bm_name+'</td><td>'+zw[i].bm_id+'</td><td>'+zw[i].gz_name+'</td><td>'+zw[i].gz_id+'</td><td><a href="javascript::" onclick="deleteZw(\''+zw[i].gz_id+'\')">删除</a></td></tr>');
                        }
                    }
                }
            });
        }

        function addBm(){
            $("#Bm_error").hide();
            $("#Bm_success").hide();
            $("#Bm_loading").show();
            $.ajax({
                url:'/common/Bm/insert',
                type:'post',
                dataType:'json',
                data:{
                    bm_name:$("#bm_name").val(),
                    bm_id:$("#bm_id").val()
                },
                timeout:10000,
                success:function(jsonData){
                    $("#Bm_loading").hide();
                    if(jsonData.result){
                        $("#Bm_success").show();
                        $("#bm_id").val('');
                        $("#bm_name").val('');
                        getAllBm();
                        getZwByBm("");
                    }else{
                        $error = '添加失败！'+jsonData.message;
                        $("#Bm_error").html($error);
                        $("#Bm_error").show();
                    }
                },
                error:function(){
                    $("#Bm_loading").hide();
                    $error = '添加失败！请稍候重试！';
                    $("#Bm_error").html($error);
                    $("#Bm_error").show();
                }
            });
        }
        function deleteBm(bm_id){
            if(confirm("您确定要删除该部门？")) {
                $.ajax({
                    url: '/common/Bm/deleteByBm_id',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        bm_id: bm_id
                    },
                    timeout: 10000,
                    success: function (jsonData) {
                        if (jsonData.result) {
                            getAllBm();
                            getZwByBm("");
                        } else {
                            alert("删除失败！" + jsonData.message);
                        }
                    },
                    error: function () {
                        alert("删除失败！请稍后重试！");
                    }
                });
            }
        }

        function addZw(){
            $("#Zw_error").hide();
            $("#Zw_success").hide();
            $("#Zw_loading").show();
            var bm = $("#BmSelector_add").val();
            var arr = bm.split('-');
            $.ajax({
                url:'/common/Zw/insert',
                type:'post',
                dataType:'json',
                data:{
                    bm_name:arr[1],
                    bm_id:arr[0],
                    gz_name:$("#gz_name").val(),
                    gz_id:$("#gz_id").val()
                },
                timeout:10000,
                success:function(jsonData){
                    $("#Zw_loading").hide();
                    if(jsonData.result){
                        $("#Zw_success").show();
                        $("#gz_id").val('');
                        $("#gz_name").val('');
                        getZwByBm($("#BmSelector_show").val());
                    }else{
                        $error = '添加失败！'+jsonData.message;
                        $("#Zw_error").html($error);
                        $("#Zw_error").show();
                    }
                },
                error:function(){
                    $("#Zw_loading").hide();
                    $error = '添加失败！请稍候重试！';
                    $("#Zw_error").html($error);
                    $("#Zw_error").show();
                }
            });
        }
        function deleteZw(gz_id){
            if(confirm("您确定要删除该职位？")) {
                $.ajax({
                    url: '/common/Zw/deleteByGz_id',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        gz_id: gz_id
                    },
                    timeout: 10000,
                    success: function (jsonData) {
                        if (jsonData.result) {
                            getZwByBm($("#BmSelector_show").val());
                        } else {
                            alert("删除失败！" + jsonData.message);
                        }
                    },
                    error: function () {
                        alert("删除失败！请稍后重试！");
                    }
                });
            }
        }
    </script>
@endsection