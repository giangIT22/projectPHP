<?php

// mục tiêu của File này là để sử lý database thực hiện các công việc như connect
class Database{

    const HOST = 'localhost';

    const USERNAME = 'root';

    const PASSWORD = '';

    const DB_NAME = 'phpclass10';

    public function connect(){
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);

        mysqli_set_charset($connect, "utf8");

		if (mysqli_connect_errno() === 0) {
            return $connect;
        }
        return false;
    }
}