<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('meta')
    @vite('resources/css/app.css')
    <!-- Page Title -->
    <title>&Aacute;gil Desentupidora em Sorocaba - Atendimento 24hrs</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K3JDCVSGNX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K3JDCVSGNX');
    </script>
</head>

<body data-spy="scroll" data-target="#megaone" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="center">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader End -->

@include('heading')

<!-- Start Banner -->
<div class="banner-sec bg-yellow" id="banner">
    <div class="container">
        <div class="row">
            <!-- Content -->
            <div class="col-12 col-lg-6 d-flex align-items-center text-center text-lg-left">
                <div class="heading-area wow slideInLeft" data-wow-delay=".7s">
                    <a href="https://api.whatsapp.com/send/?phone=5515996893668&text&type=phone_number&app_absent=0" class="phone-banner" target="_blank">
                        <i class="lni lni-whatsapp"></i> 15 99689.3668
                    </a>
                    <h4 class="heading">Orçamento<span class="d-block">Grátis.</span></h4>
                    <p class="text">Pagamento facilitado em até <strong>6x</strong></p>
                    <a href="#contato" class="scroll button" style="background: #FFF; padding: 10px; border-radius: 10px;"><i class="las la-angle-right"></i>Agende agora</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-banner wow slideInRight" data-wow-delay=".7s">
                    <img src="{{\Illuminate\Support\Facades\Vite::asset('resources/assets/images/plumber01.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="slider-icons">
        <ul class="slider-social banner-social">
            <li><a class="" href="https://www.facebook.com/desentope.agil/"><i class="fab fa-facebook-f"></i> </a>
            </li>
            <!-- <li><a class="" href="javascript:void(0);"><i class="fab fa-twitter"></i> </a></li>
            <li><a class="" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i> </a></li>
            <li><a class="" href="javascript:void(0);"><i class="fab fa-instagram"></i> </a></li> -->
        </ul>
    </div>
</div>
<!-- End Banner -->

<!-- Start About -->
<section class="about-sec" id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-area">
                    <h4 class="heading-sub wow fadeInDown" data-wow-delay="1s">
                        Sobre nossa empresa
                    </h4>
                    <h1 class="heading-about wow fadeInUp" data-wow-delay=".9s">
                        Garantir sua satisfação é nossa prioridade
                    </h1>
                    <p></p>
                    <p class="text" style="margin-top:40px">
                        A Ágil é uma empresa de desentupimento fundada em 2022, que vem se destacando no mercado
                        pelo atendimento de excelência prestado a clientes residenciais e empresariais.
                    </p>

                    <p class="text">
                        Com uma equipe técnica altamente capacitada e equipamentos modernos e eficientes, a Ágil
                        oferece soluções rápidas e eficazes para <strong>qualquer tipo de entupimento</strong>.
                    </p>

                    <p>
                        Nossa prioridade é garantir a satisfação dos nossos clientes, proporcionando um ambiente
                        limpo e saudável para suas casas ou empresas, empre em busca de novas tecnologias e métodos
                        para aprimorar nossos serviços e garantir a excelência no atendimento.
                    </p>

                    <p>
                        Agradecemos a confiança depositada em nós e estamos sempre prontos para atender você. Conte
                        com a <strong>Ágil</strong> para resolver seus problemas de entupimento com
                        <strong>qualidade e eficiência!</strong>
                    </p>
                </div>
                <div class="image-div">
                    <img src={{ \Illuminate\Support\Facades\Vite::asset('resources/assets/images/plumberAbout.jpg') }} alt="image">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About -->

<!-- Start About 2-->
<!-- <section class="about-sec" id="about2">
<div class="container">
    <div class="row">
         <div class="col-12">
             <div class="about-area">
                 <h4 class="heading-sub wow fadeInDown" data-wow-delay="1s">
                     Sobre nossa empresa
                 </h4>
                 <h1 class="heading-about wow fadeInUp" data-wow-delay=".9s">
                     Lorem ipsum dolor sit amet consectetur.
                 </h1>
             </div>
             <div class="image-div">
                 <img src="assets/images/about-img.png" alt="image">
             </div>
         </div>
    </div>

    <div class="row about padding-top">
        <div class="col-12 col-lg-4 text-center wow slideInLeft" data-wow-delay=".5s">
            <div class="about-card">
                <span>01.</span>
                <h4 class="about-heading">Initial Design</h4>
                <p class="text">Lorem ipsum dolor  amet, consectetur adipiscing elit augue diam, accumsan  ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
        </div>
        <div class="col-12 col-lg-4 text-center wow slideInUp" data-wow-delay=".3s">
            <div class="about-card">
                <span>02.</span>
                <h4 class="about-heading">Build House</h4>
                <p class="text">Lorem ipsum dolor  amet, consectetur adipiscing elit augue diam, accumsan  ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
        </div>
        <div class="col-12 col-lg-4 text-center wow slideInRight" data-wow-delay=".5s">
            <div class="about-card">
                <span>03.</span>
                <h4 class="about-heading">Completion</h4>
                <p class="text">Lorem ipsum dolor  amet, consectetur adipiscing elit augue diam, accumsan  ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
        </div>
    </div>

</div>
</section> -->
<!-- End About -->

<!-- Start Press Release -->
<section class="release-sec bg-yellow" id="servicos">
    <div class="container">
        <div class="row">
            <!-- content -->

            <div class="col-lg-4">
                <div class="release-area wow slideInLeft" data-wow-delay=".5s">
                    <!-- <h4 class="release-text">
                    Lorem ipsum is simply dummy
                </h4> -->
                    <h1 class="release-heading">
                        Serviços
                    </h1>
                    <h4 class="release-des">
                        Soluções ágeis e eficientes para desentupimento em Sorocaba e região
                    </h4>
                    <!-- <a href="assets/standalone.html" class="btn pink-and-orange-btn rounded-pill release_btn">VIEW ALL NEWS</a> -->

                </div>
            </div>
            <!-- release box -->

            <!-- ralos -->
            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Desentupir ralos
                    </h1>
                    <h4 class="box-text">
                        Ralos entupidos podem causar uma série de problemas em sua casa ou empresa, desde o mau
                        cheiro até inundações e infiltrações.
                    </h4>
                    <a href="/desentupir-ralos" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <!-- pias -->
            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Desentupir pias
                    </h1>
                    <h4 class="box-text">
                        Pias entupidas são um problema comum em casas e empresas, causando transtornos e
                        prejudicando a higiene do ambiente. </h4>
                    <a href="/desentupir-pias" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>


                </div>
            </div>

            <!-- vaso sanitario-->
            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Desentupir vaso sanitário
                    </h1>
                    <h4 class="box-text">
                        Vasos sanitários entupidos são um problema desagradável que pode causar mau cheiro e impedir
                        o uso adequado do banheiro.
                    </h4>
                    <a href="/desentupir-vaso-sanitario" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>


                </div>
            </div>

            <!-- Esgoto -->

            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Desentupir esgotos
                    </h1>
                    <h4 class="box-text">
                        Um esgoto entupido inesperado pode trazer muitos transtornos e riscos à saúde, além de
                        prejudicar seriamente o meio ambiente.
                    </h4>
                    <a href="/desentupir-esgoto" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>


                </div>
            </div>

            <!-- Caixa de gordura -->

            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Limpar caixa de gordura
                    </h1>
                    <h4 class="box-text">
                        A caixa de gordura é vital no sistema de esgoto residencial ou empresarial, prevenindo
                        entupimentos e problemas decorrentes do acúmulo de gorduras. </h4>
                    <a href="/limpar-caixa-de-gordura" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>


                </div>
            </div>

            <!-- Hidrojateamento -->

            <div class="col-lg-4">
                <div class="release-box wow slideInRight" data-wow-delay=".4s">
                    <h1 class="box-heading">
                        Hidrojateamento
                    </h1>
                    <h4 class="box-text">
                        O hidrojateamento é um método eficiente e seguro de limpeza de tubulações, utilizando alta
                        pressão de água para remover sujeiras, resíduos e obstruções </h4>
                    <a href="/hidrojateamento" class="release-button">Saiba mais<i
                                class="fas fa-angle-right"></i></a>


                </div>
            </div>



        </div>
    </div>
</section>
<!-- End Press Release -->

<!-- Start Map -->
<section class="contact-sec" id="contato">
    <div class="container">
        <div class="row">
            <div class=" col-lg-6  contact-details text-center text-lg-left wow slideInRight" data-wow-delay=".4s">

                <span class="contact-sub-heading">Atendimento <strong>24hrs</strong> via whatsapp</span>
                <p>
                    <a href="https://api.whatsapp.com/send/?phone=5515996893668&text&type=phone_number&app_absent=0"
                       class="contact-heading" style="color: #25D366"><i class="lni lni-whatsapp"></i> 15
                        99689.3668</a>
                </p>
                <ul class="contact-list">
                    <li><span>Email: </span> contato@agildesentupidora.com</li>
                </ul>

                <hr>

            </div>

            <div class="col-md-12 col-lg-6 wow slideInLeft" data-wow-delay=".4s">
                <div class="mapouter">
                    <div id="map">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/assets/images/whatsapp.jpg') }}" width="100%" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Map -->

@include('footer')
</body>

</html>