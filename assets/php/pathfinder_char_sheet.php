<?php
$pid = $_SESSION['pid'];


 ?>
<!-- Header / Character Description -->
<div style="float: left">
    <div style="float: left"><img src="http://paizo.com/image/content/Logos/PathfinderRPGLogo_500.jpeg" style="float: left; width: 300px;"></img><br>
    <div style="float: left; width: 30px;">&nbsp;</div><div style="float: left; width: 270px; font-size: 2em;">Character Sheet</div></div>
    <div style="float: left"><input type="text" name="attr_character_name" style="width: 220px;"> <br>Character Name</div>
    <div style="float: left"><input type="text" name="attr_alignment" style="width: 112px;"> <br>Alignment</div>
    <div style="float: left"><input type="text" name="attr_playername" style="width: 190px;"><br>Player Name</div>
    <br>
    <div style="float: left"><input type="text" name="attr_level" style="width: 260px;"> <br>Character Level</div>
    <div style="float: left"><input type="text" name="attr_deity" style="width: 130px;"> <br>Deity</div>
    <div style="float: left"><input type="text" name="attr_homeland" style="width: 120px;"><br>Homeland</div>
    <br>
    <div style="float: left"><input type="text" name="attr_race" style="width: 98px;"> <br>Race</div>
    <div style="float: left"><select style="width: 60px;" name="attr_size">
        <option value="-8">Colossal</option>
        <option value="-4">Gargantuan</option>
        <option value="-2">Huge</option>
        <option value="-1">Large</option>
        <option value="0" selected>Medium</option>
        <option value="1">Small</option>
        <option value="2">Tiny</option>
        <option value="4">Diminutive</option>
        <option value="8">Fine</option>
    </select><br>Size</div>
    <div style="float: left"><input type="text" name="attr_gender" style="width: 50px;"> <br>Gender</div>
    <div style="float: left"><input type="text" name="attr_age" style="width: 30px;"> <br>Age</div>
    <div style="float: left"><input type="text" name="attr_height" style="width: 45px;"> <br>Height</div>
    <div style="float: left"><input type="text" name="attr_weight" style="width: 45px;"> <br>Weight</div>
    <div style="float: left"><input type="text" name="attr_hair" style="width: 70px;"> <br>Hair</div>
    <div style="float: left"><input type="text" name="attr_eyes" style="width: 70px;"> <br>Eyes</div>
</div>

<div style="clear:both"></div>
<br>
<div style="float: left">
<!-- Stat block -->
<table>
<tr>
    <td>
        <table>
            <tr>
                <th>Ability Name</th><th>Ability<br>Score</th><th>Ability<br>Modifier</th><th>Temp<br>Adjust</th><th>Temp<br>Modifier</th>
            </tr>
            <tr>
                <td class="sheet-statlabel">STR<br><div style="font-size: 0.65em;">Strength</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_str" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_strmod" style="height: 24px; width: 40px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}" disabled="true"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_strtempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_strtempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel">DEX<br><div style="font-size: 0.65em;">Dexterity</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_dex" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_dexmod" style="height: 24px; width: 40px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_dextempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_dextempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel">CON<br><div style="font-size: 0.65em;">Constitution</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_con" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_conmod" style="height: 24px; width: 40px;" value="floor(@{con}/2-5)+@{contempadj}+@{contempmod}" disabled="true" ></td>
                <td><input class="sheet-inputbox" type="number" name="attr_contempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_contempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel">INT<br><div style="font-size: 0.65em;">Intelligence</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_int" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_intmod" style="height: 24px; width: 40px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true" ></td>
                <td><input class="sheet-inputbox" type="number" name="attr_inttempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_inttempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel">WIS<br><div style="font-size: 0.65em;">Wisdom</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_wis" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_wismod" style="height: 24px; width: 40px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}" disabled="true" ></td>
                <td><input class="sheet-inputbox" type="number" name="attr_wistempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_wistempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel">CHA<br><div style="font-size: 0.65em;">Charisma</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_cha" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_chamod" style="height: 24px; width: 40px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true" ></td>
                <td><input class="sheet-inputbox" type="number" name="attr_chatempadj" value="0" style="height: 24px; width: 40px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_chatempmod" value="0" style="height: 24px; width: 40px;"></td>
            </tr>
        </table>
    </td>
    <td>
        <table>
            <tr>
                <td class="sheet-statlabel-big" style="width: 70px;">HP<br><div style="font-size: 0.65em;">Hit Points</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_hitpoints" style="height: 24px; width: 70px;"><br><div style="font-size: 0.5em;">Total</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_damageresistance" style="height: 24px; width: 53px;"><br><div style="font-size: 0.5em;">DR</div></td>
            </tr>
            <tr>
                <td colspan="3"><input class="sheet-inputbox" type="number" name="attr_woundscurrenthp" style="height: 50px; width: 210px;"><br><div style="font-size: 0.5em;">Wounds/Current HP</div></td>
            </tr>
            <tr>
                <td colspan="3"><input class="sheet-inputbox" type="number" name="attr_nonlethaldamage" style="height: 24px; width: 210px;"><br><div style="font-size: 0.5em;">Nonlethal Damage</div></td>
            </tr>
        </table>    
        <table>
            <tr>
                <td class="sheet-statlabel-big" style="width: 70px;">INITIATIVE<br><div style="font-size: 0.65em;">Modifier</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_init" style="height: 24px; width: 33px;" value="floor(@{dex}/2-5)+@{initmiscmod}" disabled="true"> =<br><div style="font-size: 0.5em;">Total<br>&nbsp;</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_initdexmod" value="floor(@{dex}/2-5)" disabled="true" style="height: 24px; width: 33px;"> +<br><div style="font-size: 0.5em;">Dex<br>Modifier</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_initmiscmod" value="0" style="height: 24px; width: 33px;"><br><div style="font-size: 0.5em;">Misc<br>Modifier</div></td>
            </tr>
        </table>

    </td>
</tr>
<tr>
    <td colspan="2">
        <table>
            <tr>
                <td style="width: 38px;" class="sheet-statlabel">AC<br><div style="font-size: 0.65em;">Armor Class</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_armorclass" value="10+@{armorclassbonus}+@{shieldbonus}+floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{size}+@{armorclassnaturalarmor}+@{armorclassdeflectionmod}+@{armorclassmiscmod}" disabled="true" style="height: 24px; width: 40px;"><br><div style="font-size: 0.5em;">Total<br>&nbsp;</div></td>
                <td>= 10 +<br><br><br></td>
                <td><input class="sheet-inputbox" type="number" name="attr_armorclassbonus" style="height: 24px; width: 35px;" value="0" > <br><div style="font-size: 0.5em;">Armor<br>Bonus</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclassshieldbonus" value="@{shieldbonus}" disabled="true" style="height: 24px; width: 35px;"> <br><div style="font-size: 0.5em;">Shield<br>Bonus</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclassdexmod" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true" style="height: 24px; width: 35px;"> <br><div style="font-size: 0.5em;">Dex<br>Modifier</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclasssizemod" value="@{size}" disabled="true" style="height: 24px; width: 35px;"> <br><div style="font-size: 0.5em;">Size<br>Modifier</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclassnaturalarmor" value="0" style="height: 24px; width: 35px;"> <br><div style="font-size: 0.5em;">Natural<br>Armor</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclassdeflectionmod" value="0" style="height: 24px; width: 35px;"> <br><div style="font-size: 0.5em;">Deflection<br>Modifier</div></td>
                <td>+ <input class="sheet-inputbox" type="number" name="attr_armorclassmiscmod" value="0" style="height: 24px; width: 35px;"><br><div style="font-size: 0.5em;">Misc<br>Modifier</div></td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td colspan="2">
        <table>
            <tr>
                <td style="width: 70px; height: 24px;" class="sheet-statlabel">TOUCH<br><div style="font-size: 0.65em;">Touch Armor Class</div></td>
                <td valign="top"><input class="sheet-inputbox" type="text" name="attr_touchac" style="height: 24px; width: 50px;"></td>
                <td style="width: 90px;" class="sheet-statlabel">FLAT-FOOTED<br><div style="font-size: 0.65em;">Armor Class</div></td>
                <td valign="top"><input class="sheet-inputbox" type="text" name="attr_flatac" style="height: 24px; width: 50px;"></td>
                <td valign="top"><input class="sheet-inputbox" type="text" name="attr_flatmod" style="height: 24px; width: 200px;"> <br><div style="font-size: 0.5em;">Modifiers</div></td>
            </tr>
        </table>
        <br>
        Character Class and Levels (hover below for table)
        <fieldset class="repeating_classes">
        <table>
            <tr>
                <td style="width: 70px; height: 24px;" class="sheet-statlabel">Class</td>
                <td valign="top">
                    <select name="attr_classname" class="dtype" style="width: 160px;">
                        <option>Barbarian</option>
                        <option>Bard</option>
                        <option>Cleric</option>
                        <option>Druid</option>
                        <option>Fighter</option>
                        <option>Monk</option>
                        <option>Paladin</option>
                        <option>Ranger</option>
                        <option>Rogue</option>
                        <option>Sorcerer</option>
                        <option>Wizard</option>
                    </select>
                </td>
                <td style="width: 60px;" class="sheet-statlabel">Level</td>
                <td valign="top"><input class="sheet-inputbox" type="text" name="attr_classlevel" style="height: 24px; width: 50px;"></td>
                <td style="width: 60px;" class="sheet-statlabel">HP</td>
                <td valign="top"><input class="sheet-inputbox" type="text" name="attr_classhproll" style="height: 24px; width: 50px;"></td>
            </tr>
        </table>
        </fieldset>
        <br>
        <div style="display: inline-block; text-align: center">
        <div class="sheet-colorred" title='
Level  BAB            Fort Save      Ref Save   Will Save
1st     +1                 +2                 +0          +0
2nd    +2                +3                 +0          +0
3rd     +3                 +3                 +1          +1
4th     +4                 +4                 +1          +1
5th     +5                 +4                 +1          +1
6th     +6/+1          +5                 +2          +2
7th     +7/+2          +5                 +2          +2
8th     +8/+3          +6                 +2          +2
9th     +9/+4          +6                 +3          +3
10th   +10/+5        +7                 +3          +3
'>Barbarian</div> |
    <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +0              +2              +2
2          +1            +0              +3              +3
3          +2            +1              +3              +3
4          +3            +1              +4              +4
5          +3            +1              +4              +4
6          +4            +2              +5              +5
7          +5            +2              +5              +5
8          +6/+1      +2             +6               +6
9          +6/+1      +3             +6               +6
10        +7/+2      +3             +7               +7
'>Bard</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +2              +0              +2
2          +1            +3              +0              +3
3          +2            +3              +1              +3
4          +3            +4              +1              +4
5          +3            +4              +1              +4
6          +4            +5              +2              +5
7          +5            +5              +2              +5
8          +6/+1      +6             +2               +6
9          +6/+1      +6             +3               +6
10        +7/+2      +7             +3               +7
'>Cleric</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +2              +0              +2
2          +1            +3              +0              +3
3          +2            +3              +1              +3
4          +3            +4              +1              +4
5          +3            +4              +1              +4
6          +4            +5              +2              +5
7          +5            +5              +2              +5
8          +6/+1      +6             +2               +6
9          +6/+1      +6             +3               +6
10        +7/+2      +7             +3               +7
'>Druid</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +1            +2              +0              +0
2          +2            +3              +0              +0
3          +3            +3              +1              +1
4          +4            +4              +1              +1
5          +5            +4              +1              +1
6          +6/+1      +5              +2              +2
7          +7/+2      +5              +2              +2
8          +8/+3      +6             +2               +2
9          +9/+4      +6             +3               +3
10        +10/+5    +7             +3               +3
'>Fighter</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +2              +2              +2
2          +1            +3              +3              +3
3          +2            +3              +3              +3
4          +3            +4              +4              +4
5          +3            +4              +4              +4
6          +4            +5              +5              +5
7          +5            +5              +5              +5
8          +6/+1      +6             +6               +6
9          +6/+1      +6             +6               +6
10        +7/+2      +7             +7               +7
'>Monk</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +1            +2              +0              +2
2          +2            +3              +0              +3
3          +3            +3              +1              +3
4          +4            +4              +1              +4
5          +5            +4              +1              +4
6          +6/+1      +5              +2              +5
7          +7/+2      +5              +2              +5
8          +8/+3      +6             +2               +6
9          +9/+4      +6             +3               +6
10        +10/+5    +7             +3               +7
'>Paladin</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +1            +2              +2              +0
2          +2            +3              +3              +0
3          +3            +3              +3              +1
4          +4            +4              +4              +1
5          +5            +4              +4              +1
6          +6/+1      +5              +5              +2
7          +7/+2      +5              +5              +2
8          +8/+3      +6             +6               +2
9          +9/+4      +6             +6               +3
10        +10/+5    +7             +7               +3
'>Ranger</div><br>
    <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +0              +2              +0
2          +1            +0              +3              +0
3          +2            +1              +3              +1
4          +3            +1              +4              +1
5          +3            +1              +4              +1
6          +4            +2              +5              +2
7          +5            +2              +5              +2
8          +6/+1      +2             +6               +2
9          +6/+1      +3             +6               +3
10        +7/+2      +3             +7               +3
'>Rogue</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +0              +0              +2
2          +1            +0              +0              +3
3          +1            +1              +1              +3
4          +2            +1              +1              +4
5          +2            +1              +1              +4
6          +3            +2              +2              +5
7          +3            +2              +2              +5
8          +4            +2             +2               +6
9          +4            +3             +3               +6
10        +5            +3             +3               +7
'>Sorcerer</div> |
        <div class="sheet-colorred" title='
Level   BAB         Fort Save   Ref Save   Will Save
1          +0            +0              +0              +2
2          +1            +0              +0              +3
3          +1            +1              +1              +3
4          +2            +1              +1              +4
5          +2            +1              +1              +4
6          +3            +2              +2              +5
7          +3            +2              +2              +5
8          +4            +2             +2               +6
9          +4            +3             +3               +6
10        +5            +3             +3               +7
'>Wizard</div>
    </div>
        <br><br>
        <table>
            <tr>
                <th>Saving Throws</th>
                <th>Total</th>
                <th>Base<br>Save</th>
                <th>Ability<br>Modifier</th>
                <th>Magic<br>Modifier</th>
                <th>Misc<br>Modifier</th>
                <th>Temp<br>Modifier</th>
                <td rowspan="4"><input class="sheet-inputbox" type="text" name="attr_statmod" style="height: 120px; width: 60px;"><br><div style="font-size: 0.5em;" valign="top">Modifiers</div></td>                
            </tr>
            <tr>
                <td class="sheet-statlabel-big" style="width: 60px;">Fortitude<br><div style="font-size: 0.65em;">(Constitution)</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitude" style="height: 24px; width: 40px;" value="@{fortitudebase}+@{fortitudeabilitymod}+@{fortitudemagicmod}+@{fortitudemiscmod}+@{fortitudetempmod}" disabled="true"> = </td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitudebase" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitudeabilitymod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitudemagicmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitudemiscmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_fortitudetempmod" style="height: 24px; width: 40px;"></td>
            </tr>
            <tr>
                <td class="sheet-statlabel-big" style="width: 60px;">Reflex<br><div style="font-size: 0.65em;">(Dexterity)</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflex" style="height: 24px; width: 40px;" value="@{reflexbase}+@{reflexabilitymod}+@{reflexmagicmod}+@{reflexmiscmod}+@{reflextempmod}" disabled="true"> = </td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflexbase" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflexabilitymod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflexmagicmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflexmiscmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_reflextempmod" style="height: 24px; width: 40px;"></td>
            </tr>            
            <tr>
                <td class="sheet-statlabel-big" style="width: 60px;">Will<br><div style="font-size: 0.65em;">(Wisdom)</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_will" style="height: 24px; width: 40px;" value="@{willbase}+@{willabilitymod}+@{willmagicmod}+@{willmiscmod}+@{willtempmod}" disabled="true"> = </td>
                <td><input class="sheet-inputbox" type="number" name="attr_willbase" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_willabilitymod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_willmagicmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_willmiscmod" style="height: 24px; width: 40px;"> + </td>
                <td><input class="sheet-inputbox" type="number" name="attr_willtempmod" style="height: 24px; width: 40px;"></td>
            </tr>            
        </table>
        <br>
        <table>
            <tr>
                <td class="sheet-statlabel-big" style="width: 200px;">Base Attack Bonus (BAB)</td>
                <td><input class="sheet-inputbox" type="number" name="attr_baseattackbonus" value="0" style="height: 24px; width: 80px;"></td>
                <td class="sheet-statlabel-big" style="width: 110px;"><div style="font-size: 0.65em;">Spell<br>Resistance</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellresistance" style="height: 24px; width: 60px;"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td class="sheet-statlabel-big" style="width: 80px;">CMB</td>
                <td><input class="sheet-inputbox" type="number" name="attr_cmb" style="height: 24px; width: 60px;" value="@{baseattackbonus}+floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}+@{size}+@{cmbmod}" disabled="true"><br><div style="font-size: 0.5em;">Total<br>&nbsp;</div></td>
                <td> = <input class="sheet-inputbox" type="number" name="attr_baseattackbonuscmb" style="height: 24px; width: 45px;" value="@{baseattackbonus}" disabled="true"> <br><div style="font-size: 0.5em;">Base Attack<br>Bonus</div></td>
                <td> + <input class="sheet-inputbox" type="number" name="attr_strmodcmb" style="height: 24px; width: 45px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}" disabled="true"> <br><div style="font-size: 0.5em;">Strength<br>Modifier</div></td>
                <td> + <input class="sheet-inputbox" type="number" name="attr_sizemodcmb" style="height: 24px; width: 45px;" value="(-1 * @{size})" disabled="true">  + <br><div style="font-size: 0.5em;">Size<br>Modifier</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_cmbmod" value="0" style="height: 24px; width: 116px;"> <br><div style="font-size: 0.5em;">Modifiers<br><br></div></td>
            </tr>            
        </table>
        <br>
        <table>
            <tr>
                <td class="sheet-statlabel-big" style="width: 80px;">CMD</td>
                <td><input class="sheet-inputbox" type="number" name="attr_cmd" style="height: 24px; width: 60px;" value="@{baseattackbonus}+floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}+floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{size}+10" disabled="true"><br><div style="font-size: 0.5em;">Total<br>&nbsp;</div></td>
                <td> = <input class="sheet-inputbox" type="number" name="attr_baseattackbonuscmd" value="@{baseattackbonus}" disabled="true" style="height: 24px; width: 45px;"> <br><div style="font-size: 0.5em;">Base Attack<br>Bonus</div></td>
                <td> + <input class="sheet-inputbox" type="number" name="attr_strmodcmd" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}" disabled="true" style="height: 24px; width: 45px;"> <br><div style="font-size: 0.5em;">Strength<br>Modifier</div></td>
                <td> + <input class="sheet-inputbox" type="number" name="attr_dexmodcmd" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true" style="height: 24px; width: 45px;"> <br><div style="font-size: 0.5em;">Dexterity<br>Modifier</div></td>
                <td> + <input class="sheet-inputbox" type="number" name="attr_sizemodcmd" value="(-1 * @{size})" disabled="true" style="height: 24px; width: 45px;">  + 10<br><div style="font-size: 0.5em;">Size<br>Modifier</div></td>
            </tr>            
        </table>
        <br>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td colspan="3" class="sheet-statlabel-big-gray" style="font-size: 1.5em; width: 450px;">Weapons</td>
            </tr>
        </table>

        <fieldset class="repeating_weapons">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td colspan="3" class="sheet-statlabel-big" style="font-size: 1.5em; width: 260px;">Weapon</td>
                    <td class="sheet-statlabel" style="width: 110px;">Attack Bonus</td>
                    <td class="sheet-statlabel" style="width: 100px;">Critical</td>
                </tr>
                <tr>
                    <td colspan="3"><input class="sheet-inputbox" type="text" name="attr_weaponname" style="height: 24px; width: 260px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_weaponattackbonus" style="height: 24px; width: 110px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_weaponcritical" style="height: 24px; width: 100px;"></td>
                </tr>            
                <tr>
                    <td class="sheet-statlabel" style="width: 80px;">Type</td>
                    <td class="sheet-statlabel" style="width: 90px;">Range</td>
                    <td class="sheet-statlabel" style="width: 90px;">Ammunition</td>
                    <td colspan="2" class="sheet-statlabel" style="width: 210px;">Damage</td>
                </tr>
                <tr>
                    <td><input class="sheet-inputbox" type="text" name="attr_weapontype" style="height: 24px; width: 80px;"></td>
                    <td><input class="sheet-inputbox" type="text" name="attr_weaponrange" style="height: 24px; width: 90px;"></td>
                    <td><input class="sheet-inputbox" type="text" name="attr_weaponammunition" style="height: 24px; width: 90px;"></td>
                    <td colspan="2"><input class="sheet-inputbox" type="number" name="attr_weapondamage" style="height: 24px; width: 210px;"></td>
                </tr>            
            </table>
        </fieldset>
        <br>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td colspan="3" class="sheet-statlabel-big-gray" style="font-size: 1.5em; width: 450px;">AC Items</td>
            </tr>
        </table>

        <fieldset class="repeating_acitems">
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td class="sheet-statlabel" style="font-size: 1em; width: 122px;">Item Name</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Bonus</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Type</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Check Penalty</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Spell Failure</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Weight</td>
                    <td class="sheet-statlabel" style="font-size: 0.65em; width: 58px;">Properties</td>
                </tr>
                <tr>
                    <td><input class="sheet-inputbox" type="text" name="attr_acitem" style="height: 24px; width: 122px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_acitembonus" style="height: 24px; width: 58px;"></td>
                    <td><input class="sheet-inputbox" type="text" name="attr_acitemtype" style="height: 24px; width: 58px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_acitemcheckpenalty" style="height: 24px; width: 58px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_acitemspellfailure" style="height: 24px; width: 58px;"></td>
                    <td><input class="sheet-inputbox" type="number" name="attr_acitemweight" style="height: 24px; width: 58px;"></td>
                    <td><input class="sheet-inputbox" type="text" name="attr_acitemproperties" style="height: 24px; width: 58px;"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td class="sheet-statlabel-big" style="font-size: 1em; width: 200px;">Shield</td>
                <td class="sheet-statlabel" style="font-size: 0.65em; width: 54px;">Bonus</td>
                <td class="sheet-statlabel" style="font-size: 0.65em; width: 54px;">Check Penalty</td>
                <td class="sheet-statlabel" style="font-size: 0.65em; width: 54px;">Spell Failure</td>
                <td class="sheet-statlabel" style="font-size: 0.65em; width: 54px;">Weight</td>
                <td class="sheet-statlabel" style="font-size: 0.65em; width: 54px;">Properties</td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="text" name="attr_shield" style="height: 24px; width: 200px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_shieldbonus" style="height: 24px; width: 54px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_shieldcheckpenalty" style="height: 24px; width: 54px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_shieldspellfailure" style="height: 24px; width: 54px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_shieldweight" style="height: 24px; width: 54px;"></td>
                <td><input class="sheet-inputbox" type="text" name="attr_shieldproperties" style="height: 24px; width: 54px;"></td>
            </tr>
        </table>
        <br>
        <table>
            <tr><td valign="top">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan="3" class="sheet-statlabel-big-gray" style="font-size: 1.5em; width: 230px;">Gear</td>
                    </tr>
                </table>

                <fieldset class="repeating_gear">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="sheet-statlabel" style="font-size: 1em; width: 200px;">Item Name</td>
                            <td class="sheet-statlabel" style="font-size: 0.65em; width: 50px;">Wt.</td>
                        </tr>
                        <tr>
                            <td><input class="sheet-inputbox" type="text" name="attr_gearitenname" style="height: 24px; width: 200px;"></td>
                            <td><input class="sheet-inputbox" type="number" name="attr_gearitemwt" style="height: 24px; width: 50px;"></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
            <td valign="top">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan="3" class="sheet-statlabel-big-gray" style="font-size: 1.5em; width: 190px;">Feats</td>
                    </tr>
                </table>

                <fieldset class="repeating_feats">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="sheet-statlabel" style="font-size: 1em; width: 210px;">Feat Name</td>
                        </tr>
                        <tr>
                            <td><input class="sheet-inputbox" type="text" name="attr_gearitenname" style="height: 24px; width: 210px;"></td>
                        </tr>
                    </table>
                </fieldset>            
            </td>
            </tr>
        </table>
        <br>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td colspan="3" class="sheet-statlabel-big-gray" style="font-size: 1.5em; width: 450px;">Spells</td>
            </tr>
        </table>

        <table cellpadding="0" cellspacing="0">
            <tr>
                <td class="sheet-statlabel" style="width: 94px;">Spells Known</td>
                <td class="sheet-statlabel" style="width: 94px;">Spell<br>Save DC</td>
                <td class="sheet-statlabel" style="width: 94px;">Level</td>
                <td class="sheet-statlabel" style="width: 94px;">Spells<br>Per Day</td>
                <td class="sheet-statlabel" style="width: 94px;">Bonus Spells</td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl0" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl0" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">0</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl0" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl0" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl1" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl1" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">1st</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl1" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl1" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl2" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl2" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">2nd</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl2" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl2" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl3" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl3" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">3rd</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl3" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl3" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl4" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl4" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">4th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl4" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl4" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl5" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl5" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">5th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl5" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl5" style="height: 24px; width: 45px;"></td>
            </tr>
            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl6" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl6" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">6th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl6" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl6" style="height: 24px; width: 45px;"></td>
            </tr>

            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl7" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl7" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">7th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl7" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl7" style="height: 24px; width: 45px;"></td>
            </tr>

            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl8" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl8" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">8th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl8" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl8" style="height: 24px; width: 45px;"></td>
            </tr>

            <tr>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsknownlvl9" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellssavedclvl9" style="height: 24px; width: 45px;"></td>
                <td><div class="sheet-inputbox" style="height: 24px; width: 45px;">9th</div></td>
                <td><input class="sheet-inputbox" type="number" name="attr_spellsperdaylvl9" style="height: 24px; width: 45px;"></td>
                <td><input class="sheet-inputbox" type="number" name="attr_bonusspellslvl9" style="height: 24px; width: 45px;"></td>
            </tr>


        </table>
        <table cellpadding="10" cellspacing="0">
            <tr>
                <td style="font-size: 0.64em;"><input class="sheet-inputbox" type="text" name="attr_spellsconditionalmodifiers" style="height: 34px;  width: 450px;"><br>Conditional Modifiers</td>
            </tr>
        </table>
        <br>

        <br>


    </td>
</tr>

</table>

</div>


<div style="float: left">
    <table>
        <tr>
            <td class="sheet-statlabel-big" style="width: 70px;">SPEED<br><div style="font-size: 0.65em;">Land</div></td>
            <td><input class="sheet-inputbox" type="text" name="attr_speed" style="height: 24px; width: 95px;"><br><div style="font-size: 0.5em;">Base speed</div></td>
            <td><input class="sheet-inputbox" type="text" name="attr_speedarmor" style="height: 24px; width: 85px;"><br><div style="font-size: 0.5em;">With Armor</div></td>

            <td rowspan="2"><input class="sheet-inputbox" type="text" name="attr_speedarmortempmod" style="height: 70px; width: 90px;"><br><div style="font-size: 0.5em;" valign="top">Temp Modifiers</div></td>
        </tr>
        <tr>
            <td colspan="2"><div><input class="sheet-inputbox" type="text" name="attr_Flymanuver" style="height: 24px; width: 110px;">&nbsp;&nbsp;<input class="sheet-inputbox" type="text" name="attr_swim" style="height: 24px; width: 50px;"><br><div style="font-size: 0.5em;">Fly&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Manuverability&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swim</div></div></td>
            <td ><div><input class="sheet-inputbox" type="text" name="attr_climb" style="height: 24px; width: 40px;">&nbsp;<input class="sheet-inputbox" type="text" name="attr_burrow" style="height: 24px; width: 40px;"><br><div style="font-size: 0.5em;">Climb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Burrow</div></div></td>
        </tr>
    </table>
    <table >
        <tr>
            <td colspan="9" class="sheet-statlabel-big" style="width: 350px;">SKILLS</td>
        </tr>
        <tr>
            <th></th>
            <th style="font-size: 0.6em; text-align: left">Skill Names</th>
            <th style="font-size: 0.6em;">Total<br>Bonus</th>
            <th></th>
            <th style="font-size: 0.6em;">Ability<br>Mod.</th>
            <th></th>
            <th style="font-size: 0.6em;">Ranks</th>
            <th></th>
            <th style="font-size: 0.6em;">Misc.<br>Mod</th>
        </tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Acrobatics</td><td><input type="number" name="attr_acrobatics" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{acrobaticsranks}+@{acrobaticsmiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_acrobaticsranks" value="0" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_acrobaticsmiscmod" value="0" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Appraise</td><td><input type="number" name="attr_appraise" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{appraiseranks}+@{appraisemiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_appraiseranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_appraisemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Bluff</td><td><input type="number" name="attr_bluff" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{bluffranks}+@{bluffmiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_bluffranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_bluffmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Climb</td><td><input type="number" name="attr_climb" style="width: 30px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}+@{climbranks}+@{climbmiscmod}" disabled="true"></td><td>= Str</td><td><input type="number" name="attr_strmod" style="width: 30px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_climbranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_climbmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Diplomacy</td><td><input type="number" name="attr_diplomacy" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{diplomacyranks}+@{diplomacymiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_diplomacyranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_diplomacymiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Disable Device*</td><td><input type="number" name="attr_disabledevice" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{disabledeviceranks}+@{disabledevicemiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_disabledeviceranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_disabledevicemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Disguise</td><td><input type="number" name="attr_disguise" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{disguiseranks}+@{disguisemiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_disguiseranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_disguisemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Escape Artist</td><td><input type="number" name="attr_escapeartist" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{escapeartistranks}+@{escapeartistmiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_escapeartistranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_escapeartistmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Fly</td><td><input type="number" name="attr_fly" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{flyranks}+@{flymiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_flyranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_flymiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Handle Animal*</td><td><input type="number" name="attr_handleanimal" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{handleanimalranks}+@{handleanimalmiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_handleanimalranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_handleanimalmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Heal</td><td><input type="number" name="attr_heal" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}+@{healranks}+@{healmiscmod}" disabled="true"></td><td>= Wis</td><td><input type="number" name="attr_wismod" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_healranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_healmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Intimidate</td><td><input type="number" name="attr_intimidate" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{intimidateranks}+@{intimidatemiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_intimidateranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_intimidatemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Arcana)</td><td><input type="number" name="attr_knowarcana" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowarcanaranks}+@{knowarcanamiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowarcanaranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowarcanamiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Dungeoneering)</td><td><input type="number" name="attr_knowdungeoneering" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowdungeoneeringranks}+@{knowdungeoneeringmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowdungeoneeringranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowdungeoneeringmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Engineering)</td><td><input type="number" name="attr_knowengineering" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowengineeringranks}+@{knowengineeringmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowengineeringranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowengineeringmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Geography)</td><td><input type="number" name="attr_knowgeography" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowgeographyranks}+@{knowgeographymiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowgeographyranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowgeographymiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (History)</td><td><input type="number" name="attr_knowhistory" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowhistoryranks}+@{knowhistorymiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowhistoryranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowhistorymiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Local)</td><td><input type="number" name="attr_knowlocal" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowlocalranks}+@{knowlocalmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowlocalranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowlocalmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Nature)</td><td><input type="number" name="attr_knownature" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knownatureranks}+@{knownaturemiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knownatureranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knownaturemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Nobility)</td><td><input type="number" name="attr_knownobility" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knownobilityranks}+@{knownobilitymiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knownobilityranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knownobilitymiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Planes)</td><td><input type="number" name="attr_knowplanes" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowplanesranks}+@{knowplanesmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowplanesranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowplanesmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Knowledge (Relgion)</td><td><input type="number" name="attr_knowreligion" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{knowreligionranks}+@{knowreligionmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_knowreligionranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_knowreligionmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Linguistics</td><td><input type="number" name="attr_linguistics" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{linguisticsranks}+@{linguisticsmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_linguisticsranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_linguisticsmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox"><b>Perception</b></td><td><input type="number" name="attr_perception" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}+@{perceptionranks}+@{perceptionmiscmod}" disabled="true"></td><td>= Wis</td><td><input type="number" name="attr_wismod" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_perceptionranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_perceptionmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Ride</td><td><input type="number" name="attr_ride" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{rideranks}+@{ridemiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_rideranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_ridemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Sense Motive</td><td><input type="number" name="attr_sensemotive" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}+@{sensemotiveranks}+@{sensemotivemiscmod}" disabled="true"></td><td>= Wis</td><td><input type="number" name="attr_wismod" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_sensemotiveranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_sensemotivemiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Sleight of Hand</td><td><input type="number" name="attr_slightofhand" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{slightofhandranks}+@{slightofhandmiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_slightofhandranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_slightofhandmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Spellcraft</td><td><input type="number" name="attr_spellcraft" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}+@{spellcraftranks}+@{spellcraftmiscmod}" disabled="true"></td><td>= Int</td><td><input type="number" name="attr_intmod" style="width: 30px;" value="floor(@{int}/2-5)+@{inttempadj}+@{inttempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_spellcraftranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_spellcraftmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Stealth</td><td><input type="number" name="attr_stealth" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}+@{stealthranks}+@{stealthmiscmod}" disabled="true"></td><td>= Dex</td><td><input type="number" name="attr_dexmod" style="width: 30px;" value="floor(@{dex}/2-5)+@{dextempadj}+@{dextempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_stealthranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_stealthmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Survival</td><td><input type="number" name="attr_survival" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}+@{survivalranks}+@{survivalmiscmod}" disabled="true"></td><td>= Wis</td><td><input type="number" name="attr_wismod" style="width: 30px;" value="floor(@{wis}/2-5)+@{wistempadj}+@{wistempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_survivalranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_survivalmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Swim</td><td><input type="number" name="attr_swim" style="width: 30px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}+@{swimranks}+@{swimmiscmod}" disabled="true"></td><td>= Str</td><td><input type="number" name="attr_strmod" style="width: 30px;" value="floor(@{str}/2-5)+@{strtempadj}+@{strtempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_swimranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_swimmiscmod" style="width: 30px;"></td></tr>
        <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Use Magic Device</td><td><input type="number" name="attr_usemagicdevice" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}+@{usemagicdeviceranks}+@{usemagicdevicemiscmod}" disabled="true"></td><td>= Cha</td><td><input type="number" name="attr_chamod" style="width: 30px;" value="floor(@{cha}/2-5)+@{chatempadj}+@{chatempmod}" disabled="true"></td><td>+</td><td><input type="number" name="attr_usemagicdeviceranks" style="width: 30px;"></td><td>+</td><td><input type="number" name="attr_usemagicdevicemiscmod" style="width: 30px;"></td></tr>
    </table>
    <b>Craft</b><br>
    <fieldset class="repeating_craft">
        <table style="width: 350px;">
            <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Craft <input type="text" name="attr_craft" style="width: 70px;"></td><td><input type="text" name="attr_craftname" style="width: 30px;"></td><td>= Int</td><td><input type="text" name="attr_craftmod" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_craftranks" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_craftmiscmod" style="width: 30px;"></td></tr>
        </table>
    </fieldset>
    <b>Perform</b><br>
    <fieldset class="repeating_perform">
        <table style="width: 350px;">
            <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Perform <input type="text" name="attr_perform" style="width: 70px;"></td><td><input type="text" name="attr_performname" style="width: 30px;"></td><td>= Cha</td><td><input type="text" name="attr_performmod" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_performranks" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_performmiscmod" style="width: 30px;"></td></tr>
        </table>
    </fieldset>
    <b>Profession</b><br>
    <fieldset class="repeating_profession">
        <table style="width: 350px;">
            <tr><td><input type="checkbox"></td><td class="sheet-skillsbox">Profession <input type="text" name="attr_profession" style="width: 70px;"></td><td><input type="text" name="attr_professionname" style="width: 30px;"></td><td>= Wis</td><td><input type="text" name="attr_professionmod" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_professionranks" style="width: 30px;"></td><td>+</td><td><input type="text" name="attr_professionmiscmod" style="width: 30px;"></td></tr>
        </table>
    </fieldset>
    <b>Conditional Modifiers</b><br>
    <fieldset class="repeating_conditional_modifiers">
        <div style="width: 350px;"><input type="text" name="attr_condmodifier" style="width: 353px;"></div>
    </fieldset>

    <b>Languages</b><br>
    <fieldset class="repeating_languages">
        <div style="width: 350px;"><input type="text" name="attr_language" style="width: 353px;"></div>
    </fieldset>

    <b>Spells</b><br>
    Level 0  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl0">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl0" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 1  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl1">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl1" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 2  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl2">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl2" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 3  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl3">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl3" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 4  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl4">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl4" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 5  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl5">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl5" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 6  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl6">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl6" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 7  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl7">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl7" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 8  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl8">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl8" style="width: 353px;"></div>
    </fieldset>
    <br>
    Level 9  <input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox">
    <br>
    <fieldset class="repeating_spellslvl9">
        <div style="width: 350px;"><input type="text" name="attr_spellnamelvl9" style="width: 353px;"></div>
    </fieldset>
    <br>


</div>
<div style="clear:both"></div>
<br>

<b>Experience Points</b>
    <fieldset class="repeating_experience">
        <div style="width: 350px;"><input type="text" name="attr_gamedate" style="width: 353px;"><br>Game Date</div>
        <div style="width: 350px;"><input type="text" name="attr_campaigndate" style="width: 353px;"><br>Campaign Date</div>
        <div style="width: 350px;"><input type="number" name="attr_experience" style="width: 353px;"><br>Experience</div>
        <hr>
    </fieldset>
<br>
<b>Money</b>
<div style="width: 350px;"><input type="number" name="attr_copper" style="width: 353px;"><br>CP</div>
<div style="width: 350px;"><input type="number" name="attr_silver" style="width: 353px;"><br>SP</div>
<div style="width: 350px;"><input type="number" name="attr_gold" style="width: 353px;"><br>GP</div>
<div style="width: 350px;"><input type="number" name="attr_platinum" style="width: 353px;"><br>PP</div>
<br>