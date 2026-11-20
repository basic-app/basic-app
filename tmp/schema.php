<?php

return \CodeIgniter\PHPStan\Database\Schema\Schema::__set_state([
    'hash' => '32665f1a848d375cd505dbc030fb79d3904e3644bb0b981490270999c796621c',
    'tables'
    => [
        'users'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'users',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'username'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'username',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'status'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'status',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'status_message'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'status_message',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'active'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'active',
                    'type' => 'tinyint',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => '0',
                ]),
                'last_active'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'last_active',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'updated_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'updated_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'deleted_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'deleted_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_identities'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_identities',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'type'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'type',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'name'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'name',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'secret'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'secret',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'secret2'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'secret2',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'expires'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'expires',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'extra'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'extra',
                    'type' => 'TEXT',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'force_reset'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'force_reset',
                    'type' => 'tinyint',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => '0',
                ]),
                'last_used_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'last_used_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'updated_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'updated_at',
                    'type' => 'datetime',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_logins'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_logins',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'ip_address'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'ip_address',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'user_agent'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_agent',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'id_type'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id_type',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'identifier'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'identifier',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'date'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'date',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'success'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'success',
                    'type' => 'tinyint',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_token_logins'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_token_logins',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'ip_address'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'ip_address',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'user_agent'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_agent',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'id_type'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id_type',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'identifier'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'identifier',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'date'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'date',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'success'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'success',
                    'type' => 'tinyint',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_remember_tokens'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_remember_tokens',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'selector'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'selector',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'hashedValidator'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'hashedValidator',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'expires'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'expires',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'updated_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'updated_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_groups_users'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_groups_users',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'group'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'group',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'auth_permissions_users'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'auth_permissions_users',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'user_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'user_id',
                    'type' => 'INT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'permission'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'permission',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'settings'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'settings',
            'columns'
            => [
                'id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'class'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'class',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'key'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'key',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'value'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'value',
                    'type' => 'TEXT',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'type'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'type',
                    'type' => 'varchar',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => '\'string\'',
                ]),
                'created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'created_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'updated_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'updated_at',
                    'type' => 'datetime',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'context'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'context',
                    'type' => 'varchar',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
            ],
        ]),
        'blocks'
        => \CodeIgniter\PHPStan\Database\Schema\Table::__set_state([
            'name' => 'blocks',
            'columns'
            => [
                'block_id'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_id',
                    'type' => 'INTEGER',
                    'nullable' => true,
                    'primaryKey' => true,
                    'default' => null,
                ]),
                'block_created_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_created_at',
                    'type' => 'DATETIME',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_updated_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_updated_at',
                    'type' => 'DATETIME',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_deleted_at'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_deleted_at',
                    'type' => 'DATETIME',
                    'nullable' => true,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_uid'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_uid',
                    'type' => 'VARCHAR',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_name'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_name',
                    'type' => 'VARCHAR',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_sort'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_sort',
                    'type' => 'INT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_content_html'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_content_html',
                    'type' => 'TEXT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => null,
                ]),
                'block_active'
                => \CodeIgniter\PHPStan\Database\Schema\Column::__set_state([
                    'name' => 'block_active',
                    'type' => 'TINYINT',
                    'nullable' => false,
                    'primaryKey' => false,
                    'default' => '1',
                ]),
            ],
        ]),
    ],
]);
