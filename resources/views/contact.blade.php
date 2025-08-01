@extends('layouts.app')

@section('title', 'Contact - Laravel')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
    
    <div class="space-y-6 text-gray-600 dark:text-gray-400">
        <p class="text-lg">
            Get in touch with us! We'd love to hear from you.
        </p>
        
        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Contact Information</h2>
            
            <div class="space-y-2">
                <p>
                    <strong>Email:</strong> 
                    <a href="mailto:info@example.com" class="text-blue-600 hover:underline">info@example.com</a>
                </p>
                <p>
                    <strong>Phone:</strong> 
                    <a href="tel:+1234567890" class="text-blue-600 hover:underline">+1 (234) 567-890</a>
                </p>
                <p>
                    <strong>Address:</strong> 
                    123 Laravel Street, Framework City, PHP 12345
                </p>
            </div>
        </div>

        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Business Hours</h2>
            
            <div class="space-y-1">
                <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>
                <p><strong>Saturday:</strong> 10:00 AM - 4:00 PM</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>
        </div>

        <div class="space-y-4">
            <h2 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">Follow Us</h2>
            
            <div class="space-y-2">
                <p>Stay connected with us on social media:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li><a href="#" class="text-blue-600 hover:underline">Twitter</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">LinkedIn</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">GitHub</a></li>
                </ul>
            </div>
        </div>
        
        <p class="mt-8">
            We strive to respond to all inquiries within 24 hours. Thank you for your interest in Laravel!
        </p>
    </div>
@endsection