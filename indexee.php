if (session_id() == '' || !isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['username'])) {
    // Display links for logged-in users
} else {
    // Display links for non-logged-in users
}


<!-- Various sections like social-icons, customer-reviews, featured-product, live-chat, trust-badges, etc. -->

function getLocation() {
    // Obtaining geolocation
}

function showPosition(position) {
    // Sending geolocation information to store.php
}


<footer>
    <p>&copy; Blacki Shop. All Rights Reserved.</p>
</footer>

