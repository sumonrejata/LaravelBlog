@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-header">{{ __('All Category') }}</div>

                <div class="card-body">
                    <form action="{{ route('subcat.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">Chose Category:</label>
                          <select class="form-control" name="category_id">
                            <option>--Select category--</option>
                           @foreach ($CatPost as $row)
                           <option value="{{ $row->id }}">{{ $row->catpost_name }}</option> 
                           @endforeach

                          </select>
                        </div>
    
                      </div>

                      <div class="row">
                        <div class="form-group col-sm-6">
                          <label for="email">SubCategory:</label>
                          <input type="text" name="subcategoryis_name" class="form-control">
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
