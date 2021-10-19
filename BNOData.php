<?php
    // array for matching numbers with stat names
    $stat[0] = "INIT";
    $stat[1] = "PATK";
    $stat[2] = "DATK";
    $stat[3] = "EATK";
    $stat[4] = "PDEF";
    $stat[5] = "DDEF";
    $stat[6] = "EDEF";

    /* fighters array
    First Index is for each fighter
    Second index:
        0: fighter name
        1: style 1
        2: style 2
        3: trait 1
        4: trait 2
    */
    $FIGHTERS[0][0] = "Annora";
    $FIGHTERS[0][1] = 8;
    $FIGHTERS[0][2] = 6;
    $FIGHTERS[0][3] = "Efficent"; // typo to match game text
    $FIGHTERS[0][4] = "Vicious";

    $FIGHTERS[1][0] = "Cherry";
    $FIGHTERS[1][1] = 0;
    $FIGHTERS[1][2] = 8;
    $FIGHTERS[1][3] = "Haughty";
    $FIGHTERS[1][4] = "Proxy";

    $FIGHTERS[2][0] = "Clint";
    $FIGHTERS[2][1] = 4;
    $FIGHTERS[2][2] = 9;
    $FIGHTERS[2][3] = "BroughtSnacks";
    $FIGHTERS[2][4] = "Unleashed";

    $FIGHTERS[3][0] = "Erik";
    $FIGHTERS[3][1] = 2;
    $FIGHTERS[3][2] = 6;
    $FIGHTERS[3][3] = "Flashy";
    $FIGHTERS[3][4] = "Mellow";

    $FIGHTERS[4][0] = "Fel";
    $FIGHTERS[4][1] = 9;
    $FIGHTERS[4][2] = 2;
    $FIGHTERS[4][3] = "Perceptive";
    $FIGHTERS[4][4] = "Balanced";

    $FIGHTERS[5][0] = "Ferran";
    $FIGHTERS[5][1] = 3;
    $FIGHTERS[5][2] = 5;
    $FIGHTERS[5][3] = "Toppler";
    $FIGHTERS[5][4] = "Gripping"; // old name instead of Legendary to match game text

    $FIGHTERS[6][0] = "Grace";
    $FIGHTERS[6][1] = 7;
    $FIGHTERS[6][2] = 9;
    $FIGHTERS[6][3] = "Biting";
    $FIGHTERS[6][4] = "Stunning";

    $FIGHTERS[7][0] = "Jane";
    $FIGHTERS[7][1] = 0;
    $FIGHTERS[7][2] = 6;
    $FIGHTERS[7][3] = "AcidicArmor";
    $FIGHTERS[7][4] = "Impressionable";

    $FIGHTERS[8][0] = "Keiban";
    $FIGHTERS[8][1] = 1;
    $FIGHTERS[8][2] = 11;
    $FIGHTERS[8][3] = "Tenacious";
    $FIGHTERS[8][4] = "Shielded";

    $FIGHTERS[9][0] = "Lise";
    $FIGHTERS[9][1] = 1;
    $FIGHTERS[9][2] = 2;
    $FIGHTERS[9][3] = "Infuriating";
    $FIGHTERS[9][4] = "Unimpressed";

    $FIGHTERS[10][0] = "Molly";
    $FIGHTERS[10][1] = 5;
    $FIGHTERS[10][2] = 11;
    $FIGHTERS[10][3] = "Forgetful";
    $FIGHTERS[10][4] = "Tinkerer";

    $FIGHTERS[11][0] = "Odette";
    $FIGHTERS[11][1] = 3;
    $FIGHTERS[11][2] = 9;
    $FIGHTERS[11][3] = "Sympathetic";
    $FIGHTERS[11][4] = "Compersionate";

    $FIGHTERS[12][0] = "Pema";
    $FIGHTERS[12][1] = 10;
    $FIGHTERS[12][2] = 0;
    $FIGHTERS[12][3] = "Resolute";
    $FIGHTERS[12][4] = "GoodMuscles";

    $FIGHTERS[13][0] = "Seyla";
    $FIGHTERS[13][1] = 4;
    $FIGHTERS[13][2] = 10;
    $FIGHTERS[13][3] = "Underdog";
    $FIGHTERS[13][4] = "Determined";

    $FIGHTERS[14][0] = "Tazu";
    $FIGHTERS[14][1] = 5;
    $FIGHTERS[14][2] = 0;
    $FIGHTERS[14][3] = "Backlash";
    $FIGHTERS[14][4] = "Maledictor";

    $FIGHTERS[15][0] = "Wendel";
    $FIGHTERS[15][1] = 5;
    $FIGHTERS[15][2] = 8;
    $FIGHTERS[15][3] = "Detached";
    $FIGHTERS[15][4] = "Hotshot";

    $FIGHTERS[16][0] = "Yasmiin";
    $FIGHTERS[16][1] = 11;
    $FIGHTERS[16][2] = 4;
    $FIGHTERS[16][3] = "Ambidextrous";
    $FIGHTERS[16][4] = "Tough";

    $FIGHTERS[17][0] = "Zael";
    $FIGHTERS[17][1] = 2;
    $FIGHTERS[17][2] = 7;
    $FIGHTERS[17][3] = "Vivid";
    $FIGHTERS[17][4] = "Eerie";

    // necklace array
    $NECKLACE[0] = "Alarm Pendant";
    $NECKLACE[1] = "Fury Pendant";
    $NECKLACE[2] = "Heart Pendant";
    $NECKLACE[3] = "Puzzle Pendant";
    $NECKLACE[4] = "Thorn Pendant";
    
    $NECKLACE[5] = "Backpocket Locket";
    $NECKLACE[6] = "Balm Locket";
    $NECKLACE[7] = "Flare Locket";
    $NECKLACE[8] = "Fleeting Pendant";
    $NECKLACE[9] = "Gloam Locket";
    $NECKLACE[10] = "Heavy Locket";
    $NECKLACE[11] = "Memory Locket";
    $NECKLACE[12] = "Refund Locket";
    $NECKLACE[13] = "Topaz Locket";
    
    $NECKLACE[14] = "Candy Pearls";
    $NECKLACE[15] = "Clutch Pearls";


    /* Style array
    First index is for each style
    Second index:
        0: style name
        1: number of total moves in current build of game
        2: number of total attacks in current build of game
    */
    $STYLE[0][0] = "Admin";
    $STYLE[0][1] = 3;
    $STYLE[0][2] = 1;

    $STYLE[1][0] = "Amie";
    $STYLE[1][1] = 5;
    $STYLE[1][2] = 1;

    $STYLE[2][0] = "Candle";
    $STYLE[2][1] = 4;
    $STYLE[2][2] = 3;

    $STYLE[3][0] = "Dissident";
    $STYLE[3][1] = 5;
    $STYLE[3][2] = 1;

    $STYLE[4][0] = "Duelist";
    $STYLE[4][1] = 5;
    $STYLE[4][2] = 5;

    $STYLE[5][0] = "Magnate";
    $STYLE[5][1] = 5;
    $STYLE[5][2] = 2;

    $STYLE[6][0] = "Modder";
    $STYLE[6][1] = 5;
    $STYLE[6][2] = 2;

    $STYLE[7][0] = "Nightingale";
    $STYLE[7][1] = 4;
    $STYLE[7][2] = 2;

    $STYLE[8][0] = "Paragon";
    $STYLE[8][1] = 5;
    $STYLE[8][2] = 4;

    $STYLE[9][0] = "Performer";
    $STYLE[9][1] = 4;
    $STYLE[9][2] = 3;

    $STYLE[10][0] = "Pugilist";
    $STYLE[10][1] = 4;
    $STYLE[10][2] = 2;

    $STYLE[11][0] = "Scavenger";
    $STYLE[11][1] = 4;
    $STYLE[11][2] = 2;

    /*
    moves array
    First index is each move
    Second index:
        0: move name
        1: move type 
    */

    // admin moves
    $MOVES[0][0] = "Firewall";
    $MOVES[0][1] = "dig";
    $MOVES[1][0] = "Make Decoy";
    $MOVES[1][1] = "tri";
    $MOVES[2][0] = "Popups";
    $MOVES[2][1] = "tri";
    $MOVES[3][0] = "NULL";
    $MOVES[3][1] = "NULL";
    $MOVES[4][0] = "NULL";
    $MOVES[4][1] = "NULL";

    // amie moves
    $MOVES[5][0] = "Admire";
    $MOVES[5][1] = "emt";
    $MOVES[6][0] = "Heart to Heart";
    $MOVES[6][1] = "tri";
    $MOVES[7][0] = "Cheer";
    $MOVES[7][1] = "tri";
    $MOVES[8][0] = "Tidy";
    $MOVES[8][1] = "tri";
    $MOVES[9][0] = "Mentor";
    $MOVES[9][1] = "tri";

    // candle moves
    $MOVES[10][0] = "Blaze of Glory";
    $MOVES[10][1] = "dig";
    $MOVES[11][0] = "Disruption Wave";
    $MOVES[11][1] = "dig";
    $MOVES[12][0] = "Fireworks";
    $MOVES[12][1] = "dig";
    $MOVES[13][0] = "Burn Bright";
    $MOVES[13][1] = "tri";
    $MOVES[14][0] = "NULL";
    $MOVES[14][1] = "NULL";

    // dissident moves
    $MOVES[15][0] = "Topple Hammer";
    $MOVES[15][1] = "phy";
    $MOVES[16][0] = "Make a Mess";
    $MOVES[16][1] = "tri";
    $MOVES[17][0] = "Pester Bomb";
    $MOVES[17][1] = "tri";
    $MOVES[18][0] = "Rust Spray";
    $MOVES[18][1] = "tri";
    $MOVES[19][0] = "Tamper";
    $MOVES[19][1] = "tri";

    // duelist moves
    $MOVES[20][0] = "Claymore";
    $MOVES[20][1] = "phy";
    $MOVES[21][0] = "Longsword";
    $MOVES[21][1] = "phy";
    $MOVES[22][0] = "Poisoned Dagger";
    $MOVES[22][1] = "phy";
    $MOVES[23][0] = "Practice Stick";
    $MOVES[23][1] = "phy";
    $MOVES[24][0] = "Quick Foil";
    $MOVES[24][1] = "phy";
    
    // magnate moves
    $MOVES[25][0] = "Bribe";
    $MOVES[25][1] = "emt";
    $MOVES[26][0] = "Write Up";
    $MOVES[26][1] = "emt";
    $MOVES[27][0] = "Coffee";
    $MOVES[27][1] = "tri";
    $MOVES[28][0] = "Firm Handshake";
    $MOVES[28][1] = "tri";
    $MOVES[29][0] = "Lunch Invite";
    $MOVES[29][1] = "tri";

    // modder moves
    $MOVES[30][0] = "Bypass Claws";
    $MOVES[30][1] = "phy";
    $MOVES[31][0] = "Hand Cannon";
    $MOVES[31][1] = "dig";
    $MOVES[32][0] = "Ferroskin";
    $MOVES[32][1] = "tri";
    $MOVES[33][0] = "Rebuild";
    $MOVES[33][1] = "tri";
    $MOVES[34][0] = "Scanner";
    $MOVES[34][1] = "tri";

    // nightingale moves
    $MOVES[35][0] = "Peck";
    $MOVES[35][1] = "emt";
    $MOVES[36][0] = "Shriek";
    $MOVES[36][1] = "emt";
    $MOVES[37][0] = "Deep Breath";
    $MOVES[37][1] = "tri";
    $MOVES[38][0] = "Lullaby";
    $MOVES[38][1] = "tri";
    $MOVES[39][0] = "NULL";
    $MOVES[39][1] = "NULL";

    // paragon moves
    $MOVES[40][0] = "Trip";
    $MOVES[40][1] = "phy";
    $MOVES[41][0] = "Fashion Advice";
    $MOVES[41][1] = "emt";
    $MOVES[42][0] = "Flaunt";
    $MOVES[42][1] = "emt";
    $MOVES[43][0] = "Snub";
    $MOVES[43][1] = "emt";
    $MOVES[44][0] = "Sob Story";
    $MOVES[44][1] = "tri";

    // performer moves
    $MOVES[45][0] = "Escape Whip";
    $MOVES[45][1] = "phy";
    $MOVES[46][0] = "Riding Crop";
    $MOVES[46][1] = "phy";
    $MOVES[47][0] = "Unbutton";
    $MOVES[47][1] = "emt";
    $MOVES[48][0] = "Ribbon Twirl";
    $MOVES[48][1] = "tri";
    $MOVES[49][0] = "NULL";
    $MOVES[49][1] = "NULL";

    // pugilist moves
    $MOVES[50][0] = "Flicker Glove";
    $MOVES[50][1] = "phy";
    $MOVES[51][0] = "Haymaker";
    $MOVES[51][1] = "phy";
    $MOVES[52][0] = "Crack Knuckles";
    $MOVES[52][1] = "tri";
    $MOVES[53][0] = "Round End";
    $MOVES[53][1] = "tri";
    $MOVES[54][0] = "NULL";
    $MOVES[54][1] = "NULL";

    // scavenger moves
    $MOVES[55][0] = "Blackjack";
    $MOVES[55][1] = "phy";
    $MOVES[56][0] = "Spiked Club";
    $MOVES[56][1] = "phy";
    $MOVES[57][0] = "Bandage";
    $MOVES[57][1] = "tri";
    $MOVES[58][0] = "Charge Panel";
    $MOVES[58][1] = "tri";
    $MOVES[59][0] = "NULL";
    $MOVES[59][1] = "NULL";

?>