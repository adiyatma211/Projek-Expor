<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('bs/dist/css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Wholesale</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{--  --}}
    <section>
        @yield('konten')
    </section>
    {{--  --}}
    {{-- footer --}}
    <section>
        <div class="container">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <img src="https://img.freepik.com/free-photo/portrait-young-happy-smiling-woman-model-with-bright-makeup-red-lips-with-two-pigtails-summer-warm-sweater-clothes-isolated_158538-8736.jpg?w=1060&t=st=1688448620~exp=1688449220~hmac=16167b66814312195d1963d88ecc5f2c5e4c4e24bf759e1481e8f9dc3b22a0e8"
                            width="50rem">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <p class="text-muted">&copy; 2022</p>
                </div>

                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5 class="fot-judul">Navigation</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="fot-judul">Contact Person</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="fot-judul">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>
    <section>
        <div class="ewChat">
            <!-- Chat Box -->
            <div id="ewChatBox" class="ewChatBox ewc_hidden" style="display: none" aria-hidden="true">
              <!-- Tombol Close -->
              <button id="ewChatClose" class="ewChatClose ewc_close">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42z" />
                </svg>
              </button>
          
              <div class="ewChatCloseMobile ewc_close">
                Ketuk disini untuk menutup
              </div>
          
              <!-- Avatar -->
              <div class="ewChatAvatar">
                <img alt="" 
                 src="https://res.cloudinary.com/xviidev/image/upload/v1642074620/Webp.net-resizeimage_elgrei.jpg" /> 
              </div>
          
              <!-- Header -->
              <div class="ewChatHeader">
                <h3>Butuh bantuan? Chat sekarang!</h3>
                <p>Ketik pesan kamu dan mulai terhubung</p>
                <p>dengan kami di WhatsApp</p>
              </div>
          
              <!-- Bubble Chat -->
              <div>
                <div id="ewChatBubble" class="ewChatBubble">
                  <p>
                    Halo, perkenalkan saya Jihan dari Evetry, ada yang bisa saya
                    bantu?
                  </p>
                  <span>Sekarang</span>
                </div>
              </div>
            </div>
          
            <!-- Chat Input -->
            <div id="ewChatInput" class="ewChatInput ewc_hidden" style="display: none" aria-hidden="true">
              <input id="ewc_message" name="ewc_message" type="text" placeholder="Ketik sesuatu. . . ." />
              <button id="ewc_send">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 16 16">
                  <g fill="none">
                    <path d="M1.724 1.053a.5.5 0 0 0-.714.545l1.403 4.85a.5.5 0 0 0 .397.354l5.69.953c.268.053.268.437 0 .49l-5.69.953a.5.5 0 0 0-.397.354l-1.403 4.85a.5.5 0 0 0 .714.545l13-6.5a.5.5 0 0 0 0-.894l-13-6.5z" fill="currentColor" />
                  </g>
                </svg>
              </button>
            </div>
          
            <!-- Tombol Untuk Menampilkan Kotam Chat Desktop -->
            <div id="ewc_desktop_button" class="ewChatDesktop ewc_open">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 24 24">
                  <g fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.415 14.382c-.298-.149-1.759-.867-2.031-.967c-.272-.099-.47-.148-.669.15c-.198.296-.767.966-.94 1.164c-.174.199-.347.223-.644.075c-.297-.15-1.255-.463-2.39-1.475c-.883-.788-1.48-1.761-1.653-2.059c-.173-.297-.019-.458.13-.606c.134-.133.297-.347.446-.52c.149-.174.198-.298.297-.497c.1-.198.05-.371-.025-.52c-.074-.149-.668-1.612-.916-2.207c-.241-.579-.486-.5-.668-.51c-.174-.008-.372-.01-.57-.01c-.198 0-.52.074-.792.372c-.273.297-1.04 1.016-1.04 2.479c0 1.462 1.064 2.875 1.213 3.074c.149.198 2.095 3.2 5.076 4.487c.71.306 1.263.489 1.694.625c.712.227 1.36.195 1.872.118c.57-.085 1.758-.719 2.006-1.413c.247-.694.247-1.289.173-1.413c-.074-.124-.272-.198-.57-.347zm-5.422 7.403h-.004a9.87 9.87 0 0 1-5.032-1.378l-.36-.214l-3.742.982l.999-3.648l-.235-.374a9.861 9.861 0 0 1-1.511-5.26c.002-5.45 4.436-9.884 9.889-9.884c2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.892 6.993c-.002 5.45-4.436 9.885-9.884 9.885zm8.412-18.297A11.815 11.815 0 0 0 11.992 0C5.438 0 .102 5.335.1 11.892c-.001 2.096.546 4.142 1.587 5.945L0 24l6.304-1.654a11.881 11.881 0 0 0 5.684 1.448h.005c6.554 0 11.89-5.335 11.892-11.893a11.821 11.821 0 0 0-3.48-8.413" fill="currentColor" />
                  </g>
                </svg>
              </div>
              <div>Halo, ada yang bisa dibantu?</div>
            </div>
          
            <!-- Tombol Untuk Menampilkan Kotam Chat Mobile -->
          
            <div id="ewc_mobile_button" class="ewChatMobile ewc_open">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 24 24">
                <g fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.415 14.382c-.298-.149-1.759-.867-2.031-.967c-.272-.099-.47-.148-.669.15c-.198.296-.767.966-.94 1.164c-.174.199-.347.223-.644.075c-.297-.15-1.255-.463-2.39-1.475c-.883-.788-1.48-1.761-1.653-2.059c-.173-.297-.019-.458.13-.606c.134-.133.297-.347.446-.52c.149-.174.198-.298.297-.497c.1-.198.05-.371-.025-.52c-.074-.149-.668-1.612-.916-2.207c-.241-.579-.486-.5-.668-.51c-.174-.008-.372-.01-.57-.01c-.198 0-.52.074-.792.372c-.273.297-1.04 1.016-1.04 2.479c0 1.462 1.064 2.875 1.213 3.074c.149.198 2.095 3.2 5.076 4.487c.71.306 1.263.489 1.694.625c.712.227 1.36.195 1.872.118c.57-.085 1.758-.719 2.006-1.413c.247-.694.247-1.289.173-1.413c-.074-.124-.272-.198-.57-.347zm-5.422 7.403h-.004a9.87 9.87 0 0 1-5.032-1.378l-.36-.214l-3.742.982l.999-3.648l-.235-.374a9.861 9.861 0 0 1-1.511-5.26c.002-5.45 4.436-9.884 9.889-9.884c2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.892 6.993c-.002 5.45-4.436 9.885-9.884 9.885zm8.412-18.297A11.815 11.815 0 0 0 11.992 0C5.438 0 .102 5.335.1 11.892c-.001 2.096.546 4.142 1.587 5.945L0 24l6.304-1.654a11.881 11.881 0 0 0 5.684 1.448h.005c6.554 0 11.89-5.335 11.892-11.893a11.821 11.821 0 0 0-3.48-8.413" fill="currentColor" />
                </g>
              </svg>
            </div>
          </div>
          <!-- Backdrop -->
          <div class="ewChatBackdrop ewc_hidden" style="display: none"></div>
    </section>
    
</body>

<script>
    // Ganti nomor WhatsApp berikut dengan nomor kamu
    const NOMOR_WHATSAPP =
    "6282226582306"; //Pastikan nomor diawali dengan kode negara tanpa tanda "+" (cth. 085-XXX-XXX-XXX diubah mendaji 6285-XXX-XXX-XXX)
    const ewc_hidden = document.querySelectorAll(".ewc_hidden");
    const ewc_button = document.querySelectorAll(".ewc_button");
    const ewc_audio = new Audio(
        "https://res.cloudinary.com/xviidev/video/upload/v1642074623/whatsapp-web_tqjtgm.mp3"
    );

    const ewcShow = () => {
        ewc_hidden.forEach((el) => {
            el.style.display = "flex";
            el.ariaHidden = "false";
        });
        ewc_audio.play();

        setTimeout(() => {
            ewc_hidden.forEach((el) => {
                el.style.opacity = "1";
            });
        }, 0);

        setTimeout(() => {
            document.getElementById("ewChatBubble").style.opacity = "1";
        }, 300);
    };

    const ewcHide = () => {
        ewc_hidden.forEach((el) => {
            el.style.opacity = "0";
            document.getElementById("ewChatBubble").style.opacity = "1";
            el.ariaHidden = "false";
        });

        setTimeout(() => {
            ewc_hidden.forEach((el) => {
                el.style.display = "none";
            });
        }, 1000);
    };

    function ewcOpen() {
        if (ewChatBox.style.display == "none") {
            ewcShow();
        } else {
            ewcHide();
        }
    }

    document.querySelectorAll(".ewc_close").forEach((el) => {
        el.addEventListener("click", ewcHide);
    });

    document.querySelectorAll(".ewc_open").forEach((el) => {
        el.addEventListener("click", ewcOpen);
    });

    document.getElementById("ewc_send").addEventListener("click", () => {
        window.open(
            `https://wa.me/${NOMOR_WHATSAPP}?text=${encodeURI(
  document.getElementById("ewc_message").value
)}`
        );
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>

</html>
