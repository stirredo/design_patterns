<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibility;


class SkillAchievementHandler extends AchievementHandler
{

    protected function handle($request): string
    {
        // use the request to figure out achievements related skills of the user

        // ex. User crossed a certain number of hours in a skill - a corresponding badge notification sent to the user

        return "Achievements related to skill";
    }
}