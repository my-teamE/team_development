@extends('layouts.layout')
@section('pageTitle','apply')
{{-- @section('title','ECC コンミュニティ') --}}
@section('content')
    <main>
          <!-- 詳細画面 -->
        {{-- <div class="view-detail" data-content="1" > --}}
            {{-- <div class="detail-action">
            <a href="{{ route("toppage.index")}}">
                <button class="btn button-close ">一覧へもどる</button>
            </a>
            </div> --}}
            <div class="detail-layout flex mt-3">
                <div>
                <img class="photo-detail photo-1" src="{{ asset('/storage/postimages/'). "/" . $event->image }}" alt="" />
                <br>
                </div>
                <div class="information flex-wrap" style="padding: 10px 0 10px 20px">
                    <div class="bg-yellow" style="height:70%">
                        <!-- タイトル -->
                        <p class="text-3xl" style="color:red" >{{ $event->title }}</p>
                        <br>

                        <!-- 本文 -->
                        <p class="i-desc"style="font-size:large">
                            {{ $event->message }}
                        </p>
                    </div>
                    <!-- 送信ボタン -->
                    <div class="subbt text-end " style="">
                    <!-- 発注者 -->
                        <p class="client ">{{ $account->name }}</p>
                        <a class="btn btn-custom01" href="/toppage">
                            <span class="btn-custom01-front" id="applyButton">応募する！！</span>
                        </a>
                    </div>
                </div>
        </div>

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="#"><i class="far fa-comment-dots text-yellow hover:text-blue-600" style='font-size:24px; padding:5px '></i></a>
            <a href="{{ route('profile') }}" >
                <i class="fas fa-user text-yellow hover:text-yellow-600" style="font-size: 26px;"></i>
            </a>
        </main>
</section>


@endsection
