@extends('template')
@section('container')
<style>
  input[type=checkbox]:checked + label {
  color:black;
  text-decoration: line-through;
}
.custom-control-label:before{
        background-color:#dcdada;
        border: 2px solid black;
    }
.custom-checkbox .custom-control-input:checked~.custom-control-label::before{
        background-color:black;
    }
.custom-checkbox .custom-control-input:checked~.custom-control-label::after{
        background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23dcdada' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}

</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-5">
            <img src="https://images.unsplash.com/photo-1525351326368-efbb5cb6814d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGZvb2QlMjBzcXVhcmV8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" width="400px" height="400px">
        </div>
        <div class="col-7" style="margin-top: 17px">
            <h2 style="color: #000638; font-size: 50px">Bubur Hati Ayam & Kacang Merah</h2>
            <div class="row mt-4">
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-stopwatch" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3">
                    <span style="font-size: 20px; color: black">PREP TIME</span> <br>
                    <span style="font-size: 15px; color: black">15 min</span>
                </div>
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-stopwatch" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3">
                    <span style="font-size: 20px; color: black">COOK TIME</span> <br>
                    <span style="font-size: 15px; color: black">2h 30 min</span>
                </div>
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-utensils" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3 my-auto">
                    <span style="font-size: 20px; color: black">Red Bean</span>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <p class="btn mt-4" style="border-radius: 10px; background-color:#FFD600; color:black; width:200px"><i class="fas fa-baby"></i> <span style="margin-left: 10px">: </span><span style="margin-left: 10px"> 6 Bulan</span></p>
                </div>
                <div class="col-4">
                    <p class="btn mt-4" style="border-radius: 10px; background-color:#FFD600; color:black; width:200px"><i class="fas fa-clock"></i> <span style="margin-left: 10px"> :</span><span style="margin-left: 10px">Lunch</span></p>
                </div>
                <div class="col-4">
                    <p class="btn mt-4" style="border-radius: 10px; background-color:#FEA116; color:black; width:140px"><i class="far fa-bookmark"></i> <span style="margin-left: 10px"> Save </span></p>
                </div>
            </div>
            <p class="mt-3 " style="color: black; font-size: 17px; text-align: justify; margin-right:55px">Ada banyak kandungan nutrisi yang bisa mendukung pertumbuhan. Namun, hati ayam harus dikombinasikan dengan sumber karbohidrat dan serat lain seperti kacang merah.</p>
        </div>
    </div>
<div class="row">
    <div class="col-7">
        <p class="mt-5" style="color: black; font-size: 35px; font-weight:bold">Bahan</p>
            <div class="row">
                <div class="col-7">
                    <input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Hati ayam, dibersihkan </label>
                    <br><input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Beras </label>
                    <br><input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Kacang merah </label>
                    <br><input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Wortel, potong dadu </label>
                    <br><input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Minyak kelapa </label>
                    <br><input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> Air </label>
                </div>
                <div class="col-1">
                </div>
                <div class="col-4">
                    <label style="color:black; font-size:20px"> 200 gr </label>
                    <br><label style="color:black; font-size:20px"> 200 gr </label>
                    <br><label style="color:black; font-size:20px"> 200 gr </label>
                    <br><label style="color:black; font-size:20px"> 1 buah </label>
                    <br><label style="color:black; font-size:20px"> 2 sdm </label>
                    <br><label style="color:black; font-size:20px"> 400 ml </label>
                </div>
            </div>
        <p class="mt-5" style="color: black; font-size: 35px; font-weight:bold">Cara Memasak</p>
        <h4>1. Langkah Pertama</h4>
        <p class="mt-2" style="font-size: 20px">Cuci bersih bahan yang akan digunakan lalu tiriskan</p>
        <h4>2. Langkah Kedua</h4>
        <p class="mt-2" style="font-size: 20px">Masukkan minyak kelapa pada tempat memasak</p>
        <h4>3. Langkah Ketiga</h4>
        <p class="mt-2" style="font-size: 20px">Campurkan seluruh bahan lalu aduk rata</p>
        <h4>4. Langkah Keempat</h4>
        <p class="mt-2" style="font-size: 20px">Tambahkan air hingga seluruh bahan terendam air </p>
        <h4>5. Langkah Kelima</h4>
        <p class="mt-2" style="font-size: 20px">Masak seluruh bahan selama +- 2 jam hingga matang dan air menyusut sambil diaduk rata</p>
        <h4>6. Langkah Keenam</h4>
        <p class="mt-2" style="font-size: 20px">Angkat seluruh bahan dan blender hingga halus</p>
        <h4>7. Langkah Ketujuh</h4>
        <p class="mt-2" style="font-size: 20px">Saring bahan yang sudah diblender hingga mendapatkan puree</p>
        <h4>8. Langkah Kedelapan</h4>
        <p class="mt-2" style="font-size: 20px">Diamkan 5 menit dan sajikan secara langsung</p>
        <h4>9. Langkah Kesembilan</h4>
        <p class="mt-2" style="font-size: 20px">Simpan di wadah tertutup pada kulkas apabila tidak habis</p>
    </div>
    <div class="col-1"></div>
    <div class="col-4 mt-5" >
        <div style="background-color:#FFD600 ; border-radius: 25px; padding: 30px; font-size:14px; color:black">
            <p style="color: black; font-size: 35px; font-weight:bold; text-align:center">Kandungan Gizi</p>
            <ul>
                <li class="fw-bold fs-5">Protein</li>
                <p style="text-align: justify">Untuk pembentukan imunoglobulin/ antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri.</p>
                <li class="fw-bold fs-5">Zat Besi</li>
                <p style="text-align: justify">Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi.</p>
                <li class="fw-bold fs-5">Vitamin C</li>
                <p style="text-align: justify">Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh.</p>
                <li class="fw-bold fs-5">Karbohidrat</li>
                <p style="text-align: justify">Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks.</p>
                <li class="fw-bold fs-5">Kalsium</li>
                <p style="text-align: justify">Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak.</p>
            </ul>
        </div>
    </div>
</div>
<p class="mt-5 text-center" style="color: black; font-size: 35px; font-weight:bold">Coba menu MP-ASI yang lain</p>

<br>
<br>
<br>
</div>
@endsection
