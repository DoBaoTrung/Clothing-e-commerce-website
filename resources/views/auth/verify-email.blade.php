@extends('layouts.client')
@section('content-client')
    <style>
        .title-steps {
            padding: 15px 25px;
            font-weight: bold !important;
            font-size: 20px !important;
        }

        .text-notification {
            font-size: 16px !important;
        }

        .container_fullwidth.content-page {
            background-color: #f9f4f4;
        }
    </style>


    <div class="container_fullwidth content-page">
        <div class="container">
            <div class="col-md-12 container-page">
                <div class="checkout-page">
                    <ol class="checkout-steps">
                        <li class="steps active">
                            <style>
                                .title-steps {
                                    font-size: 35px !important;
                                }
                            </style>

                            <h4 class="title-steps text-center" style="margin-top: 30px;">
                                Xác Thực Tài Khoản
                            </h4>
                            <div class="step-description">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="run-customer">
                                            <form action="{{ route('user.resend_email') }}" method="POST"
                                                id="login-form__js">
                                                <input type="text" hidden value="{{ $user->id }}" name="id">

                                                <p class="text-center text-notification" style="line-height: 1.5;">
                                                    Chúng tôi đã gửi một liên kết xác nhận đến địa chỉ email
                                                    {{ $user->email }} của bạn vui lòng xác thực tài khoản để tiếp tục sử
                                                    dụng dịch vụ.
                                                    Nếu bạn không nhận được liên kết xin vui lòng bấm nút bên dưới để được
                                                    gửi lại liên kết. Xin cảm ơn!
                                                </p>

                                                @if (session('status') == 'verification-link-sent')
                                                    <p class="text-success text-notification text-center">
                                                        Một liên kết xác nhận mới đã được gửi đến địa chỉ email của bạn.
                                                    </p>
                                                @endif
                                                @csrf
                                                <div class="text-center">
                                                    <button class="text-success">
                                                        Gửi lại liên kết
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
