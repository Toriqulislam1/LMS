<?php
namespace App\Modules\Auth\Repositories;

use App\Models\User;

class UserRepository {
    public function create(array $data): User {
        return User::create($data);
    }
}
