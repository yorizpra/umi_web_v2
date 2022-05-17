<!-- <button class="dropdown-btn nav-link">
    <p><i class="fa fa-caret-down"></i> Master Data </p>
</button>

<div class="dropdown-container">
    
</div> -->


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Master Pengguna</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterProductCategories.index') }}"
       class="nav-link {{ Request::is('masterProductCategories*') ? 'active' : '' }}">
        <p>Master Kategori Produk</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterBusinessCategories.index') }}"
       class="nav-link {{ Request::is('masterBusinessCategories*') ? 'active' : '' }}">
        <p>Master Kategori Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterPrivileges.index') }}"
       class="nav-link {{ Request::is('masterPrivileges*') ? 'active' : '' }}">
        <p>Master Akses Pengguna</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterUnits.index') }}"
       class="nav-link {{ Request::is('masterUnits*') ? 'active' : '' }}">
        <p>Master Satuan</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterStatusUsers.index') }}"
       class="nav-link {{ Request::is('masterStatusUsers*') ? 'active' : '' }}">
        <p>Master Status Pengguna</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterStatusBusinesses.index') }}"
       class="nav-link {{ Request::is('masterStatusBusinesses*') ? 'active' : '' }}">
        <p>Master Status Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterProvinces.index') }}"
       class="nav-link {{ Request::is('masterProvinces*') ? 'active' : '' }}">
        <p>Master Provinsi</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterDeliveryServices.index') }}"
       class="nav-link {{ Request::is('masterDeliveryServices*') ? 'active' : '' }}">
        <p>Master Jasa Pengiriman</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('masterPaymentMethods.index') }}"
       class="nav-link {{ Request::is('masterPaymentMethods*') ? 'active' : '' }}">
        <p>Master Metode Pembayaran</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('masterTransactionCategories.index') }}"
       class="nav-link {{ Request::is('masterTransactionCategories*') ? 'active' : '' }}">
        <p>Master Kategori Transaksi</p>
    </a>
</li>





<li class="nav-item">
    <a href="{{ route('businesses.index') }}"
       class="nav-link {{ Request::is('businesses*') ? 'active' : '' }}">
        <p>Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('businessFiles.index') }}"
       class="nav-link {{ Request::is('businessFiles*') ? 'active' : '' }}">
        <p>File Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('businessCategories.index') }}"
       class="nav-link {{ Request::is('businessCategories*') ? 'active' : '' }}">
        <p>Kategori Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('master_cities.index') }}"
       class="nav-link {{ Request::is('master_cities*') ? 'active' : '' }}">
        <p>Kota</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('subDistricts.index') }}"
       class="nav-link {{ Request::is('subDistricts*') ? 'active' : '' }}">
        <p>Kecamatan</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('addresses.index') }}"
       class="nav-link {{ Request::is('addresses*') ? 'active' : '' }}">
        <p>Alamat</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Produk</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productCategories.index') }}"
       class="nav-link {{ Request::is('productCategories*') ? 'active' : '' }}">
        <p>Kategori Produk</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('openHours.index') }}"
       class="nav-link {{ Request::is('openHours*') ? 'active' : '' }}">
        <p>Jam Buka</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('businessDeliveryServices.index') }}"
       class="nav-link {{ Request::is('businessDeliveryServices*') ? 'active' : '' }}">
        <p>Jasa Pengiriman</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shippingCostVariables.index') }}"
       class="nav-link {{ Request::is('shippingCostVariables*') ? 'active' : '' }}">
        <p>Variabel Biaya Pengiriman</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shippingUseds.index') }}"
       class="nav-link {{ Request::is('shippingUseds*') ? 'active' : '' }}">
        <p>Pengiriman yang digunakan</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('discounts.index') }}"
       class="nav-link {{ Request::is('discounts*') ? 'active' : '' }}">
        <p>Diskon</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('salesDeliveryServices.index') }}"
       class="nav-link {{ Request::is('salesDeliveryServices*') ? 'active' : '' }}">
        <p>Layanan Pengiriman</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productFiles.index') }}"
       class="nav-link {{ Request::is('productFiles*') ? 'active' : '' }}">
        <p>File Produk</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('businessPaymentMethods.index') }}"
       class="nav-link {{ Request::is('businessPaymentMethods*') ? 'active' : '' }}">
        <p>Metode Pembayaran Usaha</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('salesTransactions.index') }}"
       class="nav-link {{ Request::is('salesTransactions*') ? 'active' : '' }}">
        <p>Transaksi Penjualan</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ratings.index') }}"
       class="nav-link {{ Request::is('ratings*') ? 'active' : '' }}">
        <p>Rating</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactionStatuses.index') }}"
       class="nav-link {{ Request::is('transactionStatuses*') ? 'active' : '' }}">
        <p>Status Transaksi</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactionProducts.index') }}"
       class="nav-link {{ Request::is('transactionProducts*') ? 'active' : '' }}">
        <p>Transaksi Produk</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('balances.index') }}"
       class="nav-link {{ Request::is('balances*') ? 'active' : '' }}">
        <p>Saldo</p>
    </a>
</li>


