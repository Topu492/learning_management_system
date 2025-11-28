
   <!--===========================
        HEADER START
    ============================-->
   <header class="header_3">
       <div class="row">
           <div class="col-xxl-4 col-lg-7 col-md-8 d-none d-md-block">
               <ul class="wsus__header_left d-flex flex-wrap">
                   <li><a href=""><i class="fas fa-envelope"></i></a></li>
                   <li><a href=""><i class="fas fa-phone-alt"></i> </a>
                   </li>
               </ul>
           </div>
           <div class="col-xxl-5 col-lg-7 d-none d-xxl-block">
               <div class="wsus__header_center">
                   <p> <span></span> <a href=""> </a></p>
               </div>
           </div>
           <div class="col-xxl-3 col-lg-5 col-md-4">

           </div>
       </div>
   </header>
   <!--===========================
        HEADER END
    ============================-->


   <!--===========================
        MAIN MENU 3 START
    ============================-->
   <nav class="navbar navbar-expand-lg main_menu main_menu_3">
       <a class="navbar-brand" href="{{ url('/') }}">
           <img src="" alt="EduCore" class="img-fluid">
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <div class="menu_category">
               <div class="icon">
                   <img src="{{ asset('frontend/assets/images/grid_icon.png') }}" alt="Category" class="img-fluid">
               </div>
               Category
               <ul>
                
                       <li>
                           <a href="">
                               <span>
                                   <img src="" alt="Category" class="img-fluid">
                               </span>
                              
                           </a>
                      
                               <ul class="category_sub_menu">
                               
                                       <li><a
                                               href=""></a>
                                       </li>
                               

                               </ul>
                         
                       </li>
              

               </ul>
           </div>
           <ul class="navbar-nav m-auto">
               <li class="nav-item">
                   <a class="nav-link active" href="">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="">Courses</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="">Blogs</a>
               </li>

               <li class="nav-item">
                   <a class="nav-link" href="">contact us</a>
               </li>
        
                   <li class="nav-item">
                       <a class="nav-link" href=""></a>
                   </li>
             
           </ul>

           <div class="right_menu">
               <div class="menu_search_btn">
                   <img src="{{ asset('frontend/assets/images/search_icon.png') }}" alt="Search" class="img-fluid">
               </div>
               <ul>
                   <li>
                       <a class="menu_signin" href="">
                           <span>
                               <img src="{{ asset('frontend/assets/images/cart_icon_black.png') }}" alt="cart"
                                   class="img-fluid">
                           </span>
                           <b class="cart_count"></b>
                       </a>
                   </li>

                   <li>
                   
                       <a class="common_btn" href="{{ route('login') }}">Sign in</a>
                  
                   
                        <a class="common_btn" href="">Dashboard</a>
                 
                        <a class="common_btn" href="">Dashboard</a>
                  
                   </li>
               </ul>
           </div>

       </div>
   </nav>
   <div class="wsus__menu_3_search_area">
       <form action="">
           <input type="text" placeholder="Search School, Online....." name="search">
           <button class="common_btn" type="submit">Search</button>
           <span class="close_search"><i class="far fa-times"></i></span>
       </form>
   </div>
   <!--===========================
        MAIN MENU 3 END
    ============================-->


   <!--============================
        MOBILE MENU START
    ==============================-->
   <div class="mobile_menu_area">
       <div class="mobile_menu_area_top">
           <a class="mobile_menu_logo" href="">
               <img src="" alt="">
           </a>
           <div class="mobile_menu_icon d-block d-lg-none" data-bs-toggle="offcanvas"
               data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
               <span class="mobile_menu_icon"><i class="far fa-stream menu_icon_bar"></i></span>
           </div>
       </div>

       <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                   class="fal fa-times"></i></button>
           <div class="offcanvas-body">

               <ul class="mobile_menu_header d-flex flex-wrap">
                   <li><a href=""><i class="far fa-shopping-basket"></i> <span class="cart_count"></span></a>
                   </li>
                   <li><a href=""><i class="far fa-user"></i></a></li>
               </ul>

               <form class="mobile_menu_search" action="">
                   <input type="text" placeholder="Search" name="search">
                   <button type="submit"><i class="far fa-search"></i></button>
               </form>

               <div class="mobile_menu_item_area">
                   <nav>
                       <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                               data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                               aria-selected="true">menu</button>
                           <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                               data-bs-target="#nav-profile" type="button" role="tab"
                               aria-controls="nav-profile" aria-selected="false">Categories</button>
                       </div>
                   </nav>
                   <div class="tab-content" id="nav-tabContent">
                       <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                           aria-labelledby="nav-home-tab" tabindex="0">
                           <ul class="main_mobile_menu">
                            <li class="nav-item">
                                <a class="nav-link active" href="">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Blogs</a>
                            </li>
             
                            <li class="nav-item">
                                <a class="nav-link" href="">contact us</a>
                            </li>

                                <li class="nav-item">
                                    <a class="nav-link" href=""></a>
                                </li>
                          
                           </ul>
                       </div>
                       <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                           tabindex="0">
                           <ul class="main_mobile_menu">
                    
                               <li class="mobile_dropdown">
                                   <a href="javascript:;">
                                       <span>
                                           <img src="" alt="Category"
                                               class="img-fluid">
                                       </span>
                                   
                                   </a>
                                   
                                   <ul class="inner_menu">
                                   
                                       <li><a href=""></a></li>
                                    
                                      
                                   </ul>
                           
                               </li>
                       
                          

                               {{-- @foreach ($categories as $category)
                                   <li class="mobile_dropdown">
                                       <a href="javascript:;">
                                           <span>
                                               <img src="{{ asset($category->image) }}" alt="Category"
                                                   class="img-fluid">
                                           </span>
                                           {{ $category->name }}
                                       </a>
                                       @if ($category->subCategories->count() > 0)
                                           <ul class="category_sub_menu">
                                               @foreach ($category->subCategories as $subCategory)
                                                   <li><a
                                                           href="{{ route('courses.index', ['category' => $subCategory->id]) }}">{{ $subCategory->name }}</a>
                                                   </li>
                                               @endforeach

                                           </ul>
                                       @endif
                                   </li>
                               @endforeach --}}




                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--============================
        MOBILE MENU END
    ==============================-->
