@extends('layouts.profilelayout')
@section('pageTitle', 'profilepage')
@section('title', 'Profile')
@section('content')
    <section>
        <div class="profile">
            <div class="avatar-con">
                <div class="avatar">
                    <img src="{{ url('/images/upload1.png') }}" alt="">
                    <p> Naoo Sakuta</p>
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
        </div>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="{{ route('toppage') }}" class="text-lg text-gray-300 dark:text-gray-700 underline">Top Page</a>
        </div>
    </section>


@endsection
