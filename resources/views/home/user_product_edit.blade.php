    @extends('layouts.home')


    @section('title', 'Product Edit')



    @section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Product Edit</li>
            </ul>
        </div>
    </div>




    <div class="section">
        <div class="container">
            <div class="row">
                <form role="form" action="{{route('user_product_update', ['id'=>$data->id])}}" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="parent">Parent</label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="parent_id" required="required" class="form-control ">
                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach($datalist as $rs)

                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="title" value="{{$data->title}}"   required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" name="price" value="{{$data->price}}" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tax<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" name="tax" value="{{$data->tax}}" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">İmage<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" name="image" required="required" class="form-control">
                            @if ($data->image)
                                <img src="{{Storage::url($data->image)}}" height="60" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Detail<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="summernote" name="detail" >{{$data->detail}}</textarea>
                            <script>
                                $('#summernote').summernote({
                                    placeholder: 'Hello stand alone ui',
                                    tabsize: 2,
                                    height: 120,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'underline', 'clear']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph']],
                                        ['table', ['table']],
                                        ['insert', ['link', 'picture', 'video']],
                                        ['view', ['fullscreen', 'codeview', 'help']]
                                    ]
                                });
                            </script>

                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Keywords<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="keywords" value="{{$data->keywords}}"  required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="description" value="{{$data->description}}"  required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Slug<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="slug" value="{{$data->slug}}"  required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Update Product</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    @endsection
