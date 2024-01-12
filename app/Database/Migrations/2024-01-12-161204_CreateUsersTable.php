<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true, // Add the unique constraint
            ],
            'user_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            // Add more fields as needed
        ]);

        $this->forge->addPrimaryKey('user_id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
