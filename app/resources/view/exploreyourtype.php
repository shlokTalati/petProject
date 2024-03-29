<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Preference Questionnaire</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="radio"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #ff6e01;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 15px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e55e00;
        }

        .result {
            text-align: center;
            margin-top: 20px;
            display: none;
        }

        .result p {
            font-weight: bold;
            color: #333;
            font-size: 18px;
        }

        header {
            background-color: #ff6e01;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Pet Preference Questionnaire</h1>
        </header>
        <form id="petForm">

            <div class="question">
                <label for="size">1. What size of pet are you interested in?</label>
                <div class="radio-options">
                    <input type="radio" id="sizeSmall" name="size" value="small"> <label for="sizeSmall">Small</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="sizeMedium" name="size" value="medium"> <label for="sizeMedium">Medium</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="sizeLarge" name="size" value="large"> <label for="sizeLarge">Large</label>
                </div>
            </div>

            <div class="question">
                <label for="attention">2. Do you prefer pets that require a lot of attention and interaction?</label>
                <div class="radio-options">
                    <input type="radio" id="attentionYes" name="attention" value="yes"> <label for="attentionYes">Yes</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="attentionNo" name="attention" value="no"> <label for="attentionNo">No</label>
                </div>
            </div>

            <div class="question">
                <label for="space">3. How much space do you have for a pet?</label>
                <select id="space" name="space">
                    <option value="small">Small (Apartment/Condo)</option>
                    <option value="medium">Medium (House with yard)</option>
                    <option value="large">Large (Farm/Large Property)</option>
                </select>
            </div>

            <div class="question">
                <label for="activity">4. What is your activity level?</label>
                <div class="radio-options">
                    <input type="radio" id="activityLow" name="activity" value="low"> <label for="activityLow">Low</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="activityMedium" name="activity" value="medium"> <label for="activityMedium">Medium</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="activityHigh" name="activity" value="high"> <label for="activityHigh">High</label>
                </div>
            </div>

            <div class="question">
                <label for="preferences">5. Do you have any specific preferences or restrictions?</label>
                <textarea id="preferences" name="preferences" rows="4" cols="50"></textarea>
            </div>

            <div class="question">
                <label for="allergy">6. Are you allergic to any specific animals?</label>
                <div class="radio-options">
                    <input type="radio" id="allergyYes" name="allergy" value="yes"> <label for="allergyYes">Yes</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="allergyNo" name="allergy" value="no"> <label for="allergyNo">No</label>
                </div>
            </div>

            <div class="question">
                <label for="time">7. How much time can you dedicate to pet care daily?</label>
                <div class="radio-options">
                    <input type="radio" id="timeLow" name="time" value="low"> <label for="timeLow">1-2 hours</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="timeMedium" name="time" value="medium"> <label for="timeMedium">2-4 hours</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="timeHigh" name="time" value="high"> <label for="timeHigh">More than 4 hours</label>
                </div>
            </div>

            <div class="question">
                <label for="training">8. Are you willing to train your pet?</label>
                <div class="radio-options">
                    <input type="radio" id="trainingYes" name="training" value="yes"> <label for="trainingYes">Yes</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="trainingNo" name="training" value="no"> <label for="trainingNo">No</label>
                </div>
            </div>

            <div class="question">
                <label for="otherPets">9. Do you have other pets in your household?</label>
                <div class="radio-options">
                    <input type="radio" id="otherPetsYes" name="otherPets" value="yes"> <label for="otherPetsYes">Yes</label>
                </div>
                <div class="radio-options">
                    <input type="radio" id="otherPetsNo" name="otherPets" value="no"> <label for="otherPetsNo">No</label>
                </div>
            </div>

            <input type="submit" value="Submit">
        </form>
        <div class="result" id="result">
            <p id="petResult"></p>
        </div>
    </div>

    <script>
        document.getElementById('petForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Retrieve user selections
            var size = document.querySelector('input[name="size"]:checked').value;
            var attention = document.querySelector('input[name="attention"]:checked').value;
            var space = document.querySelector('select[name="space"]').value;
            var activity = document.querySelector('input[name="activity"]:checked').value;
            var preferences = document.querySelector('textarea[name="preferences"]').value;
            var allergy = document.querySelector('input[name="allergy"]:checked').value;
            var time = document.querySelector('input[name="time"]:checked').value;
            var training = document.querySelector('input[name="training"]:checked').value;
            var otherPets = document.querySelector('input[name="otherPets"]:checked').value;

            // Determine pet type based on selections
            var petType = '';

            // Example logic, you can customize based on your requirements
            if (size === 'small' && attention === 'yes' && space === 'small' && activity === 'high' && allergy === 'no' && time === 'high' && training === 'yes' && otherPets === 'no') {
                petType = 'Dog';
            } else if (size === 'small' && attention === 'no' && space === 'small' && activity === 'low' && allergy === 'no' && time === 'low' && training === 'no' && otherPets === 'yes') {
                petType = 'Cat';
            } else if (size === 'medium' && attention === 'yes' && space === 'medium' && activity === 'high' && allergy === 'no' && time === 'medium' && training === 'yes' && otherPets === 'no') {
                petType = 'Horse';
            } else if (size === 'large' && attention === 'yes' && space === 'large' && activity === 'high' && allergy === 'no' && time === 'high' && training === 'no' && otherPets === 'no') {
                petType = 'Cow';
            } else if (size === 'small' && attention === 'yes' && space === 'small' && activity === 'high' && allergy === 'no' && time === 'high' && training === 'yes' && otherPets === 'yes') {
                petType = 'Rabbit';
            } else if (size === 'medium' && attention === 'no' && space === 'medium' && activity === 'low' && allergy === 'yes' && time === 'high' && training === 'yes' && otherPets === 'no') {
                petType = 'Bird';
            } else if (size === 'large' && attention === 'yes' && space === 'large' && activity === 'high' && allergy === 'no' && time === 'high' && training === 'yes' && otherPets === 'yes') {
                petType = 'Goat';
            } else if (size === 'medium' && attention === 'yes' && space === 'medium' && activity === 'low' && allergy === 'yes' && time === 'low' && training === 'no' && otherPets === 'yes') {
                petType = 'Ferret';
            } else {
                petType = 'Any other pet';
            }


            // Display result in a decorated alert
            document.getElementById('petResult').textContent = 'Based on your preferences, you would like to have a ' + petType + '!';
            document.getElementById('result').style.display = 'block';
        });
    </script>
</body>

</html>