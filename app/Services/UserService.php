<?php

namespace App\Services;

use App\Models\User;


class UserService
{
	public function getAllUsers()
	{
		return User::all();
	}

	public function find($id) : User
	{
		return User::findOrFail($id);
	}

	public function create(array $data) : User
	{
		$user = new User();

		return $this->update($user, $data);
	}

	public function update(User $user, array $data) : User
	{
		$user->first_name = $data['first_name'];
		$user->last_name = $data['last_name'];
		$user->phone_number = $data['phone_number'];
		$user->nickname = $data['nickname'];
		$user->email = $data['email'];

		if(isset($data['password'])) {
			$user->password = bcrypt($data['password']);
		}

		$user->save();

		return $user;
	}

	public function delete(User $user) 
	{
		return $user->delete();
	}
}