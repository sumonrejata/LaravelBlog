@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add tags</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('tag.store') }}" method="post">
                  @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tags Title</label>
                      <input type="text" class="form-control" name="tag_name" placeholder="Tags Title">
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
