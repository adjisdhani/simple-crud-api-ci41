<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLecturersTable extends Migration
{
    public function up()
    {
        // Membuat tabel lecturers
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'department'  => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addPrimaryKey('id');

        // Membuat tabel
        $this->forge->createTable('lecturers');
    }

    public function down()
    {
        // Menghapus tabel lecturers jika rollback dilakukan
        $this->forge->dropTable('lecturers');
    }
}