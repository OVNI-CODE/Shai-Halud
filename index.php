<!doctype html>
<html>
	<head>
		<title>Oracle of Shai Halud</title>

		<SCRIPT type="text/javascript">
			var aswerswindow

			var text;

			var num;

			var questionType;

			var pagecontent1 = " <head><title>Shai Halud: OVNI SOFTWARE CORP</title></head><BODY bgcolor='#330066'><i><font face='arial, helvetica' color='#66FF00' size'4'>"

			var pagecontent2 = "</i></font><font face='arial, helvetica' color='#FF6600' size'4'>"


			var pagecontent3 = "<form><input type='button' value='New Question' onClick='window.close()'></form>"


			answercontent1 = "pagecontent1 + databank2 + pagecontent2 +pagecontent3"

			var previous;

			var databank = ""

			var databank2 = ""

			var AnswerNo = 61;



			svar = new Array( AnswerNo );



			svar[ 1 ] = "No I don't think you should..........! ";

			svar[ 2 ] = "Time means nothing to them that follow it not";

			svar[ 3 ] = "Better think about the question again, I am sure you already know the answer to this";

			svar[ 4 ] = "There are no Answers, only questions";

			svar[ 5 ] = "How should I know, I am only a machine";

			svar[ 6 ] = "That is not true, tell me the truth...";

			svar[ 7 ] = "Tell me more about the subject in question";

			svar[ 8 ] = "Its really all about Lobsters, their habits and surroundings";

			svar[ 9 ] = "Technically speaking; Diode Divinities are strictly two dimensional creatures";

			svar[ 10 ] = "You can not really cross the boundaries of your creation";

			svar[ 11 ] = "The Screaming Clocks of your mind have destroyed time";

			svar[ 12 ] = "There are several ways to skin a goat";

			svar[ 13 ] = "Words have a tendency to wriggle mindlessly";

			svar[ 14 ] = "No ! there is not a chance";

			svar[ 15 ] = "There may be a possibility";

			svar[ 16 ] = "This could be a possibility, but time will tell";

			svar[ 17 ] = "There are several ways to skin an Orange";

			svar[ 18 ] = "An onion may make you cry";

			svar[ 19 ] = "If you reverse the situation ?";

			svar[ 20 ] = "What would you do in these circumstances ?";

			svar[ 21 ] = "Do you really believe that or is it a figment-al apparitition ?";

			svar[ 22 ] = "Have you thought about the consequences ?";

			svar[ 23 ] = "Yes, it is a possibility, but then so is everything";

			svar[ 24 ] = "I haven't got sufficient resources to answer this. Try again later.";

			svar[ 25 ] = "This is very complicated. Need it be so ?";

			svar[ 26 ] = "My name is Prof. Brainstorm, pleased to meet you.";

			svar[ 27 ] = "Better think about what you really want to know.";

			svar[ 28 ] = "Yes, it is a possibility, but then so is everything";

			svar[ 29 ] = "No !";

			svar[ 30 ] = "No...";

			svar[ 31 ] = "Yes !";

			svar[ 32 ] = "Yes.. ";

			svar[ 33 ] = "Not sure, what do you think ?";

			svar[ 34 ] = "Is this a message from some secret society ?";

			svar[ 35 ] = "The source of this information is very reliable";

			svar[ 36 ] = "Don't believe all that you read";

			svar[ 37 ] = "Sorry, I wasn't listening, could you repeat that..";

			svar[ 38 ] = "mmmm, I wouldnt be so sure";

			svar[ 39 ] = "That may be the case";

			svar[ 40 ] = "Do you really want to know the answer to that ?";

			svar[ 41 ] = "Direct answers are not the solution";

			svar[ 42 ] = "Be prepared to know the answer";

			svar[ 43 ] = "Are you ready for this ?";

			svar[ 44 ] = "I see another situation";

			svar[ 45 ] = "I can see you do not understand my line of answer";

			svar[ 46 ] = "Do not trust them, you know who I mean";

			svar[ 47 ] = "Happily so, I suspect";

			svar[ 48 ] = "Better drink a cup of tea";

			svar[ 49 ] = "Milk and two sugars ?";

			svar[ 50 ] = "Ok, so there are those who would mislead you,,";

			svar[ 51 ] = "I am not..";

			svar[ 52 ] = "Try again, there seems to be some static in the airwaves";

			svar[ 53 ] = "That sounds like Tuesday";

			svar[ 54 ] = "Wednesday morning will bring your answer";

			svar[ 55 ] = "I believe you should wait until two hours have passed, then you will find your answer";

			svar[ 56 ] = "I can hear voices";

			svar[ 57 ] = "The voices tell me what to do";

			svar[ 58 ] = "Listen to your inner voice";

			svar[ 59 ] = "Ok, I'll stop fooling about,ask me another";

			svar[ 60 ] = "Within the frequencies lies your reply";

			svar[ 61 ] = "Could be possible any moment now...";









			function checkform()

			{

				if ( window.document.form1.questiontext.value == "" );

				{

					alert( "You Really Should Type a Question in the Text Box !" );

					document.form1.questiontext.focus();
				}



				if ( document.form1.questiontext.value != "" );

				{

					questionType = document.form1.questiontext.value + ".....  ";

					answerme();

				}

			}







			function answerme()

			{

				num = Math.ceil( Math.random() * AnswerNo );



				previous = num



				count = 1



				questionType = document.form1.questiontext.value + ".....  ";



				while ( count < AnswerNo )

				{

					if ( num == count )

					{
						text = svar[ count ]
					}

					count++;

				}


				databank2 = databank2 + databank + "<br>";

				aswerswindow = window.open();

				aswerswindow.document.open();

				aswerswindow.document.write( pagecontent1 + databank2 + "<br>" + questionType + pagecontent2 + text + pagecontent3 );


				databank = questionType + text;
			}
			
		</SCRIPT>

		<style type="text/css">
				<!-- .style1 {
				font-size: medium;
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-style: italic;
				color: #00FF00;
				body {
					background-color: #330066;
				}
				.style2 {
					font-size: small;
					font-family: Verdana, Arial, Helvetica, sans-serif;
					font-style: italic;
					color: #CCCCCC;
				}
				-->

		</style>

	</head>

<BODY bgcolor="#330066" topmargin="0" marginheight="0" onUnLoad= "aswerswindow = window.open();

aswerswindow.document.open();

aswerswindow.document.write(<form>+<input type='text' value= questionType> + <input type='text' value=text>+</form>);

" >

<centre>


	<table width="45%" border="0" cellpadding="6">

		<tr>
			<form name="form1" METHOD="post">

				<td colspan="4" align="left" valign="top">
					<p>
						<font face="Agency FB, Tahoma, Arial" size="6" color="#CC6600">The Electronic Oracle of Shai Halud:</font><br>

						<font face="Agency FB, Tahoma, Arial" size="2" color="#CC6600">Ask any question you will of the Oracle: It will answer all.</font>
					</p>
					<input name="questiontext" type="text" size="33">

					<font color="#00FF00" size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Type your Question to the Oracle:</b>
					</font><br>

					<input name="ask" type="button" onClick="answerme()" value="Ask Me Now" style="background-color:#c0c0c0; color:#000000; border:2px solid #ffffff; font-family:tahoma; font-size:13pt; letter-spacing=1px">


					<p align="left">&nbsp;</p>
				</td>

			</form>
		</tr>
	</table>

</BODY>

</HTML>