@extends('layouts.applylayout')
@section('pageTitle', '詳細')
@section('title', 'Comunity Detail')
@section('content')
    <main class="bg-black-100 hover:bg-black-800 rounded-lg shadow-md hover:shadow-lg transition-shadow px-3 pb-4">

        <div class="flex">
            <div>
                <img src="{{ asset('/storage/postimages/image2.png') }}" alt="userimg" class="w-10 h-10 rounded-full">
            </div>
            <div>
                {{-- <div class="title text-yellow-500 text-2xl ">{{ $record->title }} </div> --}}
                <div class="title text-yellow-500 text-2xl ">{{ $clickedEvent->title }}</div>
                <div class="user font-bold ml-1 "><a href="">user</a></div>
                {{-- <div class="user font-bold mb-2" style="width:90%"><a href="">{{ $record->name }}</a></div> --}}
            </div>
        </div>
        <div class="detail-layout flex mt-3">
            <div class="image-container border border-gray-300 rounded-lg overflow-hidden" style="width:600px; height:400px">
                <img class="w-full h-full object-cover" src="{{ asset('/storage/postimages/image2.png') }}">
                {{-- src="{{ asset('/storage/postimages/') . '/' . $event->image }}"alt="" /> --}}

                <br>

            </div>
            <div class="information flex-wrap" style="padding: 10px 0 10px 20px;width:40%">
                <div class="bg-yellow ml-5 mb-2 flex flex-col">
                    <!-- タイトル -->
                    {{-- <h1 class="text-3xl text-center" style="color:white">{{ $event->title }}</h1> --}}

                    <h1 class="text-3xl text-center" style="color:white">{{ $clickedEvent->title }}</h1>
                    <br>
                    <!-- 本文 -->
                    <p class="i-desc ml-2"style="font-size:large">
                        {{-- {{ $event->message }} --}}
                        {{ $clickedEvent->message }}
                    </p>
                </div>
                <hr>
                <div class="bg-yellow ml-5 mb-2">
                    <p class="i-desc ml-2"style="font-size:large">
                        いいね
                        {{-- 自分がlikeしてる時、click()に変数入れます --}}
                        <button class="like fa fa-thumbs-up" onclick="clicks('click')"> :</button>
                    </p>
                </div>


            </div>
        </div>
        <br>
        {{-- <p class="text-lg">開催場所：ECCコンピューター専門学校</p>
        {{-- <p class="text-lg">日付など：{{ $event->date }} -未定</p> --}}
        {{-- <p class="text-lg">日付など：今日 -未定</p> --}}

    </main>
    <script>
        function clicks(aru) {
            const changecolor = document.querySelector('.like');
            console.log(changecolor)
            if (aru === 'click') {
                changecolor.style.color = "aqua";
            }
        }
    </script>
@endsection
