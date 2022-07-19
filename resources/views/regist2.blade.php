@extends('layouts.main')

@section('container')
    <div class="form-link">
        <p>
            <label>Legalitas/Perizinan<span class="star">*</span></label>
            <label class="date">Tanggal <span class="star">*</span></label>
            <label class="number">Nomor Surat/Keterangan <span class="star">*</span></label><br>
            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">SIUP/Surat Izin</label>
            <input type="text" name="tanggal" class="date1"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">IUMK</label>
            <input type="text" name="tanggal" class="date2"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">PURT</label>
            <input type="text" name="tanggal" class="date3"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">NPWP</label>
            <input type="text" name="tanggal" class="date4"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">HO/Domisili Usaha</label>
            <input type="text" name="tanggal" class="date5"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">HAKI</label>
            <input type="text" name="tanggal" class="date6"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="kredit" name="market"/>
            <label for="kredit">HALAL</label>
            <input type="text" name="tanggal" class="date7"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="pinjol" name="market"/>
            <label for="pinjol">NIB</label>
            <input type="text" name="tanggal" class="date8"/>
            <input type="text" name="number" class="number1"/><br>

            <input type="checkbox" id="pinjol" name="market"/>
            <input type="text" name="tanggal" class="legal"/>
            <input type="text" name="tanggal" class="date1"/>
            <input type="text" name="number" class="number1"/><br>
        </p>
      
    </div>
    <div class="right">
        <a href="/regist3" class="btn">LANJUT</a>
    </div>
    <footer class="img"><img src="images/Vector 4.png"></footer>
@endsection