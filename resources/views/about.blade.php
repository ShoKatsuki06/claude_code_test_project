@extends('layouts.app')

@section('title', 'About - Laravel')

@section('content')
    <h1 class="text-3xl font-bold mb-6">About Laravel</h1>
    
    <div class="space-y-4 text-gray-600 dark:text-gray-400">
        <p class="text-lg">
            Welcome to the About page! This is a sample page created with Laravel.
        </p>
        
        <p>
            Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling.
        </p>
        
        <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mt-8">Key Features</h2>
        
        <ul class="list-disc list-inside space-y-2">
            <li>Simple, fast routing engine</li>
            <li>Powerful dependency injection container</li>
            <li>Multiple back-ends for session and cache storage</li>
            <li>Expressive, intuitive database ORM</li>
            <li>Database agnostic schema migrations</li>
            <li>Robust background job processing</li>
            <li>Real-time event broadcasting</li>
        </ul>
        
        <p class="mt-8">
            Laravel is accessible, powerful, and provides tools required for large, robust applications. Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you.
        </p>
    </div>
@endsection