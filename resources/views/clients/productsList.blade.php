@extends('../app')
@section('title')

@stop
@section('content')
    <div id="mainColumn" class="conteiner">
        <div class="row">
            @foreach($products as $product)
                <div class="col col-md-4 ">
                    <a href="{{ route('product.page',$product->id )}}" class="card" style="height:90%;margin-bottom:5%;box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);">
                        <img class="card-img-top" src="" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name  }}</h5>
                            <p class="card-text">{{ $product->describtion  }}</p>
                            @if($product->qnt != 0)
                                <p>موجودی در انبار :{{ $product->qnt }}</p>
                            @else
                                <p style="color: red;">ناموجود</p>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop