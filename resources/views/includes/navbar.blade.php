<nav class="navbar navbar-static-top white-bg" role="navigation">


    <div class="navbar-collapse collapse" id="navbar">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <i class="fa fa-reorder"></i>
            </button>
            <a href="{{route('Dashboard')}}" class="navbar-brand" >SANSKRUTI</a>
        </div>
        <ul class="nav navbar-nav">

            <li>
                <a href="{{ route('Dashboard') }}" > <b style="color: #000000">Dashboard</b>

                </a>
            </li>
            <li>
                <a href="{{ route('Inventory') }}"> <b style="color: #000000">Inventory List</b>

                </a>
            </li>
            <li>
                <a href="{{ route('Billing') }}"> <b style="color: #000000">Billing</b>

                </a>
            </li>
            <li>
                <a href="{{ route('ProductEntry') }}"><b style="color: #000000">Entry</b>

                </a>
            </li>
            <li>
                <a href="{{ route('History') }}"><b style="color: #000000">History</b>

                </a>
            </li>

            <li>
                <a href="{{ route('Employee') }}"><b style="color: #000000">Employees</b>

                </a>
            </li>

        </ul>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="{{ url('') }}">
                    Log out
                </a>
            </li>
        </ul>
    </div>
</nav>