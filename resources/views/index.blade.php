@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Welcome to My Laravel App</h1>
        <p class="text-lg mb-6">This is a simple application built with Laravel and Tailwind CSS.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2">Feature 1</h2>
                <p class="text-gray-700">Description of feature 1.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2">Feature 2</h2>
                <p class="text-gray-700">Description of feature 2.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2">Feature 3</h2>
                <p class="text-gray-700">Description of feature 3.</p>
            </div>
        </div>
    </div>
@endsection
