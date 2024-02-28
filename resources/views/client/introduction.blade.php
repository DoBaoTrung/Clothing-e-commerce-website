@extends('layouts.client')
@section('content-client')
    <style>
        .container_fullwidth.content-page {
            background-color: #f9f4f4;
        }

        .col-12 {
            line-height: 1.5 !important;
        }
    </style>
    <div class="container_fullwidth content-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $setting->introduction !!}
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
@endsection
