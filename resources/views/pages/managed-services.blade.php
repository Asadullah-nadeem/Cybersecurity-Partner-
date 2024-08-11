@extends('layouts.app')

@section('title', 'Managed IT Services')

@section('content')

<header class="bg-gray-800 p-6">
    <nav class="flex justify-between items-center">
        <div class="text-2xl font-bold transition-transform transform hover:scale-110">FUNCSHUN</div>
        <ul class="flex space-x-6">
            <li><a href="#" class="hover:text-red-500 transition-colors">Services</a></li>
            <li><a href="#" class="hover:text-red-500 transition-colors">Awards</a></li>
            <li><a href="#" class="hover:text-red-500 transition-colors">About</a></li>
            <li><a href="#" class="hover:text-red-500 transition-colors">Contact Us</a></li>
            <li><a href="#" class="hover:text-red-500 transition-colors">Blog</a></li>
        </ul>
        <button class="bg-red-600 text-white py-2 px-4 rounded transition-transform transform hover:scale-105 hover:bg-red-700">Remote Support</button>
    </nav>
</header>

<section class="text-center py-20 bg-cover bg-center animate-fade-in" style="background-image: url('{{ asset('path-to-background-image') }}');">
    <h1 class="text-4xl font-bold mb-4 animate-bounce">Managed IT Services and Cybersecurity Partner in Miami</h1>
    <p class="text-lg mb-8 animate-fade-in delay-1">Your trusted Miami-based Managed IT Services and cybersecurity partner, ensuring operational efficiency and digital protection for your business.</p>
    <div>
        <button class="bg-gray-200 text-gray-900 py-2 px-6 rounded-full mr-4 hover:bg-gray-300 transition-transform transform hover:scale-105">Community Audit Sheet</button>
        <button class="bg-red-600 text-white py-2 px-6 rounded-full transition-transform transform hover:scale-105 hover:bg-red-700">Free Consultation</button>
    </div>
</section>

<section class="text-center py-20">
    <h2 class="text-3xl font-bold mb-8 animate-fade-in">Here's What We Can Do for You.</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="Managed IT Services" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">Managed IT Services</h3>
        </div>
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="Managed Security Services" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">Managed Security Services</h3>
        </div>
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="Virtual Private Server" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">Virtual Private Server</h3>
        </div>
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="CoIP" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">CoIP</h3>
        </div>
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="Data Backup" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">Data Backup</h3>
        </div>
        <div class="bg-gray-800 p-6 rounded transform hover:scale-105 transition-transform">
            <img src="{{ asset('path-to-icon') }}" alt="Cloud Solutions" class="mx-auto mb-4 animate-pulse">
            <h3 class="text-xl font-semibold">Cloud Solutions</h3>
        </div>
    </div>
</section>

<section class="bg-gray-800 py-20 text-center">
    <h2 class="text-3xl font-bold mb-8 animate-fade-in">Our team has over 10 years of combined experience working in the Miami area, but don’t just take our word for it.</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-900 p-6 rounded transition-transform transform hover:scale-105">
            <p class="italic">"Prompt response and turn around on work."</p>
            <p class="mt-4">- Maggie A</p>
        </div>
        <div class="bg-gray-900 p-6 rounded transition-transform transform hover:scale-105">
            <p class="italic">"Thanks for your assistance with our needs."</p>
            <p class="mt-4">- German P</p>
        </div>
        <div class="bg-gray-900 p-6 rounded transition-transform transform hover:scale-105">
            <p class="italic">"Always prompt service even after my issues are minor."</p>
            <p class="mt-4">- Maggie A</p>
        </div>
    </div>
</section>

<section class="py-20 text-center">
    <h2 class="text-3xl font-bold mb-8 animate-fade-in">Check out our FREE Managed Services eBook to learn more!</h2>
    <form class="space-y-4 max-w-lg mx-auto animate-fade-in" method="POST" action="{{ route('submit-form') }}">
        @csrf
        <input type="text" placeholder="Name" name="name" class="w-full p-3 rounded bg-gray-800 border border-gray-700 text-white" required>
        <input type="email" placeholder="Email" name="email" class="w-full p-3 rounded bg-gray-800 border border-gray-700 text-white" required>
        <input type="text" placeholder="Phone" name="phone" class="w-full p-3 rounded bg-gray-800 border border-gray-700 text-white" required>
        <textarea placeholder="How can we help you?" name="message" class="w-full p-3 rounded bg-gray-800 border border-gray-700 text-white" required></textarea>
        <button type="submit" class="w-full bg-red-600 text-white py-3 rounded hover:bg-red-700 transition-transform transform hover:scale-105">Submit</button>
    </form>
</section>

<footer class="bg-gray-800 py-10 text-center">
    <div class="max-w-2xl mx-auto">
        <p class="mb-4 animate-fade-in">Secure your business against online threats and become more productive with FUNCSHUN as your partner.</p>
        <button class="bg-red-600 text-white py-2 px-6 rounded hover:bg-red-700 transition-transform transform hover:scale-105">Get FREE Consultation</button>
    </div>
</footer>

@endsection

@push('styles')
<style>
    body::-webkit-scrollbar {
        display: none;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
            animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }

        50% {
            transform: translateY(-15px);
            animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
    }

    .animate-fade-in {
        animation: fadeIn 2s ease-in-out;
    }

    .animate-bounce {
        animation: bounce 2s infinite;
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
@endpush