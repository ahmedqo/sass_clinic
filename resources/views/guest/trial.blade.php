@extends('shared.guest.base')
@section('title', __('Get Started'))

@section('content')
    <h1 class="-mb-10 text-center text-5xl text-x-black font-x-huge">
        Get Free Trial
    </h1>
    <section class="container mx-auto p-4 w-full">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="rounded-x-huge bg-x-prime p-6">
                <form validate action="{{ route('actions.guest.send') }}"method="post" class="flex flex-col gap-6">
                    @csrf
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="full_name" class="font-x-thin text-x-black text-sm">
                            Full name (*)
                        </label>
                        <neo-textbox rules="required" errors='{"required": "{{ __('The full name field is required') }}"}'
                            name="full_name" placeholder="Full name (*)" value="{{ old('full_name') }}"></neo-textbox>
                    </div>
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="email" class="font-x-thin text-x-black text-sm">
                            Email (*)
                        </label>
                        <neo-textbox rules="required|email"
                            errors='{"required": "{{ __('The email field is required') }}", "email": "{{ __('The email field must be a valid email') }}"}'
                            type="email" name="email" placeholder="Email (*)" value="{{ old('email') }}"></neo-textbox>
                    </div>
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="phone" class="font-x-thin text-x-black text-sm">
                            Phone (*)
                        </label>
                        <neo-textbox rules="required|phone"
                            errors='{"required": "{{ __('The phone field is required') }}", "phone": "{{ __('The phone field must be a valid phone number') }}"}'
                            type="tel" name="phone" placeholder="Phone (*)" value="{{ old('phone') }}"></neo-textbox>
                    </div>
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="message" class="font-x-thin text-x-black text-sm">
                            Message
                        </label>
                        <neo-textarea rows="3" auto="false" name="message" placeholder="Message"
                            value="{{ old('message') }}"></neo-textarea>
                    </div>
                    <button
                        class="ms-auto flex flex-wrap w-max items-center rounded-full p-[4px] bg-x-white text-x-black outline-none hover:bg-x-black hover:text-x-white focus:bg-x-black focus:text-x-white">
                        <span
                            class="flex items-center justify-center bg-x-black text-x-white rounded-full aspect-square w-8">
                            <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                                <path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z" />
                            </svg>
                        </span>
                        <span class="text-base font-x-thin ps-4 pe-5">Send Now</span>
                    </button>
                </form>
            </div>
            <ul class="flex flex-col gap-6">
                <li class="flex-1">
                    <a href=""
                        class="h-full flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-light p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">Our Process</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-prime text-x-black">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4 mt-auto">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Your Health, Simplified
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur?
                            </p>
                        </div>
                    </a>
                </li>
                <li class="flex-1">
                    <a href=""
                        class="h-full flex flex-col gap-20 rounded-x-huge border-2 border-x-x-white border-y-x-white bg-x-prime bg-opacity-30 p-6">
                        <div class="flex items-center justify-between gap-4">
                            <span class="text-lg text-x-black text-opacity-70 font-x-thin">How it Works</span>
                            <span class="w-8 h-8 rounded-full flex items-center justify-center bg-x-acent text-x-white">
                                <svg class="block pointer-events-none w-5 h-5" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="m216-160-56-56 464-464H360v-80h400v400h-80v-264L216-160Z" />
                                </svg>
                            </span>
                        </div>
                        <div class="flex flex-col gap-4 mt-auto">
                            <h4 class="text-2xl font-x-huge text-x-black">
                                Effortless AI-Driven Care
                            </h4>
                            <p class="text-base font-x-thin text-x-black text-opacity-70">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur?
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="{{ asset('js/validate.min.js') }}"></script>
@endsection
