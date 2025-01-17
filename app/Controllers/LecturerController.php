<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\LecturerModel;

class LecturerController extends ResourceController
{
    protected $modelName = 'App\Models\LecturerModel';
    protected $format    = 'json';

    // Create a new lecturer
    public function create()
    {
        $model = new LecturerModel();

        $data = $this->request->getJSON(true);
        
        if (empty($data['name']) || empty($data['email']) || empty($data['department'])) {
            return $this->failValidationErrors('All fields are required');
        }

        if ($model->insert($data)) {
            return $this->respondCreated(['status' => 201, 'message' => 'Lecturer successfully created']);
        } else {
            return $this->failValidationErrors($model->errors());
        }
    }

    // Get all lecturers
    public function index()
    {
        $model = new LecturerModel();
        $lecturers = $model->findAll();

        return $this->respond($lecturers);
    }

    // Get a single lecturer by ID
    public function show($id = null)
    {
        $model = new LecturerModel();
        $lecturer = $model->find($id);

        if ($lecturer) {
            return $this->respond($lecturer);
        } else {
            return $this->failNotFound('Lecturer not found');
        }
    }

    // Update lecturer data
    public function update($id = null)
    {
        $model = new LecturerModel();

        // Get POST data
        $data = $this->request->getJSON(true);

        if ($model->update($id, $data)) {
            return $this->respondUpdated(['status' => 200, 'message' => 'Lecturer successfully updated']);
        } else {
            return $this->failValidationErrors($model->errors());
        }
    }

    // Delete a lecturer
    public function delete($id = null)
    {
        $model = new LecturerModel();

        if ($model->delete($id)) {
            return $this->respondDeleted(['status' => 200, 'message' => 'Lecturer successfully deleted']);
        } else {
            return $this->failNotFound('Lecturer not found');
        }
    }
}