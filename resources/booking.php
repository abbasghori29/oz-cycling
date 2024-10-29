<div class="Booking">
    <h1 class="p-8 text-4xl font-bold mb-6 text-white">
        Bookings
    </h1>
    <div class=" mx-auto max-w-7xl p-8 bg-gray-700 rounded-lg shadow-lg">
        <div class="flex items-center justify-between mb-8">
            <div class="text-white text-center flex-1">
                <div class="flex flex-col items-center">
                    <div id="step1" class="bg-orange-600 h-2 w-24 active-tab"></div>
                    <span class="mt-2">Personal Info</span>
                </div>
            </div>
            <div class="text-white text-center flex-1">
                <div class="flex flex-col items-center">
                    <div id="step2" class="bg-brown-600 h-2 w-24 hidden"></div>
                    <span class="mt-2">Cart</span>
                </div>
            </div>
            <div class="text-white text-center flex-1">
            <div class="flex flex-col items-center">
                <div id="step3" class="bg-brown-600 h-2 w-24 hidden"></div>
                <span class="mt-2">Confirmation</span>
            </div>
        </div>
    </div>
    <form id="form1" class="bg-gray-800 p-8 rounded-lg fade-in">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-white mb-2">Full Name *:</label>
                <input required type="text" id="fullname" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
            </div>
            <div>
                <label class="block text-white mb-2">Email *:</label>
                <input required type="email" id="email" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
            </div>
            <div>
                <label class="block text-white mb-2">Number *:</label>
                <input required type="number" id="number" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-white mb-2">Event Type ? *</label>
                <select id="eventType" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
                    <option>Gravel Tours</option>
                    <option>Mountain Bike Tours</option>
                    <option>Helicopter Bike Rides</option>
                    <option>Razorback Greenway</option>
                </select>
            </div>
            <div id="preferenceContainer">
                <label class="block text-white mb-2">Preference ?</label>
                <select id="preference" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
                <option>The Back 40</option><option>Little Sugar</option><option>Slaughter Pen</option>
                <!-- <option>The Back 40</option>
                    <option>Little Sugar</option>
                    <option>Slaughter Pen</option>
                    <option>Blowing Springs/Wonderland</option>
                    <option>Hand Cut Hollow</option>
                    <option>Hobbs State Park/Monument trails</option>
                    <option>Lake Atalanta/The Rail Yard</option>
                    <option>Centennial Park</option>
                    <option>Mt Kessler</option> -->
                </select>
            </div>
            <div>
                <label class="block text-white mb-2">E-bike ? *</label>
                <select id="ebike" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <div>
                <label class="block text-white mb-2">Number of Riders ? *</label>
                <input value="1" required type="number" id="riders" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
            <div>
                <label class="block text-white mb-2">Days</label>
                <select id="days" class="w-full p-2 bg-gray-700 text-white border border-gray-600 rounded">
                    <option>Half Day</option>
                    <option>Full Day</option>
                    <option>Multiday</option>
                </select>
            </div>
            <div class="flex items-end">
                <p id="next1" class="w-full p-2 bg-orange-600 text-white rounded" style="text-align:center; cursor:pointer;">Next</p>
            </div>
        </div>
        <div class="text-white mt-4">
            <input required type="checkbox" id="terms" class="mr-2">
            <label for="terms">I AGREE TO THE TERMS OF SERVICE</label>
        </div>
        <input type="submit" style="opacity:0;">
</form>
    <div id="form2" class="bg-gray-800 p-8 rounded-lg hidden fade-in">
        <h2 class="text-white mb-4">Cart Details</h2>
        <div id="cartDetails" class="text-white mb-4"></div>
        <div class="flex justify-between items-end">
            <button id="back1" class="p-2 bg-gray-600 text-white rounded">Back</button>
            <button id="next2" class="p-2 bg-orange-600 text-white rounded">Next</button>
        </div>
    </div>
    <div id="form3" class="bg-gray-800 p-8 rounded-lg hidden fade-in">
        <h2 class="text-white mb-4">Confirmation</h2>
        <div id="confirmationDetails" class="text-white mb-4"></div>
        <div class="flex justify-between items-end">
            <button id="back2" class="p-2 bg-gray-600 text-white rounded">Back</button>
            <button id="confirm" class="p-2 bg-orange-600 text-white rounded">Confirm</button>
        </div>
    </div>
</div>

</div>
<img class="cycle" src="/cycle/static/images/cycle.gif" alt="" style="width:15rem; height:10rem; position:relative; bottom:-10rem; left:100%; margin:-8rem 0 0 0;">
<img src="/cycle/static/images/road2.png" alt="" style="width:100%; height:20rem; margin:-7rem 0 0 0;">
