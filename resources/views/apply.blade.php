@extends('layouts.applylayout')
@section('pageTitle', 'apply')
@section('title', '応募')
@section('content')
    <main class="bg-black-100 hover:bg-black-800 rounded-lg shadow-md hover:shadow-lg transition-shadow px-3 pb-4">
        <div class="flex">
            <div class="mr-2">
                <img src="{{ asset('/storage/postimages/image2.png') }}" alt="userimg" class="w-10 h-10 rounded-full">
            </div>
            <div>
                {{-- <div class="title text-yellow-500 text-2xl ">{{ $record->title }} </div> --}}
                <div class="title text-yellow-500 text-2xl ">{{ $event->title }}</div>
                {{-- <a href="/confirmation/{{ $id }}">
                    <p class="text-lg">{{ $account->name }}さんのプロフィール</p>
                </a> --}}
                <div class="user font-bold ml-1 "><a href="/confirmation/{{ $id }}">{{ $account->name }}</a></div>
                {{-- <div class="user font-bold mb-2" style="width:90%"><a href="">{{ $record->name }}</a></div> --}}
            </div>
        </div>
        <div class="detail-layout flex mt-3"> 
            <div class="image-container border border-gray-300 rounded-lg overflow-hidden"
                style="width:650px; height:400px">
                <img class="w-full h-full object-cover"
                    src="{{ asset('/storage/postimages/') . '/' . $event->image }}"alt="" />
                <br>

            </div>
            <div class="information flex-wrap" style="padding: 10px 0 10px 20px;width:40%">
                <div class="bg-yellow ml-5 mb-2 flex flex-col" style="height:70%;">
                    <!-- タイトル -->
                    <h1 class="text-3xl text-center" style="color:white">{{ $event->title }}</h1>
                    <br>
                    <!-- 本文 -->
                    <p class="i-desc ml-2"style="font-size:large">
                        {{ $event->message }}
                    </p>
                    <p class="mt-auto italic text-l text-end">by {{ $account->name }}</p>
                </div>
                <!-- 送信ボタン -->
                <div class="subbt text-end">
                    <!-- 発注者 -->
                    <a class="btn btn-custom01" id="applyAnker" href="/applied/{{ $id }}">
                        <button class="btn-custom01-front" id="applyButton">応募する</button>
                    </a>
                    <!--formだとどうやっても崩れる-->
                    {{-- <form class="btn btn-custom01" action="/apply/{{ $id }}" method="POST">
                        @csrf
                        <input class="btn-custom01-front" type="submit" value="応募する！！">
                    </form> --}}
                </div>
            </div>

        </div>
        <br>
    </main>
    </section>


@endsection
