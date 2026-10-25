<?php
require_once 'GenreModel.php';
require_once 'AuthorModel.php';

class BookController {
    public function genres() {
        $genreModel = new GenreModel();
        $genres = $genreModel->getAllGenres();
        require_once 'genre_view.php';
    }

    public function authors() {
        $authorModel = new AuthorModel();
        $authors = $authorModel->getAllAuthors();
        require_once 'author_view.php';
    }
}
?>