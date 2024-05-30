<x-app-layout>
    @if (session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('error') }}
        </div>
    @elseif (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="w-[25px]">
        <a href="{{ route('admin.users.index') }}" class="text-3xl text-black py-2 px-4 rounded hover:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
    <div class="flex flex-col justify-center">
        <x-validation-errors class="mb-4" />
        <form method="post" action="{{ route('admin.users.store') }}" class="w-full max-w-2xl mx-auto">
            @csrf
            <div class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300">
                <h1 class="text-2xl font-bold text-black text-center">Crear Usuario</h1>
                <input type="number" name="authuser_id" value="{{ auth()->user()->id }}" hidden>
                
                <div class="flex flex-col space-y-4">
                    <label for="name" class="text-gray-600">Nombre de Usuario:</label>
                    <input type="text" name="name" id="name" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="email" class="text-gray-600">Email:</label>
                    <input type="email" name="email" id="email" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="password" class="text-gray-600">Contraseña:</label>
                    <input type="password" name="password" id="password" required class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                </div>

                <div class="flex flex-col space-y-4">
                    <label for="role" class="text-gray-600">Rol:</label>
                    <select name="role" id="role" class="rounded-xl focus:outline-none focus:ring-2 focus:ring-red-400 focus:border-none">
                        <option value="">Seleccione una opción...</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div id="otherusers" class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300" style="display: none;">
                    {{-- <div class="flex flex-col space-y-4">
                        <label for="name1" class="text-gray-600">Nombre:</label>
                        <input type="text" name="name1" id="name1" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div> --}}
                    <div class="flex flex-col space-y-4">
                        <label for="lastname1" class="text-gray-600">Primer Apellido:</label>
                        <input type="text" name="lastname1" id="lastname1" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="lastname2" class="text-gray-600">Segundo Apellido:</label>
                        <input type="text" name="lastname2" id="lastname2" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="email1" class="text-gray-600">Email:</label>
                        <input type="email" name="email1" id="email1" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                </div>

                <div id="student" class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300" style="display: none;">
 
                    {{-- <div class="flex flex-col space-y-4">
                        <label for="name" class="text-gray-600">Nombre:</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div> --}}
                    <div class="flex flex-col space-y-4">
                        <label for="last_name" class="text-gray-600">Primer Apellido:</label>
                        <input type="text" name="last_name" id="last_name" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="last_name2" class="text-gray-600">Segundo Apellido:</label>
                        <input type="text" name="last_name2" id="last_name2" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>

                    <div class="flex flex-col space-y-4">
                        <label for="date_of_birth" class="text-gray-600">Fecha de Nacimiento:</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <label for="email2" class="text-gray-600">Email:</label>
                        <input type="email" name="email2" id="email2" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-customGreen">
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-red-500 hover:text-white transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>

<script>
    function toggleDivs() {
        var selectedRole = document.getElementById("role").value;

        if (selectedRole === "3") {
            document.getElementById("student").style.display = "block";
            document.getElementById("otherusers").style.display = "none";
        } else if (selectedRole === "0") {
            document.getElementById("student").style.display = "none";
            document.getElementById("otherusers").style.display = "none";
        } else {
            document.getElementById("student").style.display = "none";
            document.getElementById("otherusers").style.display = "block";
        }
    }

    document.getElementById("role").addEventListener("change", toggleDivs);
</script>