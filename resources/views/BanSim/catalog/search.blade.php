@extends('BanSim.catalog.main')
@section('title','list')

@section('main')

    <div class="hero-wrap hero-bread mt-5"
         style="background-image: url('{{asset('minishop/images/bg.png')}}');height: 550px">
    </div>
    <div class="col-12 mt-5">
        <div class="row">
            <br><br>
        </div>

            <section class="ftco-section bg-light ">
                @if(count($search_sim) > 0)
                <h1 class="text-center"><span class="text-danger">{{count($search_sim)}}</span> {{trans('shop.mess')}} </h1><br><br>
                @endif
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-8 col-lg-10 order-md-last">
                            <div class="row">
                                @forelse($search_sim as $key => $sim)
                                    <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                                        <div class="product d-flex flex-column">
                                            <a href="#" class="img-prod">
                                                <img class="img-fluid"
                                                     src="{{ 'data:image/jpeg;base64,'.$sim->sim_image }}"
                                                     style="height:180px" alt="Colorlib Template">
                                                <div class="overlay"></div>
                                            </a>
                                            <div class="text py-3 pb-4 px-3">
                                                <div class="d-flex">
                                                    <div class="cat">
                                                    <span>{{trans('shop.title')}}</span>
                                                    </div>
                                                </div>
                                            <h3><a href="#">{{trans('home.khauhieu2')}}</a></h3>
                                                <div class="pricing">
                                                    <p class="price"><span>{{$sim->sim_price}} 円</span><i
                                                            class="fas fa-yen-sign"></i></p>
                                                </div>
                                                <p class="bottom-area d-flex px-3">
                                                    <a href="#"
                                                       class="add-to-cart text-center py-2 mr-1"><span>{{trans('shop.view')}}</span></a>
                                                    <a href="{{route('save.cart',$sim->sim_id)}}"
                                                       class="buy-now text-center py-2">{{trans('shop.cart')}}<span><i
                                                                class="ion-ios-cart ml-1"></i></span></a>
                                                </p>
                                                <span>

                                            <div class="col-8 input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">{{trans('shop.sl')}}</span>
                                                </div>
                                                <input type="number" name="qty"
                                                       class="quantity form-control input-number"
                                                       value="1" min="1" max="100">
                                            </div>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    @if(is_numeric($key))
                                        <h1>
                                            <td>{{$key}} </td>
                                            {{trans('shop.error')}}
                                        </h1>
                                    @else
                                        <h1>
                                            <td>{{$key}}</td>
                                            {{trans('shop.error1')}}
                                        </h1>
                                    @endif
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </section>


    </div>
    <br><br>
@endsection
