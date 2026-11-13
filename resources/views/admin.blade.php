@extends('layouts.app')

@section('content')
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Přehled pro správce IT</h1>
            <p class="text-sm text-gray-600">Správa rezervací, předávání techniky a generování dohod o zápůjčce.</p>
        </div>
        <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
            + Přidat nové zařízení
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200">
            <span class="text-xs text-gray-500 uppercase font-semibold">Čeká na schválení</span>
            <p class="text-2xl font-bold text-yellow-600 mt-1">2</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200">
            <span class="text-xs text-gray-500 uppercase font-semibold">Aktuálně vypůjčeno</span>
            <p class="text-2xl font-bold text-blue-600 mt-1">1</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm border border-red-200 bg-red-50">
            <span class="text-xs text-red-600 uppercase font-semibold">Po termínu vrácení!</span>
            <p class="text-2xl font-bold text-red-700 mt-1">1</p>
        </div>
        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200">
            <span class="text-xs text-gray-500 uppercase font-semibold">Celkem kusů techniky</span>
            <p class="text-2xl font-bold text-gray-900 mt-1">3</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">Správa žádostí a výpůjček</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="border-b border-gray-200 text-gray-500">
                        <th class="py-3 px-4">Žadatel</th>
                        <th class="py-3 px-4">Zařízení (Inv. č.)</th>
                        <th class="py-3 px-4">Termín od – do</th>
                        <th class="py-3 px-4">Stav</th>
                        <th class="py-3 px-4 text-right">Akce správce</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr>
                        <td class="py-3 px-4 font-medium">Jan Novák (Student)</td>
                        <td class="py-3 px-4">MacBook Pro 14" (NTB-2026-01)</td>
                        <td class="py-3 px-4">15. 11. – 18. 11. 2026</td>
                        <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-800 px-2.5 py-0.5 rounded-full text-xs font-medium">Čeká na schválení</span></td>
                        <td class="py-3 px-4 text-right space-x-1">
                            <button class="bg-green-600 hover:bg-green-700 text-white px-2.5 py-1 rounded text-xs font-medium">Schválit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-2.5 py-1 rounded text-xs font-medium">Zamítnout</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="py-3 px-4 font-medium">Mgr. Petr Dvořák</td>
                        <td class="py-3 px-4">Epson Projektor (PRJ-2026-05)</td>
                        <td class="py-3 px-4">13. 11. – 14. 11. 2026</td>
                        <td class="py-3 px-4"><span class="bg-blue-100 text-blue-800 px-2.5 py-0.5 rounded-full text-xs font-medium">Schváleno</span></td>
                        <td class="py-3 px-4 text-right space-x-1">
                            <button class="bg-gray-800 hover:bg-gray-900 text-white px-2.5 py-1 rounded text-xs font-medium">Tisk PDF dohody</button>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-2.5 py-1 rounded text-xs font-medium">Předat (Vypůjčeno)</button>
                        </td>
                    </tr>

                    <tr class="bg-red-50">
                        <td class="py-3 px-4 font-medium text-red-900">Tomáš Malý (Student)</td>
                        <td class="py-3 px-4 text-red-900">Sony Alpha A7 III (CAM-2026-02)</td>
                        <td class="py-3 px-4 font-bold text-red-700">01. 11. – 10. 11. 2026 (Po termínu!)</td>
                        <td class="py-3 px-4"><span class="bg-red-200 text-red-900 px-2.5 py-0.5 rounded-full text-xs font-bold">Zpožděno</span></td>
                        <td class="py-3 px-4 text-right space-x-1">
                            <button class="bg-gray-800 hover:bg-gray-900 text-white px-2.5 py-1 rounded text-xs font-medium">Tisk PDF dohody</button>
                            <button class="bg-green-700 hover:bg-green-800 text-white px-2.5 py-1 rounded text-xs font-medium">Převzít zpět (Vráceno)</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
</body>
</html>