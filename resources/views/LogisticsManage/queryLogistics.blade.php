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
    <div class="box border purple">
        <div class="box-title">
            <h4><i class="fa fa-bars"></i>查看托运部信息</h4>

        </div>
        <div class="box-body big form-horizontal">
            <div class="form-group">
                <label class="col-md-1 control-label" for="tybSelector">选择托运部：</label>
                <div class="col-md-11">
                    <input type="hidden" class="bigdrop col-md-6" id="tybSelector" value="-1"/>
                </div>
            </div>
            <div class="form-group" align="center">
                <div class="col-md-8" id="tybTable" style="display: none">
                    <table>
                        <tr>
                            <td><font color="#FF0000">*</font>托运部名称：</td>
                            <td><font color="#FF0000"><input type="text" placeholder="托运部名称" id="name" name="name" class="" /></font></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><font color="#FF0000">*</font>托运部电话：</td>
                            <td><font color="#FF0000"><input type="text" placeholder="托运部电话" id="telephone" name="telephone" class="" /></font></td>
                        </tr>
                        <tr>
                            <td><font color="#FF0000">*</font>托运部地址：</td>
                            <td><input type="text" placeholder="托运部地址" id="address" name="address" class="" /></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>可达目的地：</td>
                            <td><input type="text" placeholder="可达目的地" id="item" name="item" class="" /></td>
                        </tr>
                        <tr>
                            <td>备注：</td>
                            <td><input type="text" placeholder="备注" id="beizhu" name="beizu" class="" /></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td></td>
                            <td></td>
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
            $("#LogisticsManage").addClass("active");
            $("#queryLogistics").addClass("current");
            renderTybSelect2();
        });

        $("#tybSelector").change(function(){
            getTybById($("#tybSelector").val());
        });

        function renderTybSelect2(){
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
                formatResult: function(tyb){return tyb.name+" "+tyb.telephone},
                formatSelection: function(tyb){return tyb.name+" "+tyb.telephone}, // omitted for brevity, see the source of this page
                dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
                escapeMarkup: function (m) { return m; }
            });
        }

        function getTybById(id){
            $("#tybTable").slideUp();
            $("#error").hide();
            $("#success").hide();
            $("#fail").hide();
            $("#loading").slideDown();
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
                    $("#loading").hide();
                    if(jsonData.result){
                        $("#name").val(jsonData.tuoyunbu['name']);
                        $("#telephone").val(jsonData.tuoyunbu['telephone']);
                        $("#address").val(jsonData.tuoyunbu['address']);
                        $("#item").val(jsonData.tuoyunbu['item']);
                        $("#beizhu").val(jsonData.tuoyunbu['beizhu']);
                        $("#tybTable").slideDown();
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

        $("#submit").click(function(){
            $("#loading").slideDown();
            $("#success").hide();
            $("#fail").hide();
            $("#submit").attr('disabled','true');
            $.ajax({
                url:'/common/Tuoyunbu/update/'+$("#tybSelector").val(),
                type:'post',
                dataType:'json',
                timeout:10000,
                data:{
                    name:$("#name").val(),
                    telephone:$("#telephone").val(),
                    address:$("#address").val(),
                    item:$("#item").val(),
                    beizhu:$("#beizhu").val()
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
                error:function(err){
                    alert(err);
                    $("#submit").removeAttr('disabled');
                    $("#loading").hide();
                    $("#fail").html('<h2>修改失败！请求超时！</h2>');
                    $("#fail").show();
                }
            });
        });


    </script>
@endsection