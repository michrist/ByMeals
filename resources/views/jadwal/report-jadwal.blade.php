@extends('template')
@section('container')
    <div class="container" style="height: 100vh">
        @if ($check == null)
            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin:50px">
                <strong>Holy {{ Auth::user()->name }} ! </strong> anda belum memiliki jadwal buat sekarang
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto" style="padding-bottom:50px">
                <a href="/add-jadwal" class="btn btn-primary me-md-2" type="button">Buat Jadwal</a>
            </div>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Makan Pagi</th>
                        <th scope="col">Makan Siang</th>
                        <th scope="col">Makan Malam</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td>{{ $schedule->tanggal }}</td>
                            <td>{{ $schedule->menu_pagi_id }}</td>
                            <td>{{ $schedule->menu_siang_id }}</td>
                            <td>{{ $schedule->menu_malam_id }}</td>
                            @if ($peserta->tryoutUser->status_absen == 'belum_absen')
                                <td class="text-warning">Belum Absen</td>
                            @elseif($peserta->tryoutUser->status_absen == 'hadir')
                                <td class="text-success">Hadir</td>
                            @else
                                <td class="text-danger">Tidak Hadir</td>
                            @endif
                        </tr>
                    @endforeach
                    {{-- <tr>
                        <th scope="row">1</th>
                        <td>6 Juni 2022</td>
                        <td>Nasi Bubur</td>
                        <td>Nasi Bubur</td>
                        <td>Nasi Bubur</td>
                        <td>-</td>
                        <td><a href="" type="button" class="btn btn-info btn-sm">Detail</a> | <a type="button"
                                class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr> --}}
                </tbody>
            </table>
        @endif



    </div>
@endsection
