<!-- Sidebar Menu -->

<style>
  .nv a p {
    font-size: 16px;
    color: white;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
  }

  .material-symbols-outlined {
    color: white;
  }

  .right fas fa-angle-left {
    color: white;
  }

  i {
    color: white;
  }
</style>
<nav class="mt-2" style="color: white;">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Home
        </p>
      </a>
    </li>
    <li class="nav-item menu-open">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <span class="material-symbols-outlined">
              overview_key
            </span>
            <p>Performance Overview</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/revenue" class="nav-link">
            <span class="material-symbols-outlined">
              payments
            </span>
            <p>Revenue</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/orderstatus" class="nav-link ">
            <span class="material-symbols-outlined">
              location_home
            </span>
            <p>Order Status</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="/order" class="nav-link">
        <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
        <span class="material-symbols-outlined">
          shopping_cart
        </span>
        <p>
          Order
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/order" class="nav-link">
            <span class="material-symbols-outlined">
              add
            </span>
            <p>Create Shipment</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/all-order" class="nav-link">
            <span class="material-symbols-outlined">
              check_box_outline_blank
            </span>
            <p>All Shipment</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/orders-store-orders" class="nav-link">
            <span class="material-symbols-outlined">
              local_convenience_store
            </span>
            <p>Store order</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/orders-channel-orders" class="nav-link">
            <span class="material-symbols-outlined">
              add_shopping_cart
            </span>
            <p>Channel order</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-wallet"></i>
        <p>
          Wallet
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link">
            <span class="material-symbols-outlined">
              account_balance_wallet
            </span>
            <p>Recharge</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="material-symbols-outlined">
              update
            </span>
            <p>Deducation History</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <span class="material-symbols-outlined">
              history_toggle_off
            </span>
            <p>Transaction History</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tools"></i>
        <p>
          Tools
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="/toolcalculator" class="nav-link">
            <span class="material-symbols-outlined">
              calculate
            </span>
            <p>Shipment Calculator</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/serviceable" class="nav-link">
            <span class="material-symbols-outlined">
              rss_feed
            </span>
            <p>Serviceable Pincode</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="fa-sharp fa-solid fa-arrow-up-right-dots"></i>
        <p> Growth
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="far   nav-icon"></i>
            <p>Parsal Connet</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far   nav-icon"></i>
            <p>Parsal Plus</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far   nav-icon"></i>
            <p>Branded-tracking-Page</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far   nav-icon"></i>
            <p>Rush</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-book"></i>
        <p>
          Integration
        </p>
      </a>
    </li>
    <!-- /.sidebar-menu -->
  </ul>
</nav>
