@extends('template.master')
@section('content')
 <div class="clearfix"></div>
    <div class="full_width destinaion_sorting_section">
      <div class="container">
        <div class="row space_100"> 
          <!-- left sidebar start --> 
          <!-- left sidebar end --> 
          <!-- right main start -->
          <div class="col-lg-12">
            <div class="tour_package_booking_section"> 
              <!-- package tabs start -->
              <div id="tour_booking_tabs"> 
                <!-- tabs start -->
                <div class="tour_booking_tabs">
                  <ul>
                    <li><a href="#booking_details">Booking Details</a></li>
                    <li><a href="#personal_info">Personal Info</a></li>
                    <li><a href="#payment_info">Payment Info</a></li>
                    <li><a href="#confirmation">Confirmation</a></li>
                  </ul>
                </div>
                <!-- tabs end --> 
                <!-- booking_details Start -->
                <div id="booking_details" class="main_content_area hotel_main_content">
                  <div class="inner_container"> 
                    <!--  tab inner section two Start -->
                    <div class="tab_inner_section flight_inner_section">
                      <div class="heading_tab_inner">
                        <h5>Book Details</h5>
                      </div>
                      <div class="tab_inner_body full_width">
                        <div class="flight_review_area full_width">
                          <div class="col-lg-10 col-md-9"> 
                            <!--  review area start -->
                            <div class="row">
                              <div class="col-lg-4 col-md-4"> <img src="{!! asset('images/'.$getInfoFutsal->file_img) !!}" alt="review image"> </div>
                              <div class="col-lg-8 col-md-8">
                                <div class="review_content">
                                  <div class="top_head_bar">
                                    <h4>{!! $getInfoFutsal->futsal_name !!}</h4>
                                    <span class="country_span">{!! $getInfoFutsal->kota !!}</span></div>
                                  <div class="review_star_cover">
                                    Lapangan {!! $getInfoLapangan->court !!}
                                    </div>
                                </div>
                              </div>
                              <!--  review area end --> 
                            </div>
                            <!-- row --> 
                          </div>
                          <!--  col-lg-9 -->
                          
                          <div class="right_includes_flight col-lg-2 col-md-3">
                            <div class="doller_left booking_id">
							@foreach ($get_book_order as $book)
								<h5>INV {!! $book ->auto_increment !!}</h2>
							@endforeach
                            </div>
                          </div>
                        </div>
                        <!-- tab include area Start -->
                        
                        <div class="inludes_section flight_schedule_section"> <span class="emirates_button address_info">Alamat</span>
                          <div class="main_section_address">
                            <p>
								{!! $getInfoFutsal->address !!}
                            </p>
                          </div>
                        </div>
                        <!-- tab include area End --> 
                        <!-- tab include area Start -->
                      <div class="inludes_section flight_schedule_section"> <span class="emirates_button address_info">Waktu Bermain</span>
                          <div class="main_section_flight">
                            <div class="country_section_box">
                              <h4>{!! $jamAwal !!}</h4>
                              <p class="shedule_d">Tanggal {!! $tgl !!}</p>
                            </div>
                            <div class="middle_flight_section">
                              <h5>Total Main</h5>
                              <p><!-- <i class="fa fa-clock-o"></i> --> {!! $jamTotal !!} Jam</p>
                            </div>
                             <div class="country_section_box">
                              <h4>{!! $jamAkhir !!}</h4>
                              <p class="shedule_d">Tanggal {!! $tgl !!}</p>
                            </div>
                          </div>
                        </div>
                        <!-- tab include area End --> 
                      </div>
                      <!--  tab inner body  End--> 
                      
                    </div>
                    <!-- tab inner section end --> 
						<div class="checkbox_book top_margin">
                          <input id="check1" type="checkbox" name="check" value="check1">
                          <label for="check1">Sudah bener ya dek !!</label>
                        </div>
                  </div>
                  <!--  inner_container --> 
                  <!-- total row Start-->
                  <div class="full_width total_price_row">
                    <p>Total  </p>
                    <h2>Rp. {!! $jmlBayar !!}.00</h2>
                  </div>
                  <!-- total row End--> 
                  <!-- proceed button -->
                  <div class="full_width t_align_c">
                    <a href="#payment_info"><button class="btn_blue proceed_buttton btns">proceed to next step</button></a>
                  </div>
                  <!-- proceed button --> 
                </div>
                <!-- booking_details End --> 
                <!-- personal_info Start -->
                <div id="personal_info" class="main_content_area hotel_main_content"> 
                  <!--  tab inner section three Start -->
                  <div class="inner_container">
                    <form class="package_booking_main">
                      <div class="tab_inner_section inner_section_2 flight_inner_section">
                        <div class="tab_inner_body full_width"> 
                          <!-- package_booking_form start -->
                          <div class="package_booking_form">
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="First Name" name="firstname" class="booking_input" value="{!! $getInfoCus->name !!}">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Last Name" name="lastname" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="email" placeholder="Email" name="email" class="booking_input" value="{!! $getInfoCus->email !!}">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="email" placeholder="Cofirm Email" name="Cofirm_Email" class="booking_input" >
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Address" name="Address" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Town/City" name="Cofirm_Email" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Zip Code" name="zip_code" class="booking_input">
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <input type="text" placeholder="Country" name="country_code" class="booking_input">
                            </div>
                            <div class="col-lg-12">
                              <textarea placeholder="Special Requirement" class="booking_textarea" ></textarea>
                            </div>
                          </div>
                          <!--  package_booking_form END --> 
                        </div>
                        <!--  tab_inner_body end -->
                        
                        <div class="checkbox_book top_margin">
                          <input id="check1" type="checkbox" name="check" value="check1">
                          <label for="check1">I want receive Travelite promotional and offers in the future</label>
                        </div>
                      </div>
                      <!--  tab inner three section End --> 
                      <!-- proceed button -->
                      <div class="full_width t_align_c">
                        <button type="submit" value="proceed to next step" class="btn_green proceed_buttton btns">proceed to next step</button>
                      </div>
                      
                      <!-- proceed button -->
                    </form>
                  </div>
                  <!--  inner container end --> 
                </div>
                <!-- personal_info End --> 
                <!-- payment_info Start -->
                <div id="payment_info" class="main_content_area flight_inner_section"> 
                  <!-- inner_container Start -->
                  <div class="inner_container"> 
                    <!--  tab inner three section Start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>payment Details</h5>
                      </div>
                      <!--  tab_inner_body Start-->
                      <div class="tab_inner_body full_width">
                        <div class="payment_details_main"> 
                          <!-- Review content main -->
                          <div class=" col-lg-8 col-md-8 review_content">
                            <div class="top_head_bar">
                              <h4>{!! $getInfoFutsal->futsal_name !!}</h4>
                              <span class="country_span">{!! $jamAwal !!} to {!! $jamAkhir !!} </span> <span class="country_span">Lapangan {!! $getInfoLapangan->court !!}</span> </div>
                            <div class="review_star_cover">
                              <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <span>345 Reviews</span> </div>
                          </div>
                          <!-- Review content main -->
                          <div class="col-lg-4 col-md-4">
                            <div class="payment_table table_bold">
                              <ul>
                                <li> <span>Base fare</span><span class="bold">Rp. {!! $jmlBayar !!}.00</span> </li>
                                <li> <span>Tax &Fare</span><span class="bold">Rp. 0</span> </li>
                                <li class="total_row"> <span>Total</span><span>Rp. {!! $jmlBayar !!}.00</span> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- payment_details_main end --> 
                      </div>
                      <!--  tab_inner_body end --> 
                    </div>
                    <!--  tab inner three section End --> 
                    <!--  tab inner  section start -->
                    <div class="tab_inner_section hotel_inner_section">
                      <div class="heading_tab_inner">
                        <h5>payment method</h5>
                      </div>
                      <!--  tab_inner_body Start-->
                      <div class="tab_inner_body full_width">
                        <div class="payment_mathod_tabs" id="payment_vertical_tabs">
                          <div class="payment_vertical_tabs">
                            <ul>
                              <li><a href="#bank_transfer">bank transfer</a></li>
                              <li><a href="#credit_card">credit card</a></li>
                              <li><a href="#debit_card">debit card</a></li>
                              <li><a href="#net_banking">net banking</a></li>
                              <li><a href="#paypal">paypal</a></li>
                            </ul>
                          </div>
                          <!-- bank_transfer  content -->
                          <div id ="bank_transfer" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- bank_transfer content end --> 
                          <!-- credit card  content -->
                          <div id ="credit_card" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns"> proceed payment </button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- credit card content end --> 
                          <!-- debit card content start -->
                          <div id ="debit_card" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck2" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck2">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns">proceed payment</button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- debit card content End --> 
                          <!-- Net Banking  content Start -->
                          <div id ="net_banking" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck3" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck3">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns">proceed payment</button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- Net Banking  content End --> 
                          <!-- Paypal card content Start -->
                          <div id ="paypal" class="vertical_tab_content"> 
                            <!-- Inner Body Payment Start -->
                            <div class="inner_body_payment">
                              <form class="payment_method_form">
                                <fieldset>
                                  <label>Card Holder’s Name (please enter the same name which is written on your card)</label>
                                  <input type="text" placeholder="Name On Card" class="input_card">
                                </fieldset>
                                <fieldset>
                                  <label>Credit Card Number</label>
                                  <input type="text" placeholder="Name On Card" class="input_credit_card">
                                  <a href="#"><img src="images/tour-booking/card1.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card2.jpg" alt="debit card"></a> <a href="#"><img src="images/tour-booking/card3.jpg" alt="debit card"></a>
                                </fieldset>
                                <fieldset>
                                  <div class="select_tabs">
                                    <label>Expiry Date</label>
                                    <select>
                                      <option>month</option>
                                      <option>january</option>
                                      <option>fabuary</option>
                                      <option>march</option>
                                      <option>april</option>
                                      <option>may</option>
                                      <option>june</option>
                                      <option>july</option>
                                      <option>august</option>
                                      <option>september</option>
                                      <option>november</option>
                                      <option>december</option>
                                    </select>
                                    <select>
                                      <option>year</option>
                                      <option>2010</option>
                                      <option>2011</option>
                                      <option>2012</option>
                                      <option>2013</option>
                                      <option>2014</option>
                                      <option>2015</option>
                                      <option>2016</option>
                                    </select>
                                  </div>
                                  <div class="cvv_input">
                                    <label>CVV</label>
                                    <input type="text"  class="cvv">
                                  </div>
                                </fieldset>
                                <div class="checkbox_section">
                                  <div class="checkbox_book">
                                    <input id="tabcheck4" type="checkbox" name="tabcheck" value="tabcheck">
                                    <label for="tabcheck4">Yes, I have read and I agree to the booking conditions</label>
                                  </div>
                                  <button type="submit" value="proceed payment" class="btn_green proceed_buttton btns">proceed payment</button>
                                </div>
                              </form>
                            </div>
                            <!-- Inner Body Payment End --> 
                          </div>
                          <!-- Paypal card content End --> 
                        </div>
                        <!-- payment tab main end --> 
                      </div>
                      <!--  tab_inner_body end --> 
                    </div>
                    <!--  tab inner three section End --> 
                  </div>
                  <!-- inner_container end --> 
                </div>
                <!-- content area end --> 
                <!-- payment_info End --> 
                
                <!-- confirmation Start -->
                <div id="confirmation" class="main_content_area hotel_main_content">
                  <div class="inner_container"> 
                    <!-- confirmation message -->
                    <div class="full_width confirmation_msg"> <span>Thank you. Your Booking is Confirmed Now</span> </div>
                    <!-- confirmation message End--> 
                    
                    <!--  tab inner section two Start -->
                    <div class="tab_inner_section flight_inner_section">
                      <div class="heading_tab_inner">
                        <h5>flight Details</h5>
                        <span>change flight</span> </div>
                      <div class="tab_inner_body full_width">
                        <div class="flight_review_area full_width">
                          <div class="col-lg-10 col-md-9"> 
                            <!--  review area start -->
                            <div class="row">
                              <div class="col-lg-4 col-md-4"> <img src="images/flights/flight_booking_1.jpg" alt="review image"> </div>
                              <div class="col-lg-8 col-md-8">
                                <div class="review_content">
                                  <div class="top_head_bar">
                                    <h4>malaysia</h4>
                                    <span class="country_span">Brisbane to Malaysia</span> <span class="country_span"> One Way Flight</span> </div>
                                  <div class="review_star_cover">
                                    <div class="bottom_star_rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                    <span>345 Reviews</span> </div>
                                </div>
                              </div>
                              <!--  review area end --> 
                            </div>
                            <!-- row --> 
                          </div>
                          <!--  col-lg-9 -->
                          
                          <div class="right_includes_flight col-lg-2 col-md-3">
                            <div class="doller_left">
                              <h2>$620</h2>
                              <p>/Person</p>
                            </div>
                          </div>
                        </div>
                        <!-- tab include area Start -->
                        
                        <div class="inludes_section flight_schedule_section"> <span class="emirates_button btn-yellow">emirates</span>
                          <div class="main_section_flight">
                            <div class="country_section_box">
                              <p>Brsibane - Australia</p>
                              <h4>BRSBAN 05:30</h4>
                              <p class="shedule_d">20 Sep 2015</p>
                            </div>
                            <div class="middle_flight_section">
                              <h5>Total Time</h5>
                              <p><!-- <i class="fa fa-clock-o"></i> --> 48 hours, 30 Minutes</p>
                            </div>
                            <div class="country_section_box">
                              <p>Kuala - Malaysia</p>
                              <h4>australia</h4>
                              <p class="shedule_d">22 Sep 2015</p>
                            </div>
                          </div>
                        </div>
                        <!-- tab include area End --> 
                        <!-- tab include area Start -->
                        <div class="inludes_section">
                          <div class="flight_details_table full_width">
                            <div class="table_heding_title">Other Details</div>
                            <!-- table  start-->
                            <div class="hotel_airlines_list">
                              <div class="airline_detail_list">
                                <fieldset>
                                  <ul>
                                    <li> <span>Airline</span><span>-</span><span>Emirates</span> </li>
                                    <li> <span>Flight type</span><span>-</span><span>Economy</span> </li>
                                    <li> <span>Fare type</span><span>-</span><span>Refundable</span> </li>
                                    <li> <span>Cancellation</span><span>-</span><span>$50/Person</span> </li>
                                    <li> <span>Flight Change</span><span>-</span><span>$25/Person</span> </li>
                                  </ul>
                                </fieldset>
                              </div>
                              <div class="airline_detail_list table_bold">
                                <fieldset>
                                  <ul>
                                    <li> <span>Baggage</span><span>-</span><span>Extra charge</span> </li>
                                    <li> <span>Inflightfeature</span><span>-</span><span>Available</span> </li>
                                    <li> <span>Base fare</span><span>-</span><span class="bold">$320</span> </li>
                                    <li> <span>Tax &amp; Fees</span><span>-</span><span class="bold">$300</span> </li>
                                    <li> <span>Total Price</span><span>-</span><span class="bold">$620</span> </li>
                                  </ul>
                                </fieldset>
                              </div>
                            </div>
                            <!-- table end --> 
                          </div>
                          <!-- flight_details_table End--> 
                        </div>
                        <!-- tab include area End --> 
                      </div>
                      <!--  tab inner body  End--> 
                      
                    </div>
                    <!-- tab inner section end --> 
                    <!-- information_section start -->
                    <div class="full_width information_section">
                      <div class="information_title"> Traveler Information </div>
                      <div class="full_width information_table_main">
                        <div class="col-lg-6 col-md-6 border_right">
                          <div class="payment_table_package">
                            <table class="table">
                              <tr>
                                <td>Booking Number :</td>
                                <td>0090038968</td>
                              </tr>
                              <tr>
                                <td>First Name :</td>
                                <td>Steve</td>
                              </tr>
                              <tr>
                                <td>Last Name :</td>
                                <td>Joseph</td>
                              </tr>
                              <tr>
                                <td>Email :</td>
                                <td>stevejoseph@host.com</td>
                              </tr>
                            </table>
                          </div>
                          <!--  Payment Table End --> 
                        </div>
                        <div class="col-lg-6 col-md-6 border_right">
                          <div class="payment_table_package">
                            <table class="table">
                              <tr>
                                <td>Address :</td>
                                <td>20 sep 2015</td>
                              </tr>
                              <tr>
                                <td>Town/City :</td>
                                <td>27 Jan 2015</td>
                              </tr>
                              <tr>
                                <td>Zip Code : </td>
                                <td>63800</td>
                              </tr>
                              <tr>
                                <td>Country :</td>
                                <td>stevejoseph@host.com</td>
                              </tr>
                            </table>
                          </div>
                          <!--  Payment Table End --> 
                        </div>
                      </div>
                      <!-- information_table End --> 
                    </div>
                    <!-- information_section End --> 
                    
                    <!-- information_section start -->
                    <div class="full_width information_section space_top_65">
                      <div class="information_title"> payment Information </div>
                      <!-- information_table End -->
                      <div class="full_width information_table_main">
                        <div class="paymentinfo_list">
                          <ul>
                            <li>You have now confirmed and guaranteed your booking by credit card.</li>
                            <li>All payments are to be made at the hotel during your stay, unsess otherwise stated in the hotel policies or in the room conditions.</li>
                            <li>Please note that your credit card may be pre-authorised prior to your arrival.</li>
                          </ul>
                          <p>This Package accepts the following forms of payment :</p>
                          <span>Credit Card (Visa)</span> </div>
                      </div>
                      <!-- information_table End --> 
                      <!-- information_table End -->
                      <div class="full_width information_table_main">
                        <div class="booking_text t_align_c">
                          <p>If you can change or cancel your booking via out online self service tool <a href="#">here. </a></p>
                          <span>We Wish You a Pleasent stay</span> </div>
                      </div>
                      <!-- information_table End -->
                      <div class="full_width t_align_c">
                        <button type="button" value="proceed to next step" class="btn_green proceed_buttton btns">print booking</button>
                      </div>
                    </div>
                    <!-- information_section End --> 
                  </div>
                  <!--  inner container --> 
                </div>
                <!-- confirmation End --> 
              </div>
              <!-- package tabs End --> 
            </div>
            <!-- right main start --> 
          </div>
          <!-- col-lg-9-end --> 
        </div>
        <!--  row main --> 
      </div>
      <!-- container --> 
    </div>
    <!-- main wrapper -->
 


@stop