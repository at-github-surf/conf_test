@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('btn_mng_state')
<div class="header__btn-mng-state">
    <form class="" action="/logout" method="post">
        @csrf
        <button class="header__btn-mng-state-button" type="submit">logout<button>
    </form>
</div>
@endsection

@section('content')
<section class="content">
    <form class="content__search">
        <nav class="content__search-nav" action="#" method="POST">
            <ul class="content__search-nav-list">
                <li class="content__search-nav-listitem">
                    <input type="text" placeholder="名前やメールアドレスを入力してください" /></li>
                <li class="content__search-nav-listitem">
                    <select type="text" name="sex">
                        <option value="">性別</option>
                        <option value="0">全て</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select></li>
                <li class="content__search-nav-listitem">
                    <select type="text" name="inq_tyoe"><option value="">お問い合わせの種類</option></select></li>
                <li class="content__search-nav-listitem">
                    <input type="date" /></li>
                <li class="content__search-nav-listitem">
                    <button class="form__button-searcht" type="submit">検索</button></li>
                <li class="content__search-nav-listitem">
                    <button class="form__button-submit" type="button">リセット</button></li>
            </ul>
        </nav>
    </form>
    <div class="content__inq-list">
        <table class="content__inq-list-table">
            <tr class="content__inq-list-row">
                <th class="content__inq-list-header">お名前</th>
                <th class="content__inq-list-header">性別</th>
                <th class="content__inq-list-header">メールアドレス</th>
                <th class="content__inq-list-header">お問い合わせ種類</th>
                <th class="content__inq-list-header"></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->last_name}}　{{$contact->first_name}}</td>
                <td>
                    @if($contact->gender == 1)
                        男性
                    @elseif($contact->gender == 2)
                        女性
                    @else
                        その他
                    @endif
                </td>
                <td>{{$contact->email}}</td>
                <td>
                    @foreach ($categories as $category)
                    @if ($category->id == $contact['category_id'])
                    {{ $category->content }}
                    @endif
                    @endforeach
                </td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection