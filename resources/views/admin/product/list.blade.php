@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Product List</h1>
              </div>
              <div class="col-sm-6" style="text-align: right;">
                <a href="{{ url('admin/product/add') }}" class="btn btn-primary">Add New Product</a>
              </div>
            </div>
          </div>
        </section>
    
        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                @include('admin.layouts._message')

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Product List</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Title</th>
                          <th>Created By</th>
                          <th>Status</th>
                          <th>Created Date</th>
                          <th class="ml-1">Action</th>
                          <th class="ml-1">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($getRecord as $value)
                        <tr>
                          <td style="padding-top: 13px;">#{{ $value->id }}</td>
                          <td style="padding-top: 13px;">{{ $value->title }}</td>
                          <td style="padding-top: 13px;">{{ $value->created_by_name }}</td>
                          <td style="padding-top: 13px;">{{ ($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                          <th style="padding-top: 13px;">{{ date('d-m-Y', strtotime($value->created_at)) }}</th>
                          <td><a href="{{ url('admin/product/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                          </td>
                          <td>
                            <a onclick="return confirm('Are you sure want to delete?')" href="{{ url('admin/product/delete/'.$value->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <div style="padding: 5px; float: right; margin: 13px 13px 0 0;">
                      {{ $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

@endsection

@section('script')

@endsection