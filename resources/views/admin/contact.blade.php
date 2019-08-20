@extends('admin.master')

@section('body')
<h1>I am sajedul</h1>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('/')}}front-end/images/in4.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/')}}front-end/images/in3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('/')}}front-end/images/in3.jpg" alt="Third slide">
        </div>
    </div>
</div>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
    @endsection