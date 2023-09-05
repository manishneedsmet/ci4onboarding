<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                    'type'           => 'INT',
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'name'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '100',
            ],
            'price'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
             ],
             'description'       => [
                'type'           => 'text',
                
               ],
               'image'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at'       => [
                'type'           => 'DATETIME',
                // 'default'        => 'current_timestamp()',
            ],
            'updated_at'       => [
                'type'           => 'DATETIME',
                // 'default'        => 'current_timestamp()',
            ]
            ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
