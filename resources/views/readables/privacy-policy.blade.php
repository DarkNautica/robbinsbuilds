@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="bg-white">
    @include('components.header')

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                    Privacy Policy
                </h1>
                <p class="mt-6 text-lg font-medium text-gray-600 sm:text-xl">
                    Your privacy is important to us. Learn more about how we handle your data.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">Information We Collect</h2>
            <p class="mt-4 text-gray-600">
                We collect personal information that you provide to us, such as your name, email address, and payment information, when you use our services.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">How We Use Your Information</h2>
            <p class="mt-4 text-gray-600">
                Your information is used to provide, operate, and improve our services, as well as to communicate with you about updates and promotional offers.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">Sharing Your Information</h2>
            <p class="mt-4 text-gray-600">
                We do not share your personal information with third parties except as necessary to operate our services or as required by law.
            </p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">Your Rights</h2>
            <p class="mt-4 text-gray-600">
                You have the right to access, update, and delete your personal information. Contact us at <a href="mailto:help@robbinsbuilds.com" class="text-red-600">help@robbinsbuilds.com</a> for assistance.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">Contact Us</h2>
            <p class="mt-4 text-gray-600">
                If you have any questions about this privacy policy, please contact us at <a href="mailto:help@robbinsbuilds.com" class="text-red-600">help@robbinsbuilds.com</a>.
            </p>
        </section>
    </div>
</div>
@endsection
