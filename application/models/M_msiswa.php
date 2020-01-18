<?php

class M_msiswa extends CI_models {

public function save_data($firsname,$lastname,$gender,$birth,$category,$membership);
{
    echo "ok";
    $data=array (
        'firsname'=>$firsname,
        'lastname'=>$lastname,
        'gender'=>$gender,
        'birth'=>$birth,
        'category'=>$category,
        'membership'=>$membership
          );
        $this->db->insert('person',$data);

        }
}