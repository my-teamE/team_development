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
                <img class="photo-detail photo-1" src="{{url('/images/aa.jpg')}}" alt="" />
                <br>
                <p class="text-lg ">開催場所：ECCコンピューター専門学校</p>
                <p class="text-lg ">日付など：xx/xx/xx -xx/xx/xx</p>
                </div>
                <div class="information flex-wrap" style="padding: 10px 0 10px 20px">
                    <div class="bg-yellow" style="height:70%">
                        <!-- タイトル -->
                        <p class="text-3xl" style="color:red" >計算処理</p>
                        <br>

                        <!-- 小見出し -->
                        <p class="i-sub" style="font-size:large">使用言語：Java</p>

                        <!-- 本文 -->
                        <p class="i-desc"style="font-size:large">
                        Java言語で、ループ処理を１００回行うプログラムをどなたか教えていただきたいです
                        </p>
                    </div>
                    <!-- 送信ボタン -->
                    <div class="subbt text-end " style="">
                    <!-- 発注者 -->
                        <p class="client ">大窪悠也</p>
                        <a class="btn btn-custom01" href="###">
                            <span class="btn-custom01-front">応募する！！</span>
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
