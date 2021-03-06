<?php
namespace model;

class MovieCategory {

    private $category_id;
    private $MovieType;

    /**
     * MovieCategory constructor.
     * @param $category_id
     * @param $MovieType
     */
    public function __construct($category_id, $MovieType) {
        $this->category_id = $category_id;
        $this->MovieType = $MovieType;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    /**
     * @return int $category_id
     */
    public function getCategoryId(){
        return $this->category_id;
    }

    /**
     * @return string $movieType
     */
    public function getMovieType() {
        return $this->MovieType;
    }
}



