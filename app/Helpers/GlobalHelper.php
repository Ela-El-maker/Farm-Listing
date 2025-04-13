<?php

use App\Models\Rentee;

if (!function_exists('getRenteeProfileCompletion')) {
    /**
     * Calculate the profile completion percentage for a Rentee.
     *
     * @return int
     */
    function getRenteeProfileCompletion(): int
    {
        $rentee = Rentee::where('user_id', auth()->id())->first();

        if (!$rentee) {
            return 0;
        }

        $fields = [
            $rentee->phone,
            $rentee->address,
            $rentee->title,
            $rentee->about,
            $rentee->profile_image,
        ];

        // Count filled fields
        $filled = array_filter($fields, fn($field) => !empty($field));
        $percentage = (count($filled) / count($fields)) * 100;

        return (int) round($percentage);
    }
}
