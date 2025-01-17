<?php

namespace App\Models;

use CodeIgniter\Model;

class LecturerModel extends Model
{
    protected $table      = 'lecturers';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'email', 'department'];

    // Tambahkan aturan validasi jika diperlukan
    protected $validationRules = [
        'name'      => 'required|min_length[3]|max_length[100]',
        'email'     => 'required|valid_email',
        'department'=> 'required|min_length[3]|max_length[100]',
    ];
    protected $validationMessages = [
        'name'      => ['required' => 'The name field is required.'],
        'email'     => ['required' => 'The email field is required.'],
        'department'=> ['required' => 'The department field is required.'],
    ];


    protected function beforeInsert(array $data)
    {
        $data = $this->setTimestamps($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->setTimestamps($data);
        return $data;
    }

    private function setTimestamps(array $data)
    {
        $currentTime = date('Y-m-d H:i:s');

        if (!isset($data['created_at'])) {
            $data['created_at'] = $currentTime;
        }

        $data['updated_at'] = $currentTime;

        return $data;
    }
}