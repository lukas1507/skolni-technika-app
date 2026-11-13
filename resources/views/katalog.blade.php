@extends('layouts.app')

@section('content')
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Katalog školní techniky</h1>
            <p class="text-sm text-gray-600">Vyberte zařízení pro zobrazení detailu nebo vytvoření rezervace.</p>
        </div>

        <div class="flex flex-wrap gap-2 w-full md:w-auto">
            <input type="text" id="searchInput" placeholder="Hledat název nebo inv. č..." class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select id="categoryFilter" class="border border-gray-300 rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="all">Všechny kategorie</option>
                <option value="notebooky">Notebooky</option>
                <option value="projektory">Projektory</option>
                <option value="kamery">Kamery a foto</option>
            </select>
        </div>
    </div>

    <div id="equipmentGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <div class="equipment-card bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col justify-between" data-category="notebooky" data-search="macbook pro 14 ntb-2026-01">
            <div>
                <div class="flex justify-between items-start mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-blue-600 bg-blue-50 px-2.5 py-0.5 rounded">Notebooky</span>
                    <span class="text-xs font-medium bg-green-100 text-green-800 px-2.5 py-0.5 rounded-full">Dostupné</span>
                </div>
                <h2 class="text-lg font-bold text-gray-900">MacBook Pro 14"</h2>
                <p class="text-xs text-gray-500 mb-3">Inv. č.: <strong>NTB-2026-01</strong> • Umístění: Kabinet IT</p>
                <p class="text-sm text-gray-600 mb-4">Výkonný notebook pro střih videa, grafiku a vývoj aplikací.</p>
            </div>
            <div class="flex gap-2 pt-3 border-t border-gray-100">
                <a href="{{ route('detail', ['id' => 1]) }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium py-2 rounded-lg transition">Detail a historie</a>
                <a href="{{ route('rezervace', ['id' => 1]) }}" class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 rounded-lg transition">Rezervovat</a>
            </div>
        </div>

        <div class="equipment-card bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col justify-between" data-category="projektory" data-search="epson eb-fh06 projektor prj-2026-05">
            <div>
                <div class="flex justify-between items-start mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-purple-600 bg-purple-50 px-2.5 py-0.5 rounded">Projektory</span>
                    <span class="text-xs font-medium bg-green-100 text-green-800 px-2.5 py-0.5 rounded-full">Dostupné</span>
                </div>
                <h2 class="text-lg font-bold text-gray-900">Epson EB-FH06 Projektor</h2>
                <p class="text-xs text-gray-500 mb-3">Inv. č.: <strong>PRJ-2026-05</strong> • Umístění: Sklad A1</p>
                <p class="text-sm text-gray-600 mb-4">Full HD projektor s vysokým jasem pro prezentace v učebnách.</p>
            </div>
            <div class="flex gap-2 pt-3 border-t border-gray-100">
                <a href="{{ route('detail', ['id' => 2]) }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium py-2 rounded-lg transition">Detail a historie</a>
                <a href="{{ route('rezervace', ['id' => 2]) }}" class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 rounded-lg transition">Rezervovat</a>
            </div>
        </div>

        <div class="equipment-card bg-white rounded-xl shadow-sm border border-gray-200 p-5 flex flex-col justify-between opacity-90" data-category="kamery" data-search="sony alpha a7 iii cam-2026-02">
            <div>
                <div class="flex justify-between items-start mb-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-0.5 rounded">Kamery</span>
                    <span class="text-xs font-medium bg-yellow-100 text-yellow-800 px-2.5 py-0.5 rounded-full">Vypůjčeno</span>
                </div>
                <h2 class="text-lg font-bold text-gray-900">Sony Alpha A7 III</h2>
                <p class="text-xs text-gray-500 mb-3">Inv. č.: <strong>CAM-2026-02</strong> • Umístění: Fotoateliér</p>
                <p class="text-sm text-gray-600 mb-4">Bezzrcadlový fotoaparát se základním objektivem 28–70 mm.</p>
            </div>
            <div class="flex gap-2 pt-3 border-t border-gray-100">
                <a href="{{ route('detail', ['id' => 3]) }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium py-2 rounded-lg transition">Detail a historie</a>
                <a href="{{ route('rezervace', ['id' => 3]) }}" class="flex-1 text-center bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 rounded-lg transition">Rezervovat termín</a>
            </div>
        </div>

    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const cards = document.querySelectorAll('.equipment-card');

        function filterEquipment() {
            const searchText = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;

            cards.forEach(card => {
                const matchesSearch = card.dataset.search.includes(searchText);
                const matchesCategory = selectedCategory === 'all' || card.dataset.category === selectedCategory;

                card.style.display = (matchesSearch && matchesCategory) ? 'flex' : 'none';
            });
        }

        searchInput.addEventListener('input', filterEquipment);
        categoryFilter.addEventListener('change', filterEquipment);
    </script>
@endsection