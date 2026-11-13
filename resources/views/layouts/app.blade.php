<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Školní Technika – Evidence zápůjček</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">

    <nav class="bg-blue-600 p-4 text-white flex flex-wrap justify-between items-center shadow-md">
        <a href="{{ route('katalog') }}" class="text-xl font-bold tracking-tight hover:opacity-90">
            Školní Technika
        </a>

        <div class="space-x-4 flex items-center mt-2 sm:mt-0">
            <a href="{{ route('katalog') }}" class="hover:underline {{ request()->routeIs('katalog') ? 'font-bold underline' : '' }}">
                Katalog
            </a>
            <a href="{{ route('detail') }}" class="hover:underline {{ request()->routeIs('detail') ? 'font-bold underline' : '' }}">
                Karta zařízení
            </a>

            @if(auth()->user()->role !== 'spravce')
                <a href="{{ route('rezervace') }}" class="hover:underline {{ request()->routeIs('rezervace') ? 'font-bold underline' : '' }}">
                    Moje rezervace
                </a>
            @endif

            @if(auth()->user()->role === 'spravce')
                <a href="{{ route('admin') }}" class="bg-blue-800 px-3 py-1.5 rounded-lg text-sm font-semibold hover:bg-blue-900 transition {{ request()->routeIs('admin') ? 'ring-2 ring-white' : '' }}">
                    Přehled pro správce
                </a>
            @endif

            <span class="text-sm bg-blue-700 px-3 py-1 rounded-md hidden md:inline-block">
                {{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})
            </span>

            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-lg text-sm font-semibold transition">
                    Odhlásit se
                </button>
            </form>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

</body>
</html>