@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
             客户管理
        </li>
        <li>
            查询客户信息
        </li>
    </ul>
@endsection

@section('content')
    <div class="box border primary">
        <div class="box-title">
            <h4><i class="fa fa-bars"></i>查看客户详细信息</h4>

        </div>
        <div class="box-body big form-horizontal">
            <div class="form-group">
                <label class="col-md-1 control-label" for="kehuSelector">选择客户：</label>
                <div class="col-md-11">
                    <input type="hidden" class="bigdrop col-md-6" id="kehuSelector" value="-1"/>
                </div>
            </div>
            <div class="form-group" align="center">
                <div class="col-md-8" id="kehuTable" style="display: none">
                <table>
                    <tr>
                        <td><font color="#FF0000">*</font>客户名称：</td>
                        <td><font color="#FF0000"><input type="text" placeholder="客户名称" id="kehuname" name="kehuname" class="" /></font></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><font color="#FF0000">*</font>客户电话：</td>
                        <td><font color="#FF0000"><input type="text" placeholder="客户电话" id="telephone" name="telephone" class="" /></font></td>
                    </tr>
                    <tr>
                        <td>客户名称简写：</td>
                        <td><input type="text" placeholder="客户名称简写" id="ename" name="ename" class="" /></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>录入日期：</td>
                        <td><input type="text" readonly="readonly" placeholder="录入日期" id="addtime" name="addtime" class="" /></td>
                    </tr>
                    <tr>
                        <td>客户评级：</td>
                        <td>
                            <select id="khpj" name="khpj" class="">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>客户收款方式：</td>
                        <td>
                            <select id="jsxz" name="jsxz" class="">
                                <option value="0">请选择收款方式</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>客户地址：</td>
                        <td><input type="text" placeholder="客户地址" id="address" name="address" class="" /></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>客户负责人：</td>
                        <td>
                            <!--<select id="fuzheren" name="fuzheren" class="">
                                <option value="0">请选择负责人</option>
                            </select>-->
                            <input type="text" placeholder="客户负责人" id="fuzheren" name="fuzheren" class="" />
                        </td>
                    </tr>
                    <tr>
                        <td>QQ或电话：</td>
                        <td><input type="text" placeholder="QQ或电话" id="telephone2" name="telephone2" class="" /></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>传真：</td>
                        <td><input type="text" placeholder="传真" id="chuanzheng" name="chuanzheng" class="" /></td>
                    </tr>
                    <tr>
                        <td>品牌：</td>
                        <td><input type="text" placeholder="品牌" id="pingpai" name="pingpai" class="" /></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>品牌类型：</td>
                        <td><input type="text" placeholder="品牌类型" id="pplx" name="pplx" class="" /></td>
                    </tr>
                    <tr>
                        <td>商场名称：</td>
                        <td><input type="text" placeholder="商场名称" id="scname" name="scname" class="" /></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>面积：</td>
                        <td><input type="text" placeholder="面积" id="mj" name="mj" class="" /></td>
                    </tr>
                    <tr>
                        <td>所属地区：</td>
                        <td colspan = "4">
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
                        </td>
                    </tr>
                    <tr>
                        <td>托运部：</td>
                        <td>
                            <input type="hidden" class="bigdrop col-md-12" id="tybSelector" value="1"/>
                        </td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>资料录入人：</td>
                        <td><input type="text" readonly="readonly" id="caozuoren" name="caozuoren" class=""/></td>
                    </tr>
                    <tr>
                        <td>评价简述：</td>
                        <td colspan = "4"><textarea rows="3" columns="4" id="pingjia" name="pingjia"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td><input type="submit" class="btn btn-success" id="submit" value="修改" /></td>
                        <td></td>
                    </tr>
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


    <script>

        $(function(){
            $("#UserManage").addClass("active");
            $("#queryKehu").addClass("current");
            renderKehuSelect2();
            getArea('diqu',0);
            getShoukuanfs();
            //getUser();

        });

        $("#kehuSelector").change(function(){
            getKehuMessage($("#kehuSelector").val());
        });
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

        $("#submit").click(function(){
            submitModify()
        });

        function renderKehuSelect2(){
            $("#kehuSelector").select2({
                placeholder: "请输入客户姓名或者联系方式",
                minimumInputLength: 0,
                id : function(rs) {
                    return rs.ID;
                },
                ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
                    url: "/common/Kehu/getByNameAndPhone",
                    dataType: 'json',
                    data: function (term, page) {
                        return {
                            kehuname: term, // search term
                            phone:term,
                            pageLimit: 20
                        };
                    },
                    results: function (data, page) { // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to alter remote JSON data
                        return {results: data.kehu};
                    }
                },
                formatResult: function(kehu){return kehu.name+" "+kehu.telephone},
                formatSelection: function(kehu){return kehu.name+" "+kehu.telephone}, // omitted for brevity, see the source of this page
                dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
                escapeMarkup: function (m) { return m; }
            });
        }

        function renderTybSelect2(data){
            $("#tybSelector").select2({
                placeholder: "请输入托运部名称",
                minimumInputLength: 0,
                id : function(rs) {
                    return rs.ID;
                },
                ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
                    url: "/common/Tuoyunbu/getByNameAndPhone",
                    dataType: 'json',
                    data: function (term, page) {
                        return {
                            name: term, // search term
                            phone:term,
                            pageLimit: 20
                        };
                    },
                    results: function (data, page) { // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to alter remote JSON data
                        return {results: data.tuoyunbu};
                    }
                },
                 initSelection: function(element, callback) {
                     callback(data);
                 },
                formatResult: function(tyb){return tyb.name+" "+tyb.telephone},
                formatSelection: function(tyb){return tyb.name+" "+tyb.telephone}, // omitted for brevity, see the source of this page
                dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
                escapeMarkup: function (m) { return m; }
            });
        }

        function getKehuMessage(id){
            $("#kehuTable").slideUp();
            $("#error").hide();
            $("#success").hide();
            $("#fail").hide();
            $("#loading").slideDown();
            $.ajax({
                url:"/common/Kehu/getById",
                type:'get',
                dataType:'json',
                data:{
                    id:id
                },
                timeout:10000,
                success:function(jsonData){
                    $("#loading").hide();
                    if(jsonData.result){
                        var kehu = jsonData.kehu;
                        $("#kehuname").val(kehu['name']);
                        $("#telephone").val(kehu['telephone']);
                        $("#ename").val(kehu['ename']);
                        $("#addtime").val(kehu['addtime']);
                        $("#khpj").val(kehu['khpj']);
                        $("#jsxz").val(kehu['jsxz']);
                        $("#address").val(kehu['address']);
                        $("#fuzheren").val(kehu['fuzheren']);
                        $("#telephone2").val(kehu['telephone2']);
                        $("#chuanzheng").val(kehu['chuanzheng']);
                        $("#pingpai").val(kehu['pingpai']);
                        $("#pingpailx").val(kehu['pplx']);
                        $("#scname").val(kehu['scname']);
                        $("#mj").val(kehu['mj']);
                        $("#caozuoren").val(kehu['caozuoren']);
                        $("#pingjia").val(kehu['pingjia']);

                        if(kehu['dqid'] > 0){
                            $("#diqu").val(kehu['dqid']);
                            getArea('sheng' , kehu['dqid']);
                        }
                        if(kehu['sheng'] > 0){
                            $("#sheng").val(kehu['sheng']);
                            getArea('shi' , kehu['sheng']);
                        }
                        if(kehu['city'] > 0){
                            $("#shi").val(kehu['city']);
                            getArea('xian' , kehu['city']);
                        }
                        if(kehu['xian'] > 0){
                            $("#xian").val(kehu['xian']);
                        }

                        $("#tybSelector").select2('destroy');
                        getTybById(kehu['tybid']);


                        $("#kehuTable").slideDown();
                    }else{
                        $("#error").slideDown();
                    }
                },
                error:function(){
                    $("#loading").hide();
                    $("#error").show();
                }
            });
        }

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

        function getTybById(id){
            $.ajax({
                url:'/common/Tuoyunbu/getById',
                type:'get',
                dataType:'json',
                data:{
                    id:id
                },
                asyc:false,
                timeout:10000,
                success:function(jsonData){
                    renderTybSelect2(jsonData.tuoyunbu);
                }
            });
        }

        function getShoukuanfs(){
            $.ajax({
                url:'/common/Shoukuanfs/getAll',
                type:'get',
                dataType:'json',
                timeout:10000,
                success:function(jsonData){
                    var skfs = jsonData.shoukuanfs;
                    for(var i = 0; i < skfs.length; i++){
                        $("#jsxz").append('<option value="'+skfs[i].ID+'">'+skfs[i].name+'</option>');
                    }
                }
            });
        }

        /*function getUser(){
            $.ajax({
                url:'/common/User/getAll',
                type:'get',
                dataType:'json',
                timeout:10000,
                success:function(jsonData){
                    var user = jsonData.user;
                    for(var i = 0; i < user.length; i++){
                        $("#fuzheren").append('<option value="'+user[i].name+'">'+user[i].name+'</option>');
                    }
                }
            });
        }*/

        function submitModify(){
            $("#loading").slideDown();
            $("#success").hide();
            $("#fail").hide();
            $("#submit").attr('disabled','true');
            $.ajax({
                url:'/common/Kehu/update',
                type:'post',
                dataType:'json',
                timeout:10000,
                data:{
                    id:$("#kehuSelector").val(),
                    name:$("#kehuname").val(),
                    telephone:$("#telephone").val(),
                    ename:$("#ename").val(),
                    addtime:$("#addtime").val(),
                    khpj:$("#khpj").val(),
                    jsxz:$("#jsxz").val(),
                    address:$("#address").val(),
                    fuzheren:$("#fuzheren").val(),
                    telephone2:$("#telephone2").val(),
                    chuanzheng:$("#chuanzheng").val(),
                    pingpai:$("#pingpai").val(),
                    pplx:$("#pplx").val(),
                    scname:$("#scname").val(),
                    mj:$("#mj").val(),
                    caozuoren:$("#caozuoren").val(),
                    pingjia:$("#pingjia").val(),
                    tybid:$("#tybSelector").val(),
                    dqid:$("#diqu").val(),
                    sheng:$("#sheng").val(),
                    city:$("#shi").val(),
                    xian:$("#xian").val()
                },
                success:function(jsonData){
                    $("#submit").removeAttr('disabled');
                    $("#loading").hide();
                    if(jsonData.result){
                        $("#success").show();
                    }else{
                        $("#fail").html('<h2>修改失败！'+jsonData.message+'</h2>');
                        $("#fail").show();
                    }
                },
                error:function(){
                    $("#submit").removeAttr('disabled');
                    $("#loading").hide();
                    $("#fail").html('<h2>修改失败！请求超时！</h2>');
                    $("#fail").show();
                }
            });
        }



    </script>
@endsection