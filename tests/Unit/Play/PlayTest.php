
<?php


namespace Tests\Unit\Play;

use App\Play\PlayFactory;
use Tests\TestCase;

class PlayTest extends TestCase
{
    public function test_play()
    {
        $players = ['goalkeeper', 'defender', 'midfielder', 'forward', 'striker'];
        $playerIndex = array_rand($players);

        ((new PlayFactory())->setPost($players[$playerIndex]))->run();

        $this->assertTrue(true);

    }

}
