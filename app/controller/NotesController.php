<?php

include "../model/NotesModel.php";

class NotesController extends NotesModel
{
    public function createNote($title, $content)
    {
        $this->setNote($title, $content);
    }
}