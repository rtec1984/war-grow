<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="
    padding-top: 1.5rem;
    margin-left: auto;
    margin-right: auto;
    border-width: 0.5rem;
">
        {{ $slot }}
    </div>
</div>
