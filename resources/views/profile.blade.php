@extends('layouts.profilelayout')
@section('pageTitle','profilepage')
@section('title','Profile')
@section('content')
    <section>
        <div class="profile">
            <div class="avatar-con">
                <div class="avatar">
                <img src="{{ url('/images/upload1.png') }}" alt="">
                 <p > Naoo Sakuta</p>
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
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{route('toppage') }}" class="text-lg text-gray-300 dark:text-gray-700 underline">Top Page</a><br>
                <button style='font-size:20px' id="editbt">編集 <i class='far'>&#xf044; </i></button>
           </div>
        </div>
        {{-- 編集ボタン押したら --}}
        <div class="profile-edit" >
            <div class="avatar-edit">
                <div class="text-center">
                    {{-- <img src="{{ url('/images/upload1.png') }}" alt=""> --}}
                    <label for="file-upload" class="font-bold py-2 px-4 rounded-full cursor-pointer">
                        <input type="file" id="file-upload" class="hidden">
                        <img src="{{ url('/images/upload1.png') }}" alt="">
                        <br>
                    <input type="text" class="border-none focus:outline-none text-center border-b border-black text-lg" value="Naoo Sakuta">
                    </label>
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>
            <div class="introduction">
                <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                    <p>Full name:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>Gender:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>Class:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>Student ID:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                </div>
                <div style="width:10%"></div>
                <div class="skill text-lg p-4 "  style="background-color:#c8bec6;width:35%">
                    <p>GidHub:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>Skill:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>Comment:
                    <input type="text" class="text-lg focus:outline-none border-b border-black" style="background-color:#c8bec6;" value="a">
                    </p>
                    <p>  </p>
                </div>

            </div>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{route('toppage') }}" class="text-lg text-gray-300 dark:text-gray-700 underline">Top Page</a><br>
                <button style='font-size:20px' id="editend">完了 <i class='far'>&#xf044; </i></button>
           </div>
        </div>

    </section>


@endsection
