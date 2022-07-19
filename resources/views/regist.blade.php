@extends('layouts.main')

@section('container')
    <div class="form-link">
        <p>
            <label>Nama Lengkap Usaha<span class="star">*</span></label>
        <input type="text" name="name"  class="input"/>
        </p>
        <p>
            <label>Alamat Usaha <span class="star">*</span></label>
        <input type="text" name="address" class="input"/>
        </p>
        <p>
            <label>Nomor Hp/Telepon <span class="star">*</span></label>
        <input type="text" name="number"  class="input"/>
        </p>
        <p>
            <label>E-mail<span class="star">*</span></label>
        <input type="text" name="email"  class="input"/>
        </p>
        <p>
            <label>Password<span class="star">*</span></label>
        <input type="text" name="password"  class="input"/>
        </p>
        <p>
            <label>Konfirmasi Password<span class="star">*</span></label>
        <input type="text" name="c-password"  class="input"/>
        </p>
        
    </div>
    <div class="right">
                <a href="/regist1" class="btn">LANJUT</a>
    </div>
    <footer class="img"><img src="images/Vector 4.png"></footer>
@endsection