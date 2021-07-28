<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibility;


class ProjectAchievementHandler extends AchievementHandler
{

    protected function handle($request): string
    {
        // Handle logic related to project achievements

        // ex. number of hours spent on the project, number of tasks exceeding a number

        return "Achievements related to projects";
    }
}