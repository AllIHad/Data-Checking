<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Pengguna</h1>
    <p>DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    @if(Auth::user()->level === 'admin')
    <a href="{{ route('createDataPengguna') }}"><button class="btn btn-info my-3"> + DATA </button></a>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Level</th>
                            @if(Auth::user()->level === 'admin')
                            <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPengguna as $pengguna)
                        <tr>
                            <td>{{ $pengguna->id_admin }}</td>
                            <td>{{ $pengguna->nama_admin }}</td>
                            <td>{{ $pengguna->jenis_kelamin }}</td>
                            <td>{{ $pengguna->alamat }}</td>
                            <td>{{ $pengguna->no_hp }}</td>
                            <td>{{ $pengguna->email }}</td>
                            <td>{{ $pengguna->level }}</td>
                            @if(Auth::user()->level === 'admin')
                            <td class="d-flex justify-content-center">
                                <form action="/admin/destroyDataPengguna/{{$pengguna->id_admin}}" method="post" class="">
                                    @method('put')
                                    @csrf
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