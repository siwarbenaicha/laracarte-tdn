@extends('layouts.default', ['title' =>'About'])

@section('content')
    <div class="container">
        <h2> What is {{config('app.name')}}</h2>
        <p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="blank">Laramap.com</a>.</p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by <a href="https://twitter.com"> @etsmo</a> form learning purposes.</strong> {{--strong cad ce texte est trés important--}}
                </p>
            </div>
        </div>

        <p>Feel free to improve the <a href="https://github.com/siwarbenaicha/laracarte-tdn">source code</a>.</p>

        <hr>

        <h2> What is Laramap?</h2>
        <p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>
        <p>More info<a href="https://laramap.com/p/about"> here.</a></p>
<hr>
        <h2>Which tools and services are used in {{config('app.name')}}?</h2>
        <p>Long paragraph</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon $3</li>
            <li>Google Maps</li>
        </ul>


    </div>
@stop
