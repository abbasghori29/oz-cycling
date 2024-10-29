<style>
    .cont {
    width: 80%;
    /* max-width: 1200px; */
    margin: 0 auto;
    height:contain;
    border: 1px solid #ccc;
}
@media (max-width: 768px) {
  .cont{
    width:100%;
    padding:0;
    margin: 0 auto;
  }
  .customTours{
    width: 100%;
  }
  .tablink {
    padding: 0;
}
.tc2{
    padding:0;
}
.main-content {
 
    width: 73%;
    padding: 0;
}
}
.tabs {
    display: flex;
    /* justify-content: space-around; */
    background-color: #3e3e3e;
    /* padding: 10px; */
}

.tablink {
    background-color: #333;
    color: #fff;
    border: 1px solid #ccc;
    padding: 14px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    width:25%;
    /* height:50px; */
}

.tablink:hover {
    background-color: #777;
}
.tabcontent {
    display: none;
}
.tc2{
    /* background-color: #fff; */
    /* height:100%; */
    width:100%;
    padding:2% 2%;
    display:flex;
}

.sidebar {
    width: 25%;
    height:contain;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    background-color: #333;
    padding:10px;
}

.sidebar ul li {
    background-color: #f26c21;
    color: white;
    padding: 10px;
    margin: 5px 0;
    text-align: center;
    cursor: pointer;
}

.main-content {
    display:flex;
    /* float: left; */
    width: 70%;
    margin-left: 2%;
    /* gap:5rem; */
    background:#f26c21;
    padding:1rem;
    
}

.trailImage {
    width: 58%;
    height: 400px;
    /* border-radius: 10px; */
    /* margin: 0 0 0 5rem; */
}

.description {
    margin: 0 0 0 2%;
    color:white;
    width:40%;
}
</style>
<div id="customTours">
<h1 class="p-8 text-4xl font-bold mb-6 text-white">
        Custom Tours
</h1>
<div class="cont">
        <div class="tabs">
            <button class="tablink" onclick="openTab(event, 'GravelTours')">Gravel Tours</button>
            <button class="tablink" onclick="openTab(event, 'MountainBikeTours')">Mountain Bike Tours</button>
            <button class="tablink" onclick="openTab(event, 'HelicopterRides')">Helicopter Rides</button>
            <button class="tablink" onclick="openTab(event, 'RazorbackGreenway')">Razorback Greenway</button>
        </div>
        <div id="GravelTours" class="tabcontent">
            <div class="tc2">
            <div class="sidebar">
                <ul>
                    <li class="listli" onclick="showDetails(event, 0, 'back40', 'The Back 40', 'Trail system made up of 10 trails, mostly XC, ranging from Green to Black. You’ll experience Flow, Jump lines, features, Rock, switchbacks, and climbs. A little bit of everything to test your skills.')">The Back 40</li>
                    <li class="listli" onclick="showDetails(event, 0, 'littleSugar', 'Little Sugar', 'A beginner-friendly trail with smooth flow and rolling terrain.')">Little Sugar</li>
                    <li class="listli" onclick="showDetails(event, 0, 'slaughterPen', 'Slaughter Pen', 'A popular spot with rock gardens, drops, and technical challenges.')">Slaughter Pen</li>
                </ul>
            </div>
            <div class="main-content">
                <img class="trailImage" height=400px width=400px  src="back40.jpg" alt="Trail">
                <div class="description">
                    <h2 class="trailTitle">back40</h2>
                    <p class="trailDesc">The Back 40', 'Trail system made up of 10 trails, mostly XC, ranging from Green to Black. You’ll experience Flow, Jump lines, features, Rock, switchbacks, and climbs. A little bit of everything to test your skills.'</p>
                </div>
            </div>
            </div>
        </div>
        <div id="MountainBikeTours" class="tabcontent">
            <div class="tc2">
            <div class="sidebar">
                <ul>
                    <li class="listli" onclick="showDetails(event, 1, 'mtBike2', 'Mountain Trail 1', 'A challenging trail for experienced riders with steep climbs.')">Mountain Trail 1</li>
                    <li class="listli" onclick="showDetails(event, 1, 'mtBike2', 'Mountain Trail 2', 'A scenic route with breathtaking views and moderate difficulty.')">Mountain Trail 2</li>
                </ul>
            </div>
            <div class="main-content">
                <img class="trailImage" height=400px width=400px  src="/cycle/static/images/cycle.gif" alt="Trail">
                <div class="description">
                    <h2 class="trailTitle"></h2>
                    <p class="trailDesc"></p>
                </div>
            </div>
            </div>
        </div>

        <div id="HelicopterRides" class="tabcontent">
            <div class="tc2">
            <div class="sidebar">
                <ul>
                    <li class="listli" onclick="showDetails(event, 2, 'helicopterRide1', 'Helicopter Tour 1', 'Soar over the mountains and enjoy stunning aerial views.')">Helicopter Tour 1</li>
                    <li class="listli" onclick="showDetails(event, 2, 'helicopterRide2', 'Helicopter Tour 2', 'An exhilarating helicopter ride offering panoramic views.')">Helicopter Tour 2</li>
                </ul>
            </div>
            <div class="main-content">
                <img class="trailImage" height=400px width=400px  src="helicopter1.jpg" alt="Trail">
                <div class="description">
                    <h2 class="trailTitle"></h2>
                    <p class="trailDesc"></p>
                </div>
            </div>
            </div>
        </div>

        <div id="RazorbackGreenway" class="tabcontent">
            <div class="tc2">
            <div class="sidebar">
                <ul>
                    <li class="listli" onclick="showDetails(event, 3, 'razorbackGreenway1', 'Razorback Greenway 1', 'A smooth, family-friendly ride along scenic paths.')">Razorback Greenway 1</li>
                    <li class="listli" onclick="showDetails(event, 3, 'razorbackGreenway2', 'Razorback Greenway 2', 'A peaceful route through parks and rivers.')">Razorback Greenway 2</li>
                </ul>
            </div>
            <div class="main-content">
                <img class="trailImage" height=400px width=400px  src="razorback1.jpg" alt="Trail">
                <div class="description">
                    <h2 class="trailTitle"></h2>
                    <p class="trailDesc"></p>
                </div>
            </div>
            </div>
        </div>
    </div>
       </div>

    <script>
        function openTab(evt, tabName) {
    var i, tabcontent, tablink;

    // Hide all tab content
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        
    }

    // Remove the background color of all tablinks
    tablink = document.getElementsByClassName("tablink");
    for (i = 0; i < tablink.length; i++) {
        tablink[i].style.backgroundColor = "";
        tablink[i].style.borderBottom = "1px solid #ccc"
    }

    // Show the current tab content
    document.getElementById(tabName).style.display = "block";
    innerDiv1 =document.getElementById(tabName).children[0]; // First child div
    innerDiv2 = innerDiv1.children[0]; // Second child div
    ul = innerDiv2.children[0]; // The ul inside the second div
    li = ul.children[0];
    li.click()
    // Change the background color of the clicked tablink
    evt.currentTarget.style.backgroundColor = "#777";
    evt.currentTarget.style.borderBottom= "none";
}

// Display the first tab by default
document.getElementById("GravelTours").style.display = "block";
i1 =document.getElementsByClassName("tablink"); // First child div
i1[0].click()
innerDiv1 =document.getElementById("GravelTours").children[0]; // First child div
innerDiv2 = innerDiv1.children[0]; // Second child div
ul = innerDiv2.children[0]; // The ul inside the second div
li = ul.children[0];
li.click()
// Function to update the details dynamically when a list item is clicked
function showDetails(evt, i, imageId, title, description) {

    var image = document.getElementsByClassName('trailImage');
    var titleElement = document.getElementsByClassName('trailTitle');
    var descElement = document.getElementsByClassName('trailDesc');
    var listli= document.getElementsByClassName('listli')
    // Update the image, title, and description
    image[i].src ="/cycle/static/images/back40.jpeg";
    for (let index = 0; index < listli.length; index++) {
        listli[index].style.backgroundColor="#f26c21"
        
    }
        titleElement[i].innerHTML = title;
        descElement[i].innerHTML = description;
        console.log(titleElement.length)
        evt.currentTarget.style.backgroundColor = "#ff995f";
}

    </script>