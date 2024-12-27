<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Your Courses Section -->
                    <div class="mt-6">
                        <h1 class="text-lg font-semibold">Your Courses</h1>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            @forelse($yourCourses as $course)
                            <div class="p-4 bg-white shadow-md rounded">
                                <h4 class="text-lg font-bold">{{ $course->name }}</h4><br>
                                <p>{{ $course->description }}</p>
                                <button
                                    onclick="unenrollCourse({{ $course->id }})"
                                    class="mt-2 px-4 py-2 bg-red-500 text-white rounded">
                                    Unenroll
                                </button>
                            </div>
                            @empty
                            <p>You have not enrolled in any courses yet.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div> <br>
            <hr class="footer_hr">
            <!-- Available Courses Section -->
            <div class="mt-6">
                <h1 class="text-lg font-semibold">Available Courses</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    @foreach($availableCourses as $course)
                    <div class="p-4 bg-white shadow-md rounded">
                        <h4 class="text-lg font-bold">{{ $course->name }}</h4><br>
                        <p>{{ $course->description }}</p>
                        <button
                            onclick="enrollCourse({{ $course->id }})"
                            class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">
                            Enroll
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

    <script>
        function enrollCourse(courseId) {
            if (confirm('Are you sure you want to enroll in this course?')) {
                fetch(`/courses/enroll/${courseId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => alert(data.message))
                    .catch(error => alert('Enrollment failed!'));
            } else {
                alert('Enrollment canceled.');
            }
        }

        function unenrollCourse(courseId) {
            if (confirm('Are you sure you want to unenroll from this course?')) {
                fetch(`/courses/unenroll/${courseId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => alert(data.message))
                    .catch(error => alert('Unenrollment failed!'));
            } else {
                alert('Unenrollment canceled.');
            }
        }
    </script>
</x-app-layout>