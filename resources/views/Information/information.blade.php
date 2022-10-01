@include('layouts.app')

<div class="bg-[#ff5e63] sm:h-64 lg:h-48 content-center">

 
    <div > <h1 class=" text-6xl text-white text-center p-4">Student's Forum</h1>
        <p class=" text-2xl text-white text-center">Information</p>
    </div>
   
  </div>
<div class="w-full  shadow p-20 rounded-lg bg-white">

    <div class="pt-6 pb-12 flex">
        <div id="card" class="md:w-3/4">
 @foreach ($infos as $i)
        
            @php
            $link = explode('/', $i->img);
            
        @endphp
            <div class="container mx-auto px-20 mb-3">
                <a data-modal-toggle="defaultModal{{$i->id}}">
                <div class="flex bg-white border border-gray-500 rounded-xl overflow-hidden items-center justify-start" style="cursor: auto;">
                                            
                  <div class="relative w-32 h-32 flex-shrink-0">
                                                
                    <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                                                    
                      <img alt="Placeholder Photo" class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50" loading="lazy" src="{{ asset('storage/info/' . $link[2]) }}">
                                                
                    </div>
                                            
                  </div>
                                            
                  <div class="p-4">
                                                
                    <p class="text-sm line-clamp-1 font-bold">{{$i->titulli}}</p>
                                                
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2"> {{ substr($i->pershkrimi, 0, 237) }}...</p>
                                                
                    <span class="flex items-center justify-start text-gray-500 mt-3">
                                                    
                        <i class="fa-solid fa-briefcase mr-1"></i>{{' ' . $i->emriKompanis }}
                        <i class="fa-solid fa-tag mr-1 ml-5"></i>{{ ' ' . $i->kategoria }}
                        <i class="fa-solid fa-location-pin mr-1 ml-5"></i>{{ ' ' . $i->lokacioni }}
                                                
                    </span>
                                            
                  </div>
                                        
                </div></a>
                </div>

                


  
  <!-- Main modal -->
  <div id="defaultModal{{$i->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
      <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                     {{$i->titulli}}
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal{{$i->id}}">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="flex">
                <img alt="Placeholder Photo" class="w-[250px] h-[250px] p-10 object-cover object-center transition duration-50" loading="lazy" src="{{ asset('storage/info/' . $link[2]) }}">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white p-10">
                    {{$i->titulli}}
                 </h3>
              </div>
              <hr>
              <div class="flex justify-center">
                <span class="flex items-center justify-start text-gray-500 p-2 ">
                                                    
                    <i class="fa-solid fa-briefcase mr-1"></i>{{' ' . $i->emriKompanis }}
                    <i class="fa-solid fa-tag mr-1 ml-5"></i>{{ ' ' . $i->kategoria }}
                    <i class="fa-solid fa-location-pin mr-1 ml-5"></i>{{ ' ' . $i->lokacioni }}
                                            
                </span>
              </div>
              <hr>
              <div class="p-6 space-y-6">

                  <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{$i->pershkrimi}}
                </p>
                
              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                  <button data-modal-toggle="defaultModal{{$i->id}}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Mbyll</button>
              </div>
          </div>
      </div>
  </div>
  
            @endforeach
            <!--/ card-->
        </div>
        <!--/ flex-->
    </div>
    <div>

    </div>
</div>
</div>


@include('layouts.footer')
