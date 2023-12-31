@extends('layouts.applylayout')
@section('pageTitle', 'publish project')
@section('title', 'Publish project')
@section('content')
    <section class="pb-2">
        <form action="/hoge" method="post" enctype="multipart/form-data">
            @csrf
            <div class="hover:bg-yellow px-5 mb-10 shadow-md">
                <div class="mb-4 pt-4 px-5 py-2 border-b" style="width: 100%;">
                    <p><label class="block text-white text-sm uppercase" for="image">イメージ画像</label></p>
                    <input type="file" name="image" id="image"
                        class="w-full text-sm px-3 py-2 border border-gray-300 rounded-md text-white"
                        style="border-radius: 8px;" value="">
                    @error('image')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-4 px-5 py-2 border-b text-black" style="width: 100%;">
                    <p><label class="block text-white text-sm uppercase" for="title">タイトル</label></p>
                    <input type="text" name="title" id="title"
                        class="w-full text-2xl font-bold leading-10 border border-gray-300 rounded-md mx-auto bg-gray-500 pl-4 placeholder-gray-900"
                        placeholder="タイトルを入力" style="border-radius: 8px;">
                    @error('title')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="my-4 px-5 py-2 border-b" style="width: 100%;">
                    <label class="block text-white text-lg uppercase text-lg" for="checkboxes">tags</label>
                    <label class="text-white"><input type="checkbox" name="checkboxes[]" value="1"
                            {{ in_array('1', old('checkboxes', [])) ? 'checked' : '' }}> イベント</label><br>
                    <label class="text-white"><input type="checkbox" name="checkboxes[]" value="2"
                            {{ in_array('2', old('checkboxes', [])) ? 'checked' : '' }}> デザイン</label><br>
                    <label class="text-white"><input type="checkbox" name="checkboxes[]" value="3"
                            {{ in_array('3', old('checkboxes', [])) ? 'checked' : '' }}> Web</label><br>
                    <label class="text-white"><input type="checkbox" name="checkboxes[]" value="4"
                            {{ in_array('4', old('checkboxes', [])) ? 'checked' : '' }}> ハッカソン</label><br>
                    {{-- <label class="text-white"><input type="checkbox" name="checkboxes[]" value="5" {{ in_array('5', old('checkboxes', [])) ? 'checked' : '' }}> アイデア募集</label><br> --}}
                </div>
                <div class="my-4 px-5 py-2 border-b text-black" style="width: 100%;">
                    <p><label class="block text-white text-sm uppercase" for="body">詳細情報</label></p>
                    <textarea name="body" id="body" placeholder="詳細情報を入力"
                        class="w-full h-80 leading-10 text-base px-3 py-2 border border-gray-300 rounded-md mx-auto bg-gray-500 pl-4 placeholder-gray-900 text-2xl"
                        style="height: 200px; border-radius: 8px;" value="{{ old('body') }}"></textarea>
                    @error('body')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>

                <div class="text-center text-lg pb-2" style="width: 100%">
                    <b style="color:black"><button type="button"
                            class="my-2 mx-3 px-4 py-2 bg-gray-100 hover:bg-gray-900 hover:text-white rounded">Cancer</button></b>
                    <b> <button type="submit"
                            class="my-2 mx-3 px-4 py-2 bg-gray-900 hover:bg-white hover:text-black rounded">Publish</button></b>
                </div>
            </div>
        </form>
    </section>
@endsection
