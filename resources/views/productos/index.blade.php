<x-app-layout>
    <div class="container p-5 my-5 bg-white shadow-lg rounded-lg">
        <div class="d-flex align-items-center justify-content-around"><h3  class="display-4 inline-block">Productos</h3> <a class="btn btn-success" href="{{route('productos.crear')}}">Crear</a> </div>
        <div class="table-responsive">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Opciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productoss as $produc)
                    <tr>
                        <th>{{$produc->prod_id}}</th>
                        <td>{{$produc->prod_nombre}}</td>
                        <td>{{$produc->prod_categoria}}</td>
                        <td>{{$produc->prod_descripcion}}</td>
                        <td>{{$produc->prod_cantidad}}</td>
                        <td>

                            <a class="btn btn-success"
                               href="{{route('productos.editar', ['id'=>$produc->prod_id])}}">Editar</a>

                            <a class="btn btn-danger" href="javascript:void(0)"
                               onclick="">Eliminar</a>
                        </td>

                        <form id=""
                              action="" method="POST"
                              style="display: none;">

                        </form>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @push('scripts')
        <script>
            function eliminar(id) {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "Ya no podras restaurar esta informacion!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminalo!',
                    cancelButtonText: 'No, Pls!'

                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-' + id).submit();
                    }
                })
            }


        </script>
    @endpush

</x-app-layout>
