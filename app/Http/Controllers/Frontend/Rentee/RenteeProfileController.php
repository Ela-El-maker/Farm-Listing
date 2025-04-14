<?php

namespace App\Http\Controllers\Frontend\Rentee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rentee\RenteeProfileRequest;
use App\Models\Rentee;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RenteeProfileController extends Controller
{
    use FileUploadTrait;
    //
    public function index() : View
    {
        $rentee = Rentee::where('user_id', auth()->user()->id)->first();
        return view('frontend.rentee-dashboard.profile.index',compact('rentee'));
    }

    public function basicInfoUpdate(RenteeProfileRequest $request)
    {
        $data = $this->handleFileUploads($request);
        $data['title'] = $request->title;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $this->updateRenteeProfile($data);
        $this->updateProfileStatus();

        return redirect()->back()->with('success','Basic Info Updated Successfully!');
    }

    private function handleFileUploads($request): array
    {
        $data = [];
        $imagePath = $this->uploadFile($request, 'profile_image');
        $bannerPath = $this->uploadFile($request, 'banner');


        if (!empty($imagePath)) $data['profile_image'] = $imagePath;
        if (!empty($bannerPath)) $data['banner'] = $bannerPath;

        return $data;
    }

    private function updateRenteeProfile(array $data): void
    {
        Rentee::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $data
        );
    }

    private function updateProfileStatus(): void
    {
        $rentee = Rentee::where('user_id', auth()->user()->id)->first();
        if ($rentee) {
            $profileCompletion = getRenteeProfileCompletion();
            $rentee->profile_complete = $profileCompletion == 100 ? 1 : 0;
            $rentee->visibility = $profileCompletion == 100 ? 1 : 0;
            $rentee->save();
        }
    }
}
