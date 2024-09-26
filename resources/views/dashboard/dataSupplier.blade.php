<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Supplier</h1>
    <p>DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    @if(Auth::user()->level === 'admin')
    <a href="{{ route('createDataSupplier') }}"><button class="btn btn-info my-3"> + DATA </button></a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Supplier</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            @if(Auth::user()->level === 'admin')
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataSupplier as $supplier)
                        <tr>
                            <td>{{ $supplier->id_supplier }}</td>
                            <td>{{ $supplier->nama_supplier }}</td>
                            <td>{{ $supplier->alamat }}</td>
                            <td>{{ $supplier->telepon }}</td>
                            @if(Auth::user()->level === 'admin')
                            <td class="d-flex justify-content-center">
                                <form action="/admin/destroyDataSupplier/{{$supplier->id_supplier}}" method="post" class="pr-4">
                                    @method('put')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                                <a href="{{ route('editDataSupplier', $supplier->id_supplier) }}" class="btn btn-sm btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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