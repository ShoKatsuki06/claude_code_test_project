@extends('layouts.app')

@section('title', 'Services - Laravel')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Our Services</h1>
    
    <div class="space-y-8 text-gray-600 dark:text-gray-400">
        <p class="text-lg">
            We offer comprehensive web development services to help your business grow and succeed online.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Web Development</h2>
                <p class="mb-4">
                    Custom web applications built with modern technologies like Laravel, React, and Vue.js.
                </p>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>Responsive design</li>
                    <li>Database integration</li>
                    <li>API development</li>
                    <li>Performance optimization</li>
                </ul>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">E-Commerce Solutions</h2>
                <p class="mb-4">
                    Complete online store solutions with payment integration and inventory management.
                </p>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>Shopping cart functionality</li>
                    <li>Payment gateway integration</li>
                    <li>Product catalog management</li>
                    <li>Order tracking system</li>
                </ul>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">API Development</h2>
                <p class="mb-4">
                    RESTful APIs and GraphQL services for seamless data integration and third-party connections.
                </p>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>RESTful API design</li>
                    <li>GraphQL implementation</li>
                    <li>Authentication & authorization</li>
                    <li>API documentation</li>
                </ul>
            </div>

            <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg">
                <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Cloud Solutions</h2>
                <p class="mb-4">
                    Scalable cloud infrastructure and deployment solutions for your applications.
                </p>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>AWS & Google Cloud deployment</li>
                    <li>Container orchestration</li>
                    <li>Auto-scaling configuration</li>
                    <li>Monitoring & logging</li>
                </ul>
            </div>
        </div>

        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 p-6 rounded-lg">
            <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC] mb-4">Why Choose Our Services?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                <div class="text-center">
                    <div class="text-2xl mb-2">⚡</div>
                    <h3 class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Fast Development</h3>
                    <p>Quick turnaround times without compromising quality</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl mb-2">🛡️</div>
                    <h3 class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Secure & Reliable</h3>
                    <p>Built with security best practices and reliable architecture</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl mb-2">🎯</div>
                    <h3 class="font-medium text-[#1b1b18] dark:text-[#EDEDEC]">Custom Solutions</h3>
                    <p>Tailored to meet your specific business requirements</p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <p class="text-lg mb-4">Ready to get started?</p>
            <a href="{{ route('contact') }}" class="inline-block px-6 py-3 bg-[#1b1b18] dark:bg-[#eeeeec] dark:text-[#1C1C1A] text-white rounded-lg hover:bg-black dark:hover:bg-white transition-colors">
                Contact Us Today
            </a>
        </div>
    </div>
@endsection