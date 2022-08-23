<?php use App\Models\FooterLink; ?>
<?php use App\Models\Service; ?>
<?php use App\Models\socialpage; ?>
<div class="vgvvvgvg hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="fdgdhb">
                    <h2>Subscribe to our Newsletter</h2>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="hero-text">
                    <form class="hero-form" id="contactForm">
                        <div class="hero-form-input">
                            <input class="hero-email-input" id="email" name="email" type="email"
                                placeholder="Email Address" required="">
                            <input type="submit" class="hero-form-submit" id="submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <?php
            use App\Models\HomePageCustomization;
            $homepageModel = new HomePageCustomization();
            $permission = $homepageModel->permissionList();
            ?>
            <?php $allLinks = FooterLink::links(); ?>
            @if ($permission['footer_link'] == 1)
                @foreach ($allLinks as $category => $links)
                    <div class="col-md-3 col-lg-3 col-sm-6 mb-4">
                        <div class="footerlinks">
                            <h5 class="fred">{{ $category }}</h5>
                            <ul>
                                @foreach ($links as $link)
                                    <li><a href="/{{ $link['url'] }}" class="">{{ $link['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-md-3 col-lg-3 col-sm-6 mb-4">
                <div class="footerlinks notAnimate">
                    <ul>
                        <li><span><i class=" circleicon_light fa fa-rupee"></i> COD Available</span></li>
                        <li><span><i class="circleicon_light fa fa-refresh"></i> 30 Days Easy Returns</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="row justify-content-center text-center store-section align-content-center my-3">
            <div>
                <div class="text-uppercase">
                    <div class="app-download-header"><b><i class="fa fa-mobile mr-1"></i> experience the souled store
                            app</b>
                    </div>
                </div>
                <div class=" store"><a href="#" class="mr-3">
                        <img alt="Download app on google play store" class="app-store-logo gm-observing gm-observing-cb"
                            src="user/assets/images/play-store.png"></a> <a href="#"><img
                            src="user/assets/images/app-store.png" alt="Download app on apple app store"
                            class="app-store-logo gm-observing gm-observing-cb"></a>
                </div>
            </div>
        </div> -->
        <div class="footersocial">
            @if ($permission['social_link'] == 1)
                <div style="display: inline;">Follow Us: &nbsp; </div>
                <?php 
                    $Facebook = socialpage::socialLinkFacebook();
                    $GooglePlus = socialpage::socialLinkGooglePlus();
                    $Twitter = socialpage::socialLinkTwitter();
                    $Dribbble = socialpage::socialLinkDribble();
                    $Linkedin = socialpage::socialLinkLinkedin();
                ?>
                <div class="inlineEl pt20">
                    <div>
                        <div class="joinbx">
                            <a href="@if(isset($Facebook['url'])){{$Facebook['url']}}@endif" target="_blank" rel="noopener" class="nonecolor circle-icon fbook">
                                <i class="ion-social-facebook"></i>
                            </a>
                            <a href="@if(isset($GooglePlus['url'])){{$GooglePlus['url']}}@endif" target="_blank" rel="noopener" class="nonecolor circle-icon instagram">
                                <i class="ion-social-instagram"></i>
                            </a>
                            <a href="@if(isset($Twitter['url'])){{$Twitter['url']}}@endif" target="_blank" rel="noopener" class="nonecolor circle-icon snapchat  small"><i
                                    class="ion-social-snapchat"></i>
                            </a>
                            <a href="@if(isset($Linkedin['url'])){{$Linkedin['url']}}@endif" target="_blank" rel="noopener" class="nonecolor circle-icon twitter"><i
                                    class="ion-social-twitter"></i>
                            </a>
                            <a href="@if(isset($Dribbble['url'])){{$Dribbble['url']}}@endif" target="_blank" rel="noopener" class="nonecolor circle-icon twitter"><i
                                    class="ion-social-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- <div class="accordion-container">
            <div class="set">
                <a> NAVIGATION LINKS <i class="fa fa-plus"></i></a>
                <div class="content">
                    <div class="navigationbox" style="display: block;">
                        <div id="footernav">
                            <div class="navi">
                                <div class="brand-cover">Men</div>
                                <div>
                                    <a href="/men/t-shirts" class="">T-Shirts</a>
                                    <a href="/men/co-ord-sets" class="">Co-ord Sets</a>
                                    <a href="/men/drop-cut-tshirts" class="">Drop-Cut
                                        T-Shirts</a>
                                    <a href="/men/full-sleeve-tshirts" class="">Full
                                        Sleeve T-Shirts</a>
                                    <a href="/men/oversized-tshirts" class="">Oversized
                                        T-Shirts</a>
                                    <a href="/men/polo-tshirts" class="">Polos</a>
                                    <a href="/men/shirts" class="">Shirts</a>
                                    <a href="/men/tank-tops-and-vests" class="">Tank
                                        Tops &amp; Vests</a>
                                    <a href="/men/hoodies-and-sweatshirts" class="">Hoodies &amp;
                                        Sweatshirts</a>
                                    <a href="/men/men-base-layer" class="">Base Layer
                                        Wear</a>
                                    <a href="/men/jackets" class="">Jackets</a>
                                    <a href="/men/sweaters" class="">Sweaters</a>
                                    <a href="/explore/mens-cotton-pants" class="">Cotton Pants</a>
                                    <a href="/men/joggers" class="">Joggers</a>
                                    <a href="/men/sweat-shorts" class="">Shorts</a>
                                    <a href="/men/pajamas" class="">Pajamas</a>
                                    <a href="/men/boxer-shorts" class="">Boxers</a>
                                    <a href="/men/trunks-underwear" class="">Innerwear</a>
                                    <a href="/explore/cotton-masks" class="">CottonMasks</a>
                                </div>
                            </div>
                            <div class="navi">

                                <div class="brand-cover">Women</div>
                                <div>
                                    <a href="/women/womens-tshirts" class="">Women's T-Shirts</a>
                                    <a href="/women/women-co-ord-sets" class="">Co-ord Sets</a>
                                    <a href="/women/unisex-t-shirts" class="">Unisex T-Shirts</a>
                                    <a href="/women/t-shirt-dresses" class="">Dresses</a>
                                    <a href="/explore/womens-shirts" class="">Shirts</a>
                                    <a href="/women/tank-tops" class="">Tank Tops</a>
                                    <a href="/women/hoodies-and-sweatshirts" class="">Hoodies &amp;
                                        Sweatshirts</a>
                                    <a href="/women/women-base-layer" class="">Base Layer Wear</a>
                                    <a href="/women/jackets" class="">Jackets</a>
                                    <a href="/women/women-knitted-sweaters" class="">Sweaters</a>
                                    <a href="/women/joggers" class="">Joggers</a>
                                    <a href="/explore/womens-pajamas" class="">Pajamas</a>
                                    <a href="/explore/unisex-denim-joggers" class="">All Day Pants</a>
                                    <a href="/women/shorts" class="">Shorts</a>
                                    <a href="/explore/jeggings" class="">Urban Leggings</a>
                                    <a href="/women/hipster-underwear" class="">Innerwear</a>
                                    <a href="/explore/cotton-masks" class="">Cotton Masks</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="set">
            <a>
                WHO WE ARE
                <i class="fa fa-plus"></i>
            </a>
            <div class="content">
                <div class=" footer-content text-justify">
                    <p>The Souled Store was born out of the simple idea of loving what you do - following your soul –
                        and, of course, our love for puns (sold/ souled). Our philosophy is just as simple- life is
                        short, don’t spend it doing something you don’t like. From our products to our website, from our
                        office culture to the way we interact with our customers, this philosophy’s a part of everything
                        we do.
                    </p>
                    <div class="my-4"></div>
                    In June 2013, The Souled Store was founded by four people, with just a cupboard full of t-shirts
                    (probably as big as yours). Although we’ve grown from cupboards to warehouses, a lot of things have
                    remained the same. Our core values are now shared not by just four people, but by a team that’s now
                    grown to over a hundred people.
                    <div class="my-4"></div>
                    <u>The Neighbourhood Store Vibe</u>
                    <br>
                    We aspire to be your favourite, friendly neighbourhood store. We curate all your favourite designs
                    and make them available on various products ranging from t-shirts, bags, and badges to phone covers,
                    stickers, notebooks, and more. We’re always enthusiastic and kicked about interacting with everyone-
                    whether it’s handling queries over email and social media or interacting with our fans at various
                    events, workshops, and stalls. Why? Because we care. A recent study by our in-house, prize-winning,
                    and totally unbiased researchers showed that visiting www.thesouledstore.com causes excessive
                    happiness, and could increase your lifespan by up to 7.5%.
                    <div class="my-4"></div>
                    <u>The ‘POP’</u>
                    <br>
                    Defined as “modern popular culture transmitted via the mass media and aimed particularly at younger
                    people,” pop culture changes rapidly based on trends and events. Be it movies, TV shows, stand-up
                    comedians, sports, or music- it’s constantly evolving. The Souled Store constantly adapts to provide
                    you the freshest of products, with the best of designs, covering all your favourite fandoms. We put
                    the ‘pop’ in pop culture.
                    <div class="my-4"></div>
                    <u>All of this for YOU</u>
                    <br>
                    We help you express yourself through our wide collection of products available online. The
                    collection is extensive and features menswear and womenswear. Our t-shirts online reflect the latest
                    trends. We have official merchandise for Hollywood and Bollywood movies, your favourite TV shows, as
                    well as top sports teams- there’s something for everyone! With your love and support, The Souled
                    Store has grown to over 1 million fans on Facebook, 200,000 followers on Instagram and the numbers
                    are growing as we type this. We’re grateful to have you as a part of our journey to spread love to
                    more and more Souledsters all over.
                    <div class="my-4"></div>
                    <u>Our Collection</u>
                    <br>
                    Our product range contains a mix of apparel and accessories. Apparels include t-shirts (round necks
                    and polos), t-shirt dresses, boxers, hoodies, jerseys, and socks. The accessories include backpacks,
                    duffle bags, tote bags, badgers, stickers, mugs, notebooks (diaries), magnets, posters, action
                    figures, keychains, and mobile covers.
                    <div class="my-4"></div>
                    <u>Our Ethos</u>
                    <br>
                    While we are a fun loving, pop culture brand, as a company that interacts so actively with various
                    people from diverse backgrounds, we have a larger, more responsible role to play. We try and lend
                    support to a variety of causes that we are passionate about and do our bit to give back.
                    <div class="my-4"></div>
                    Most recently, we launched a campaign in collaboration with GiveHer5, a social initiative, to
                    provide safe, affordable sanitary solutions to women in rural areas. We worked enthusiastically to
                    design a wide range of merchandise, featuring themes of female empowerment, feminism, and gender
                    equality, to raise funds and fight period poverty. Every t-shirt sold = 1 girl’s yearly requirement
                    of sanitary napkins. Through sustained efforts of the GiveHer5 team and with the help of a lot of
                    celebrities who lent their support, we were able to help over 1,000 girls and women, a number we’re
                    super proud of!
                    <div class="my-4"></div>
                    <u>Welcome Aboard</u>
                    <br>
                    We’re always looking for awesome people!
                    <div class="my-4"></div>
                    As a company growing fast, in a country brimming with talent, The Souled Store is always looking for
                    you fun, talented people to join and contribute to what we’re trying to build. Our workspace is a
                    highly dynamic and positive space, where ideas are encouraged, creativity is rewarded, leadership
                    and initiative are valued, and quirkiness is essential. This ties back to our founding philosophy –
                    do what you love, and don’t waste a moment doing something you don’t like. Most of our company’s
                    souls have cast away mundane corporate jobs, and haven’t looked back since.
                    <div class="my-4"></div>
                    Our Mondays are without blues, and are just as crazy as our Fridays. Thinking on your feet and
                    finding innovative solutions to all kinds of tasks is part of the job. If you think this is where
                    you belong, look up our available positions on our ‘Careers’ page. The Souled Store is not just a
                    website or an organisation but a community of like-minded people getting together and expressing
                    themselves through their work.
                    <div class="my-4"></div>
                    WARNING: Chill vibes only.<p></p>
                </div>
            </div>
        </div>
    </div> -->



        <div class="pay-section">
            <div class="row">
                <?php 
                    $allServices = Service::showService();
                ?>
                @if ($permission['service'] == 1)
                    @foreach ($allServices as $key=>$services)
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="payment-section-img">
                                <p><b>{{ $key }}: </b></p>
                                <ul>
                                    @foreach ($services as $service)
                                        <li><a href="#"><img src="{{ asset('service/image') }}/{{ $service['image'] }}" alt=""></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <p class="text-center">COPYRIGHT © 2022</p>
    </div>
</footer>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        // alert(email); 
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/subscribe',
            data: {
                email: email
            },
            type: 'post',
            success: function(resp) {
                if (resp['success']) {
                    swal("Congratulations!", "You have been subscribed to our Newsletter!",
                        "success")
                } else {
                    swal("", "You have already subscribed to our Newsletter!", "error")
                }

            },
            error: function() {
                alert(error);
            }
        });
    });
</script>
