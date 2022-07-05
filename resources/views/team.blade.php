@extends('layouts.app')
@php
$data = [
    [
        'name' => ,
        'title' => ,
        'img' => ,
        'linkedin' => ,
    ],
    [
        'name' => ,
        'title' => ,
        'img' => ,
        'linkedin' =>,
    ],
    [
        'name' => ,
        'title' => ,
        'img' => ,
        'linkedin' => ,
    ],
    [
        'name' => ,
        'title' => ,
        'img' =>,
        'linkedin' => ,
    ],
    [
        'name' => ,
        'title' => ,
        'img' => ,
        'linkedin' => ,
    ],
];
@endphp
@section('content')


    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>This is a great team, we have managed to build this app</p>
            </div>

            <div class="row">
                @foreach ($data as $i)
                    <div class="col-lg-3 col-md-6 d-flex align-items-center mx-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset($i['img']) }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ asset($i['linkedin']) }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $i['name'] }}</h4>
                                <span>{{ $i['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection
