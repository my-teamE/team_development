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
                <a href="{{ asset('detail') . '/' . $eventRecords[0]->id }}"><img class="first"
                        src={{ asset('images/crown-10275-gold.png') }} alt=""><img
                        src={{ asset('/storage/postimages/' . $eventRecords[0]->image) }} alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[1]->id }}"><img class="second"
                        src="images/crown-10275-silver.png" alt=""><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[1]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[2]->id }}"><img class="third"
                        src="images/crown-10275-bronze.png" alt=""><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[2]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[3]->id }}"><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[3]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[4]->id }}"><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[4]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[5]->id }}"><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[5]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[6]->id }}"><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[6]->image) }}" alt="" />
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
                <a href="{{ asset('detail') . '/' . $eventRecords[7]->id }}"><img
                        src="{{ asset('/storage/postimages/' . $eventRecords[7]->image) }}" alt="" />
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
