<?php
namespace model\dao;

use model\Halls;

class HallsDao {
    /**
     * @return array - all halls in all cinema
     */
    public static function getAll(){
        $pdo = DBConnection::getSingletonPDO();
        $stmt = $pdo->prepare("SELECT hall_id, cinema_id, type, seats, hall_rows FROM halls
        LEFT JOIN hall_types ON halls.hall_type_id=hall_types.hall_type_id");
        $stmt->execute();
        $halls = [];
        while ($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
            $hall = new Halls($row->hall_id,$row->cinema_id,$row->type,$row->seats, $row->hall_rows);
            $halls[]=$hall;
        }
        return $halls;
    }

    /**
     * @param $cinema
     * @return array - all halls in chosen cinema
     */
    public static function getByCinema($cinema){

        $pdo = DBConnection::getSingletonPDO();
        $stmt = $pdo->prepare("SELECT hall_id, cinema_id, type, seats, hall_rows FROM halls
        LEFT JOIN hall_types ON halls.hall_type_id=hall_types.hall_type_id
        WHERE halls.cinema_id=?");
        $stmt->execute(array($cinema));
        if($stmt->rowCount() == 0){
            return null;
        }
        else {
            $halls = [];
            while ($row = $stmt->fetch(\PDO::FETCH_OBJ)) {
                $hall = new Halls($row->hall_id,$row->cinema_id,$row->type,$row->seats,$row->hall_rows);
                $halls[]=$hall;
            }
            return $halls;
        }
    }
}

