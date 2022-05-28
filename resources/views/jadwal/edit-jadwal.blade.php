@extends('template')
@section('container')
@foreach ($schedule as $schedule)


    <div class="container">
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <form action="/editJadwal/{{$schedule->id}}" method="POST" class="  row g-3" style="padding: 50px">
            {{ csrf_field() }}
            {{ method_field('PUT') }}


            <div class="col-12">
                <label for="inputDate" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="inputDate" name="tanggal" value="{{$schedule->tanggal}}">
            </div>
            <div class="col-md-6">
                <label for="inputMakanPagi" class="form-label">Makan Pagi</label>
                <select name="menu_pagi_id" id="inputMakanPagi" class="form-select">
                    <option>Pilih Menu</option>
                    @foreach ($menusPagi as $menuPagi)
                        <option value="{{ $menuPagi->idmpasi }}" @if($schedule->menu_pagi_id === $menuPagi->idmpasi)
                            selected
                        @endif>{{ $menuPagi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputWaktuPagi" class="form-label">Waktu Makan Pagi</label>
                <input type="time" name="waktu_pagi" class="form-control" id="inputWaktuPagi" placeholder="1234 Main St" value="{{$schedule->waktu_pagi}}">
            </div>
            <div class="col-md-6">
                <label for="inputMakanSiang" class="form-label">Makan Siang</label>
                <select name="menu_siang_id" id="inputMakanSiang" class="form-select">
                    <option>Pilih Menu</option>
                    @foreach ($menusSiang as $menuSiang)
                        <option value="{{ $menuSiang->idmpasi }}" @if($schedule->menu_siang_id === $menuSiang->idmpasi)
                            selected
                        @endif>{{ $menuSiang->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputWaktuSiang" class="form-label">Waktu Makan Siang</label>
                <input type="time" name="waktu_siang" class="form-control" id="inputWaktuSiang"
                    placeholder="1234 Main St" value="{{$schedule->waktu_siang}}">
            </div>
            <div class="col-md-6">
                <label for="inputMakanMalam" class="form-label">Makan Malam</label>
                <select name="menu_malam_id" id="inputMakanMalam" class="form-select menu_malam">
                    <option>Pilih Menu</option>
                    @foreach ($menusMalam as $menuMalam)
                        <option value="{{ $menuMalam->idmpasi }}" @if($schedule->menu_malam_id === $menuMalam->idmpasi)
                            selected
                        @endif>{{ $menuMalam->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputWaktuMalam" class="form-label">Waktu Makan Malam</label>
                <input name="waktu_malam" type="time" class="form-control" id="inputWaktuMalam"
                    placeholder="1234 Main St" value="{{$schedule->waktu_malam}}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Perbarui</button>
            </div>
        </form>
    </div>
    @endforeach
@endsection

