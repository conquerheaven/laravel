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

    <script>

        $(function(){
            $("#SaleManage").addClass("active");
            $("#addOrder").addClass("current");

        });
    </script>
@endsection

