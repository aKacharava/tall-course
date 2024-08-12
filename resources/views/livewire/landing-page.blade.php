<div
    x-data="{
        showSubscribe: false,
        showSuccess: false
    }"
    class="flex flex-col bg-indigo-900 w-full h-screen"
>
    <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
        <a class="text-4xl font-bold" href="/">
            <x-application-logo class="w-16 h-16 fill-current" />
        </a>
        <div class="flex justify-end">
            @auth
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}">
                    Login
                </a>
            @endauth
        </div>
    </nav>
    <div class="flex container mx-auto items-center h-full">
        <div class="flex flex-col w-full lg:w-1/3 items-center lg:items-start">
            <h1 class="text-white font-bold text-5xl leading-tight mb-4">
                A landing page to subscribe
            </h1>
            <p class="text-indigo-200 text-xl mb-10">
                We are just checking out the <span class="underline font-bold">TALL</span> stack. Wanna subscribe?
            </p>
            <x-secondary-button
                x-on:click="showSubscribe = true"
                class="py-3 px-8 !bg-red-500 hover:!bg-red-700"
            >
                Subscribe
            </x-secondary-button>
        </div>
    </div>
    <x-modal
        trigger="showSubscribe"
        class="bg-pink-500"
    >
        <p class="text-white text-5xl font-extrabold text-center">
            Let's do it!
        </p>
        <form
            wire:submit="subscribe"
            class="flex flex-col items-center p-24"
        >
            <x-text-input
                wire:model="email"
                class="px-5 py-3 w-80 border border-blue-400 !bg-white !text-gray-800 placeholder:!text-gray-400"
                type="email"
                name="email"
                placeholder="Email address"
            />
            <span class="text-gray-100 text-xs">
                {{
                    $errors->has('email')
                    ? $errors->first('email')
                    : 'We will send you a confirmation email.'
                }}
            </span>
            <x-secondary-button
                wire:click="subscribe"
                class="px-5 py-3 mt-5 w-80 !bg-blue-500 hover:!bg-blue-700 justify-center"
            >
                Get in
            </x-secondary-button>
        </form>
    </x-modal>
    <x-modal
        trigger="showSuccess"
        class="bg-green-500"
    >
        <p class="animate-pulse text-white text-9xl font-extrabold text-center">
            &check;
        </p>
        <p class="text-white text-5xl font-extrabold text-center mt-16">
            Great!
        </p>
        <p class="text-white text-3xl text-center">
            Check your inbox
        </p>
    </x-modal>
</div>
