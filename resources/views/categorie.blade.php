<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <!--header-->
    <section>
        <div class="header">
            <div class="head-wrapper">
                <div class="head-social">
                    <i class="uil uil-facebook"></i>
                    <i class="uil uil-twitter"></i>
                    <i class="uil uil-instagram"></i>
                    <i class="uil uil-youtube"></i>
                </div>

                <div class="head-bars">
                    <i class="uil uil-bars"></i>
                    <div class="barsdrop">
                        <div class="barsdrop-wrapper">
                            <div class="drop-logo">

                                <div class="drop-logoblank"></div>

                                <img itemprop="logo"
                                    src="https://x-sportkh.com/wp-content/uploads/2022/04/sfsdfsdsdfsdfsdf-e1649833544642.png"
                                    alt="X SPORT" height="50px">

                                <div class="drop-logo-unclick">
                                    <i class="uil uil-multiply"></i>
                                </div>

                            </div>
                            {{-- <div class="drop-item"><a href="/">បាល់ទាត់ជាតិ</a></div>
                            <div class="drop-item"><a href="/">បាល់ទាត់អន្តរជាតិ</a></div>
                            <div class="drop-item"><a href="#">ប្រដាល់ជាតិ</a></div>
                            <div class="drop-item"><a href="#">ប្រដាល់អន្តជាតិ</a></div>
                            <div class="drop-item"><a href="#">បាល់ទះ</a></div>
                            <div class="drop-item"><a href="#">កីឡាគ្រប់ប្រភេទ</a></div> --}}
                            <div class="drop-item">
                                @foreach ($menu as $item)
                                    <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                                @endforeach
                                <div class="drop">
                                    <div class="layout">
                                        <div class="box-wrapper">
                                            @foreach ($posts as $item)
                                                <div class="box">
                                                    <div class="box-img">
                                                        <a href="{{ url('categorie/' . $item->id) }}">
                                                            <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                                width="100%">
                                                        </a>
                                                    </div>
                                                    <div class="box-title">
                                                        <p>{{ $item->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="drop-item">
                                @foreach ($menu2 as $item)
                                    <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                                @endforeach
                                <div class="drop">
                                    <div class="layout">
                                        <div class="box-wrapper">
                                            @foreach ($inter_posts as $item)
                                                <div class="box">
                                                    <div class="box-img">
                                                        <a href="{{ url('categorie/' . $item->id) }}">
                                                            <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                                width="100%">
                                                        </a>
                                                    </div>
                                                    <div class="box-title">
                                                        <p>{{ $item->title }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @foreach ($menu3 as $item)
                                <div class="drop-item">

                                    <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                                    <li>
                                        <div class="menu-list-item-line"></div>
                                    </li>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="head-logo">
                    <img itemprop="logo"
                        src="https://x-sportkh.com/wp-content/uploads/2022/04/sfsdfsdsdfsdfsdf-e1649833544642.png"
                        alt="X SPORT">
                </div>
                <div class="head-search">
                    <i class="uil uil-search"></i>
                    <div class="search">
                        <div class="seach-wrapper">
                            @foreach ($menu as $item)
                                <form action="{{ url($item->id . '/search') }}" method="GET">

                                    <input type="search" placeholder="SEARCH" id="txtsearch" name="txtsearch">
                                    <i class="uil uil-times"></i>
                                </form>
                            @endforeach


                        </div>
                    </div>


                </div>
                <div class="head-blank"></div>
            </div>
        </div>
    </section>
    <!--menu-->
    <section>
        <div class="menu">
            <div class="layout">
                <div class="menu-wrapper">
                    <div class="menu-bars">
                        {{-- <i class="uil uil-bars"></i> --}}
                    </div>

                    <div class="menu-list">
                        {{-- <div class="menu-list-item">
                            <li><a href="/">បាល់ទាត់ជាតិ</a></li>
                            <div class="drop">
                                <div class="layout">
                                    <div class="box-wrapper">
                                        @foreach ($posts as $item)
                                            <div class="box">
                                                <div class="box-img">
                                                    <a href="{{ url('categorie/' . $item->id) }}">
                                                        <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                            width="100%">
                                                    </a>
                                                </div>
                                                <div class="box-title">
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="menu-list-item">
                            <li><a href="/">បាល់ទាត់អន្តរជាតិ</a></li>
                            <div class="drop">
                                <div class="layout">
                                    <div class="box-wrapper">
                                        @foreach ($inter_posts as $item)
                                            <div class="box">
                                                <div class="box-img">
                                                    <a href="{{ url('categorie/' . $item->id) }}">
                                                        <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                            width="100%">
                                                    </a>
                                                </div>
                                                <div class="box-title">
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                        <div class="menu-list-item">
                            @foreach ($menu as $item)
                                <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                            @endforeach
                            <div class="drop">
                                <div class="layout">
                                    <div class="box-wrapper">
                                        @foreach ($posts as $item)
                                            <div class="box">
                                                <div class="box-img">
                                                    <a href="{{ url('categorie/' . $item->id) }}">
                                                        <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                            width="100%">
                                                    </a>
                                                </div>
                                                <div class="box-title">
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- end loop --}}

                        {{-- បាល់ទាត់អន្តរជាតិ --}}

                        <div class="menu-list-item">
                            @foreach ($menu2 as $item)
                                <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                            @endforeach
                            <div class="drop">
                                <div class="layout">
                                    <div class="box-wrapper">
                                        @foreach ($inter_posts as $item)
                                            <div class="box">
                                                <div class="box-img">
                                                    <a href="{{ url('categorie/' . $item->id) }}">
                                                        <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                            width="100%">
                                                    </a>
                                                </div>
                                                <div class="box-title">
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                        @foreach ($menu3 as $item)
                            <div class="menu-list-item">
                                <li><a href="{{ url('/' . $item->id) }}">{{ $item->categorieName }}</a></li>
                                <li>
                                    <div class="menu-list-item-line"></div>
                                </li>
                            </div>
                        @endforeach

                        {{-- <div class="menu-list-item">
                            <li><a href="/">ប្រដាល់អន្តជាតិ</a></li>
                            <li>
                                <div class="menu-list-item-line"></div>
                            </li>
                        </div>
                        <div class="menu-list-item">
                            <li><a href="/">បាល់ទះ</a></li>
                            <li>
                                <div class="menu-list-item-line"></div>
                            </li>
                        </div>
                        <div class="menu-list-item">
                            <li><a href="/">កីឡាគ្រប់ប្រភេទ</a></li>
                            <li>
                                <div class="menu-list-item-line"></div>
                            </li>
                        </div> --}}
                    </div>
                    <div class="menu-search">
                        <i class="uil uil-search"></i>
                        <div class="search">
                            <div class="seach-wrapper">
                                @foreach ($menu as $item)
                                    <form action="{{ url($item->id . '/search') }}" method="GET">

                                        <input type="search" placeholder="SEARCH" id="txtsearch" name="txtsearch">
                                        <i class="uil uil-times"></i>
                                    </form>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--content-->
    <section>

        {{-- <p>{{ $inf->title }}</p> --}}
        <div class="container-cate">

            <div class="categorie">
                <div class="cate-name">
                    {{ $titlecate->categorieName }}
                    {{-- name --}}

                </div>
            </div>

            <div class="topic-title">
                <p>{{ $inf->title }}</p>
            </div>
            <div class="cate-content">
                <div class="cate-left">
                    <div class="cate-left-top">
                        <img src="{{ asset('upload/nationalFootball/' . $inf->image) }}">
                    </div>
                    <div class="cate-left-bottom">
                        <div class="cate-left-bottom-obj">
                            <p>{{ $inf->desTop }}</p>
                            <img src="{{ asset('upload/nationalFootball/' . $inf->imageTop) }}">
                            <p>{{ $inf->desMid }}</p>
                            <img src="{{ asset('upload/nationalFootball/' . $inf->imageMid) }}">
                            <p>{{ $inf->desBottom }}</p>
                            <img src="{{ asset('upload/nationalFootball/' . $inf->imageBottom) }}">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo aspernatur tempore dicta
                                explicabo unde vero dolore suscipit, id neque sapiente, maxime nisi doloremque officiis
                                excepturi, earum nam molestiae est ab?</p>
                        </div>
                    </div>

                </div>
                <div class="cate-right">
                    <div class="cate-right-wrapper">
                        <input type="radio" name="tap" id="lastest" checked>
                        <label for="lastest">Lastest</label>
                        <div class="cate-taps">
                            @foreach ($catetap as $item)
                                <div class="cate-tapbox">
                                    <div class="cate-tapimg">
                                        <a href="{{ url('categorie/' . $item->id) }}">
                                            <img src="{{ asset('upload/nationalFootball/' . $item->image) }}"
                                                width="100%">
                                        </a>
                                    </div>
                                    <div class="cate-taptitle">
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <input type="radio" name="tap" id="tranding">
                        <label for="tranding">tranding</label>
                        <div class="cate-taps">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit voluptatem quidem porro
                            voluptatibus minima expedita. Cumque dicta facere in praesentium quaerat tenetur laboriosam
                            sequi! Minus et quasi quis ipsam!
                        </div>

                        <input type="radio" name="tap" id="video">
                        <label for="video">video</label>
                        <div class="cate-taps">
                            <div class="cate-tapbox">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi velit voluptatem quidem
                                porro
                                voluptatibus minima expedita.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trending">

            </div>

        </div>



    </section>

    <!--footer-->
    <section>
        <div class="footer">
            <div class="layout">
                <div class="footer-wraper">
                    <div class="footer-top">
                        <div class="footer-top-logo">
                            <img itemprop="logo"
                                src="https://x-sportkh.com/wp-content/uploads/2022/04/sfsdfsdsdfsdfsdf-e1649833544642.png"
                                alt="X SPORT" width="90px">
                        </div>
                        <div class="footer-top-social">
                            <i class="uil uil-facebook"></i>
                            <i class="uil uil-twitter"></i>
                            <i class="uil uil-instagram"></i>
                            <i class="uil uil-telegram"></i>
                            <i class="uil uil-youtube"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-bottom">
            <p>© រក្សា​សិទ្ធិ​គ្រប់​យ៉ាង​ដោយ​ <a href="https://x-sportkh.com/">x-sport</a> ឆ្នាំ​ ២០២២
            </p>
        </div>
    </section>

    <script src="{{ asset('js\script.js') }}"></script>

</body>

</html>
