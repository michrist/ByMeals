<div>
    <div class="row m-2">
        <h1>Pilih Tanggal</h1>
    </div>
    <div class="row m-2 center">
        <div class="col-12">
            <select name="tanggaljadwal" id="tanggaljadwal" wire:model="tanggal">
                @foreach ($schedules as $s)
                <option value="{{$s->id}}">{{$s->tanggal}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <h1>{{$tanggal}}</h1>

</div>
