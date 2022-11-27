@extends('layouts.app')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>All Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>SI No</th>
                    <th>Category Name</th>
                    <th>SubCategory Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                      @foreach ($subcategory as $row)
                          
                     
                    
                  <tr>
                      {{-- <td>{{ $loop->index + 1 }}</td> --}}
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $row->Category_name->catpost_name }}</td>
                      <td>{{ $row->subcate_name }}</td>
                      <td>
                          <a href="" class="btn btn-info">Edit</a>
                          <a href="" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
                  @endforeach 
              </tbody>

                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@endsection
