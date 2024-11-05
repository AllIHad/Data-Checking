<x-layouts>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="{{ isset($dataManagement) ? route('dataEdited', $dataManagement->id) : route('dataCreated') }}" method="post">
                    @csrf
                    <legend class="text-center header">Form Kategori Barang</legend>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Username Tiktok : </label>
                            <input id="fname" name="username" type="text"
                                value="{{ old('username', isset($dataManagement) ? $dataManagement->user_name : '')}}"
                                class="form-control @error('username') is-invalid @enderror">
                                @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Link : </label>
                            <input id="fname" name="link" type="text"
                                value="{{ old('link', isset($dataManagement) ? $dataManagement->link : '')}}"
                                class="form-control @error('link') is-invalid @enderror">
                                @error('link')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-md-12">
                            <label class="fw-bolder">Post Ke - </label>
                            <input id="fname" name="post" type="text"
                                value="{{ old('post', isset($dataManagement) ? $dataManagement->post : '')}}"
                                class="form-control @error('post') is-invalid @enderror">
                                @error('post')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="fw-bolder">View : </label>
                            <input id="lname" name="view" type="text"
                                value="{{ old('view', isset($dataManagement) ? $dataManagement->view : '')}}"
                                class="form-control @error('view') is-invalid @enderror">
                                @error('view')
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