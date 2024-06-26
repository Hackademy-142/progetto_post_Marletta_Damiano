<x-layout>
    <div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Tutti gli articoli
            </h1>
    </div>
     @if (session('message'))
        <div class="alert alert-success text-center">
            {{ sessione('message') }}
        </div>    
     @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 mb-4">
                <x-card
                    :tags="$article->tags"
                    title="{{ $article->title}}" 
                    subtitle="{{ $article->subtitle }}"
                    image="{{ $article->image }}"
                    category="{{ $article->category->name ??'None' }}"
                    data="{{ $article->created_at->format('d/m/y') }}"
                    user="{{ $article->user->name ??'None'}}"
                    url="{{ route('article.show' , compact('article')) }}"
                    urlCategory="{{route('article.byCategory' , ['category' => $article->category->id ??'None' ] )}}"
                />
            </div>
            @endforeach
        </div>
    </div>
</x-layout>