<div style="padding-top:1%">
    <nav class="navbar navbar-right navbar-expand-sm navbar-dark bg-dark">
        <ul class="navbar-nav ms-auto">
			<li class="nav-item" style="margin-right:5px;">
            <select id="colourselect" class="form-select" size="1">
                <option value="All">All</option>
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Yellow">Yellow</option>
                <option value="Orange">Orange</option>
            </select>
        </li>
            <li class="nav-item"><button id="checkOut" onclick="window.location.href='{{route('scorders.checkout')}}'" type="button" style="margin-right:5px;" class="btn btn-primary navbar-btn center-block">Check Out</button></li>
            <li class="nav-item"><button id="emptycart" type="button" style="margin-right:5px;" class="btn btn-primary navbar-btn center-block">Empty Cart</button></li>
            <li class="nav-item"><span style="font-size:40px;margin-right:0px;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span></li>
            <li class="nav-item"><div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:5px;margin-right:0px;"></div></li>
            <li class="nav-item"><div class="navbar-text" style="font-size:14pt;margin-left:0px;">{{ $totalItems }} Item(s)</div></li>
        <ul>
    </nav>
</div>