@extends('layout.base')
@section('konten')
<section>
    <div class="maps">
        <div class="container">
            <div class="maps-maps">
                <iframe
                src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.793492617235!2d110.4142924!3d-6.98589825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4cc0ad61a87%3A0xb16cfb528cadf73d!2sKursus%20Bahasa%20Korea%20EPS!5e0!3m2!1sid!2sid!4v1702039400576!5m2!1sid!2sid"
                width="1280" height="720" style="border:1; border-radius:5px;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <div class="row">
            <div class="col">
                <form class="row g-3">
                    <div class="form-title">
                        <h1>Contact Us</h1>
                        <p>Please let us know if we can work together to introduce<br> great product from our home - Indonesia</p>
                    </div>
                    <div class="col-12">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="email" class="form-control" id="name" placeholder="Mr/Mrs">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder=".....@gmail">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Phone</label>
                      <input type="telp" class="form-control" id="inputAddress2" placeholder="+628.....">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-warning">Submit</button>
                    </div>
                  </form>
            </div>
            <div class="col">
                <div class="form-title">
                    <h1>Adress</h1>
                    <div class="icon-ad">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Raya Kedung Baruk No.98, Kedung Baruk, Kec. Rungkut, Kota SBY, Jawa Timur 60298</li>
                        <li><i class="fas fa-phone-alt"></i> 0812-3456-7890</li>
                        <li><i class="fas fa-clock"></i> 07.00 AM - 07.00 PM
                        <li><i class="fas fa-envelope"></i> adiyatmaharis21@gmail.com
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection