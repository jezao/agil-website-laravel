<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('meta')
    @vite('resources/css/app.css')
</head>
<body data-spy="scroll"  data-target="#megaone" data-offset="90">

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

<!--Banner Start-->
<div class="page-title" style="background: #ffcd04">
    <div class="container">
        <h2 class="hide-cursor">Faça um orçamento</h2>
        <ul class="page-breadcrumb link">
            <li><a href="/"><span class="icon fas fa-home"></span>Home</a></li>
            <li><i class="las la-angle-double-right"></i><span class="d-inline">Contato</span></li>
        </ul>
    </div>
</div>
<!--Banner End-->

<div class="contact-sec" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  contact-details text-center text-lg-left wow slideInRight" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInRight;">

                <span class="contact-sub-heading">Atendimento <strong>24hrs</strong> via whatsapp</span>
                <p>
                    <a href="https://api.whatsapp.com/send/?phone=5515996893668&amp;text&amp;type=phone_number&amp;app_absent=0" class="contact-heading" style="color: #25D366"><i class="lni lni-whatsapp"></i> 15
                        99689.3668</a>
                </p>
                <ul class="contact-list">
                    <li><span>Email: </span> contato@agildesentupidora.com</li>
                </ul>

            </div>

            <div class="col-md-12 col-lg-6 wow slideInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInLeft;">
                <div class="mapouter" id="map">
                    <div>
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/assets/images/whatsapp.jpg') }}" width="100%">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--About Start-->
<section class="about_content">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="product-body">
                    <div class="pro-detail-sec row">
                        <div class="col-12">
                            <hr>

                            <h4 class="pro-heading text-center text-lg-left">Atendimento 24 horas</h4>

                            <p class="pro-text text-center text-lg-left">

                                <h3>Whatsapp</h3>
                                <p>
                                    <a href="https://api.whatsapp.com/send/?phone=5515996893668"
                                       target="_blank"
                                        style="font-weight: bold; color: #25D366"
                                    >
                                        15 99689.3668
                                    </a>
                                </p>
                                Usando essa ferramenta você ter acesso direto a um de nossos prestadores de serviços, ali você tem acesso a informações como:

                                <ul>
                                    <li>Preços de cada um dos serviços</li>
                                    <li>Horários de atendimento</li>
                                    <li>Descontos</li>
                                    <li>Pacotes de serviços</li>
                                </ul>
                            <br>
                            <br>

                            <h3>E-mail</h3>
                                Através do nosso e-mail você também pode fazer as perguntas, deixar ali suas duvidas, e dentro de alguns instantes você terá um e-mail da nossa empresa! Com todas as informações e duvidas que foram nos enviadas!

                                <a href="mailto:contato@agildesentupidora.com" style="font-weight: bold; color: #25D366">contato@agildesentupidora.com</a>
                            <br>
                            <br>
                                <h3>Chat online</h3>
                                Cotação bem rápida, sem demora ou enrolação!
                                Utiliza a opção no canto inferior da tela.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--END LATEST ARRIVALS-->
</section>
<!--About End-->

@include('footer')
</body>
</html>