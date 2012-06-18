
{if {$guesses.1} OR {$guesses.2} OR {$guesses.0}}
<?xml version="1.0"?>

<whosonheart>
	<guesses>
{if {$guesses.0}}
		<guess>
			<searched>{$guess.guess1}</searched>
			<output><![CDATA[{$guesses.0} ]]></output>
		</guess>
{/if}
{if {$guesses.1}}
		<guess>
			<searched>{$guess.guess2}</searched>
			<output><![CDATA[{$guesses.1}]]></output>
		</guess>
{/if}
{if {$guesses.2}}
		<guess>
			<searched>{$guess.guess3}</searched>
			<output><![CDATA[{$guesses.2}]]></output>
		</guess>
{/if}
	</guesses>
	<nextplay>{$nextplay}</nextplay>	
	<share>
		<twitter>I just searched the #WhosOnHeart database for {$guess.guess1|capitalize}, {$guess.guess2|capitalize} & {$guess.guess3|capitalize}</twitter>
	</share>
</whosonheart>
{else}
<whosonheart>
	<error><![CDATA[I don't think you searched for anything!]]></error>
	<nextplay>{$nextplay}</nextplay>
<whosonheart>
{/if}
