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

    <div class="mb-2">
        @if($classColor)
            <b>Current Game Status:</b> <br>

            <span class="{{ $classColor }}">
                <b>
                    {{ $result }}
                </b>
            </span>
        @else
            <b>Current Game Status:</b> <br>

            {{ $result }}
        @endif
    </div>
    <div class="mb-2">
        You threw: <br> 

        {{ $playerChoice }}
    </div>
    <div class="mb-2">
        Computer threw: <br> 

        {{ $computerChoice }}
    </div>
    <div class="mb-2">
        Total Throws: <br>

        {{ $throwcount }}
    </div>

    <div class="d-flex justify-content-center">
        <div class="mb-2">
            Wins: <br>

            {{ $wincount }}
        </div>
        <div class="mb-2 px-4">
            Losses: <br>

            {{ $losscount }}
        </div>
        <div class="mb-2">
            Draws: <br>

            {{ $drawcount }}
        </div>
    </div>

    <button 
        class="btn btn-success"
        wire:click="resetScore()">
        Reset
    </button>
</div>
