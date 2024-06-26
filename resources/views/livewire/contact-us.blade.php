<div>

        <section class="contactus">

            <div class="contactus__hero">Contact us</div>

            <div class="contactus__form_info">

                <div class="contactus__form_info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                    <p>
                        call now 
                        <br>
                        {{$phone_number}}
                    </p>
                      
                </div>

                <div class="contactus__form_info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>

                    <p>
                        mail your queries 
                        <br>
                        {{$email_address}}
                    </p>
                      
                </div>

                <div class="contactus__form_info_item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                        
                    <p>
                        {{$relative_address}}
                    </p>
                      
                </div>
                
            </div> 

            <form wire:submit="sendEmail" method="POST" class="contactus__form_form">

                <div class="contactus__form_form__fullname">
                    <div class="contactus__form_form__fullname_inputtag">
                        <input type="text" name="firstname"   placeholder="first name" wire:model="firstname">
                        <div>
                            @error('firstname') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>

                    <div class="contactus__form_form__fullname_inputtag">
                        <input type="text" name="lastname"   placeholder="last name" wire:model="lastname">
                        <div>
                            @error('lastname') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                </div>

                <div class="contactus__form_form__subject">

                    <div class="contactus__form_form__subject_inputtag">
                        <input type="text" name="subject"   placeholder="subject" wire:model="subject">
                        <div>
                            @error('subject') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                    
                    <div class="contactus__form_form__subject_inputtag">
                        <input type="email" name="email" placeholder="Email Address" wire:model="email">
                        <div>
                            @error('email') <span class="error">{{ $message }}</span> @enderror 
                        </div>
                    </div>
                    
                </div>

                <div class="contactus__form_form_inputtag">
                    <textarea name="message" cols="5" rows="5"  placeholder="Message" wire:model="message"></textarea>
                    <div>
                        @error('message') <span class="error">{{ $message }}</span> @enderror 
                    </div>
                </div>

                @if(session('contactus_status'))
                <div class="error_display">
                    {{ session('contactus_status') }}
                </div>
                @endif

                <button type="submit">submit</button>
            </form>
        </section>

    </div>
