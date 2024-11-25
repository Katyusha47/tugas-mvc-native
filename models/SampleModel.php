<?php 


class SampleModel {
    public function sample_query(){
        $data = (object) [
            [
                "id" => 1,
                "name" => "Test",
                "postion" => "Web Developer"
            ],
            [
                "id" => 2,
                "name" => "Test2",
                "postion" => "Project Manager"
            ],
            [
                "id" => 1,
                "name" => "Test3",
                "postion" => "Senior Programmer"
            ]
            ];

        return $data;
    }
}

?>