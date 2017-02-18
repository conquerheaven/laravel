@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            人事管理
        </li>
        <li>
            员工列表
        </li>
    </ul>
@endsection

@section('content')
    <div class="col-md-10">
        <!-- COLOR PICKER -->
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-flask"></i>部门列表</h4>
            </div>
            <div class="box-body" id="color-pickers">
                <div class="form-horizontal">
                    <div class="form-group">
                    <label class="col-md-3 control-label">
                        员工姓名:
                    </label>
                    <div class="col-md-3">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="button" class="btn btn-success" id="submit" value="查询" />
                    </div>
                    <label class="col-md-2 control-label">
                        <a href="javascript:" onclick="queryStaff('',1)">在职</a>|<a href="javascript:" onclick="queryStaff('',2)">离职</a>
                    </label>
                </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>姓名</th>
                            <th>工号</th>
                            <th>性别</th>
                            <th>身份证号</th>
                            <th>部门</th>
                            <th>职位</th>
                            <th>电话</th>
                            <th>入职时间</th>
                            <th>是否在职</th>
                        </tr>
                        </thead>
                        <tbody id="YgTable">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $("#StaffManage").addClass("active");
            $("#queryStaff").addClass("current");
            queryStaff('',0);
            $("#submit").click(function(){
                var name = $("#name").val();
                queryStaff(name , 0);
            })
        });

        function queryStaff(name , stats){
            $.ajax({
                url:'/common/Ygdangan/getByNameStats',
                type:'get',
                dataType:'json',
                data:{
                    name:name,
                    stats:stats
                },
                timeout:10000,
                success:function(jsonData){
                    if(jsonData.result){
                        $("#YgTable").html('');
                        var arr = {'1':'是','2':'否'};
                        var ygdangan = jsonData.ygdangan;
                        for(var i = 0; i < ygdangan.length; i++){
                            $("#YgTable").append('<tr><td>'+(i+1)+'</td><td>'+ygdangan[i].name+'</td><td>'+ygdangan[i].bianhao+'</td><td>'+ygdangan[i].xinbie+'</td><td>'+ygdangan[i].sfzhao+'</td><td>'+ygdangan[i].bmname+'</td><td>'+ygdangan[i].gzname+'</td><td>'+ygdangan[i].telphone+'</td><td>'+ygdangan[i].rztime+'</td><td>'+arr[ygdangan[i].stats]+'</td></tr>')
                        }
                    }else{
                        $("#YgTable").html('查询失败！'+jsonData.message);
                    }
                },
                error:function(){
                    $("#YgTable").html('查询失败！请稍后重试！');
                }
            });
        }
    </script>
@endsection