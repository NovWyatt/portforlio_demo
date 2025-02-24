<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Luther</title>
    <meta name="description" content="Portfolio Wyatt">
    <meta name="author" content="Wyatt">
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>

<body id="top">


    <!-- # preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- # page wrap
    ================================================== -->
    <div class="s-pagewrap">

        <div class="circles">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>


        <!-- ## site header
        ================================================== -->
        <header class="s-header">

            <div class="header-mobile">
                <span class="mobile-home-link"><a href="/">{{ setting('menu.main') }}</a></span>
                <a class="mobile-menu-toggle" href="#0"><span>Menu</span></a>
            </div>

            <div class="row wide main-nav-wrap">
                <nav class="column lg-12 main-nav">
                    <ul>
                        <li><a href="/" class="home-link">{{ setting('menu.main') }}</a></li>
                        <li class="current"><a href="#intro" class="smoothscroll">{{ setting('menu.li1') }}</a></li>
                        <li><a href="#about" class="smoothscroll">{{ setting('menu.li2') }}</a></li>
                        <li><a href="#works" class="smoothscroll">{{ setting('menu.li3') }}</a></li>
                        <li><a href="#contact" class="smoothscroll">{{ setting('menu.li4') }}</a></li>
                    </ul>
                </nav>
            </div>

        </header> <!-- end s-header -->


        <!-- ## main content
        ==================================================- -->
        <main class="s-content">


            <!-- ### intro
            ================================================== -->
            <section id="intro" class="s-intro target-section">

                <div class="row intro-content wide">

                    <div class="column">
                        <div class="text-pretitle with-line">
                            {{ setting('dres.dres') }}
                        </div>

                        <h1 class="text-huge-title">
                            {!! setting('dres.title') !!}
                        </h1>
                    </div>

                    <ul class="intro-social">
                        <li><a href="{{ setting('mxh.link1') }}">{{ setting('mxh.face') }}</a></li>
                        <li><a href="{{ setting('mxh.link2') }}">{{ setting('mxh.ins') }}</a></li>
                        <li><a href="{{ setting('mxh.link3') }}">{{ setting('mxh.linked') }}</a></li>
                        <li><a href="{{ setting('mxh.link4') }}">{{ setting('mxh.github') }}</a></li>
                    </ul>

                </div> <!-- end intro content -->

                <a href="#about" class="intro-scrolldown smoothscroll">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" clip-rule="evenodd">
                        <path
                            d="M11 21.883l-6.235-7.527-.765.644 7.521 9 7.479-9-.764-.645-6.236 7.529v-21.884h-1v21.883z" />
                    </svg>
                </a>

            </section> <!-- end s-intro -->


            <!-- ### about
            ================================================== -->
            <section id="about" class="s-about target-section">


                <div class="row about-info wide" data-animate-block>

                    <div class="column lg-6 md-12 about-info__pic-block">
                        <img src="images/about-photo.jpg"
                            srcset="images/about-photo.jpg 1x, images/about-photo.jpg 2x" alt=""
                            class="about-info__pic" data-animate-el>
                    </div>

                    <div class="column lg-6 md-12">
                        <div class="about-info__text">

                            <h2 class="text-pretitle with-line" data-animate-el>
                                {{ setting('menu.li2') }}
                            </h2>
                            <p class="attention-getter" data-animate-el>
                                {{ setting('about.dres') }}
                            </p>
                            @php
                                $fileData = json_decode(setting('about.file'), true);
                                $downloadLink = str_replace('\\', '/', $fileData[0]['download_link']);
                                $originalName = $fileData[0]['original_name'];
                            @endphp

                            <a href="{{ asset($downloadLink) }}" class="btn btn--medium u-fullwidth"
                                download="{{ $originalName }}">
                                Download CV
                            </a>
                        </div>
                    </div>
                </div> <!-- about-info -->


                {{-- <div class="row about-expertise" data-animate-block>
                    <div class="column lg-12">

                        <h2 class="text-pretitle" data-animate-el>Expertise</h2>

                        <ul class="skills-list h1" data-animate-el>
                            <li>Visual Design</li>
                            <li>Branding Identity</li>
                            <li>UI Design</li>
                            <li>Product Design</li>
                            <li>Prototyping</li>
                            <li>Illustration</li>
                        </ul>

                    </div>
                </div> <!-- end about-expertise --> --}}


                {{-- <div class="row about-timelines" data-animate-block>

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Experience
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Dropbox</h3>
                                        <h5 class="timeline__meta">Product Designer</h5>
                                        <p class="timeline__timeframe">August 2019 - Present</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi
                                        cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident
                                        cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet
                                        est occaecat nisi.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">Microsoft</h4>
                                    <h5 class="timeline__meta">Frontend Developer</h5>
                                    <p class="timeline__timeframe">August 2016 - July 2019</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi
                                        cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident
                                        cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet
                                        est occaecat nisi.</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->

                    <div class="column lg-6 tab-12">

                        <h2 class="text-pretitle" data-animate-el>
                            Education
                        </h2>

                        <div class="timeline" data-animate-el>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">University of Life</h3>
                                        <h5 class="timeline__meta">Master in Graphic Design</h5>
                                        <p class="timeline__timeframe">April 2015</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi
                                        cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident
                                        cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet
                                        est occaecat nisi.</p>
                                </div>
                            </div>

                            <div class="timeline__block">
                                <div class="timeline__bullet"></div>
                                <div class="timeline__header">
                                    <h4 class="timeline__title">School of Cool Designers</h4>
                                    <h5 class="timeline__meta">B.A. Degree in Graphic Design</h5>
                                    <p class="timeline__timeframe">August 2012</p>
                                </div>
                                <div class="timeline__desc">
                                    <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi
                                        cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident
                                        cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet
                                        est occaecat nisi.</p>
                                </div>
                            </div>

                        </div> <!-- end timeline -->

                    </div> <!-- end column -->


                </div> <!-- end about-timelines --> --}}

            </section> <!-- end s-about -->


            <!-- ### works
            ================================================== -->
            <section id="works" class="s-works target-section">


                <div class="row works-portfolio">

                    @php
                        use App\Models\Project;
                        $projects = Project::where('status', 'published')->orderBy('id')->get();
                        $count = 1;
                    @endphp

                    <div class="column lg-12" data-animate-block>
                        <h2 class="text-pretitle" data-animate-el>
                            Project
                        </h2>
                        <p class="h1" data-animate-el>
                            Here are some of my favorite projects I have done.
                        </p>

                        <ul class="folio-list row block-lg-one-half block-stack-on-1000">
                            @foreach ($projects as $project)
                                <li class="folio-list__item column" data-animate-el>
                                    <a class="folio-list__item-link" href="#modal-{{ $count }}">
                                        <div class="folio-list__item-pic">
                                            <img src="{{ asset('storage/' . str_replace('\\', '/', $project->image)) }}"
                                                srcset="{{ asset('storage/' . str_replace('\\', '/', $project->image)) }} 1x, {{ asset($project->image) }} 2x"
                                                alt="{{ $project->project_name }}">
                                        </div>

                                        <div class="folio-list__item-text">
                                            <div class="folio-list__item-cat">
                                                {{ $project->item_name }}
                                            </div>
                                            <div class="folio-list__item-title">
                                                {{ $project->project_name }}
                                            </div>
                                        </div>
                                    </a>
                                    <a class="folio-list__proj-link"
                                        href="{{ str_starts_with($project->project_url, 'http') ? $project->project_url : 'https://' . $project->project_url }}"
                                        title="project link">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </li>
                                @php $count++; @endphp
                            @endforeach
                        </ul>
                    </div>

                    <!-- Modal Templates -->
                    @php $count = 1; @endphp
                    @foreach ($projects as $project)
                        <div id="modal-{{ $count }}" hidden>
                            <div class="modal-popup">
                                <img src="{{ asset('storage/' . str_replace('\\', '/', $project->image)) }}"
                                    alt="{{ $project->project_name }}">

                                <div class="modal-popup__desc">
                                    <h5>{{ $project->project_name }}</h5>
                                    <p>{{ $project->description }}</p>
                                </div>

                                <a href="{{ str_starts_with($project->project_url, 'http') ? $project->project_url : 'https://' . $project->project_url }}"
                                    class="modal-popup__details">Project link</a>
                            </div>
                        </div>
                        @php $count++; @endphp
                    @endforeach

                </div> <!-- end works-portfolio -->


                {{-- <div class="row testimonials">
                    <div class="column lg-12" data-animate-block>

                        <div class="swiper-container testimonial-slider" data-animate-el>

                            <div class="swiper-wrapper">

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-02.jpg" alt="Author image"
                                            class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Tim Cook</strong>
                                            <span>CEO, Apple</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas
                                        tempore rem.
                                        Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores
                                        quaerat fuga rem nihil nostrum.
                                        Laudantium quia consequatur molestias delectus culpa.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-03.jpg" alt="Author image"
                                            class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Sundar Pichai</strong>
                                            <span>CEO, Google</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos
                                        repellat voluptas animi adipisci.
                                        Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium
                                        perspiciatis.
                                        Quasi voluptas eius distinctio. Atque eos maxime.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-01.jpg" alt="Author image"
                                            class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Satya Nadella</strong>
                                            <span>CEO, Microsoft</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil
                                        ea quia nesciunt. Ducimus aut sed ipsam.
                                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas
                                        eius distinctio.
                                        Voluptatem dignissimos ut.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                                <div class="testimonial-slider__slide swiper-slide">
                                    <div class="testimonial-slider__author">
                                        <img src="images/avatars/user-06.jpg" alt="Author image"
                                            class="testimonial-slider__avatar">
                                        <cite class="testimonial-slider__cite">
                                            <strong>Jeff Bezos</strong>
                                            <span>CEO, Amazon</span>
                                        </cite>
                                    </div>
                                    <p>
                                        Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel
                                        dui. In ac felis
                                        quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at
                                        corrupti expedita voluptas odit.
                                        Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                                    </p>
                                </div> <!-- end testimonial-slider__slide -->

                            </div> <!-- end swiper-wrapper -->

                            <div class="swiper-pagination"></div>

                        </div> <!-- end swiper-container -->

                    </div> <!-- end column -->
                </div> <!-- end row testimonials --> --}}

            </section> <!-- end s-works -->


            <!-- ### contact
            ================================================== -->
            <section id="contact" class="s-contact target-section">

                <div class="row contact-top">
                    {{-- <div class="column lg-12">
                        <h2 class="text-pretitle">
                            Get In Touch
                        </h2>

                        <p class="h1">
                            I love to hear from you.
                            Whether you have a question or just
                            want to chat about design, tech & art — shoot me a message.
                        </p>
                    </div> --}}
                </div> <!-- end contact-top -->

                <div class="row contact-bottom">
                    <div class="column lg-3 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Reach me at</h3>
                        <p class="contact-links">
                            <a href="mailto:{{ setting('about.mail') }}"
                                class="mailtoui">{{ setting('about.mail') }}</a> <br>
                            <a href="tel:{{ setting('about.sdt') }}">{{ setting('about.sdt') }}</a>
                        </p>
                    </div>
                    <div class="column lg-4 md-5 tab-6 stack-on-550 contact-block">
                        <h3 class="text-pretitle">Social</h3>
                        <ul class="contact-social">
                            <li><a href="{{ setting('mxh.link1') }}">{{ setting('mxh.face') }}</a></li>
                            <li><a href="{{ setting('mxh.link2') }}">{{ setting('mxh.ins') }}</a></li>
                            <li><a href="{{ setting('mxh.link3') }}">{{ setting('mxh.linked') }}</a></li>
                            <li><a href="{{ setting('mxh.link4') }}">{{ setting('mxh.github') }}</a></li>
                        </ul>
                    </div>
                    <div class="column lg-4 md-12 contact-block">
                        <a href="mailto:{{ setting('about.mail') }}"
                            class="mailtoui btn btn--medium u-fullwidth contact-btn">Say Hello.</a>
                    </div>
                </div> <!-- end contact-bottom -->

            </section> <!-- end contact -->

        </main> <!-- end s-content -->


        <!-- ## footer
        ================================================== -->
        <footer class="s-footer">

            <div class="row">
                <div class="column ss-copyright">
                    <span>© Copyright Wyatt 2024</span>
                    {{-- <span>Design by <a href="#">StyleShout</a> Distribution By <a
                            href="#">Wyatt</a></span> --}}
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd"
                            clip-rule="evenodd">
                            <path
                                d="M11 2.206l-6.235 7.528-.765-.645 7.521-9 7.479 9-.764.646-6.236-7.53v21.884h-1v-21.883z" />
                        </svg>
                    </a>
                </div>
            </div>

        </footer> <!-- end s-footer -->

    </div> <!-- end -s-pagewrap -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
