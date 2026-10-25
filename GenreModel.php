<?php
class GenreModel {
    public function getAllGenres() {
        return [
            ['id' => 1, 'name' => 'Fiksi', 'description' => 'Cerita imajinatif berdasarkan khayalan.'],
            ['id' => 2, 'name' => 'Non-Fiksi', 'description' => 'Buku berdasarkan fakta dan kenyataan.'],
            ['id' => 3, 'name' => 'Sains', 'description' => 'Buku seputar ilmu pengetahuan alam dan teknologi.'],
            ['id' => 4, 'name' => 'Sejarah', 'description' => 'Catatan peristiwa masa lampau.'],
            ['id' => 5, 'name' => 'Fantasi', 'description' => 'Genre spekulatif dengan unsur sihir atau dunia lain.']
        ];
    }
}
?>