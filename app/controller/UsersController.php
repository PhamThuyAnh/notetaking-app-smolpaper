<?php

require_once __DIR__ . "/../model/UsersModel.php";

class UsersController extends UsersModel
{
	public function registerAction(): void
	{
		if (isset($_POST['submit'])) {
			if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repeatPassword']) || empty($_POST['email']))
				alertPopup("All fields are required!");

			$inputPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
			$inputUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
			$inputRepeatPassword = filter_input(INPUT_POST, 'repeatPassword', FILTER_SANITIZE_SPECIAL_CHARS);
			$inputEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

			if ($this->checkIfEmailExists($inputEmail))
				alertPopup("This email has already been taken!");
			if ($inputPassword !== $inputRepeatPassword)
				alertPopup("Password and Repeating Password must be the same!");
			if (strlen($inputUsername) < 5)
				alertPopup("Username must includes at least 5 characters.");
			if (strlen($inputPassword) < 8)
				alertPopup("Password must includes at least 8 characters.");

			$this->addUser($inputUsername, $inputPassword, $inputEmail);
			alertPopup("Register successfully!");
			header("location: index.php?act=login");
		}
	}

	public function loginAction(): void
	{
		if (isset($_POST['submit'])) {
			if (empty($_POST['email']) || empty($_POST['password'])) {
				alertPopup("All fields are required!");
			} else {
				$inputEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
				$inputPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
				$hashedPasswordFromDB = $this->getHashedPasswordFromDB($inputEmail);

				if (!$this->checkIfEmailExists($inputEmail)) {
					alertPopup("This email does not exist!");
				} else {
					if (empty($hashedPasswordFromDB)) {
						alertPopup("Error fetching password from database");
					} else {
						if (!password_verify($inputPassword, $hashedPasswordFromDB)) {
							alertPopup("Wrong Password");
						} else {
							$_SESSION["email"] = $inputEmail;
							header("location:index.php?act=logged-in");
						}
					}
				}
			}
		}
	}

	public function resetPasswordAction() {}

	public function logoutAction()
	{
		//		 session_destroy();
		//		 header("location:index.php");
	}
}