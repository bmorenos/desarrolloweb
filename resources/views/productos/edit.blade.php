<x-app-layout>
    <form class="container p-5  my-5 bg-white shadow-lg rounded-lg" action="{{route(['productos.actualizar', 'id'=>$productoss->prod_id])}}" method="POST">
        <div class="d-flex align-items-center justify-content-center"><h2  class="display-4 inline-block">Editar Cliente</h2></div>
        <hr>
        <ul class="text-danger p-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
            <input type="text" class="form-control" name="prod_nombre" value="">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="prod_categoria" value="{{old('prod_categoria')}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Descripcion corta</label>
            <input type="text" class="form-control" name="prod_descripcion" value="{{old('prod_descripcion')}}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="prod_cantidad" value="{{old('prod_cantidad')}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</x-app-layout>
