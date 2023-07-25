@extends('layouts.profilelayout')
@section('pageTitle','profilepage')
@section('title','Profile')
@section('content')
    <section>
        <div class="profile">
            {{-- お知らせ機能 --}}
            <div class="notification-container hidden absolute top-1/4 left-1/3 right-1/3 px-4 bg-black rounded-lg shadow-md border border-gray-300 animate__animated" id="notification">
                <button class="close-button absolute right-2 text-blue-700 hover:text-red-600 text-xl">&times;</button>
                <p class="text-gray-300 text-lg py-4">ここはお知らせです</p>
            </div>
            <div class="avatar-con">
                <div class="avatar">
                <img src="{{ url('/images/user.png') }}" alt="">
                 <div class="text-end text-black flex">
                    <p style="width:30%"></p>
                    <p>  {{ $account->name }}</p>
                    <button class='text-lg text-end pl-6' id="editbt" title="編集"><i class='far'>&#xf044; </i></button>
               </div>
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>
            <div class="introduction">
                <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                    <p>Full name: {{ $account->name }}</p>
                    <p>Gender: {{ $account->gender }} </p>
                    <p>Class: {{ $profile->class }}</p>
                    <p>Student_id: {{ $profile->student_id }}</p>
                </div>
                <div style="width:10%"></div>
                <div class="skill text-lg p-4 " style="background-color:#c8bec6;width:35%">
                    <p>GidHub: {{ $profile->github_url }} </p>
                    <p>Skill: {{ $profile->skill }}</p>
                    <p>Comment: {{ $profile->comment }}</p>
                    <p> </p>
                </div>

            </div>
            <div class="hidden fixed top-0 right-0 sm:block z-10" class="padding-right:3px">
                <div class=" text-right flex">
                    <form action="{{ route('profile') }}" method="get">
                        @csrf
                        <button id="btm" class="text-xl" title='Profile'>
                            <i class="menu fas fa-user text-yellow hover:text-gray-100 " style="padding:5px"></i>
                        </button>
                      </form>
                    {{-- <button id="btm" class="group-hover:opacity-1">
                        <i class='fas fa-bell text-yellow hover:text-gray-100' id="showNotificationButton" style='padding:5px'></i>
                    </button> --}}
                         <button id="btm" title="通知">
                        <i class='fas fa-bell text-yellow hover:text-gray-100' id="showNotificationButton"style='padding:5px'></i>
                         </button>
                    <button id="btm" title="Message">
                        <i class="far fa-comment-dots hover:text-gray-100" id="showNotificationButton" style='padding:5px'></i>
                    </button>
                    <form action="{{ route('logout') }}" method="get" id="btm" >
                        @csrf
                        <button class="text-lg" style="padding-top: 1px" title="Logout">Logout </button>
                      </form>
                </div>
           </div>
        </div>
        {{-- 編集ボタン押したら --}}
        <div class="profile-edit" >
            <div class="avatar-edit">
                <div class="text-center">
                    {{-- <img src="{{ url('/images/upload1.png') }}" alt=""> --}}
                    <label for="file-upload" class="py-2 px-4 rounded-full cursor-pointer">
                        <input type="file" id="file-upload" class="hidden">
                        <img src="{{ url('/images/user.png') }}" alt="">
                        <br>
                    <input type="text" class="border-none focus:outline-none text-center border-b border-black text-2xl" value="{{$account->name }}">
                    </label>
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>
            <form action="">
                @csrf
                <div class="introduction">
                    <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                        <p>Full name:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{$account->name }}">
                        </p>
                        <p>Gender:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{$account->gender}}">
                        </p>
                        <p>Class:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{$profile->class }}">
                        </p>
                        <p>Student ID:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{$profile->syudent_id }}">
                        </p>
                    </div>
                    <div style="width:10%"></div>
                    <div class="skill text-lg p-4 "  style="background-color:#c8bec6;width:35%">
                        <p>GidHub:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{$profile->github_url}}">
                        </p>
                        <p>Skill:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{ $profile->skill }}">
                        </p>
                        <p>Comment:
                        <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="{{ $profile->comment }}">
                        </p>
                        <p>  </p>
                    </div>

                </div>
                <div class="text-end mt-4" style="padding-right:10% ">
                {{-- 編集取り消し --}}
                <a href="{{route('profile') }}"><button class='text-xl bg-gray-400 hover:bg-red-400 focus:bg-red-300 text-black rounded p-2' id="editend">編集キャンセル</button></a>

                {{-- 編集したとき --}}
                <button class='bg-gray-400 hover:bg-yellow-200 focus:bg-yellow-300 text-black text-xl rounded p-2'  id="editend">編集完了 <i class='far'>&#xf044; </i></button>
            </div>
            </form>

        </div>

    </section>


@endsection
