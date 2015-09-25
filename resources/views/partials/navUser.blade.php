<paper-scroll-header-panel drawer fixed>
    <paper-toolbar id="drawerToolbar">
        <span class="paper-font-title">Menu</span>
    </paper-toolbar>

    <paper-menu class="list" attr-for-selected="data-route"  on-iron-select="onMenuSelect">
        <a data-route="home" href={{ url('/') }}>
            <iron-icon icon="home"></iron-icon>
            <span>Home</span>
        </a>
        @if(Auth::user()->type > 1)
        <a data-route="users" href={{ url('/dashboard') }}>
            <iron-icon icon="account-circle"></iron-icon>
            <span>{!! Auth::user()->name !!}/Admin</span>
        </a>
        @endif

        <a data-route="admin" href={{ url('/cart') }}>
            <iron-icon icon="shopping-cart"></iron-icon>
            <span>Orders</span>
        </a>

        <a data-route="logout" href={{ url('/auth/logout') }}>
            <iron-icon icon="settings-power"></iron-icon>
            <span>Log-out</span>
        </a>
    </paper-menu>

</paper-scroll-header-panel>