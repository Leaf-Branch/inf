<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{$title ?? ""}}I need a friend.</title>
    <meta name="description" content="Login - I need a friend.">
    <meta name="author" content="kyrozyn">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="I need a friend.">
    <meta property="og:site_name" content="I need a friend.">
    <meta property="og:description" content="I need a friend.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/favicon.ico">
    <link rel="icon" type="image/png" sizes="192x192" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/logo-ori.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://raw.githubusercontent.com/Kyrozyn/ineedfriend/master/assets/img/logo-ori.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/xdream.min.css')}}">
    <!-- END Stylesheets -->
    @livewireStyles
    @yield('css')
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-dark  main-content-boxed bg-xdream-darker">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-primary">
            <div class="content-header">
                <div class="font-size-lg font-w300 text-white">
                    <i class="fa fa-users mr-1"></i> People
                </div>

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ml-auto text-white" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <div class="block pull-x">
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase font-size-sm font-w700">Online</span>
                </div>
                <div class="block-content">
                    <ul class="nav-items">
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Andrea Gardner</div>
                                    <div class="font-size-sm text-muted">Photographer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Jesse Fisher</div>
                                    <div class="font-w400 font-size-sm text-muted">Web Designer</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="media py-2" href="javascript:void(0)">
                                <div class="mx-3 overlay-container">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                                    <span class="overlay-item item item-tiny item-circle border border-2x border-white bg-success"></span>
                                </div>
                                <div class="media-body">
                                    <div class="font-w600">Amber Harvey</div>
                                    <div class="font-w400 font-size-sm text-muted">Web Developer</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-primary">
            <!-- Logo -->
            <a class="text-dual d-inline-block" href="index.html">
                <i class="fa fa-coffee"></i>
            </a>
            <!-- END Logo -->
            Inf's Café
            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling Mobile-->
        <div class="js-sidebar-scroll">
            <!-- User Info -->
            <div class="smini-hidden">
                <div class="content-side content-side-full bg-black-10 d-flex align-items-center">
                    <a class="img-link d-inline-block" href="javascript:void(0)">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar8.jpg" alt="">
                    </a>
                    <div class="ml-3">
                        <a class="font-w600 text-dual" href="javascript:void(0)">Stella Smith</a>
                        <div class="font-size-sm font-italic text-dual">Developer</div>
                    </div>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon far fa-user-circle"></i>
                            <span class="nav-main-link-name">My Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="btn btn-dual mr-2" href="index.html">
                    <i class="fa fa-coffee"></i>
                </a>
                <!-- END Logo -->
                Inf's Café
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- User Profile -->
                <a class="btn btn-dual d-none d-sm-inline-block"  href="javascript:void(0)">
                    <i class="fa fa-user-circle mr-1"></i>
                </a>
                <!-- END User Profile -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="badge badge-secondary badge-pill">6</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">John Doe send you a friend request!</div>
                                        <div class="text-muted font-italic">6 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Elisa Doe send you a friend request!</div>
                                        <div class="text-muted font-italic">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Backup completed successfully!</div>
                                        <div class="text-muted font-italic">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">George Smith send you a friend request!</div>
                                        <div class="text-muted font-italic">3 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                        <div class="text-muted font-italic">1 day ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-envelope-open text-info"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You have a new message!</div>
                                        <div class="text-muted font-italic">2 days ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-fw fa-comment-alt"></i>
                </button>
                <!-- END Toggle Side Overlay -->

                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->


        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content content-full">
            <div class="row gutters-tiny">
                <div class="col-lg-3 d-none d-lg-block">
                    <!-- User and Main Navigation XL  -->
                    <div class="block block-bordered block-rounded">
                        <div class="block-content">
                            <div class="bg-body rounded p-2 mb-3 d-flex align-items-center">
                                <a class="img-link d-inline-block" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                </a>
                                <div class="ml-3">
                                    <a class="font-w600" href="javascript:void(0)">Kyro#<small>2217</small></a>
                                    <div class="font-size-sm"><i class="fa fa-star"></i> 0</div>
                                </div>
                            </div>
                            <ul class="nav-main">
                                <li class="nav-main-heading">Home</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link active" href="db_social_compact.html">
                                        <i class="nav-main-link-icon far fa-newspaper"></i>
                                        <span class="nav-main-link-name">Café</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END User and Main Navigation -->
                </div>
                <div class="col-md-8 col-lg-9">
                    <!-- Post Update -->
                    <div class="block block-bordered block-rounded">
                        <div class="block-content block-content-full bg-xdream-dark-op">
                            <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                                <div class="input-group">
                                    <textarea type="text" class="form-control form-control-alt" placeholder="What’s happening?"></textarea>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary border-0">
                                            <i class="fa fa-pencil-alt mr-1"></i> Post
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Post Update -->

                    <!-- Timeline -->
                    <!-- Update #1 -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default bg-xdream-lighter">
                            <div>
                                <a class="img-link" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar2.jpg" alt="">
                                </a>
                                <a class="font-w600" href="javascript:void(0)">Marie Duncan</a>
                                <span class="font-size-sm text-muted">3 hrs ago</span>
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>
                                How to get started your HTML page:
                            </p>
                            <pre><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                            <hr>
                            <ul class="nav nav-pills font-size-sm push">
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up mr-1"></i> Like
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-comment-alt mr-1"></i> Comment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="font-size-sm">
                                <i class="fa fa-thumbs-up text-info"></i>
                                <i class="fa fa-heart text-danger"></i>
                                <i class="far fa-smile text-warning mr-1"></i>
                                <a class="font-w600" href="javascript:void(0)">Ryan Flores</a>,
                                <a class="font-w600" href="javascript:void(0)">Carol White</a>,
                                <a class="font-w600" href="javascript:void(0)">and 150 others</a>
                            </p>
                            <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                            </form>
                            <div class="pt-3 font-size-sm">
                                <div class="media">
                                    <a class="img-link mr-2" href="javascript:void(0)">
                                        <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar7.jpg" alt="">
                                    </a>
                                    <div class="media-body">
                                        <p class="mb-1">
                                            <a class="font-w600" href="javascript:void(0)">Carol Ray</a>
                                            Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                        </p>
                                        <p>
                                            <a href="javascript:void(0)" class="mr-1">Like</a>
                                            <a href="javascript:void(0)">Comment</a>
                                        </p>
                                        <div class="media">
                                            <a class="img-link mr-2" href="javascript:void(0)">
                                                <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                                            </a>
                                            <div class="media-body">
                                                <p class="mb-1">
                                                    <a class="font-w600" href="javascript:void(0)">Jose Mills</a>
                                                    Odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </p>
                                                <p>
                                                    <a href="javascript:void(0)" class="mr-1">Like</a>
                                                    <a href="javascript:void(0)">Comment</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Update #1 -->

                    <!-- Update #2 -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <div>
                                <a class="img-link" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar11.jpg" alt="">
                                </a>
                                <a class="font-w600" href="javascript:void(0)">Wayne Garcia</a>
                                <span class="font-size-sm text-muted">5 hrs ago</span>
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <hr>
                            <ul class="nav nav-pills font-size-sm push">
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up mr-1"></i> Like
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-comment-alt mr-1"></i> Comment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="font-size-sm">
                                <i class="fa fa-heart text-danger"></i>
                                <a class="font-w600" href="javascript:void(0)">Jack Estrada</a>,
                                <a class="font-w600" href="javascript:void(0)">Helen Jacobs</a>,
                                <a class="font-w600" href="javascript:void(0)">and 36 others</a>
                            </p>
                            <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                            </form>
                        </div>
                    </div>
                    <!-- END Update #2 -->

                    <!-- Update #3 -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <div>
                                <a class="img-link" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar2.jpg" alt="">
                                </a>
                                <a class="font-w600" href="javascript:void(0)">Megan Fuller</a>
                                <span class="font-size-sm text-muted">8 hrs ago</span>
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>
                                Our city escape continues..
                            </p>
                            <div class="row gutters-tiny js-gallery img-fluid-100">
                                <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                <div class="col-4">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo11@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo11.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo12@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo12.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo13@2x.jpg">
                                        <img class="img-fluid" src="assets/media/photos/photo13.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <ul class="nav nav-pills font-size-sm push">
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up mr-1"></i> Like
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-comment-alt mr-1"></i> Comment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="font-size-sm">
                                <i class="fa fa-thumbs-up text-info"></i>
                                <i class="fa fa-heart text-danger"></i>
                                <i class="far fa-smile text-warning mr-1"></i>
                                <a class="font-w600" href="javascript:void(0)">Susan Day</a>,
                                <a class="font-w600" href="javascript:void(0)">Jack Greene</a>,
                                <a class="font-w600" href="javascript:void(0)">and 43 others</a>
                            </p>
                            <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                            </form>
                        </div>
                    </div>
                    <!-- END Update #3 -->

                    <!-- Update #4 -->
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <div>
                                <a class="img-link" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
                                </a>
                                <a class="font-w600" href="javascript:void(0)">Barbara Scott</a>
                                <span class="font-size-sm text-muted">15 hrs ago</span>
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Hide similar posts
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="far fa-fw fa-thumbs-down text-warning mr-1"></i> Stop following this user
                                        </a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                            <hr>
                            <ul class="nav nav-pills font-size-sm push">
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up mr-1"></i> Like
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-comment-alt mr-1"></i> Comment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="font-size-sm">
                                <i class="fa fa-thumbs-up text-info"></i>
                                <a class="font-w600" href="javascript:void(0)">Danielle Jones</a>,
                                <a class="font-w600" href="javascript:void(0)">Carl Wells</a>,
                                <a class="font-w600" href="javascript:void(0)">and 5 others</a>
                            </p>
                            <form action="db_social_compact.html" method="POST" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt" placeholder="Write a comment..">
                            </form>
                        </div>
                    </div>
                    <!-- END Update #4 -->
                    <!-- END Timeline -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="https://1.envato.market/r6y" target="_blank">Dashmix 3.2</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Dashmix JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/js.cookie.min.js
-->
<script src="assets/js/dashmix.core.min.js"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/dashmix.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/highlightjs/highlight.pack.min.js"></script>
<script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Page JS Helpers (Highlight.js + Magnific Popup Plugins) -->
<script>jQuery(function(){Dashmix.helpers(['highlightjs', 'magnific-popup']);});</script>
</body>
</html>
