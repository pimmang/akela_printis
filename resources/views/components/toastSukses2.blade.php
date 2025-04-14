 <div id="toast-success2"
     class="flex fixed overflow-hidden top-4 right-4 transition-all duration-300 z-1000 items-center w-fit max-w-sm p-4 mb-4 border-b-2 text-white bg-white border-0 !border-l-2 border-success backdrop-blur-2xl rounded-lg shadow-lg animate-slide-in"
     role="alert">
     <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg ">
         <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
             <path
                 d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
         </svg>
         <span class="sr-only">Check icon</span>
     </div>
     <div class="ms-3 text-sm font-normal flex gap-2 items-center text-gray-700" id="message">
         {{ $message }}
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" viewBox="0 0 256 256">
             <path
                 d="M174.92,156c-10.29,17.79-27.39,28-46.92,28s-36.63-10.2-46.93-28a8,8,0,1,1,13.86-8c7.46,12.91,19.2,20,33.07,20s25.61-7.1,33.08-20a8,8,0,1,1,13.84,8ZM232,128a104.35,104.35,0,0,1-4.56,30.56,8,8,0,0,1-2,3.31l-63.57,63.57a7.9,7.9,0,0,1-3.3,2A104,104,0,1,1,232,128Zm-16,0a87.89,87.89,0,1,0-64,84.69L212.69,152A88.05,88.05,0,0,0,216,128ZM92,120a12,12,0,1,0-12-12A12,12,0,0,0,92,120Zm72-24a12,12,0,1,0,12,12A12,12,0,0,0,164,96Z">
             </path>
         </svg>
     </div>
     <button type="button" onclick="document.getElementById('toast-success2').remove()"
         class="ms-auto -mx-1.5 -my-1.5 bg-transparent text-gray-800 hover:text-gray-900 rounded-lg  hover:bg-primary-100 inline-flex items-center justify-center h-8 w-8 "
         aria-label="Close">
         <span class="sr-only">Close</span>
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
         </svg>
     </button>

     <div class="absolute bottom-0 left-0 h-[2px] bg-success w-full animate-progress-bar"></div>
 </div>

 <style>
     @keyframes progress-bar {
         from {
             width: 0%;
         }

         to {
             width: 100%;
         }
     }

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

     .animate-slide-in {
         animation: slide-in 0.5s ease-out;
     }

     .animate-slide-out {
         animation: slide-out 0.5s ease-in forwards;
     }

     .animate-progress-bar {
         animation: progress-bar 3s linear forwards;
     }
 </style>

 <script>
     document.addEventListener('DOMContentLoaded', () => {
         const toast2 = document.getElementById('toast-success2');
         toast2.classList.add('right-4');
         setTimeout(() => {
             toast2.classList.remove('animate-slide-in');
             toast2.classList.add('animate-slide-out');
         }, 3000); // setelah 3 detik

         // Progress bar animation
         const progressBar = document.getElementById('progress-bar');
         progressBar.style.width = "100%";
     });
 </script>
