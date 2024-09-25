<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ isset($dataSupplier) ? route('editedDataSupplier', $dataSupplier->id_supplier) : route('dataSupplierCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Data Supplier</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Supplier ID</label>
                            <input id="fname" name="id_supplier" type="text" placeholder="Supplier ID"
                                value="{{ old('id_supplier', isset($dataSupplier) ? $dataSupplier->id_supplier : '')}}"
                                class="form-control @error('id_supplier') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Nama Supplier</label>
                            <input id="fname" name="nama_supplier" type="text" placeholder="Nama Supplier"
                                value="{{ old('nama_supplier', isset($dataSupplier) ? $dataSupplier->nama_supplier : '')}}"
                                class="form-control @error('nama_supplier') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Alamat</label>
                            <input id="fname" name="alamat" type="text" placeholder="Alamat"
                                value="{{ old('alamat', isset($dataSupplier) ? $dataSupplier->alamat : '')}}"
                                class="form-control @error('alamat') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Telepon</label>
                            <input id="fname" name="telepon" type="text" placeholder="Telepon"
                                value="{{ old('telepon', isset($dataSupplier) ? $dataSupplier->telepon : '')}}"
                                class="form-control @error('telepon') is-invalid @enderror">
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