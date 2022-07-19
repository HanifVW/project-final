@extends('layouts.main')

@section('container')
    <div class="form-link">
        <p>
            <label>Nama Pemilik<span class="star">*</span></label>
        <input type="text" name="name" class="input"/>
        </p>
        <p>
            <label>NIK<span class="star">*</span></label>
        <input type="text" name="id_card" class="input"/>
        </p>
        <p>
            <label>Tempat, Tanggal Lahir<span class="star">*</span></label>
        <input type="text" name="born" class="input"/>
        </p>
        <p>
            <label>Jenis Kelamin<span class="star">*</span></label>
            <div class="gender">
            <input type="radio" id="laki" name="gender"/>
            <label for="laki">Laki-Laki</label>

            <input type="radio" id="perempuan" name="gender"/>
            <label for="perempuan">Perempuan</label>
            </div>
        </p>
        <p>
            <label>Alamat<span class="star">*</span></label>
        <input type="text" name="address" class="input"/>
        </p>
        <p>
            <label>Rt/Rw<span class="star">*</span></label>
        <input type="text" name="address" class="input"/>
        </p>
        <p>
            <label>Kelurahan<span class="star">*</span></label>
        <input type="text" name="address" class="input"/>
        </p>
        <p>
            <label>Kecamatan<span class="star">*</span></label>
        <input type="text" name="address" class="input"/>
        </p>
        <p>
            <label>Pendidikan Terakhir<span class="star">*</span></label>
        <input type="text" name="Study" class="input"/>
        </p>
        <p>
            <label>Kategori Usaha<span class="star">*</span></label>
            <div class="work">
            <input type="radio" id="dagang" name="usaha"/>
            <label for="laki">Dagang</label>

            <input type="radio" id="perempuan" name="usaha"/>
            <label for="perempuan">Industri Kecil</label>

            <input type="radio" id="perempuan" name="usaha"/>
            <label for="perempuan">Jasa</label>

            <input type="radio" id="perempuan" name="usaha"/>
            <label for="perempuan">Pertanian</label><br>

            <input type="radio" id="dagang" name="usaha"/>
            <label for="laki">Pengrajin</label>
            
            <input type="radio" id="dagang" name="usaha"/>
            <label for="laki">Peternakan</label>
            <input type="text" name="Study" class="input1" />
            </div>
        </p>
        <p><br>
            <label>KBLI<span class="star">*</span></label>
        <input type="text" name="Study" class="input"/>
        </p>
        <p>
            <label>Bidang Usaha<span class="star">*</span></label>
        <input type="text" name="Study" class="input"/>
        </p>
        <p>
            <label>Tahun Mulai Beroperasi<span class="star">*</span></label>
        <input type="text" name="Study" class="input"/>
        </p>
        <p>
            <label>Jumlah Tenaga Kerja<span class="star">*</span></label>
            <div class="gender">
            <input type="radio" id="laki" name="gender"/>
            <label for="laki">Laki-Laki</label>

            <input type="radio" id="perempuan" name="gender"/>
            <label for="perempuan">Perempuan</label>
            </div>
        </p>
        <p>
            <label>Pendapatan<span class="star">*</span></label>
        <input type="text" name="money" class="input"/>
        </p>
         <p>
            <label>Modal<span class="star">*</span></label>
        <input type="text" name="money" class="input"/>
        </p>
        <p>
            <label>Pinjaman<span class="star">*</span></label>
            <div class="pinjam">
            <input type="checkbox" id="bank" name="pinjam"/>
            <label for="bank">Bank</label>

            <input type="checkbox" id="koperasi" name="pinjam"/>
            <label for="koperasi">koperasi</label>

            <input type="checkbox" id="kredit" name="pinjam"/>
            <label for="kredit">Kredit Usaha Rakyat</label>

            <input type="checkbox" id="pinjol" name="pinjam"/>
            <label for="pinjol">Pinjaman Online</label> <br>

            <input type="text" name="Study" class="input1" />
           
            </div>
        </p><br>
        <p>
            <label>Apakah Memanfaatkan Teknologi Informasi dalam Pemasarannya?<span class="star">*</span></label>
            <div class="options">
            <input type="radio" id="ya" name="oke"/>
            <label for="ya">Ya</label>

            <input type="radio" id="tidak" name="oke"/>
            <label for="tidak">Tidak</label>
            </div>
        </p>
        <p>
            <label>Pemasaran<span class="star">*</span></label>
            <div class="pasar">
            <input type="checkbox" id="wa" name="market"/>
            <label for="wa">Whatsapp</label>

            <input type="checkbox" id="medsos" name="market"/>
            <label for="medsos">Media Sosial</label>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">Grab</label>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">Gojek</label>
            <br>
           
            <input type="checkbox" id="bank" name="market"/>
            <label for="bank">Whatsapp</label>

            <input type="checkbox" id="koperasi" name="market"/>
            <label for="koperasi">Lokal</label>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">Regional</label>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">Nasional</label> <br>
            <input type="text" name="Study" class="input1" />
            </div>
        </p><br>
    </div>
    <div class="right1">
        <a href="regist2" class="btn">LANJUT</a>
    </div>
    <img src="images/Vector 4.png" class="img1">
@endsection