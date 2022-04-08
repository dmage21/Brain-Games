"use strict"

/*
 * Game functionality:
 * Generate random math problem
 * Have running timer (either per problem, or overall)
 * Take user input
 * Compare answer to input and display result
 * 	If correct, move to new problem and update score
 *  Else, accept new input until correct
 */
 
 const
	Game = {	// Game data
		operators: [ "+", "-", "*", "/" ],
		numbers: [ "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", 
					"11", "12", "13", "14", "15", "16", "17", "18", "19", "20"],
		correct: document.getElementById("rightNum"),
		expression: document.getElementById("expression"),
		feedback: document.getElementById("gameFeedback"),
		input: document.getElementById("userGuess"),
		guess: document.getElementById("guessButton"),
		opIndex: undefined,
		randNum: undefined,
		num1: undefined,
		num2: undefined,
		answer: undefined,
		debug: false
	},
	Debug = {	// Debug elements
		debugPane: document.getElementById("debugPane"),
		answerField: document.getElementById("correctAnswer"),
		toggle: document.getElementById("debugToggle")
	};
 
// Initialize the game when the webpage finishes loading.
window.addEventListener("load", initGame);

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: initGame                                                   *
 *  Description: Sets up the first round of the game when the page loads,   *
 *               and moves keyboard focus to the player's input element.    *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function initGame() {
	Game.input.addEventListener("keydown", enterInput);
	Game.guess.addEventListener("pointerdown", checkAnswer);
	Debug.toggle.addEventListener("input", toggleDebug);
	
	setGame();
	Game.input.focus();
	
	Game.debug = Debug.toggle.checked;
	
	if(Game.debug) {
		Debug.debugPane.classList.remove("hidden");
		populateDebugPane();
	}
	else
		Debug.debugPane.classList.add("hidden");
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: toggleDebug                                                *
 *   Parameters: Event evt - input event from the debug toggle checkbox     *
 *  Description: Sets the new debug state. If debug has been turned on,     *
 *               un-hides the debug pane and updates its contents. If       *
 *               debug has been turned off, hides the debug pane.           *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function toggleDebug(evt) {
	Game.debug = evt.target.checked;
	Debug.debugPane.classList[Game.debug ? "remove" : "add"]("hidden");
	if(Game.debug)
		populateDebugPane();
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *  		Name: setGame                                                   *
 *  Description: Clears input and feedback areas. Chooses a random          *
 *               math expression, and displays it to the user                  *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function setGame() {
	Game.input.value = "";
	Game.feedback.innerText = "";
	Game.opIndex = parseInt(Game.operators.length*Math.random());
	Game.randNum = parseInt(Game.numbers.length*Math.random());
	Game.num1 = parseInt(Game.randNum * Math.random() * (10 - 1) + 1);
	Game.num2 = parseInt(Game.randNum * Math.random() * (10 - 1) + 1);
	
	switch (Game.opIndex) {
	   case 0: Game.answer = Number(Game.num1) + Number(Game.num2);
	   break;

	   case 1: Game.answer = Number(Game.num1) - Number(Game.num2);
	   break;

	   case 2: Game.answer = Number(Game.num1) * Number(Game.num2);
	   break;

	   case 3: Game.answer = (Number(Game.num1) / Number(Game.num2)).toFixed(2);
	   break;
	}

	Game.expression.innerText = Game.num1.toString() + Game.operators[Game.opIndex] + Game.num2.toString();
	if(Game.debug)
		populateDebugPane();
}	

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: enterInput                                                 *
 *   Parameters: Event evt - keydown event from the player guess element    *
 *  Description: Allows the enter key to be used to send input on an input  *
 *               element.                                                   *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function enterInput(evt) {
	if(evt.code == "Enter")
		checkAnswer();
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: checkAnswer                                                *
 *  Description: Checks the player's guess against the encrypted answer.    *
 *               If the player's guess is correct, generates a new problem. *
 *               If the player's guess is incorrect, prompts for retry.     *                                      *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function checkAnswer() {
	if(Game.input.value == Game.answer)
		resetCountdown(1);
	else
		Game.feedback.innerText = "Try again";
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: resetCountdown                                             *
 *   Parameters: Number seconds - Number of recursions remaining            *
 *  Description: Displays a win message along with the time until the next  *
 *               game round. If seconds is not 0, decrements seconds and    *
 *               calls itself again. If seconds is 0, resets the game.      *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function resetCountdown(seconds) {
	Game.feedback.innerText = `Correct!\nNext round in ${seconds}...`;
	if(seconds)
		setTimeout(resetCountdown.bind(null, seconds-1), 1000);
	else
		setGame();
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *         Name: populateDebugPane                                          *
 *  Description: Update the debug pane with current game information.       *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function populateDebugPane() {
	Debug.answerField.innerText = Game.answer;
}