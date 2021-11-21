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
                because if the time is over and the offensive team didn't plant the bomb, then the defender win that round.
                A round is 3 minutes, so you can’t idle.
            </p>
        </div>
    </div>
    <div class="table_deatels">
        <table>    
                <tbody>
                        <tr>
                            <th>PROFIL</th>
                            <th>NAME</th>
                            <th>BIO</th>
                            <th>ABILITIES</th>
                            <th>ROLE</th>
                        </tr>             
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
                                <label class="container">
                                   <input type="radio" class="click" name="off"> C - NOVA PULSE 
                                        <div class ="show">Place Stars in Astral Form (X) ACTIVATE a Star to detonate a Nova Pulse. The Nova Pulse charges briefly then strikes, concussing all players in its area.</div>
                                   </input>
                                   <span class="checkmark"></span>
                                </label> 

                                <label class="container">
                                   <input type="radio" class="click" name="off"> Q - NEBULA 
                                        <div class ="show">Place Stars in Astral Form (X) ACTIVATE a Star to transform it into a Nebula (smoke). Use (F) on a Star to Dissipate it, returning the star to be placed in a new location after a delay. Dissipate briefly forms a fake Nebula at the Star’s location before returning.</div>
                                   </input>
                                   <span class="checkmark"></span>
                                </label> 
                         
                                <label class="container">
                                   <input type="radio" class="click" name="off"> E - GRAVITY WELL
                                        <div class ="show">Place Stars in Astral Form (X) ACTIVATE a Star to form a Gravity Well. Players in the area are pulled toward the center before it explodes, making all players still trapped inside fragile.</div>
                                   </input>
                                   <span class="checkmark"></span>
                                </label> 
                                
                                <label class="container">
                                   <input type="radio" class="click" name="off"> X - ASTRAL FORM / COSMIC DIVIDE
                                        <div class ="show">ACTIVATE (X) to enter Astral Form where you can place Stars with PRIMARY FIRE. Stars can be reactivated later, transforming them into a Nova Pulse, Nebula, or Gravity Well. When Cosmic Divide is charged, use SECONDARY FIRE in Astral Form to begin aiming it, then PRIMARY FIRE to select two locations. An infinite Cosmic Divide connects the two points you select. Cosmic Divide blocks bullets and heavily dampens audio.</div>
                                   </input>
                                   <span class="checkmark"></span>
                                </label>
                            </td>
                            <td>CONTROLLER</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - FLASHPOINT
                                        <div class ="show">EQUIP a blinding charge. FIRE the charge to set fast-acting burst through the wall. The charge detonates to blind all players looking at it.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - FAULT LINE 
                                        <div class ="show">EQUIP a seismic blast. HOLD FIRE to increase the distance. RELEASE to set off the quake, dazing all players in its zone and in a line up to the zone.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - AFTERSHOCK
                                        <div class ="show">EQUIP a fusion charge. FIRE the charge to set a slow-acting burst through the wall. The burst does heavy damage to anyone caught in its area.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - ROLLING THUNDER
                                        <div class ="show">EQUIP a seismic charge. FIRE to send a cascading quake through all terrain in a large cone. The quake dazes and knocks up anyone caught in it.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>INITIATOR</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - INCENDIARY
                                        <div class ="show">EQUIP an incendiary grenade launcher. FIRE to launch a grenade that detonates as it comes to a rest on the floor, creating a lingering fire zone that damages players within the zone.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - SKY SMOKE 
                                        <div class ="show">EQUIP a tactical map. FIRE to set locations where Brimstone’s smoke clouds will land. ALTERNATE FIRE to confirm, launching long-lasting smoke clouds that block vision in the selected area.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - STIM BEACON
                                        <div class ="show">EQUIP a stim beacon. FIRE to toss the stim beacon in front of Brimstone. Upon landing, the stim beacon will create a field that grants players RapidFire.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - ORBITAL STRIKE
                                        <div class ="show">EQUIP a tactical map. FIRE to launch a lingering orbital strike laser at the selected location, dealing high damage-over-time to players caught in the selected area.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>CONTROLLER</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - CYBER CAGE
                                        <div class ="show">INSTANTLY toss the cyber cage in front of Cypher. Activate to create a zone that blocks vision and slows enemies who pass through it.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - SPYCAM
                                        <div class ="show">EQUIP a spycam. FIRE to place the spycam at the targeted location. RE-USE this ability to take control of the camera’s view. While in control of the camera, FIRE to shoot a marking dart. This dart will reveal the location of any player struck by the dart.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - TRAPWIRE
                                        <div class ="show">EQUIP a trapwire. FIRE to place a destructible and covert tripwire at the targeted location creating a line that spans between the placed location and the wall opposite. Enemy players who cross a tripwire will be tethered, revealed, and dazed after a short period if they do not destroy the device in time. This ability can be picked up to be REDEPLOYED.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - NEURAL THEFT
                                        <div class ="show">INSTANTLY use on a dead enemy player in your crosshairs to reveal the location of all living enemy players.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>SENTINEL</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - UPDRAFT
                                        <div class ="show">INSTANTLY propel Jett high into the air.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - TAILWIND 
                                        <div class ="show">INSTANTLY propel Jett in the direction she is moving. If Jett is standing still, she will propel forward.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - CLOUDBURST
                                        <div class ="show">INSTANTLY throw a projectile that expands into a brief vision-blocking cloud on impact with a surface. HOLD the ability key to curve the smoke in the direction of your crosshair</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - BLADE STORM
                                        <div class ="show">EQUIP a set of highly accurate knives that recharge on killing an opponent. FIRE to throw a single knife at your target. ALTERNATE FIRE to throw all remaining daggers at your target.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>DUELIST</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - FLASH/DRIVE 
                                        <div class ="show">EQUIP a flash grenade. FIRE to throw. The flash grenade explodes after a short fuse, blinding anyone in line of sight.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - ZERO/POINT
                                        <div class ="show">EQUIP a suppression blade. FIRE to throw. The blade sticks to the first surface it hits, winds up, and suppresses anyone in the radius of the explosion.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - FRAG/MENT
                                        <div class ="show">EQUIP an explosive fragment. FIRE to throw. The fragment sticks to the floor and explodes multiple times, dealing near lethal damage at the center with each explosion.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - NULL/CMD
                                        <div class ="show">INSTANTLY overload with polarized radianite energy that empowers KAY/O and causes large energy pulses to emit from his location. Enemies hit with these pulses are suppressed for a short duration.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>INITIATOR</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - ALARMBOT 
                                        <div class ="show">EQUIP a covert Alarmbot. FIRE to deploy a bot that hunts down enemies that get in range. After reaching its target, the bot explodes, applying Vulernable. HOLD EQUIP to recall a deployed bot.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - TURRET 
                                        <div class ="show">EQUIP a Turret. FIRE to deploy a turret that fires at enemies in a 180 degree cone. HOLD EQUIP to recall the deployed turret.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - NANOSWARM
                                        <div class ="show">EQUIP a Nanoswarm grenade. FIRE to throw the grenade. Upon landing, the Nanoswarm goes covert. ACTIVATE the Nanoswarm to deploy a damaging swarm of nanobots.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - LOCKDOWN
                                        <div class ="show">EQUIP the Lockdown device. FIRE to deploy the device. After a long windup, the device Detains all enemies caught in the radius. The device can be destroyed by enemies.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>SENTINEL</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - PARANOIA
                                        <div class ="show">INSTANTLY fire a shadow projectile forward, briefly reducing the vision range of all players it touches. This projectile can pass straight through walls.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - DARK COVER
                                        <div class ="show">EQUIP a shadow orb and see its range indicator. FIRE to throw the shadow orb to the marked location, creating a long-lasting shadow sphere that blocks vision. HOLD ALTERNATE FIRE while targeting to move the marker further away. HOLD the ability key with targeting to move the marker closer.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - SHROUDED STEP
                                        <div class ="show">EQUIP a shadow walk ability and see its range indicator. FIRE to begin a brief channel, then teleport to the marked location.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - FROM THE SHADOWS
                                        <div class ="show">EQUIP a tactical map. FIRE to begin teleporting to the selected location. While teleporting, Omen will appear as a Shade that can be destroyed by an enemy to cancel his teleport.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>CONTROLLER</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - CURVEBALL 
                                        <div class ="show">EQUIP a flare orb that takes a curving path and detonates shortly after throwing. FIRE to curve the flare orb to the left, detonating and blinding any player who sees the orb. ALTERNATE FIRE to curve the flare orb to the right.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - HOT HANDS
                                        <div class ="show">EQUIP a fireball. FIRE to throw a fireball that explodes after a set amount of time or upon hitting the ground, creating a lingering fire zone that damages enemies.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - BLAZE
                                        <div class ="show">EQUIP a flame wall. FIRE to create a line of flame that moves forward, creating a wall of fire that blocks vision and damages players passing through it. HOLD FIRE to bend the wall in the direction of your crosshair.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - RUN IT BACK
                                        <div class ="show">INSTANTLY place a marker at Phoenix’s location. While this ability is active, dying or allowing the timer to expire will end this ability and bring Phoenix back to this location with full health.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>DUELIST</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - BLAST PACK
                                        <div class ="show">INSTANTLY throw a Blast Pack that will stick to surfaces. RE-USE the ability after deployment to detonate, damaging and moving anything hit. Raze isn't damaged by this ability, but will still take fall damage if launched up far enough.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - PAINT SHELLS 
                                        <div class ="show">EQUIP a cluster grenade. FIRE to throw the grenade, which does damage and creates sub-munitions, each doing damage to anyone in their range.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - BOOM BOT
                                        <div class ="show">EQUIP a Boom Bot. FIRE will deploy the bot, causing it to travel in a straight line on the ground, bouncing off walls. The Boom Bot will lock on to any enemies in its frontal cone and chase them, exploding for heavy damage if it reaches them.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - SHOWSTOPPER
                                        <div class ="show">EQUIP a rocket launcher. FIRE shoots a rocket that does massive area damage on contact with anything.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>DUELIST</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - DEVOUR 
                                        <div class ="show">Enemies killed by Reyna leave behind Soul Orbs that last 3 seconds. INSTANTLY consume a nearby soul orb, rapidly healing for a short duration. Health gained through this skill exceeding 100 will decay over time. If EMPRESS is active, this skill will automatically cast and not consume the orb.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - DISMISS
                                        <div class ="show">INSTANTLY consume a nearby soul orb, becoming intangible for a short duration. If EMPRESS is active, also become invisible.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - LEER
                                        <div class ="show">EQUIP an ethereal destructible eye. ACTIVATE to cast the eye a short distance forward. The eye will Nearsight all enemies who look at it.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - EMPRESS
                                        <div class ="show">INSTANTLY enter a frenzy, increasing firing speed, equip and reload speed dramatically. Scoring a kill renews the duration.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>DUELIST</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - SLOW ORB 
                                        <div class ="show">EQUIP a slowing orb. FIRE to throw a slowing orb forward that detonates upon landing, creating a lingering field that slows players caught inside of it.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - HEALING ORB 
                                        <div class ="show">EQUIP a healing orb. FIRE with your crosshairs over a damaged ally to activate a heal-over-time on them. ALT FIRE while Sage is damaged to activate a self heal-over-time.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - BARRIER ORB
                                        <div class ="show">EQUIP a barrier orb. FIRE places a solid wall. ALT FIRE rotates the targeter.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>                                    
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - RESURRECTION
                                        <div class ="show">EQUIP a resurrection ability. FIRE with your crosshairs placed over a dead ally to begin resurrecting them. After a brief channel, the ally will be brought back to life with full health.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>SENTINEL</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - TRAILBLAZER 
                                        <div class ="show">EQUIP a Tasmanian tiger trinket. FIRE to send out and take control of the predator. While in control, FIRE to leap forward, exploding in a concussive blast and damaging directly hit enemies.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - GUIDING LIGHT
                                        <div class ="show">EQUIP a hawk trinket. FIRE to send it forward. HOLD FIRE to guide the hawk in the direction of your crosshair. RE-USE while the hawk is in flight to transform it into a flash that plays a hit confirm if an enemy was within range and line of sight.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - GUIDING LIGHT
                                        <div class ="show">EQUIP a healing trinket. HOLD FIRE to channel, healing allies in range and line of sight. Can be reused until her healing pool is depleted. Skye cannot heal herself.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - SEEKERS
                                        <div class ="show">EQUIP a Seeker trinket. FIRE to send out three Seekers to track down the three closest enemies. If a Seeker reaches its target, it nearsights them.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>INITIATOR</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - SHOCK BOLT 
                                        <div class ="show">EQUIP a bow with a shock bolt. FIRE to send the explosive forward, detonating upon collision and damaging players nearby. HOLD FIRE to extend the range of the projectile. ALTERNATE FIRE to add up to two bounces to this arrow.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - RECON BOLT
                                        <div class ="show">EQUIP a bow with a recon bolt. FIRE to send the recon bolt forward, activating upon collision and revealing the location of nearby enemies caught in the line of sight of the bolt. HOLD FIRE to extend the range of the projectile. ALTERNATE FIRE to add up to two bounces to this arrow.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label> 
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - OWL DRONE
                                        <div class ="show">EQUIP an owl drone. FIRE to deploy and take control of movement of the drone. While in control of the drone, FIRE to shoot a marking dart. This dart will reveal the location of any player struck by the dart.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - HUNTER’S FURY
                                        <div class ="show">EQUIP a bow with three long-range wall-piercing energy blasts. FIRE to release an energy blast in a line in front of Sova, dealing damage and revealing the location of enemies caught in the line. This ability can be RE-USED up to two more times while the ability timer is active.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>INITIATOR</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - POISON CLOUD
                                        <div class ="show">EQUIP a gas emitter. FIRE to throw the emitter that perpetually remains throughout the round. RE-USE the ability to create a toxic gas cloud at the cost of fuel. This ability can be RE-USED more than once and can be picked up to be REDEPLOYED.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - TOXIC SCREEN 
                                        <div class ="show">EQUIP a gas emitter launcher. FIRE to deploy a long line of gas emitters. RE-USE the ability to create a tall wall of toxic gas at the cost of fuel. This ability can be RE-USED more than once.</div>
                                    </input> 
                                    <span class="checkmark"></span> 
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - SNAKE BITE
                                        <div class ="show">EQUIP a chemical launcher. FIRE to launch a canister that shatters upon hitting the floor, creating a lingering chemical zone that damages and slows enemies.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - VIPER’S PIT
                                        <div class ="show">EQUIP a chemical sprayer. FIRE to spray a chemical cloud in all directions around Viper, creating a large cloud that reduces the vision range and maximum health of players inside of it.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>CONTROLLER</td>
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
                            <td class="abilities">
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> Q - BLINDSIDE 
                                        <div class ="show">EQUIP to rip an unstable dimensional fragment from reality. FIRE to throw the fragment, activating a flash that winds up once it collides with a hard surface in the world.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> E - GATECRASH 
                                        <div class ="show">EQUIP to harness a rift tether FIRE to send the tether out moving forward ALT FIRE to place a tether in place ACTIVATE to teleport to the tether's location.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label> 
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> C - FAKEOUT
                                        <div class ="show">EQUIP an echo that mimics footsteps when activated FIRE to activate and send the echo forward ALT FIRE to place an echo in place USE the inactive echo to send it forward.</div>
                                    </input> 
                                    <span class="checkmark"></span>
                            </label> 
                            <label class="container">
                                    <input type="radio" class="click" name ="off"> X - DIMENSIONAL DRIFT
                                        <div class ="show">EQUIP a mask that can see between dimensions. FIRE to drift into Yoru's dimension, unable to be affected or seen by enemies from the outside.</div>
                                    </input>
                                    <span class="checkmark"></span>
                            </label>
                            </td>
                            <td>DUELIST</td>
                        </tr>
                    </tbody>
            </table>
    </div>
</body>
</html>