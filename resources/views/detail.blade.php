@extends('layouts.app')

@section('content')
    @php
        $id = request('id', 1);
        $devices = [
            1 => [
                'kategorie' => 'Notebooky',
                'nazev' => 'MacBook Pro 14"',
                'stav' => 'Funkční / Dostupné',
                'stav_barva' => 'bg-green-100 text-green-800',
                'inv' => 'NTB-2026-01 (SN: C02X9182)',
                'umisteni' => 'Kabinet IT – budova B, 2. patro',
                'prislusenstvi' => 'Napájecí adaptér USB-C, ochranné pouzdro',
                'historie' => [
                    ['Jan Novák (Student)', '10. 10. 2026 – 14. 10. 2026', 'Ročníkový projekt – střih videa'],
                    ['Mgr. Petra Svobodová', '01. 09. 2026 – 05. 09. 2026', 'Školení pedagogického sboru'],
                ]
            ],
            2 => [
                'kategorie' => 'Projektory',
                'nazev' => 'Epson EB-FH06 Projektor',
                'stav' => 'Funkční / Dostupné',
                'stav_barva' => 'bg-green-100 text-green-800',
                'inv' => 'PRJ-2026-05 (SN: EP994120)',
                'umisteni' => 'Sklad A1 – přízemí',
                'prislusenstvi' => 'Dálkový ovladač, HDMI kabel (5m), brašna',
                'historie' => [
                    ['Mgr. Petr Dvořák', '12. 09. 2026 – 13. 09. 2026', 'Přednáška v aule'],
                ]
            ],
            3 => [
                'kategorie' => 'Kamery a foto',
                'nazev' => 'Sony Alpha A7 III',
                'stav' => 'Aktuálně vypůjčeno',
                'stav_barva' => 'bg-yellow-100 text-yellow-800',
                'inv' => 'CAM-2026-02 (SN: SNY77310)',
                'umisteni' => 'Fotoateliér – 3. patro',
                'prislusenstvi' => 'Objektiv 28–70 mm, 2x baterie, nabíječka, SD karta 128 GB',
                'historie' => [
                    ['Tomáš Malý (Student)', '01. 11. 2026 – 10. 11. 2026', 'Natáčení školního plesu (Probíhá)'],
                ]
            ],
        ];
        $device = $devices[$id] ?? $devices[1];
    @endphp

    <div class="mb-4">
        <a href="{{ route('katalog') }}" class="text-sm text-blue-600 hover:underline">&larr; Zpět do katalogu</a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border-b border-gray-100 pb-4 mb-4">
            <div>
                <span class="text-xs font-semibold uppercase text-blue-600 bg-blue-50 px-2.5 py-0.5 rounded">{{ $device['kategorie'] }}</span>
                <h1 class="text-2xl font-bold text-gray-900 mt-1">{{ $device['nazev'] }}</h1>
            </div>
            <div class="flex items-center gap-3">
                <span class="text-sm font-medium {{ $device['stav_barva'] }} px-3 py-1 rounded-full">Stav: {{ $device['stav'] }}</span>
                <a href="{{ route('rezervace', ['id' => $id]) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
                    Vytvořit rezervaci
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
            <div class="bg-gray-50 p-3 rounded-lg">
                <span class="text-gray-500 block">Inventární / Sériové číslo</span>
                <strong class="text-gray-900">{{ $device['inv'] }}</strong>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg">
                <span class="text-gray-500 block">Stálé umístění</span>
                <strong class="text-gray-900">{{ $device['umisteni'] }}</strong>
            </div>
            <div class="bg-gray-50 p-3 rounded-lg">
                <span class="text-gray-500 block">Příslušenství v balení</span>
                <strong class="text-gray-900">{{ $device['prislusenstvi'] }}</strong>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">Historie výpůjček tohoto zařízení</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="border-b border-gray-200 text-gray-500">
                        <th class="py-3 px-4">Vypůjčitel</th>
                        <th class="py-3 px-4">Termín od – do</th>
                        <th class="py-3 px-4">Účel zápůjčky</th>
                        <th class="py-3 px-4">Stav</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($device['historie'] as $zaznam)
                        <tr>
                            <td class="py-3 px-4 font-medium">{{ $zaznam[0] }}</td>
                            <td class="py-3 px-4">{{ $zaznam[1] }}</td>
                            <td class="py-3 px-4">{{ $zaznam[2] }}</td>
                            <td class="py-3 px-4"><span class="text-green-700 bg-green-50 px-2 py-0.5 rounded text-xs">Evidováno</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection