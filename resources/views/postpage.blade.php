@extends("layouts.app")
@section("pageTitle","投稿画面")
@section("title","投稿画面")
@section("content")
<section>
    <form action="/hoge" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-white hover:bg-yellow p-5 mb-10 rounded-md shadow-md">
            <p class="text-center" style="font-size: 30px; color: aqua">投稿画面</p>
            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-gray-500 text-sm uppercase" for="image">イメージ画像</label></p>
                <input type="file" name="image" id="image" class="w-full text-sm px-3 py-2 border border-gray-300 rounded-md" style="border-radius: 8px;" value="">
                @error('image')
                <p>{{$message}}</p>
                @enderror
            </div>

            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-gray-500 text-sm uppercase" for="title"></label></p>
                <input type="text" name="title" id="title" placeholder="タイトル" class="w-full text-2xl font-bold leading-10 border border-gray-300 rounded-md mx-auto bg-yellow-400" style="border-radius: 8px;" value="{{old('title')}}">
                @error('title')
                <p>{{$message}}</p>
                @enderror
            </div>

            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-gray-500 text-sm uppercase" for="checkboxes">タグ</label></p>
                <label><input type="checkbox" name="checkboxes[]" value="1" {{ in_array('1', old('checkboxes', [])) ? 'checked' : '' }}> ハッカソン</label>
                <label><input type="checkbox" name="checkboxes[]" value="2" {{ in_array('2', old('checkboxes', [])) ? 'checked' : '' }}> イベント</label>
                <label><input type="checkbox" name="checkboxes[]" value="3" {{ in_array('3', old('checkboxes', [])) ? 'checked' : '' }}> Web</label>
                <label><input type="checkbox" name="checkboxes[]" value="4" {{ in_array('4', old('checkboxes', [])) ? 'checked' : '' }}> メンバー募集</label>
                <label><input type="checkbox" name="checkboxes[]" value="5" {{ in_array('5', old('checkboxes', [])) ? 'checked' : '' }}> アイデア募集</label>
            </div>

            <div class="my-5 px-5 py-2 border-b text-center" style="width: 100%;">
                <p><label class="block text-gray-500 text-sm uppercase" for="body"></label></p>
                <textarea name="body" id="body" placeholder="本文" class="w-full h-80 text-base px-3 py-2 border border-gray-300 rounded-md resize-none bg-yellow-400" style="height: 200px; border-radius: 8px;">{{old('body')}}</textarea>
                @error('body')
                <p>{{$message}}</p>
                @enderror
            </div>


            <div class="text-center" style="width: 100%;">
                <a href="toppage" class="my-2 mx-3 px-4 py-2 bg-yellow-400 rounded text-black">戻る</a>
                <button type="submit" class="my-2 mx-3 px-4 py-2 bg-yellow-400 rounded text-black">投稿</button>
            </div>
        </div>
    </form>
</section>
@endsection
