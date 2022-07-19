@extends('layouts.main')

@section('container')
    <div class="form-link">
        <p>
            <label>Apakah Usaha Anda Masuk Organisasi Kelembagaan Usaha?</label>
            <div class="options">
            <input type="radio" id="ya" name="oke"/>
            <label for="ya">Ya</label>

            <input type="radio" id="tidak" name="oke"/>
            <label for="tidak">Tidak</label>
            </div>
        </p>
        <p>
            <label>Apakah Pernah Mengikuti Pelatihan Dari Dinas KOPINDAG?</label>
            <div class="options">
            <input type="radio" id="ya" name="oke"/>
            <label for="ya">Ya</label>

            <input type="radio" id="tidak" name="oke"/>
            <label for="tidak">Tidak</label>
            </div>
        </p>
        <p>
            <label>Status Usaha</label>
            <div class="options1">
            <input type="radio" id="aktif" name="oke"/>
            <label for="aktif">Aktif</label>

            <input type="radio" id="tidak" name="oke"/>
            <label for="tidak">Tidak Aktif</label>

            <input type="radio" id="naik" name="oke"/>
            <label for="naik">Naik Kelas</label>

            <input type="radio" id="tutup" name="oke"/>
            <label for="tutup">Tutup</label>
            </div>
        </p>
        <p>
            <label>Saran Tindak</label>
            <div class="saran">
            <input type="checkbox" id="wa" name="market"/>
            <label for="wa">Promosi</label>

            <input type="checkbox" id="medsos" name="market"/>
            <label for="medsos">Pelatihan Keterampilan</label>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">Pelatihan Manajemen</label>

            <br>
           
            <input type="checkbox" id="bank" name="market"/>
            <label for="bank">Pelatihan Peningkatan Mutu</label>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">Bantuan Modal</label>
        </p>
        
    </div>
    <div class="right3">
        <a href="/regist1" class="btn">LANJUT</a>
    </div>
    <img src="images/Vector 4.png" class="img2">
@endsection