<?php

/**
 * Controller for the Contact Page.
 */

echo '<div id="contact-div">';
echo '<div id="map">';
echo '<iframe 
        id="map-google" 
        src="https://maps.google.com/maps?q=abb%20ts%20baden&t=&z=13&ie=UTF8&iwloc=&output=embed"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">     
        </iframe>';
echo '</div>';
echo '<div id=form-div">';
echo '<form id="contact-form">';

echo '<label for="fname">First name:</label><br>';
echo '<input type="text" id="fname" name="fname"><br>';

echo '<label for="lname">Last name:</label><br>';
echo '<input type="text" id="lname" name="lname"><br>';

echo '<label for="contactform-phone">Telefon-Nr:</label><br>';
echo '<input type="tel" id="contactform-phone" name="phone"><br>';

echo '<label for="adr">Address:</label><br>';
echo '<input type="text" id="adr" name="adr"><br>';

echo '<label for="zip">Zip:</label><br>';
echo '<input type="text" id="zip" name="zip"><br>';

echo '<label for="message">Message</label><br>';
echo '<textarea id="message" name="message" rows="8" cols="50"></textarea><br>';

echo '<input id="contact-submit-button" type="submit" name="contactform_submit" value="Send">';

echo '</form>';
echo '</div>';
echo '</div>';
