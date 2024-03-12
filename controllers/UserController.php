<?php
class UserController {

    static public function showAllUsers() {
        $table = "users";
        $response = UserModel::showAllUsers($table);
        return $response;
    }

    static public function showUserById($item, $value) {
        $table = "users";
        $response = UserModel::showUserById($table, $item, $value);
        return $response;
    }

}

?>
