<x-layout>
    <div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                Bentornato, amministratore
            </h1>
    </div>

   @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
       
   @endif
     @if ($errors->any(()))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
     @endif
        </div>
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo amministratore</h2>
                    <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo revisore</h2>
                    <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo redattore</h2>
                    <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>I tag della piattaforma</h2>
                    <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
                </div>
            </row>
        </div>
</x-layout>