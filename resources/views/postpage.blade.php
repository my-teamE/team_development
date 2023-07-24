@extends("layouts.profilelayout")
@section("pageTitle","publish project")
@section("title","Publish project")
@section("content")
<section>
    <form action="/hoge" method="post" enctype="multipart/form-data">
        @csrf
        <div class="hover:bg-yellow p-5 mb-10 shadow-md" style="background-color: rgb(56, 54, 54);">
            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-white text-sm uppercase" for="image">イメージ画像</label></p>
                <input type="file" name="image" id="image" class="w-full text-sm px-3 py-2 border border-gray-300 rounded-md" style="border-radius: 8px;" value="">
                @error('image')
                <p class="text-white">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-white text-sm uppercase" for="title"></label></p>
                <input type="text" name="title" id="title" class="w-full text-2xl font-bold leading-10 border border-gray-300 rounded-md mx-auto bg-gray-400 pl-4 placeholder-gray-100" placeholder=" タイトル" style="border-radius: 8px;">
                @error('title')
                <p class="text-white">{{$message}}</p>
                @enderror
            </div>

            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-white text-sm uppercase" for="body"></label></p>
                <textarea name="body" id="body" placeholder="本文" class="w-full h-80  leading-10 text-base px-3 py-2 border border-gray-300 rounded-md resize-none bg-gray-400 placeholder-gray-100" style="height: 200px; border-radius: 8px;" value="{{old('body')}}"></textarea>
                @error('body')
                <p class="text-white">{{$message}}</p>
                @enderror
            </div>

            <div class="text-center text-lg" style="width: 100%;">
                <button type="button" class="my-2 mx-3 px-4 py-2 bg-gray-900 rounded text-white">キャンセル</button>
                <button type="submit" class="my-2 mx-3 px-4 py-2 bg-yellow-300 hover:bg-yellow-600 rounded">投稿</button>
            </div>
        </div>
    </form>
</section>
@endsection
