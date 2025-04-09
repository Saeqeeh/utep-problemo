<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <title>Document</title>
</head>

<body>

    <!-- sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <img src="{{ URL::asset('image/Cashier Apps Logo1.png') }}" alt="">
            <h2>Seventeen Store</h2>
        </div>
        <ul class="sidebar-links">
            <h4><span>Main Menu</span>
                <div class="menu-separator"></div>
            </h4>
            <li><a href="/dashboard"><span class="material-symbols-outlined"> dashboard </span>Dashboard</a></li>
            <li><a href="history"><span class="material-symbols-outlined"> overview </span>History</a></li>
            <li><a href="penjualan"><span class="material-symbols-outlined"> shopping_cart </span>Penjualan</a></li>
            <h4><span>General</span>
                <div class="menu-separator"></div>
            </h4>
            <li><a href="produk"><span class="material-symbols-outlined"> inventory_2 </span>Produk</a></li>
            <li><a href="barang"><span class="material-symbols-outlined"> category </span>Barang</a></li>
            <li><a href="laporan"><span class="material-symbols-outlined"> folder </span>Laporan</a></li>
            <h4><span>Setting</span>
                <div class="menu-separator"></div>
            </h4>
            <li><a href="{{ route('logout') }}"><span class="material-symbols-outlined"> logout </span>Logout</a></li>
        </ul>
    </aside>
    <!-- sidebar -->

</body>

</html>