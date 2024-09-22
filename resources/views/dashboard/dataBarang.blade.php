<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Barang</h1>
    <p class="">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    @if(Auth::user()->level === 'admin')
    <a href="{{ route('createDataBarang') }}"><button class="btn btn-info my-3"> + DATA </button></a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Rak</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Nama Produk</th>
                            @if(Auth::user()->level === 'admin')
                            <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataBarang as $barang)
                        <tr>
                            <td>{{ $barang->id_produk }}</td>
                            <td>{{ $barang->rak }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>{{ $barang->harga_beli }}</td>
                            <td>{{ $barang->harga_jual }}</td>
                            <td>{{ $barang->nama_produk }}</td>
                            @if(Auth::user()->level === 'admin')
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('dataBarangDelete', $barang->id_produk) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
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