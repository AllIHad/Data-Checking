<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ route('dataSupplierCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Data Supplier</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="id_supplier" type="text" placeholder="Supplier ID" class="form-control @error('id_supplier') is-invalid @enderror">
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="nama_supplier" type="text" placeholder="Nama Supplier" class="form-control @error('nama_supplier') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="alamat" type="text" placeholder="Alamat" class="form-control @error('alamat') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="telepon" type="text" placeholder="Telepon" class="form-control @error('telepon') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layouts>