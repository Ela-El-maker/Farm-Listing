<div class="tab-pane fade show active" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
    <div class="dashboard-post__information step-information">
        <form action="{{ route('rentee.profile.basic-info-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="dashboard-post__information-form">
                <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; text-align: center;">
                    <!-- Profile Image Block -->
                    <div style="flex: 1; min-width: 250px;">
                        <!-- Preview -->
                        <div class="image-preview">
                            <img id="image-preview"
                                src="{{ $rentee?->profile_image ? asset($rentee->profile_image) : '#' }}"
                                alt="Profile Preview"
                                style="width: 100%; max-width: 250px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); {{ $rentee?->profile_image ? '' : 'display:none;' }}" />
                        </div>
                        <!-- Input -->
                        <div class="input-field mt-2">
                            <label for="image">Profile Image</label>
                            <input type="file"
                                class="form-control {{ $errors->has('profile_image') ? 'is-invalid' : '' }}"
                                name="profile_image" id="image" accept="image/*"
                                onchange="previewImage(event, 'image-preview')" />
                            <x-input-error :messages="$errors->get('profile_image')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Banner Image Block -->
                    <div style="flex: 1; min-width: 250px;">
                        <!-- Preview -->
                        <div class="image-preview">
                            <img id="banner-preview"
                                src="{{ $rentee?->banner ? asset($rentee->banner) : '#' }}"
                                alt="Banner Preview"
                                style="width: 100%; max-width: 250px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); {{ $rentee?->banner ? '' : 'display:none;' }}" />
                        </div>
                        <!-- Input -->
                        <div class="input-field mt-2">
                            <label for="banner">Banner Image</label>
                            <input type="file"
                                class="form-control {{ $errors->has('banner') ? 'is-invalid' : '' }}"
                                name="banner" id="banner" accept="image/*"
                                onchange="previewImage(event, 'banner-preview')" />
                            <x-input-error :messages="$errors->get('banner')" class="mt-2" />
                        </div>
                    </div>
                </div>


                <!-- Name Field -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="name">Name</label>
                            <input type="text" name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                value="{{ old('name', $rentee?->name) }}" placeholder="Enter your name"
                                id="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="name">Title</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                name="title" value="{{ old('title', $rentee?->title) }}"
                                placeholder="Enter your title" id="title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Email Field -->
                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                value="{{ old('email', $rentee?->email) }}" placeholder="Enter your email"
                                id="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                    </div>
                    <!-- Phone Field -->
                    <div class="col-md-6">
                        <div class="input-field">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone"
                                class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                value="{{ old('phone', $rentee?->phone) }}" placeholder="Enter your phone number"
                                id="phone" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn">
                Save Changes
            </button>

        </form>
    </div>
</div>
