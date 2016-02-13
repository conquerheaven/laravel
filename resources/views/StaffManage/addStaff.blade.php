@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            人事管理
        </li>
        <li>
            员工录入
        </li>
    </ul>
@endsection

@section('content')
    <div class="col-md-8">
        <!-- COLOR PICKER -->
        <div class="box border inverse">
            <div class="box-title">
                <h4><i class="fa fa-flask"></i>添加员工</h4>
            </div>
            <div class="box-body" id="color-pickers">
                <form class="form-horizontal " id="addSTAFF">
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>姓名:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            身份证号:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="sfzhao" name="sfzhao" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>所属部门:
                        </label>
                        <div class="col-md-2">
                            <select class="form-control" id="bmname" name="bmname">
                            </select>
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>职位:
                        </label>
                        <div class="col-md-2">
                            <select class="form-control" id="gzname" name="gzname">
                                <option value="">请选择部门</option>
                            </select>
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>员工编号:
                        </label>
                        <div class="col-md-1" readonly="true">
                            <input type="text" id="bianhao1" name="bianhao1" class="form-control" readonly>
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="bianhao2" name="bianhao2" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            学历:
                        </label>
                        <div class="col-md-2">
                            <select class="form-control" id="xueli" name="xueli">
                                <option value="小学">小学</option>
                                <option value="初中">初中</option>
                                <option value="高中">高中</option>
                                <option value="大学">大学</option>
                            </select>
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            性别:
                        </label>
                        <div class="col-md-2">
                            <select class="form-control" id="xinbie" name="xinbie">
                                <option value="男">男</option>
                                <option value="女">女</option>
                            </select>
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            出生日期:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="birthday" name="birthday" class="form-control">
                        </div>
                        <label class="col-md-3 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>家庭住址:
                        </label>
                        <div class="col-md-2">
                            <select class="form-control" id="province" name="province">
                                <option value="">请选择省份</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" id="city" name="city">
                                <option value="">请选择城市</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-control" id="county" name="county">
                                <option value="">请选择县/区</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="detail" name="detail" class="form-control" placeholder="具体地址">
                        </div>
                        <label class="col-md-1 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <font color="#FF0000">*</font>联系电话:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="telphone" name="telphone" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            入职时间:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="rztime" name="rztime" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            备注:
                        </label>
                        <div class="col-md-3">
                            <input type="text" id="beizhu" name="beizhu" class="form-control">
                        </div>
                        <label class="col-md-2 control-label" style="color:red"></label>
                    </div>
                    <div class="form-group" id="Staff_error" style="color:red;display:none " align="center">
                    </div>
                    <div class="form-group" id="Staff_success" style="color:green;display:none " align="center">
                        添加员工成功！
                    </div>
                    <div class="form-group" id="Staff_loading" style="display:none " align="center">
                        <img src="{{ asset('CloudAdmin/img/loaders/12.gif') }}" />
                    </div>
                    <div class="form-group">
                        <div class="col-md-12" align="center">
                            <input type="submit" class="btn btn-success" id="submit" value="添加员工" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $.validator.addMethod('addressValidate',function(value,element){
            if($("#province").val() == '') return false;
            return true;
        },'请选择地址');
        $("#addSTAFF").validate({
            rules:{
                name:{
                    required:true
                },
                bmname:{
                    required:true
                },
                gzname:{
                    required:true
                },
                bianhao2:{
                    required:true,
                    remote:{
                        type:'get',
                        url:'/StaffManage/BianhaoValidate',
                        data:{
                            bianhao:function(){ return ($("#bianhao1").val()+$("#bianhao2").val());}
                        }
                    }
                },
                telphone:{
                    required:true
                },
                detail:{
                    addressValidate:true
                }
            },
            messages:{
                name:{
                    required:'请输入员工姓名'
                },
                bmname:{
                    required:'请选择所属部门'
                },
                gzname:{
                    required:'请选择职位'
                },
                bianhao2:{
                    required:'请输入员工编号',
                    remote:'该编号已被使用'
                },
                telphone:{
                    required:'请输入手机号码'
                }
            },
            errorPlacement : function(error, element) {
                error.appendTo(element.parent().next());
            },
            submitHandler:function(form){
                addStaff();
            }
        });

        $(function(){
            $("#StaffManage").addClass("active");
            $("#addStaff").addClass("current");
            setTimePicker('birthday');
            setTimePicker('rztime');
            getAllBm();
            $("#bmname").change(function(){
                getZwByBm($("#bmname").val());
                $("#bianhao1").val($("#bmname").val());
            });
            getAllProvince();
            $("#province").change(function(){
                getCityByProvincecode($("#province").val());
                $("#county").html('<option value="">请选择县/区</option>');
            });
            $("#city").change(function(){
                getCountyByCitycode($("#city").val());
            })
        })

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

        function getAllBm(){
            $.ajax({
                url:'/common/Bm/getAll',
                type:'get',
                dataType:'json',
                success:function(jsonData){
                    var bm = jsonData.bm;
                    $("#bmname").html('<option value="">请选择部门</option>');
                    for(var i = 0; i < bm.length; i++){
                        $("#bmname").append('<option value="'+bm[i].bm_id+'">'+bm[i].bm_name+'</option>');
                    }
                }
            });
        }

        function getZwByBm(bm_id){
            $.ajax({
                url:'/common/Zw/getZwByBm',
                type:'get',
                dataType:'json',
                data:{
                    bm:bm_id
                },
                success:function(jsonData) {
                    if (jsonData.result) {
                        var zw = jsonData.zw;
                        $("#gzname").html('<option value="">请选择职位</option>');
                        for (var i = 0; i < zw.length; i++) {
                            $("#gzname").append('<option value="'+zw[i].gz_id+'">'+zw[i].gz_name+'</option>');
                        }
                    }
                }
            });
        }

        function getAllProvince(){
            $.ajax({
                url:'/common/Address/getAllProvince',
                type:'get',
                dataType:'json',
                success:function(jsonData){
                    if(jsonData.result){
                        var province = jsonData.province;
                        $("#province").html('<option value="">请选择省份</option>');
                        for(var i = 0; i < province.length; i++){
                            $("#province").append('<option value="'+province[i].code+'">'+province[i].name+'</option>');
                        }
                    }
                }
            });
        }

        function getCityByProvincecode(provincecode){
            $.ajax({
                url:'/common/Address/getCityByProvincecode',
                rype:'get',
                dataType:'json',
                data:{
                    provincecode:provincecode
                },
                success:function(jsonData){
                    if(jsonData.result){
                        var city = jsonData.city;
                        $("#city").html('<option value="">请选择城市</option>');
                        for(var i = 0; i < city.length; i++){
                            $("#city").append('<option value="'+city[i].code+'">'+city[i].name+'</option>');
                        }
                    }
                }
            });
        }

        function getCountyByCitycode(citycode){
            $.ajax({
                url:'/common/Address/getCountyByCitycode',
                type:'get',
                dataType:'json',
                data:{
                    citycode:citycode
                },
                success:function(jsonData){
                    if(jsonData.result){
                        var county = jsonData.county;
                        $("#county").html('<option value="">请选择县/区</option>');
                        for(var i = 0; i < county.length; i++){
                            $("#county").append('<option value="'+county[i].code+'">'+county[i].name+'</option>');
                        }
                    }
                }
            });
        }

        function addStaff(){
            $("#Staff_error").hide();
            $("#Staff_success").hide();
            $("#Staff_loading").show();
            var address = '';
            if($("#province").val().length > 0) address += $("#province option:selected").text();
            if($("#city").val().length > 0) address += $("#city option:selected").text();
            if($("#county").val().length > 0) address += $("#county option:selected").text();
            address += $("#detail").val();
            $.ajax({
                url:'/common/Ygdangan/insert',
                type:'post',
                dataType:'json',
                data:{
                    name:$("#name").val(),
                    sfzhao:$("#sfzhao").val(),
                    bmname:$("#bmname").val(),
                    gzname:$("#gzname").val(),
                    bianhao:$("#bianhao1").val()+$("#bianhao2").val(),
                    xueli:$("#xueli").val(),
                    xinbie:$("#xinbie").val(),
                    birthday:$("#birthday").val(),
                    address:address,
                    telphone:$("#telphone").val(),
                    rztime:$("#rztime").val(),
                    beizhu:$("#beizhu").val(),
                    stats:1
                },
                success:function(jsonData){
                    $("#Staff_loading").hide();
                    if(jsonData.result){
                        $("#Staff_success").show();
                        $("#name").val('');
                        $("#sfzhao").val('');
                        $("#bmname").val('');
                        $("#gzname").val('');
                        $("#bianhao1").val('');
                        $("#bianhao2").val('');
                        $("#xueli").val('');
                        $("#xinbie").val('');
                        $("#birthday").val('');
                        $("#telphone").val('');
                        $("#rztime").val('');
                        $("#beizhu").val('');
                    }else{
                        $("#Staff_error").html('添加失败！'+jsonData.message);
                        $("#Staff_error").show();
                    }
                },
                error:function(jsonData){
                    $("#Staff_loading").hide();
                    $("#Staff_error").html('添加失败！服务器操作失败！');
                    $("#Staff_error").show();
                }
            });
        }
    </script>
@endsection