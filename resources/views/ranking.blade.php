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
                        <p>{{ $eventRecords[0]->title }}</p>
                        <p class="good"> {{ $eventRecords[0]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[0]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img class="second" src="images/crown-10275-silver.png" alt=""><img
                        src="images/aaa.jpg" alt="" />
                    <div>
                        <p>{{ $eventRecords[1]->title }}</p>
                        <p class="good">{{ $eventRecords[1]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[1]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img class="third" src="images/crown-10275-bronze.png" alt=""><img
                        src="images/project1.png" alt="" />
                    <div>
                        <p>{{ $eventRecords[2]->title }}</p>
                        <p class="good">{{ $eventRecords[2]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[2]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ asset('detail') }}"><img src="images/project2.jpg" alt="" />
                    <div>
                        <p>{{ $eventRecords[3]->title }}</p>
                        <p class="good">{{ $eventRecords[3]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[3]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/project3.jpg" alt="" />
                    <div>
                        <p>{{ $eventRecords[4]->title }}</p>
                        <p class="good">{{ $eventRecords[4]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[4]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/aa.jpg" alt="" />
                    <div>
                        <p>{{ $eventRecords[5]->title }}</p>
                        <p class="good">{{ $eventRecords[5]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[5]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/aaa.jpg" alt="" />
                    <div>
                        <p>{{ $eventRecords[6]->title }}</p>
                        <p class="good">{{ $eventRecords[6]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[6]->message }}
                        </p>
                    </div>
                </a>
            </li>
            <li>
                <a href="###"><img src="images/project1.png" alt="" />
                    <div>
                        <p>{{ $eventRecords[7]->title }}</p>
                        <p class="good">{{ $eventRecords[7]->heart }}件👍</p>
                        <p>
                            {{ $eventRecords[7]->message }}
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
