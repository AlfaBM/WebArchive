<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SINAU </title>
    <link rel="shortcut icon" type="image/png" href="/image/logo2.png" />
    <link rel="stylesheet" href="/css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
</head>
<style>
    .user{
        font-size: 50px;
        text-align: center;
    }

    .dash {
        background-color: #9BA4B5;
    }
</style>
<body>
    <!--Awal Sidebar-->
    <div class="sidebar">
        <div class="logo-details">
          <img src="/image/logo2.png" alt="logo">
          <span class="logo_name">SINAU</span>
        </div>
        <ul class="nav-link">
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
            <li class="log_out">
                <form class="nav-link" action="/logout" method="POST">
                    @csrf
                    <div>
                        <button class="btn btn-outline-light btn-md text-white" type="submit">
                            <i class='bx bx-log-out'></i>
                            <span class="logout">Logout</span>
                        </button>
                    </div>
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
                   @yield('title')
                </span>
            </div>
            @if (request()->routeIs('content.index', 'content.create'))
                <form action="{{ route('content.index') }}" method="POST">
                    @csrf
                    @method('GET')
                    <div class="search-box d-flex">
                        <input type="text" placeholder="Search Judul..." name="search" value="{{ request('search') }}">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search fa-sm"></i></button>   
                    </div>
                </form>
            @endif
            {{-- <div class="profile-details">
                <span class="admin_name">Selamat Datang {{$profile->nama_staff}}</span>
            </div> --}}
        </nav>

        @yield('content')

    </section>
    <!--Akhir Admin Section-->

    <script src="/js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
