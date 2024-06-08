<x-layout>
    <div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Bentornato, revisore
            </h1>
    </div>

   @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
       
   @endif
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli da revisionare</h2>
                    <x-articles-table :articles="$unrevisionedArticles"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli pubblicati</h2>
                    <x-articles-table :articles="$acceptedArticles"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Articoli respinti</h2>
                    <x-articles-table :articles="$rejectedArticles"/>
                </div>
            </row>
        </div>
</x-layout>