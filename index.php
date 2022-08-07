<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Coexstar: Registration Form</title>
    <meta name="description" content="Coexstar: Registration Form" />
    <meta name="keywords" content="Coexstar" />


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
    <link rel="stylesheet" type="text/css" href="css/switch.css" />

    <script src="js/modernizr.custom.js"></script>
</head>

<body>
    <div id="particles-js" class="container">
        <div class="fs-form-wrap" id="fs-form-wrap">
            <div class="fs-title">
                <img src="./img/coexstar_logo.png" width="300" />
                <h1>Registration Form</h1>
            </div>
            <form id="rsvpForm" class="fs-form fs-form-full" autocomplete="off">
                <ol class="fs-fields">
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="q1">Full Name</label>
                        <input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="John Doe" required />
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="q2"
                            data-info="We won't send you spam, we promise...">Email Address</label>
                        <input class="fs-anim-lower" id="q2" name="q2" type="email" placeholder="johndoe@coex.ph"
                            required />
                    </li>
                    <li>
                        <div id="phone"></div>
                        <label class="fs-field-label fs-anim-upper" for="q3">Contact Number</label>
                        <input class="fs-mark fs-anim-lower" id="q3" name="q3" type="number"
                            placeholder="02 7980 8988" />
                        <div id="phone_error" class="error hidden">
                            Please enter a valid phone number
                        </div>
                    </li>
                    <li>
                        <label class="fs-field-label fs-anim-upper" for="q4">Company/Affiliation</label>
                        <input class="fs-anim-lower" id="q4" name="q4" type="text" placeholder="Coexstar" required />
                    </li>

                    <li>
                        <label class="fs-field-label fs-anim-upper" for="q5">City/Province Address</label>
                        <input class="fs-anim-lower" id="q5" name="q5" type="text" placeholder="Taguig City, NCR"
                            required />
                    </li>
                    <li data-input-trigger>
                        <label class="fs-field-label fs-anim-upper" for="q6"
                            data-info="This will help us know what kind of service you need">Will you attend the
                            Coexstar Relaunch?</label>
                        <div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
                            <ul class="details">
                                <li>Date: August 27, 2022</li>
                                <li>Venue: Bonifacio High Street Amphitheater</li>
                                <li>Time: 10am to 8pm</li>
                            </ul>
                            <span><input id="q6b" name="q6" type="radio" value="yes" required />
                                <label for="q6b" class="radio-yes">Yes</label></span>
                            <span><input id="q6c" name="q6" type="radio" value="no" /><label for="q6c"
                                    class="radio-no">No</label></span>
                            <span><input id="q6a" name="q6" type="radio" value="maybe" /><label for="q6a"
                                    class="radio-maybe">Maybe</label></span>
                        </div>
                    </li>

                    <li>
                        <input class="fs-anim-lower switch" id="q7" name="q7" type="checkbox" required />
                        <label class="fs-field-label fs-anim-upper" for="q7"> I have read and agree to the</label><a
                            class="privacy_link" href="privacy.php" target="_blank">Privacy
                            Policy</a>
                    </li>
                </ol>
                <!-- /fs-fields -->
                <button class="fs-submit" onclick="save()" type="submit">Send answers</button>
            </form>
            <!-- /fs-form -->
        </div>
        <!-- /fs-form-wrap -->
    </div>
    <!-- /container -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script src="js/fullscreenForm.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="js/save.js"></script>
    <script>
    (function() {
        var formWrap = document.getElementById("fs-form-wrap");

        [].slice
            .call(document.querySelectorAll("select.cs-select"))
            .forEach(function(el) {
                new SelectFx(el, {
                    stickyPlaceholder: false,
                    onChange: function(val) {
                        document.querySelector(
                            "span.cs-placeholder"
                        ).style.backgroundColor = val;
                    },
                });
            });

        new FForm(formWrap, {
            onReview: function() {
                classie.add(document.body, "overview"); // for demo purposes only
            },
        });
    })();
    </script>
</body>

</html>