<?php require __DIR__ ."/main/header.php"?>

<section class="page-header page-header-dark bg-secondary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h1 class="text-white">Flights - One Way</h1>
        </div>
        <div class="col-md-4">
          <ul class="breadcrumb justify-content-start justify-content-md-end mb-0 text-white">
            <li><a href="index.html">Home</a></li>
            <li><a href="booking-flights.html">Flights</a></li>
            <li class="active">Flights One Way</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Content
  ============================================= -->
  <div id="content">
    <section class="container">
        <div class="row">
          <div class="col mb-2">
            <form id="bookingFlight" method="post">
              <div class="mb-3">
                <div class="custom-control custom-radio custom-control-inline">
                  <input id="oneway" name="flight-trip" class="custom-control-input" checked="" required type="radio">
                  <label class="custom-control-label" for="oneway">One Way</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input id="roundtrip" name="flight-trip" class="custom-control-input" required type="radio">
                  <label class="custom-control-label" for="roundtrip">Round Trip</label>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 col-lg-2 form-group">
                  <input type="text" class="form-control" id="flightFrom" required placeholder="From">
                  <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                <div class="col-md-4 col-lg-2 form-group">
                  <input type="text" class="form-control" id="flightTo" required placeholder="To">
                  <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                <div class="col-md-4 col-lg-2 form-group">
                  <input id="flightDepart" type="text" class="form-control" required placeholder="Depart Date">
                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                <div class="col-md-4 col-lg-2 form-group">
                  <input id="flightReturn" type="text" class="form-control" required placeholder="Return Date">
                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                <div class="col-md-4 col-lg-2 travellers-class form-group">
                  <input type="text" id="flightTravellersClass" class="travellers-class-input form-control" name="flight-travellers-class" placeholder="Travellers, Class" readonly required onkeypress="return false;">
                  <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                  <div class="travellers-dropdown">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightAdult-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightAdult-travellers" class="qty-spinner form-control" value="1" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightAdult-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Children <small class="text-muted">(2-12 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightChildren-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightChildren-travellers" class="qty-spinner form-control" value="0" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightChildren-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Infants <small class="text-muted">(Below 2 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightInfants-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="flightInfants-travellers" class="qty-spinner form-control" value="0" readonly>
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightInfants-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="mt-2">
                    <div class="mb-3">
                      <div class="custom-control custom-radio">
                        <input id="flightClassEconomic" name="flight-class" class="flight-class custom-control-input" value="0" checked="" required type="radio">
                        <label class="custom-control-label" for="flightClassEconomic">Economic</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassPremiumEconomic" name="flight-class" class="flight-class custom-control-input" value="1" required type="radio">
                        <label class="custom-control-label" for="flightClassPremiumEconomic">Premium Economic</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassBusiness" name="flight-class" class="flight-class custom-control-input" value="2" required type="radio">
                        <label class="custom-control-label" for="flightClassBusiness">Business</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="flightClassFirstClass" name="flight-class" class="flight-class custom-control-input" value="3" required type="radio">
                        <label class="custom-control-label" for="flightClassFirstClass">First Class</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                  </div>
                </div>
                <div class="col-md-4 col-lg-2 form-group">
                  <button class="btn btn-primary btn-block" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <aside class="col-md-3">
            <div class="bg-light shadow-md rounded p-3">
              <h3 class="text-5">Filter</h3>
              <div class="accordion accordion-alternate style-2" id="toggleAlternate">
                <div class="card">
                  <div class="card-header" id="stops">
                    <h5 class="mb-0"> <a href="#" data-toggle="collapse" data-target="#togglestops" aria-expanded="true" aria-controls="togglestops">No. of Stops</a> </h5>
                  </div>
                  <div id="togglestops" class="collapse show" aria-labelledby="stops">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="nonstop" name="stop" class="custom-control-input">
                        <label class="custom-control-label" for="nonstop">Non Stop</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="1stop" name="stop" class="custom-control-input">
                        <label class="custom-control-label" for="1stop">1 Stop</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="2stop" name="stop" class="custom-control-input">
                        <label class="custom-control-label" for="2stop">2+ Stop</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="departureTime">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#toggleDepartureTime" aria-expanded="true" aria-controls="toggleDepartureTime">Departure Time</a> </h5>
                  </div>
                  <div id="toggleDepartureTime" class="collapse show" aria-labelledby="departureTime">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox clearfix">
                        <input type="checkbox" id="earlyMorning" name="departureTime" class="custom-control-input">
                        <label class="custom-control-label" for="earlyMorning">Early Morning</label>
                        <small class="text-muted float-right">12am - 8am</small> </div>
                      <div class="custom-control custom-checkbox clearfix">
                        <input type="checkbox" id="morning" name="departureTime" class="custom-control-input">
                        <label class="custom-control-label" for="morning">Morning</label>
                        <small class="text-muted float-right">8am - 12pm</small> </div>
                      <div class="custom-control custom-checkbox clearfix">
                        <input type="checkbox" id="midDay" name="departureTime" class="custom-control-input">
                        <label class="custom-control-label" for="midDay">Mid-Day</label>
                        <small class="text-muted float-right">12pm - 4pm</small> </div>
                      <div class="custom-control custom-checkbox clearfix">
                        <input type="checkbox" id="evening" name="departureTime" class="custom-control-input">
                        <label class="custom-control-label" for="evening">Evening</label>
                        <small class="text-muted float-right">4pm - 8pm</small> </div>
                      <div class="custom-control custom-checkbox clearfix">
                        <input type="checkbox" id="night" name="departureTime" class="custom-control-input">
                        <label class="custom-control-label" for="night">Night</label>
                        <small class="text-muted float-right">8pm - 12am</small> </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="price">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#togglePrice" aria-expanded="true" aria-controls="togglePrice">Price</a> </h5>
                  </div>
                  <div id="togglePrice" class="collapse show" aria-labelledby="price">
                    <div class="card-body">
                      <p>
                        <input id="amount" type="text" readonly class="form-control border-0 bg-transparent p-0">
                      </p>
                      <div id="slider-range"></div>
                    </div>
                  </div>
                </div>

                <!-- side bar result  -->
                <div class="card">
                  <div class="card-header" id="airlines">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#toggleAirlines" aria-expanded="true" aria-controls="toggleAirlines">Airlines</a> </h5>
                  </div>
                  <div id="toggleAirlines" class="collapse show" aria-labelledby="airlines">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="asianaAir" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="asianaAir">Asiana Airlines</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="americanAir" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="americanAir">American Airlines</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="airCanada" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="airCanada">Air Canada</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="airIndia" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="airIndia">Air India</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="jetAirways" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="jetAirways">Jet Airways</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="spicejet" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="spicejet">Spicejet</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="indiGo" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="indiGo">IndiGo</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="multiple" name="airlines" class="custom-control-input">
                        <label class="custom-control-label" for="multiple">Multiple Airlines</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>

          <?php if (isset($_POST) && !empty($_POST['flightFrom']) && !empty($_POST['flightFrom'])): ?>
          <!-- search result  -->
          <div class="col-md-9 mt-4 mt-md-0">
            <div class="bg-light shadow-md rounded py-4">
              <div class="mx-3 mb-3 text-center">
                <h2 class="text-6">Delhi <small class="mx-2">to</small>Sydney</h2>
              </div>
              <div class="text-1 bg-light-3 border border-right-0 border-left-0 py-2 px-3">
                <div class="row">
                  <div class="col col-sm-2 text-center"><span class="d-none d-sm-block">Airline</span></div>
                  <div class="col col-sm-2 text-center">Departure</div>
                  <div class="col-sm-2 text-center d-none d-sm-block">Duration</div>
                  <div class="col col-sm-2 text-center">Arrival</div>
                  <div class="col col-sm-2 text-right">Price</div>
                </div>
              </div>
              <div class="flight-list">
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$980</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-1" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-1" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$980 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="fourth" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent">
                              <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/jetairways.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">JetAirways</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$775</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-2" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-2" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$775 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab2" data-toggle="tab" href="#first2" role="tab" aria-controls="first2" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab2" data-toggle="tab" href="#second2" role="tab" aria-controls="second2" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab2" data-toggle="tab" href="#third2" role="tab" aria-controls="third2" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab2" data-toggle="tab" href="#fourth2" role="tab" aria-controls="fourth2" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent2">
                              <div class="tab-pane fade show active" id="first2" role="tabpanel" aria-labelledby="first-tab2">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/jetairways.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">JetAirways</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second2" role="tabpanel" aria-labelledby="second-tab2">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third2" role="tabpanel" aria-labelledby="third-tab2">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth2" role="tabpanel" aria-labelledby="fourth-tab2">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/spicejet.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">SpiceJet</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$899</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-3" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-3" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$899 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab3" data-toggle="tab" href="#first3" role="tab" aria-controls="first3" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab3" data-toggle="tab" href="#second3" role="tab" aria-controls="second3" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab3" data-toggle="tab" href="#third3" role="tab" aria-controls="third3" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab3" data-toggle="tab" href="#fourth3" role="tab" aria-controls="fourth3" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent3">
                              <div class="tab-pane fade show active" id="first3" role="tabpanel" aria-labelledby="first-tab3">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/spicejet.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">SpiceJet</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second3" role="tabpanel" aria-labelledby="second-tab3">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third3" role="tabpanel" aria-labelledby="third-tab3">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth3" role="tabpanel" aria-labelledby="fourth-tab3">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/airindia.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">AirIndia</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$928</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-4" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-4" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$928 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab4" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab4" data-toggle="tab" href="#first4" role="tab" aria-controls="first4" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab4" data-toggle="tab" href="#second4" role="tab" aria-controls="second4" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab4" data-toggle="tab" href="#third4" role="tab" aria-controls="third4" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab4" data-toggle="tab" href="#fourth4" role="tab" aria-controls="fourth4" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent4">
                              <div class="tab-pane fade show active" id="first4" role="tabpanel" aria-labelledby="first-tab4">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/airindia.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">AirIndia</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second4" role="tabpanel" aria-labelledby="second-tab4">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third4" role="tabpanel" aria-labelledby="third-tab4">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth4" role="tabpanel" aria-labelledby="fourth-tab4">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/goair.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">GoAir</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$775</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-5" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-5" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$775 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab5" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab5" data-toggle="tab" href="#first5" role="tab" aria-controls="first5" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab5" data-toggle="tab" href="#second5" role="tab" aria-controls="second5" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab5" data-toggle="tab" href="#third5" role="tab" aria-controls="third5" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab5" data-toggle="tab" href="#fourth5" role="tab" aria-controls="fourth5" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent5">
                              <div class="tab-pane fade show active" id="first5" role="tabpanel" aria-labelledby="first-tab5">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/goair.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">GoAir</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second5" role="tabpanel" aria-labelledby="second-tab5">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third5" role="tabpanel" aria-labelledby="third-tab5">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth5" role="tabpanel" aria-labelledby="fourth-tab5">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
                <div class="flight-item">
                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                    <div class="col col-sm-2 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">23:00</span> <small class="text-muted d-none d-sm-block">Delhi</small> </div>
                    <div class="col-sm-2 text-center d-none d-sm-block time-info"> <span class="text-3">18h 55m</span> <small class="text-muted d-none d-sm-block">Non Stop</small> </div>
                    <div class="col col-sm-2 text-center time-info"> <span class="text-4">18:15</span> <small class="text-muted d-none d-sm-block">Sydney</small> </div>
                    <div class="col col-sm-2 text-right text-dark text-6 price">$966</div>
                    <div class="col-12 col-sm-2 text-center ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                    <div class="col col-sm-auto col-lg-2 ml-auto mt-1 text-1 text-center"><a data-toggle="modal" data-target="#flight-6" href="">Flight Details</a></div>
                  </div>
                  <!-- Flight Details Modal Dialog
                  ============================================= -->
                  <div id="flight-6" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Flight Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="flight-details">
                            <div class="row mb-4">
                              <div class="col-12 col-sm-9 col-lg-8">
                                <div class="row align-items-center trip-title mb-3">
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">New Delhi</h5>
                                  </div>
                                  <div class="col-auto text-10 text-black-50 text-center trip-arrow">➝</div>
                                  <div class="col col-sm-auto text-center text-sm-left">
                                    <h5 class="m-0 trip-place">Sydney</h5>
                                  </div>
                                </div>
                                <div class="row align-items-center">
                                  <div class="col col-sm-auto"><span class="text-4">15 Jun 18, Sat</span></div>
                                  <div class="col-auto"><span class="badge badge-success py-1 px-2 font-weight-normal text-1">Refundable</span></div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 col-lg-2 text-center text-sm-right mt-3 mt-sm-0"> <span class="text-dark text-7">$966 </span> <span class="text-1 text-muted d-block">(Per Adult)</span> <span class="text-1 text-danger d-block">2 seat(s) left</span></div>
                              <div class="col-12 col-sm-3 col-lg-2 text-right ml-auto btn-book"> <a href="booking-flights-confirm-details.html" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i> <span class="d-none d-lg-block">Book</span></a> </div>
                            </div>
                            <ul class="nav nav-tabs" id="myTab6" role="tablist">
                              <li class="nav-item"> <a class="nav-link active" id="first-tab6" data-toggle="tab" href="#first6" role="tab" aria-controls="first6" aria-selected="true">Itinerary</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="second-tab6" data-toggle="tab" href="#second6" role="tab" aria-controls="second6" aria-selected="false">Fare Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="third-tab6" data-toggle="tab" href="#third6" role="tab" aria-controls="third6" aria-selected="false">Baggage Details</a> </li>
                              <li class="nav-item"> <a class="nav-link" id="fourth-tab6" data-toggle="tab" href="#fourth6" role="tab" aria-controls="fourth6" aria-selected="false">Cancellation Fee</a> </li>
                            </ul>
                            <div class="tab-content my-3" id="myTabContent6">
                              <div class="tab-pane fade show active" id="first6" role="tabpanel" aria-labelledby="first-tab6">
                                <div class="row flex-row pt-4 px-md-4">
                                  <div class="col-12 col-sm-3 text-center d-lg-flex company-info"> <span class="align-middle"><img class="img-fluid" alt="" src="assets/images/brands/flights/indigo.png"> </span> <span class="align-middle ml-lg-2"> <span class="d-block text-1 text-dark">IndiGo</span> <small class="text-muted d-block">6E-2726</small> </span> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">23:00</span> <small class="text-muted d-block">Indira Gandhi Intl, New Delhi</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark">18h 55m</span> <small class="text-muted d-block">Duration</small> </div>
                                  <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">18:15</span> <small class="text-muted d-block">Kingsford Smith Airport, Sydney</small> </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="second6" role="tabpanel" aria-labelledby="second-tab6">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <tbody>
                                      <tr>
                                        <td>Base Fare</td>
                                        <td class="text-right">$815</td>
                                      </tr>
                                      <tr>
                                        <td>Fees &amp; Surcharge</td>
                                        <td class="text-right">$165</td>
                                      </tr>
                                      <tr>
                                        <td>Total</td>
                                        <td class="text-right">$980</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="third6" role="tabpanel" aria-labelledby="third-tab6">
                                <div class="table-responsive-md">
                                  <table class="table table-hover table-bordered bg-light">
                                    <thead>
                                      <tr>
                                        <th>&nbsp;</th>
                                        <td class="text-center">Cabin</td>
                                        <td class="text-center">Check-In</td>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Adult</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Child</td>
                                        <td class="text-center">7 Kg</td>
                                        <td class="text-center">15 Kg</td>
                                      </tr>
                                      <tr>
                                        <td>Infant</td>
                                        <td class="text-center">0 Kg</td>
                                        <td class="text-center">0 Kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="fourth6" role="tabpanel" aria-labelledby="fourth-tab6">
                                <table class="table table-hover table-bordered bg-light">
                                  <thead>
                                    <tr>
                                      <th>&nbsp;</th>
                                      <td class="text-center">Per Passenger Fee</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>24 hrs - 365 days</td>
                                      <td class="text-center">$250 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>2-24 hours</td>
                                      <td class="text-center">$350 + $50</td>
                                    </tr>
                                    <tr>
                                      <td>0-2 hours</td>
                                      <td class="text-center">$550 + $50</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p class="font-weight-bold">Terms & Conditions</p>
                                <ul>
                                  <li>The penalty is subject to 4 hrs before departure. No Changes are allowed after that.</li>
                                  <li>The charges are per passenger per sector.</li>
                                  <li>Partial cancellation is not allowed on tickets booked under special discounted fares.</li>
                                  <li>In case of no-show or ticket not cancelled within the stipulated time, only statutory taxes are refundable subject to Service Fee.</li>
                                  <li>No Baggage Allowance for Infants</li>
                                  <li>Airline penalty needs to be reconfirmed prior to any amendments or cancellation.</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Flight Details Modal Dialog end -->
                </div>
              </div>
              
              <!-- Pagination
              ============================================= -->
              <ul class="pagination justify-content-center mt-4 mb-0">
                <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a> </li>
                <li class="page-item active"> <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a> </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"> <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a> </li>
              </ul><!-- Pagination end -->
              
            </div>
          </div>
          <?php else: ?>
            <!-- LET THE NO FLIGHT RETURNED BE HERE  -->
          <?php endif; ?>
        </div>
     </section>
  </div>
  <!-- Content end -->
  
<?php require __DIR__ . "/main/footer.php";?>