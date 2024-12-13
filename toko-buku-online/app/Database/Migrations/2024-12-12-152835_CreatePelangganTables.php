<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelangganTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan' =>[
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' =>[
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'nama' =>[
                'type'           => 'VARCHAR',
                'constraint'     => 250,
            ],
            'no_hp' =>[
                'type'           => 'INT',
                'constraint'     => 16,
            ],
            'alamat' =>[
                'type'           => 'VARCHAR',
                'constraint'     => 250,
            ]
            
            
            ]);
            $this->forge->addKey('id_pelanggan', true);
            $this->forge->addForeignKey('id_user','users','id');
            $this->forge->createTable('customers');

    }

    public function down()
    {
        $this->forge->dropTable('customers');
    }
}
