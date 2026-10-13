<?php

namespace Tests\Feature;

use App\Models\KategoriTarif;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KategoriTarifTableTest extends TestCase
{
    use RefreshDatabase;

    public function test_kategori_tarif_model_inserts_into_the_correct_table(): void
    {
        KategoriTarif::create([
            'nama_kategori' => 'Rumah Tangga',
            'tarif_per_kubik' => 3000,
            'biaya_pemeliharaan' => 10000,
        ]);

        $this->assertDatabaseHas('kategori_tarifs', [
            'nama_kategori' => 'Rumah Tangga',
            'tarif_per_kubik' => 3000,
            'biaya_pemeliharaan' => 10000,
        ]);
    }
}
