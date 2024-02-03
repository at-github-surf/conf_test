@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('btn_mng_state')
<div class="header__btn-mng-state"><a class="header__btn-mng-state-text" href="register">logout</a></div>
@endsection

@section('content')
<section class="inq">
    <div class="inq__outer">
        <h2 class="inq__title">Content</h2>
        <form class="inq__form" action="/confirm" method="post">
            @csrf
            <ul class="inq__form-items">
                <li class="inq__form-item--name">
                    <label for="last_name" class="inq__form-item--label">お名前 <span class="inq__form-item--must">※</span></label>
                    <input id="last_name" type="text" name="last_name" required placeholder="例: 山田">
                    <input id="first_name" type="text" name="first_name" required placeholder="例: 太郎">
                </li>
                <li class="inq__form-item--name">
                    <label class="inq__form-item--label">性別 <span class="inq__form-item--must">※</span></label>
                    <label><input type="radio" id="man" name="gender" value="1" required checked />1:男性</label>
                    <label><input type="radio" id="woman" name="gender" value="2" />2:女性</label>
                    <label><input type="radio" id="other" name="gender" value="3" />3:その他</label>
                </li>
                <li class="inq__form-item--name">
                    <label for="email" class="inq__form-item--label">メールアドレス <span class="inq__form-item--must">※</span></label>
                    <input id="email" type="mail" name="email" required placeholder="例: test@example.com">
                </li>
                <li class="inq__form-item--name">
                    <label for="tell" class="inq__form-item--label">電話番号 <span class="inq__form-item--must">※</span></label>
                    <input id="tell" type="tel" name="tell" required placeholder="例: 080-1234-5678">
                </li>
                <li class="inq__form-item--name">
                    <label for="address" class="inq__form-item--label">住所 <span class="inq__form-item--must">※</span></label>
                    <input id="address" type="text" name="address" required placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </li>
                <li class="inq__form-item--name">
                    <label for="building" class="inq__form-item--label">建物名</label>
                    <input id="building" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                </li>
                <li class="inq__form-item--name">
                    <label for="categry_id" class="inq__form-item--label">お問い合わせの種類 <span class="inq__form-item--must">※</span></label>
                    <select id="category_id" name="category_id" required>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->content}}</option>
                        @endforeach
                    </select>
                </li>
                <li class="inq__form-item--name">
                    <label for="detail" class="inq__form-item--label">お問い合わせの内容 <span class="inq__form-item--must">※</span></label>
                    <textarea id="detail" name="detail" required></textarea>
                </li>
            </ul>
            <div class="inq__button">
                <button class="inq__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</section>
@endsection