<?php
$solution = "
###########B##########
###########I###INPUT##
###########N###N######
###########A###C######
#######F#HARDWARE#####
#######U#E#Y###E######
#####I#N#X###COMMENT##
#####D#C#A#####E######
####NESTED##W##NETWORK
#######I#E##O##T######
#######O#CHAR#########
#######N#I##D#########
#########M############
###L##BREAK###########
###O##I##L############
#N#COUT###############
#Z#A##################
DECLARE###############
#C####################
######################
";

if ($_GET["check"] == 1) {
    $schema = trim($_GET["schema"]);
}
?>

<div>
<textarea id="create_crossword" name="create_crossword" rows="19" cols="22">
<?php echo $solution; ?>
</textarea>

<textarea id="create_hor" name="create_hor" rows="19" cols="22">
2. Human:Eat::Computer:?
4. Touching the intangible is hard, where ever you are.
6. When you don't need some lines of code but don't wish to remove them...
7. for i......: for j......: do something;
9. All nodes say 'Hi' to each other.
10. One of the several species of fishes of the genus Salvelinus. Also a data type.
12. How to get out of while(1)
14. ... &lt;&lt; 'This isn't left shift'
15. ... and then define.
</textarea>

<textarea id="create_ver" name="create_ver" rows="19" cols="22">
1. There are 10 types of people in the world...
2. In short, plus plus.
3. Procedure is key to do work. 12 tribes on your keyboard.
4. 3499 = DAB (on them)
5. "Terminal is too complicated, just give me everything in one GUI."
8. 4 bytes is one...
11. "Can't get out of this block because I'm a ..."
12. Atoms to the data.(Suarez, not again.)
13. Don't forget to return 0 in the end.
</textarea>
</div>
