<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            {{-- @can('management_access') --}}
            <li class="{{ request()->is('produk') || request()->is('produk/*') ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}">
                    <i
                        class="{{ request()->is('produk') || request()->is('produk/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt' }}"></i><span
                        class="menu-title" data-i18n="Produk">Produk</span>
                </a>
            </li>
            <li class="{{ request()->is('testimoni') || request()->is('testimoni/*') ? 'active' : '' }}">
                <a href="{{ route('testimoni.index') }}">
                    <i
                        class="{{ request()->is('testimoni') || request()->is('testimoni/*') ? 'bx bx-user-plus bx-flashing' : 'bx bx-user-plus' }}"></i><span
                        class="menu-title" data-i18n="testimoni">Testimoni</span>
                </a>
            </li>
            <li class="{{ request()->is('report') || request()->is('report/*') ? 'active' : '' }}">
                <a href="{{ route('report.index') }}">
                    <i
                        class="{{ request()->is('report') || request()->is('report/*') ? 'bx bx-message-square-dots bx-flashing' : 'bx bx-message-square-dots' }}"></i><span
                        class="menu-title" data-i18n="report">Report</span>
                </a>
            </li>
            {{-- <li class="{{ request()->is('cart') || request()->is('cart/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('cart') || request()->is('cart/*') ? 'bx bx-cart-alt bx-flashing' : 'bx bx-cart-alt' }}"></i><span
                        class="menu-title" data-i18n="Produk">Cart</span>
                </a>
            </li>
            <li class="{{ request()->is('transaction') || request()->is('transaction/*') ? 'active' : '' }}">
                <a href="#">
                    <i
                        class="{{ request()->is('transaction') || request()->is('transaction/*') ? 'bx bx-cart-alt bx-flashing' : 'bx bx-cart-alt' }}"></i><span
                        class="menu-title" data-i18n="Produk">Transaksi</span>
                </a>
            </li> --}}
            {{-- @endcan --}}


        </ul>
    </div>
</div>

<!-- END: Main Menu-->
