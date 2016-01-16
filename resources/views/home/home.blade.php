@extends('../_layout/template')

@section('header')
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
             Home
        </li>
        <li>
            仪表盘
        </li>
    </ul>
@endsection

@section('content')
    <script>
        $(function(){
            $("#home").addClass("active");
        })
    </script>
电饭锅电饭锅感受到
@endsection