<paper-scroll-header-panel drawer fixed>
    <paper-toolbar id="drawerToolbar">
        <span class="paper-font-title">Menu</span>
    </paper-toolbar>

    <paper-menu class="list" attr-for-selected="data-route"  on-iron-select="onMenuSelect">
        <a data-route="home" href={{ url('/') }}>
            <iron-icon icon="home"></iron-icon>
            <span>Home</span>
        </a>

        <a data-route="users" href="/users">
            <iron-icon icon="info"></iron-icon>
            <span>User</span>
        </a>

        <a data-route="contact" href="/contact">
            <iron-icon icon="mail"></iron-icon>
            <span>Contact</span>
        </a>

        <a data-route="logout" href={{ url('/auth/logout') }}>
            <iron-icon icon="warning"></iron-icon>
            <span>Log-out</span>
        </a>
    </paper-menu>

</paper-scroll-header-panel>