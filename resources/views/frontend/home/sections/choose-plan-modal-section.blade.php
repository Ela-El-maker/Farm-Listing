<div class="modal fade price-plan__modal" id="planModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content price-plan__modal-content">
            <div class="modal-header price-plan__modal-header border-0">
                <h5 class="modal-title price-plan__modal-title text--body-1-600" id="basicLabel">Payment Details</h5>
                <button type="button" class="price-plan__modal-btnclose" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="modal-body price-plan__modal-body">
                <div class="price-plan__input-group">
                    <label>
                        Name on Card
                    </label>
                    <div class="price-plan__input">
                        <input type="text" placeholder="Address line 01" />
                    </div>
                </div>
                <div class="price-plan__input-group">
                    <label>
                        Credit Card
                    </label>
                    <div class="price-plan__input" id="credit">
                        <div class="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 5.25H3C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25Z"
                                    stroke="#00AAFF"
                                    stroke-width="1.3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path d="M15.749 15.75H18.749" stroke="#00AAFF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.249 15.75H12.749" stroke="#00AAFF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.24902 9.08008H21.749" stroke="#00AAFF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <input type="text" placeholder="Card Number" />

                        <div class="card-type">
                            <div class="card-type__item">
                                <span class="text--body-3">mm/yy</span>
                            </div>
                            <div class="card-type__item">
                                <span class="text--body-3">cvc</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price-plan__input-group">
                    <label>
                        Address
                    </label>
                    <div class="price-plan__input" id="address" style="margin-bottom: 8px;">
                        <input type="text" placeholder="Address line 01" />
                    </div>
                    <div class="price-plan__input">
                        <input type="text" placeholder="Address line 02" />
                    </div>
                </div>
                <div class="price-plan__field-group">
                    <div class="input-select">
                        <label>
                            country
                        </label>
                        <select class="js-example-basic-single w-100">
                            <option value="01">Bangladesh</option>
                            <option value="02">India</option>
                            <option value="03">Australia</option>
                            <option value="04">USA</option>
                        </select>
                    </div>
                    <div class="input-select">
                        <label>
                            City
                        </label>
                        <select class="js-example-basic-single w-100">
                            <option value="01">Dhaka</option>
                            <option value="02">Mumbai</option>
                            <option value="03">Sydney</option>
                            <option value="04">New York</option>
                        </select>
                    </div>
                </div>

                <div class="price-plan__info">
                    <div class="price-plan__type price-plan__info-item d-flex justify-content-between">
                        <div class="text--body-3 plan-type">Account Plan: <span>Premimum</span></div>
                        <div class="price text--body-3-600">$40.00</div>
                    </div>

                    <div class="price-plan__total price-plan__info-item d-flex justify-content-between">
                        <h2 class="text--body-2">Total:</h2>
                        <h6 class="text--body-2-600">$40 USD</h6>
                    </div>
                </div>

                <a href="checkout.html" class="btn btn--lg w-100 price-plan__checkout-btn">
                    Subscribe & Checkout
                </a>

                <p class="price-plan__message text--body-4">We will bill you every month on the 10th, unless you cancel.</p>
            </div>
        </div>
    </div>
</div>
