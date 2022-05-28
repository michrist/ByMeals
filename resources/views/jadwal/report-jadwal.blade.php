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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($schedules as $schedule)
                        <tr>
                            <td> {{$i}} </td>
                            <td>{{ $schedule->tanggal }}</td>
                            @foreach ($menus as $menu)
                                @if ($menu->idmpasi === $schedule->menu_pagi_id)
                                <td>{{ $menu->nama }}</td>
                                @endif
                            @endforeach
                            @foreach ($menus as $menu)
                                @if ($menu->idmpasi === $schedule->menu_siang_id)
                                <td>{{ $menu->nama }}</td>
                                @endif
                            @endforeach
                            @foreach ($menus as $menu)
                                @if ($menu->idmpasi === $schedule->menu_malam_id)
                                <td>{{ $menu->nama }}</td>
                                @endif
                            @endforeach
                            <td><a href="editJadwal/{{$schedule->id}}"><button class="rounded-3 btn btn-warning m-lg-2">Edit</button></a><a href="hapusJadwal/{{$schedule->id}}"><button class="rounded-3 btn btn-danger rounded">Hapus</button></a></td>
                        </tr>
                        @php
                            $i++;
                        @endphp
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
