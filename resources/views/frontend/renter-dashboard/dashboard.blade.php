@extends('frontend.layouts.master')
@section('contents')
    <!-- breedcrumb section start  -->
    <section class="breedcrumb" style="background: url('src/images/bg/bg-04.jpg') center center/cover no-repeat;">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">Overview</h2>
            <ul class="breedcrumb__page">
                <li class="breedcrumb__page-item">
                    <a href="index.html" class="breedcrumb__page-link text--body-3">Home</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">Dashboard</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">Overview</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- breedcrumb section end  -->

    <!-- dashboard section start  -->
    <section class="section dashboard dashboard--user">
        <div class="container">
            <div class="row">

                @include('frontend.renter-dashboard.sidebar')

                <div class="col-xl-9">

                    <div class="dashboard__count-card row">
                        <div class="col-lg-12">
                            <div class="dashboard-card dashboard-card--warning bgcolor--warning text--center">
                                <div class="dashboard-card--warning__info">
                                    <h2 class="warning-title text--heading-2" style="color: #FFAA00; font-weight: bold; margin-bottom: 10px;">
                                        Profile Incomplete
                                    </h2>
                                    <p class="warning-message text--body-3" style="color: #333; font-size: 1rem; margin-bottom: 20px;">
                                        Your profile is incomplete! Completing it will help you unlock more features and improve your experience.
                                    </p>
                                    <a href="/profile-edit" class="btn btn--primary" style="padding: 10px 20px; font-size: 1rem; background-color: #FFAA00; color: #fff; border: none; border-radius: 5px; text-decoration: none; display: inline-block;">
                                        Complete Profile Now
                                    </a>
                                </div>
                                <div class="dashboard-card--warning__icon" style="margin-top: 20px;">
                                    <span class="icon">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 4.16667C36.5925 4.16667 45.8333 13.4075 45.8333 25C45.8333 36.5925 36.5925 45.8333 25 45.8333C13.4075 45.8333 4.16667 36.5925 4.16667 25C4.16667 13.4075 13.4075 4.16667 25 4.16667Z"
                                                stroke="#FFAA00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M25 15V25" stroke="#FFAA00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M25 33.3333H25.0167" stroke="#FFAA00" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="dashboard__count-card row">
                        <div class="col-lg-4">
                            <div class="dashboard-card dashboard-card--count bgcolor--primary-9">
                                <div class="dashboard-card--count__info">
                                    <span class="counter-number text--heading-2">24</span>
                                    <h2 class="counter-title text--body-3">Public Documents</h2>
                                </div>
                                <div class="dashboard-card--count__icon">
                                    <span class="icon">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 23.75H25" stroke="#00AAFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15 18.75H25" stroke="#00AAFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M25.0003 6.25H31.25C31.5815 6.25 31.8995 6.3817 32.1339 6.61612C32.3683 6.85054 32.5 7.16848 32.5 7.5V33.75C32.5 34.0815 32.3683 34.3995 32.1339 34.6339C31.8995 34.8683 31.5815 35 31.25 35H8.75C8.41848 35 8.10054 34.8683 7.86612 34.6339C7.6317 34.3995 7.5 34.0815 7.5 33.75V7.5C7.5 7.16848 7.6317 6.85054 7.86612 6.61612C8.10054 6.3817 8.41848 6.25 8.75 6.25H14.9997" stroke="#00AAFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.75 11.25V10C13.75 8.3424 14.4085 6.75269 15.5806 5.58058C16.7527 4.40848 18.3424 3.75 20 3.75C21.6576 3.75 23.2473 4.40848 24.4194 5.58058C25.5915 6.75269 26.25 8.3424 26.25 10V11.25H13.75Z" stroke="#00AAFF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-card dashboard-card--count bgcolor--success-9">
                                <div class="dashboard-card--count__info">
                                    <span class="counter-number text--heading-2">43</span>
                                    <h2 class="counter-title text--body-3">Private Documents</h2>
                                </div>
                                <div class="dashboard-card--count__icon">
                                    <span class="icon">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 20H11.25L13.75 16.25L18.75 23.75L21.25 20H25" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M4.39285 14.999C4.38103 14.7918 4.37508 14.5838 4.375 14.375C4.37532 12.4971 5.02602 10.6773 6.21648 9.22488C7.40693 7.77251 9.06366 6.77727 10.905 6.40836C12.7463 6.03945 14.6586 6.31965 16.3166 7.20131C17.9747 8.08298 19.2763 9.51169 20 11.2445L20 11.2446C20.7237 9.5117 22.0253 8.08299 23.6833 7.20132C25.3414 6.31965 27.2537 6.03945 29.095 6.40836C30.9363 6.77727 32.5931 7.77251 33.7835 9.22488C34.974 10.6772 35.6247 12.4971 35.625 14.375C35.625 25 20 33.75 20 33.75C20 33.75 13.7586 30.2549 9.16523 25.0002" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="dashboard-card dashboard-card--count bgcolor--danger-9">
                                <div class="dashboard-card--count__info">
                                    <span class="counter-number text--heading-2">27</span>
                                    <h2 class="counter-title text--body-3">Comunities</h2>
                                </div>
                                <div class="dashboard-card--count__icon">
                                    <span class="icon">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M35 27.7068V12.2939C35 12.0721 34.941 11.8543 34.829 11.6629C34.717 11.4714 34.5561 11.3132 34.3628 11.2045L20.6128 3.4701C20.4257 3.36486 20.2147 3.30957 20 3.30957C19.7853 3.30957 19.5743 3.36486 19.3872 3.4701L5.63717 11.2045C5.44386 11.3132 5.28296 11.4714 5.17099 11.6629C5.05902 11.8543 5 12.0721 5 12.2939V27.7068C5 27.9286 5.05902 28.1464 5.17099 28.3379C5.28296 28.5293 5.44386 28.6876 5.63717 28.7963L19.3872 36.5307C19.5743 36.6359 19.7853 36.6912 20 36.6912C20.2147 36.6912 20.4257 36.6359 20.6128 36.5307L34.3628 28.7963C34.5561 28.6876 34.717 28.5293 34.829 28.3379C34.941 28.1464 35 27.9286 35 27.7068Z" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M27.6597 23.8298V15.7048L12.5 7.34375" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M34.8279 11.6607L20.1485 20.0003L5.17334 11.6592" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.1481 20L20.0015 36.6908" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row dashboard__ads-activity">
                        <div class="col-lg-6">
                            <div class="dashboard-card">
                                <div class="dashboard__section-info">
                                    <h2 class="dashboard-card__title">Documents View</h2>

                                    <ul class="history">
                                        <li class="history-item">
                                            <a href="#" class="history-link">
                                                This Week
                                                <span class="icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 7.5L10 12.5L15 7.5" stroke="#939AAD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                            <ul class="history-dropdown">
                                                <li class="history-dropdown__item">
                                                    <a href="#" class="history-dropdown__link">Previous Week</a>
                                                </li>
                                                <li class="history-dropdown__item">
                                                    <a href="#" class="history-dropdown__link">Last Month</a>
                                                </li>
                                                <li class="history-dropdown__item">
                                                    <a href="#" class="history-dropdown__link">Last years</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <canvas id="adsview" width="536" height="436"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="dashboard-card dashboard-card--recent">
                                <h2 class="dashboard-card__title">Recents Activities</h2>
                                <ul class="dashboard-card--recent__activity">
                                    <li class="dashboard-card--recent__activity-item success">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <p class="text--body-3">Your document <span class="quote">“v21 48mp ois slefie”</span> is successful published. <a href="#">View document</a></p>
                                    </li>
                                    <li class="dashboard-card--recent__activity-item primary">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 14.25H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 11.25H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M15.0002 3.75H18.75C18.9489 3.75 19.1397 3.82902 19.2803 3.96967C19.421 4.11032 19.5 4.30109 19.5 4.5V20.25C19.5 20.4489 19.421 20.6397 19.2803 20.7803C19.1397 20.921 18.9489 21 18.75 21H5.25C5.05109 21 4.86032 20.921 4.71967 20.7803C4.57902 20.6397 4.5 20.4489 4.5 20.25V4.5C4.5 4.30109 4.57902 4.11032 4.71967 3.96967C4.86032 3.82902 5.05109 3.75 5.25 3.75H8.9998"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M8.25 6.75V6C8.25 5.00544 8.64509 4.05161 9.34835 3.34835C10.0516 2.64509 11.0054 2.25 12 2.25C12.9946 2.25 13.9484 2.64509 14.6517 3.34835C15.3549 4.05161 15.75 5.00544 15.75 6V6.75H8.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        <p class="text--body-3">
                                            John Wick saved your document to his favourite collection.
                                        </p>
                                    </li>
                                    <li class="dashboard-card--recent__activity-item warning">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                    stroke="#FFBF00"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path d="M11.25 11.25H12V16.5H12.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M12.375 7.875C12.375 8.08211 12.2071 8.25 12 8.25C11.7929 8.25 11.625 8.08211 11.625 7.875C11.625 7.66789 11.7929 7.5 12 7.5C12.2071 7.5 12.375 7.66789 12.375 7.875Z"
                                                    fill="#FFBF00"
                                                    stroke="#FFBF00"
                                                    stroke-width="1.5"
                                                />
                                            </svg>
                                        </span>
                                        <p class="text--body-3">
                                            Please complete your profile editing to post documents.
                                        </p>
                                    </li>
                                    <li class="dashboard-card--recent__activity-item success">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <p class="text--body-3">Your document <span class="quote">“converse blue training shoes”</span> is successful published. <a href="#">View document</a></p>
                                    </li>
                                    <li class="dashboard-card--recent__activity-item danger">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 9.75V13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M10.702 3.74857L2.45423 17.9978C2.32226 18.2258 2.25266 18.4846 2.25244 18.748C2.25222 19.0115 2.32139 19.2703 2.45299 19.4986C2.58459 19.7268 2.77397 19.9163 3.00209 20.0481C3.2302 20.1799 3.489 20.2493 3.75245 20.2493H20.248C20.5114 20.2493 20.7702 20.1799 20.9984 20.0481C21.2265 19.9163 21.4159 19.7268 21.5474 19.4986C21.679 19.2703 21.7482 19.0115 21.748 18.748C21.7478 18.4846 21.6782 18.2258 21.5462 17.9978L13.2984 3.74857C13.1667 3.52093 12.9774 3.33193 12.7495 3.20055C12.5216 3.06916 12.2632 3 12.0002 3C11.7372 3 11.4788 3.06916 11.2509 3.20055C11.0231 3.33193 10.8338 3.52093 10.702 3.74857V3.74857Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M12 18C12.6213 18 13.125 17.4963 13.125 16.875C13.125 16.2537 12.6213 15.75 12 15.75C11.3787 15.75 10.875 16.2537 10.875 16.875C10.875 17.4963 11.3787 18 12 18Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                        <p class="text--body-3">Your document <span class="quote">“converse blue training shoes”</span> is successful published. <a href="#">View document</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard__posted-ads">
                        <div class="dashboard__section-info">
                            <h2 class="dashboard-card__title">Recently Posted Documents</h2>

                            <a href="myad.html" class="view-page">
                                View All
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 12H20.25" stroke="#939AAD" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#939AAD" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="row dashboard__posted-ads-slider">
                            <div class="dashboard__posted-ads-slider--item">
                                <div class="cards cards--one overflow-visible">
                                    <a href="ad-details.html" class="cards__img-wrapper">
                                        <img src="../src/images/view/img-08.png" alt="card-img" class="img-fluid" />
                                    </a>
                                    <div class="cards__info">
                                        <div class="cards__info-top">
                                            <h6 class="text--body-4 cards__category-title">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                Home &amp; Living
                                            </h6>
                                            <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Toyota Fielder G HYBRID WXB PE...</a>
                                        </div>
                                        <div class="cards__info-bottom">
                                            <span class="cards__price-title text--body-3-600">$360.00 </span>
                                            <ul class="edit">
                                                <li class="edit-icon">
                                                    <span class="icon-toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 14C6.10457 14 7 13.1046 7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14Z" fill="currentColor"></path>
                                                            <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="currentColor"></path>
                                                            <path d="M19 14C20.1046 14 21 13.1046 21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>

                                                    <ul class="edit-dropdown">
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M7.5 16.8749H3.75C3.58424 16.8749 3.42527 16.8091 3.30806 16.6918C3.19085 16.5746 3.125 16.4157 3.125 16.2499V12.7588C3.125 12.6767 3.14117 12.5954 3.17258 12.5196C3.20398 12.4438 3.25002 12.3749 3.30806 12.3168L12.6831 2.94185C12.8003 2.82464 12.9592 2.75879 13.125 2.75879C13.2908 2.75879 13.4497 2.82464 13.5669 2.94185L17.0581 6.43296C17.1753 6.55017 17.2411 6.70915 17.2411 6.87491C17.2411 7.04067 17.1753 7.19964 17.0581 7.31685L7.5 16.8749Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M10.625 5L15 9.375" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.8748 16.8753H7.49979L3.16455 12.54" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Edit Docs Details</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">View Docs</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M13.4375 8.125L8.85414 12.5L6.5625 10.3125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">mark it expire</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16.8745 4.375L3.12451 4.37501" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.125 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.875 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Delete Docs</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__posted-ads-slider--item">
                                <div class="cards cards--one overflow-visible">
                                    <a href="ad-details.html" class="cards__img-wrapper">
                                        <img src="../src/images/view/img-01.png" alt="card-img" class="img-fluid" />
                                    </a>
                                    <div class="cards__info">
                                        <div class="cards__info-top">
                                            <h6 class="text--body-4 cards__category-title">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                Home &amp; Living
                                            </h6>
                                            <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Toyota Fielder G HYBRID WXB PE...</a>
                                        </div>
                                        <div class="cards__info-bottom">
                                            <span class="cards__price-title text--body-3-600">$360.00 </span>
                                            <ul class="edit">
                                                <li class="edit-icon">
                                                    <span class="icon-toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 14C6.10457 14 7 13.1046 7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14Z" fill="currentColor"></path>
                                                            <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="currentColor"></path>
                                                            <path d="M19 14C20.1046 14 21 13.1046 21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>

                                                    <ul class="edit-dropdown">
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M7.5 16.8749H3.75C3.58424 16.8749 3.42527 16.8091 3.30806 16.6918C3.19085 16.5746 3.125 16.4157 3.125 16.2499V12.7588C3.125 12.6767 3.14117 12.5954 3.17258 12.5196C3.20398 12.4438 3.25002 12.3749 3.30806 12.3168L12.6831 2.94185C12.8003 2.82464 12.9592 2.75879 13.125 2.75879C13.2908 2.75879 13.4497 2.82464 13.5669 2.94185L17.0581 6.43296C17.1753 6.55017 17.2411 6.70915 17.2411 6.87491C17.2411 7.04067 17.1753 7.19964 17.0581 7.31685L7.5 16.8749Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M10.625 5L15 9.375" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.8748 16.8753H7.49979L3.16455 12.54" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Edit Docs Details</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">View Docs</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M13.4375 8.125L8.85414 12.5L6.5625 10.3125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">mark it expire</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16.8745 4.375L3.12451 4.37501" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.125 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.875 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Delete Docs</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__posted-ads-slider--item">
                                <div class="cards cards--one overflow-visible">
                                    <a href="ad-details.html" class="cards__img-wrapper">
                                        <img src="../src/images/view/img-02.png" alt="card-img" class="img-fluid" />
                                    </a>
                                    <div class="cards__info">
                                        <div class="cards__info-top">
                                            <h6 class="text--body-4 cards__category-title">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                Home &amp; Living
                                            </h6>
                                            <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Toyota Fielder G HYBRID WXB PE...</a>
                                        </div>
                                        <div class="cards__info-bottom">
                                            <span class="cards__price-title text--body-3-600">$360.00 </span>
                                            <ul class="edit">
                                                <li class="edit-icon">
                                                    <span class="icon-toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 14C6.10457 14 7 13.1046 7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14Z" fill="currentColor"></path>
                                                            <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="currentColor"></path>
                                                            <path d="M19 14C20.1046 14 21 13.1046 21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>

                                                    <ul class="edit-dropdown">
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M7.5 16.8749H3.75C3.58424 16.8749 3.42527 16.8091 3.30806 16.6918C3.19085 16.5746 3.125 16.4157 3.125 16.2499V12.7588C3.125 12.6767 3.14117 12.5954 3.17258 12.5196C3.20398 12.4438 3.25002 12.3749 3.30806 12.3168L12.6831 2.94185C12.8003 2.82464 12.9592 2.75879 13.125 2.75879C13.2908 2.75879 13.4497 2.82464 13.5669 2.94185L17.0581 6.43296C17.1753 6.55017 17.2411 6.70915 17.2411 6.87491C17.2411 7.04067 17.1753 7.19964 17.0581 7.31685L7.5 16.8749Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M10.625 5L15 9.375" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.8748 16.8753H7.49979L3.16455 12.54" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Edit Docs Details</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">View Docs</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M13.4375 8.125L8.85414 12.5L6.5625 10.3125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">mark it expire</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16.8745 4.375L3.12451 4.37501" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.125 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.875 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Delete Docs</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard__posted-ads-slider--item">
                                <div class="cards cards--one overflow-visible">
                                    <a href="ad-details.html" class="cards__img-wrapper">
                                        <img src="../src/images/view/img-03.png" alt="card-img" class="img-fluid" />
                                    </a>
                                    <div class="cards__info">
                                        <div class="cards__info-top">
                                            <h6 class="text--body-4 cards__category-title">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                Home &amp; Living
                                            </h6>
                                            <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Toyota Fielder G HYBRID WXB PE...</a>
                                        </div>
                                        <div class="cards__info-bottom">
                                            <span class="cards__price-title text--body-3-600">$360.00 </span>
                                            <ul class="edit">
                                                <li class="edit-icon">
                                                    <span class="icon-toggle">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 14C6.10457 14 7 13.1046 7 12C7 10.8954 6.10457 10 5 10C3.89543 10 3 10.8954 3 12C3 13.1046 3.89543 14 5 14Z" fill="currentColor"></path>
                                                            <path d="M12 14C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14Z" fill="currentColor"></path>
                                                            <path d="M19 14C20.1046 14 21 13.1046 21 12C21 10.8954 20.1046 10 19 10C17.8954 10 17 10.8954 17 12C17 13.1046 17.8954 14 19 14Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>

                                                    <ul class="edit-dropdown">
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M7.5 16.8749H3.75C3.58424 16.8749 3.42527 16.8091 3.30806 16.6918C3.19085 16.5746 3.125 16.4157 3.125 16.2499V12.7588C3.125 12.6767 3.14117 12.5954 3.17258 12.5196C3.20398 12.4438 3.25002 12.3749 3.30806 12.3168L12.6831 2.94185C12.8003 2.82464 12.9592 2.75879 13.125 2.75879C13.2908 2.75879 13.4497 2.82464 13.5669 2.94185L17.0581 6.43296C17.1753 6.55017 17.2411 6.70915 17.2411 6.87491C17.2411 7.04067 17.1753 7.19964 17.0581 7.31685L7.5 16.8749Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M10.625 5L15 9.375" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M16.8748 16.8753H7.49979L3.16455 12.54" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Edit Docs Details</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 3.54102C3.75 3.54102 1.25 10.0001 1.25 10.0001C1.25 10.0001 3.75 16.4577 10 16.4577C16.25 16.4577 18.75 10.0001 18.75 10.0001C18.75 10.0001 16.25 3.54102 10 3.54102Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">View Docs</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path d="M13.4375 8.125L8.85414 12.5L6.5625 10.3125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">mark it expire</h5>
                                                            </a>
                                                        </li>
                                                        <li class="edit-dropdown__item">
                                                            <a href="#" class="edit-dropdown__link">
                                                                <span class="icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M16.8745 4.375L3.12451 4.37501" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M8.125 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M11.875 8.125V13.125" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path
                                                                            d="M15.625 4.375V16.25C15.625 16.4158 15.5592 16.5747 15.4419 16.6919C15.3247 16.8092 15.1658 16.875 15 16.875H5C4.83424 16.875 4.67527 16.8092 4.55806 16.6919C4.44085 16.5747 4.375 16.4158 4.375 16.25V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                        <path
                                                                            d="M13.125 4.375V3.125C13.125 2.79348 12.9933 2.47554 12.7589 2.24112C12.5245 2.0067 12.2065 1.875 11.875 1.875H8.125C7.79348 1.875 7.47554 2.0067 7.24112 2.24112C7.0067 2.47554 6.875 2.79348 6.875 3.125V4.375"
                                                                            stroke="currentColor"
                                                                            stroke-width="1.6"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                        ></path>
                                                                    </svg>
                                                                </span>
                                                                <h5 class="text--body-4">Delete Docs</h5>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard section end  -->
@endsection
