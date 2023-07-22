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
            <div class="detail-layout flex mt-3 ">
                <div class="image-container border border-gray-300 rounded-lg overflow-hidden" style="width:650px; height:400px">
                    <img class="w-full h-full object-cover" src="{{ asset('/storage/postimages/'). "/" . $event->image }}"alt="" />
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
                      <a class="btn btn-custom01" href="###">
                          <span class="btn-custom01-front">応募する！！</span>
                      </a>
                    </div>
                  </div>

        </div>
        <br>
                <p class="text-lg ">開催場所：ECCコンピューター専門学校</p>
                <p class="text-lg ">日付など：xx/xx/xx -xx/xx/xx</p>
        </main>
</section>


@endsection
