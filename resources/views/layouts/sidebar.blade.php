<div id="sidebar" class="bg-maroon text-white fixed top-0 left-0 transition-transform duration-300 ease-in-out"
    style="width: 220px; min-height: 100vh;">
    <div class="p-4">
        <!-- Menu Buttons and Form -->
        <div class="button-menu p-3 bg-light-gray rounded">
            <a href="{{ url('/user_sheet') }}" class="btn btn-light text-left">Dashboard</a>
            <button class="btn btn-toggle" id="toggleButton">
                C3MR
            </button>
            <div id="sheetCodeContainer" class="sheet-code-container hidden">
                @foreach($sheetCodes as $code)
                    <a class="btn btn-sheet-code" href="?sheet_code={{ $code }}" {{ request('sheet_code') == $code ? 'selected' : '' }}>
                        {{ $code }}
                    </a>
                @endforeach
            </div>
            <a href="{{ route('billper') }}" class="btn btn-light text-left">BillPer</a>
            <a href="{{ route('guide') }}" class="btn btn-light text-left">Guide</a>
        </div>

        <!-- Log Out button -->
        <form method="POST" action="{{ route('logout') }}" class="logout-form">
            @csrf
            <a class="btn logout-button centered-text" href="#" onclick="event.preventDefault();
                        this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggleButton = document.getElementById('toggleButton');
        var sheetCodeContainer = document.getElementById('sheetCodeContainer');

        toggleButton.addEventListener('click', function () {
            sheetCodeContainer.classList.toggle('hidden');
        });
    });
</script>

<style>
    .btn-light,
    .logout-button {
        display: block;
        width: 100%;
        text-align: left;
        background-color: #dad7d7;
        /* Darker light gray background for buttons */
        color: #333;
        /* Darker text color for contrast */
        border: 1px solid #8a8a8a;
        /* Darker gray border */
        border-radius: 0;
        /* Squared corners */
        padding: 0.5rem;
        /* Padding inside the button */
        margin-top: 0.5rem;
        /* Margin between buttons */
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-light:hover,
    .logout-button:hover {
        background-color: #191970;
        /* Darker background on hover */
        border-color: #191970;
        /* Darker border on hover */
        color: #FFFFFF;
        /* White text color on hover */
    }

    .logout-button {
        background-color: #FFFFFF;
        /* Darker background color for Log Out button */
        color: black;
        /* White text color */
        text-align: center;
        /* Center the text */
        width: 100%;
        /* Full width */
        margin: 0.5rem 0;
        /* Margin top and bottom */
        border: 1px solid #191970;
        border-radius: 50px;
        /* Rounded corners */
        padding: 0.5rem 0;
        /* Padding top and bottom */
    }

    .logout-form {
        position: absolute;
        bottom: 0;
        left: 50%;
        /* Center horizontally */
        transform: translateX(-50%);
        /* Adjust to center */
        width: calc(100% - 1rem);
        /* Full width minus padding */
        padding: 0.5rem;
        text-align: center;
        /* Center the text */
    }

    .button-menu {
        background-color: #f0f0f0;
        /* Light gray background for button menu */
        border-radius: 0;
        /* Squared corners */
        border: 1px solid #8a8a8a;
        /* Border for button menu */
        position: relative;
        /* Ensure the dropdown is positioned relative to this container */
    }

    .btn-toggle {
        display: block;
        width: 100%;
        text-align: left;
        background-color: #dad7d7;
        /* Darker light gray background for the toggle button */
        color: #333;
        /* Darker text color for contrast */
        border: 1px solid #8a8a8a;
        /* Darker gray border */
        border-radius: 0;
        /* Squared corners */
        padding: 0.75rem;
        /* Padding inside the toggle button */
        margin-top: 0.5rem;
        /* Margin between the toggle button and sheet code buttons */
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-toggle:hover {
        background-color: #191970;
        /* Slightly darker gray on hover */
        border-color: #7a7a7a;
        /* Darker border on hover */
    }

    .sheet-code-container {
        background-color: #ffffff;
        /* White background for sheet code container */
        padding: 0.5rem;
        border-radius: 0;
        /* Squared corners */
        margin-top: 0.5rem;
        max-height: 12rem;
        /* Maximum height for the container */
        overflow-y: auto;
        /* Enable vertical scrolling if content exceeds max height */
    }

    .btn-sheet-code {
        background-color: black;
        /* Dark blue background for sheet code buttons */
        color: #fff;
        /* White text color for contrast */
        border: 1px solid #8a8a8a;
        /* Darker gray border */
        border-radius: 0;
        /* Squared corners */
        padding: 0.5rem;
        /* Padding inside sheet code buttons */
        margin-top: 0.25rem;
        /* Margin between sheet code buttons */
        transition: background-color 0.3s, border-color 0.3s;
        text-align: left;
        display: block;
        width: 100%;
        font-size: 0.875rem;
        /* Adjusted font size */
    }

    .btn-sheet-code:hover {
        background-color: #00008B;
        /* Slightly darker gray on hover */
        border-color: #7a7a7a;
        /* Darker border on hover */
    }

    .nav-buttons .btn-small {
        display: block;
        width: 100%;
        text-align: left;
        background-color: #d3d3d3;
        /* Light gray background for small buttons */
        color: #333;
        /* Darker text color for contrast */
        border: 1px solid #8a8a8a;
        /* Darker gray border */
        border-radius: 0;
        /* Squared corners */
        padding: 0.25rem 0.5rem;
        /* Smaller padding for small buttons */
        margin-top: 0.25rem;
        /* Margin between small buttons */
        font-size: 0.75rem;
        /* Smaller font size */
        transition: background-color 0.3s, border-color 0.3s;
    }

    .nav-buttons .btn-small:hover {
        background-color: #c0c0c0;
        /* Slightly darker gray on hover */
        border-color: #7a7a7a;
        /* Darker border on hover */
    }

    .hidden {
        display: none;
    }

    .btn-sheet-code[selected] {
        background-color: #d0d0d0;
        /* Light gray background for selected button */
        color: #333;
        /* Darker text color for contrast */
    }
</style>