<style>
    div.input-bar {
        position: relative;

        width: 550px;
        height: 55px;

        border-radius: 15px;
    }

    div.input-bar input {
        width: 100%;
        height: 55px;
        padding: 0 20px 0;

        border-radius: 15px;
        border: .5px solid rgba(160, 160, 160, 0.25);

        transition: 5ms ease;
    }

    div.input-bar input:active {
        transform: translate(3px, 2.5px);
    }

    div.input-bar input:focus {
        outline: none;
    }
    
    div.input-bar button {
        position: absolute;
        right: 0;

        display: flex;
        justify-content: center;
        align-items: center;

        width: 55px;
        height: 55px;
        background-color: transparent;
        border: none;

        padding: 0 5px 0 0;
    }

    div.input-bar button ion-icon {
        width: 30px;
        height: 30px;
        color: rgba(110, 110, 110, 1);
    }

    div.input-bar .mask-bg {
        position: absolute;
        top: 3px;
        right: -3.5px;

        width: inherit;
        height: inherit;
        background-color: rgba(110, 110, 110, 0.3);

        border-radius: 15px;
    }
</style>

<div class="input-bar mt-3">
    <div class="mask-bg"></div>
    <form action="/info-section">
        @if ($input_value == null)
        <input class="position-absolute top-0 start-0"
        type="text" value="" placeholder="Hello, just find it!" name="search_bar">
        @else
        <input class="position-absolute top-0 start-0"
        type="text" value="{{ $input_value }}" placeholder="Hello, just find it!" name="search_bar">
        @endif
        <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
    </form>
</div>