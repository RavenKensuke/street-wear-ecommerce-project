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
                <h1>Edit Admin</h1>
              </div>
            </div>
          </div>
        </section>

        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                  @include('admin.layouts._message')

                    <div class="card card-primary">

                      <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" value="{{ old('name',$getRecord->name) }}" name="name" required placeholder="Enter Name">
                            </div>

                          <div class="form-group">
                            <label>Email address</label>
                            <input type="email" value="{{ old('email', $getRecord->email) }}" class="form-control" name="email" required placeholder="Enter Email">
                            <div style="color:red;">{{ $errors->first('email') }}</div>
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" value="{{ $getRecord->password }}" class="form-control mb-1" required name="password"  placeholder="Password">
                            <p class="ml-1">Do you want to change password so please add</p>
                          </div>

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                              <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                              <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="1">InActive</option>
                            </select>
                            </div>
                            

                        </div>
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
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