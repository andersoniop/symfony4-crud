<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/create", name="create_task", methods= {"POST"})
     */
    public function create()
    {
        exit('to do:create a new task!');
    }

    /**
     * @Route("/switch-status/{id}", name="switch_status")
     */
    public function SwitchStatus($id)
    {
        exit('to do:switch status of the task!'. $id);
    }

    /**
     * @Route("/delete/{id}", name="task_delete")
     */
    public function delete($id)
    {
        exit('to do: delete a task with the id of !'. $id);
    }
}
