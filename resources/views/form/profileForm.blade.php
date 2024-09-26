<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ route('editProfile', Auth::user()->id_admin) }}" method="post">
                    @csrf
                    @method('put')
                    <legend class="text-center header">Form Profile</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Profile ID</label>
                            <input id="fname" name="id_admin" type="text"
                                value="{{ old('id_admin', Auth::user() ? Auth::user()->id_admin : '')}}"
                                class="form-control @error('id_admin') is-invalid @enderror">
                            @error('id_admin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Nama</label>
                            <input id="lname" name="nama_admin" type="text"
                                value="{{ old('nama_admin', Auth::user() ? Auth::user()->nama_admin : '')}}"
                                class="form-control @error('nama_admin') is-invalid @enderror">
                            @error('nama_admin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Jenis Kelamin</label>
                            <input id="lname" name="jenis_kelamin" type="text"
                                value="{{ old('jenis_kelamin', Auth::user() ? Auth::user()->jenis_kelamin : '')}}"
                                class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            @error('jenis_kelamin')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Alamat</label>
                            <input id="lname" name="alamat" type="text"
                                value="{{ old('alamat', Auth::user() ? Auth::user()->alamat : '')}}"
                                class="form-control @error('alamat') is-invalid @enderror">
                            @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">No Hp</label>
                            <input id="lname" name="no_hp" type="text"
                                value="{{ old('no_hp', Auth::user() ? Auth::user()->no_hp : '')}}"
                                class="form-control @error('no_hp') is-invalid @enderror">
                            @error('no_hp')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Email</label>
                            <input id="lname" name="email" type="text"
                                value="{{ old('email', Auth::user() ? Auth::user()->email : '')}}"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Username</label>
                            <input id="lname" name="username" type="text" readonly="readonly"
                                value="{{ old('username', Auth::user() ? Auth::user()->username : '')}}"
                                class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">Level</label>
                            <input id="lname" name="level" type="text" readonly="readonly"
                                value="{{ old('level', Auth::user() ? Auth::user()->level : '')}}"
                                class="form-control @error('level') is-invalid @enderror">
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