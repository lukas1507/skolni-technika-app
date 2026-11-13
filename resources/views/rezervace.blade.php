@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Rezervace techniky</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-4">Nová žádost o zápůjčku</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Vyberte techniku</label>
<select class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm bg-white">
    <option value="1" {{ request('id') == 1 ? 'selected' : '' }}>MacBook Pro 14" (NTB-2026-01)</option>
    <option value="2" {{ request('id') == 2 ? 'selected' : '' }}>Epson EB-FH06 Projektor (PRJ-2026-05)</option>
    <option value="3" {{ request('id') == 3 ? 'selected' : '' }}>Sony Alpha A7 III (CAM-2026-02)</option>
</select>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Datum od</label>
                        <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Datum do</label>
                        <input type="date" class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Účel zápůjčky</label>
                    <textarea rows="3" placeholder="Např. Natáčení reportáže pro školní web..." class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm"></textarea>
                </div>

                <div class="bg-blue-50 text-blue-800 text-xs p-3 rounded-lg">
                    Systém před odesláním automaticky ověří, zda není technika v zadaném termínu již obsazena.
                </div>

                <button type="button" onclick="alert('V 1. fázi jde o vizuální návrh – ukládání do DB doplníme v dalším kroku.')" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 rounded-lg text-sm transition">
                    Odeslat rezervaci ke schválení
                </button>
            </form>
        </div>

        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h2 class="text-lg font-bold text-gray-900 mb-4">Moje žádosti a aktivní výpůjčky</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="border-b border-gray-200 text-gray-500">
                            <th class="py-3 px-4">Zařízení</th>
                            <th class="py-3 px-4">Termín</th>
                            <th class="py-3 px-4">Účel</th>
                            <th class="py-3 px-4">Stav žádosti</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <td class="py-3 px-4 font-medium">MacBook Pro 14"</td>
                            <td class="py-3 px-4">15. 11. 2026 – 18. 11. 2026</td>
                            <td class="py-3 px-4">Prezentace maturitní práce</td>
                            <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-800 px-2.5 py-0.5 rounded-full text-xs font-medium">Čeká na schválení</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 font-medium">Epson EB-FH06 Projektor</td>
                            <td class="py-3 px-4">20. 11. 2026 – 21. 11. 2026</td>
                            <td class="py-3 px-4">Den otevřených dveří</td>
                            <td class="py-3 px-4"><span class="bg-green-100 text-green-800 px-2.5 py-0.5 rounded-full text-xs font-medium">Schváleno</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
</body>
</html>