{{-- @extends('layouts.app')
@section('pageTitle', '投稿画面')
@section('title', '投稿画面')
@section('content')
    <section>
        <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bg-white hover:bg-yellow p-5 mb-10 rounded-md shadow-md">
                <p class="text-center" style="font-size: 30px; color: aqua">投稿画面</p>
                <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                    <p><label class="block text-gray-500 text-sm uppercase" for="image">イメージ画像</label></p>
                    <input type="file" name="image" id="image"
                        class="w-full text-sm px-3 py-2 border border-gray-300 rounded-md" style="border-radius: 8px;"
                        value="">
                    @error('image')
                        <p>{{ $message }}</p>
                    @enderror
                </div>

                <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                    <p><label class="block text-gray-500 text-sm uppercase" for="title"></label></p>
                    <input type="text" name="title" id="title" placeholder="タイトル"
                        class="w-full text-2xl font-bold leading-10 border border-gray-300 rounded-md mx-auto"
                        style="border-radius: 8px;" value="{{ old('title') }}">
                    @error('title')
                    @enderror
                </div>

                <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                    <p><label class="block text-gray-500 text-sm uppercase" for="body"></label></p>
                    <textarea name="body" id="body" placeholder="本文"
                        class="w-full h-80 text-base px-3 py-2 border border-gray-300 rounded-md resize-none bg-yellow-100"
                        style="height: 200px; border-radius: 8px;" value="{{ old('body') }}"></textarea>
                    @error('body')
                        <p>{{ $message }}</p>
                    @enderror
                </div>


                <div class="text-center" style="width: 100%;">
                    <button type="button" class="my-2 mx-3 px-4 py-2 bg-yellow rounded text-black">戻る</button>
                    <button type="submit" class="my-2 mx-3 px-4 py-2 bg-yellow-400 rounded text-black">投稿</button>
                </div>
            </div>
        </form>
    </section>
@endsection --}}


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>postdata</title>
</head>

<body>
    <h1>画像アップロード+パスのDB保存テストです。</h1>
    <form action="/postdata" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <input type="file" name="image">
        <div>
            <button type="submit">送信</button>
        </div>
    </form>
</body>

</html>
