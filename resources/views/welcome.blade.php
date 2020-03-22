@extends ('layout')

@section('content')

<div class="wrapper">
<div class="bg">
    <div class="container-fluid">
        <div class="content">
            <h1>{{ __('Biology is life') }}</h1>
            <p style="font-size: 1.3em;">{{__('Biology is a science that helps us to understand all living things in detail. In our project you can easily learn, without any difficulties.')}}</p>
        </div>
        <div class="img">
            <img src="img/Untitled-3.png" alt="" class="nerds">
            <img src="img/nred-on-micro.png" alt="" class="nerds2">
            <img src="img/nerd3.png" alt="" class="nerds3">
        </div>
    </div>
</div>

{{-- feature --}}
<section class="features" style="background: #66EA66;">
    <div class="intro container">
        <h1 class="main-heading">{{__('Our features')}}</h1>
        <div class="single-feat row">
            <div class="col-sm-5">
                <img src="/img/nerd6.png" alt="" width="250" class="img-responsive">
            </div>
            <div class="col-sm-6">
                <h1 >{{__('Lectures')}}</h1>
                <p>{{ __('In this section you will see briefly explained lectures and concepts of biology. It will help you to prepare for exams quickly. You may find lectures boring and tiring but don’t be worried, in our project lectures are interesting and briefly explained.') }}</p>
            </div>
        </div>
        <div class="single-feat row">
            <div class="col-sm-5">
                <img src="/img/nerd8.png" alt="" width="250" class="img-responsive">
            </div>
            <div class="col-sm-6">
                <h1>{{__('Pictures')}}</h1>
                <p>{{__('Fantsy is main thing in biology and without pictures you may not understand it. And here some pictures that we found helpful and useful for students and teachers. You will learn anatomy of human, plant and cell in this section. Looking at the pictures is the quickest and simplest way of learning biology.')}}</p>
            </div>
        </div>
        <div class="single-feat row">
            <div class="col-sm-5">
                <img src="/img/nerd5.png" alt="" width="250" class="img-responsive">
            </div>
            <div class="col-sm-6">
                <h1>{{__('Dictionary')}}</h1>
                <p>{{__('In “Dictionary” section you will have a dictionary about terms and biological words.')}}</p>
            </div>
        </div>
        <div class="single-feat row">
            <div class="col-sm-5">
                <img src="/img/nerd7.png" alt="" width="250" class="img-responsive">
            </div>
            <div class="col-sm-6">
                <h1>{{__('Quiz')}}</h1>
                <p>{{ __('Quiz will be divided in to five themes.These are “Animal”, “Plant”, “Cell”, “Ecology”, “Genetics”. From this quiz you will know more about biology, because it has the most interesting and the best explained questions.')}}</p>
            </div>
        </div>
    </div>
</section>
</div>
<section style="background-color:  #4CE64C; height: 600px;">
    <div class="container"> 
        <h1 class="text-center" style="color: #fff;">{{ __('Learn more about biology') }}</h1>
        <div class="pictures">
            <div class="pictures__thumbnail">
                <a href="#">
                    <img src="/img/2997.jpg" class=" img-thumbnail" alt="...">
                    <h2 style="color: #fff;">{{__('History')}}</h2>
                </a>
            </div>
            <div class="pictures__thumbnail">
                <a href="#">
                    <img src="/img/OGA3K50.jpg" class=" img-thumbnail" alt="...">
                    <h2 style="color: #fff;">{{__('Fact')}}</h2>
                </a>
            </div>
        </div>
    </div>
</section>
    @endsection