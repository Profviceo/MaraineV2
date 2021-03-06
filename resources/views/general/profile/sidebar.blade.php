    <div class="d-none" id="img-form">
        <div class="img-form flex-around bg-light shadow-ts p-1 rounded">
            <form action="{{route('profile.image.update')}}" class="img-form" method="POST" enctype="multipart/form-data">
                @csrf 
                
                <input type="file" name="new_image" id="" placeholder="Click here to upload image" class="bg-white shadow-ts p-1 rounded mb-1"><br>

                <div class="p-button">
                  <button type="submit" class="button button-primary">Change Profile</button>  
                </div>
                
            </form>
            <a href="#" class="bold close-img-form" target="#img-form">x</a>
        </div>
    </div>    

    <section class="profile">



            <div class="profile-sidebar">
                    <p class="box-header">Your Profile</p>

                    <div class="image">
                        <img src="{{Auth::user()->picture}}" alt="{{Auth::user()->name}}">

                        <div id="image_change">
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg></i>

                            <span>Edit</span>
                        </div>
                    </div>




                    <form action="{{route('profile.image.delete')}}" method="POST">
                        @csrf 
                        @method('delete')

                        <button>Delete Picture</button>
                    </form>

                    <div class="info">
                        <div class="first">
                            <section class="header-box"> 9 <div>Active Courses</div> </section>

                            <section class="header-box"> 5 <div>Active Tickets</div> </section>
                        </div>
                        

                        <section class="header-box second"> 3 <div>Pending Payments</div> </section>
                    </div>

                    <div class="desktop-info d-none">
                        <section>
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"/></svg></i>
                            <span>{{$info['active_courses']}} Active Courses</span>
                        </section>

                        <section>
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z"/></svg></i>
                            <span>{{$info['active_tickets']}} Active Tickets</span>
                        </section>

                        <section>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/></svg>
                            </i>
                            <span>3 Pending Fees</span>
                        </section>

                    </div>


                </div>
    </section>
    <script>
        let imageModal = document.querySelector("div#img-form");
        let statut =  false;
        
        let closeM =  function(e){
            if(e.target == imageModal){
                imageModal.classList.toggle('image-div');
            }
        }

        let pop =  function(e){
            e.preventDefault();
            if(status === false){
                imageModal.classList.add('image-div');
                status =  true;
            }else{
                imageModal.classList.remove('image-div');
                status =  false;
            }
        }

        document.querySelector("div#image_change").addEventListener("click", pop);
        document.querySelector("a.close-img-form").addEventListener("click", pop);
        window.addEventListener("click", closeM);
    </script>