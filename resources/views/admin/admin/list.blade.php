@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Admin List</h1>
              </div>
              <div class="col-sm-6" style="text-align: right;">
                <a href="{{ url('admin/admin/add') }}" class="btn btn-primary">Add New Admin</a>
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
                    <h3 class="card-title">Admin List</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th class="ml-1">Action</th>
                          <th class="ml-1">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($getRecord as $value)
                        <tr>
                          <td style="padding-top: 13px;">#{{ $value->id }}</td>
                          <td style="padding-top: 13px;">{{ $value->name }}</td>
                          <td style="padding-top: 13px;">{{ $value->email }}</td>
                          <td style="padding-top: 13px;">{{ ($value->status == 0) ? 'Active' : 'Inactive' }}</td>
                          <td><a href="{{ url('admin/admin/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                          </td>
                          <td>
                            <a onclick="return confirm('Are you sure want to delete?')" href="{{ url('admin/admin/delete/'.$value->id) }}" class="btn btn-danger">Delete</a></td>
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