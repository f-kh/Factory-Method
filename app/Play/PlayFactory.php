<?php

namespace App\Play;

use App\Play\Defender;
use App\Play\GoalKeeper;
use App\Play\Midfielder;
use App\Play\Forward;
use App\Play\Striker;

class PlayFactory
{
    public function setPost($className):PlayerFactoryInterface
    {
        switch ($className)
        {

            case 'goalkeeper':
            {
                return new namespace\GoalKeeper();
                break;
            }

            case 'defender':
            {
                return new namespace \Defender();
                break;
            }

            case 'midfielder':
            {
                return new Midfielder();
                break;
            }

            case 'forward':
            {
                return new Forward();
                break;
            }

            case 'striker':
            {
                return  new Striker();
                break;
            }

            default:
            {
                return new GoalKeeper();
            }
        }
    }
}
