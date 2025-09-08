<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Hash; // só se fores usar password em texto simples

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            // 🔑 chave para idempotência
            ['email' => 'sergio.cruz@outlook.pt'],
            // 🔁 dados a inserir/atualizar
            [
                'name' => 'SC',
                // Password já encriptada (bcrypt) conforme o dump:
                'password' => '$2y$10$2XWhzZV6oqWV6KZ82Huwnut/lKxu.tIoMVj09ZyAY1qz5RvTh/20W',
                'email_verified_at' => null,
                'remember_token' => null,
                // preserva as datas do dump (opcional)
                'created_at' => Carbon::parse('2025-07-25 16:36:21'),
                'updated_at' => Carbon::parse('2025-07-25 16:36:22'),
            ]
        );
    }
}

