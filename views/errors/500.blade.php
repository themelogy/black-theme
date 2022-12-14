@extends('layouts.blank')

@php
    seo_helper()->setTitle('500 - Sistem hatası');
@endphp

@section('content')
    <div class="full-page">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-blur" style="background-image:url({!! Theme::url('img/slider/slide-1.jpg') !!});"></div>
            <div class="bg-holder-content full text-white">
                <a class="logo-holder" href="{{ url('') }}">
                    <img src="{{ Theme::url('img/logo/logo-wbg.svg') }}" alt="{{ setting('theme::company-name') }} logo" title="{{ setting('theme::company-name') }} logo" />
                </a>
                <div class="full-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="text-hero">500</p>
                                <h1>Sistem Hatası.</h1>
                                <p>Bir hata oluştu. Bu konuda yönetici bilgilendirildi.</p><a class="btn btn-white btn-ghost btn-lg mt5" href="{!! LaravelLocalization::getLocalizedURL(locale(), route('homepage')) !!}"><i class="fa fa-long-arrow-left"></i> Anasayfa'ya dön</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Menu::render('footer', \Themes\Black\Presenter\FooterMenuErrorPresenter::class) !!}
            </div>
        </div>
    </div>
@endsection