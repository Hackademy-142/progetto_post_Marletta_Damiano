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
        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo amministratore</h2>
                    <x-requests-table :roleRequest="$adminRequest" role="amministratore"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo revisore</h2>
                    <x-requests-table :roleRequest="$revisionRequest" role="revisore"/>
                </div>
            </row>
        </div>

        <div class="container my-5">
            <row class="justify-content-center">
                <div class="col-12">
                    <h2>Richiesta per ruolo redattore</h2>
                    <x-requests-table :roleRequest="$writerRequest" role="redattore"/>
                </div>
            </row>
        </div>
</x-layout>