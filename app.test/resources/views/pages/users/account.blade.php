@extends('layouts.sidebar-content', [
    'header' => true,
    'branding' => true,
    'navigation' => true,
    'hero' => true,
    'breadcrumb' => false,
    'footer' => true,
    'copyright' => true,
])

@push('metas')
{{-- <meta /> --}}
@endpush

@push('styles')
{{-- <link rel="stylesheet" href="/assets/css/style.css" /> --}}
@endpush

@section('title', 'Account')
@section('description', '')
@section('keywords', '')

@section('primary')
<div class="page hentry">
    <div class="container">
        <div class="wrap">

            <h1 class="entry-title">Account</h1>

            <div class="entry-content">

                <form method="post" action="account">
                    <fieldset>
                        <legend>Change username</legend>
                        <label>
                            <span>Username</span><br>
                            <input type="text" name="user[username]" required />
                        </label>
                        <br>
                        <button type="submit">Change username</button>
                    </fieldset>
                </form>

                @isset($data)
                <div>
                    @if($data['status'] === 'success')
                        {{ $data['message'] }}
                    @elseif($data['status'] === 'fail')
                        @foreach ($data['errors'] as $error)
                            {{ $error['message'] }}<br>
                        @endforeach
                    @endif
                </div>
                @endisset

                <br>

                <form method="post" action="withdraw">
                    <fieldset>
                        <legend>Delete Account</legend>
                        <label>
                            <span>Your username</span><br>
                            <input type="text" name="user[username]" value="qwe" required />
                        </label>
                        <br>
                        <label>
                            <span>To verify, type <i>delete my account</i> below</span><br>
                            <input type="text" name="user[verify]" value="delete my account" required />
                        </label>
                        <br>
                        <label>
                            <span>Confirm your password</span><br>
                            <input type="password" name="user[password]" value="123456" required />
                        </label>
                        <br>
                        <button type="submit">Delete your account</button>
                    </fieldset>
                </form>

                @isset($data2)
                <div>
                    @if($data2['status'] === 'success')
                        {{ $data2['message'] }}
                    @elseif($data2['status'] === 'fail')
                        @foreach ($data2['errors'] as $error)
                            {{ $error['message'] }}<br>
                        @endforeach
                    @endif
                </div>
                @endisset

            </div><!-- .entry-content -->

        </div><!-- .wrap -->
    </div><!-- .container -->
</div><!-- .page -->
@endsection

@push('scripts')
{{-- <script src="/assets/js/script.js"></script> --}}
@endpush
