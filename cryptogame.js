"use strict"

/*\
 * 
 * --- Sprint 1 todo ---
 * 
 * Game:
 * 1. Pick a random word from the word list....................... Done
 * 2. Pick a random cipher from the cipher list................... Done
 * 3. Encrypt the chosen word using the chosen cipher............. Done
 * 4. Display the encrypted word.................................. Done
 * 5. Take input/guess from player................................ Done
 * 6. Compare both words and display results...................... Done
 *	 6a. If guess is correct, return to step 1.................... Done
 *	 6b. If guess is incorrect, return to step 5.................. Done
 * 
 * Controls:
 * - Create a button to check a guess............................. Done
 * - Use enter key for checking a guess........................... Done
 * 
 * Testing:
 * - Create a debug pane.......................................... Done
 * 
\*/

const
	Game = {	// Game data
		words: [
			"grief", "abbey", "throw", "story", "agile",
			"trunk", "pilot", "ranch", "cable", "charm",
			"forge", "party", "style", "obese", "snack",
			"total", "lover", "quote", "feast", "allow",
			"child", "breed", "mouth", "cruel", "haunt",
			"punch", "alarm", "drive", "state", "thigh",
			"sword", "spare", "carry", "noise", "track",
			"stall", "ready", "chalk", "shine", "blank",
			"graze", "crown", "leave", "climb", "organ",
			"coast", "shame", "slide", "favor", "serve"
		],
		ciphers: [
			{ name: "caesar", func: caesar }
		],
		crypt: document.getElementById("encryptedWord"),
		feedback: document.getElementById("gameFeedback"),
		input: document.getElementById("userGuess"),
		guess: document.getElementById("guessButton"),
		wordIndex: undefined,
		cipherIndex: undefined,
		debug: true
	},
	Debug = {	// Debug elements
		debugPane: document.getElementById("debugPane"),
		answerField: document.getElementById("correctAnswer"),
		cipherField: document.getElementById("cipherType"),
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
 *         Name: setGame                                                    *
 *  Description: Clears input and feedback areas. Chooses a random word     *
 *               and cipher for the new game round, and displays the        *
 *               encrypted version of the word. If debug mode is active,    *
 *               updates its displayed info.                                *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function setGame() {
	Game.input.value = "";
	Game.feedback.innerText = "";
	Game.wordIndex = parseInt(Game.words.length*Math.random());
	Game.cipherIndex = parseInt(Game.ciphers.length*Math.random());
	Game.crypt.innerText = Game.ciphers[Game.cipherIndex].func(Game.words[Game.wordIndex]);
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
 *  Description: Checks the player's guess against the encrypted word. If   *
 *               the player's guess is correct, updates score and begins    *
 *               the reset countdown. If the player's guess is incorrect,   *
 *               displays a retry message.                                  *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function checkAnswer() {
	if(Game.input.value == Game.words[Game.wordIndex]) {
		let score = document.getElementById("scoreCount");
		scoreCount.innerText = parseInt(scoreCount.innerText) + 1;
		resetCountdown(3);
	}
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
	Debug.answerField.innerText = Game.words[Game.wordIndex];
	Debug.cipherField.innerText = Game.ciphers[Game.cipherIndex].name;
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *          Name: mod                                                       *
 *    Parameters: Number num - A number to be modulated                     *
 *                Number radix - Modulo radix                               *
 *   Description: Performs true modulo on the number given as num with the  *
 *                base given as radix.                                      *
 *  Return value: Number - Result of num modulo radix                       *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function mod(num, radix) {
	return (((num % radix) + radix) % radix);
}

/* ------------------------------------------------------------------------ *\
 *                                                                          *
 *          Name: caesar                                                    *
 *    Parameters: String word - A word to be encrypted                      *
 *   Description: caesar encrypts its word parameter by subtracting 3, mod  *
 *                26, from the alphabetic indices of each character.        *
 *  Return value: String - The encrypted version of the word parameter      *
 *                                                                          *
\* ------------------------------------------------------------------------ */
function caesar(word) {
	let encrypted = [];
	let a = "a".charCodeAt(0);
	
	for(let c of word)
		encrypted.push(mod(c.charCodeAt(0) - a - 3, 26) + a);
	
	return String.fromCharCode(...encrypted);
}