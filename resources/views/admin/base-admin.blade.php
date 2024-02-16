<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/icon/icon-vps.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin/base-admin.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Document</title>
</head>

<body>
    <main>
        <div class="sidebar">
            <a href="{{ url('/admin') }}" id="" class="tab">
                <div class="tab-content">
                    <i class="fa-solid fa-bars-progress"></i>
                    <h3>Dashboard</h3>
                </div>
            </a>
            <a href="{{ url('/admin/transaction') }}" id="" class="tab">
                <div class="tab-content">
                    <i class="fa-solid fa-wallet"></i>
                    <h3>Transaksi</h3>
                </div>
            </a>
            <a href="{{ url('/admin/type') }}" id="" class="tab">
                <div class="tab-content">
                    <i class="fa-solid fa-file"></i>
                    <h3>Tipe</h3>
                </div>
            </a>
            <a href="{{ url('/admin/room') }}" class="tab">
                <div class="tab-content">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <h3>Ruangan</h3>
                </div>
            </a>
            <a href="" class="tab" id="">
                <div class="tab-content">
                    <i class="fa-solid fa-calendar"></i>
                    <h3>Transaksi</h3>
                </div>
            </a>
            <form action="{{ route('logout') }}" method="POST">
                <button type="submit" class="tab" id="tab">
                    <div class="tab-content">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <h3>Logout</h3>
                    </div>
                </button>
                @csrf
            </form>
        </div>

        {{-- Content --}}

        @yield('admin-content')
</body>

</html>