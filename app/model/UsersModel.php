<?php

require __DIR__ . '/Database.php';

class UsersModel extends Database
{
	protected function addUser($username, $password, $email): void
	{
		$sql = "INSERT INTO users (user_name, user_password, user_email) VALUES (?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$stmt->execute([$username, $hashedPassword, $email]);
	}

	protected function checkIfEmailExists($email): bool
	{
		$sql = "SELECT * FROM users WHERE user_email=:email";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		$stmt->fetchColumn();
		if ($stmt->rowCount() > 0)
			return TRUE;
		return FALSE;
	}

	protected function getHashedPasswordFromDB($email): string
	{
		$sql = "SELECT user_password FROM users WHERE user_email = :email";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([':email' => $email]);
		return trim($stmt->fetchColumn());
	}
}