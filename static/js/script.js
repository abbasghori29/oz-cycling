
let currentIndex = 0;
const images = document.querySelectorAll('#gallery img');
const totalImages = images.length;

document.getElementById('prevBtn').addEventListener('click', () => {
    // Move to the previous slide
    currentIndex = (currentIndex - 8 + totalImages) % totalImages;
    updateGallery();
});

document.getElementById('nextBtn').addEventListener('click', () => {
    // Move to the next slide
    currentIndex = (currentIndex + 8) % totalImages;
    updateGallery();
});

function updateGallery() {
    images.forEach((img, index) => {
        // Display 9 images per slide
        img.style.display = (index >= currentIndex && index < currentIndex + 8) ? 'block' : 'none';
    });
}

function openModal(src) {
    document.getElementById('modalImage').src = src;
    document.getElementById('myModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}

updateGallery(); // Initial call to display the gallery



//booking section script 
document.getElementById('eventType').addEventListener('change', function() {
    if (this.value === 'Gravel Tours') {
        document.getElementById('preference').innerHTML="<option>The Back 40</option><option>Little Sugar</option><option>Slaughter Pen</option>";
    } else if (this.value === 'Mountain Bike Tours'){
        document.getElementById('preference').innerHTML="<option>Mountain Trail 1</option><option>Mountain Trail 2</option>";
    }else if (this.value === 'Helicopter Bike Rides'){
        document.getElementById('preference').innerHTML="<option>Helicopter Tour 1</option><option>Helicopter Tour 2</option>";
    }
    else if (this.value === 'Razorback Greenway'){
        document.getElementById('preference').innerHTML="<option>Razorback Greenway 1</option><option>Razorback Greenway 2</option>";
    }
});

document.getElementById('next1').addEventListener('click', function() {
    nameinp = document.getElementById('fullname').value
    emailinp = document.getElementById('email').value
    numberinp = document.getElementById('number').value

    
    if (document.getElementById('days').value === 'Multiday') {
        alert('Please contact us for Multiday bookings.');
        return;
    }
    if (nameinp === '' || emailinp === '' || numberinp === '') {
        alert('Please fill in all fields');
    }else{

    document.getElementById('form1').classList.add('hidden');
    document.getElementById('form2').classList.remove('hidden');
    document.getElementById('step1').classList.remove('active-tab');
    document.getElementById('step1').classList.add('hidden');
    document.getElementById('step2').classList.remove('hidden');
    document.getElementById('step2').classList.add('active-tab');

    const fullname = document.getElementById('fullname').value;
    const email = document.getElementById('email').value;
    const number = document.getElementById('number').value;
    const eventType = document.getElementById('eventType').value;
    const preference = document.getElementById('preference').value;
    const ebike = document.getElementById('ebike').value;
    const riders = document.getElementById('riders').value;
    const days = document.getElementById('days').value;

    let price = 0;
    if (days === 'Half Day') {
        if (riders == 1) {
            price = 140;
        } else if (riders >= 2 && riders <= 4) {
            price = 115 * riders;
        } else if (riders > 6) {
            price = 100 * riders;
        }
    } else if (days === 'Full Day') {
        if (riders == 1) {
            price = 225;
        } else if (riders >= 2 && riders <= 4) {
            price = 200 * riders;
        } else if (riders > 6) {
            price = 185 * riders;
        }
    }

    document.getElementById('cartDetails').innerHTML = `
        <p>Full Name: ${fullname}</p>
        <p>Email: ${email}</p>
        <p>Number: ${number}</p>
        <p>Event Type: ${eventType}</p>
        ${eventType === 'Mountain Bike Tours' ? `<p>Preference: ${preference}</p>` : ''}
        <p>E-bike: ${ebike}</p>
        <p>Number of Riders: ${riders}</p>
        <p>Days: ${days}</p>
        <p>Total Price: $${price}</p>
    `;
} 
});

document.getElementById('next2').addEventListener('click', function() {
    document.getElementById('form2').classList.add('hidden');
    document.getElementById('form3').classList.remove('hidden');
    document.getElementById('step2').classList.remove('active-tab');
    document.getElementById('step2').classList.add('hidden');
    document.getElementById('step3').classList.remove('hidden');
    document.getElementById('step3').classList.add('active-tab');

    document.getElementById('confirmationDetails').innerHTML = document.getElementById('cartDetails').innerHTML;
});

document.getElementById('back1').addEventListener('click', function() {
    document.getElementById('form2').classList.add('hidden');
    document.getElementById('form1').classList.remove('hidden');
    document.getElementById('step2').classList.remove('active-tab');
    document.getElementById('step2').classList.add('hidden');
    document.getElementById('step1').classList.remove('hidden');
    document.getElementById('step1').classList.add('active-tab');
});

document.getElementById('back2').addEventListener('click', function() {
    document.getElementById('form3').classList.add('hidden');
    document.getElementById('form2').classList.remove('hidden');
    document.getElementById('step3').classList.remove('active-tab');
    document.getElementById('step3').classList.add('hidden');
    document.getElementById('step2').classList.remove('hidden');
    document.getElementById('step2').classList.add('active-tab');
});

document.getElementById('confirm').addEventListener('click', function() {
    if (!document.getElementById('terms').checked) {
        alert('You must agree to the terms of service.');
        return;
    }
    alert('Booking Confirmed!');
});



//event section scripts 

function showEvent(eventId, imageSrc, altText) {
         const eventImages = document.querySelectorAll('.event-image');
         eventImages.forEach(image => {
             if (image.id === eventId) {
                 image.src = imageSrc;
                 image.alt = altText;
                 image.classList.remove('hidden');
             } else {
                 image.classList.add('hidden');
             }
         });

         const mainEventImage = document.getElementById('mainEventImage');
         mainEventImage.src = imageSrc;
         mainEventImage.alt = altText;
     }

