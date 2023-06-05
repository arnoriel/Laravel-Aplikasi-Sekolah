<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-header">Data Siswa</div>
                <div class="card-body">
                    <form action="{{route('siswa.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama Siswa</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Siswa">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="">Masukan Kelas</label>
                                 <select class="form-select" aria-label="Default select example" name="kelas" id="" >
                                    <option selected>Pilih Kelas</option>
                                   <option>RPL</option>
                                   <option>TKJ</option>
                                   <option>DKV</option>
                                   <option>TKRO</option>
                                   <option>TBSM</option>
                                   <option>TMP</option>
                                   <option>TP</option>
                                   <option>OTKP</option>
                                   <option>HR</option>
                                </select>
                                <label for="">Masukan Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="">Masukan Jenis Kelamin</label>
                                <select class="form-select" aria-label="Default select example" name="jk" id="" >
                                    <option selected>Pilih Jenis Kelamin</option>
                                   <option>Laki-laki</option>
                                   <option>Perempuan</option>
                                </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
