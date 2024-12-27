<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function dashboard()
    {
        // Fetch all courses
        $availableCourses = Course::all();

        // Fetch user's enrolled courses (assuming a many-to-many relationship)
        $user = Auth::user();
        $yourCourses = $user->courses;

        return view('dashboard', compact('availableCourses', 'yourCourses'));
    }

    public function enroll(Request $request, $courseId)
    {
        $user = Auth::user();
        $course = Course::find($courseId);

        if ($course) {
            $user->courses()->attach($courseId);
            return response()->json(['message' => 'Enrollment successful!'], 200);
        }

        return response()->json(['message' => 'Enrollment failed!'], 400);
    }

    public function unenroll(Request $request, $courseId)
    {
        $user = Auth::user();
        $user->courses()->detach($courseId);

        return response()->json(['message' => 'Unenrollment successful!'], 200);
    }
}
