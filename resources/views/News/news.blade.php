
@include('layouts.app')

<div class="bg-[#ff5e63] sm:h-64 lg:h-48 content-center">

 
  <div > <h1 class=" text-6xl text-white text-center p-4">Student's Forum</h1>
      <p class=" text-2xl text-white text-center">News</p>
  </div>
 
</div>
<section class="text-gray-600 body-font">
    <div class="container lg:px-5 pb-24 mt-4 mx-auto max-w-7x1">
    
      <div class="flex flex-wrap -m-4">
    
        @foreach ($news as $n)
        @php
        $link = explode('/', $n->img);
        
    @endphp

        <div class="xl:w-1/3 md:w-1/2 p-4"> 
           <a href="{{route('news.show',$n->id)}}/?{{$n->titulli}}">
          <div class="bg-white p-6 rounded-lg">
            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="{{ asset('storage/news/' . $link[2]) }}" alt="Image Size 720x400">
            <h3 class="tracking-widest text-[#ff5e63] text-xs font-medium title-font ">{{$n->kategoria}} / {{date('d F, Y', strtotime($n->created_at))}}</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4"> @if (strlen($n->titulli)>=37)
              {{substr($n->titulli,0,37)}}... 
              @else
              {{$n->titulli}}
              @endif</h2>
            <p class="leading-relaxed text-base"> {{ substr($n->pershkrimi, 0, 240) }}...</p>
          </div></a>
        </div>
          @endforeach
  
       
       
      </div>
      <div class="flex justify-center items-center p-3">
      {{$news->links()}}
    </div>
    </div>
  </section>


  @include('layouts.footer')