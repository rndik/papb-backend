<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-700">Toko Besi RAS</h1>
            <p class="text-gray-500 mt-2">Dashboard Admin - Kelola dan pantau aktivitas toko Anda.</p>
        </div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>
</div>

<div class="bg-gray-100 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Statistik Penjualan -->
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700">Penjualan Bulanan</h2>
        <p class="text-2xl font-bold text-indigo-600 mt-4">Rp 25,000,000</p>
        <p class="text-sm text-gray-500 mt-2">Diperbarui: 28 November 2024</p>
    </div>

    <!-- Total Produk -->
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700">Total Produk</h2>
        <p class="text-2xl font-bold text-green-600 mt-4">120 Item</p>
        <p class="text-sm text-gray-500 mt-2">Tersedia di stok.</p>
    </div>

    <!-- Transaksi Hari Ini -->
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700">Transaksi Hari Ini</h2>
        <p class="text-2xl font-bold text-red-600 mt-4">Rp 5,000,000</p>
        <p class="text-sm text-gray-500 mt-2">Total penjualan hari ini.</p>
    </div>
</div>

<div class="bg-white mt-8 p-6 shadow rounded-lg">
    <h2 class="text-xl font-bold text-gray-700 mb-4">Daftar Transaksi Terbaru</h2>
    <table class="w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 text-left">
                <th class="py-2 px-4">Tanggal</th>
                <th class="py-2 px-4">Produk</th>
                <th class="py-2 px-4">Jumlah</th>
                <th class="py-2 px-4">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="py-2 px-4">28 Nov 2024</td>
                <td class="py-2 px-4">Besi Beton</td>
                <td class="py-2 px-4">20 Unit</td>
                <td class="py-2 px-4">Rp 2,000,000</td>
            </tr>
            <tr class="border-b">
                <td class="py-2 px-4">28 Nov 2024</td>
                <td class="py-2 px-4">Plat Besi</td>
                <td class="py-2 px-4">10 Unit</td>
                <td class="py-2 px-4">Rp 1,500,000</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
    <!-- Manajemen Produk -->
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Manajemen Produk</h2>
        <button class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Tambah Produk</button>
        <button class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 ml-4">Lihat Stok</button>
    </div>

    <!-- Laporan -->
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Laporan</h2>
        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Unduh Laporan</button>
    </div>
</div>
