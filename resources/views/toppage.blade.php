@extends('layouts.layout')
@section('pageTitle', 'postpage')
@section('title', 'つながりを持ち、コミュニケーションを取り、情報を共有する')
@section('content')
    <div class="split-container">

        <div class="location-contr" id="" style="padding:20px 0px">
            {{-- フラッシュメッセージ --}}
            @if (session('flash_message'))
                <div class="alert alert-success text-center">
                    {{ session('flash_message') }}
                </div>
            @endif
            {{-- フラッシュメッセージ終わり --}}


            <div id="location" class="text-center py-3">
                <button class="btsearh bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" data-target="view-index"
                    data-category="1" style="border:solid rgb(69, 41, 134)">イベント</button>
                <button class="btsearh bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200" data-target="view-index"
                    data-category="2" style="border:solid rgb(155, 200, 67)">デザイン</button>
                <button class="btsearh bg-gray-100 hover:bg-red-200 focus:bg-red-300" data-target="view-index"
                    data-category="3" style="border:solid rgb(183, 68, 68)">WEB</button>
            </div>
            <div id="location" class="text-center py-3">
                <button class="btsearh bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" data-target="view-index"
                    data-category="4" style="border:solid rgb(69, 41, 134)">ハッカソン</button>
                <a href="{{ route('ranking') }}"><button class="btsearh bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200"
                        data-target="view-index" style="border:solid rgb(155, 200, 67)">ランキング</button></a>
                <a href="{{ route('hoge') }}"><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300"
                        style="border:solid  rgb(183, 68, 68)">発注者はこちら</button></a>
            </div>
        </div>

        <div class="container1 p-2 " style="background: rgb(38, 36, 36); border-radius: 30px;">
            <p style="font-size: 25px; padding-left:25px">過去の代表制作品</p>
            <div class="slider flex">
                <div class="slick-img">
                    <img src="{{ asset('/storage/postimages/' . $eventRankRecords[0]->image) }}" alt="Image" />
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[1]->image) }}"
                            alt="Image" /></a>
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[2]->image) }}"
                            alt="Image" /></a>
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[3]->image) }}"
                            alt="Image" /></a>
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[4]->image) }}"
                            alt="" /></a>
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[5]->image) }}"
                            alt="" /></a>
                </div>
                <div class="slick-img">
                    <a href=""><img src="{{ asset('/storage/postimages/' . $eventRankRecords[6]->image) }}"
                            alt="" /></a>
                </div>

            </div>

        </div>
        </a>
        <div class="flex">
            <h4 class="title" style="font-size:30px;padding:2% 0;width:30%">イベント一覧</h4>
            {{-- 検索 --}}
            <div class="relative text-end pt-7" style="width:70%; ">
                <input
                    class="bg-gray-300 px-3 py-1.5 focus:outline-none focus:ring-red-500 focus:border-red-500 rounded-md text-black "
                    style="width:36%" type="search" id="search" placeholder="検索キーワード">
                {{-- <input class="border border-gray-300 rounded-md py-2 px-4 focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-black" style="width:40%" type="search" placeholder=" 検索"> --}}
                <button id="searchbt" class="bg-blue-300 rounded-md text-white w-10 py-1.5 ">
                    <i class="fa fa-search"></i>
                </button>
            </div>

        </div>
        <section class="grid grid-cols-1 lg:grid-cols-4 gap-2 " id="view-index">

            <h1 class="text-lg" id="a">検索したプロジェクトはございません！！！</h1>
            @foreach ($eventRecords as $record)
                <!-- 一覧画面 -->
                <article
                    class="photo-list row-span-2 bg-black-100 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                    <a href="{{ asset('/apply/' . $record->id) }}" class="photo-link ">
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
                        {{-- 今のところ使わないのでハートアイコンは表示しない --}}
                        {{-- <div class="" style="width:10%">
                        <i id="heartIcon" class="fas fa-heart cursor-pointer pl-2 pt-3" style="width:30px;color:white"></i>
                    </div> --}}
                    </div>
                    <div>
                        <p class="text-gray-400 text-xs text-end pr-5 pb-2"><time
                                datetime="投稿記事の⽇時">{{ $record->date }}</time>
                        </p>
                    </div>
                </article>
            @endforeach
        </section>
    @endsection
