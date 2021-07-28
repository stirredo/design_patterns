<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibility;


class CustomGoalsAchievementHandler extends AchievementHandler
{

    protected function handle($request): string
    {
        // Handle logic related to custom goal achievements

        // ex. a user has set goal of certain number of hours towards a skill or project - how long will it take to get there?

        // send notifications about the user is doing towards the goal

        return "Achievements related to custom goals";
    }
}