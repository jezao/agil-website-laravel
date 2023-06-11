<!--Footer Start-->
<footer class="footer-sec text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="https://www.facebook.com/desentope.agil/"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-google-plus-g"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-linkedin-in"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i class="fab fa-instagram"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i class="fab fa-youtube"
                                    aria-hidden="true"></i></a></li> -->
                    </ul>
                </div>
                <p class="company-about fadeIn">&copy; 2023 Ágil Desentupidora</p>

                <div class="cidades">
                    <ul>
                        <li>Desentupidora em Águas de Santa Bárbara - SP</li>
                        <li>Desentupidora em Alambari - SP</li>
                        <li>Desentupidora em Angatuba - SP</li>
                        <li>Desentupidora em Apiaí - SP</li>
                        <li>Desentupidora em Araçoiaba da Serra - SP</li>
                        <li>Desentupidora em Barão de Antonina - SP</li>
                        <li>Desentupidora em Boituva - SP</li>
                        <li>Desentupidora em Bom Sucesso de Itararé - SP</li>
                        <li>Desentupidora em Buri - SP</li>
                        <li>Desentupidora em Cabreúva - SP</li>
                        <li>Desentupidora em Campina do Monte Alegre - SP</li>
                        <li>Desentupidora em Capão Bonito - SP</li>
                        <li>Desentupidora em Capela do Alto - SP</li>
                        <li>Desentupidora em Cerquilho - SP</li>
                        <li>Desentupidora em Cesário Lange - SP</li>
                        <li>Desentupidora em Guapiara - SP</li>
                        <li>Desentupidora em Guareí - SP</li>
                        <li>Desentupidora em Ibiúna - SP</li>
                        <li>Desentupidora em Iperó - SP</li>
                        <li>Desentupidora em Itaberá - SP</li>
                        <li>Desentupidora em Itapetininga - SP</li>
                        <li>Desentupidora em Itapeva - SP</li>
                        <li>Desentupidora em Itapirapuã Paulista - SP</li>
                        <li>Desentupidora em Itaporanga - SP</li>
                        <li>Desentupidora em Itararé - SP</li>
                        <li>Desentupidora em Jumirim - SP</li>
                        <li>Desentupidora em Laranjal Paulista - SP</li>
                        <li>Desentupidora em Nova Campina - SP</li>
                        <li>Desentupidora em Pereiras - SP</li>
                        <li>Desentupidora em Piedade - SP</li>
                        <li>Desentupidora em Pilar do Sul - SP</li>
                        <li>Desentupidora em Porangaba - SP</li>
                        <li>Desentupidora em Porto Feliz - SP</li>
                        <li>Desentupidora em Quadra - SP</li>
                        <li>Desentupidora em Ribeira - SP</li>
                        <li>Desentupidora em Ribeirão Grande - SP</li>
                        <li>Desentupidora em Riversul - SP</li>
                        <li>Desentupidora em Salto - SP</li>
                        <li>Desentupidora em Salto de Pirapora - SP</li>
                        <li>Desentupidora em São Miguel Arcanjo - SP</li>
                        <li>Desentupidora em Sarapuí - SP</li>
                        <li>Desentupidora em Sorocaba - SP</li>
                        <li>Desentupidora em Tapiraí - SP</li>
                        <li>Desentupidora em Taquarivaí - SP</li>
                        <li>Desentupidora em Tatuí - SP</li>
                        <li>Desentupidora em Tejupá - SP</li>
                        <li>Desentupidora em Tietê - SP</li>
                        <li>Desentupidora em Torre de Pedra - SP</li>
                        <li>Desentupidora em Votorantim - SP</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<!--START SCROLL TOP-->
<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!--END SCROLL TOP-->
@vite('resources/js/app.js');
<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "119215121142821");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>


<script defer>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v17.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
