@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="sort_wrap">
                {{--<div class="filter-but-w"><button class="btn" id="js-sort-but">Сортировать</button></div>--}}
                <div class="drop-filter">
                    {{Form::open(['method' => 'get'])}}
                    {{Form::radio('sort', 0, true, ['id' => 'js-data-filter'])}} <span>По дате создания</span>
                    {{Form::radio('sort', 1, false, ['id' => 'js-name-filter'])}} <span>По названию</span>
                    {{Form::radio('sort', 2, false, ['id' => 'js-price-filter'])}} <span>По цене</span>
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <div class="content_wrap">
            @if(count($products) == 0)
                <h3 style="text-align: center;">Товаров пока нет <i class="fa fa-frown-o" aria-hidden="true" style="margin-left: 5px;"></i></h3>
            @else
            @include('product.load-home')
            @endif
        </div>
    </div>
@endsection
@section('footer.js')
@parent
<script>
    $('#js-data-filter').on('change', function (e) {
        var val = $(this).val();
        $(this).parent().submit();
    });
    $('#js-name-filter').on('change', function (e) {
        var value = $(this).val();
        $(this).parent().submit();
    });
    $('#js-price-filter').on('change', function (e) {
        var value = $(this).val();
        $(this).parent().submit();
    });
</script>
@endsection