@extends('shared.guest.base')
@section('title', __('Sent Successfully'))

@section('content')
    <section class="container mx-auto">
        <div class="w-full flex flex-col gap-4 p-6 overflow-hidden pb-12">
            <div class="check-container">
                <div class="check-background">
                    <svg viewBox="0 0 65 51" class="text-x-white" fill="none">
                        <path d="M7 25L27.3077 44L58.5 7" stroke="currentColor" stroke-width="13" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="check-shadow"></div>
            </div>
            <span class="check-text text-x-black font-x-thin text-xl lg:text-2xl text-center">
                Your message sent Successfully.<br /> We'll contact you as soon as possible.
            </span>
        </div>
    </section>
@endsection
