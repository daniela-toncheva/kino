<?php


namespace controller;


use model\dao\AgeRestrictionDao;

class AgeRestrictionController {

    public function list(){
        $allRestrictions = [];
        $allRestrictions = AgeRestrictionDao::getAll();

        include_once URI."view/restrictionList.php";
    }
}