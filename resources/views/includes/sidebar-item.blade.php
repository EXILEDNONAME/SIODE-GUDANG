<li class="menu-section">
  <h4 class="menu-text"> Main </h4>
  <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
</li>

<li class="menu-item {{ (request()->is('dashboard/catalogs*')) ? 'menu-item-open' : '' }}">
  <a href="/dashboard/catalogs" class="menu-link">
    <i class="menu-icon fas fa-box-open"></i>
    <span class="menu-text"> Catalogs </span>
  </a>
</li>

<li class="menu-item menu-item-submenu {{ (request()->is('dashboard/item*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link menu-toggle">
    <i class="menu-icon fas fa-shield-alt"></i>
    <span class="menu-text"> Items </span>
    <i class="menu-arrow"></i>
  </a>
  <div class="menu-submenu">
    <i class="menu-arrow"></i>
    <ul class="menu-subnav">
      <li class="menu-item {{ (request()->is('dashboard/item-incomings*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/item-incomings" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Incoming </span>
        </a>
      </li>
        <li class="menu-item {{ (request()->is('dashboard/item-outcomings*')) ? 'menu-item-active' : '' }}">
        <a href="/dashboard/management/users" class="menu-link">
          <i class="menu-bullet menu-bullet-line"><span></span></i>
          <span class="menu-text"> Outcoming </span>
        </a>
      </li>
    </ul>
  </div>
</li>

<li class="menu-item {{ (request()->is('dashboard/stocks*')) ? 'menu-item-open' : '' }}">
  <a href="/dashboard/stocks" class="menu-link">
    <i class="menu-icon fas fa-box-open"></i>
    <span class="menu-text"> Stocks </span>
  </a>
</li>

<li class="menu-item {{ (request()->is('dashboard/suppliers*')) ? 'menu-item-open' : '' }}">
  <a href="/dashboard/suppliers" class="menu-link">
    <i class="menu-icon fas fa-boxes"></i>
    <span class="menu-text"> Suppliers </span>
  </a>
</li>

<li class="menu-item {{ (request()->is('dashboard/transactions*')) ? 'menu-item-open' : '' }}">
  <a href="javascript:;" class="menu-link">
    <i class="menu-icon fas fa-exchange-alt"></i>
    <span class="menu-text"> Transactions </span>
  </a>
</li>
