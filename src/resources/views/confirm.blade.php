@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('btn_mng_state')

@endsection

@section('content')
<section class="confirm">
        <div class="confirm__outer">
        <h2 class="confirm__title">Confirm</h2>
        <table class="confirm__table">
            <tbody>
                <tr>
                    <th>お名前</th>
                    <td>{{ $contact['last_name'] }}　{{ $contact['first_name'] }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>
                    @if($contact['gender'] == 1)
                        男性
                    @elseif($contact['gender'] == 2)
                        女性
                    @else
                        その他
                    @endif
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $contact['email'] }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{ $contact['tell'] }}</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $contact['address'] }}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $contact['building'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>
                        @foreach ($categories as $category)
                        @if ($category->id == $contact['category_id'])
                        {{ $category->content }}
                        @endif
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $contact['detail'] }}</td>
                </tr>
                <tr>
                </tr>
            </tbody>
        </table>
        <form action="/thanks" method="post">
            @csrf
            <input type="text" name="first_name" value="{{ $contact['first_name'] }}" hidden />
            <input type="text" name="last_name" value="{{ $contact['last_name'] }}" hidden />
            <input type="text" name="gender" value="{{ $contact['gender'] }}" hidden />
            <input type="text" name="email" value="{{ $contact['email'] }}" hidden />
            <input type="text" name="tell" value="{{ $contact['tell'] }}" hidden />
            <input type="text" name="address" value="{{ $contact['address'] }}" hidden />
            <input type="text" name="building" value="{{ $contact['building'] }}" hidden />
            <input type="number" name="category_id" value="{{ $contact['category_id'] }}" hidden />
            <input type="text" name="detail" value="{{ $contact['detail'] }}" hidden />
            <button type="submit">送信</button>
            <button type="cancel">修正</button>
        </form>
    </div>
</section>
@endsection