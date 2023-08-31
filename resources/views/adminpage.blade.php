@extends('layouts.applylayout')
@section('pageTitle', '管理者用画面')
@section('title', 'Created Community')
@section('content')
    <div class="flex pt-2 ">
        <div class=" text-center w-full">
            <a href="{{ route('adminpage.index') }}"><button id="bt_admin1"
                    class="px-20 py-3 mx-2 bg-blue-500 text-2xl text-white rounded-lg transition-transform transform scale-110 hover:scale-100 hover:bg-blue-600"
                    onclick="toggleButtonSize('large')">投稿したコミュニティ</button></a>
            <a href="{{ route('adminpage.join') }}"><button id="bt_admin2"
                    class="px-20 py-3 mx-2 bg-green-500 text-2xl text-white rounded-lg transition-transform transform scale-50 hover:scale-100 hover:bg-green-600"
                    onclick="toggleButtonSize('small')">参加したコミュニティ</button></a>
        </div>
    </div>
    <div class="post">
        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a href="{{ route('adminpage.index') }}" id="posting"
                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-black"
                    onclick="change('posting')">投稿中</a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a href="{{ route('adminpage.posed') }}" id="posted"
                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-black bg-white"
                    onclick="change('posted')">投稿済み</a>
            </li>
        </ul>
    </div>
    <div class="join hidden">
        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row ">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a id="joining"
                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-black"
                    onclick="change('joining')">参加中</a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a href="{{ route('adminpage.joined') }}" id="joined"
                    class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-black bg-white"
                    onclick="change('joined')">参加済み</a>
            </li>
        </ul>
    </div>
    {{-- Phần còn lại của mã HTML --}}
    {{-- <div class="flex py-2">
        <div class=" text-center w-full">
        <button class="px-40 py-3 mx-2 bg-gray-100 text-black rounded-lg transition-transform transform hover:scale-110">投稿中</button>
        <button class="px-40 py-3 mx-2 bg-gray-100 text-black rounded-lg transition-transform transform hover:scale-110">投稿済み</button>
        </div>
    </div> --}}
    {{-- <div class="flex py-2">
        <div class=" text-center w-full">
        <button class="px-40 py-3 mx-2 bg-gray-100 text-black rounded-lg transition-transform transform hover:scale-110">参加中</button>
        <button class="px-40 py-3 mx-2 bg-gray-100 text-black rounded-lg transition-transform transform hover:scale-110">参加済み</button>
        </div>
    </div> --}}
    <section class="grid grid-cols-1 lg:grid-cols-4 gap-2 p-2 py-3" id="view-index">
        {{-- ここ画像を表示する --}}
        {{-- @php
            $a=5;
        @endphp
        @for ($i = 0; $i < $a; $i++)
            <article class="photo-list row-span-2 bg-black-100 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <a href="{{ asset('detail')}}" class="photo-link ">
                    <img class="photo-thumb photo-1 " src="{{ asset('/storage/images/aa.jpg') }}"
                        alt="" width="640" height="360" alt="button-open" />
                </a>
                <div class="flex">
                    {{-- user image --}}
        {{-- <div class="mt-2" style="width:15%">
                        <img src="{{asset('/storage/postimages/image2.png')}}" alt="userimg" class="w-10 h-10 rounded-full">
                    </div>

                    <div class="flex" style="width:75%">
                        <div class="user mb-2">
                            <p class="title text-yellow-500 font-bold text-xl ">title </p>
                            <a href="">user</a>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400 text-xs text-end pr-5 pb-2"><time datetime="投稿記事の⽇時">aa/aa/aaaa</time></p>
                </div>
            </article>
        @endfor --}}
        @foreach ($eventRecords as $record)
            <!-- 一覧画面 -->
            <article
                class="photo-list row-span-2 bg-black-100 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <a href="{{ asset('/detail/' . $record->id) }}" class="photo-link ">
                    <img class="photo-thumb photo-1 " src="{{ asset('/storage/postimages/' . $record->image) }}"
                        alt="" width="640" height="360" alt="button-open" />
                </a>
                <div class="flex">
                    {{-- user image --}}
                    <div class="mt-2" style="width:15%">
                        <img src="{{ asset('/storage/postimages/image2.png') }}" alt="userimg"
                            class="w-10 h-10 rounded-full">
                    </div>

                    <div class="flex" style="width:75%">
                        <div class="user mb-2">
                            <p class="title text-yellow-500 font-bold text-xl ">{{ $record->title }} </p>
                            <a href="">{{ $record->name }}</a>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-gray-400 text-xs text-end pr-5 pb-2"><time datetime="投稿記事の⽇時">{{ $record->date }}</time>
                    </p>
                </div>
            </article>
        @endforeach

    </section>

    <script>
        function toggleButtonSize(size) {
            const buttonContainer1 = document.querySelector('#bt_admin1');
            const buttonContainer2 = document.querySelector('#bt_admin2');
            if (size === 'large') {
                document.querySelector(".post").classList.remove("hidden");
                document.querySelector(".join").classList.add("hidden");
                buttonContainer1.classList.remove('scale-50');
                buttonContainer1.classList.add('scale-110');
                buttonContainer2.classList.remove('scale-110');
                buttonContainer2.classList.add('scale-50');
            } else if (size === 'small') {
                document.querySelector(".join").classList.remove("hidden");
                document.querySelector(".post").classList.add("hidden");
                buttonContainer1.classList.remove('scale-110');
                buttonContainer1.classList.add('scale-50');
                buttonContainer2.classList.remove('scale-50');
                buttonContainer2.classList.add('scale-110');
            }
        }

        function change(post) {
            const posting = document.querySelector('#posting');
            const posted = document.querySelector('#posted');
            const joining = document.querySelector('#joining');
            const joined = document.querySelector('#joined');

            if (post === 'posted') {
                posting.classList.remove("text-white", "bg-black");
                posting.classList.add("text-black", "bg-white");
                posted.classList.remove("text-black", "bg-white");
                posted.classList.add("text-white", "bg-black");
            } else if (post === 'posting') {
                posting.classList.remove("text-black", "bg-white");
                posting.classList.add("text-white", "bg-black");
                posted.classList.remove("text-white", "bg-black");
                posted.classList.add("text-black", "bg-white");
            } else if (post === 'joined') {
                joining.classList.remove("text-white", "bg-black");
                joining.classList.add("text-black", "bg-white");
                joined.classList.remove("text-black", "bg-white");
                joined.classList.add("text-white", "bg-black");
            } else if (post === 'joining') {
                joining.classList.remove("text-black", "bg-white");
                joining.classList.add("text-white", "bg-black");
                joined.classList.remove("text-white", "bg-black");
                joined.classList.add("text-black", "bg-white");
            }
        }
    </script>
@endsection
