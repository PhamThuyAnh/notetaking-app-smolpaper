<?php

include "dbh.class.php";

class NotesModel extends Dbh
{
    protected function setNote($title, $content)
    {
        $sql = "INSERT INTO users (note_title, note_content) VALUES (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $content]);
    }
}