<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINAU | ADMIN</title>
    <link rel="shortcut icon" type="image/png" href="/image/logo2.png" />
    <link rel="stylesheet" href="/css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>

<body>
    <!--Awal Sidebar-->
    <div class="sidebar">
        <div class="logo-details">
            <img src="/image/logo2.png" alt="logo">
            <span class="logo_name">ADMIN SINAU</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/admin" class="{{ request()->Is('admin*') ? 'active' : '' }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/content" class="{{ request()->routeIs('content.index', 'content.create') ? 'active' : '' }}">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Content</span>
                </a>
            </li>
            {{-- <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Team</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messages</span>
                </a>
            </li> --}}
            <li class="log_out">
                {{-- <a href="/logout">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a> --}}
                <form class="nav-link"action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <!--Akhir Sidebar-->

    <!--Admin Section-->
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">
                    @if (request()->routeIs('content.index', 'content.create'))
                        Content
                    @else
                        Dashboard
                    @endif
                </span>
            </div>
            @if (request()->routeIs('content.index', 'content.create'))
                <form action="{{ route('content.index') }}" method="POST">
                    @csrf
                    @method('GET')
                    <div class="search-box d-flex">
                        <input type="text" placeholder="Search Judul..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search fa-sm"></i></button>
                        {{-- <i class='bx bx-search'></i> --}}
                        {{-- <button class="btn btn-outline-dark" type="submit">Search</button> --}}
                    </div>
                </form>
            @endif
            <div class="profile-details">
                <img src="/image/profile/profile-ilyas.jpeg" alt="profil">
                <span class="admin_name">Ilyasa Nanda Rahmadianto</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        {{-- @include('test') --}}
        @yield('section')

    </section>
    <!--Akhir Admin Section-->

    <script src="/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
