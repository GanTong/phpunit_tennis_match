<?php

use App\Player;
use App\Tennis;

class TennisMatchTest extends PHPUnit_Framework_TestCase 

{

	/** @test */


	function it_scores_a_scoreless_game()
    {

        $this->john = new Player('John Doe', 0);
        $this->jane = new Player('Jane Doe', 0);


        $test1 = new Tennis($this->john, $this->jane);
    	
        $this->assertEquals('Love-All', $test1->score());
        
    }


    /** @test */


    function it_scores_a_1_0_game()
    {

        $this->john = new Player('John Doe', 1);
        $this->jane = new Player('Jane Doe', 0);


        $test2 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Fifteen-Love', $test2->score());    

    }



    /** @test */


    function it_scores_a_2_0_game()
    {

        $this->john = new Player('John Doe', 2);
        $this->jane = new Player('Jane Doe', 0);


        $test3 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Thirty-Love', $test3->score());
        
    }


        /** @test */


    function it_scores_a_3_0_game()
    {

        $this->john = new Player('John Doe', 3);
        $this->jane = new Player('Jane Doe', 0);


        $test4 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Forty-Love', $test4->score());
        
    }

        /** @test */

    
    function it_scores_a_4_0_game()
    {

        $this->john = new Player('John Doe', 4);
        $this->jane = new Player('Jane Doe', 0);


        $test5 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Win for John Doe', $test5->score());
        
    }


            /** @test */

    
    function it_scores_a_0_4_game()
    {

        $this->john = new Player('John Doe', 0);
        $this->jane = new Player('Jane Doe', 4);


        $test6 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Win for Jane Doe', $test6->score());
        
    }

            /** @test */
  
    function it_scores_a_4_3_game()
    {

        $this->john = new Player('John Doe', 4);
        $this->jane = new Player('Jane Doe', 3);


        $test7 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Advantage John Doe', $test7->score());
        
    }

            /** @test */
  
    function it_scores_a_3_4_game()
    {

        $this->john = new Player('John Doe', 3);
        $this->jane = new Player('Jane Doe', 4);


        $test8 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Advantage Jane Doe', $test8->score());
        
    }

                /** @test */
  
    function it_scores_a_4_4_game()
    {

        $this->john = new Player('John Doe', 4);
        $this->jane = new Player('Jane Doe', 4);


        $test9 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Deuce', $test9->score());
        
    }

                /** @test */
  
    function it_scores_a_8_8_game()
    {

        $this->john = new Player('John Doe', 8);
        $this->jane = new Player('Jane Doe', 8);


        $test10 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Deuce', $test10->score());
        
    }


                    /** @test */
  
    function it_scores_a_8_9_game()
    {

        $this->john = new Player('John Doe', 8);
        $this->jane = new Player('Jane Doe', 9);


        $test11 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Advantage Jane Doe', $test11->score());
        
    }

                        /** @test */
  
    function it_scores_a_8_10_game()
    {

        $this->john = new Player('John Doe', 8);
        $this->jane = new Player('Jane Doe', 10);


        $test12 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Win for Jane Doe', $test12->score());
        
    }

                            /** @test */
  
    function it_accepts_negative_points()
    {

        $this->john = new Player('John Doe', 8);
        $this->jane = new Player('Jane Doe', -10);


        $test13 = new Tennis($this->john, $this->jane);
        
        $this->assertEquals('Win for John Doe', $test13->score());
        
    }

}

