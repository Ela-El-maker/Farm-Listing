<div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
    <div class="dashboard-post__information step-information">
        <form action="{{ route('rentee.profile.basic-info-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="dashboard-post__information-form">
                <div class="row">
                  <!-- Image Field -->
                  <div class="image-preview mt-3 text-center">
                    <img id="image-preview" src="#" alt="Image Preview" style="display:none; width: 100%; max-width: 250px;"/>
                </div>
                  <div class="col-md-6">

                    <div class="input-field">
                        <label for="image">Image</label>
                        <input type="file" class="form-control {{ $errors->has('profile_image') ? 'is-invalid' : '' }}" name="profile_image" id="image" accept="image/*" onchange="previewImage(event)" />
                        <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />

                    </div>

                </div>

                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="name">Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" placeholder="Enter your title" id="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                        </div>
                    </div>
                </div>

                <!-- Name Field -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-field">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Enter your name" id="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                    </div>
                </div>

                <div class="row">
                      <!-- Email Field -->
                      <div class="col-md-6">
                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter your email" id="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                    </div>
                    <!-- Phone Field -->
                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Enter your phone number" id="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-post__action-btns" style="text-align: center; margin-top: 20px;">
                <button type="submit" class="btn btn--lg"
                    style="display: inline-flex; align-items: center; justify-content: center; padding: 12px 20px;
                           background-color: #007bff; color: white; border-radius: 6px; text-decoration: none; font-size: 16px;
                           transition: background-color 0.3s ease, transform 0.3s ease; border: none; cursor: pointer;">

                    Update Info
                    <span class="icon--right" style="margin-left: 8px;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </div>

        </form>
    </div>
</div>
