<?php
namespace Acme\Tasks;

interface TaskRepository
{
    public function getCompleted();

    public function getInProcess();
}