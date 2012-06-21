<table>
	<thead>
		<tr>
			<th>Celebrity</th>
			<th>Listener</th>
			<th>Word</th>
			<th>When</th>
		</tr>
	</thead>
<tbody>
{foreach $answers as $answer}
	<tr>
		<td>{$answer.name|capitalize}</td>
		<td>{$answer.listener}</td>
		<td>"{$answer.word}"</td>
		<td>{$answer.time|relative_date}</td>
	</tr>
{/foreach}
</tbody>
</table>
<br />
<h3 style="float:left; "><a href="#addanswer" rel="modal">Add another correct answer</a></h3><h3 style="float:right;"><a href="#deleteanswer" rel="modal">Correct An Answer</a></h3>
<div style="display:none;" id="addanswer">
<h3>Add An Answer</h3>
<form action="/admin/index.php" method="post">
<fieldset class="column-left">
<p><label for="answer">Answer</label><input class="text-input medium-input" type="text" name="answer" /><br /><small>"Tina Turner"</small>
</p><p><label for="listener">Listener's Name</label><input class="text-input medium-input" type="text" name="listener" /><br /><small>"Katie O'Brien"</small>
</p>
</fieldset><fieldset class="column-right">
<p><label for="word">Word</label><input type="text" name="word" class="text-input medium-input" /><br /><small>"Who's"</small>
</p><p><label for="prize">Prize</label><input type="text" name="prize" class="text-input medium-input" /><br /><small>The ammount of money won. <br />No &quot;&pound;&quot; sign needed.</small></p>
</fieldset>
<fieldset class="clear">
<p><label for="newslink">News Page URL</label><input type="text" name="newslink" class="text-input large-input" /><br /><small>http://www.heart.co.uk/some/news/page/article</small></p>
<input type="hidden" name="addanswer" value="1" />
<input type="submit" value="Add Answer" class="button" /></fieldset>
</form></div>
<div style="display:none;" id="deleteanswer">
<h3>Delete An Answer</h3>
<form action="/admin/index.php" method="post">
<p>To delete an answer please type in the box below the full name of the celebrity guessed.</p>
<p><label for="answer">Celebrity</label><input class="text-input medium-input" type="Text" name="celebrity" /><br /><small>Tina Turner</small></p>
<input type="hidden" name="deleteanswer" value="1" />
<input type="submit" value="Delete Answer" class="button" />
<br /><small>There is 'Confirm' stage, please ensure that you really want to do this!</small>
</form>
</div>
