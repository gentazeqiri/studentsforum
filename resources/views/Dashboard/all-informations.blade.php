
    <title>Blogs</title>
    <div>
        @include('layouts.dashboardHeader')
        <div class="flex overflow-hidden bg-white pt-16">
           @include('layouts.sidebarDashboard')
           <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
           <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
              <main>
                 <div class="pt-6 px-4">
                   
                    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                       <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                          <div class="flex items-center">
                             <div class="flex-shrink-0">
                                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                    {{ App\Models\information::get()->count() }}

                                </span>
                                <h3 class="text-base font-normal text-gray-500">All Informations</h3>
                             </div>
                            
                          </div>
                       </div>
                    
                    
                    </div>
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-5 bg-white">
                     <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                         <h1 class="p-3 text-lg font-semibold">Information</h1>
                         <p class="mt-1 text-sm p-3 font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
                     </caption>
                     <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                      
                         <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                             <tr>
                                 <th scope="col" class="py-3 px-6">
                                     Titulli
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                     Pershkrimi
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                    Kategoria
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                     Postuar nga
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                  Emri Kompanis
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                     Lokacioni
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                     Data Skadimit
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                    Vende
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Foto
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Fshij
                                </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($infos as $i)
                                 
                             @php
                              $link = explode('/', $i->img);

                          @endphp
                             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                 <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$i->titulli}}
                                 </th>
                                 <td class="py-4 px-6">
                                     {{$i->pershkrimi}}
                                 </td>
                                 <td class="py-4 px-6 capitalize">
                                     {{$i->kategoria}}
                                 </td>
                                 <td class="py-4 px-6 overflow-clip capitalize">
                                     {{$i->user->emri." ".$i->user->mbiemri}}
                                 </td>
                                 <td class="py-4 px-6 overflow-clip capitalize">
                                     {{$i->emriKompanis}}
                                 </td>
                                 <td class="py-4 px-6 overflow-clip capitalize">
                                    {{$i->lokacioni}}
                                </td>
                                <td class="py-4 px-6 overflow-clip capitalize">
                                    {{$i->dataSkadimit}}
                                </td>
                                <td class="py-4 px-6 overflow-clip capitalize">
                                    {{$i->vende}}
                                </td>
                                 <td class="py-4 px-6 overflow-clip">
                                    <img class="lg:h-10 xl:h-10 md:h-10 sm:h-10 xs:h-10 h-10  rounded w-full object-cover object-center mb-6" src="{{ asset('storage/info/' . $link[2]) }}" alt="Image Size 720x400">

                                 </td>
                                 <td class="py-4 px-6 overflow-clip">
                                     <button type="button" data-modal-toggle="popupmodal{{$i->id}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Fshij</button>
                 
                                 </td>
                                
                             </tr>
                       
                   
               
                             <div id="popupmodal{{$i->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                                <div class="relative p-4">
                                    <div class="relative left-[600px] top-[300px] bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popupmodal{{$i->id}}">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                            <a href="{{route('info.delete',$i->id)}}">
                                            <button data-modal-toggle="popupmodal{{$i->id}}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes, I'm sure
                                            </button>
                                        </a>
                                            <button data-modal-toggle="popupmodal{{$i->id}}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
           
                             @endforeach
                         </tbody>
                        
                     </table>
                      {{$infos->links()}}
                 </div>
                  
                 </div>
              </main>
       
              <p class="text-center text-sm text-gray-500 my-10">
                 <a href="#" class="hover:underline" target="_blank">Student's Forum</a>. All rights reserved.
              </p>
           </div>
        </div>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
     </div>