@extends('layouts.layout')
@section('pageTitle', 'postpage')
{{-- @section('title', 'ECC コンミュニティ') --}}
@section('content')
<script></script>

    
        <div class="split-container">
            <div class="location-contr" id="" style="padding:20px 0px">
                <div id="location" class="text-center py-3">
                    <button class="btsearh bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" data-target="view-index"
                        style="border:solid rgb(69, 41, 134)">ハッカソン</button>
                    <button class="btsearh bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200" data-target="view-index"
                        style="border:solid rgb(155, 200, 67)">イベント</button>
                    <button class="btsearh bg-gray-100 hover:bg-red-200 focus:bg-red-300" data-target="view-index"
                        style="border:solid rgb(183, 68, 68)">WEB</button>
                </div>
                <div id="location" class="text-center py-3">
                    <button class="btsearh bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" data-target="view-index"
                        style="border:solid rgb(69, 41, 134)">メンバー募集</button>
                    <a href="{{ route('ranking')}}"><button class="btsearh bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200" data-target="view-index"
                        style="border:solid rgb(155, 200, 67)">ランキング</button></a>
                    <a href="{{ route('hoge') }}"><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300"
                            style="border:solid  rgb(183, 68, 68)">発注者はこちら</button></a>
                </div>
            </div>

            <div class="container1 p-2 " style="background: rgb(38, 36, 36)">
                <p style="font-size: 25px; padding-left:25px">過去の代表制作品</p>
                <div class="slider flex">
                    <div class="slick-img">
                        <img src="{{ url('images/project1.png') }}" alt="Image" />
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/project2.jpg') }}" alt="Image" /></a>
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/project3.jpg') }}" alt="Image" /></a>
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/student1.jpg') }}" alt="Image" /></a>
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/aaa.jpg') }}" alt="" /></a>
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/20210311134726.jpg') }}" alt="" /></a>
                    </div>
                    <div class="slick-img">
                        <a href=""><img src="{{ url('/images/student1.jpg') }}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex">
            <h4 class="title" style="font-size:30px;padding:2% 0;width:30%">By the community, for the community </h4>
            {{-- 検索 --}}
            <div class="relative text-end pt-7" style="width:70%;">
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
                            <img src="{{asset('/storage/postimages/image2.png')}}" alt="userimg" class="w-10 h-10 rounded-full">
                        </div>

                        <div class="flex" style="width:75%">
                            <div class="user mb-2">
                                <p class="title text-yellow-500 font-bold text-xl ">{{ $record->title }} </p>
                                <a href="">{{ $record->name }}</a>
                            </div>
                        </div>
                        <div class="" style="width:10%">
                            <i id="heartIcon" class="fas fa-heart cursor-pointer pl-2 pt-3"
                                style="width:30px;color:white"></i>
                        </div>
                    </div>
                    <div>
                         <p class="text-gray-400 text-xs text-end pr-5 pb-2"><time datetime="投稿記事の⽇時">{{ $record->date }}</time></p>
                    </div>
                 </article>
            @endforeach
        </section>
@endsection
