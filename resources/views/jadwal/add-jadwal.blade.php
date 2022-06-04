@extends('template')
@section('container')
    <div class="container">
        {{-- <form style="padding: 50px">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <select class="form-control" name="city_id">
                    @foreach ($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->nama }}</option>
                    @endforeach
                </select>

            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </form>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form> --}}
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
        <form action="{{ url('add-jadwal') }}" method="POST" class="  row g-3" style="padding: 50px">
            @csrf
            <div class="col-12">
                <label for="inputDate" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="inputDate" name="tanggal" required>
            </div>
            <div class="col-md-6">
                <label for="inputMakanPagi" class="form-label">Makan Pagi</label>
                {{-- <select id="inputMakanPagi" class="form-select" name="menu_pagi_id">
                    <option selected>Pilih Menu</option>
                    @foreach ($menusPagi as $menuPagi)
                        <option value="{{ $menuPagi->id }}">{{ $menuPagi->nama }}</option>
                    @endforeach
                </select> --}}
                <select name="menu_pagi_id" id="inputMakanPagi" class="form-select" required>
                    <option selected>Pilih Menu</option>
                    @foreach ($menusPagi as $menuPagi)
                        <option value="{{ $menuPagi->idmpasi }}">{{ $menuPagi->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputWaktuPagi" class="form-label">Waktu Makan Pagi</label>
                <input type="time" name="waktu_pagi" class="form-control" id="inputWaktuPagi" placeholder="1234 Main St" required>
            </div>
            <div class="col-md-6">
                <label for="inputMakanSiang" class="form-label">Makan Siang</label>
                <select name="menu_siang_id" id="inputMakanSiang" class="form-select" required>
                    <option selected>Pilih Menu</option>
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
                    <option selected class="menu_malam">Pilih Menu</option>
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

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </form>
    </div>
@endsection
