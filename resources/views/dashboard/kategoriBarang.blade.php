<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Kategori Barang </h1>
    <p>DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    @if(Auth::user()->level === 'admin')
        <a href="{{ route('createKategoriBarang') }}"><button class="btn btn-info my-3"> + DATA </button></a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Kategori Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Category ID</th>
                            <th>Category Product</th>
                            @if(Auth::user()->level === 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoriBarang as $kategori)
                        <tr>
                            <td>{{ $kategori->id_kategori_barang }}</td>
                            <td>{{ $kategori->kategori_barang }}</td>
                            @if(Auth::user()->level === 'admin')
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('kategoriBarangDelete', $kategori->id_kategori_barang) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                                <a href="{{ route('editKategoriBarang', $kategori->id_kategori_barang) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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