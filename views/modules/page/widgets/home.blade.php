@if($pages->count()>0)
<div class="bg-color line text-white slogans-home">
    <div class="container">
        <div class="row">
            @foreach($pages as $page)
            <div class="col-md-4">
                <div class="slogan-item">
                    <img class="img-responsive lazyloader" src="{{ $page->present()->coverImage(300,200,'fit',50) }}" alt="{{ $page->title }}" />
                    <div class="slogan-item-hover">
                        <div class="slogan-item-hover-content">
                            <h4 class="slogan-title"><a href="{{ $page->url }}">{{ $page->title }}</a></h4>
                            <p class="slogan-desc">{{ $page->settings->sub_title->{locale()} }}</p>
                        </div>
                    </div>
                    <a href="{{ $page->url }}" class="fill-div"><i class="fa fa-caret-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

{{--<div class="thumb">--}}
{{--    <header class="thumb-header">--}}
{{--        <div class="overlay"></div>--}}
{{--        <a href="{{ $page->url }}"><img class="img-responsive lazyloader" src="{{ $page->present()->coverImage(300,100,'fit',50) }}" alt="{{ $page->title }}" /></a>--}}
{{--        <h4 class="thumb-title"><a href="{{ $page->url }}">{{ $page->title }}</a></h4>--}}
{{--    </header>--}}
{{--    <div class="thumb-caption">--}}
{{--        <p class="thumb-desc">{{ $page->settings->sub_title->{locale()} }}</p>--}}
{{--        <a href="{{ $page->url }}"><i class="fa fa-caret-right"></i></a>--}}
{{--    </div>--}}
{{--</div>--}}