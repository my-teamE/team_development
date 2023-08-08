@extends('layouts.applylayout')
@section('pageTitle', '管理者用画面')
@section('title', 'Created Community')
@section('content')
    <h1 class="pb-4 px-2 text-2xl">投稿したコミュニティ</h1>
<section class="grid grid-cols-1 lg:grid-cols-4 gap-2 p-2" id="view-index">
        @php
            $a=5;
        @endphp
        @for ($i=0;$i<$a;$i++)
            <article class="photo-list row-span-2 bg-black-100 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <a href="{{ asset('detail')}}" class="photo-link ">
                    <img class="photo-thumb photo-1 " src="{{ asset('/storage/images/aa.jpg') }}"
                        alt="" width="640" height="360" alt="button-open" />
                </a>
                <div class="flex">
                    {{-- user image --}}
                    <div class="mt-2" style="width:15%">
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
        @endfor
</section>
@endsection

