<div>
    <div class="flex flex-col justify-center items-center">
        
        <div class="p-2">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                      <ul class="splide__list">
                          @foreach ($response->books as $itemBook)
                            <div class="splide__slide m-2 px-3 h-max ">
                                <div class="flex flex-col items-center justify-center h-96">
                                    <img class="w-auto  shadow-xl shadow-slate-900" src="{{ asset('storage/'. $itemBook['image']) }}" alt="">
                                </div>
                            </div>    
                          @endforeach
                      </ul>
                </div>
            </section>
        </div>
    </div>
</div>
