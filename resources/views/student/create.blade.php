@extends('app.layout')

@section('title', 'Student Create')

@section('content')
    <section>
        <form method="post" action="{{ route('student.store') }}"
            class="max-w-md p-5 shadow-md mx-auto mt-20 rounded-md border-gray-400 border">
            @csrf
            <div class="space-y-4">
                <!-- Input Field -->
                <div>
                    <label for="input-field" class="block text-sm font-medium text-gray-700">Name</label>
                    <input name="name" type="text" id="input-field"
                        class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Enter text">
                </div>

                <!-- Select Box -->
                <div class="">
                    <label for="select-box" class="block text-sm font-medium text-gray-700">Select Courses</label>
                    <select name="course_ids[]" id="select-box" multiple
                        class="block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <option disabled>Choose an option</option>
                        @foreach ($courses as $course)
                            <option value={{ $course->id }}>{{ $course->title }}</option>
                        @endforeach

                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 rounded-md">Submit Data</button>
            </div>

        </form>
    </section>
@endsection
