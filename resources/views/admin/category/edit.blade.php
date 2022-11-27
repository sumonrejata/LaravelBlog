@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">{{ __('Update Category') }}</div>

                <div class="card-body">
                    <form action="{{ route('category.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Category:</label>
                          <input type="text" name="category_name" value="{{ $data->category_name }}" class="form-control">
                        </div>
    
                      </div>
                      <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
