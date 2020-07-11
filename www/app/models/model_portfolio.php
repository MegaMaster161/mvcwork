<?php

class Model_Portfolio extends Model {

    public function get_data()
    {
        $projects = array(
            array(
                "year" => "2015",
                "name" => "Проект 1",
                "description" => "Описание первого проекта"
            ),
            array(
                "year" => "2015",
                "name" => "Проект 2",
                "description" => "Описание второго проекта"
            ),
            array(
                "year" => "2015",
                "name" => "Проект 3",
                "description" => "Описание третьего проекта"
            ),
            array(
                "year" => "2015",
                "name" => "Проект 4",
                "description" => "Описание четвертого проекта"
            )
        );

        return $projects;
    }

}