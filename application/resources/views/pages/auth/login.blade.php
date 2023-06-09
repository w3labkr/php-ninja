@extends('layouts.default', [
    'branding' => true,
    'navigation' => true,
    'hero' => true,
    'breadcrumb' => false,
    'copyright' => true,
])

@push('metas')
{{-- <meta /> --}}
@endpush

@push('styles')
{{-- <link rel="stylesheet" href="/assets/css/style.css" /> --}}
@endpush

@section('title', 'Signin')
@section('description', '')
@section('keywords', '')

@section('primary')
<div class="page hentry">
    <div class="container">
        <div class="wrap">

            <h1 class="entry-title">Signin</h1>

            <div class="entry-content">
                <form method="post" action="login">
                    <input type="hidden" name="login[_token]" value="{{ $csrf_token }}" />
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="login[username]" required /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="login[password]" required /></td>
                        </tr>
                        <tr>
                            <td>
                                <label><input type="checkbox" name="login[remember_me]" /> Remember Me</label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit">Login</button>
                            </td>
                        </tr>
                    </table>
                </form>

                @isset($data)
                <br>
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

                ㆍ<a href="/register">Need an account?</a><br>
                ㆍ<a href="/forgot-password">Forgot your password?</a>
            </div><!-- .entry-content -->

        </div><!-- .wrap -->
    </div><!-- .container -->
</div><!-- .page -->
@endsection

@push('scripts')
{{-- <script src="/assets/js/script.js"></script> --}}
@endpush
