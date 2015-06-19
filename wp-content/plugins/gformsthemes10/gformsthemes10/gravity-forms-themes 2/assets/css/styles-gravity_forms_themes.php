<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  max-width: <?php echo implode(", ", (array)$atts['gft_width']); ?>%;

}


<?php if(checkout == $atts['gft_theme']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #f3f6fa;
  border: 1px solid;
  border-color: #c2cadb #bbc5d6 #b7c0cd;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: #7f889e;
  text-shadow: 0 1px rgba(255, 255, 255, 0.7);
  background: #eceff5;
  border-bottom: 1px solid #c5ccdb;
  border-radius: 7px 7px 0 0;
  background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
  background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
  -webkit-box-shadow: inset 0 1px white;
  box-shadow: inset 0 1px white;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(bluegreen == $atts['gft_theme']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #F3F5F4;
  border: 1px solid;
  border-color: #033E5C;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  background: #eceff5;
  border-bottom: 1px solid #c5ccdb;
  border-radius: 7px 7px 0 0;
  background-color: #003A5B;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #003A5B;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #63A645;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #63A645;
}

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #63A645;
 background: #1993fb;
 border-radius: 4px;
background-color: #63A645;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(firenze == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFF0A5;
  border: 1px solid;
  border-color: #468966;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #468966;
  border-radius: 7px 7px 0 0;
  background-color: #468966;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #468966;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #B64926;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #63A645;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #63A645;
}



/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #8E2800;
 background: #1993fb;
 border-radius: 4px;
background-color: #B64926;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}


/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(techoffice == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFFFFF;
  border: 1px solid;
  border-color: #595241;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #468966;
  border-radius: 7px 7px 0 0;
  background-color: #595241;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #B8AE9C;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #595241;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #595241;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #595241;
}



/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #8E2800;
 background: #1993fb;
 border-radius: 4px;
background-color: #8A0917;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(watermelon == $atts['gft_theme']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #f7f7f7;
  border: 1px solid;
  border-color: #7D8A2E;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #468966;
  border-radius: 7px 7px 0 0;
  background-color: #7D8A2E;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #C9D787;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #FF8598;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #FF8598;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #FF8598;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #8E2800;
 background: #1993fb;
 border-radius: 4px;
background-color: #FF8598;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}


/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(flatui == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #ECF0F1;
  border: 1px solid;
  border-color: #2C3E50;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #2C3E50;
  border-radius: 7px 7px 0 0;
  background-color: #2C3E50;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #E74C3C;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #2C3E50;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px rgba(255, 255, 255, 0.5);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #E74C3C;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-box-shadow: 1px 1px 1px #fff;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #E74C3C;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #2980B9;
 background: #1993fb;
 border-radius: 4px;
background-color: #3498DB;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(circus == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FF2D00;
  border: 1px solid;
  border-color: #2E0927;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #2E0927;
  border-radius: 7px 7px 0 0;
  background-color: #2E0927;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #c5ccdb !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #D90000;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: white;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #E74C3C;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #E74C3C;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #2980B9;
 background: #1993fb;
 border-radius: 4px;
background-color: #04756F;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}


/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(chai == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #A1E8D9;
  border: 1px solid;
  border-color: #CFC291;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #CFC291;
  border-radius: 7px 7px 0 0;
  background-color: #CFC291;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #CFC291;
border-bottom: 1px solid #FFF6C5 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #FFF6C5;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #FF712C;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #E74C3C;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #E74C3C;
}



/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #2980B9;
 background: #1993fb;
 border-radius: 4px;
background-color: #695D46;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}



body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(mountains == $atts['gft_theme']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFFF9D;
  border: 1px solid;
  border-color: #354242;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #354242;
  border-radius: 7px 7px 0 0;
  background-color: #354242;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #354242;
border-bottom: 1px solid #ACEBAE !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #ACEBAE;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #354242;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #E74C3C;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #E74C3C;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #7D9100;
 background: #1993fb;
 border-radius: 4px;
background-color: #C9DE55;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(ventana == $atts['gft_theme']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #E9F1DF;
  border: 1px solid;
  border-color: #F2385A;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #F2385A;
  border-radius: 7px 7px 0 0;
  background-color: #F2385A;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #F5A503 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #F5A503;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #354242;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #4AD9D9;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #4AD9D9;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #36B1BF;
 background: #1993fb;
 border-radius: 4px;
background-color: #4AD9D9;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(thisgreen == $atts['theme_set_2']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #96ED89;
  border: 1px solid;
  border-color: #00261C;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #00261C;
  border-radius: 7px 7px 0 0;
  background-color: #00261C;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #167F39 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #167F39;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #167F39;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #167F39;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #167F39;
}



/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #167F39;
 background: #1993fb;
 border-radius: 4px;
background-color: #45BF55;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}


/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(dreams == $atts['theme_set_2']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #F2EFDF;
  border: 1px solid;
  border-color: #211426;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #211426;
  border-radius: 7px 7px 0 0;
  background-color: #413659;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #413659 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #656F8C;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #413659;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #167F39;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #167F39;
}

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #167F39;
 background: #1993fb;
 border-radius: 4px;
background-color: #9BBFAB;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(dream == $atts['theme_set_2']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #F5E9BE;
  border: 1px solid;
  border-color: #174C4F;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #174C4F;
  border-radius: 7px 7px 0 0;
  background-color: #174C4F;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #207178 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #207178;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #413659;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #167F39;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #167F39;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #FF9666;
 background: #1993fb;
 border-radius: 4px;
background-color: #FF9666;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(saltillo == $atts['theme_set_2']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FEFFC2;
  border: 1px solid;
  border-color: #7D2A35;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #7D2A35;
  border-radius: 7px 7px 0 0;
  background-color: #7D2A35;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #CC9258 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #CC9258;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #7D2A35;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #7D2A35;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #7D2A35;
}


/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #917A56;
 background: #B4BA6C;
 border-radius: 4px;
background-color: #B4BA6C;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}


/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(skyblue == $atts['theme_set_2']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #B4DCED;
  border: 1px solid;
  border-color: #3399CC;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #3399CC;
  border-radius: 7px 7px 0 0;
  background-color: #3399CC;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #67B8DE !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #67B8DE;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #3399CC;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #3399CC;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #3399CC;
}

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(granada == $atts['theme_set_2']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFEDBC;
  border: 1px solid;
  border-color: #57385C;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #57385C;
  border-radius: 7px 7px 0 0;
  background-color: #57385C;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #A75265 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #A75265;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #57385C;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #A75265;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #A75265;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #EC7263;
 background: #EC7263;
 border-radius: 4px;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}





/*  Multi-Page Form Progress Bar Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper { }

/*  Multi-Page Form Progress Bar Title  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gf_progressbar_wrapper .gf_progressbar_title {color: red}

/*  Multi-Page Form Progress Bar  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar { }

/*  Multi-Page Form Progress Bar – Percentage Completed  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage { }

/*  Multi-Page Form Steps Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps { }

/*  Multi-Page Form Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step {color: red}

/*  Multi-Page Form Active Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step_active {color: red}

/*  Multi-Page Form Page  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page { }

/* Multi-Page Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer { }

/*  Multi-Page Form – Next Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_next_button { }

/*  Multi-Page Form – Previous Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_previous_button { }

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(waterlime == $atts['theme_set_2']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFFFFF;
  border: 1px solid;
  border-color: #5C8A2D;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #5C8A2D;
  border-radius: 7px 7px 0 0;
  background-color: #5C8A2D;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: #5C8A2D;
border-bottom: 1px solid #AFD687 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #AFD687;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #5C8A2D;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #5C8A2D;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #5C8A2D;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #5C8A2D;
 background: #5C8A2D;
 border-radius: 4px;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}





/*  Multi-Page Form Progress Bar Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper { }

/*  Multi-Page Form Progress Bar Title  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gf_progressbar_wrapper .gf_progressbar_title {color: red}

/*  Multi-Page Form Progress Bar  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar { }

/*  Multi-Page Form Progress Bar – Percentage Completed  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage { }

/*  Multi-Page Form Steps Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps { }

/*  Multi-Page Form Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step {color: red}

/*  Multi-Page Form Active Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step_active {color: red}

/*  Multi-Page Form Page  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page { }

/* Multi-Page Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer { }

/*  Multi-Page Form – Next Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_next_button { }

/*  Multi-Page Form – Previous Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_previous_button { }

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(ocean == $atts['theme_set_2']){ ?>

<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #02A676;
  border: 1px solid;
  border-color: #003840;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #003840;
  border-radius: 7px 7px 0 0;
  background-color: #003840;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #005A5B !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #005A5B;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: white;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #007369;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #007369;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #007369;
 background: #007369;
 border-radius: 4px;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}





/*  Multi-Page Form Progress Bar Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper { }

/*  Multi-Page Form Progress Bar Title  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gf_progressbar_wrapper .gf_progressbar_title {color: red}

/*  Multi-Page Form Progress Bar  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar { }

/*  Multi-Page Form Progress Bar – Percentage Completed  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage { }

/*  Multi-Page Form Steps Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps { }

/*  Multi-Page Form Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step {color: red}

/*  Multi-Page Form Active Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step_active {color: red}

/*  Multi-Page Form Page  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page { }

/* Multi-Page Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer { }

/*  Multi-Page Form – Next Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_next_button { }

/*  Multi-Page Form – Previous Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_previous_button { }

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>

<?php if(prored == $atts['theme_set_2']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #FFFFFF;
  border: 1px solid;
  border-color: #F95759;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #F95759;
  border-radius: 7px 7px 0 0;
  background-color: #F95759;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #FDA099 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #FDA099;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #F95759;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #F95759;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #F95759;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #FDA099;
 background: #F95759;
 border-radius: 4px;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #1486f9 #0f7de9 #0d6acf;
 background: #1993fb;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}





/*  Multi-Page Form Progress Bar Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper { }

/*  Multi-Page Form Progress Bar Title  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gf_progressbar_wrapper .gf_progressbar_title {color: red}

/*  Multi-Page Form Progress Bar  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar { }

/*  Multi-Page Form Progress Bar – Percentage Completed  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage { }

/*  Multi-Page Form Steps Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps { }

/*  Multi-Page Form Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step {color: red}

/*  Multi-Page Form Active Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step_active {color: red}

/*  Multi-Page Form Page  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page { }

/* Multi-Page Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer { }

/*  Multi-Page Form – Next Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_next_button { }

/*  Multi-Page Form – Previous Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_previous_button { }

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}

<?php } ?>

<?php if(coffee == $atts['theme_set_2']){ ?>
<?php if(google == $atts['gft_fonts']){ ?>
@import url(http://fonts.googleapis.com/css?family=<?php echo implode(", ", (array)$atts['gft_font_name']); ?>);
<?php } ?>
/* Form Wrapper */
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> {
  background: #E7DEC0;
  border: 1px solid;
  border-color: #250701;
  border-radius: 7px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
  overflow: hidden;

}

/* Form Header */

/* Form Heading */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading {

}

/* Form Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_title {
  padding: 0 10px;
  line-height: 48px;
  font-size: 23px;
  color: white;
  border-bottom: 1px solid #250701;
  border-radius: 7px 7px 0 0;
  background-color: #250701;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 900;
  
 
}

/* Form Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_heading .gform_description {
padding: 10px;
font-size: 15px;
color: white;
border-bottom: 1px solid #6D4320 !important;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
text-align: left;
display: block;
width: 100%;
margin-bottom: 10px;
background-color: #6D4320;
}

/* Form Body */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body {
}

/* Form List Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields {}

/* Form List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield {}

/* Input Field Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_container {}

/* Input Description Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_description {}

/* Standard Field Label */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label {
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
margin: 10px;
color: #6D4320;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label:before{}

/* Required Field Indicator Asterisk */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_label .gfield_required {color: red}

/* Text Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=text] {
  padding: 0 7px;
  height: 32px;
  color: #525864;
  background: white;
  border: 1px solid;
  border-color: #b3c0e2 #bcc5e2 #c0ccea;
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, #f6f8fa, white);
  background-image: -moz-linear-gradient(top, #f6f8fa, white);
  background-image: -o-linear-gradient(top, #f6f8fa, white);
  background-image: linear-gradient(to bottom, #f6f8fa, white);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
  font-weight: 400;
  width: 96%;
  margin: 10px;
}

/* Drop Down Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield select {

padding: 0 7px;
height: 32px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
width: 100%;
width: 96%;
margin: 10px;
font-size: 15px;

}

/* Paragraph Text Area */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield textarea {
padding: 0 7px;
color: #525864;
background: white;
border: 1px solid;
border-color: #b3c0e2 #bcc5e2 #c0ccea;
border-radius: 4px;
background-image: -webkit-linear-gradient(top, #f6f8fa, white);
background-image: -moz-linear-gradient(top, #f6f8fa, white);
background-image: -o-linear-gradient(top, #f6f8fa, white);
background-image: linear-gradient(to bottom, #f6f8fa, white);
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
height: 100px;
width: 96%;
margin: 10px;
}

/* Multiple Choice Radio List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio {
margin: 10px !important;
}

/* Multiple Choice Radio List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li {}

/* Multiple Choice Radio Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
-webkit-border-radius: 2em; /* Make radios round */
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_radio li input[type=radio]:checked::after {
content:"●";
display:block;
height: 16px;
line-height: 15px;
font-size: 20px;
text-align: center;
color: #6D4320;
}

/* Checkbox List */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox {margin: 10px !important;
}

/* Checkbox List Items */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li {}

/* Checkbox Inputs */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox] {
border: 1px solid #c0c0c0;
margin: 0 0.1em 0 0;
padding: 0;
font-size: 16px;
line-height: 1em;
width: 1.25em;
height: 1.25em;
background: #fff;
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));

-webkit-appearance: none;
-webkit-border-radius: 0.25em;
vertical-align: text-top;
display: inline-block;
}

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_checkbox li input[type=checkbox]:checked::after {
content:"✔";
display:block;
text-align: center;
font-size: 16px;
height: 16px;
line-height: 18px;
color: #6D4320;
}


/*  Advanced Field (multi-field) Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex {}

/*  Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left {width: 50% !important;
}

/*  Sub-Label: Advanced Field – Left Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_left label {color: red}

/* Advanced Field Right Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right {}

/*  Sub-Label: Advanced Field – Right Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_right label {color: red}

/* Advanced Fields Full Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full {}

/*  Sub-Label: Advanced Field – Full Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .ginput_complex .ginput_full label {color: red}

/* Time- Hours Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour {}

/* Time- Hours Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour input {}

/*  Sub-Label: Time – Hours  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_hour label {color: red}

/* Time-Minutes Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute {}

/* Time-Minutes Input Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute input {}

/* Sub-label Time-Minutes Field */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_minute label {color: red}

/*  Time – AM/PM Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm { }

/*  Time – AM/PM Selector  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_time_ampm select { }

/*  Date – Input Field (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .datepicker { }

/*  Date – Icon Image (Datepicker Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_input_datepicker_icon { }

/*  Date – Month Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month { }

/*  Date – Month Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month input { }

/*  Sub-Label: Date – Month  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_month label {color: red}

/*  Date – Day Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day { }

/*  Date – Day Field Input  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day input { }

/*  Sub-Label: Date – Day  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_day label {color: red}

/*  Date – Year Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year { }

/*  Date – Year Input Field  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year input { }

/*  Sub-Label: Date – Year  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield .gfield_date_year label {color: red}

/*  Email Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=email] { }

/*  Telephone Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=tel] { }

/*  Website Input Field (HTML 5 Option)  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield input[type=url] { }

/* Section Break Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection {
background: #f3f6fa;
border: 1px solid;
border-color: #c2cadb #bbc5d6 #b7c0cd;
-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
margin: auto;
}

/* Section Break Title */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_title {
padding: 0 15px;
line-height: 38px;
font-size: 23px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
background: #eceff5;
border-bottom: 1px solid #c5ccdb;
background-image: -webkit-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -moz-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: -o-linear-gradient(top, #f5f8fb, #e9edf3);
background-image: linear-gradient(to bottom, #f5f8fb, #e9edf3);
-webkit-box-shadow: inset 0 1px white;
box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Section Break Description */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gsection .gsection_description {
padding: 15px;
line-height: 18px;
font-size: 15px;
color: #7f889e;
text-shadow: 0 1px rgba(255, 255, 255, 0.7);
border-bottom: 1px solid #c5ccdb;
-webkit-box-shadow: inset 0 1px white;
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
}

/* Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer {padding: 15px;}

/* Submit Button */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit] {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #6D4320;
 background: #6D4320;
 border-radius: 4px;
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;
display: block;
margin-left: auto;
margin-right: auto;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=submit]:hover {
width: 40%;
 height: 34px;
 padding: 0;
 font-weight: bold;
 color: white;
 text-align: center;
 text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.2);
 border: 1px solid;
 border-color: #6D4320;
 background: #6D4320;
 border-radius: 4px;
 background-image: -webkit-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -moz-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: -o-linear-gradient(top, #4cb1fe, #229afc 40%, #138df6);
 background-image: linear-gradient(to bottom, #4cb1fe, #229afc 40%, #138df6);
 -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.2);
font-family: <?php echo implode(", ", (array)$atts['gft_font_name']); ?>;
font-weight: 400;

}

/* Submit Button Image */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_footer input[type=image] { }

/* Inline Confirmation Message */

body #gforms_confirmation_message  { }

/* Validation Error Message */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .validation_error {
text-align: center;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
margin-bottom: 10px;
margin-top: 10px;
}

/* Validation Error Container */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error {
 }

/*  Validation – Error Description Message  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message {
border-radius: 10px;
background-color: #F8E0E2;
color: #DA3C4D;
border: 1px solid #DA3C4D;
width: 96%;
margin: 10px;
}
body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_fields .gfield_error .validation_message::before {
    content: "\25B2"; /* left point triangle in escaped unicode */
    color:#d45252;
    margin-bottom: 10px;
    width: 96%;
}





/*  Multi-Page Form Progress Bar Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper { }

/*  Multi-Page Form Progress Bar Title  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gf_progressbar_wrapper .gf_progressbar_title {color: red}

/*  Multi-Page Form Progress Bar  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar { }

/*  Multi-Page Form Progress Bar – Percentage Completed  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_progressbar_wrapper .gf_progressbar .gf_progressbar_percentage { }

/*  Multi-Page Form Steps Container  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps { }

/*  Multi-Page Form Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step {color: red}

/*  Multi-Page Form Active Step  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gf_page_steps .gf_step_active {color: red}

/*  Multi-Page Form Page  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page { }

/* Multi-Page Form Footer */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer { }

/*  Multi-Page Form – Next Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_next_button { }

/*  Multi-Page Form – Previous Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_previous_button { }

/*  Multi-Page Form – Submit Button  */

body #gform_wrapper_<?php echo implode(", ", (array)$atts['gft_id']); ?> .gform_body .gform_page_footer .gform_button {padding: 15px;}

body .gform_wrapper form .gform_body ul,
body .gform_wrapper form .gform_body ul li { 
    list-style-type: none !important; 
    list-style-image: none !important;
    list-style: none !important; 
    background-image: none !important;
    background: none !important;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important
}
body .gform_wrapper form .gform_body ul > li:before {
    content: "";
}


<?php } ?>