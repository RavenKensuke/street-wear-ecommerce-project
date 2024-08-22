@extends('admin.layouts.app')

@section('style')
{{-- <link rel="stylesheet" href="{{ url('public/assets/plugins/summernote/summernote-bs4.min.css') }}"> --}}
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-12">
                <h1>Edit Product</h1>
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

                      <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="card-body">

                          <div class="row">

                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Title <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" value="{{ old('title', $product->title) }}" name="title" required placeholder="Title">
                              </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>SKU <span style="color:red;">*</span></label>
                                  <input type="text" class="form-control" value="{{ old('sku', $product->sku) }}" name="sku" placeholder="SKU">
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Category <span style="color:red;">*</span></label>
                                  <select name="category_id" id="ChangeCategory" class="form-control">
                                    <option value="">Select</option>
                                    @foreach ($getCategory as $category)
                                      <option {{ ($product->category_id == $category->id) ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Brand <span style="color:red;">*</span></label>
                                  <select name="brand_id" class="form-control">
                                    <option  value="">Select</option>
                                    @foreach ($getBrand as $brand)
                                      <option {{ ($product->brand_id == $brand->id) ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Color <span style="color:red;">*</span></label>
                                    
                                      @foreach ($getColor as $color)
                                      @php
                                        $checked = '';
                                      @endphp
                                      @foreach ($product->getColor as $pcolor)
                                        @if ($pcolor->color_id == $color->id)
                                          @php
                                          $checked = 'checked';
                                          @endphp
                                        @endif
                                      @endforeach
                                      <div>
                                      <label><input {{ $checked }} type="checkbox" name="color_id[]" value="{{ $color->id }}"> {{ $color->name }}</label>
                                    </div>
                                      @endforeach
                                      
                                    
                                    
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                              <div class="form-group">
                                <label>Price ($)<span style="color:red;">*</span></label>
                                <input type="text" required class="form-control" value="{{ !empty($product->price) ? $product->price : '' }}" name="price" placeholder="Price">
                              </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Size <span style="color:red;">*</span></label>
                                    <div>
                                      <table class="table table-striped">
                                        <thead>
                                        <tr>
                                          <th>Size Name</th>
                                          <th>Price ($)</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody id="AppendSize">

                                        @php
                                          $i_s = 1;
                                        @endphp

                                        @foreach ($product->getSize as $size)
                                        <tr id="DeleteSize{{ $i_s }}">
                                          <td><input type="text" value="{{ $size->name }}" placeholder="Name" name="size[{{$i_s}}][name]" class="form-control"></td>
                                          <td><input type="text" value="{{ $size->price }}" placeholder="Price" name="size[{{$i_s}}][price]" class="form-control"></td>
                                          <td style="width: 200px;">
                                            <button type="button" id="{{$i_s}}" class="btn btn-danger DeleteSize">Delete</button>
                                        </td>
                                        </tr>
                                        @php
                                        $i_s++;
                                      @endphp
                                        @endforeach

                                        <tr>
                                          <td><input type="text" placeholder="Name" name="size[100][name]" class="form-control"></td>
                                          <td><input type="text" placeholder="Price" name="size[100][price]" class="form-control"></td>
                                          <td style="width: 200px;">
                                            <button style="width: 70px" type="button" id="" class="btn btn-primary AddSize">Add</button>
                                        </td>
                                        </tr>

                                      </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Product Detail <span style="color:red;">*</span></label>
                                    <textarea name="product_detail" placeholder="Product Detail" class="form-control editor"> {{ $product->product_detail }}
                                    </textarea> 
                                  </div>
                                </div>
                              </div>


                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Product Short Detail <span style="color:red;">*</span></label>
                                    <textarea name="short_detail" class="form-control editor" placeholder="Short Detail">{{ $product->short_detail }}
                                    </textarea>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Additional Information <span style="color:red;">*</span></label>
                                    <textarea name="additional_information" class="form-control editor" placeholder="Additional Information">{{ $product->additional_information }}
                                    </textarea>
                                  </div>
                                </div>
                              </div>


                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Delivery Returns <span style="color:red;">*</span></label>
                                    <textarea name="delivery_returns" class="form-control editor" placeholder="Delivery Returns">{{ $product->delivery_returns }}
                                    </textarea>
                                  </div>
                                </div>
                              </div>


                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Image <span style="color:red;">*</span></label>
                                    <input type="file" name="image[]" class="form-control" multiple accept="image/*">
                                  </div>
                                </div>
                              </div>

                              @if (!empty($product->getImage->count()))
                                <div class="row" id="sortable">
                                  @foreach ($product->getImage as $image)
                                  @if(!empty($image->getLogo()))
                                  <div class="col-md-1 sortable_image" id="{{ $image->id }}" style="padding-bottom: 20px;  text-align: center;">
                                    <img style="width: 100%; height: 80px;" src="{{ $image->getLogo() }}">
                                    <a onclick="return confirm('Are you sure want to delete?')" style="margin-top: 15px;" href="{{ url('admin/product/image_delete/'.$image->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                  </div>
                                  @endif
                                  @endforeach

                                </div>
                              @endif


                              <hr>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                    <option {{ ($product->gender == 'Men') ? 'selected' : ''}} value="Men">Men</option>
                                    <option {{ ($product->gender == 'Women') ? 'selected' : ''}}  value="Women">Women</option>
                                    
                                  </select>
                                  </div>
                                </div>
                              </div>
                              
                              
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                    <option {{ ($product->status == 0) ? 'selected' : ''}} value="0">Active</option>
                                    <option {{ ($product->status == 1) ? 'selected' : ''}}  value="1">InActive</option>
                                  </select>
                                  </div>
                                </div>
                              </div>

                              

                              
                              
                            </div>

                          </div>
                            

                            


                        </div>
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <br>
                        <br>
                      </form>
                    </div>
        
                  </div>
            </div>
          </div>
        </section>
      </div>

@endsection

@section('script')


{{-- <script src="{{ url('public/tinymce/tinymce-jquery.min.js') }}"></script> --}}

<script src="https://cdn.tiny.cloud/1/hljisjgjp4rt6cer0yf95amtb6vy06ppyyusi7r0fhjunpjb/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

  <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>

  <script src="{{ url('public/sortable/jquery-ui.js') }}"></script>

<script type="text/javascript">

$(document).ready(function(){
  $('#sortable').sortable({
    });
});

$('.editor').tinymce({
        height: 300,
        menubar: false,
        plugins: [
           'a11ychecker','advlist','advcode','advtable','autolink','checklist','markdown',
           'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
           'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'
});



var i = 1000;
  $('body').delegate('.AddSize', 'click', function(){
     var html = '<tr id="DeleteSize'+i+'">\n\
                <td>\n\
                  <input type="text" placeholder="Name" name="size['+i+'][name]" value="'+i+'" class="form-control">\n\
                </td>\n\
                <td>\n\
                  <input type="text" name="size['+i+'][price]" placeholder="Price" class="form-control">\n\
                  </td>\n\
                <td>\n\
                  <button type="button" id="'+i+'" class="btn btn-danger DeleteSize">Delete</button>\n\
                  </td>\n\
                </tr>';
            i++;
      $('#AppendSize').append(html);
  });

  $('body').delegate('.DeleteSize', 'click', function(){
    var id = $(this).attr('id');
    $('#DeleteSize'+id).remove();
  });

</script>

@endsection