<div id="preloader"
    class="fixed inset-0 bg-white z-50 flex flex-col items-center justify-center transition-opacity duration-500">

    {{-- Logo --}}
    <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="w-20 h-auto mb-6">

    {{-- 3 Bola Bouncing --}}
    <div class="flex items-end space-x-4 mb-4">
        <div class="relative h-[37px] w-[15px] bounceball"></div>
        <div class="relative h-[37px] w-[15px] bounceball"></div>
        <div class="relative h-[37px] w-[15px] bounceball"></div>
    </div>

    {{-- Teks --}}
    {{-- <span class="text-[#fbae17] text-lg font-semibold">Loading...</span> --}}
</div>
<style>
    .fade-out {
        opacity: 0;
        transition: opacity 1s ease;
        pointer-events: none;
    }

    @keyframes bounceBall {
        0% {
            top: 30px;
            height: 5px;
            border-radius: 60px 60px 20px 20px;
            transform: scaleX(2);
        }

        35% {
            height: 15px;
            border-radius: 50%;
            transform: scaleX(1);
        }

        100% {
            top: 0;
        }
    }

    .bounceball::before {
        content: '';
        position: absolute;
        top: 0;
        width: 15px;
        height: 15px;
        border-radius: 9999px;
        background-color: #752070;
        transform-origin: 50%;
        animation: bounceBall 500ms alternate infinite ease;
    }

    .bounceball:nth-child(2)::before {
        animation-delay: 150ms;
    }

    .bounceball:nth-child(3)::before {
        animation-delay: 300ms;
    }
</style>
