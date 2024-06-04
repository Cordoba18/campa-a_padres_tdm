@extends('layout.plantilla')

@section('title', 'CAMPAÑA DE PADRES | REGISTRO')

@section('css')

@endsection



@section('content')
    <div class="row justify-content-center" style="width: 100%">
        <div class="col-auto">
            <div class="container m-4">

                <div class="card">
                    <div class="card-header text-center">
                        REGISTRO DE PADRES
                    </div>

                    <div class="card-body">
                        <form action="{{ route('user.save') }}" method="post">
                            @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombres</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required placeholder="Ingrese sus nombres">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
                            <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" required placeholder="Ingrese sus apellidos">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                            <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" required placeholder="Ingrese su Telefono">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Numero de identificación</label>
                            <input type="number" name="nit" class="form-control" id="exampleFormControlInput1" required placeholder="Ingrese su numero de identificación">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Barrio</label>
                            <input type="text" name="neighborhood" class="form-control" id="exampleFormControlInput1" required placeholder="Ingrese su barrio">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tienda</label>
                            <select name="id_shop" class="form-select" aria-label="Default select example">
                                <option value="">Seleccione una tienda</option>
                                @foreach ($shops as $s)
                                <option value="{{ $s->id }}">{{ $s->shop }}</option>
                                @endforeach
                              </select>
                          </div>

                          <div class="mb-3">
                            <button type="submit" class="btn btn-success">GUARDAR</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

@if (session('message'))
<script>
    Swal.fire({
  title: "Datos guardados",
  text: "{{ session('message') }}",
  icon: "success"
});
</script>
@endif
@endsection
