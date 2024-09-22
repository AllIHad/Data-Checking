<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ route('kategoriBarangCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Kategori Barang</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <input id="fname" name="id_kategori_barang" type="text" placeholder="Kategori Barang ID" class="form-control @error('id_kategori_barang') is-invalid @enderror">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="lname" name="kategori_barang" type="text" placeholder="Kategori Barang" class="form-control @error('kategori_barang') is-invalid @enderror">
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