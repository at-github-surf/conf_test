@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('btn_mng_state')
<div class="header__btn-mng-state"><a class="header__btn-mng-state-text" href="login">login</a></div>
@endsection

@section('content')
<section class="login-form">
    <div class="login-form__outer">
        <h2 class="login-form__title">Register</h2>
        <div class="form__wrapper">
            <form class="form" action="/register" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="name">お名前</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form__input" name="name" id="name" value="{{ old('name') }}" placeholder="例:山田　太郎" />
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="email">メールアドレス</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" class="form__input" name="email" id="email" value="{{ old('email') }}" placeholder="例:test@example.com" />
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="password">パスワード</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" class="form__input" name="password" id="password" placeholder="例:coadhtech1106" />
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item" for="password_confirmation">確認用パスワード</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="password" class="form__input" name="password_confirmation" id="password_confirmation" placeholder="例:coadhtech1106" />
                        </div>
                        <div class="form__error">
                        <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection