<div class="card" >
     <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        @if ($category)
            <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
      
        @else
            <p class="small text-muted st-italic text-capitalize">
                Non categorizzato

            </p>
        @endif
        {{-- <span class="text-muted small fst-italic">tempo di lettura {{ $readDuration }} min</span> --}}

          <p class="small fst-italic text-capitalize">
            @foreach ($tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
    </div>
    <div class="card-footer text-muted d-flex justify-content-center align-items-center">
        Redatto il {{ $data }} da {{ $user }}

    </div>         <a href="{{ $url }}" style="width: -webkit-fill-available;" class="btn btn-info text-white">Leggi</a>

    {{-- <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ Storage::url($image) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
        <p class="card-text">{{ $subtitle }}</p>
        @if ($category)
            <a href="{{ $urlCategory }}" class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}</a>
      
        @else
            <p class="small text-muted st-italic text-capitalize">
                Non categorizzato

            </p>
        @endif
        

          <p class="small fst-italic text-capitalize">
            @foreach ($tags as $tag)
                #{{ $tag->name }}
            @endforeach
        </p>
        <div class="card-footer text-muted d-flex justify-content-center align-items-center">
            Redatto il {{ $data }} da {{ $user }}
          
        </div>
          <a href="{{ $url }}" style="width: -webkit-fill-available;" class="btn btn-primary  ">leggi</a>
      
    </div> --}}
 
</div> 
