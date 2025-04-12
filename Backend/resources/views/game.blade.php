<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Game</title>
    <style>
        *{
            padding: 10px;
            margin: 10px;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .container{
            background-color: bisque;
            border: solid 2px grey;
            width: 400px;
            border-radius: 10px;
        }

        h1{
            width: bold;
            text-align: center;
        }
        button{
            border: solid 1px black;
            border-radius: 10px;
            color:black;
            display:flex;
            justify-content:flex-end;
            font-weight: bold;
            background-color: aliceblue;
        }
        span{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
<h1>Dummy Game</h1>

<span id="game-info" style="display: none;">Score: <span id="score"></span></span>
<button id="start-button" onclick="startGame()">Start</button>
<button id="end-button" style="display: none;" onclick="endGame()">End</button>

</div>
<script>
    const state = {
        running: false,
        score: 0,
    };

    function gameTick() {
        if (!state.running) {
            return;
        }
        state.score += Math.random();
        document.getElementById('score').innerText = `${state.score}`;
        setTimeout(() => gameTick(), 1000);
    }

    function startGame() {
        state.running = true;
        state.score = 0;
        document.getElementById('start-button').style.display = 'none';
        document.getElementById('end-button').style.display = 'block';
        document.getElementById('game-info').style.display = 'block';
        gameTick();
    }

    function endGame() {
        state.running = false;
        window.parent.postMessage({
            event_type: "game_run_end",
            score: state.score,
        });
        document.getElementById('start-button').style.display = 'block';
        document.getElementById('end-button').style.display = 'none';
    }

</script>

</body>
</html>
