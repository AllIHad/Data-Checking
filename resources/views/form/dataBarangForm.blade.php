<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ route('dataBarangCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Data Barang</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="id_produk" type="text" placeholder="Produk ID" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="rak" type="text" placeholder="Rak" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="id_kategori_barang" type="text" placeholder="Kategori Barang ID" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="id_supplier" type="text" placeholder="Supplier ID" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="stok" type="text" placeholder="Stok" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="harga_beli" type="text" placeholder="Harga Beli" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="lname" name="harga_jual" type="text" placeholder="Harga Jual" class="form-control @error('kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="nama_produk" type="text" placeholder="Nama Produk" class="form-control @error('id_kategori_barang') is-invalid @enderror">
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