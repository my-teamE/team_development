@extends('layouts.layout')
@section('pageTitle','postpage')
@section('title','ECC コンミュニティ')
@section('content')
        <section>
            <main>
            <div class="split-container">
                    <div class="location-contr" id="" style="padding:20px 0px">
                        <div id="location" class="text-center py-3">
                            <button >開発</button>
                            <button>イベント</button>
                            <button>WEB</button>
                        </div>
                        <div id="location" class="text-center py-3">
                            <button>メンバー募集</button>
                            <button>アイデア募集</button>
                            <button>過去の制作物</button>
                        </div>
                   </div>
                <div class="container1 p-2">
                    <div class="slider flex overflow-hidden">
                        <div class="slick-img">
                            <img src="{{url('/images/upload1.png')}}" alt="Image"/>
                        </div>
                        <div class="slick-img">
                            <img src="{{url('/images/upload1.png')}}" alt="Image"/>
                        </div>
                        <div class="slick-img">
                            <img src="{{url('/images/upload1.png')}}" alt="Image"/>
                        </div>
                        <div class="slick-img">
                            <img src="{{url('/images/upload1.png')}}" alt="Image"/>
                        </div>
                        <div class="slick-img">
                            <img src="{{url('/images/upload1.png')}}" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $count = 0;
            @endphp
    <div class="flex p-3" id="view-index">
         @while($count < 4)
 <!-- 一覧画面 -->
            <div class="photo-list m-10">
                <div class="photo-link  ">
                  <img
                    class="photo-thumb photo-1 "
                    data-content="1"
                    src="{{url('/images/aaa.jpg')}}" alt=""
                    width="640"
                    height="360"
                    alt="button-open"/>
                    <div class="photo-meta">
                        <p class="title font-medium " style="font-size: 20px">計算処理</p>
                    </div>
                    <div>
                      <button class="btn button-open" data-content="1">詳細を開く</button>
                    </div>
                </div>
            </div>
            @php
                $count++;
            @endphp
        @endwhile
    </div>
          <!-- 詳細画面 -->
        <div class="view-detail" data-content="1" hidden>
            <div class="detail-action">
              <button class="btn button-close ">一覧へもどる</button>
            </div>
            <div class="detail-layout flex">
                <img class="photo-detail photo-1" src="{{url('/images/aa.jpg')}}" width="640" height="390" alt="" />
                <div class="information" style="padding: 10px 20px 10px">
                    <!-- タイトル -->
                    <p class="text-3xl" style="color:red" >計算処理</p>

                    <!-- 小見出し -->
                    <p class="i-sub" style="font-size:20px">使用言語：Java</p>

                    <!-- 本文 -->
                    <p class="i-desc"style="font-size: 20px">
                    Java言語で、ループ処理を１００回行うプログラムをどなたか教えていただきたいです
                    </p>
                    <!-- 送信ボタン -->
                    <div class="subbt" style=" position:fixed; bottom: 120px; right: 20px;">
                    <!-- 発注者 -->
                    <p class="client ">大窪悠也</p>
                        <a class="btn btn-custom01" href="###">
                            <span class="btn-custom01-front">応募する！！</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </main>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <input style="border-radius: 5px" class="bg-gray-300 justify-center" type="search" placeholder="    検索">
                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    {{-- 検索 --}}
                    <input class="bg-gray-300 px-2 py-1 rounded-lg w-48 text-black" type="search" placeholder="    検索">
                        {{-- <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow">Log in</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow" >Register</a> --}}
        {{-- login 画面 --}}
                    {{-- loginされてないとき --}}
                    @auth
                        <img src="{{url('/images/usericon.jpg')}}" alt="icon">
                        <a href="">msg</a>
                    {{-- login の時 --}}
                    @else
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                        <div id="id01" class="modal">
                            <form class="modal-content animate" action="#" method="post">
                                <h1 class="text-center text-3xl font-semibold pt-3 ">Login</h1>
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                              <div class="imgcontainer">
                                <img src="{{url('/images/upload1.png')}}" alt="Avatar" class="avatar mx-auto my-auto " style="border-radius:50%">
                              </div>
                              <div class="container2">
                                    <label for="uname"><b>User</b></label>
                                        <input type="id" id="id"  placeholder="Student ID"  class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                                    <label for="psw"><b>Password</b></label>
                                        <input type="password" id="password"  class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label><br>
                                    <button type="submit">Login</button>
                              </div>
                              <div class="container-b" style="background-color:#5b5656">
                                <span class="psw underline"> <a href="#">Forgot password?</a></span>
                              </div>
                            </form>
                        </div>
                    {{-- 新規登録 --}}
                        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
                        <div id="id02" class="modal">
                            <form class="modal-content animate" action="" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>
                            <div class="container2">
                                <h1 class="text-center text-3xl font-semibold pt-3 ">Register</h1>
                                    <hr class="bg-red-20 m-2 p-2">
                                    <label for="uname"><b>User ID</b></label>
                                    <input type="id" id="id" placeholder="Student ID" class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                                    <label for=""><b>Password</b></label>
                                        <input type="password" id="password"  class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                                    <label for=""><b>Repeat Password</b></label>
                                        <input type="password" id="repassword" class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="RepassWord" required>
                                    <button type="submit">Register</button>
                                    <p style="text-align: center ">Login with <a href="">gmail</a>,<a href="">facebook</a></p>
                            </div>

                            </form>
                        </div>
                    @endauth
                </div>
</section>


@endsection
