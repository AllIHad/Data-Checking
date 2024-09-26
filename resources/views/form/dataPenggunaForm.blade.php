<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ route('dataPenggunaCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Data Pengguna</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Admin ID</label>
                            <input id="fname" name="id_admin" type="text"
                                value="{{ old('id_admin') }}"
                                class="form-control @error('id_admin') is-invalid @enderror">
                            @error('id_admin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Nama Admin</label>
                            <input id="fname" name="nama_admin" type="text"
                                value="{{ old('nama_admin')}}"
                                class="form-control @error('nama_admin') is-invalid @enderror">
                            @error('nama_admin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Jenis Kelamin</label>
                            <input id="fname" name="jenis_kelamin" type="text"
                                value="{{ old('jenis_kelamin')}}"
                                class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            @error('jenis_kelamin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Alamat</label>
                            <input id="fname" name="alamat" type="text"
                                value="{{ old('alamat')}}"
                                class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">No Hp</label>
                            <input id="fname" name="no_hp" type="text"
                                value="{{ old('no_hp')}}"
                                class="form-control @error('no_hp') is-invalid @enderror">
                            @error('no_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Email</label>
                            <input id="fname" name="email" type="text"
                                value="{{ old('email')}}"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">User Name</label>
                            <input id="lname" name="username" type="text"
                                value="{{ old('username')}}"
                                class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">

                        <div class="col-md-12">
                            <label class="fw-bolder">Password</label>
                            <input id="fname" name="password" type="password"
                                value="{{ old('password') }}"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Confirm Password</label>
                            <input id="fname" name="password_confirmation" type="password"
                                value="{{ old('password_confirmation')}}"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <select class="form-select form-select-lg mb-3" name="level" aria-label="Default select example">
                                <option selected>Level</option>
                                <option value="pemilik">pemilik</option>
                                <option value="admin">admin</option>
                                <option value="kasir">kasir</option>
                            </select>
                            @error('level')
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