@extends('layouts\master')
@section('title')
  laravel shopping cart
@endsection

@section('content')
   @foreach ($items->chunk(2) as $itemChunk)
        <div class="row">
            @foreach ($itemChunk as $item)
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="{{ $item->img_path }}" alt="..." class="img-responsive">
                    <div class="caption">
                        <h3>{{ $item->title }}<span>${{ $item->sell_price }}</span></h3>
                      <p>{{ $item->description }}</p>
                      <div class="clearfix">
                          <a href="#" class="btn btn-primary" role="button"><i class="fas fa-cart-plus"></i> Add to Cart</a> <a href="#" class="btn btn-default pull-right" role="button"><i class="fas fa-info"></i> More Info</a>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
    @endforeach
@endsection