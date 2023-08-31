@extends('layouts.profilelayout')
@section('pageTitle', 'profilepage')
@section('title', 'Profile')
@section('content')
    <section>
        <div class="profile">
            <div class="avatar-con">
                <div class="avatar">
                    <img src="{{ url('/images/user.png') }}" alt="">
                    <div class="text-end text-black flex ">
                        <p style="width:20%"></p>
                        <p> {{ $account->name }}</p>
                        <button class='text-lg text-end pl-6' id="editbt" title="編集"><i class='far'>&#xf044;
                            </i></button>
                    </div>
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15;padding:0 0 10px 110px">紹介</h1>
            <div class="introduction pb-5">
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
            <div class="private text-lg p-3 mb-4 " style="background-color:#c8bec6;margin:0 10%">
                <a href="{{ route('adminpage.index') }}">Created community:</a>
                <p></p>
            </div>

            <div class="private text-lg p-3 mb-4" style="background-color:#c8bec6;margin:0 10%">
                <a href="{{ route('adminpage.join') }}">Joined community:</a>
            </div>


        </div>
        {{-- 編集ボタン押したら --}}
        <form action="{{ route('edit') }}" method="POST">
            <div class="profile-edit">
                <div class="avatar-edit">
                    <div class="text-center">
                        {{-- <img src="{{ url('/images/upload1.png') }}" alt=""> --}}
                        <label for="file-upload" class="py-2 px-4 rounded-full cursor-pointer">
                            <input type="file" id="file-upload" class="hidden">
                            <img src="{{ url('/images/user.png') }}" alt="">
                            <br>
                            <input type="text"
                                class="border-none focus:outline-none text-center border-b border-black text-2xl"
                                value="{{ $account->name }}">
                        </label>
                    </div>
                </div>
                <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>

                @csrf
                <div class="introduction">
                    <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                        <p>Full name:
                            <b name="student_id">{{ $account->name }}</b>
                        </p>
                        <p>Gender:
                            <b name="student_id">{{ $account->gender }}</b>
                        </p>
                        <p>Class:
                            <input type="text" class="text-lg focus:outline-none border-b border-black"
                                style="background-color:#c8bec6;" name="class" value="{{ $profile->class }}">
                        </p>
                        <p>Student ID:
                            <b name="student_id">{{ $profile->student_id }}</b>
                        </p>
                    </div>
                    <div style="width:10%"></div>
                    <div class="skill text-lg p-4 " style="background-color:#c8bec6;width:35%">
                        <p>GidHub:
                            <input type="text" class="text-lg focus:outline-none border-b border-black"
                                style="background-color:#c8bec6;" name="github_url" value="{{ $profile->github_url }}">
                        </p>
                        <p>Skill:
                            <input type="text" class="text-lg focus:outline-none border-b border-black"
                                style="background-color:#c8bec6;" name="skill" value="{{ $profile->skill }}">
                        </p>
                        <p>Comment:
                            <input type="text" class="text-lg focus:outline-none border-b border-black"
                                style="background-color:#c8bec6;" name="comment" value="{{ $profile->comment }}">
                        </p>
                    </div>

                </div>
                <div class="text-end mt-4" style="padding-right:10% ">
                    {{-- 編集取り消し --}}
                    <a href="{{ route('profile') }}"><button
                            class='text-xl bg-gray-400 hover:bg-red-400 focus:bg-red-300 text-black rounded p-2'
                            id="editend">編集キャンセル</button></a>

                    {{-- 編集したとき --}}
                    <button class='bg-gray-400 hover:bg-yellow-200 focus:bg-yellow-300 text-black text-xl rounded p-2'
                        id="editend">編集完了 <i class='far'>&#xf044; </i></button>
                </div>
        </form>

        </div>

    </section>


@endsection
