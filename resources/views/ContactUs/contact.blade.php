@include('layouts.app')
<section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">
    <div class="container">
       <div class="flex flex-wrap lg:justify-between -mx-4">
          <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
             <div class="max-w-[570px] mb-12 lg:mb-0">
                <span class="block mb-4 text-base text-[#ff5e63] font-semibold">
                Contact Us
                </span>
                <h2
                   class="
                   text-dark
                   mb-6
                   uppercase
                   font-bold
                   text-[32px]
                   sm:text-[40px]
                   lg:text-[36px]
                   xl:text-[40px]
                   "
                   >
                   GET IN TOUCH WITH US
                </h2>
                <p class="text-base text-body-color leading-relaxed mb-9">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                   eius tempor incididunt ut labore et dolore magna aliqua. Ut enim
                   adiqua minim veniam quis nostrud exercitation ullamco
                </p>
                <div class="flex mb-8 max-w-[370px] w-full">
                   <div
                      class="
                      max-w-[60px]
                      sm:max-w-[70px]
                      w-full
                      h-[60px]
                      sm:h-[70px]
                      flex
                      items-center
                      justify-center
                      mr-6
                      overflow-hidden
                       bg-opacity-5
                      text-[#ff5e63]
                      rounded
                      "
                      >
                      <i class="fa-solid fa-location-pin text-2xl"></i>
                   </div>
                   <div class="w-full">
                      <h4 class="font-bold text-dark text-xl mb-1">Our Location</h4>
                      <p class="text-base text-body-color">
                         99 S.t Jomblo Park Pekanbaru 28292. Indonesia
                      </p>
                   </div>
                </div>
                <div class="flex mb-8 max-w-[370px] w-full">
                   <div
                      class="
                      max-w-[60px]
                      sm:max-w-[70px]
                      w-full
                      h-[60px]
                      sm:h-[70px]
                      flex
                      items-center
                      justify-center
                      mr-6
                      overflow-hidden
                       bg-opacity-5
                      text-[#ff5e63]
                      rounded
                      "
                      >
                      <i class="fa-solid fa-phone text-2xl"></i>
                   </div>
                   <div class="w-full">
                      <h4 class="font-bold text-dark text-xl mb-1">Phone Number</h4>
                      <p class="text-base text-body-color">(+62)81 414 257 9980</p>
                   </div>
                </div>
                <div class="flex mb-8 max-w-[370px] w-full">
                   <div
                      class="
                      max-w-[60px]
                      sm:max-w-[70px]
                      w-full
                      h-[60px]
                      sm:h-[70px]
                      flex
                      items-center
                      justify-center
                      mr-6
                      overflow-hidden
                      bg-opacity-5
                      text-[#ff5e63]
                      rounded
                      "
                      >
                      <i class="fa-solid fa-envelope text-2xl"></i>
                   </div>
                   <div class="w-full">
                      <h4 class="font-bold text-dark text-xl mb-1">
                         Email Address
                      </h4>
                      <p class="text-base text-body-color">info@yourdomain.com</p>
                   </div>
                </div>
             </div>
          </div>
          <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
             <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
               @if (Session::has('msg'))
            <div class="text-center text-green-600 ">
               <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                  <span class="font-medium">{!! \Session::get('msg') !!}</span> 
                </div>
            </div>
            @endif
                <form action="{{route('contact.store')}}" method="post">
                  @csrf
                   <div class="mb-6">
                      <input
                         type="text"
                         placeholder="Your Name"
                         class="  @error('emri') is-invalid @enderror
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         name="emri" required
                         />
                       
                                            @error('emri')
                                            <div class="ml-1 text-red-500 text-sm ">{{ $message }}
                                            </div>
                                            @enderror
                   </div>
                   <div class="mb-6">
                      <input
                         type="email"
                         placeholder="Your Email"
                         class="@error('email')
                            is-invalid
                         @enderror
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         name="email" required
                         />
                         @error('email')
                         <div class="ml-1 text-red-500 text-sm ">{{ $message }}
                         </div>
                         @enderror
                   </div>
                   <div class="mb-6">
                      <input
                         type="text"
                         placeholder="Your Phone"
                         class="@error('numriTel')
                         is-invalid
                      @enderror
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         name="numriTel" required
                         />
                         @error('numriTel')
                         <div class="ml-1 text-red-500 text-sm ">{{ $message }}
                         </div>
                         @enderror
                   </div>
                   <div class="mb-6">
                      <textarea
                         rows="6"
                         placeholder="Your Message"
                         class="@error('numriTel')
                         is-invalid
                      @enderror
                         w-full
                         rounded
                         py-3
                         px-[14px]
                         text-body-color text-base
                         border border-[f0f0f0]
                         resize-none
                         outline-none
                         focus-visible:shadow-none
                         focus:border-primary
                         "
                         name="mesazhi" required
                         ></textarea>
                         @error('mesazhi')
                         <div class="ml-1 text-red-500 text-sm ">{{ $message }}
                         </div>
                         @enderror
                   </div>
                   <div>
                      <button
                         type="submit"
                         class="
                         w-full
                         text-white
                         bg-[#ff5e63]
                         rounded
                         border border-[#d9b64c]
                         p-3
                         transition
                         hover:bg-opacity-90
                         "
                         >
                      Send Message
                      </button>
                   </div>
                </form>
                <div>
            
              
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 @include('layouts.footer')
 <!-- ====== Contact Section End -->

{{-- @endsection --}}