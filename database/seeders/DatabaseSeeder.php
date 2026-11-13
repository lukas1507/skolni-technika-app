<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Vytvoření testovacích uživatelů
        User::create([
            'name' => 'Miloš Peřina (Správce)',
            'email' => 'admin@skola.cz',
            'password' => Hash::make('heslo123'),
            'role' => 'spravce',
        ]);

        User::create([
            'name' => 'Jan Novák (Student)',
            'email' => 'student@skola.cz',
            'password' => Hash::make('heslo123'),
            'role' => 'student',
        ]);

        // 2. Vytvoření testovací techniky
        DB::table('equipments')->insert([
            [
                'nazev' => 'MacBook Pro 14"',
                'popis' => 'Výkonný notebook pro střih videa a vývoj.',
                'kategorie' => 'Notebooky',
                'inventarni_cislo' => 'NTB-2026-01',
                'stav' => 'dostupne',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nazev' => 'Epson EB-FH06 Projektor',
                'popis' => 'Full HD projektor s vysokým jasem pro prezentace.',
                'kategorie' => 'Projektory',
                'inventarni_cislo' => 'PRJ-2026-05',
                'stav' => 'dostupne',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nazev' => 'Sony Alpha A7 III',
                'popis' => 'Bezzrcadlový fotoaparát s objektivem 28-70mm.',
                'kategorie' => 'Kamery',
                'inventarni_cislo' => 'CAM-2026-02',
                'stav' => 'vypujcene',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}