@extends('layouts.app')

@section('content')
<center>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="container">
                    <div class="leftSide">
                        <div class="list-group">
                            <a href="index.php?p=wsp_direct" class="list-group-item list-group-item-action">wspDirect()</a>
                            <a href="index.php?p=/modules/databases/kcalendar" class="list-group-item list-group-item-action">kCalendarEdit()</a>
                            <a href="index.php?p=radiorowdie" class="list-group-item list-group-item-action">radioRowdie()</a>
                            <a href="index.php?p=games" class="list-group-item list-group-item-action">games()</a>
                            <a href="index.php?p=knotes" class="list-group-item list-group-item-action">kNotes()</a>
                            <a href="index.php?p=contactos" class="list-group-item list-group-item-action">contactos()</a>
                            <a href="index.php?p=terminal" class="list-group-item list-group-item-action">terminal()</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</center>
@endsection