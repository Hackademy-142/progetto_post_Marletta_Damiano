<x-layout>
<div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
               Inserisci un articolo
            </h1>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        @if ($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                        <form action="{{ route('article.store')}}" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                                 @csrf
                               <div class="row ">
                                    <div class="mb-3 col-6">
                                        <label for="title" class="form-label">Titolo:</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{old('title') }}">
                                    </div>
                                    
                                    <div class="mb-3 col-6">
                                        <label for="title" class="form-label">Sottotitolo:</label>
                                        <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle') }}">
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="mb-3 col-6">
                                        <label for="image" class="form-label">Tags</label>
                                        <input style=" box-shadow: 0px 2px 5px -1px" name="tags" class="form-control" id="tags" value="{{ old('tags') }}" >
                                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                                    </div>

                                    <div class="mb-3 col-6">
                                        <label for="tags" class="form-label">immagine:</label>
                                        <input type="file" name="image" class="form-control" id="image" >
                                    </div>
                                </div>
                             

                                
                                <div class="mb-5">
                                    <label for="category" class="form-label">Categoria:</label>
                                    <select  name="category" id="category" class="form-control text-capitalize">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">Corpo del testo:</label>
                                    <textarea  name="body" class="form-control" id="body" cols="30" rows="7" >{{old('body')}}</textarea>
                                </div>
                                <div class="mt-2 d-flex justify-content-center">
                                    <button class="btn btn-info text-white ">Inserisci un articolo</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
    </div>
</x-layout>