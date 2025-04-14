@extends('frontend.layouts.master')
@section('contents')
    <!-- breedcrumb section start  -->
<section class="breedcrumb" style="background: url('src/images/bg/bg-04.jpg') center center/cover no-repeat;">
    <div class="container">
        <h2 class="breedcrumb__title text--heading-2">{{ auth()->check() ? auth()->user()->name : 'Guest' }}</h2>
        <ul class="breedcrumb__page">
            <li class="breedcrumb__page-item">
                <a href="index.html" class="breedcrumb__page-link text--body-3">Home</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">/</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="{{ route('rentee.dashboard') }}" class="breedcrumb__page-link text--body-3">Dashboard</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">/</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="{{ route('rentee.profile.index') }}" class="breedcrumb__page-link text--body-3">Profile</a>
            </li>
        </ul>
    </div>
</section>
<!-- breedcrumb section end  -->


<!-- dashboard section start  -->
<section class="section dashboard dashboard--user">
    <div class="container">
        <div class="row">

            @include('frontend.rentee-dashboard.sidebar')

            <div class="col-xl-9">
                <div class="dashboard-post">
                    <ul class="nav dashboard-post__nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link active" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="true">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 9.75L12 15.75L22.5 9.75L12 3.75L1.5 9.75Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.5 13.5L12 19.5L22.5 13.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>

                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 01</h2>
                                    <p class="text--body-4">Basic info</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link" id="pills-advance-tab" data-bs-toggle="pill" data-bs-target="#pills-advance" role="tab" aria-controls="pills-advance" aria-selected="false">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 16.5L12 21.75L21 16.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 12L12 17.25L21 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 02</h2>
                                    <p class="text--body-4">Description, Features & Images</p>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dashboard-post__item" role="presentation">
                            <div class="nav-link dashboard-post__link" id="pills-post-tab" data-bs-toggle="pill" data-bs-target="#pills-post" role="tab" aria-controls="pills-post" aria-selected="false">
                                <span class="icon icon--default">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 21H10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M11.5283 1.85314C9.74778 3.27947 3.79242 8.979 8.99983 18.0004H14.9998C20.099 8.98539 14.2307 3.28753 12.4688 1.85618C12.3361 1.74822 12.1703 1.68903 11.9991 1.68848C11.828 1.68793 11.6618 1.74604 11.5283 1.85314V1.85314Z"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M6.92492 10.4404L3.98585 13.9673C3.91243 14.0554 3.8602 14.1592 3.83316 14.2706C3.80612 14.3821 3.80499 14.4982 3.82987 14.6102L4.98889 19.8258C5.01652 19.9501 5.07536 20.0653 5.15985 20.1606C5.24435 20.2559 5.35172 20.3281 5.47184 20.3705C5.59197 20.4128 5.72089 20.4238 5.84646 20.4025C5.97203 20.3812 6.0901 20.3283 6.18956 20.2487L8.99993 18.0004"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M17.0186 10.3721L20.0141 13.9667C20.0875 14.0548 20.1397 14.1585 20.1668 14.27C20.1938 14.3814 20.1949 14.4976 20.1701 14.6095L19.011 19.8251C18.9834 19.9495 18.9246 20.0647 18.8401 20.16C18.7556 20.2553 18.6482 20.3275 18.5281 20.3698C18.408 20.4121 18.279 20.4232 18.1535 20.4019C18.0279 20.3806 17.9098 20.3276 17.8104 20.2481L15 17.9998"
                                            stroke="currentColor"
                                            stroke-width="1.6"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M12 10.125C12.6213 10.125 13.125 9.62132 13.125 9C13.125 8.37868 12.6213 7.875 12 7.875C11.3787 7.875 10.875 8.37868 10.875 9C10.875 9.62132 11.3787 10.125 12 10.125Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <div class="step-info">
                                    <h2 class="text--body-3-600">Steps 03</h2>
                                    <p class="text--body-4">Post Ads</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tab-content dashboard-post__content" id="pills-tabContent">
                        <!-- Step 01 -->
                        @include('frontend.rentee-dashboard.profile.sections.profile-info-section')
                        <!-- Step 02 -->
                        @include('frontend.rentee-dashboard.profile.sections.profile-global-section')
                        <!-- Steop 03 -->
                        @include('frontend.rentee-dashboard.profile.sections.profile-account-section')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- dashboard section end  -->
@endsection

@push('scripts')
    <!-- JavaScript for Image Preview -->
<script>
     function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
