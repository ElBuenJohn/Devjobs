<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>
            <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-10">
                <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa:
                    <spam class="normal-case font-normal">{{ $vacante->empresa }}</spam>
                </p>

                <p class="font-bold text-sm uppercase text-gray-800 my-3">Último dia para postularse:
                    <spam class="normal-case font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</spam>
                </p>

                <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoria:
                    <spam class="normal-case font-normal">{{ $vacante->categoria->categoria}}</spam>
                </p>

                <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario:
                    <spam class="normal-case font-normal">{{ $vacante->salario->salario}}</spam>
                </p>
            </div>
        </div>
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img 
            src="{{ asset('storage/vacantes/'. $vacante->imagen) }}" 
            alt="{{ 'Imagen vacante' .$vacante->titulo }}"
            >
        </div>    

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripcion del puesto: </h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>       
    @guest
    <div class="mt-5 bg-gray-50 border-dashed p-5 text-center">
        <p>
            ¿Deseas aplicar a esta vacante? <a class="font-bold text-indigo-600" href="{{ route('register') }}">Opten una cuenta y aplica a esta y otras vacantes</a>
        </p>
    </div>
    @endguest

    @cannot('create',App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot 
           
</div>
