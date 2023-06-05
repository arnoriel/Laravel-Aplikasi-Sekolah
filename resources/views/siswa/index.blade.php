<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <div class="card-header">
                    Data Siswa
                    <a href="{{route('siswa.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data</a>
                </div>
                <div class="car-body">
                    <div class="table-responsive">
                        <table class="table" id="siswa">
                            <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1 @endphp
                            @foreach ($siswa as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->kelas}}</td>
                                    <td>{{$data->tgl_lahir}}</td>
                                    <td>{{$data->jk}}</td>
                                    <td>
                                        <form action="{{route('siswa.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i></a>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
