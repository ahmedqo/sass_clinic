 <footer class="container mx-auto p-4 w-full">
     <div class="bg-x-prime bg-opacity-30 rounded-x-huge p-6 border-2 border-x-x-white border-y-x-white">
         <div class="flex flex-col gap-4">
             <div class="flex flex-col lg:flex-row lg:flex-wrap gap-6">
                 <div class="flex flex-col gap-4 flex-1 lg:max-w-xs me-auto">
                     <a href="{{ route('views.guest.home') }}" class="block w-20">
                         <img src="{{ asset('img/logo.webp') }}?v={{ env('APP_VERSION') }}" loading="lazy"
                             alt="{{ env('APP_NAME') }} logo image" class="block w-full" />
                     </a>
                     <p class="text-base font-x-thin text-x-black text-opacity-70">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, tenetur?
                     </p>
                 </div>
                 <div class="flex flex-col gap-4 w-max">
                     <h5 class="text-x-black font-x-huge text-lg">Quick Links</h5>
                     <nav>
                         <ul class="flex flex-col gap-px">
                             <li>
                                 <a href="{{ route('views.guest.home') }}"
                                     class="flex text-x-black text-opacity-70 font-x-thin text-base">Home</a>
                             </li>
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">About
                                     us</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
                 <div class="flex flex-col gap-4 w-max">
                     <h5 class="text-x-black font-x-huge text-lg">Company</h5>
                     <nav>
                         <ul class="flex flex-col gap-px">
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
                 <div class="flex flex-col gap-4 w-max">
                     <h5 class="text-x-black font-x-huge text-lg">Legal</h5>
                     <nav>
                         <ul class="flex flex-col gap-px">
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                             <li>
                                 <a href="" class="flex text-x-black text-opacity-70 font-x-thin text-base">Link
                                     1</a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
             <div class="w-max mx-auto lg:mx-0 flex items-center gap-6">
                 <span class="text-base font-x-thin text-x-black text-opacity-70">
                     &copy; Health Care 2025
                 </span>
                 <ul class="w-max flex flex-wrap gap-2">
                     <li>
                         <a href=""
                             class="flex items-center justify-center bg-x-black text-x-white w-6 h-6 rounded-full"></a>
                     </li>
                     <li>
                         <a href=""
                             class="flex items-center justify-center bg-x-black text-x-white w-6 h-6 rounded-full"></a>
                     </li>
                     <li>
                         <a href=""
                             class="flex items-center justify-center bg-x-black text-x-white w-6 h-6 rounded-full"></a>
                     </li>
                     <li>
                         <a href=""
                             class="flex items-center justify-center bg-x-black text-x-white w-6 h-6 rounded-full"></a>
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </footer>
