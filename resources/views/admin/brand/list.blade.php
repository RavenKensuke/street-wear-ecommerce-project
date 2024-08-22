@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Brand List</h1>
              </div>
              <div class="col-sm-6" style="text-align: right;">
                <a href="{{ url('admin/brand/add') }}" class="btn btn-primary">Add New Brand</a>
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
                    <h3 class="card-title">Brand List</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Brand Name</th>
                          <th>Slug</th>
                          <th>Meta Title</th>
                          <th>Meta Description</th>
                          <th>Meta Keywords</th>
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
                          <td style="padding-top: 13px;">{{ $value->name }}</td>
                          <td style="padding-top: 13px;">{{ $value->slug }}</td>
                          <td style="padding-top: 13px;">{{ $value->meta_title }}</td>
                          <td style="padding-top: 13px;">{{ $value->meta_description }}</td>
                          <td style="padding-top: 13px;">{{ $value->meta_keywords }}</td>
                          <td style="padding-top: 13px;">{{ $value->created_by_name }}</td>
                          <td style="padding-top: 13px;">{{ ($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                          <th style="padding-top: 13px;">{{ date('d-m-Y', strtotime($value->created_at)) }}</th>
                          <td><a href="{{ url('admin/brand/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                          </td>
                          <td>
                            <a onclick="return confirm('Are you sure want to delete?')" href="{{ url('admin/brand/delete/'.$value->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
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