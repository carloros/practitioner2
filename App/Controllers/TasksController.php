<?php

class TasksController
{
    // TOTES LES URLS QUE COMENCIN PER /task

    //CRUD -> CREATE RETRIEVE UPDATE DELETE

    // /tasks -> Mostrarà la llista completa de tasques

    // /task/{id} -> Mostrarà una tasca en concret

    // POST (TEMPORAL HTTP) /task/create -> Crearà una tasca

    // /task/delete/{id} -> Eliminarà una tasca

    // /task/edit/{id} -> Editarà una tasca

    public function list()
    {
        // to do list tasks
        // tots els temes comuns
        $tasks = Task::all();
        return view('tasks', $tasks);
    }

    public function show($id)
    {
        // to do list one task
        $task = Task::find($id);
        return view('tasks', $task);
    }

    public function create()
    {
        // to do
    }

    public function update()
    {
        // to do
    }

    public function delete()
    {
        // to do
    }
}
