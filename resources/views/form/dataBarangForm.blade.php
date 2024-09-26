<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ isset($dataBarang) ? route('editedDataBarang', $dataBarang->id_produk) : route('dataBarangCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Data Barang</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Produk ID</label>
                            <input id="fname" name="id_produk" type="text"
                                value="{{ old('id_produk', isset($dataBarang) ? $dataBarang->id_produk : '')}}"
                                class="form-control @error('id_produk') is-invalid @enderror">
                            @error('id_produk')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Rak</label>
                            <input id="fname" name="rak" type="text"
                                value="{{ old('rak', isset($dataBarang) ? $dataBarang->rak : '')}}"
                                class="form-control @error('rak') is-invalid @enderror">
                            @error('rak')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Kategori Barang ID</label>
                            <input id="fname" name="id_kategori_barang" type="text"
                                value="{{ old('id_kategori_barang', isset($dataBarang) ? $dataBarang->id_kategori_barang : '')}}"
                                class="form-control @error('id_kategori_barang') is-invalid @enderror">
                            @error('id_kategori_barang')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Supplier ID</label>
                            <input id="fname" name="id_supplier" type="text"
                                value="{{ old('id_supplier', isset($dataBarang) ? $dataBarang->id_supplier : '')}}"
                                class="form-control @error('id_supplier') is-invalid @enderror">
                            @error('id_supplier')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Stok</label>
                            <input id="fname" name="stok" type="text"
                                value="{{ old('stok', isset($dataBarang) ? $dataBarang->stok : '')}}"
                                class="form-control @error('stok') is-invalid @enderror">
                            @error('stok')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Harga Beli</label>
                            <input id="fname" name="harga_beli" type="text"
                                value="{{ old('harga_beli', isset($dataBarang) ? $dataBarang->harga_beli : '')}}"
                                class="form-control @error('harga_beli') is-invalid @enderror">
                            @error('harga_beli')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Harga Jual</label>
                            <input id="lname" name="harga_jual" type="text"
                                value="{{ old('harga_jual', isset($dataBarang) ? $dataBarang->harga_jual : '')}}"
                                class="form-control @error('kategori_barang') is-invalid @enderror">
                            @error('harga_jual')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Nama Produk</label>
                            <input id="fname" name="nama_produk" type="text"
                                value="{{ old('nama_produk', isset($dataBarang) ? $dataBarang->nama_produk : '')}}"
                                class="form-control @error('id_kategori_barang') is-invalid @enderror">
                            @error('nama_produk')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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