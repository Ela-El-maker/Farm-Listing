@extends('frontend.layouts.master')
@section('contents')
    <!-- Banner section start  -->
    @include('frontend.home.sections.banner-section')
    <!-- Banner section end   -->

    <!-- Poupular category Section start  -->
    @include('frontend.home.sections.popular-category-section')
    <!-- Poupular category Section end   -->

    <!-- recent-post section start  -->
    @include('frontend.home.sections.recent-post-section')
    <!-- recent-post section end -->

    <!-- work section start  -->
    @include('frontend.home.sections.work-section')
    <!-- work section end -->

    <!-- feature section start  -->
    @include('frontend.home.sections.feature-section')
    <!-- feature section end -->

    <!-- popular-loc section start  -->
    @include('frontend.home.sections.popular-location')
    <!-- popular-loc section end -->

    <!-- price-plan section start  -->
    @include('frontend.home.sections.price-plan-section')
    <!-- price-plan section end  -->

    <!-- subscribe section start  -->
    @include('frontend.home.sections.subscribe-section')
    <!-- subscribe section end  -->

    <!--  Choose Plan Modal -->
    @include('frontend.home.sections.choose-plan-modal-section')


@endsection
