<?php

class RealTest extends TestCase
{
    public function test_main_page()
    {
        $this->visit('/')
            ->see('SeqTrack')
            ->click('Enter samples')
            ->seePageIs('/samples')
            ->see('Enter samples');

    }
}
