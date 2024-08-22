<nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
    <div class="container-fluid">
        <div class="w-100">
            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="{{ url('/') }}">
                    <div class="d-flex align-items-center">
                        <svg class="f-w-7" xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                    </div>
                </a>

                <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                    
                    <li class="d-lg-none">
                        <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                    </li>

                    
                    <li class="d-none d-sm-block">
                        <span class="nav-link text-body search-trigger cursor-pointer">Search</span>

                        
                        <div class="navbar-search d-none">
                            <div class="input-group mb-3 h-100">
                                <span class="input-group-text px-4 bg-transparent border-0"><i
                                        class="ri-search-line ri-lg"></i></span>
                                <input type="text" class="form-control text-body bg-transparent border-0"
                                    placeholder="Enter your search terms...">
                                <span
                                    class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                        class="ri-close-circle-line ri-lg"></i></span>
                            </div>
                        </div>
                        <div class="search-overlay"></div>

                    </li>

                    
                    <li class="ms-1 d-none d-lg-inline-block">
                        <a class="nav-link text-body" href="{{ url('login') }}">
                            Account
                        </a>
                    </li>

                    
                    <li class="ms-1 d-inline-block position-relative dropdown-cart">
                        <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                            type="button">
                            Cart (2)
                        </button>
                        <div class="cart-dropdown dropdown-menu">
                        
                            
                            <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                                <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                            </div>
                        
                            
                            <div>
                        
                                
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="{{ url('./assets/images/products/product-cart-1.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike Air VaporMax 2021
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                    </div>
                                </div>
                                <!-- Cart Product-->
                                <div class="row mx-0 py-4 g-0 border-bottom">
                                    <div class="col-2 position-relative">
                                        <picture class="d-block ">
                                            <img class="img-fluid" src="{{ url('./assets/images/products/product-cart-2.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                        </picture>
                                    </div>
                                    <div class="col-9 offset-1">
                                        <div>
                                            <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                Nike ZoomX Vaporfly
                                                <i class="ri-close-line ms-3"></i>
                                            </h6>
                                            <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                                        </div>
                                        <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pt-3">
                                    <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                        <div>
                                            <p class="m-0 fw-bold fs-5">Grand Total</p>
                                            <span class="text-muted small">Inc $45.89 sales tax</span>
                                        </div>
                                        <p class="m-0 fs-5 fw-bold">$422.99</p>
                                    </div>
                                </div>
                                <a href="{{ url('cart') }}" class="btn btn-outline-dark w-100 text-center mt-4" role="button">View Cart</a>
                                <a href="{{ url('checkout') }}" class="btn btn-dark w-100 text-center mt-2" role="button">Proceed To Checkout</a>
                            </div>
                            <!-- / Cart Summary-->
                          </div>
                        

                    </li>
                    <!-- /Navbar Cart Icon-->

                </ul>
                <!-- Navbar Icons-->                

                <!-- Main Navigation-->
                <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                    id="navbarNavDropdown">

                    <!-- Menu-->
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" role="button" >
                              Home
                            </a>
                          </li>
                        <li class="nav-item dropdown dropdown position-static">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                          </a>
                            <div class="dropdown-menu dropdown-megamenu">
                              <div class="container-fluid">
                                  <div class="row g-0 g-lg-3">
                                      <div class="col col-lg-8 py-lg-5">
                                          <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                              <div class="col">
                                                  <h6 class="dropdown-heading">Category</h6>
                                                  <ul class="list-unstyled">
                                            @php
                                                $getCategoryHeader = App\Models\CategoryModel::getRecordMenu();
                                            @endphp
                                                @foreach ($getCategoryHeader->slice(0,8) as $value_category_header)
                                    <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_category_header->slug) }}">{{ $value_category_header->name }}</a></li>
                                                @endforeach
                                                      <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                  </ul>
                                              </div>

                                              <div class="col">
                                                  <h6 class="dropdown-heading">Brand</h6>
                                                  <ul class="list-unstyled">
                                                    @php
                                                    $getBrandHeader = App\Models\BrandModel::getRecordMenu();
                                                @endphp
                                                    @foreach ($getBrandHeader->slice(0,8) as $value_brand_header)
                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_brand_header->slug) }}">{{ $value_brand_header->name }}</a></li>
                                                    @endforeach
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                  </ul>
                                              </div>
                                              <!-- / menu row-->
                                          
                                              <!-- menu row-->
                                              <div class="d-none d-xxl-block col">
                                                  <h6 class="dropdown-heading">Footware Product</h6>
                                                  <ul class="list-unstyled">
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}l">Lifestyle & Casual</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}">Walking Shoes</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Running Shoes</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Military Boots</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Fabric Walking Boots</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Leather Walking Boots</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Wellies</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Winter Footwear</a></li>
                                                      <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                  </ul>
                                              </div>

                                              <div class="col">
                                                  <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                              </div>  
                                          </div>
                                          
                                          <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/timberland') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-1.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/converse') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-2.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/stussy') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-3.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/vans') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-4.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/the-north-face') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-5.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                              <div class="me-5 f-w-20">
                                                  <a class="d-block" href="{{ url('product/champion') }}">
                                                      <picture>
                                                          <img class="img-fluid d-table mx-auto" src="{{ url('./assets/images/logos/logo-6.svg') }}" alt="">
                                                      </picture>
                                                  </a>
                                              </div>
                                          </div>                  </div>
                                      <div class="col-lg-4 d-none d-lg-block">
                                          <div class="vw-50 border-start h-100 position-absolute"></div>
                                          <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                              <div class="row g-4">
                                                  <div class="col-12 col-md-6">
                                                      <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                          <picture class="w-100 d-block mb-2 mx-auto">
                                                              <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-12.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                          </picture>
                                                          <a class="fw-bolder link-cover" href="{{ url('product') }}">Latest Arrivals</a>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 col-md-6">
                                                      <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                          <picture class="w-100 d-block mb-2 mx-auto">
                                                              <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-13.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                          </picture>
                                                          <a class="fw-bolder link-cover" href="{{ url('product') }}">Accessories</a>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 col-md-6">
                                                      <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                          <picture class="w-100 d-block mb-2 mx-auto">
                                                              <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-14.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                          </picture>
                                                          <a class="fw-bolder link-cover" href="{{ url('product') }}">T-Shirts</a>
                                                      </div>
                                                  </div>
                                                  <div class="col-12 col-md-6">
                                                      <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                          <picture class="w-100 d-block mb-2 mx-auto">
                                                              <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-15.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                          </picture>
                                                          <a class="fw-bolder link-cover" href="{{ url('product') }}">Jackets</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <a href="{{ url('product') }}" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit All Section</a>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                          
                        </li>

















                        <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Men
                            </a>
                              <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Category</h6>
                                                    <ul class="list-unstyled">
                                              @php
                                                  $getCategoryHeader = App\Models\CategoryModel::getRecordMenu();
                                              @endphp
                                                  @foreach ($getCategoryHeader->slice(0,8) as $value_category_header)
                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_category_header->slug) }}">{{ $value_category_header->name }}</a></li>
                                                  @endforeach
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
  
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Brand</h6>
                                                    <ul class="list-unstyled">
                                                      @php
                                                      $getBrandHeader = App\Models\BrandModel::getRecordMenu();
                                                  @endphp
                                                      @foreach ($getBrandHeader->slice(0,8) as $value_brand_header)
                                          <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_brand_header->slug) }}">{{ $value_brand_header->name }}</a></li>
                                                      @endforeach
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Footware Product</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}l">Lifestyle & Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}">Walking Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Running Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Military Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Fabric Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Leather Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Wellies</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Winter Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
  
                                                <div class="col">
                                                    <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                </div>  
                                            </div>
                                         </div>
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-12.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Latest Arrivals</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-13.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Accessories</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-14.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">T-Shirts</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-15.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Jackets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ url('product') }}" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Men Section</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                          </li>











                          <li class="nav-item dropdown dropdown position-static">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Women
                            </a>
                              <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Category</h6>
                                                    <ul class="list-unstyled">
                                              @php
                                                  $getCategoryHeader = App\Models\CategoryModel::getRecordMenu();
                                              @endphp
                                                  @foreach ($getCategoryHeader->slice(0,8) as $value_category_header)
                                      <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_category_header->slug) }}">{{ $value_category_header->name }}</a></li>
                                                  @endforeach
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
  
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Brand</h6>
                                                    <ul class="list-unstyled">
                                                      @php
                                                      $getBrandHeader = App\Models\BrandModel::getRecordMenu();
                                                  @endphp
                                                      @foreach ($getBrandHeader->slice(0,8) as $value_brand_header)
                                          <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url($value_brand_header->slug) }}">{{ $value_brand_header->name }}</a></li>
                                                      @endforeach
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            
                                                <!-- menu row-->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Footware Product</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}l">Lifestyle & Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('product') }}">Walking Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Running Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Military Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Fabric Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Leather Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Wellies</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="{{ url('category') }}">Winter Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="{{ url('product') }}">View All</a></li>
                                                    </ul>
                                                </div>
  
                                                <div class="col">
                                                    <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-12.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Latest Arrivals</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-13.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Accessories</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-14.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">T-Shirts</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="{{ url('./assets/images/banners/banner-15.jpg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="{{ url('product') }}">Jackets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="{{ url('product') }}" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Women Section</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                          </li>












                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Pages
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ url('/') }}">Homepage</a></li>
                              <li><a class="dropdown-item" href="{{ url('product') }}">Shop</a></li>
                              <li><a class="dropdown-item" href="{{ url('cart') }}">Cart</a></li>
                              <li><a class="dropdown-item" href="{{ url('checkout') }}">Checkout</a></li>
                              <li><a class="dropdown-item" href="{{ url('login') }}">Login</a></li>
                              <li><a class="dropdown-item" href="{{ url('register') }}">Register</a></li>
                              <li><a class="dropdown-item" href="{{ url('contact') }}">Contact Us</a></li>
                              <li><a class="dropdown-item" href="{{ url('about') }}">About Us</a></li>
                              <li><a class="dropdown-item" href="{{ url('gethelp') }}">Get Help</a></li>
                            </ul>
                          </li>
                      </ul>                    <!-- / Menu-->

                </div>
                <!-- / Main Navigation-->

            </div>
        </div>
    </div>
</nav>