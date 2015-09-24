<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src={{URL::asset('bower_components/webcomponentsjs/webcomponents-lite.min.js')}}></script>
    @include('partials.polymerElements')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vMenu</title>


    <link rel="stylesheet" href={{URL::asset('style/style.css')}}>


    <meta name="description" content="">

    <!-- Place favicon.ico in the `app/` directory -->

    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#43a23b">

    <!-- Tile color for Win8 -->
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PSK">
    <link rel="icon" sizes="192x192" href={{  URL::asset('images/touch/chrome-touch-icon-192x192.jpg') }}>

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="vMenu">
    <link rel="apple-touch-icon" href= {{  URL::asset('images/touch/apple-touch-icon.jpg') }}>

    <!-- Tile icon for Win8 (144x144) -->
    <meta name="msapplication-TileImage" content= {{  URL::asset('images/touch/ms-icon-144x144.jpg') }}>

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href={{URL::asset('style/main.css')}}>

</head>
<body unresolved class="fullbleed layout vertical">
<span id="browser-sync-binding"></span>
<template is="dom-bind" id="app">

    <paper-drawer-panel id="paperDrawerPanel">
        <!-- Drawer Scroll Header Panel -->
        @include('partials.navUser')
        <paper-scroll-header-panel main condenses keep-condensed-header>

            <!-- Main Toolbar -->
            <paper-toolbar id="mainToolbar" class="tall">
                <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>
                <span class="flex"></span>

                <!-- Toolbar icons -->
                <a  id = "my-button" href={{URL::asset('/')}} >
                    <paper-icon-button icon="refresh" }></paper-icon-button>
                </a>

                <!-- Application name -->
                <div class="middle middle-container center horizontal layout">
                    <div class="app-name">Holiday Inn</div>
                </div>

                <!-- Application sub title -->
                <div class="bottom bottom-container center horizontal layout">
                    <div class="bottom-title paper-font-subhead">vMenu</div>
                </div>

            </paper-toolbar>

            <!-- Main Content -->
            <div class="content">
                @yield('content')
            </div>
        </paper-scroll-header-panel>
    </paper-drawer-panel>
</template>

<script src={{URL::asset('scripts/app.js')}}></script>
</body>

</html>