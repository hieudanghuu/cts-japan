@extends('dashboard.partials.main')
@section('title','show')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__">
                    <div class="container-fluid">
                        <section class="content">
                            <div class="container">
                                <a class="btn btn-dark" href="{{route('posts.index')}}">Back</a>
                                <div class="card card-solid mt-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-3">
                                                <h3 class="d-inline-block d-sm-none"></h3>
                                                <div class="col-12">
                                                    <img src="{{$post_tran->image}}" class="product-image"
                                                         alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-9">
                                                <div class="form-group row">
                                                   <span class="col-2"><strong> Tên tin tức :  </strong> </span>
                                                    <span class="col-5"><h3>  {{$post_tran->name}}</h3></span>
                                                </div>
                                                <div>
                                                    @if($post_tran->locale =='vi')
                                                        <p><strong>Ngôn ngữ : </strong> Việt Nam</p>
                                                    @else
                                                        <p><strong>Ngôn ngữ : </strong> Nhật Bản</p>
                                                    @endif
                                                    <p><strong>tiêu đề : </strong> {{$post_tran->title}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <nav class="w-100">
                                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="product-desc-tab"
                                                       data-toggle="tab"
                                                       href="#product-desc" role="tab" aria-controls="product-desc"
                                                       aria-selected="true">Mô Tả</a>
                                                    <a class="nav-item nav-link" id="product-comments-tab"
                                                       data-toggle="tab"
                                                       href="#product-comments" role="tab"
                                                       aria-controls="product-comments"
                                                       aria-selected="false">Trạng Thái</a>
                                                    <!-- <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> -->
                                                </div>
                                            </nav>
                                            <div class="tab-content p-3" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                                     aria-labelledby="product-desc-tab">
                                                    <div class="content">

                                                        {!!$post_tran->content!!}
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="product-comments" role="tabpanel"
                                                     aria-labelledby="product-comments-tab">
                                                    @if($post_tran->status == 1)
                                                        <option value="1">Online</option>
                                                    @else
                                                        <option value="0">Not online</option>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection

