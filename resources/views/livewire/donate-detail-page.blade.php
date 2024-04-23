<div>

    <section class="donate__hero_section">
        <div class="donatedetail__hero_title">
             {{$cause->title}}    
        </div>
    </section>

    

    <section class="detailcauses">


            <div class="detailcause">

                <div class="detailcause_imgbox">
                    <img src="{{asset("storage/".$cause->thumbnail)}}" alt="cause picture" class="detailcause_img">
                </div>

                <div class="causedetail_footer">

                    <div class="cause_goal">
                        <h1 class="cause_goal__heading">
                            our goal
                        </h1>
                        <p class="cause_goal__subheading">
                            {{$cause->goal}}
                        </p>
                    </div>

                    <div class="cause_description">
                        <h1 class="cause_description_heading">Details about the cause</h1>
                        <p class="cause_goal__subheading">
                            {{$cause->description}}
                        </p>
                    </div>

                </div>

            </div>

    </section>

    <section class="paymentsection"> 

        <div class="payment_title">
            Bank Details
        </div>

        <div class="banks">

            @foreach ($banks as $bank)
                

                <div class="bank">

                    <div class="bank_detail">
                        <p class="bank_subheading_title">Bank:</p>
                        <p class="bank_subheading">{{$bank->institute}}</p>
                    </div>

                    <div class="bank_detail">
                        <p class="bank_subheading_title">Acount Number:</p>
                        <p class="bank_subheading">{{$bank->account_number}}</p>
                    </div>

                    <div class="bank_detail">
                        <p class="bank_subheading_title">Account Holder:</p>
                        <p class="bank_subheading">{{$bank->account_holder}}</p>
                    </div> 

                </div>

            @endforeach

        
        </div>


    </section>


</div>
