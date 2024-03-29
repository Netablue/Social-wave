@extends('layouts.app')

@section('content')
    <body class="background-section-1">    
        <!-- HEADER -->
        <header>        
            <div class="banner_image">
                <div class="banner_border_global">                    
                </div>
            </div>

            <!-- AUDIO -->
            <div class="lecteur">
                <iframe style="border-radius:12px" 
                        src="https://open.spotify.com/embed/playlist/3ebHKSjHujS4Tyt2KKP97R?utm_source=generator" 
                        width="100%" 
                        height="80" 
                        frameBorder="0" 
                        allowfullscreen="" 
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                </iframe>
            </div>
        
            <!-- FIXED MENU -->   
            <div class="aside-left">
                <ul class="aside-nav">
                    <li>Eclipse</li>
                    <li>Mirror</li>
                    <li>Paradox</li>
                </ul>
            </div>            
        </header>                 

        {{-- SECTION 1 --}}
        <section class="mb-3 pb-2">       
            <h1 class="banner_title text-center pt-1 pb-5">Social-wave</h1>                                   
            <article class="article1">
                <ul id="anchor_block_part">

                    {{-- ARTICLE 1 --}}
                    <li>
                        <h4 class="neon-title">Lorem</h4>
                        <a href="page2.html"><img alt="article picture" src="images/syn2.jpg" width="200px"></a>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Nullam elit lorem, pretium vitae diam ac, rutrum luctus augue. 
                           Mauris lacinia diam neque, eu egestas neque feugiat in. Donec quis metus magna. 
                           Donec vestibulum scelerisque metus. Quisque a fringilla odio, id porta nibh. 
                           Pellentesque euismod vehicula urna sed tincidunt. Curabitur ultricies, sem sed ullamcorper tempor, 
                           nunc risus feugiat odio, quis egestas lorem dui vel ante. Morbi vel tellus metus. 
                           Vestibulum lobortis sem sit amet quam porttitor faucibus.
                        </p>
                    </li>

                    {{-- ARTICLE 2 --}}
                    <li>
                        <h4 class="neon-title">Ipsum</h4>
                        <a href="page3.html"><img alt="article picture" src="images/syn3.jpg" width="200px"></a>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Nullam elit lorem, pretium vitae diam ac, rutrum luctus augue. 
                           Mauris lacinia diam neque, eu egestas neque feugiat in. Donec quis metus magna. 
                           Donec vestibulum scelerisque metus. Quisque a fringilla odio, id porta nibh. 
                           Pellentesque euismod vehicula urna sed tincidunt. Curabitur ultricies, sem sed ullamcorper tempor, 
                           nunc risus feugiat odio, quis egestas lorem dui vel ante. Morbi vel tellus metus. 
                           Vestibulum lobortis sem sit amet quam porttitor faucibus.
                        </p>
                    </li>

                    {{-- ARTICLE 3 --}}
                    <li>
                        <h4 class="neon-title">Dolor</h4>
                        <a href="page4.html"><img alt="article picture" src="images/syn6.jpg" width="200px"></a>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                           Nullam elit lorem, pretium vitae diam ac, rutrum luctus augue. 
                           Mauris lacinia diam neque, eu egestas neque feugiat in. Donec quis metus magna. 
                           Donec vestibulum scelerisque metus. Quisque a fringilla odio, id porta nibh. 
                           Pellentesque euismod vehicula urna sed tincidunt. Curabitur ultricies, sem sed ullamcorper tempor, 
                           nunc risus feugiat odio, quis egestas lorem dui vel ante. Morbi vel tellus metus. 
                           Vestibulum lobortis sem sit amet quam porttitor faucibus.
                        </p>
                    </li>

                </ul>
            </article>     
        </section>   
        
        {{-- SECTION 2 --}}
        <section class="background-section-2 p-4 mt-3">
            <section class="middle-banner">
                <!-- BACKGROUND GIF --> 
            </section>

            <section>
                @include('hexagon')
            </section>            

            <section class="second-middle-banner">
                <!-- BACKGROUND GIF --> 
            </section>            
        </section>

        <section class="background-section-3 p-4">
            <article class="article1">
                <div>
                    @include('_music-player')
                </div>
            </article>
        </section>

        <section>
            {{-- <a class="banner-button-text text-light" href="#anchor_block_part">Démarrer l'expérience</a> --}}
        </section>
    </body>
@endsection
