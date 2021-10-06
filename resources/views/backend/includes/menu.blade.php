    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ route('dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">E-commerce Functionality</label>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">All Brands</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('brand.create') }}" class="sub-link">Add New Brand</a></li>
            <li class="sub-item"><a href="{{ route('brand.manage') }}" class="sub-link">Manage All Brands</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category Listing</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('category.create') }}" class="sub-link">Add New Category</a></li>
            <li class="sub-item"><a href="{{ route('category.manage') }}" class="sub-link">Manage All Categories</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Product Listing</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('product.create') }}" class="sub-link">Add New Product</a></li>
            <li class="sub-item"><a href="{{ route('product.manage') }}" class="sub-link">Manage All Product</a></li>
          </ul>
        </li>

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Location / Area Manager</label>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Division</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('division.create') }}" class="sub-link">Add New Division</a></li>
            <li class="sub-item"><a href="{{ route('division.manage') }}" class="sub-link">Manage All Division</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">District</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('district.create') }}" class="sub-link">Add New District</a></li>
            <li class="sub-item"><a href="{{ route('district.manage') }}" class="sub-link">Manage All District</a></li>
          </ul>
        </li>


      </ul><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->