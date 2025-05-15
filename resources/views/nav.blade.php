    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">

                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-2xl font-bold text-green-600">Transfert<span class="text-yellow-400">Express</span></h1>
                </div>

                <nav class="hidden md:flex space-x-8">
                    <a href="{{route('accueil')}}" class="text-green-600 hover:text-yellow-400 font-medium transition duration-300 border-b-2 border-transparent hover:border-yellow-400 pb-1">Accueil</a>
                    <a href="#services" class="text-gray-600 hover:text-yellow-400 font-medium transition duration-300 border-b-2 border-transparent hover:border-yellow-400 pb-1">Services</a>
                    <a href="{{route('liste')}}" class="text-gray-600 hover:text-yellow-400 font-medium transition duration-300 border-b-2 border-transparent hover:border-yellow-400 pb-1">Transactions</a>
                    <a href="#contact" class="text-gray-600 hover:text-yellow-400 font-medium transition duration-300 border-b-2 border-transparent hover:border-yellow-400 pb-1">Contact</a>
                    @auth
                     <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" class="bg-red-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-red-700 transition duration-300 font-medium" value="Deconnexion">
                    </form>
                    @else
                        <a href="{{route('loginView')}}" class="bg-green-600 text-white px-6 py-2 rounded-full shadow-md hover:bg-green-700 transition duration-300 font-medium">Connexion</a>
                    @endauth
                </nav>

                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-600 hover:text-green-600 focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-xl">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{route('accueil')}}" class="block px-3 py-2 rounded-md text-base font-medium text-green-600 bg-green-50">Accueil</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-green-600 hover:bg-green-50">Services</a>
                <a href="{{route('liste')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-green-600 hover:bg-green-50">Transactions</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:text-green-600 hover:bg-green-50">Contact</a>
                @auth
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" class="block px-3 py-2 rounded-md text-base font-medium text-center bg-red-600 text-white hover:bg-red-700" value="Deconnexion">
                    </form>
                @else
                    <a href="{{route('loginView')}}" class="block px-3 py-2 rounded-md text-base font-medium text-center bg-green-600 text-white hover:bg-green-700">Connexion</a>
                @endauth
            </div>
        </div>
    </header>

        <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>