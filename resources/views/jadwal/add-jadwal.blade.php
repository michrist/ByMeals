@extends('template')
@section('script')
    <script>
        $(document).ready(function(){
            $('#btnsubmit').click(function(){
                if($('#inputMakanPagi').val() === '0'){
                    alert("Pilih menu pagi terlebih dahulu!")
                };
                if($('#inputMakanSiang').val() === '0'){
                    alert("Pilih menu siang terlebih dahulu!")
                };
                if($('#inputMakanMalam').val() === '0'){
                    alert("Pilih menu malam terlebih dahulu!")
                };
            });
        });
    </script>
@endsection
@section('css')
    <link href="css/jadwal/add.css" rel="stylesheet">
@endsection
@section('container')
    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <div class="title">
            <p class="h1">Tambah Jadwal</p>
            <hr>
        </div>
        <div class="form-jadwal">
            <form action="{{ url('add-jadwal') }}" method="POST" class="  row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputDate" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="inputDate" name="tanggal" required>
                </div>
                <div class="col-md-6">
                    <label for="inputMakanPagi" class="form-label">Makan Pagi</label>
                    <select name="menu_pagi_id" id="inputMakanPagi" class="form-select" required>
                        <option selected value="0">Pilih Menu</option>
                        @foreach ($menusPagi as $menuPagi)
                            <option value="{{ $menuPagi->idmpasi }}">{{ $menuPagi->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputWaktuPagi" class="form-label">Waktu Makan Pagi</label>
                    <input type="time" name="waktu_pagi" class="form-control" id="inputWaktuPagi"
                        placeholder="1234 Main St" required>
                </div>
                <div class="col-md-6">
                    <label for="inputMakanSiang" class="form-label">Makan Siang</label>
                    <select name="menu_siang_id" id="inputMakanSiang" class="form-select" required>
                        <option selected value="0">Pilih Menu</option>
                        @foreach ($menusSiang as $menuSiang)
                            <option value="{{ $menuSiang->idmpasi }}">{{ $menuSiang->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputWaktuSiang" class="form-label">Waktu Makan Siang</label>
                    <input type="time" name="waktu_siang" class="form-control" id="inputWaktuSiang"
                        placeholder="1234 Main St" required>
                </div>
                <div class="col-md-6">
                    <label for="inputMakanMalam" class="form-label">Makan Malam</label>
                    <select name="menu_malam_id" id="inputMakanMalam" class="form-select menu_malam" required>
                        <option selected value="0">Pilih Menu</option>
                        @foreach ($menusMalam as $menuMalam)
                            <option value="{{ $menuMalam->idmpasi }}">{{ $menuMalam->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputWaktuMalam" class="form-label">Waktu Makan Malam</label>
                    <input name="waktu_malam" type="time" class="form-control" id="inputWaktuMalam"
                        placeholder="1234 Main St" required>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary me-md-2" type="button" id="btnsubmit">Tambahkan</button>
                </div>
            </form>
        </div>

    </div>
@endsection
