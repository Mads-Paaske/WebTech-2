@extends('layout')

@section('content')

    <link rel="stylesheet" href="{{asset('css/FormpageStyleSheet.css')}}">
    <script src="{{asset('js/Formpage.js')}}" defer></script>

    <form id="PetForm" action="{{route('pets.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="horizontalFormFlex">
            <div class="boxes">
                <p class="fillFormText">Please enter the information about your pet:</p>

                <div class="formGrid">
                    <div class="gridElementDiv"> <!-- Top left -->
                        <p class="formHeaderText"> Your information:</p>

                        <label class="formLabelText" for="TypePetShelter">Are you?</label> <br>
                        <input type="radio" id="TypePetShelter" name="TypeOfListing" value="Pet shelter">
                        <label class="formLabelText" for="TypePetShelter">A pet shelter</label><br>
                        <input type="radio" id="TypeOtherUser" name="TypeOfListing" value="Other">
                        <label class="formLabelText" for="TypeOtherUser">Other (Breeder, private etc.)</label><br><br>

                        <label class="formLabelText" for="fullName">Full Name/Shelter Name:</label><br>
                        <input type="text" id="fullName" name="fullName" placeholder="Name" required><br>

                        <label class="formLabelText" for="email">Email:</label><br>
                        <input type="email" id="email" name="email" placeholder="Email" required><br>

                    </div>

                    <div class="gridElementDiv"> <!-- Top right -->
                        <p class="formHeaderText">Your address:</p>
                        <label class="formLabelText" for="address">Adress:</label><br>
                        <input type="text" id="address" name="address" placeholder="Address" required><br>
                        <label class="formLabelText" for="city">City:</label><br>
                        <input type="text" id="city" name="city" placeholder="City" required><br>
                        <label class="formLabelText" for="postcode">Postcode:</label><br>
                        <input type="text" id="postcode" name="postcode" placeholder="Postcode" required><br>

                    </div>
                    <div class="gridElementDiv"> <!-- Bottom left-->
                        <p class="formHeaderText">Your pets' information:</p>
                        <label class="formLabelText" for="petName">Pet Name:</label><br>
                        <input type="text" id="petName" name="petName" placeholder="Pet Name" required><br>
                        <label class="formLabelText" for="petAge">Age:</label><br>
                        <input type="number" id="petAge" name="petAge" placeholder="Pet Age" required min="0" max="200"><br>
                        <label class="formLabelText" for="type">Type:</label><br>
                        <select id="type" name="type">
                            <option value="Cat">Cat</option>
                            <option value="Dog">Dog</option>
                            <option value="Fish">Fish</option>
                        </select>


                    </div>
                    <div class="gridElementDiv"> <!-- Bottom right -->
                        <br><br><br>
                        <label class="formLabelText" for="yesTraining">Has your pet received training?</label><br>
                        <input type="radio" id="yesTraining" name="training" value="1">
                        <label class="formLabelText" for="noTraining">Yes</label><br>
                        <input type="radio" id="noTraining" name="training" value="0">
                        <label class="formLabelText" for="noTraining">No</label><br><br>
                        <label class="formLabelText" for="petDescription">Describe your pet <span class="maxCharsText">(max 200 characters)</span></label><br>
                        <textarea name="petDescription" maxlength="200" id="petDescription" rows="5" cols="30"></textarea>
                    </div>
                </div>


            </div>

            <div class="whitespace"></div>

            <div class="boxes">
                <img src="{{asset('Assets/Camera_logo.png')}}" alt="Camera Logo" class="cameraImage">
                <p class="uploadPictureText">Upload a picture of your pet</p> <br>

                <div class="uploadImageBox">
                    <p class="formLabelText">Choose a file:</p>
                    <input type="file" id="image" name="image" accept="image/*"><br>
                </div>
            </div>
        </div>

        <div class="errorBox">
            @if($errors->any())
                <p class="failedHeader">Oops! something went wrong creating the listing</p>

                @foreach ($errors->all() as $error)
                    <li class="errorMessage">{{ $error }}</li>
                @endforeach
            @endif
        </div>


        <div>
            <input class="submitButton" type="submit" id="submitButton" value="Create listing">
        </div>


    </form>

@endsection
