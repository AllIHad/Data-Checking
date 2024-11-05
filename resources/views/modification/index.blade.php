<x-layouts>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Keseluruhan</h1>
    <p>DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tabel Keseluruhan</h6>
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
                        @foreach($dataManagements as $data)
                        <tr>
                            <td class="text-center">{{ $data->user_name }}</td>
                            <td class="text-center">{{ $data->post }}</td>
                            <td class="text-center">{{ $data->view }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ $data->link }}" class="btn btn-sm btn-warning"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </td>
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