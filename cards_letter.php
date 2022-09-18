<?php
	include("mytcg/settings.php");
	include("$header");
>
	<table class="w100 margin0auto zest">
		<tr>
			<th class="center" colspan="13">Choose a letter</th>
		</tr>
		<tr>
			<td class="center"><a href="?a">A</a></td>
			<td class="center"><a href="?b">B</a></td>
			<td class="center"><a href="?c">C</a></td>
			<td class="center"><a href="?d">D</a></td>
			<td class="center"><a href="?e">E</a></td>
			<td class="center"><a href="?f">F</a></td>
			<td class="center"><a href="?g">G</a></td>
			<td class="center"><a href="?h">H</a></td>
			<td class="center"><a href="?i">I</a></td>
			<td class="center"><a href="?j">J</a></td>
			<td class="center"><a href="?k">K</a></td>
			<td class="center"><a href="?l">L</a></td>
			<td class="center"><a href="?m">M</a></td>
		</tr>
		<tr>
			<td class="center"><a href="?n">N</a></td>
			<td class="center"><a href="?o">O</a></td>
			<td class="center"><a href="?p">P</a></td>
			<td class="center"><a href="?q">Q</a></td>
			<td class="center"><a href="?r">R</a></td>
			<td class="center"><a href="?s">S</a></td>
			<td class="center"><a href="?t">T</a></td>
			<td class="center"><a href="?u">U</a></td>
			<td class="center"><a href="?v">V</a></td>
			<td class="center"><a href="?w">W</a></td>
			<td class="center"><a href="?x">X</a></td>
			<td class="center"><a href="?y">Y</a></td>
			<td class="center"><a href="?z">Z</a></td>
		</tr>
	</table>
<?php
if (!$_SERVER['QUERY_STRING']) {
} elseif ($_SERVER['QUERY_STRING'] == "a") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; A</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[A].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "b") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; B</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[B].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "c") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; C</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[C].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "d") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; D</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[D].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "e") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; E</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[E].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "f") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; F</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[F].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "g") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; G</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[G].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "h") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; H</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[H].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "i") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; I</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[I].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "j") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; J</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[J].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "k") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; K</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[K].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "l") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; L</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[L].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "m") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; M</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[M].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "n") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; N</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[N].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "o") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; O</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[O].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "p") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; P</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[P].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "q") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; Q</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[Q].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "r") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; R</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[R].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "s") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; S</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[S].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "t") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; T</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[T].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "u") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; U</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[U].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "v") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; V</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[V].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "w") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; W</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[W].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "x") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; X</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[X].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "y") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; Y</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[Y].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
} elseif ($_SERVER['QUERY_STRING'] == "z") { ?>
	<h1><a href="/cards.php">Cards</a> &gt; <a href="/cards_letter.php">Cards by letter</a> &gt; Z</h1>

	
	<table width="100%" class="zest">
	<tr><th width="32%">Deck</th><th width="25%">Filename</th><th width="25%">Category</th><th width="15%">Set</th></tr>
	<?php
	$select = mysql_query("SELECT * FROM `$table_cards` WHERE `deckname` REGEXP '^[Z].*$' ORDER BY `deckname`, `filename`, `category`, `set1`");
	while($row=mysql_fetch_assoc($select)) {
	$catnum = $row[category];
		echo "<tr><td>$row[deckname]</td><td><a href=\"viewcards.php?deck=$row[filename]\">$row[filename]</a></td><td>$category[$catnum]</td><td><a href=\"viewset.php?set=$row[set1]\">$row[set1]</a>";
		}
		echo "</td></tr>\n";
	echo "</table>\n";
	}
  include("$footer");
?>
