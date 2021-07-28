<?php


namespace DesignPatterns\Behavioral\ChainOfResponsibility;


class StreakAchievementHandler extends AchievementHandler
{

    protected function handle($request): string
    {
        // Handle logic related to streak achievements

        // ex. number of streaks in a row on a particular project or skill

        return "Achievements related to streaks";
    }
}