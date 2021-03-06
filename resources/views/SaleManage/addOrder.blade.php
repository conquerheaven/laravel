@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            销售管理
        </li>
        <li>
            下单
        </li>
    </ul>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>下单</h4>

                </div>
                <div class="box-body big form-horizontal">
                    <div class="form-group">
                        <label class="col-md-1 control-label" for="kehuSelector">客户：</label>
                        <div class="col-md-11">
                            <input type="hidden" class="bigdrop col-md-6" id="kehuSelector" value="-1"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label" for="productSelector">产品：</label>
                        <div class="col-md-11">
                            <input type="hidden" class="bigdrop col-md-6" id="productSelector" value="-1"/>
                        </div>
                    </div>

                    <div>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>名称</th>
                                <th>型号</th>
                                <th>材质</th>
                                <th>颜色</th>
                                <th>单价</th>
                                <th>件数</th>
                                <th>合计</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody id="OrderTable">
                            {{--<tr class="info">--}}
                                {{--<td>XXXXXX</td>--}}
                                {{--<td>XXXXXX</td>--}}
                                {{--<td>XXXXXX</td>--}}
                                {{--<td>XXXXXX</td>--}}
                                {{--<td>--}}
                                    {{--<input type="text" placeholder="单价" id="price" name="price" style="width: 50px;" value="0"/>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="text" placeholder="件数" id="num" name="num" style="width: 50px;" value="0"/>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--0000--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="text" placeholder="备注" id="remark" name="remark" class="" />--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="button" class="btn btn-success" id="delete" value="删除" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            <tr class="info">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0</td>
                                <td>
                                    <input type="text" placeholder="总价" id="totalPrice" name="totalPrice" class="" />
                                </td>
                                <td></td>
                                <td>
                                    <input type="button" class="btn btn-success" id="deleteAll" value="删除全部" />
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div>

                        <input type="text" placeholder="送货时间" id="sendtime" name="sendtime" class="">

                        <input type="submit" class="btn btn-success" id="submit" value="确认下单" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>客户详细信息</h4>

                </div>
            </div>

            <div class="box border green">
                <div class="box-title">
                    <h4><i class="fa fa-bars"></i>交易明细</h4>

                </div>
            </div>
        </div>
    </div>

    <script>

        $(function(){
            $("#SaleManage").addClass("active");
            $("#addOrder").addClass("current");
            renderKehuSelect2();
            renderProductSelect2();
            setTimePicker('sendtime');

        });
        $("#kehuSelector").change(function(){
            getKehuMessage($("#kehuSelector").val());
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
        function renderProductSelect2(){
            $("#productSelector").select2({
                placeholder: "请输入产品名称或型号",
                minimumInputLength: 0,
                id : function(rs) {
                    return rs.ID;
                },
                ajax: { // instead of writing the function to execute the request we use Select2's convenient helper
                    url: "/common/Product/getByNameAndIdname",
                    dataType: 'json',
                    data: function (term, page) {
                        return {
                            name: term, // search term
                            idname:term,
                            pageLimit: 20
                        };
                    },
                    results: function (data, page) { // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to alter remote JSON data
                        return {results: data.product};
                    }
                },
                formatResult: function(product){return productSelectShow(product.name, product.idname,
                        product.color, product.material, product.price)},
                formatSelection: function(product){
                            addProduct(product.name, product.idname,
                                    product.color, product.material, product.price);
                            return productSelectShow(product.name, product.idname,
                        product.color, product.material, product.price)}, // omitted for brevity, see the source of this page
                dropdownCssClass: "bigdrop", // apply css that makes the dropdown taller
                escapeMarkup: function (m) { return m; }
            });
        }

        function productSelectShow(name, idname, color, material, price) {
            return "名称："+name+" 型号："+idname+" 颜色："+color+" 材质："+material+" 价格："+price;
        }

        function addProduct(name, idname, color, material, price) {
            $tableLen = $("#OrderTable").find('tr').length;
            var tr = '<tr class="info">'+
                    '<td>'+name+'</td>'+
                    '<td>'+idname+'</td>'+
                    '<td>'+material+'</td>'+
                    '<td>'+color+'</td>'+
                    '<td class="col-lg-1">'+
                    '<input type="text" placeholder="单价" id="price" name="price" style="width: 50px;" value="'+price+'" />'+
                    '</td>'+
                    '<td class="col-lg-1">'+
                    '<input type="text" placeholder="件数" id="num" name="num" style="width: 50px;" value="1" />'+
                    '</td>'+
                    '<td>'+price+'</td>'+
                    '<td>'+
                    '<input type="text" placeholder="备注" id="remark" name="remark" class="" />'+
                    '</td>'+
                    '<td>'+
                    '<input type="button" class="btn btn-success" id="delete" value="删除" onclick="deleteProduct(this)" />'+
                    '</td>'+
                    '</tr>';
            if($tableLen <= 1) {
                $("#OrderTable tr:eq(0)").before(tr);
            }else {
                $("#OrderTable tr:eq("+($tableLen-2)+")").after(tr);
            }
        }

        function deleteProduct($this) {
            $this.parentNode.parentNode.remove();
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
    </script>
@endsection

