<?php
$role = "Moderator";

switch ($role) {
    case "Admin":
        echo ("You are a Admin \n");
        break;

    case "Moderator":
        echo ("You are a Moderator \n");
        break;

    default:
        echo ("You are a Guest \n");
}
