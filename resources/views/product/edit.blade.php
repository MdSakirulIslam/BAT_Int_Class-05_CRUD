@extends('inc/master')

@section('title')
    Edit Product
@endsection

@section('body')
    <section class="py-2 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header text-center"><h1>Update Product Item</h1></div>
                        <div class="card-body">
                            <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="id">
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->product_category}}" name="product_category"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->name}}" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->price}}" name="price"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Unit</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->product_unit}}" name="product_unit"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image"/>
                                        <img src="{{isset($product->image) ? asset($product->image) : ''}}" alt="{{$product->image}}" height="60" width="90">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-lg-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


