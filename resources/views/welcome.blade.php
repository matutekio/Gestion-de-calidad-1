@extends('layouts.app_cal')
@section('styles')
    <!-- Custom styles for this template -->
    {!! Html::style('template_LandingSumo/assets/css/custom-animations.css') !!}
    {!! Html::style('template_LandingSumo/assets/css/style.css') !!}
@endsection
@section('content')
    <! -- ********** HEADER ********** -->
    <div id="h">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 mt">
                    <h3>WE HAVE ALL THE PROPER TOOLS TO HELP YOU</h3>
                    <h1 class="mb">GESTION DE CALIDAD</h1>
                </div>
                <div class="col-md-12 mt hidden-xs">
                    <img src="template_LandingSumo/assets/img/graph.png" class="img-responsive aligncenter" alt="" data-effect="slide-bottom">
                </div>
            </div>
        </div><! --/container -->
    </div><! --/h -->
    <! -- ********** FIRST ********** -->
    <div id="w">
        <div class="row nopadding">
            <div class="col-md-5 col-md-offset-1 mt">
                <h4>Handsome Analytics</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <p class="mt"><button class="btn btn-info btn-theme">Sign Up Now | 14 Days Free</button></p>
            </div>

            <div class="col-md-6 pull-right">
                <img src="template_LandingSumo/assets/img/shot01.png" class="img-responsive alignright" alt="" data-effect="slide-right">
            </div>
        </div><! --/row -->
    </div><! --/container -->

    <! -- ********** FOOTER ********** -->
    <div id="f">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 centered">
                    <h4 class="mb">Grab Our Offer Now. Try Us For 14 Days Totally Free.</h4>
                    <form role="form" action="register.php" method="post" enctype="plain">
                        <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..." required style="color: black">
                        <button class='btn btn-lg btn-info btn-sub subscribe-submit' type="submit">Yes, Please</button>
                    </form>

                </div>

            </div><! --/row -->
        </div><! --/container -->
    </div><! --/F -->
@endsection
@section('scripts')
    {!! Html::script('template_LandingSumo/assets/js/retina-1.1.0.js') !!}
    {!! Html::script('template_LandingSumo/assets/js/jquery.unveilEffects.js') !!}
@endsection