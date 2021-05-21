@extends('layouts.app')

@section('content')
    <body class="background-section-1">    
        <!-- HEADER -->
        <header>        
            <div class="banner_image">
                <div class="banner_border_global">
                    
                    {{-- <a class="banner-button-text" href="#anchor_block_part">Démarrer l'expérience</a> --}}
                </div>
            </div>

            <!-- AUDIO -->
            <div class="lecteur">
                <audio controls loop src="musiques/lofi.mp3"></audio>
            </div>

            <div class="lecteur" >
                <audio class="" style="top: 40px" controls loop src="musiques/peaceful-melody.wav"></audio>
            </div>

            <!-- FIXED MENU -->   
            <div class="aside-left">
                <ul>
                    <li>Eclipse</li>
                    <li>Mirror</li>
                    <li>Paradox</li>
                </ul>
            </div>            
        </header>                 

        {{-- SECTION 1 --}}
        <section class="">       
            <h1 class="banner_title text-center pt-1 pb-5">Uni-wave</h1>                                   
            <article class="article1">
                <ul id="anchor_block_part">

                    {{-- ARTICLE 1 --}}
                    <li>
                        <h4 class="neon-title">Block1</h4>
                        <a href="page2.html"><img src="images/syn2.jpg" width="200px"></a>
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
                        <h4 class="neon-title">Block2</h4>
                        <a href="page3.html"><img src="images/syn3.jpg" width="200px"></a>
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
                        <h4 class="neon-title">Block2</h4>
                        <a href="page4.html"><img src="images/syn6.jpg" width="200px"></a>
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
        <section class="background-section-2 p-4">
            <article class="article1">
                <ul id="anchor_block_part">

                    {{-- ARTICLE 1 --}}
                    <li>
                        <h4 class="neon-title">Block1</h4>
                        <a href="page2.html"><img src="images/syn2.jpg" width="200px"></a>
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
                        <h4 class="neon-title">Block2</h4>
                        <a href="page3.html"><img src="images/syn3.jpg" width="200px"></a>
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
                        <h4 class="neon-title">Block2</h4>
                        <a href="page4.html"><img src="images/syn6.jpg" width="200px"></a>
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

        <section class="background-section-3 p-4">
            <article class="article1">
                <iframe 
                    width="560" 
                    height="315" 
                    src="https://www.youtube.com/embed/OHORwLnHIEw" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </article>
        </section>

        <footer class="background-footer">
            
        </footer>         
    </body>
@endsection
