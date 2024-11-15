<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiClock</title>
    <style>
        .clock {
            font-size: 60px;
            font-family: 'Times New Roman';
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="clock" id="digiClock"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateClockfunction() {
                let now = new Date();
                let hours = now.getHours().toString().padStart(2, '0');
                let minutes = now.getMinutes().toString().padStart(2, '0');
                let seconds = now.getSeconds().toString().padStart(2, '0');
                let timeString = `${hours}:${minutes}:${seconds}`;
                $('#digiClock').text(timeString);
            }

            setInterval(updateClockfunction, 1000);
            updateClockfunction(); 
        });
    </script>
</body>
</html>
