@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1>Add New Product</h1>
              </div>
            </div>
          </div>
        </section>
    
        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">

                      <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                              <label>Title <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('title') }}" name="title" placeholder="Title">
                            </div>

                            {{-- <div class="form-group">
                              <label>Slug <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('slug') }}" name="title" placeholder="Title">
                            </div> --}}


                        </div>
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
        
                  </div>
            </div>
          </div>
        </section>
      </div>

@endsection

@section('script')

@endsection