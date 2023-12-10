@extends('layout.base')
@section('konten')
    <section id="hero-id">
        <div class="hero">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="konten">
                            <h1>WELCOME TO OUR WEBSITE</h1>
                            <p>We Provide Best Quality Product.</p>
                            <button class="tumb">Learn More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="konten">
                            <h1>WELCOME TO OUR WEBSITE</h1>
                            <p>We Provide Best Quality Product.</p>
                            <button class="tumb">Learn More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="konten">
                            <h1>WELCOME TO OUR WEBSITE</h1>
                            <p>We Provide Best Quality Product.</p>
                            <button class="tumb">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-img">
                            <img src="{{ asset('asset/jh.png') }}" alt="" class="story">
                        </div>
                    </div>
                    <div class="col">
                        <div class="title">
                            <h1>Our Story</h1>
                        </div>
                        <div class="about-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis quis faucibus pellentesque elit
                                facilisis. Sit neque accumsan id egestas nullam pellentesque blandit. In pharetra
                                pellentesque diam felis. Adipiscing senectus pellentesque gravida elit cursus. Dignissim id
                                pretium, est gravida tellus dui massa.
                                Fermentum, venenatis sem interdum pellentesque urna. Gravida cursus porttitor dolor, eget
                                sed tellus. Enim, leo pellentesque feugiat nunc ullamcorper in vulputate. Purus laoreet
                                tempor est massa tincidunt semper egestas nunc, ante.
                                Dis laoreet est vitae egestas in. Bibendum libero, turpis magna vitae, imperdiet in. Ipsum
                                malesuada quis dictum risus tortor. Odio nunc, odio nunc massa cursus.
                                Vitae cursus fames nibh dis pulvinar sed egestas sed ultrices ut vel. Elit proin ipsum ut
                            </p>
                            <button class="tumb">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="product">
        <div class="produk">
            <div class="container">
                <div class="judul-produk">
                    <h1>Best Product For You</h1>
                </div>
                <div class="produk-best">
                    <div class="row">
                        <div class="col">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galerry">
        <div class="galer">
            <div class="container">
                <h1>Our Gallery</h1>
                <div class="galer-foto">
                    <div class="row g-5">
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="produk-img">
                                <img src="{{ asset('asset/jh.png') }}" alt=""class="gambar-prod">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="kontak">
        <div class="kontak">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="kontak-card">
                            <div class="title-2">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="about-text">
                                <form>
                                    <!-- Name input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form4Example1" class="form-control" />
                                        <label class="form-label" for="form4Example1">Name</label>
                                    </div>

                                    <!-- Email input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form4Example2" class="form-control" />
                                        <label class="form-label" for="form4Example2">Email address</label>
                                    </div>

                                    <!-- Message input -->
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                        <label class="form-label" for="form4Example3">Message</label>
                                    </div>
                                    <div class="icons">
                                        <a href=""><i class="fab fa-google"></i><span
                                                class="icons-text">adiyatmaharis21@gmail.com</span></a>
                                        <a href=""><i class="fab fa-instagram"></i><span
                                                class="icons-text">Adytm_21</span></a>
                                        <a href=""><i class="fab fa-whatsapp"></i><span
                                                class="icons-text">+6282226582306</span></a>
                                    </div>
                                    <!-- Submit button -->
                                    <button data-mdb-ripple-init type="button"
                                        class="btn btn-warning btn-block mb-4">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="about-img">
                            <iframe
                                src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15840.793492617235!2d110.4142924!3d-6.98589825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f4cc0ad61a87%3A0xb16cfb528cadf73d!2sKursus%20Bahasa%20Korea%20EPS!5e0!3m2!1sid!2sid!4v1702039400576!5m2!1sid!2sid"
                                width="450" height="600" style="border:1; border-radius:5px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="team">
        <div class="team">
            <div class="team-list">
                <div class="title-team">
                    <h1>Meet Our Team</h1>
                </div>
            </div>
            <div class="tem-group">
                <div class="row gx-5">
                    <div class="col">
                        <div class="team-wrapper">
                            <div class="container">
                                <div class="team-konten">
                                    <h3>Haris Adiyatma Farhan</h3>
                                    <p>CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-wrapper">
                            <div class="container">
                                <div class="team-konten">
                                    <h3>Haris</h3>
                                    <p>CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-wrapper">
                            <div class="container">
                                <div class="team-konten">
                                    <h3>Haris</h3>
                                    <p>CEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    
@endsection
