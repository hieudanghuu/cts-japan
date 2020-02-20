@extends('BanSim.catalog.main')
@section('title','create')

@section('main')

<div class="hero-wrap hero-bread mt-5" style="background-image: url('{{asset('minishop/images/bg_6.jpg')}}');height: 380px">

</div>
<div class="col-12 col-md-12 mt-5">
    <div class="row">
        <div class="col-12">
            <h1>新製品を追加する</h1>
        </div>
        <div class="col-12">
            <form method="post" action="{{ route('sim.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">製品名</label>
                    <input type="text" class="form-control" name="name" placeholder="名前を入力してください" required>
                </div>
                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="text" class="form-control" name="price" placeholder="価格を入力してください" required>
                </div>

                <div class="form-group">
                    <label for="sim_image" class="col-md-4 col-form-label text-md-right">写真</label>
                    <div class="col-md-6">
                        <input id="sim_image" type="file" class="form-control" placeholder="" name="sim_image">
                        @error('sim_image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sim_category_id">カテゴリーID</label>
                        <select name="sim_category_id" id="sim_category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="mb-5 btn btn-primary">新規作成</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

