<!-- Start Header -->
<header id="home">
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg  nav-box-round navbar-simple nav-line">
        <div class="container">
            <a href="#home" title="Logo" class="logo">
                <!--Logo Default-->
                <img src={{ \Illuminate\Support\Facades\Vite::asset('resources/assets/images/logo3.png') }} alt="logo" class="logo-dark" alt="Logo">
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active " href="{{ route('home')  }}/#home">Home<span></span></a>
                    <a class="nav-link " href="{{ route('home')  }}/#contato">Orçamento grátis<span></span></a>
                    <a class="nav-link " href={{ route('home')  }}/#sobre">Sobre<span></span></a>
                    <a class="nav-link " href="{{ route('home')  }}/#servicos">Serviços<span></span></a>
                </div>
            </div>
            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </nav>
    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')  }}/#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')  }}/#contato">Orçamento grátis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')  }}/#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')  }}/#servicos">Serviços</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="https://www.facebook.com/desentope.agil/"><i
                                    class="fab fa-facebook-f"></i></a>
                    </li>
                    <!-- <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a class="linkedin-text-hvr" href="javascript:void(0)"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                    </li> -->
                </ul>
                <p class="">&copy; 2023 Ágil Desentupidora<></p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
<!-- End Header -->