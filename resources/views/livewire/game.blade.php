<div>
    <img 
        role="button"
        class="img-fluid border p-2"
        alt="rock"
        src="{{ asset('images/rock.jpg') }}" 
        style="width: 64px; height: 64px;" wire:click="choose('ROCK')">

    <img 
        role="button"
        class="img-fluid border p-2 mx-3"
        alt="photo" 
        src="{{ asset('images/paper.jpg') }}" 
        style="width: 64px; height: 64px;" wire:click="choose('PAPER')">

    <img 
        role="button"
        class="img-fluid border p-2" 
        alt="photo" 
        src="{{ asset('images/scissors.jpg') }}" 
        style="width: 64px; height: 64px;" wire:click="choose('SCISSORS')">
    <hr>

    <p>
        @if($resultClass)
            <b>Current Game Status:</b> 

            <span class="{{ $resultClass }}">
                <b>
                    {{ $result }}
                </b>
            </span>
        @else
            <b>Current Game Status:</b> 

            {{ $result }}
        @endif
    </p>
    <p>
        You threw: {{ $playerChoice }}
    </p>
    <p>
        Computer threw: {{ $computerChoice }}
    </p>
    <p>
        Total Throws: {{ $throwcount }}
    </p>
    <p>
        Wins: {{ $wincount }}
    </p>
    <p>
        Losses: {{ $losscount }}
    </p>
    <p>
        Draws: {{ $drawcount }}
    </p>

    <button 
        class="btn btn-success"
        wire:click="resetScore()">
        Reset
    </button>
</div>
