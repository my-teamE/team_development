@extends('layouts.applylayout')
@section('pageTitle', 'ranking')
@section('title', 'Rank')
@section('content')
    <link href="{{ asset('css/ranking.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ranking.js') }}"></script>
    <h1 class="text-center text-3xl text-">現在ランキング</h1>
    <p class="date"></p>


    <main class="main">
        <ul>
            <li>
                <a href="{{ asset('detail') }}"><img class="first" src={{ asset('images/crown-10275-gold.png') }}
                        alt=""><img src="images/aa.jpg" alt="" />
                    <div>
                        <p>制作物１</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img class="second" src="images/crown-10275-silver.png" alt=""><img
                        src="images/aaa.jpg" alt="" />
                    <div>
                        <p>制作物２</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img class="third" src="images/crown-10275-bronze.png" alt=""><img
                        src="images/project1.png" alt="" />
                    <div>
                        <p>制作物３</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img src="images/project2.jpg" alt="" />
                    <div>
                        <p>制作物４</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/project3.jpg" alt="" />
                    <div>
                        <p>制作物５</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/aa.jpg" alt="" />
                    <div>
                        <p>制作物６</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/aaa.jpg" alt="" />
                    <div>
                        <p>制作物７</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/project1.png" alt="" />
                    <div>
                        <p>制作物８</p>
                        <p class="good">〇〇件👍</p>
                        <p>
                            ここには作品の説明文が入ります　～～～～～～～～～～～～～～～～～～～。
                        </p>
                    </div>
                </a>
            </li>
        </ul>

    </main>

    {{-- ページネーションの実装 --}}
    <p class="pgnt">
        < 1 2 3 4 5>
    </p>
@endsection
