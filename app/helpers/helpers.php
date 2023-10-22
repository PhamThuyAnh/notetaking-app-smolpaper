<?php

function errorMessage(string $msg): void
{
	echo "<p style='color: rgb(209, 65, 65);
	background-color:rgb(213, 237, 203);font-size:20px;padding-bottom: 20px;'>'$msg'</p>";
}

function alertPopup(string $msg): void
{
	echo "<script type='text/javascript'>alert('$msg');</script>";
}