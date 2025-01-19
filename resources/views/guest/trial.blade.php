@extends('shared.guest.base')
@section('title', __('Commencer'))

@section('content')
    <h1 class="-mb-10 text-center text-5xl text-x-black font-x-huge">
        Obtenez un Essai Gratuit
    </h1>
    <section class="container mx-auto p-4 w-full">
        <div class="grid grid-rows-1 grid-cols-1 lg:grid-cols-5 gap-6">
            <div class="rounded-x-huge bg-x-prime p-6 lg:col-span-3 lg:col-start-2">
                <form validate action="{{ route('actions.guest.send') }}"method="post" class="flex flex-col gap-6">
                    @csrf
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="full_name" class="font-x-thin text-x-black text-sm">
                            Nom complet (*)
                        </label>
                        <neo-textbox rules="required" errors='{"required": "{{ __('Le champ du nom complet est requis') }}"}'
                            name="full_name" placeholder="Nom complet (*)" value="{{ old('full_name') }}"></neo-textbox>
                    </div>
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="email" class="font-x-thin text-x-black text-sm">
                            Email (*)
                        </label>
                        <neo-textbox rules="required|email"
                            errors='{"required": "{{ __('Le champ du l\'email est requis') }}", "email": "{{ __('Le champ de l\'email doit contenir une adresse email valide') }}"}'
                            type="email" name="email" placeholder="Email (*)" value="{{ old('email') }}"></neo-textbox>
                    </div>
                    <div
                        class="focused flex flex-col gap-px rounded-x-thin border-2 border-x-x-white border-y-x-white bg-x-light p-2">
                        <label for="phone" class="font-x-thin text-x-black text-sm">
                            Téléphone (*)
                        </label>
                        <neo-textbox rules="required|phone"
                            errors='{"required": "{{ __('Le champ du téléphone est requis') }}", "phone": "{{ __('Le champ du téléphone doit contenir un numéro de téléphone valide') }}"}'
                            type="tel" name="phone" placeholder="Téléphone (*)"
                            value="{{ old('phone') }}"></neo-textbox>
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
                        <span class="text-base font-x-thin ps-4 pe-5">Envoyer Maintenant</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script src="{{ asset('js/validate.min.js') }}"></script>
@endsection
