<div class="fixed top-4 right-4 z-[1000] space-y-5">
    @foreach ($errors->all() as $index => $error)
        <div id="toast-error-{{ $index }}"
            class="toast-error flex relative  mb-2 w-sm p-4 border-l-4 bg-white border-red-600 text-red-700 rounded-lg shadow-lg animate-slide-in"
            role="alert">
            <div
                class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ $error }}</div>
            <button type="button"
                class="ms-auto text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5"
                onclick="document.getElementById('toast-error-{{ $index }}').remove()">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1l12 12M13 1L1 13" />
                </svg>
            </button>
            <div class="absolute bottom-0 left-0 h-[2px] bg-red-600 w-full animate-progress-bar"></div>
        </div>
    @endforeach
</div>
<style>
    @keyframes slide-in {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slide-out {
        from {
            transform: translateX(0);
            opacity: 1;
        }

        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }

    @keyframes progress-bar {
        from {
            width: 100%;
        }

        to {
            width: 0%;
        }
    }

    .animate-slide-in {
        animation: slide-in 0.5s ease-out;
    }

    .animate-slide-out {
        animation: slide-out 0.5s ease-in forwards;
    }

    .animate-progress-bar {
        animation: progress-bar 9s linear forwards;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toasts = document.querySelectorAll('.toast-error');
        toasts.forEach((toast) => {
            setTimeout(() => {
                toast.classList.remove('animate-slide-in');
                toast.classList.add('animate-slide-out');

                // Remove element after animation ends
                toast.addEventListener('animationend', () => {
                    toast.remove();
                });
            }, 10000); // setelah 3 detik
            setTimeout(() => {
                toast.classList.add('animate-slide-out');                
            }, 9000); // setelah 3 detik
        });
    });
</script>
