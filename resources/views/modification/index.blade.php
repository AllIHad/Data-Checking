<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Persetujuan</h1>
    <p>DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Persetujuan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jenis Barang</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Status</th>
                            @if(Auth::user()->level === 'pemilik')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Kategori Barang -->
                        @foreach($kategoriBarang as $kBarang)
                        <tr>
                            <td>Kategori Barang</td>
                            <td>{{ $kBarang->id_kategori_barang }}</td>
                            <td>{{ $kBarang->kategori_barang }}</td>
                            <td>{{ $kBarang->status }}</td>
                            @if(Auth::user()->level === 'pemilik')
                            <td class="d-flex justify-content-center">
                                @if($kBarang->status === 'Persetujuan Pembuatan Kategori Barang')
                                <form action="{{ route('approvalKategoriBarang', $kBarang->id_kategori_barang) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalKategoriBarang', $kBarang->id_kategori_barang) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @elseif($kBarang->status === 'Persetujuan Penghapusan Kategori Barang')
                                <form action="{{ route('approvalDeleteKategoriBarang', $kBarang->id_kategori_barang) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalDeleteKategoriBarang', $kBarang->id_kategori_barang) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @else
                                <form action="{{ route('approvalEditKategoriBarang', $kBarang->id_kategori_barang) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                @endif
                            </td>
                            @endif
                        </tr>
                        @endforeach

                        <!-- Data Barang -->
                        @foreach($dataBarang as $dBarang)
                        <tr>
                            <td>Data Barang</td>
                            <td>{{ $dBarang->id_produk }}</td>
                            <td>{{ $dBarang->nama_produk }}</td>
                            <td>{{ $dBarang->status }}</td>
                            @if(Auth::user()->level === 'pemilik')
                            <td class="d-flex justify-content-center">
                                @if($dBarang->status === 'Persetujuan Pembuatan Data Barang')
                                <form action="{{ route('approvalDataBarang', $dBarang->id_produk) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalDataBarang', $dBarang->id_produk) }}" method="post" class="">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @elseif($dBarang->status === 'Persetujuan Penghapusan Data Barang')
                                <form action="{{ route('approvalDeleteDataBarang', $dBarang->id_produk) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalDeleteDataBarang', $dBarang->id_produk) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @else
                                <form action="{{ route('approvalEditDataBarang', $dBarang->id_produk) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                @endif
                            </td>
                            @endif
                        </tr>
                        @endforeach

                        <!-- Data Supplier -->
                        @foreach($dataSupplier as $dSupplier)
                        <tr>
                            <td>Data Supplier</td>
                            <td>{{ $dSupplier->id_supplier }}</td>
                            <td>{{ $dSupplier->nama_supplier }}</td>
                            <td>{{ $dSupplier->status }}</td>
                            @if(Auth::user()->level === 'pemilik')
                            <td class="d-flex justify-content-center">
                                @if($dSupplier->status === 'Persetujuan Pembuatan Data Supplier')
                                <form action="{{ route('approvalDataSupplier', $dSupplier->id_supplier) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalDataSupplier', $dSupplier->id_supplier) }}" method="post" class="">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @elseif ($dSupplier->status === 'Persetujuan Penghapusan Data Supplier')
                                <form action="{{ route('approvalDeleteDataSupplier', $dSupplier->id_supplier) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                <form action="{{ route('refusalDeleteDataSupplier', $dSupplier->id_supplier) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                                </form>
                                @else
                                <form action="{{ route('approvalEditDataSupplier', $dSupplier->id_supplier) }}" method="post" class="">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </form>
                                @endif
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    <!-- /.container-fluid -->
</x-layouts>