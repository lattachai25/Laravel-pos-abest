<div class="page-wrapper chiller-theme toggled">

   <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
      <center>
       <img src="{{asset('img_system/logo_icon.png')}}" width="30px" alt="">
       <div style="display: inline; font-size: 15px;"> A-Best Company Limited</div>
     </center>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
           <span style="font-size:20px; margin-left:10px;">General</span>
          </li>
      

          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-barcode"></i>
              <span>SKU</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                <a href="{{ route('sku.create') }}">Add SKU</a>
                </li>
                <li>
                <a href="{{ route('sku.index') }}">List SKU</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-barcode"></i>
              <span>PLU</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
              <li>
                <a href="{{ route('plu.create') }}">Add PLU</a>
                </li>
                <li>
                <a href="{{ route('plu.index') }}">List PLU</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-exchange"></i>
              <span>Mapping Code</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <!-- <a href="{{ route('mappingcode.index') }}">List PLU to SKU -->
                  </a>
                </li>
                <li>
                  <a href="{{ route('mappingcode.create') }}">Mapping Code</a>
                </li>
                <li>
                <!-- <a href="{{ route('mappingcode_edit') }}">Edit PLU And SKU</a> -->
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="{{ route('order.create') }}">
              <i class="fa fa-square"></i>
              <span>Product To Branche </span>
            </a>
          </li>
          <li>
            <a href="{{ route('order.index') }}">
              <i class="fa fa-square"></i>
              <span>Branche Order</span>
            </a>
          </li>


          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Branche Order</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('order.index') }}">Order</a>
                </li>

              </ul>
            </div>
          </li> -->
    </div>

  </nav>
</div>
