<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Dating Tonight</title>

    <!-- Icons font CSS-->
    <link href="/templates/datingtonight/formFinding/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/templates/datingtonight/formFinding/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/templates/datingtonight/formFinding/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/templates/datingtonight/formFinding/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/templates/datingtonight/formFinding/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img-1 p-t-200 p-b-120">
        <div class="wrapper wrapper--w900">
            <div class="card card-4">
                <div class="card-body">
                    <ul class="tab-list">
                        <li class="tab-list__item active">
                            <a class="tab-list__link" href="#tab1" data-toggle="tab">Basic</a>
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab2" data-toggle="tab">Appearance</a>
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab3" data-toggle="tab">Life Style</a>
                        </li>
                        <li class="tab-list__item">
                            <a class="tab-list__link" href="#tab4" data-toggle="tab">Culture</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form method="POST" action="#">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Gender:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="driver-age">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option selected="selected">Anything</option>
                                                    
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">City:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="car-group">
                                                    <option selected="selected">Group S-car</option>
                                                    <option>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-in:</label>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-out:</label>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">travellers:</label>
                                            <div class="input-group-icon" id="js-select-special">
                                                <input class="input--style-1 input--style-1-small" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                                <i class="zmdi zmdi-chevron-down input-icon"></i>
                                            </div>
                                            <div class="dropdown-select">
                                                <ul class="list-room">
                                                    <li class="list-room__item">
                                                        <span class="list-room__name">Room 1</span>
                                                        <ul class="list-person">
                                                            <li class="list-person__item">
                                                                <span class="name">Adults</span>
                                                                <div class="quantity quantity1">
                                                                    <span class="minus">-</span>
                                                                    <input class="inputQty" type="number" min="0" value="1">
                                                                    <span class="plus">+</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-person__item">
                                                                <span class="name">Children</span>
                                                                <div class="quantity quantity2">
                                                                    <span class="minus">-</span>
                                                                    <input class="inputQty" type="number" min="0" value="0">
                                                                    <span class="plus">+</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="list-room__footer">
                                                    <a href="#" id="btn-add-room">Add room</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-submit" type="submit">search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <form method="POST" action="#">
                                <div class="input-group input-group-big">
                                    <label class="label">location:</label>
                                    <input class="input--style-1" type="text" name="location" placeholder="Destination, hotel name" required="required">
                                    <i class="zmdi zmdi-search input-group-symbol"></i>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">driver age:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="driver-age">
                                                    <option>23</option>
                                                    <option>24</option>
                                                    <option selected="selected">25</option>
                                                    <option>26</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">car group:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="car-group">
                                                    <option selected="selected">Group S-car</option>
                                                    <option>Group 1</option>
                                                    <option>Group 2</option>
                                                    <option>Group 3</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">pick up:</label>
                                            <input class="input--style-1 js-single-datepicker" type="text" name="pickup" placeholder="mm/dd/yyyy" data-drop="1">
                                            <div class="dropdown-datepicker" id="dropdown-datepicker1"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">time:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="time-pickup">
                                                    <option selected="selected">10:00 AM</option>
                                                    <option>5:00 AM</option>
                                                    <option>6:00 AM</option>
                                                    <option>7:00 AM</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">drop off:</label>
                                            <input class="input--style-1 js-single-datepicker" type="text" name="dropoff" placeholder="mm/dd/yyyy" data-drop="2">
                                            <div class="dropdown-datepicker" id="dropdown-datepicker2"></div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">time:</label>
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="time-dropoff">
                                                    <option selected="selected">10:00 AM</option>
                                                    <option>5:00 AM</option>
                                                    <option>6:00 AM</option>
                                                    <option>7:00 AM</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-submit m-t-0" type="submit">search</button>
                            </form>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <form method="POST" action="#">
                                <div class="input-group input-group-big">
                                    <label class="label">origin:</label>
                                    <input class="input--style-1" type="text" name="origin" placeholder="City or airport" required="required">
                                    <i class="zmdi zmdi-search input-group-symbol"></i>
                                </div>
                                <div class="input-group input-group-big">
                                    <label class="label">destination:</label>
                                    <input class="input--style-1" type="text" name="destination" placeholder="City or airport" required="required">
                                    <i class="zmdi zmdi-search input-group-symbol"></i>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Departing:</label>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start-2">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">returning:</label>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="radio-row">
                                    <label class="radio-container m-r-45">First Class
                                        <input type="radio" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                    <label class="radio-container m-r-45">Business
                                        <input type="radio" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                    <label class="radio-container">Economy
                                        <input type="radio" checked="checked" name="class">
                                        <span class="radio-checkmark"></span>
                                    </label>
                                </div>
                                <button class="btn-submit m-t-35" type="submit">search</button>
                            </form>
                        </div>
                        <div class="tab-pane active" id="tab4">
                            <form method="POST" action="#">
                                <div class="input-group input-group-big">
                                    <label class="label">where:</label>
                                    <input class="input--style-1" type="text" name="address" placeholder="City, region or specific hotel" required="required">
                                    <i class="zmdi zmdi-search input-group-symbol"></i>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-in:</label>
                                            <input class="input--style-1" type="text" name="check-in" placeholder="mm/dd/yyyy" id="input-start">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">check-out:</label>
                                            <input class="input--style-1" type="text" name="check-out" placeholder="mm/dd/yyyy" id="input-end">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">travellers:</label>
                                            <div class="input-group-icon" id="js-select-special">
                                                <input class="input--style-1 input--style-1-small" type="text" name="traveller" value="1 Adult, 0 Children, 1 Room" disabled="disabled" id="info">
                                                <i class="zmdi zmdi-chevron-down input-icon"></i>
                                            </div>
                                            <div class="dropdown-select">
                                                <ul class="list-room">
                                                    <li class="list-room__item">
                                                        <span class="list-room__name">Room 1</span>
                                                        <ul class="list-person">
                                                            <li class="list-person__item">
                                                                <span class="name">Adults</span>
                                                                <div class="quantity quantity1">
                                                                    <span class="minus">-</span>
                                                                    <input class="inputQty" type="number" min="0" value="1">
                                                                    <span class="plus">+</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-person__item">
                                                                <span class="name">Children</span>
                                                                <div class="quantity quantity2">
                                                                    <span class="minus">-</span>
                                                                    <input class="inputQty" type="number" min="0" value="0">
                                                                    <span class="plus">+</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="list-room__footer">
                                                    <a href="#" id="btn-add-room">Add room</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn-submit" type="submit">search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/templates/datingtonight/formFinding/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="/templates/datingtonight/formFinding/vendor/select2/select2.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/datepicker/moment.min.js"></script>
    <script src="/templates/datingtonight/formFinding/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="/templates/datingtonight/formFinding/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
