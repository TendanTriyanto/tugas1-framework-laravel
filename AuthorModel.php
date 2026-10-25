<?php
class AuthorModel {
    public function getAllAuthors() {
        return [
            ['id' => 1, 'name' => 'Tere Liye', 'photo' => 'tere.jpg', 'bio' => 'Penulis produktif asal Indonesia.'],
            ['id' => 2, 'name' => 'J.K. Rowling', 'photo' => 'rowling.jpg', 'bio' => 'Penulis serial Harry Potter.'],
            ['id' => 3, 'name' => 'Andrea Hirata', 'photo' => 'andrea.jpg', 'bio' => 'Penulis novel Laskar Pelangi.'],
            ['id' => 4, 'name' => 'Dan Brown', 'photo' => 'danbrown.jpg', 'bio' => 'Penulis novel thriller terkenal asal AS.'],
            ['id' => 5, 'name' => 'Dewi Lestari', 'photo' => 'dee.jpg', 'bio' => 'Penulis dan musisi Indonesia (Dee Lestari).']
        ];
    }
}
?>