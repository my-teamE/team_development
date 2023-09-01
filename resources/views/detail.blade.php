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
                <div class="title text-yellow-400 text-2xl pl-1">{{ $clickedEvent->title }}</div>
                {{-- <div class="user font-bold ml-1 "><a href="/confirmation/{{ $id }}">{{ $account->name }}</a></div> --}}
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

                    <h1 class="text-yellow-400 text-center" style="font-size:2vw;">{{ $clickedEvent->title }}</h1>
                    <br>
                    <!-- 本文 -->
                    <p class="i-desc ml-2"style=" font-size:1.5vw; ">
                        {{-- {{ $event->message }} --}}
                        {{ $clickedEvent->message }}
                    </p>
                </div>
                <hr>
                <div class="bg-yellow ml-5 mb-2">
                    {{-- <p class="i-desc ml-2"style="font-size:large">
                        いいね
                        {{-- 自分がlikeしてる時、click()に変数入れます --}}
                        {{-- <button class="like fa fa-thumbs-up" onclick="clicks('click')"> :</button>
                    </p> --}}
                   <b class="text-lg"> 応募メンバー：</b>
                    @foreach ($applydatas as $applydata)
                        <div class="flex">
                            <div class="w-2/3 text-xl" id="apply_user_code">{{ $applydata->apply_user_code }}</div>
                            <div class="w-1/3 text-end">
                                <div style="display: none" class="uniqueId">{{ $applydata->id }}</div>
                                <button class="bg-blue-600 px-2 py-1 rounded-1" id="resolveBtn">許可</button>
                                <button class="bg-red-600 px-2 py-1 rounded-1" id="rejectBtn">拒否</button>
                            </div>
                        </div>
                    @endforeach
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
            // 更新処理をフックしている
            const currentUrl = location.pathname;
            const id = currentUrl.split('/')[2];
            console.log(id);
            fetch(`http://localhost:8000/api/heartclick/${id}`)
                .then(response => response.json())
                .then(data => {
                    console.log("フック出来ている", data);
                })
                .catch(error => {
                    console.error("エラー発生", error);
                })
        }

        const resolveButton = document.querySelector("#resolveBtn");
        const rejectButton = document.querySelector("#rejectBtn");

        resolveButton.addEventListener("click", () => {
            console.log("resolveButton発火");
            const uniqueId = document.querySelector(".uniqueId").innerText;
            console.log(uniqueId);
            fetch(`http://localhost:8000/api/joined/${uniqueId}`)
            .then(data => {
                console.log("成功", data);
            })
            .catch(error => {
                console.error("エラー発生", error);
            });
        });
        rejectButton.addEventListener("click", () => {
            console.log("rejectButton発火");

        })
    </script>
@endsection
