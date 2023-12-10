@extends('layout.base')
@section('konten')
<section class="hero-section">
    <div>
        {{-- <h1 class="hero-title">Your Hero Title</h1>
        <h2 class="hero-subtitle">Your Hero Subtitle</h2>
        <a href="#" class="hero-button">Your Hero Button</a> --}}
    </div>
</section>
<section>
    <div class="story">
        <div class="container">
            <div class="story-content">
                <div class="row">
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
                            {{-- <button class="tumb">Learn More</button> --}}
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="title">
                        <h1>Our Farmer</h1>
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
                        {{-- <button class="tumb">Learn More</button> --}}
                    </div>
                </div>
                <div class="col">
                    
                    <div class="about-img">
                        <img src="{{ asset('asset/farmer.png') }}" alt="" class="about-about">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="about-img">
                        <img src="{{ asset('asset/land.png') }}" alt="" class="about-about">
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h1>Our Land</h1>
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
                        {{-- <button class="tumb">Learn More</button> --}}
                    </div>
                </div>
            </div>
            <div class="row">
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
                <div class="col">
                    
                    <div class="about-img">
                        <img src="{{ asset('asset/prod.png') }}" alt="" class="about-about">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection