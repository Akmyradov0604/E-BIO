@extends ('layout')

@section('content')
    <div class="wrap">
        <div class="types">
            <h2 style="text-align: center;">{{__('Choose your theme')}}</h2>
            <br>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="{{ route('theme', [app()->getLocale(), 'cell']) }}">{{__('Cell')}}</a>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="quiz/plant">{{__('Plant')}}</a>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="/quiz/animal">{{__('Animal')}}</a>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="/quiz/ecology">{{__('Ecology')}}</a>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="/quiz/evolution">{{__('Evolution')}}</a>
            <a type="button" class="btn btn-outline-success btn-lg btn-block" href="/quiz/genetics">{{__('Genetics')}}</a>
        </div>
    </div>
@endsection