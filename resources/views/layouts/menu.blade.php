<div class="page-wrapper chiller-theme toggled">

   <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
      <center>
       <img src="{{asset('img_system/logo_icon.png')}}" width="30px" alt="">
       <div style="display: inline; font-size: 15px;"> A-Best Company Limited</div>
     </center>
        <!-- <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>{{ Auth::user()->name }}</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>

        </div> -->
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
           <span style="font-size:20px; margin-left:10px;">General</span>
          </li>
          <!-- <li>
            <a href="{{ route('ProductMatch.index') }}">
              <i class="fa fa-tachometer-alt"></i>
              <span>Code Map</span>
            </a>
          </li>          
          <li>
            <a href="#">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-life-ring"></i>
              <span>About</span>
            </a>
          </li> -->


          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Map PLU to SKU</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('ProductMatch.index') }}">List PLU to SKU
                    <!-- <span class="badge badge-pill badge-success">Pro</span> -->
                  </a>
                </li>
                <li>
                  <a href="{{ route('ProductMatch.create') }}">Mapping Code</a>
                </li>
                <li>
                <a href="{{ route('ProductMatch2.index2') }}">Edit PLU To SKU</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-database"></i>
              <span>Order To Store </span>
              <!-- <span class="badge badge-pill badge-warning">1</span> -->
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('Order.index') }}">List Order All</a>
                </li>
                <li>
                  <a href="{{ route('Order.create') }}">Create Order</a>
                </li>             
              </ul>
            </div>
          </li>

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-database"></i>
              <span>Products</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('Product.index') }}">Product Report</a>
                </li>
                <li>
                  <a href="{{ route('Product.create') }}">Add Product</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-database"></i>
              <span>Partners</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('SourPartner.index') }}">Partners Report</a>
                </li>
                <li>
                  <a href="{{ route('SourPartner.create') }}">Add Partners</a>
                </li>
              </ul>
            </div>
          </li> -->

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div> -->
      <!-- sidebar-menu  -->
    </div>

  </nav>
</div>
