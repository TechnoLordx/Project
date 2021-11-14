<?php

session_start();

if(!isset($_SESSION['username'])){
    header("Location: lsindex.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css"/>
    <title>Wiki</title>
</head>
<body>
    <nav class="navbar">
            <div class="navbar__container">
                <a href="exit.php" id="nav__logo">TECH CHAT</a>
                <div class="navbar__change" id="mobile">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="wiki.php" class="navbar__links">Wiki</a>
                    </li>
                    <li class="navbar__item">
                        <a href="forum.php" class="navbar__links">Forum</a>
                    </li>
                    <li class="navbar__btn">
                        <a href="exit.php" class="button">Log Out</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script type="text/javascript" src="javascript/do.js"></script>

        <!--WIKI Start -->

    <div class="wiki__page">
         <div class="discript"> 
             <p id="title">Wiki</p>   
                <p class="disc">Wiki
                On this page you will find a detailed description of the Agents and
                their role in the game and the course of the game.
                You can learn about the abilities of each Agent.
                <br><br><br>
                It is important to know that each of them has 4 abilities that,
                You can use whit different key combinations.
                <br><br><br>
                How to play:
                <br><br><br>
                There are two teams against each other. There is an offensive and a defensive team. The game is
                divided into rounds. You have to win 13 rounds or if you are in ranked mode, you need two more
                wins than your opponent has.
                The attacker team has a primary task of planting the bomb. The secondary, if they couldn't
                plant the bomb then they still can win this round by eliminating there opponents.
                Meanwhile, the defense team is tasked with eliminating the attacker or play with the time,
                because if the time is over and the offensive team didn't plant the bomb, then the defender wint that round.
                A round is 3 minutes, so you can’t idle.
            </p>
         </div>
    </div>
    <div class="deatels">
        <table>    
            <thead>
                    <tr>
                        <th>PROFIL</th>
                        <th>NAME</th>
                        <th>BIO</th>
                        <th>ABILITIES</th>
                        <th>ROLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="images/astra.png" alt="astra"></td>
                        <td>ASTRA</td>
                        <td class="bio">
                         Ghanaian Agent Astra harnesses the energies of the
                         cosmos to reshape battlefields to her whim. With 
                         full command of her astral form and a talent for
                         deep strategic foresight, she's always eons ahead 
                         of her enemy's next move.
                        </td>
                        <td class="abilities">

                        </td>
                        <td><img src="images/controller.png" alt=""></td>
                    </tr>
                    <tr>
                        <td><img src="images/breach.png" alt="breach"></td>
                        <td>BREACH</td>
                        <td class="bio">
                         Breach, the bionic Swede, fires powerful, targeted
                         kinetic blasts to aggressively clear a path through
                         enemy ground. The damage and disruption he inflicts
                         ensures no fight is ever fair.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/initiator.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/brimestone.png" alt="brimestone"></td>
                        <td>BRIMESTONE</td>
                        <td class="bio">
                         Joining from the USA, Brimstone's orbital arsenal
                         ensures his squad always has the advantage. 
                         His ability to deliver utility precisely and from 
                         a distance make him an unmatched boots-on-the-ground 
                         commander.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/controller.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/cyper.png" alt="cyper"></td>
                        <td>CYPER</td>
                        <td class="bio">
                         The Moroccan information broker, Cypher is a 
                         one-man surveillance network who keeps tabs on 
                         the enemy's every move. No secret is safe. No maneuver
                         goes unseen. Cypher is always watching.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/sentinel.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/jett.png" alt="jett"></td>
                        <td>JETT</td>
                        <td class="bio">
                         Representing her home country of South Korea,
                         Jett's agile and evasive fighting style lets 
                         her take risks no one else can. She runs circles 
                         around every skirmish, cutting enemies before they
                         even know what hit them.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/duelist.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/kayo.png" alt="kay/o"></td>
                        <td>KAY/O</td>
                        <td class="bio">
                         KAY/O is a machine of war built for a single
                         purpose: neutralizing radiants. His power to 
                         suppress enemy abilities cripples his opponents' capacity 
                         to fight back, securing him and his allies the ultimate edge.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/initiator.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/killjoy.png" alt="killjoy"></td>
                        <td>KILLJOY</td>
                        <td class="bio">
                         The genius of Germany. Killjoy secures the battlefield
                         with ease using her arsenal of inventions. If the damage 
                         from her gear doesn't stop her enemies, her robots' debuff
                         will help make short work of them.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/sentinel.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/omen.png" alt="omen"></td>
                        <td>OMEN</td>
                        <td class="bio">
                         A phantom of a memory, Omen hunts in the shadows.
                         He renders enemies blind, teleports across the field, 
                         then lets paranoia take hold as his foe scrambles to 
                         learn where he might strike next.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/controller.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/phoenix.png" alt="phoenix"></td>
                        <td>PHOENIX</td>
                        <td class="bio">
                         Hailing from the U.K., Phoenix's star power shines
                         through in his fighting style, igniting the battlefield
                         with flash and flare. Whether he's got backup or not,
                         he'll rush into a fight on his own terms.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/duelist.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/raze.png" alt="raze"></td>
                        <td>RAZE</td>
                        <td class="bio">
                         Raze explodes out of Brazil with her big personality
                         and big guns. With her blunt-force-trauma playstyle, 
                         she excels at flushing entrenched enemies and clearing 
                         tight spaces with a generous dose of “boom.”
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/duelist.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/reyna.png" alt="reyna"></td>
                        <td>REYNA</td>
                        <td class="bio">
                         Forged in the heart of Mexico, Reyna dominates
                         single combat, popping off with each kill she 
                         scores. Her capability is only limited by her 
                         raw skill, making her highly dependent on performance.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/duelist.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/sage.png" alt="sage"></td>
                        <td>SAGE</td>
                        <td class="bio" >
                         The stronghold of China, Sage creates safety 
                         for herself and her team wherever she goes. 
                         Able to revive fallen friends and stave off 
                         aggressive pushes, she provides a calm center
                         to a hellish fight.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/sentinel.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/skye.png" alt="skye"></td>
                        <td>SKYE</td>
                        <td class="bio">
                         Hailing from Australia, Skye and her band of
                         beasts trail-blaze the way through hostile territory.
                         With her creations hampering the enemy, and her power
                         to heal others, the team is strongest and safest by 
                         Skye’s side.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/initiator.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/sova.png" alt="sova"></td>
                        <td>SOVA</td>
                        <td class="bio">
                         Born from the eternal winter of Russia's tundra, 
                         Sova tracks, finds, and eliminates enemies with 
                         ruthless efficiency and precision. His custom bow 
                         and incredible scouting abilities ensure that even 
                         if you run, you cannot hide.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/initiator.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/viper.png" alt="viper"></td>
                        <td>VIPER</td>
                        <td class="bio">
                         The American chemist, Viper deploys an array of
                         poisonous chemical devices to control the battlefield
                         and cripple the enemy's vision. If the toxins don't 
                         kill her prey, her mind games surely will.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/controller.png" alt=""></td>
                    </tr>
                    <tr>
                    <td><img src="images/yoru.png" alt="yoru"></td>
                        <td>YORU</td>
                        <td class="bio">
                         Japanese native, Yoru, rips holes straight 
                         through reality to infiltrate enemy lines unseen. 
                         Using deception and aggression in equal measure,
                         he gets the drop on each target before they know 
                         where to look.
                        </td>
                        <td class="abilities"></td>
                        <td><img src="images/duelist.png" alt=""></td>
                    </tr>
                </tbody>
        </table>
    </div>
    
</body>
</html>