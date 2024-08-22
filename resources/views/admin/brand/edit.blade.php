@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1>Edit Brand</h1>
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
                              <label>Brand Name <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('name', $getRecord->name) }}" name="name" required placeholder="Brand Name">
                              <div style="color:red;">{{ $errors->first('name') }}</div>
                            </div>

                            <div class="form-group">
                              <label>Slug <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('slug', $getRecord->slug) }}" name="slug" required placeholder="Slug Ex. URL">
                              <div style="color:red;">{{ $errors->first('slug') }}</div>
                            </div>

                            <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                              <option {{ (old('status', $getRecord->status) == 0) ? 'selected' : ''}} value="0">Active</option>
                              <option {{ (old('status', $getRecord->status) == 1) ? 'selected' : ''}}  value="1">InActive</option>
                            </select>
                            </div>

                            <hr>

                            <div class="form-group">
                              <label>Meta Title <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('meta_title', $getRecord->meta_title) }}" name="meta_title" required placeholder="Meta Title">
                            </div>

                            <div class="form-group">
                              <label>Meta Description <span style="color:red;">*</span></label>
                              <textarea class="form-control" name="meta_description" placeholder="Meta Description">{{ old('meta_description', $getRecord->meta_description) }}</textarea>
                            </div>

                            <div class="form-group">
                              <label>Meta Keywords <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" value="{{ old('meta_keywords', $getRecord->meta_keywords) }}" name="meta_keywords" placeholder="Meta Keywords">
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