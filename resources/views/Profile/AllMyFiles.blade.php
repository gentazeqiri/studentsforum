@include('layouts.app')

<div class="relative flex justify-center bg-[#ff5e63]">
    <div class="bg-[#ff5e63] h-80">
        <h1 class="relative top-[45px] text-6xl text-white text-center">Student's Forum</h1>
        <p class="relative top-[50px] text-2xl text-white text-center">Recent Uploads</p>
    </div>

</div>

<header class="relative py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-white">Settings</h1>
    </div>
</header>

<main class="relative -mt-32">
    <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                @include('profile/aside')

                <div class="divide-y divide-gray-200 lg:col-span-9">
                    <div class="py-6 px-4 sm:p-6 lg:pb-8">
                        <div>
                          <h2 class="text-lg leading-6 font-medium text-gray-900">Recent Uploads</h2>
                          <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                        </div>
                    </div>
                    @if (Session::has('msg'))
                    <div class=" text-center text-green-600 ">
                       <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                          <span class="font-medium">{!! \Session::get('msg') !!}</span> 
                        </div>
                    </div>
                    @endif

                    <div class="flex overflow-x-scroll p-10 hide-scroll-bar ">
                        
                        <div class="flex flex-nowrap md:ml-20 mr-10 ">
                            
                            
                            <div class="inline-flex px-3 ">
                             @foreach ($files as $f)
                               @php
                                $cv = explode('/', $f->dokumenti);
                               @endphp
                      
                       
                        
                 
                      <div >
                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots{{$f->id}}" class="ml-3 inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
                          Actions</button>
                          
                          <!-- Dropdown menu -->
                          <div id="dropdownDots{{$f->id}}" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                              <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                <li>
                                  <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                  <a class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" type="button" data-modal-toggle="popup-modal{{$f->id}}">
                                    Delete
                                  </a>
                                </li>
                                
                              </ul>
                        
                          </div>
                    

                          <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md
               hover:shadow-xl transition-shadow duration-300
              ease-in-out mx-3.5 flex justify-center items-center">
              
       <a href="/storage/dokumentet/{{ $cv[2] }}" download>
                                        <img class="ml-2" src="{{ asset('/noProfilePhoto/docs.png') }}"
                                            width="100px" />
                                            <p class="block text-center">{{$f->titulli}}</p>
                                            <p class="block text-center">{{$f->pershkrimi}}</p>
                                            </a>
                                       
                                    </div>  
                                </div>
                                <div id="popup-modal{{$f->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal{{$f->id}}">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-6 text-center">
                                                <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this?</h3>
                                                <a href="{{ route('file.destroy', $f->id) }}">
                                                <button data-modal-toggle="popup-modal{{$f->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                    Yes, I'm sure
                                                </button></a>
                                                <button data-modal-toggle="popup-modal{{$f->id}}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

@include('layouts.footer')
