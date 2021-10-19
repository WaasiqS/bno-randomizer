<?php
    echo "<head>";
        echo "<title>Bravery Network Online Team Randomizer</title>";
        echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">";
        echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>";
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\">";
        echo "<link rel=\"stylesheet\" href=\"style.css\"/>";
    echo "</head>";
    function printFighter($fighter, $focus, $moves, $stat)
    {
        echo "<body class=\"team\">";
        echo $fighter[0] . " @ ";
        echo $fighter[1] . "<br/>";
        echo "Trait: " . $fighter[2] . "<br/>";

        for ($i = 0; $i < 7; $i++)
        {
            if ($focus[$i] > 0)
            {
                echo "+" . $focus[$i] . " " . $stat[$i] . " / ";
            }
        }
        
        echo "<br/>";

        for ($j = 0; $j < 3; $j++)
        {
            echo "- " . $moves[$j] . "<br/>";
        }

        echo "</body>";
    }

    // takes in move typing and sets corresponding bool to true for smartFocus
    function moveTypesRecoder(&$phy, &$dig, &$emt, $move)
    {
        switch ($move) 
        {
            case "phy":
               $phy = TRUE;
            //    echo "phys is true <br/>";
               break;
            case "dig":
                $dig = TRUE;
                // echo "dig is true <br/>";
                break;
            case "emt":
                $emt = TRUE;
                // echo "emt is true <br/>";
                break;
        }
    }
    include("BNOData.php");
    
    for ($i = 0; $i < 5; $i++) // loop 5 times for 5 fighters
    {
        $currentFocus = array_fill(0, 7, 0);

        // reset move focus flags
        $phy = FALSE;
        $dig = FALSE;
        $emt = FALSE;
    
        //************************************************************************************
        // PICK FIGHTER using array_rand
        // this fighter is later removed from the array to avoid repeats
        $fighterNum = array_rand($FIGHTERS, 1);
        
        $currentFighter[0] = $FIGHTERS[$fighterNum][0]; // set fighter name
        $pickedFighters[$i] = $fighterNum; // mark fighter down as selected

        //************************************************************************************
        // PICK NECLACE using array_rand
        $necklaceNum = array_rand($NECKLACE, 1);
        $currentFighter[1] = $NECKLACE[$necklaceNum];

        //************************************************************************************
        // PICK TRAIT, which are elements 3 and 4 of the $FIGHTERS array
        $traitNum = rand(3, 4);
        $currentFighter[2] = $FIGHTERS[$fighterNum][$traitNum];

        //************************************************************************************
        // PICK MOVES
        // set styles for current fighter
        $styleA = $FIGHTERS[$fighterNum][1];
        $styleB = $FIGHTERS[$fighterNum][2];

        $availMoves = array(); // initialize/clear out $availMoves array
        $moveIterator = 0;     // used to keep track of place in $availMoves, reset each fighter

        // add the attacking moves from the style A
        for ($j = 0; $j < $STYLE[$styleA][2]; $j++)
        {
            // fill out $availMoves with style A attack numbers
            // to access a style's moves, multiply style number by 5 and add iterator offset
            array_push($availMoves, $styleA * 5 + $j);
            $moveIterator++;
        }
        // add the attacking moves from the style B
        for ($j = 0; $j < $STYLE[$styleB][2]; $j++)
        {
            // fill out $availMoves with style Battack numbers
            // to access a style's moves, multiply style number by 5 and add iterator offset
            array_push($availMoves, $styleB * 5 + $j);
            $moveIterator++;
        }
        // add the tricks from style A
        for ($j = 0; $j < $STYLE[$styleA][1] - $STYLE[$styleA][2]; $j++)
        {
            // fill out $availMoves with style A trick numbers
            // to access tricks, multiply style number by 5, offset by number of attacks and iterator offset
            array_push($availMoves, $styleA * 5 + $STYLE[$styleA][2] + $j);
            $moveIterator++;
        }
        // add the tricks from style B
        for ($j = 0; $j < $STYLE[$styleB][1] - $STYLE[$styleB][2]; $j++)
        {
            // fill out $availMoves with style B trick numbers
            // to access tricks, multiply style number by 5, offset by number of attacks and iterator offset
            array_push($availMoves, $styleB * 5 + $STYLE[$styleB][2] + $j);
            $moveIterator++;
        }

        // if "Guaranteed One Attack" isn't selected
        if (empty($_GET["oneAttack"]))
        {
            // pick 3 random keys from $availMoves to fill $currentMoves with those values
            $pickedMoves = array_rand($availMoves, 3);

            // fill $currentMoves with names of randomly chosen available moves
            // call moveTypeRecorder if smartFocus is on to know what focuses are necessary
            $currentMoves[0] = $MOVES[$availMoves[$pickedMoves[0]]][0];
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$pickedMoves[0]]][1]);
            
            $currentMoves[1] = $MOVES[$availMoves[$pickedMoves[1]]][0];
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$pickedMoves[1]]][1]);
                
            $currentMoves[2] = $MOVES[$availMoves[$pickedMoves[2]]][0];
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$pickedMoves[2]]][1]);
        }
        // if "Guaranteed One Attack" is selected
        else
        {
            // pick a random attack (both style attacks are listed first in $availMoves)
            $guaranteedAttack = rand(0, $STYLE[$styleA][2] + $STYLE[$styleB][2] - 1);

            // add that attack to $currentMoves and call moveTypeRecorder if smartFocus is on
            $currentMoves[0] = $MOVES[$availMoves[$guaranteedAttack]][0]; 
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$guaranteedAttack]][1]);
            
            // unset the chosen attack to avoid repeats when picking remaining moves
            unset($availMoves[$guaranteedAttack]);

            // pick 2 random keys from $availMoves
            $pickedMoves = array_rand($availMoves, 2);

            // fill $currentmoves with remaining moves and fill out $currentMoves
            $currentMoves[1] = $MOVES[$availMoves[$pickedMoves[0]]][0];
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$pickedMoves[0]]][1]);

            $currentMoves[2] = $MOVES[$availMoves[$pickedMoves[1]]][0];
            if (!empty($_GET["smartFocus"]))
                moveTypesRecoder($phy, $dig, $emt, $MOVES[$availMoves[$pickedMoves[1]]][1]);

            shuffle($currentMoves); // randomize order of moves to not reveal info to opponents
        }

        //************************************************************************************
        // PICK FOCUS
        if (empty($_GET["smartFocus"])) // If smartFocus is not picked
        {
            $focusTotal = 30; // set total amount of focus points

            // find random values of focus investment for 7 stats
            for ($j = 0; $j < 7; $j++)
            {
                // if there are more than 5 focus points left to distribute
                // randomly assign an amount of points between 6 and 20
                // slight intended bias to giving stats larger amounts of focus
                if ($focusTotal > 5)
                {
                    $currentFocus[$j] = min(20, rand(5, $focusTotal));
                    $focusTotal -= $currentFocus[$j]; // subtract from $focusTotal
                }
                // if there are 5 or less points left, put them all in one stat
                else
                {
                    $currentFocus[$j] = $focusTotal;
                    $focusTotal = 0;
                }
            }
            shuffle($currentFocus); // shuffle array to randomize ordering of point distribution
        }
        else // if smartFocus is picked (no focus is given for attacking stats not used)
        {
            $focusInvestments  = 4; // defenses and init can always be invested in
            unset($limitedFocus); // unset limited 
            
            // if a fighter has an attack, it becomes valid to have focus investment in that type
            if ($phy)
                $focusInvestments++;
            if ($dig)
                $focusInvestments++;
            if ($emt)
                $focusInvestments++;

            $focusTotal = 30; // set total amount of focus points

            // find random values of focus for amount of stats that can be invested in
            for ($j = 0; $j < $focusInvestments; $j++)
            {
                // if there are more than 5 focus points left to distribute
                // randomly assign an amount of points between 6 and 20
                // slight intended bias to giving stats larger amounts of focus
                if ($focusTotal > 4)
                {
                    $limitedFocus[$j] = min(20, rand(5, $focusTotal));
                    $focusTotal -= $limitedFocus[$j];
                }
                else // if there are 4 or less points left, put them all in one stat
                {
                    $limitedFocus[$j] = $focusTotal;
                    $focusTotal = 0;
                }
            }

            shuffle($limitedFocus); // shuffle array to randomize ordering of point distribution

            // $limitedFocus is guaranteed to have at least 4 elements (whose value can be zero)
            // set those values to initiative and defenses
            $currentFocus[0] = $limitedFocus[0]; // set initiative focus
            $currentFocus[4] = $limitedFocus[1]; // set phys def focus
            $currentFocus[5] = $limitedFocus[2]; // set dig def focus
            $currentFocus[6] = $limitedFocus[3]; // set emt def focus

            // if there are more elements in $limitedFocus (meaning fighter has attacks)
            // set those values for relevant attack stats 
            for ($k = 4; $k < $focusInvestments; $k++)
            {
                // if fighter has physical attacks, assign focus value
                if ($phy)
                {
                    $currentFocus[1] = $limitedFocus[$k];
                    $phy = FALSE; // set flag to false for next loop
                }
                // if fighter has digital attacks, assign focus value
                else if ($dig)
                {
                    $currentFocus[2] = $limitedFocus[$k];
                    $dig = FALSE; // set flag to false for next loop
                }
                // if fighter has emotional attacks, assign focus value
                else if ($emt)
                {
                    $currentFocus[3] = $limitedFocus[$k];
                    $emt = FALSE; // set flag to false for next loop
                }
            }

        }

        printFighter($currentFighter, $currentFocus, $currentMoves, $stat); // print all fighter info
        
        unset($FIGHTERS[$fighterNum]); // remove current fighter from $FIGHTERS to avoid repeats next loop
    }
?>
