<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Rani</h1>
    <p class="">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    @if(Auth::user()->id === 4)
    <a href="{{ route('createData') }}"><button class="btn btn-info my-3"> + DATA </button></a>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Rani</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">Username Acc</th>
                            <th class="text-center">Post Ke - </th>
                            <th class="text-center">Views</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataManagements as $data)
                        <tr>
                            <td class="text-center">{{ $data->user_name }}</td>
                            <td class="text-center">{{ $data->post }}</td>
                            <td class="text-center">{{ $data->view }}</td>
                            @if(Auth::user()->id === 4)
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('destroyData', $data->id) }}" method="post" class="pr-4">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                                <a href="{{ route('editData', $data->id) }}" class="btn btn-sm btn-info mr-4"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{ $data->link }}" class="btn btn-sm btn-warning"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </td>
                            @else
                            <td class="d-flex justify-content-center">
                                <a href="{{ $data->link }}" class="btn btn-sm btn-warning"><i class="fa fa-link" aria-hidden="true"></i></a>
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