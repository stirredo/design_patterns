<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Tests;

use DesignPatterns\Behavioral\ChainOfResponsibility\CustomGoalsAchievementHandler;
use DesignPatterns\Behavioral\ChainOfResponsibility\ProjectAchievementHandler;
use DesignPatterns\Behavioral\ChainOfResponsibility\SkillAchievementHandler;
use DesignPatterns\Behavioral\ChainOfResponsibility\StreakAchievementHandler;
use PHPUnit\Framework\TestCase;

class AchievementHandlerTest extends TestCase
{
    /**
     * @test
     */
    public function chain_of_responsibility_pattern_makes_request_traverse_through_all_the_handlers()
    {
        $request = [];
        $request['user_id'] = 1;
        $streak_achievement_handler = new StreakAchievementHandler();
        $skill_achievement_handler = new SkillAchievementHandler($streak_achievement_handler);
        $project_achievement_handler = new ProjectAchievementHandler($skill_achievement_handler);
        $custom_goals_achievement_handler = new CustomGoalsAchievementHandler($project_achievement_handler);

        $recorded_statements = $custom_goals_achievement_handler->processHandle($request);

        $expected_statements = ["Achievements related to custom goals", "Achievements related to projects", "Achievements related to skill", "Achievements related to streaks"];


        $this->assertSame(json_encode($recorded_statements),json_encode($expected_statements));


    }

}
