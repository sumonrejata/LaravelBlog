@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add New Post</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Post Title</label>
                      <input type="text" class="form-control" name="title" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                      <label for="email">Category :</label>
                      <select class="form-control" name="category_id">
                        <option disabled selected >--Select category--</option>
                        @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>     
                        @endforeach
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="email">SubCategory :</label>
                      <select class="form-control" name="subcategory_id">
                        <option disabled selected >--Select Subcategory--</option>
 
                        @php
                            $subcategory = DB::table('subcategories')->where('category_id',$cat->id)->get();
                        @endphp
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                            @foreach ($subcategory as $sub)
                            <option value="{{ $sub->id }}">--{{ $sub->subcategoryis_name }}</option>
                            @endforeach
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Post Date</label>
                      <input type="date" class="form-control" name="post_date" placeholder="Post Date">
                    </div>
                   

                      @foreach ($tags as $tag)
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" name="tag_name[]" type="checkbox">
                          <label class="form-check-label">{{ $tag->tag_name }}</label>
                        </div>
       
                      </div>
                      @endforeach

                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" name="description">
                      
                    </textarea>
                    </div>
                    {{-- <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> --}}
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>





    
</div>
@endsection
